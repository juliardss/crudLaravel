<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso; 

class CursoController extends Controller
{
    // 1. LISTAR CURSOS
    public function index() {
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }

    
    public function adicionar() {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request) {
    
    
    $dados = $request->all();

    $dados['publicado'] = isset($dados['publicado']) ? 'sim' : 'nao';

    
    Curso::create($dados); 
    
   
    return redirect()->route('admin.cursos');
}

    
    public function editar($id) {
        
        
        $row = Curso::find($id); 

        return view('admin.cursos.editar', compact('row'));
    }

   
    public function atualizar(Request $request, $id) {
        $dados = $request->all();
        $dados['publicado'] = isset($dados['publicado']) ? 'sim' : 'nao';

        
        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    
    public function excluir($id) {

        
        Curso::find($id)->delete();

        return redirect()->route('admin.cursos');
    }
}