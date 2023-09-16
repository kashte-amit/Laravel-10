<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function homePage(){

    $blogs = [
      [
        'title' => 'title one',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        'status' => 'A'
      ],
      [
        'title' => 'title two',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        'status' => 'D'
      ],
      [
        'title' => 'title three',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        'status' => 'A'
      ],
      [
        'title' => 'title four',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        'status' => 'D'
      ],
      [
        'title' => 'title five',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        'status' => 'A'
      ]
    ];
    
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