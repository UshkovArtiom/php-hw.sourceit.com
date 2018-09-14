<?php

use App\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create()->each(function (User $user) {
            $user->posts()
                ->save(factory(Post::class)->make());
        });
    }
}
