<?php

use Illuminate\Database\Seeder;
use App\EmployeeModel;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 30) -> create();
    }
}
