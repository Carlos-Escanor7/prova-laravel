<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    // protected $classe;
    // public function index(Request $r)
    // {
    //     $tabelioes = Tabeliao::all();

    //     return view('cartorio.index',compact('tabelioes'));
    // }

    // public function adicionar()
    // {
    //     return view('cartorio.adicionar');
    // }

    // public function salvar(Request $r)
    // {
    //     $tabeliao = $r->all();
    //     Tabeliao::create($tabeliao);

    //     return redirect()->route('prova');
    // }

    // public function editar($id)
    // {
    //     $tabeliao = Tabeliao::find($id);
    //     return view('cartorio.editar', compact('tabeliao'));
    // }

    // public function atualizar(Request $r, $id)
    // {
    //     $tabeliao = $r->all();

    //     $tabeliaoSelecionado = Tabeliao::find($id);
    //     $tabeliaoSelecionado->update($tabeliao);

    //     return redirect()->route('prova');
    // }

    // public function deletar(Request $r, $id)
    // {
    //     $tabeliao = Tabeliao::find($id);
    //     $tabeliao->delete();

    //     return redirect()->route('prova');
    // }
}
