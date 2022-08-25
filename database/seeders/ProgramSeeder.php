<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Program::insert([
            [
                'nama' => 'Reguler Kelas 1',
                'tarif' => 130000,
                'tarif_mentor' => 10000
            ], [
                'nama' => 'Reguler Kelas 2',
                'tarif' => 140000,
                'tarif_mentor' => 12000
            ], [
                'nama' => 'Reguler Kelas 3',
                'tarif' => 150000,
                'tarif_mentor' => 13000
            ], [
                'nama' => 'Privat Kelas 1',
                'tarif' => 20000,
                'tarif_mentor' => 5000
            ], [
                'nama' => 'Privat Kelas 2',
                'tarif' => 25000,
                'tarif_mentor' => 7500
            ], [
                'nama' => 'Privat Kelas 3',
                'tarif' => 30000,
                'tarif_mentor' => 10000
            ],
        ]);
    }
}
