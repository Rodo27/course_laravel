<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function example(Request $request){
        $name = $request->input('name');
        //$key = $request->input('key');

        $result = "Hello $name ";
        
        return json_encode(array(
            'status' => 200,
            'responde' => array(
                'message' => $result    
            )
        ));
    }
}
