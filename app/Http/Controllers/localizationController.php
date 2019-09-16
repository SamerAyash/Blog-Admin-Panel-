<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localizationController extends Controller
{
    public function change($lang='en'){
        session()->put('local',$lang);
        return redirect()->back();
    }
}
