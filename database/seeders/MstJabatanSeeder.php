<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstJabatanSeeder extends Seeder
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
                'nama_jabatan' => 'Direktur Utama',
                'tunjangan' => 10000000,
            ],
            [
                'nama_jabatan' => 'Direktur',
                'tunjangan' => 5000000,
            ],
            [
                'nama_jabatan' => 'Manager',
                'tunjangan' => 3000000,
            ],
            [
                'nama_jabatan' => 'Supervisor',
                'tunjangan' => 2000000,
            ],
            [
                'nama_jabatan' => 'Staff',
                'tunjangan' => 1000000,
            ],
        ];

        foreach ($data as $item) {
            $jabatan = new \App\Models\MstJabatan();
            $jabatan->nama_jabatan = $item['nama_jabatan'];
            $jabatan->tunjangan = $item['tunjangan'];
            $jabatan->save();
        }
    }
}