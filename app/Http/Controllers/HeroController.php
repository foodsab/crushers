<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function __invoke() {
        return view('heroes');
    }

    public function create() {
        return 'Creating page';
    }

}
