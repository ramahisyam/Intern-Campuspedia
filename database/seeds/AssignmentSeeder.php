<?php

use Illuminate\Database\Seeder;
use App\Assignment;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assignments = [
            ['name' => 'Membuat caption selamat buka puasa'],
            ['name' => 'Mendesain feed selamat hari raya'],
            ['name' => 'Membuat fitur komentar pada web'],
            ['name' => 'Mempercantik UI landing page']
        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
