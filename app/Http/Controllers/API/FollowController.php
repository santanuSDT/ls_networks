<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Follow;
use App\Models\PageFollower;

class FollowController extends Controller
{
    public function followPerson(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'followed_user_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }
        
        $post = Follow::create([
            'followed_user_id' => $request->followed_user_id,
            'follower_user_id' => Auth::user()->id,
            
        ]);

        return response("Person added to follower list successfully");
    }

    public function followPage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'followed_page_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $post = PageFollower::create([
            'followed_page_id' => $request->followed_page_id,
            'follower_user_id' => Auth::user()->id,
            
        ]);

        return response("Page Followed successfully");
    }

    
}
