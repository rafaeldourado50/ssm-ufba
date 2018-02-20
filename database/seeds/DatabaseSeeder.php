<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('AreasTableSeeder');
        $this->call('CoursesTableSeeder');
        $this->call('DisciplinesTableSeeder');
        $this->call('DisciplineClassesTableSeeder');
        $this->call('DisciplineClassOffersTableSeeder');
        $this->call('CourseClassOffersTableSeeder');
        $this->call('CourseDisciplinesTableSeeder');
        $this->call('PreRequisitesTableSeeder');
        $this->call('ProfessorsTableSeeder');
        $this->call('SchedulesTableSeeder');
        $this->call('ProfessorSchedulesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('UserRolesTableSeeder');
        $this->call('UserPermissionsTableSeeder');
        $this->call('RolePermissionsTableSeeder');
    }
}
