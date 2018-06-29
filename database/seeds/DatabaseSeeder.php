<?php

use App\Message;
use App\Post;
use App\PostImage;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    protected $tables = [];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->tables = ['users', 'posts', 'post_images', 'messages'];

        $this->truncate($this->tables);
        $this->refreshFakerImagesDirectory();

        $users = factory(User::class, 2)->create();

        $users->each(function ($user) {
            $user->messages()->saveMany(factory(Message::class, 10)->make());

            $posts = $user->posts()->saveMany(factory(Post::class, 3)->make());

            $posts->each(function ($post) {
                $post->postImages()->save(factory(PostImage::class)->make());
            });
        });
    }

    protected function truncate($tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    protected function refreshFakerImagesDirectory()
    {
        if (file_exists(public_path('faker/images'))) {
            system('rm -rf ' . escapeshellarg(public_path('faker')));
        }

        system('mkdir  -p ' . public_path('faker/images'));
    }
}
