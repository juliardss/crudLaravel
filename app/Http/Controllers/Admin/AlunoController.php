<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $rows = Aluno::all();

        return view('admin.alunos.index', compact('rows'));
    }

    public function adicionar()
    {
        $cursos = Curso::all();

        return view('admin.alunos.adicionar', compact('cursos'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file('arquivo');
            $nome = time() . '.' . $arquivo->extension();
            $arquivo->move(public_path('img'), $nome);
            $dados['imagem'] = 'img/' . $nome;
        }

        Aluno::create($dados);

        return redirect()->route('admin.alunos');
    }

    public function editar($id)
    {
        $linha = Aluno::find($id);

        $cursos = Curso::all();

        return view(
            'admin.alunos.editar',
            compact('linha', 'cursos')
        );
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();

        if ($request->hasFile('arquivo')) {

            $arquivo = $request->file('arquivo');

            $nome = time() . '.' . $arquivo->extension();

            $arquivo->move(public_path('img'), $nome);

            $dados['imagem'] = 'img/' . $nome;
        }

        Aluno::find($id)->update($dados);

        return redirect()->route('admin.alunos');
    }

    public function excluir($id)
    {
        Aluno::find($id)->delete();

        return redirect()->route('admin.alunos');
    }
}