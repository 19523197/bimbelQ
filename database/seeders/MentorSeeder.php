<?php

namespace Database\Seeders;

use App\Models\Mentor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mentor::insert([
            [
                'name' => 'Fachri Ramadhan',
                'mapel' => 'IPA',
            ], [
                'name' => 'Riko Bediatra',
                'mapel' => 'IPA',
            ], [
                'name' => 'Rashid Maulana',
                'mapel' => 'IPA',
            ], [
                'name' => 'Khanaaya',
                'mapel' => 'Matematika',
            ], [
                'name' => 'Elsa Putri',
                'mapel' => 'Matematika',
            ], [
                'name' => 'Alief Salman',
                'mapel' => 'Matematika',
            ], [
                'name' => 'Daryan Pribadi',
                'mapel' => 'B.Ind',
            ], [
                'name' => 'Cevin Tamama',
                'mapel' => 'B.Ind',
            ], [
                'name' => 'Daffa Alvi',
                'mapel' => 'B.Ing',
            ]


        ]);
    }
}
