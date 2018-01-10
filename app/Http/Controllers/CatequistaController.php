<?php

namespace App\Http\Controllers;

use App\Catequista;
use DB;

class CatequistaController extends Controller
{
    //
    public function getIndex(){

        $html = '<h1>Listagem de catequistas com Laravel</h1>';

        $html .= '<ul>';

        $catequistas = Catequista::all();

        foreach ($catequistas as $p) {
            $html .= '<li> Nome: '. $p->nome .', Endereço: '. $p->endereco .'</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}
