<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function createPersonPost(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'post_content' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }
        
        $post = Post::create([
            'post_content' => $request->post_content,
            'person_id' => Auth::user()->id,
            
        ]);

        return response("Person's Post created successfully");
    }

    public function createPagePost(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'post_content' => 'required',
            'page_id' => 'required|int',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $post = Post::create([
            'post_content' => $request->post_content,
            'person_id' => Auth::user()->id,
            'is_page_post' => 1,
            'page_id' => $request->page_id,
            
        ]);

        return response("Page Post created successfully");
    }

    
}
