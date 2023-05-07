<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //all posts
 function index(){
    return"all posts";
 }
 function create_post(){
    return"creating new post";
 }
 function view_post(){
    return"display single post";
 }
 function delete_post(){
    return"deleting postpost";
 }
}
