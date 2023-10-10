<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiControllerPost extends Controller
{
    public function mypost($name) {
        return response()->json('That is an answer to post as json, ' . $name . '.');
    }

    public function new_item(Request $request) {
        $validate = $request->validate([
            "id" => "required|number",
            "product_name" => "required|min:3",
            "price" => "required|min:1"
        ]);

        # return response()->json($validate);
        # return dd($request->all());

        return response()->json($request->all());
    }
}
