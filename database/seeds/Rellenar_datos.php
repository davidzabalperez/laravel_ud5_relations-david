<?php

use Illuminate\Database\Seeder;

class Rellenar_datos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0; $i < 10; $i++) { 
            DB::table('departamentos')->insert([
            'codigo' => str_random(8),
            'nombre' => str_random(8)
        
        ]);
        }
        for ($i=0; $i <10 ; $i++) { 
            DB::table('empleados')->insert([
                'nombre'=> str_random(8),
                'apellido1'=> str_random(6),
                'apellido2'=> str_random(6),
                'email'=> str_random(6).'@gmail.com',
                'telefono'=>random_int(943000000,944000000),
                'departamento_id' => random_int(1, 10)
            ]);
        }
        for ($i=0; $i < 10; $i++) { 
            DB::table('proyectos')->insert([
            'nombre' => str_random(5),
            'titulo' => str_random(6),
            'fechainicio' => new DateTime(),
            'fechafin' => new DateTime(),
            'horasestimadas' => random_int(0, 45),
            'empleado_id' => random_int(1, 10)
        ]);
        }
        for ($i=0; $i < 10 ; $i++) { 
        
        DB::table('empleado_proyecto')->insert([
        		'empleado_id' => random_int(1, 10),
        		'proyecto_id' => random_int(1, 10),
        		'fechainicio' => new DateTime(),
        		'fechafin' => new DateTime()
        		
        	]);
        }
    }
}
