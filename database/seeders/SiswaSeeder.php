<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_siswa = [
            [
                'nama' => 'Akmal Nabawi',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15, 30),
            ],
    
            [
                'nama' => 'Jamal Nabawi',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15, 30),
            ],
    
            [
                'nama' => 'Umar Nabawi',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15, 30),
            ],
    
            ];
    
            DB::table('siswa')->truncate();
    
            foreach ($data_siswa as $data) {
                DB::table('siswa')->insert([
                    'nama' => $data['nama'],
                    'kelas' => $data['kelas'],
                    'umur' => $data['umur'],
                ]);
            }

        $siswa = DB::table('siswa')->get();
        dd($siswa);
        }
    }

