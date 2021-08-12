<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $posts=[
            [
            "id"=>1,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
          [
            "id"=>2,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
          [
            "id"=>3,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
          [
            "id"=>4,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
          [
            "id"=>5,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
          [
            "id"=>6,
            "title"=>"Learn PHP",
            "posted_by"=>"mazen",
            "Created_at"=>"2018-04-10"
          ],
      ];
        return view("posts.index",compact('posts'));
    }
    public function create(){
        return view("posts.create");
    }
    
    public function store(){
        return "store........";
    }

    public function show($id){
        return view("posts.view",compact('id'));
    }
    public function edit($id){
        return view('posts.edit',compact('id'));
    }

}
