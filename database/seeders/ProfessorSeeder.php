<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $professor = new Professor();
        $professor->dni = '12345678A';
        $professor->full_name = 'Administrador';
        $professor->short_name = 'Admin';
        $professor->email = 'admin@example.com';
        $professor->login = 'admin';
        $professor->password = bcrypt('admin');
        $professor->office = 'A-123';
        $professor->office_phone = '123456789';
        $professor->personal_phone = '987654321';
        $professor->copier_uid = 'admin123';
        $professor->copier_password = '123';
        $professor->teaches = true;
        $professor->is_current_member = true;
        $professor->is_council_member = true;
        $professor->is_total_member = true;
        $professor->last_access = '2024-07-25 13:45:00';
        $professor->group = 'A';
        $professor->category = 'Full Professor';
        $professor->website = 'https://admin.com';
        $professor->teaching_order = 1;
        $professor->scholarship_history = 'Admin is a Full Professor at the University of John Doe.';
        $professor->save();

        $professor = new Professor();
        $professor->dni = '23456789B';
        $professor->full_name = 'John Doe';
        $professor->short_name = 'John';
        $professor->email = 'john@example.com';
        $professor->login = 'john';
        $professor->password = bcrypt('123');
        $professor->office = 'A-123';
        $professor->office_phone = '123456789';
        $professor->personal_phone = '987654321';
        $professor->copier_uid = 'john.doe';
        $professor->copier_password = '123456';
        $professor->teaches = true;
        $professor->is_current_member = true;
        $professor->is_council_member = true;
        $professor->is_total_member = true;
        $professor->last_access = '2024-07-25 13:45:00';
        $professor->group = 'B';
        $professor->category = 'Full Professor';
        $professor->website = 'https://johndoe.com';
        $professor->teaching_order = 1;
        $professor->scholarship_history = 'John Doe is a Full Professor at the University of John Doe.';
        $professor->save();

        Professor::factory(10)->create();



        

                
        
    }
}
