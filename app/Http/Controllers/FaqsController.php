<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = faq::all();
        return view ('faqs.index')->with('faqs', $faqs);
    }
 
    
    public function create()
    {
        return view('faqs.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->validate([
            'nome' => 'required',
            'data' => 'required|date',
            'localizacao' => 'required',
            'foto' => 'sometimes',
            'descricao' => 'required',
        ],
        [
            'nome.required' => 'Preencha o campo do Nome',
            'data.required' => 'Adicione uma data',
            'localizacao.required' => 'Adicione uma localizacao',
            'descricao.required' => 'Adicione uma descrição'
        ]);
        
        /*cria todos a informacao escrita*/
        $faq = faq::create($input);


       /*redireciona para o index após adicionar com a flash message*/ 
       return redirect('faq')->with('flash_message', 'faq Adicionado!');  
    }
 
    
    public function show($id)
    {
        $faq = faq::find($id);
        return view('faqs.show')->with('faqs', $faq);
    }
 
    
    public function edit($id)
    {
        $faq = faq::find($id);
        return view('faqs.edit')->with('faqs', $faq);
    }
 
  
    public function update(Request $request, $id)
    {
        $faq = faq::find($id);
        $input = $request->all();
        $faq->update($input);
        return redirect('faq')->with('flash_message', 'faq Atualizado!');  
    }
 
   
    public function destroy($id)
    {
        faq::destroy($id);
        return redirect('faq')->with('flash_message', 'faq eliminado!');  
    }
}
