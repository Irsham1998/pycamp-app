<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import model
use App\Models\Camps;
// untuk format seeder
use Illuminate\Support\Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => Str::slug('Gila Belajar'),
                'price' => 200,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => Str::slug('Baru Mulai'),
                'price' => 140,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // masukkan kedalam database
        // cara 1 tidak harus pakai created_at dan updated_at
        foreach ($camps as $key => $camp) {
            Camps::create($camp);
        }

        // cara 2
        // Camps::insert($camps);
        // harus pakai timestamp, karena hasilnya akan null
    }
}
