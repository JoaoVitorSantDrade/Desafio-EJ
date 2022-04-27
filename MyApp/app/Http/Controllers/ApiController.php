<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getName() {
    $response = Http::get('https://randomuser.me/api/?inc=name');
    $name = json_decode($response,true);
    $string = $name['results'][0]['name']['first'] .' '. $name['results'][0]['name']['last'];
    return $string;
    }
}
