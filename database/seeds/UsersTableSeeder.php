<?php

use App\Category;
use App\Reply;
use App\Thread;
use App\User;
use Carbon\Factory;
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
        $categories = factory(Category::class, 5)->create();

        foreach($categories as $category){
            $category->threads()->saveMany(
                factory(Thread::class,10)->make()
            );
            


            foreach($category->threads as $thread){
                $thread->replies()->saveMany(
                    factory(Reply::class,5)->make()
                );
            }

        }
    }
}
