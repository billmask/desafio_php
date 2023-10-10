<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Http\Request as HttpRequest;
use Mpdf\Http\Response;

class ApiControllerGet extends Controller
{
    public function myget($name, Request $request) {
        return response()->json([
            "answer"=>"OK",
            "value"=>("Hello there, " . (string)$name . "."),
            "request"=>$request->all(),
            "request->foo"=>$request->foo
        ]);
    }
}
