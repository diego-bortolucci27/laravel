<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //echo 'A soma de ' . $p1 . ' + ' . $p2 . ' é: '.($p1+$p2);

        //return view('site.teste', ['x' => $p1, 'y' => $p2]); // Array Associativo, que será enviado para a View e lá receberá as variáveis x e y com os valores das variavéis $p1 e $p2

        return view('site.teste', compact('p1', 'p2')); // Compact, é praticamente i mesmo do Array Associativo, na prática ele irá fazer o mesmo, a diferença é que você irá colocar de outra forma.

        //return view('site.teste')->with('p1', $p1)->with('p2', $p2); // Outra forma de passar os parâmetros, utilizando o With


    }
}
