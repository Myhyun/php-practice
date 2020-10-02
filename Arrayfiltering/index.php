<?php

class Post{

    public $title;

    public $published;

    public function __construct($title, $published)
    {

        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My Post', true),
    new Post('My 2nd Post', true),
    new Post('My 3rd Post', true),
    new Post('My 4th Post', false),

];

// $unpublishedPosts = array_filter($posts, function ($posts) {

//     return ! $posts->published;
//     //array filter allows you to filter down an array of anything
// });

$modified = array_map(function ($post) {
    return 'foobar';
}, $posts);