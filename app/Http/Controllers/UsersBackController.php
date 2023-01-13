<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\Modalidade;
use Illuminate\Support\Facades\Hash;

class UsersBackController extends Controller
{

    public function index()
    {
        Paginator::useBootstrap();

        $users = User::leftjoin('users_modalidades', 'users_modalidades.user_id', '=', 'users.id')
            ->leftjoin('modalidades', 'modalidades.id', '=', 'users_modalidades.modalidade_id')
            ->orderBy('id', 'ASC')
            ->select(['users.*', 'modalidades.modalidade'])
            ->paginate(10);

        return view('admin.users', compact('users'));
    }
    public function create(){
        $modalidade = Modalidade::all();
        $users = User::all();
        return view('admin.users_create', compact('modalidade'), compact('users'));
    }
    public function store(Request $request)
    {
  
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
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/professores/', $filename);
            $user->foto = $filename;
        }
        $user->save();

        return redirect()->back()->with('status','Utilizador adicionado com sucesso.');
    }
    public function edit($id)
    {
        $modalidade = Modalidade::all();
        $user = User::find($id);
        return view('admin.user_edit', compact('user'), compact('modalidade'));
    }
    public function update(Request $request, $id)
    {
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
        if($request->hasfile('foto'))
        {
            $destination = 'storage/professores/'.$user->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/professores/', $filename);
            $user->foto = $filename;
        }

        $user->update();
        return redirect()->back()->with('status','User editado com sucesso.');
    }
    public function destroy(Request $request)
    {
        $user = User::find($request->id_user);
        if($user){
         $destination = 'storage/professores/'.$user->foto;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $user->delete();
        return redirect('admin/users')->with('status','Utilizador apagado com sucesso.');
        }else{
            return redirect('admin/users')->with('status','Utilizador não apagado.');  
        }
        
    }

}
