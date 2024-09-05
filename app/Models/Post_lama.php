<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "First Author",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem autem commodi iure ratione veniam unde eveniet officia, fugiat placeat perspiciatis modi nisi saepe mollitia deleniti voluptatibus, iste laboriosam quo provident. Quaerat reprehenderit ullam voluptatum, quas illo porro molestiae debitis expedita eius aliquam reiciendis, sint sapiente iure asperiores tempora, magnam beatae optio? Sint inventore repellat aliquid fugiat ullam cupiditate tempore ipsa provident reprehenderit laborum soluta architecto debitis tenetur, porro vero, mollitia quas laboriosam eum ad, saepe alias maxime ut. Debitis, similique."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Second Author",
            "body" => "2ND Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem autem commodi iure ratione veniam unde eveniet officia, fugiat placeat perspiciatis modi nisi saepe mollitia deleniti voluptatibus, iste laboriosam quo provident. Quaerat reprehenderit ullam voluptatum, quas illo porro molestiae debitis expedita eius aliquam reiciendis, sint sapiente iure asperiores tempora, magnam beatae optio? Sint inventore repellat aliquid fugiat ullam cupiditate tempore ipsa provident reprehenderit laborum soluta architecto debitis tenetur, porro vero, mollitia quas laboriosam eum ad, saepe alias maxime ut. Debitis, similique."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts-> firstWhere('slug', $slug);
    }
}
