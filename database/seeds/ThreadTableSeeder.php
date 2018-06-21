<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('threads')->insert([
            'judul_thread' => str_random(10),
            'isi_thread' => str_random(10),
            'tag_thread' => str_random(10),
            'keterangan_thread' => str_random(10),
            'photo_thread' => str_random(10),
            'kategori_thread' => str_random(10),
            'user_id'   =>  rand(),

        ]);
    }
}
