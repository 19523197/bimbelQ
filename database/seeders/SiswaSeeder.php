<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::insert([
            [
                'name' => 'Wahyu Kirana',
            ], [
                'name' => 'Kevin Raihan',
            ], [
                'name' => 'Ery Harynanto',
            ], [
                'name' => 'Abiel Aditya',
            ], [
                'name' => 'Septianto',
            ], [
                'name' => 'Aulia Safira',
            ], [
                'name' => 'Shinta Amalia',
            ], [
                'name' => 'Elda Candra',
            ], [
                'name' => 'Amelia',
            ], [
                'name' => 'Daffa Bagas',
            ], [
                'name' => 'Akmal Perdana',
            ]


        ]);
    }
}
