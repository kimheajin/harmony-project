<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Album::create([
        'album_number'    => '1',
        'user_id'         => 'user',
        'album_title'     => 'TOTO',
        'album_picture'   => 'test.jpg',
        'album_content'   => 'yaho',
      ]);
      App\Album::create([
        'album_number'    => '2',
        'user_id'         => 'user',
        'album_title'     => 'CODE',
        'album_picture'   => 'test2.jpg',
        'album_content'   => 'MUNGO',
      ]);
      App\Album::create([
        'album_number'    => '3',
        'user_id'         => 'user',
        'album_title'     => 'MAX',
        'album_picture'   => 'test3.jpg',
        'album_content'   => 'BULUESCREEN',
      ]);
      App\Album::create([
        'album_number'    => '1',
        'user_id'         => 'wlsdud',
        'album_title'     => 'MAX',
        'album_picture'   => 'test4.jpg',
        'album_content'   => 'BULUESCREEN',
      ]);
    }
}
