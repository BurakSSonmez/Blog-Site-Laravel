<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda', 'Kariyer', 'Vizyonumuz', 'Misyonumuz'];
        $count=0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>Str::slug($page),
                'image'=>'https://assets.entrepreneur.com/content/3x2/2000/20191127190639-shutterstock-431848417-crop.jpeg?width=700&crop=2:1',
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
