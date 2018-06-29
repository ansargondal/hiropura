<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\Contracts\View\View;

class PostComposer
{
    public function compose(View $view)
    {
        $postInfo = [
            'PendingPostsCount' => 30,
            'rejectedPostsCount' => 10,
            'postsCount' => post::count()
        ];
        $view->with('categories', $postInfo);
    }
}