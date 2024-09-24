<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0 ; $i<20 ;$i++){
            \App\Models\Employee::insert([
                'id' => $i + 7,
                'email' => "employee$i@demo.com",
                'name' => "Employee Name $i",
                'phone' => "098787865$i",
                'address' => "Address $i",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);}
    }
}
