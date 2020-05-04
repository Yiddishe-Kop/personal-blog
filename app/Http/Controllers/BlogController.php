<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;
use Canvas\Post;
use Canvas\Tag;

class BlogController extends Controller {

    public function index() {
        $posts = Post::published()->with(['topic', 'tags'])->latest()->paginate();
        return view('blog.index', compact('posts'));
    }

    public function tagsIndex(Tag $tag) {
        $posts = $tag->posts()->published()->with(['topic'])->latest()->paginate();
        $title = 'Showing all posts with the ' . $tag->name . ' tag';
        return view('blog.index', compact('posts', 'title'));
    }

    public function show(Post $post) {

        event(new PostViewed($post));

        return view('blog.show', compact('post'));
    }
}
