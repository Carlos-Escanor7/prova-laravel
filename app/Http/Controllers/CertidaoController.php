<?php

namespace App\Http\Controllers;

use App\Certidao;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    public function indexCertidao(Request $r)
    {
        $certidoes = Certidao::all();

        return view('certidao.index',compact('certidoes'));
    }

    public function adicionarCertidao()
    {
        return view('certidao.adicionar');
    }

    public function salvarCertidao(Request $r)
    {
        $certidao = $r->all();
        Certidao::create($certidao);

        return redirect()->route('prova.certidao');
    }

    public function editarCertidao($id)
    {
        $certidao = Certidao::find($id);
        return view('certidao.editar', compact('certidao'));
    }

    public function atualizarCertidao(Request $r, $id)
    {
        $certidao = $r->all();

        $CertidaoSelecionada = Certidao::find($id);
        $CertidaoSelecionada->update($certidao);

        return redirect()->route('prova.certidao');
    }

    public function deletarCertidao(Request $r, $id)
    {
        $certidao = Certidao::find($id);
        $certidao->delete();

        return redirect()->route('prova.certidao');
    }
}
