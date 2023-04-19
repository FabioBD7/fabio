<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivrosTableSeeder extends Seeder
{
    static $livros_lista = [
        ['o nome da rosa', 'Umberto Ecco'],
        ['O silencio dos inocentes', 'thonas harris'],
        ['Collector', 'Professor Maluco'],
        ['O codigo da vinci', 'Dam Brown']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$livros_lista as $livro )
        {
            DB::table('livros')->insert([
                'titulo' => $livro[0],
                'autor' => $livro[1],
                'isbn' => random_int(100000, 999999)

            ]);
        }
    }
}
