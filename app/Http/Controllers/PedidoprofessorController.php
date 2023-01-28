<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PedidoProfessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Mail\RespostaPedidoRecusado;
use App\Mail\RespostaPedidoAceite;
use Illuminate\Support\Facades\Mail;

class PedidoprofessorController extends Controller
{
    public function index()
    {
        $pedidos = PedidoProfessor::all();
        $quantidade = $pedidos->where('estado_do_pedido', 'pendente')->count();
        /* dd($quantidade); */
        return view('admin.pedprof.pedprof', compact('pedidos'), compact('quantidade'));
    }

    public function create()
    {
        return view('professor');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'primeiro' => 'required',
                'apelido' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
                'data_nac' => 'required',
                'modalidade' => 'required',
                'cv' => 'required',
            ],
            [
                'primeiro.required' => 'Preencha o campo do NOME',
                'apelido.required' => 'Preencha o campo do APELIDO',
                'email.required' => 'Preencha o campo do EMAIL',
                'telefone.required' => 'Preencha o campo do TELEFONE',
                'data_nac.required' => 'Preencha o campo do DATA DE NASCIMENTO',
                'modalidade.required' => 'Preencha o campo do MODALIDADE',
                'cv.required' => 'Manda-nos o teu CV'
            ]
        );

        $namefile = $request->primeiro . $request->apelido . '.' . $request->cv->extension();

        $request->cv->storeAS('pedidoProf', $namefile);

        PedidoProfessor::create([
            'primeiro' => $request->primeiro,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'data_nac' => $request->data_nac,
            'modalidade' => $request->modalidade,
            'cv' => $namefile,
        ]);

        return redirect('professor')->with('success_pedprof', true);
    }

    public function download($file)
    {
        return response()->download(storage_path('app/public/pedidoProf/' . $file));
    }

    public function show(PedidoProfessor $pedidos)
    {
        return view('admin.pedprof.pedprof_show', ['pedidos' => $pedidos]);
    }

    public function edit(PedidoProfessor $pedidos)
    {
        return view('admin.pedprof.pedprof_edit', ['pedidos' => $pedidos]);
    }

    public function update(Request $request, PedidoProfessor $pedidos)
    {
        $request->validate(
            [
                'resposta' => 'required',
                'estado' => 'required',
            ],
            [
                'resposta.required' => 'Para atualizar este pedido tem de dar uma RESPOSTA ao mesmo',
                'estado.required' => 'Não se esqueça de aceitar ou rejeitar o pedido'
            ]
        );

        $pedidos->update([
            'primeiro' => $request->primeiro,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cv' => $request->cv,
            'data_nac' => $request->data_nac,
            'modalidade' => $request->modalidade,
            'resposta' => $request->resposta,
            'estado_do_pedido' => $request->estado,
        ]);

        if ($request->estado === 'aceite') {
            Mail::to($request->email)->send(new RespostaPedidoAceite($pedidos));
        } else if ($request->estado === 'recusado') {
            Mail::to($request->email)->send(new RespostaPedidoRecusado($pedidos));
        }

        return redirect('admin/pedprof');
    }

    public function archive()
    {
        $arquivados = PedidoProfessor::onlyTrashed()
            ->orderBy('id', 'desc')->get();

        return view('admin.pedprof.pedprof_archive', compact('arquivados'));
    }

    public function delete(PedidoProfessor $pedidos, Request $request)
    {
        $pedidos = PedidoProfessor::find($request->pedprof_delete_id);
        $pedidos->delete();
        return redirect()->route('pedidosprof', compact($pedidos));
    }

    public function restore($id)
    {
        /* PedidoProfessor::whereId($id)->restore(); */
        PedidoProfessor::withTrashed()->find($id)->restore();
        return back();
    }
}
