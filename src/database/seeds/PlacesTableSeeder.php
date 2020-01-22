<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 配列でplace_nameのデータ格納
        $place_names = ['かるまる', '愚直', '北区立中央図書館'];

        // 繰り返し構文でデータ挿入
        foreach ($place_names as $place_name) {
            DB::table('places')->insert([
                'user_id' => 1,
                'place_name' => $place_name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
