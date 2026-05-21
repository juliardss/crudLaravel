<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    // LISTAR
    public function index()
    {
        $rows = Aluno::all();

        return view('admin.alunos.index', compact('rows'));
    }

    // ABRIR FORM ADICIONAR
    public function adicionar()
    {
        $cursos = Curso::all();

        return view(
            'admin.alunos.adicionar',
            compact('cursos')
        );
    }

    // SALVAR
    public function salvar(Request $request)
    {
        $dados = $request->all();

        Aluno::create($dados);

        return redirect()->route('admin.alunos');
    }

    // ABRIR FORM EDITAR
    public function editar($id)
    {
        $row = Aluno::find($id);

        $cursos = Curso::all();

        return view(
            'admin.alunos.editar',
            compact('row', 'cursos')
        );
    }
    // ATUALIZAR
    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();

        Aluno::find($id)->update($dados);

        return redirect()->route('admin.alunos');
    }

    // EXCLUIR
    public function excluir($id)
    {
        Aluno::find($id)->delete();

        return redirect()->route('admin.alunos');
    }
}