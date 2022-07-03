<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;

class PageController extends Controller
{
    public function createPage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'page_name' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $page = Page::create([
            'person_id' => Auth::user()->id,
            'page_name' => $request->page_name,
         ]);


        return response("Page created successfully");
    }
}
