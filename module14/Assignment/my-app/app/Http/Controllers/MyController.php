<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MyController extends Controller
{
    function myFunction(Request $request):String{
        $name = $request->name;
        $userAgent = $request->header('User-Agent');
        return "name is ${name}. user agent is ${userAgent}";
    }

    function myFunction2(Request $request):String{
        
        if($request->has('page_no')){
            $page = $request->page_no;
        }else{
            $page = null;
        }
        return "page no is ${page}";
    }

    function myFunction3(Request $request):JsonResponse{
        
        $content = array('message'=> 'Success', 'data'=> array('name'=> 'John Doe','age'=> 25));
        return response()->json($content);
    }

    function uploadFile(Request $request):bool{
        
        $file = $request->file('avatar');
        $file->move('uploads', $file->getClientOriginalName());
        
        return true;
    }
}
