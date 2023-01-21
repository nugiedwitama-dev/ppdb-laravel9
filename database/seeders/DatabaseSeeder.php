<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Pages;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Event::factory(20)->create();
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
            ]);
            Category::create([
            'name' => 'Informasi',
            'slug' => 'Informasi'   
        ]);
        Post::factory(20)->create();
        Pages::factory()->create();
        User::create([
            'name' => 'Nugie Dwitama',
            'username' => 'nugiedwitama',
            'email' => 'admin@idcr.co.id',
            'password' => bcrypt('12345678'),
            'level' => 'admin'
        ]);
        // User::create([
        //     'name' => 'Gifani Erin F',
        //     'email' => 'gifanief@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        // Post::create([
        //     'title' => 'Judul Artikel Pertama',
        //     'slug' => 'judul-artikel-pertama',
        //     'exc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum, eveniet pariatur et laboriosam vitae ducimus at deleniti,unde praesentium perferendis id repudiandae reiciendis voluptates, nobis modi tempore nemo. Quis corrupti iste perspiciatis, maiores atque neque beatae odit nihil sint iusto recusandae. A commodi obcaecati aut officia! Nisi autem facere eveniet. Esse asperiores cum,repellat at error suscipit quia? Sequi quasi earum culpa sit! Debitis, velit.Voluptas distinctio eligendi, quas atque quibusdam perferendis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Artikel Kedua',
        //     'slug' => 'judul-artikel-kedua',
        //     'exc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum, eveniet pariatur et laboriosam vitae ducimus at deleniti,unde praesentium perferendis id repudiandae reiciendis voluptates, nobis modi tempore nemo. Quis corrupti iste perspiciatis, maiores atque neque beatae odit nihil sint iusto recusandae. A commodi obcaecati aut officia! Nisi autem facere eveniet. Esse asperiores cum,repellat at error suscipit quia? Sequi quasi earum culpa sit! Debitis, velit.Voluptas distinctio eligendi, quas atque quibusdam perferendis?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Artikel Ketiga',
        //     'slug' => 'judul-artikel-ketiga',
        //     'exc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus cumque accusamus eveniet.Inventore adipisci ratione rerum voluptatum, eveniet pariatur et laboriosam vitae ducimus at deleniti,unde praesentium perferendis id repudiandae reiciendis voluptates, nobis modi tempore nemo. Quis corrupti iste perspiciatis, maiores atque neque beatae odit nihil sint iusto recusandae. A commodi obcaecati aut officia! Nisi autem facere eveniet. Esse asperiores cum,repellat at error suscipit quia? Sequi quasi earum culpa sit! Debitis, velit.Voluptas distinctio eligendi, quas atque quibusdam perferendis?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

    }
}
