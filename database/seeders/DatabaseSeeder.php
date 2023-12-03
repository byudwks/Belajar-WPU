<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        User::create([
            'name' =>'Bayu Dwi Kiswanto',
            'username' => 'bayu_dwks',
            'email' => 'bayu.ashter60@gmail.com',
            'password' => bcrypt ('12345')

        ]);

        // User::create([
        //     'name' =>'Adelia Selawati',
        //     'email' => 'adelehehe@gmail.com',
        //     'password' => bcrypt ('12345')

        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Desain Web',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(80)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-peratama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique veniam vero sit. Praesentium incidunt laboriosam suscipit facere architecto nihil eveniet fuga? Obcaecati, aliquid placeat doloremque magnam eligendi vero amet quidem accusantium quis rem quas aperiam similique blanditiis. Illo repudiandae qui ipsum officiis magnam, dolorum, reiciendis inventore eveniet quisquam, vel praesentium et. Culpa architecto facilis excepturi rerum aspernatur numquam nemo beatae labore nobis atque ad vel quibusdam, accusantium pariatur deleniti, odio eaque ea ipsum incidunt. Magni necessitatibus unde similique, quos deserunt voluptatibus blanditiis ullam harum, hic eos ea culpa iste perspiciatis eum excepturi ipsam voluptates',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique veniam vero sit. Praesentium incidunt laboriosam suscipit facere architecto nihil eveniet fuga? Obcaecati, aliquid placeat doloremque magnam eligendi vero amet quidem accusantium quis rem quas aperiam similique blanditiis. Illo repudiandae qui ipsum officiis magnam, dolorum, reiciendis inventore eveniet quisquam, vel praesentium et. Culpa architecto facilis excepturi rerum aspernatur numquam nemo beatae labore nobis atque ad vel quibusdam, accusantium pariatur deleniti, odio eaque ea ipsum incidunt. Magni necessitatibus unde similique, quos deserunt voluptatibus blanditiis ullam harum, hic eos ea culpa iste perspiciatis eum excepturi ipsam voluptates',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique veniam vero sit. Praesentium incidunt laboriosam suscipit facere architecto nihil eveniet fuga? Obcaecati, aliquid placeat doloremque magnam eligendi vero amet quidem accusantium quis rem quas aperiam similique blanditiis. Illo repudiandae qui ipsum officiis magnam, dolorum, reiciendis inventore eveniet quisquam, vel praesentium et. Culpa architecto facilis excepturi rerum aspernatur numquam nemo beatae labore nobis atque ad vel quibusdam, accusantium pariatur deleniti, odio eaque ea ipsum incidunt. Magni necessitatibus unde similique, quos deserunt voluptatibus blanditiis ullam harum, hic eos ea culpa iste perspiciatis eum excepturi ipsam voluptates',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic magni laborum ut mollitia similique veniam vero sit. Praesentium incidunt laboriosam suscipit facere architecto nihil eveniet fuga? Obcaecati, aliquid placeat doloremque magnam eligendi vero amet quidem accusantium quis rem quas aperiam similique blanditiis. Illo repudiandae qui ipsum officiis magnam, dolorum, reiciendis inventore eveniet quisquam, vel praesentium et. Culpa architecto facilis excepturi rerum aspernatur numquam nemo beatae labore nobis atque ad vel quibusdam, accusantium pariatur deleniti, odio eaque ea ipsum incidunt. Magni necessitatibus unde similique, quos deserunt voluptatibus blanditiis ullam harum, hic eos ea culpa iste perspiciatis eum excepturi ipsam voluptates',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
