<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i = 1; $i <= 5; $i++) {
            DB::table('article')->insert([
                    'judul' => 'Belajar Laravel' .$i ,
                    'isi' => 'Belajar Laravel Mudah Menyenangkan',
                    'kategori' => 'Laravel',
                    'foto' => 'Laravel.jpg',
                    'author_id' => '1',
                    'tanggal' => '2017-02-08 09:53:56'
         	]);
        }
    }
}
