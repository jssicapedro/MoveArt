<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\Modalidade;
use App\Models\UserModalidade;
use Illuminate\Support\Facades\Hash;

class UsersBackController extends Controller
{

    public function index(Request $request)
    {
        Paginator::useBootstrap();
        $search = $request->search;
        $users = User::where(function ($query) use ($search) {
            if ($search) {
                $query->where('email', $search);
                $query->orWhere('primeiro', 'LIKE', "%$search%");
                $query->orWhere('apelido', 'LIKE', "%$search%");
            }
        })->leftjoin('users_modalidades', 'users_modalidades.user_id', '=', 'users.id')
            ->leftjoin('modalidades', 'modalidades.id', '=', 'users_modalidades.modalidade_id')
            ->orderBy('id', 'ASC')
            ->select(['users.*', 'modalidades.modalidade'])
            ->paginate(10);

        return view('admin.users', compact('users'));
    }

    public function create()
    {
        $modalidade = Modalidade::all();
        $users = User::all();
        return view('admin.users_create', compact('modalidade'), compact('users'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [

                'primeiro' => 'required|regex:/^[a-zA-Z]+$/u',
                'apelido' => 'required|regex:/^[a-zA-Z]+$/u',
                'email' => 'required|email|unique:users',
                'data_nasc' => 'required',
                'genero' => 'required',
                'perfil' => 'required',
                'password' => 'required|confirmed|min:6',
                'telefone' => 'required|digits:9',
                'cc' => 'nullable|digits:9|unique:users',
                'nif' => 'nullable|digits:9',
                'localidade' => 'nullable|min:3|max:1000',
                'modalidade_id'=> 'required',
            ],
            [
                'primeiro.required' => 'Campo obrigatório',
                'primeiro.regex' => 'Nome inválido',
                'apelido.required' => 'Campo obrigatório',
                'apelido.regex' => 'Apelido inválido',
                'email.required' => 'Campo obrigatório',
                'email.email' => 'Email inválido',
                'email.unique' => 'Email utilizado por outra conta',
                'data_nasc.required' => 'Campo obrigatório',
                'genero.required' => 'Campo obrigatório',
                'perfil.required' => 'Campo obrigatório',
                'password.required' => 'Campo obrigatório',
                'password.confirmed' => 'A Confirmação da password não corresponde',
                'password.min' => 'Password demasiado pequena',
                'telefone.required' => 'Campo obrigatório',
                'telefone.digits' => 'Número de telefone inválido',
                'cc.digits' => 'CC inválido',
                'cc.unique' => 'CC utilizado por outra conta',
                'nif.digits' => 'Nif inválido',
                'modalidade_id.required' => 'Campo obrigatório',
            ]
        );


        $user = new User();
        $user->primeiro = $request->input('primeiro');
        $user->apelido = $request->input('apelido');
        $user->email = $request->input('email');
        $user->data_nasc = $request->input('data_nasc');
        $user->cc = $request->input('cc');
        $user->nif = $request->input('nif');
        $user->genero = $request->input('genero');
        $user->perfil = $request->input('perfil');
        $user->password = Hash::make($request->password);
        $user->telefone = $request->input('telefone');
        $user->localidade = $request->input('localidade');
        $user->rua = $request->input('rua');
        $user->cod_postal = $request->input('cod_postal');
        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage/users/', $filename);
            $user->foto = $filename;
        }
        $user->save();

       
        $mod = new UserModalidade();
        $mod->modalidade_id = $request->input('modalidade_id');
        $mod->user_id = $user->id;
        $mod->save();

        return redirect()->back()->with('status', 'Utilizador adicionado com sucesso.');
    }
    public function edit($id)
    {

        $user = User::find($id);
        $modalidade = Modalidade::all();

        return view('admin.user_edit', compact('modalidade', 'user'));
    }
    public function update(Request $request, $id)
    {

        $request->validate(
            [

                'primeiro' => 'required|regex:/^[a-zA-Z]+$/u',
                'apelido' => 'required|regex:/^[a-zA-Z]+$/u',
                'email' => 'required|email',
                'data_nasc' => 'required',
                'genero' => 'required',
                'perfil' => 'required',
                'password' => 'nullable|confirmed|min:6',
                'telefone' => 'required|digits:9',
                'cc' => 'nullable|digits:9|unique:users',
                'nif' => 'nullable|digits:9',
                'localidade' => 'nullable|min:3|max:1000',
                'modalidade_id'=> 'nullable',
            ],
            [
                'primeiro.required' => 'Campo obrigatório',
                'primeiro.regex' => 'Nome inválido',
                'apelido.required' => 'Campo obrigatório',
                'apelido.regex' => 'Apelido inválido',
                'email.required' => 'Campo obrigatório',
                'email.email' => 'Email inválido',
                'data_nasc.required' => 'Campo obrigatório',
                'genero.required' => 'Campo obrigatório',
                'perfil.required' => 'Campo obrigatório',
                'password.confirmed' => 'A Confirmação da password não corresponde',
                'password.min' => 'Password demasiado pequena',
                'telefone.required' => 'Campo obrigatório',
                'telefone.digits' => 'Número de telefone inválido',
                'cc.digits' => 'CC inválido',
                'cc.unique' => 'CC utilizado por outra conta',
                'nif.digits' => 'Nif inválido',

            ]
        );


        $user = User::find($id);
        $user->primeiro = $request->input('primeiro');
        $user->apelido = $request->input('apelido');
        $user->email = $request->input('email');
        $user->data_nasc = $request->input('data_nasc');
        $user->cc = $request->input('cc');
        $user->nif = $request->input('nif');
        $user->genero = $request->input('genero');
        $user->perfil = $request->input('perfil');
        $user->password = Hash::make($request->password);
        $user->telefone = $request->input('telefone');
        $user->localidade = $request->input('localidade');
        $user->rua = $request->input('rua');
        $user->cod_postal = $request->input('cod_postal');
        if ($request->hasfile('foto')) {
            $destination = 'storage/users/' . $user->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage/users/', $filename);
            $user->foto = $filename;
        }
        $user->modalidade()->sync($request['modalidade_id']);
        $user->update();


        return redirect()->back()->with('status', 'User editado com sucesso.');
    }
    public function destroy(Request $request)
    {
        $user = User::find($request->id_user);
        if ($user) {
            $destination = 'storage/users/' . $user->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $user->deletemodalidade()->delete();
            $user->delete();

            return redirect('admin/users')->with('status', 'Utilizador apagado com sucesso.');
        } else {
            return redirect('admin/users')->with('status', 'Utilizador não apagado.');
        }
    }
}
