<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function like(Post $post)
    {
        $post->likes()->create(['user_id' => Auth::id()]);
        return redirect()->back();
    }
    
    public function unlike(Post $post)
    {
        $post->likes()->where('user_id', Auth::id())->delete();
        return redirect()->back();
    }
    
}
