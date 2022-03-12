<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Pegar os dados da API pelo Cep informado
        $getEndereco = file_get_contents('https://viacep.com.br/ws/'.$request->input('cep').'/json/');
        $endereco =  json_decode($getEndereco, true);

        $request->merge(['endereco' => $endereco['localidade'].','.$endereco['bairro'].','.$endereco['uf']]);

        $dados = $request->all();

        $dados = Contato::create($dados);

        //var_dump($dados);exit;

        return redirect('listar');
    }

    public function show()
    {
        $dados = Contato::all();

        return view('listar', [
            'dados' => $dados
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Contato::destroy($id);

        return redirect('listar');
    }
}
