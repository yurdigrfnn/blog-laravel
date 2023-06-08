<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(20)->create();

        User::create([
           'name' => 'Yurdiansyah',
           'username' => 'yurdigrfn',
           'email' => 'yurdiansyah143@gmail.com',
           'password' => bcrypt('bagol215567')
        ]);

      //  User::create([
      //      'name' => 'keqing',
      //      'email' => 'keqing143@gmail.com',
     //       'password' => bcrypt('12345')
      //  ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'anime'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Film',
            'slug' => 'film'
        ]);

        Category::create([
            'name' => 'Football',
            'slug' => 'football'
        ]);

        Post::factory(31)->create();

       // Post::create([
        //    "title" => "Judul pertama",
       //     "category_id" => 1,
       //     "slug" => "judul-pertama",
      //      "excerpt" => "Lorem ipsum dolor pertama",
      //      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae officiis labore, ad vel iure ipsum rem hic ipsam reprehenderit soluta dignissimos beatae expedita qui! Magni quibusdam velit totam ab sapiente voluptates, possimus fuga, minus omnis tenetur accusantium! Voluptas enim quia provident et eum excepturi, vel, voluptatem iure eligendi beatae quisquam? Ratione sapiente fugit, cupiditate, nihil doloremque nobis, consequatur quasi accusantium dolores quos
     //                  tempore ex facere inventore voluptates repudiandae mollitia ullam doloribus ipsum praesentium optio explicabo delectus. Dicta, odit praesentium. Necessitatibus est eveniet saepe veritatis voluptatibus molestias, temporibus aliquid, enim similique, fugit nihil ut fuga minima assumenda sapiente explicabo voluptas
      //                 sint! Accusantium nam ullam eos? Enim, ea cumque quo sed quibusdam eligendi in soluta iste dolor aspernatur ex dolores
      //      'user_id' => 1
      //      ]);

     //   Post::create([
      //      "title" => "Judul kedua",
     //       "category_id" => 2,
      //      "slug" => "judul-kedua",
      //      "excerpt" => "Lorem ipsum dolor pertama",
      //      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae officiis labore, ad vel iure ipsum rem hic ipsam reprehenderit soluta dignissimos beatae expedita qui! Magni quibusdam velit totam ab sapiente voluptates, possimus fuga, minus omnis tenetur accusantium! Voluptas enim quia provident et eum excepturi, vel, voluptatem iure eligendi beatae quisquam? Ratione sapiente fugit, cupiditate, nihil doloremque nobis, consequatur quasi accusantium dolores quos
    //                   tempore ex facere inventore voluptates repudiandae mollitia ullam doloribus ipsum praesentium optio explicabo delectus. Dicta, odit praesentium. Necessitatibus est eveniet saepe veritatis voluptatibus molestias, temporibus aliquid, enim similique, fugit nihil ut fuga minima assumenda sapiente explicabo voluptas
     //                  sint! Accusantium nam ullam eos? Enim, ea cumque quo sed quibusdam eligendi in soluta iste dolor aspernatur ex dolores
     //                  minima animi placeat quam fugiat facilis laboriosam, eveniet assumenda nulla accusantium veniam! Fugit, perspiciatis doloribus! Eius ducimus tenetur, minus commodi illum itaque voluptates enim doloribus nulla aliquid quaerat error voluptatum fugit iusto, veniam nihil natus dolores magnam quae eos qui debitis. Nisi accusantium, officiis magni illum mollitia officia at fugiat excepturi molestiae laborum quos minima minus modi rerum nulla, aliquam esse perspiciatis obcaecati optio, quisquam asperiores assumenda? Architecto, et ipsam eius sunt illum eum, dolor quos quisquam labore est magni officia?",
      //      'user_id' => 1
     //   ]);

    //    Post::create([
     //       "title" => "Judul Ketiga",
     //       "category_id" => 1,
     //       "slug" => "judul-ketiga",
     //       "excerpt" => "Lorem ipsum dolor pertama",
     //      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae officiis labore, ad vel iure ipsum rem hic ipsam reprehenderit soluta dignissimos beatae expedita qui! Magni quibusdam velit totam ab sapiente voluptates, possimus fuga, minus omnis tenetur accusantium! Voluptas enim quia provident et eum excepturi, vel, voluptatem iure eligendi beatae quisquam? Ratione sapiente fugit, cupiditate, nihil doloremque nobis, consequatur quasi accusantium dolores quos
      //                 tempore ex facere inventore voluptates repudiandae mollitia ullam doloribus ipsum praesentium optio explicabo delectus. Dicta, odit praesentium. Necessitatibus est eveniet saepe veritatis voluptatibus molestias, temporibus aliquid, enim similique, fugit nihil ut fuga minima assumenda sapiente explicabo voluptas
     //                sint! Accusantium nam ullam eos? Enim, ea cumque quo sed quibusdam eligendi in soluta iste dolor aspernatur ex dolores
      //                 minima animi placeat quam fugiat facilis laboriosam, eveniet assumenda nulla accusantium veniam! Fugit, perspiciatis doloribus! Eius ducimus tenetur, minus commodi illum itaque voluptates enim doloribus nulla aliquid quaerat error voluptatum fugit iusto, veniam nihil natus dolores magnam quae eos qui debitis. Nisi accusantium, officiis magni illum mollitia officia at fugiat excepturi molestiae laborum quos minima minus modi rerum nulla, aliquam esse perspiciatis obcaecati optio, quisquam asperiores assumenda? Architecto, et ipsam eius sunt illum eum, dolor quos quisquam labore est magni officia?",
       //     'user_id' => 1
      //  ]);

     //   Post::create([
      //      "title" => "Judul Keempat",
      //      "category_id" => 3,
      //      "slug" => "judul-keempat",
      //      "excerpt" => "Lorem ipsum dolor pertama",
     //      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae officiis labore, ad vel iure ipsum rem hic ipsam reprehenderit soluta dignissimos beatae expedita qui! Magni quibusdam velit totam ab sapiente voluptates, possimus fuga, minus omnis tenetur accusantium! Voluptas enim quia provident et eum excepturi, vel, voluptatem iure eligendi beatae quisquam? Ratione sapiente fugit, cupiditate, nihil doloremque nobis, consequatur quasi accusantium dolores quos
     //                  tempore ex facere inventore voluptates repudiandae mollitia ullam doloribus ipsum praesentium optio explicabo delectus. Dicta, odit praesentium. Necessitatibus est eveniet saepe veritatis voluptatibus molestias, temporibus aliquid, enim similique, fugit nihil ut fuga minima assumenda sapiente explicabo voluptas
     //                  sint! Accusantium nam ullam eos? Enim, ea cumque quo sed quibusdam eligendi in soluta iste dolor aspernatur ex dolores
      //                 minima animi placeat quam fugiat facilis laboriosam, eveniet assumenda nulla accusantium veniam! Fugit, perspiciatis doloribus! Eius ducimus tenetur, minus commodi illum itaque voluptates enim doloribus nulla aliquid quaerat error voluptatum fugit iusto, veniam nihil natus dolores magnam quae eos qui debitis. Nisi accusantium, officiis magni illum mollitia officia at fugiat excepturi molestiae laborum quos minima minus modi rerum nulla, aliquam esse perspiciatis obcaecati optio, quisquam asperiores assumenda? Architecto, et ipsam eius sunt illum eum, dolor quos quisquam labore est magni officia?",
     //      'user_id' => 2
     //   ]);
    }
}
