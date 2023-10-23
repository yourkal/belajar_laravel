<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    Student::factory()->count(7)->create();
}
}


//     Schema::disableForeignKeyConstraints();
//     Student::truncate();
//     Schema::enableForeignKeyConstraints();

//     $data = [
//         ['name' => 'Haikal', 'gender' => 'Laki-laki', 'nis' => '1000001', 'class_id' => '1'],
//         ['name' => 'Vina', 'gender' => 'perempuan', 'nis'=> '2000002', 'class_id' => '2'],
//     ];

//     foreach ($data as $value) {
//         Student::insert([
//             'name' => $value['name'],
//             'gender' => $value['gender'],
//             'nis' => $value['nis'],
//             'class_id' => $value['class_id'],
//             'created_at' => Carbon::now(),
//             'updated_at' => Carbon::now()

//         ]);
// }