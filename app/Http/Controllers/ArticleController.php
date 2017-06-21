<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

use JWTAuth;
use JWTAuthException;

class ArticleController extends Controller
{

    public function show(Request $req) {
        $user = JWTAuth::toUser($req->token);

        $allUserArticle = $user->articles()->paginate(10);

        return response()->json(['data' => $allUserArticle], 200); 
    }

    public function create(Request $req) {
        $user = JWTAuth::toUser($req->token);
        
        $validator = Validator::make( $req->all(), [
            'title' => 'required|min:30',
            'content' => 'required|min:30',
        ] );

        if( $validator->fails() ) {
            return response()->json(['invalid_input'], 422);
        }

        $newArticle = $user->articles()->create([
            'title' => $req->input('title'),
            'content' => $req->input('content'),
        ]);

        return response()->json(['article' => $newArticle], 200);        
    }

    
}
