<?php

namespace App\Models;


class post
{
    private static $blog_post = [
        
            [
                "title" => "Judul Pertama",
                "slug" => "judul-post-1",
                "author"=> "Bayu Dwi Kiswanto",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur facere quidem
                temporibus excepturi voluptate quae quo ipsum eos quam perferendis placeat quaerat officiis 
                doloremque a harum quas reprehenderit consequatur ipsam, pariatur voluptas cumque repudiandae 
                ncidunt qui distinctio. Doloribus ipsa a voluptate nam sit alias omnis blanditiis, magnam enim molestiae.
                Possimus neque suscipit accusamus! Laudantium iste blanditiis labore similique. Ab quia quam minus hic in 
                vel adipisci debitis, provident, iure voluptatibus atque dolor quisquam voluptatum ullam aperiam dignissimos
                ni velit voluptate, consectetur dolorem consequuntur? Quam, ratione illo, sint, distinctio consequatur labore
                animi repellendus quos voluptatibus et a repellat molestias accusantium?"
            ], 
            [
                "title" => "Judul Kedua",
                "slug" => "judul-post-2",
                "author"=> "Aisyah Ardila Sari",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur facere quidem
                temporibus excepturi voluptate quae quo ipsum eos quam perferendis placeat quaerat officiis 
                doloremque a harum quas reprehenderit consequatur ipsam, pariatur voluptas cumque repudiandae 
                ncidunt qui distinctio. Doloribus ipsa a voluptate nam sit alias omnis blanditiis, magnam enim molestiae.
                Possimus neque suscipit accusamus! Laudantium iste blanditiis labore similique. Ab quia quam minus hic in 
                vel adipisci debitis, provident, iure voluptatibus atque dolor quisquam voluptatum ullam aperiam dignissimos
                ni velit voluptate, consectetur dolorem consequuntur? Quam, ratione illo, sint, distinctio consequatur labore
                animi repellendus quos voluptatibus et a repellat molestias accusantium?"   
            ]
        ];

        public static function all() 
        {
            return collect(self::$blog_post);
        }

        public static function find($slug) 
        {
            $post = static::all();
            return $post->firstwhere('slug' , $slug);
    
        }
}
