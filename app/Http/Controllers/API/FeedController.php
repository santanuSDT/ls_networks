<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Follow;
use App\Models\PageFollower;

class FeedController extends Controller
{
    public function index()
    {
        $post_for_feed = [];

        //getting person's id list whoom following
        $following_persons = Follow::select('followed_user_id')->where('follower_user_id',Auth::user()->id)->get()->toArray();

        //getting page's list whoom following
        $following_pages = PageFollower::select('followed_page_id')->where('follower_user_id',Auth::user()->id)->get()->toArray();


        //preparing list of post of person's whoom following
        foreach($following_persons as $key => $value){
            $post_for_feed[] = Post::where('is_page_post',0)->where('person_id',$value['followed_user_id'])->get();
        }

        //adding list of post of page's whoom following
        foreach($following_pages as $key => $value){
            $post_for_feed[] = Post::where('is_page_post',1)->where('page_id',$value['followed_page_id'])->get();
        }
       


        return response()
            ->json(['data' => $post_for_feed]);
    }
    
}
