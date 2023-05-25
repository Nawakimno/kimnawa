<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function testblade()
    {

        $name="OHOY";
        return view('test.test', array("name"=>$name));
    }
    //
}
