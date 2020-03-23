<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTweetRequest;
use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
   public function store(StoreTweetRequest $tweet)
   {
       Tweet::create([
           'user_id' => auth()->id(),
           'body' => $tweet->body
       ]);

       return redirect('/home');
   }
}
