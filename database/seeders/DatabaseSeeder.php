<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Jamsesi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'email' => 'fahri279@gmail.com',
            'name' => 'admin',

            'password' => bcrypt('admin'),

        ]);



        $this::call([
            MentorSeeder::class,
            SiswaSeeder::class,
            JamsesiSeeder::class,
            ProgramSeeder::class,
        ]);

        Jadwal::create([
            'jamsesi_id' => 1,
            'program_id' => 1,
            'mentor_id' => 1,
            'tanggal' => Carbon::now(),
            'mentor_presensi' => Carbon::now(),
        ]);

        $siswa = Siswa::find(1);

        $siswa->jadwal()->attach(1);
    }
}
