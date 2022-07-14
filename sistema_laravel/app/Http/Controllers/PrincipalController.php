<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller // Aqui no Controller é onde ficaram as ações, os métodos das Routes.
{
    public function principal()
    {
        return view('site.principal'); // Aqui é inserida a view que criamos, nela está o codigo HTML que será exibida, portanto é necessário apenas colocar: return view('nome da pasta que está dentro de views e o nome do arquivo sem o .blade.php pois o freamework ja entende').
    }
}
