<?php
/**
 * Created by PhpStorm.
 * User: familianeil
 * Date: 12/27/19
 * Time: 22:27
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}
