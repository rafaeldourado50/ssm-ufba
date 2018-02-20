<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Área I',
                'description' => 'Ciências Físicas, Matemática e Tecnologia',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Área II',
                'description' => 'Ciências Biológicas e Profissões da Saúde',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Área III',
                'description' => 'Filosofia e Ciências Humanas',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Área IV',
                'description' => 'Letras',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Área V',
                'description' => 'Artes',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'BI',
                'description' => 'Bacharelados Interdisciplinares e Tecnólogos',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Campus Vitória da Conquista',
                'description' => 'Instituto Multidisciplinar em Saúde',
                'created_at' => '2018-01-23 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
