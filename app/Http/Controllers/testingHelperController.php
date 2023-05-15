<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helpers;

class testingHelperController extends Controller
{
    function index(){
        Helpers::test('Tasya');
    }
}
