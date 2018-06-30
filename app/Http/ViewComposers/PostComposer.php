<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\Contracts\View\View;

class PostComposer
{
    public function compose(View $view)
    {
        $postInfo = [
            'pendingPostsCount' => Post::whereStatus('pending')->count(),
            'rejectedPostsCount' => Post::whereStatus('rejected')->count(),
            'approvedPostsCount' => Post::whereStatus('approved')->count(),
            'postsCount' => Post::count(),
        ];
        $view->with('postInfo', $postInfo);
    }
}