<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([

            ['name' => 'Calça Top',
            'descricao' => 'Caussa topizera',
            'valor' => 101,
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXMAvdhyUZnqjO6qdnAJ6bYJyRYmqMoOESOQ&s',
            'user_id' => 1, ],

            ['name' => 'Ovo Especial',
            'descricao' => 'Sabor merenda, famoso PF',
            'valor' => 20,
            'foto' => 'https://i.pinimg.com/736x/fe/1c/11/fe1c11c4395fa56f8292d0618fc23e10.jpg',
            'user_id' => 1, ],

            ['name' => 'Tang Cevada',
            'descricao' => 'Recomendado para familia brasileira',
            'valor' => 3,
            'foto' =>'https://images7.memedroid.com/images/UPLOADED105/5511b89c4564b.jpeg' ,
            'user_id' => 1, ],

            ['name' => 'Curso FullStack Rumo Senior ',
            'descricao' => 'Prof . Diego o sabiu',
            'valor' => 101,
            'foto' =>'https://img-c.udemycdn.com/course/750x422/1755476_2755_5.jpg' ,
            'user_id' => 1, ],


        ]);
    }
}
