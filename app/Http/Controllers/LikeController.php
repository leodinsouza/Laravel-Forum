<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
            //'user' => auth()->id()
            'user_id' => '1'
        ]);
    }

    public function unlikeIt(Reply $reply)
    {
       //$reply->likes()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where(['user_id', '1'])->first()->delete();
    }
}
