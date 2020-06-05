<?php

namespace App;

use Canvas\Post;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class NewsItem extends Post implements Feedable {

    public function toFeedItem() {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->summary ?: '')
            ->updated($this->updated_at)
            ->link(route('blog.post.show', $this->slug))
            ->author($this->user->name);
    }

    public static function getFeedItems() {
        return NewsItem::orderBy('published_at', 'desc')->limit(50)->get();
    }

}
