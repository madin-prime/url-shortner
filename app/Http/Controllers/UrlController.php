<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Url;

class UrlController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make(request()->all(), [ 'url'=>'required|url' ]);

        if($validator->fails()){
            return redirect()->route('error');
        }

        $token = uniqid();

        $url = new Url();
        $url->url = $request->url;
        $url->token = $token;
        $url->save();

        return view('get')->with(["url" => config('app.url') .'/short-url/'. $token]);
    }

    public function redirect(Request $request , $token ){
        $url = Url::where('token','=',$token)->first();
        return redirect()->away($url->url);
    }

}
