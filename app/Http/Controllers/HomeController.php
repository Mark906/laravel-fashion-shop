<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;
class HomeController extends Controller
{
    public function index(){
        $all_product = Dress::all();
        $data = [
            'testo' => 'Questa è la homepage.'
            'dresses' => $all_product
        ];
        return view('home', $data);
    }

    public function _prodotti(){
        $data = [
            'testo' => 'Questa è la pagina prodotti.'
        ];
        return view('prodotti', $data);
    }
}
