<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        if($request->hasFile('arquivo')){
            $arquivo = $request->file('arquivo');
            $nome = time().'.'.$arquivo->extension();
            $arquivo->move(public_path('img'), $nome);
            $dados['imagem'] = 'img/'.$nome;
        }
        $dados['publicado'] =
            isset($dados['publicado']) ? 'sim' : 'não';
        Curso::create($dados);
        return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
         $linha = Curso::find($id);

        return view('admin.cursos.editar', compact('linha'));
    }

    public function atualizar(Request $request, $id)
{
    $dados = $request->all();

    if($request->hasFile('arquivo')){

        $arquivo = $request->file('arquivo');

        $nome = time().'.'.$arquivo->extension();

        $arquivo->move(public_path('img'), $nome);

        $dados['imagem'] = 'img/'.$nome;
    }

        $dados['publicado'] =
            isset($dados['publicado']) ? 'sim' : 'não';

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function excluir($id)
    {
        Curso::find($id)->delete();

        return redirect()->route('admin.cursos');
    }
}