<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(2)->create();
        \App\Models\User::factory()->create([
            'nama' => 'Dudi 1',
           'email' => 'dudi1@example.com',
           'role' => 'dudi'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Dudi 2',
           'email' => 'dudi2@example.com',
           'role' => 'dudi'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Siswa 1',
           'email' => 'siswa1@example.com',
           'role' => 'siswa'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Siswa 2',
           'email' => 'siswa2@example.com',
           'role' => 'siswa'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Siswa 3',
           'email' => 'siswa3@example.com',
           'role' => 'siswa'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Siswa 4',
           'email' => 'siswa4@example.com',
           'role' => 'siswa'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Siswa 5',
           'email' => 'siswa5@example.com',
           'role' => 'siswa'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Ortu 1',
           'email' => 'ortu1@example.com',
           'role' => 'ortu'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Guru 1',
           'email' => 'guru1@example.com',
           'role' => 'guru'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Guru 2',
           'email' => 'guru2@example.com',
           'role' => 'guru'
         
       ]);
        \App\Models\User::factory()->create([
            'nama' => 'Admin',
           'email' => 'admin@example.com',
           'role' => 'admin'
         
       ]);
        \App\Models\Ortu::factory()->create([
            'user_id_ortu' => 8,
           'user_id_siswa' => 3
       
         
       ]);
        \App\Models\Siswa::factory()->create([
           'user_id_siswa' => 3,
       
       ]);
        \App\Models\Siswa::factory()->create([
           'user_id_siswa' => 4,
       
       ]);
        \App\Models\Siswa::factory()->create([
           'user_id_siswa' => 5,
       
       ]);
        \App\Models\Siswa::factory()->create([
           'user_id_siswa' => 6,
       
       ]);
        \App\Models\Siswa::factory()->create([
           'user_id_siswa' => 7,
       
       ]);
        \App\Models\Guru::factory()->create([
           'user_id_guru' => 9,
       
       ]);
        \App\Models\Guru::factory()->create([
           'user_id_guru' => 10,
       
       ]);
    


        // \App\Models\Kesediaan::factory()->create([
        //     'dudi_id' => 1,
        //     'tanggal' => NOW(),
        // ]);
        // \App\Models\DetailKesediaan::factory()->create([
        //     'kesediaan_id' => 1, 
        //     'jurusan' => 'RPL', 
        //     'jumlah' => 3
        // ]);

        
    }
}
