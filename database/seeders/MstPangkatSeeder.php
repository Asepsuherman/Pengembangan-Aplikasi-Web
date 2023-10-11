<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstPangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_pangkat' => 'Pembina Utama',
                'pangkat_gol' => 'IV/c',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pembina Utama Madia',
                'pangkat_gol' => 'IV/d',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pembina Utama Muda',
                'pangkat_gol' => 'IV/c',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pembina Tingkat I',
                'pangkat_gol' => 'IV/b',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pembina',
                'pangkat_gol' => 'IV/a',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Penata Tingkat I',
                'pangkat_gol' => 'III/d',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Penata',
                'pangkat_gol' => 'III/c',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Penata Muda Tinka I',
                'pangkat_gol' => 'III/b',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Penata Muda',
                'pangkat_gol' => 'III/a',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pengatur Tingkat I',
                'pangkat_gol' => 'II/d',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
            [
                'nama_pangkat' => 'Pengatur',
                'pangkat_gol' => 'II/e',
                'created_at' => '2021-08-26 12:23:00',
                'updated_at' => null,
            ],
        ];

        DB::table('mst_pangkat')->insert($data);
    }
}