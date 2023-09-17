<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  public function homePage(){

    // $blogs = [
    //   [
    //     'title' => 'title one',
    //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    //     'status' => 'A'
    //   ],
    //   [
    //     'title' => 'title two',
    //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    //     'status' => 'D'
    //   ],
    //   [
    //     'title' => 'title three',
    //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    //     'status' => 'A'
    //   ],
    //   [
    //     'title' => 'title four',
    //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    //     'status' => 'D'
    //   ],
    //   [
    //     'title' => 'title five',
    //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    //     'status' => 'A'
    //   ]
    // ];
    
    // return DB::table('posts')->get();
    // return DB::table('posts')->find(7);
    // return DB::table('posts')->first();
    // return DB::table('posts')->pluck('title');

    // return DB::table('posts')->where('id', 5)->get();
    // return DB::table('posts')->where('id', '>', 5)->get();

    // DB::table('posts')->truncate();

    // DB::table('posts')->insert([
    //   [
    //     "title" => "This is title 2",
    //     "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
    //     "status" => 1,
    //     "publish_date" => date('Y-m-d'),
    //     "user_id" => 1
    //   ],
    //   [
    //     "title" => "This is title 3",
    //     "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
    //     "status" => 1,
    //     "publish_date" => date('Y-m-d'),
    //     "user_id" => 1
    //   ]
    // ]);

    // DB::table('posts')->where('id', 1)->update([
    //   "title" => "This is updated title",
    //   "status" => 0
    // ]);

    // DB::table('posts')->where('id', 1)->delete();
    // DB::table('posts')->delete(3);
    // DB::table('posts')->delete();

    // DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
    // ->select('categories.*')
    // ->get();

    // dd('success');

    $blogs = DB::table('posts')->get();

    return view('pages.home', compact('blogs'));        
  }

  public function aboutPage(){

    $string1 = 'About page';
    $string2 = 'This site is developed using Laravel 10';
  
    return view('pages.about', ['string1' => $string1, 'string2' => $string2]);       
  }

  public function contactPage(){
    $string1 = 'Contact page';
    $string2 = 'Thank you for contacting us.';
  
    return view('pages.contact', compact('string1', 'string2'));
  }
}