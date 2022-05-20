<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Tag;

class BookTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        $tags = Tag::all();

        foreach ($books as $book)
        {
            foreach ($tags as $tag)
            {
                $book->tags()
                     ->attach([
                         'tag_id' => $tag->id
                     ]);
            }
        }
    }
}
