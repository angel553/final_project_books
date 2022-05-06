<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'tag' => 'Venta'
            ],
            [
                'tag' => 'Intercambio'
            ],
            [
                'tag' => 'No disponible'
            ]
        ];

        foreach($tags as  $tag){
            Tag::create($tag);
        }

}
}