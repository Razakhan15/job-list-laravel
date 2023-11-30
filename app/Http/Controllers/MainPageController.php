<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function main() {
        return view('mainPage.main');
    }
}
