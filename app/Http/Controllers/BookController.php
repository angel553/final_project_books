<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $tags = Tag::all();        
        return view('books.index', compact('books','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('books.createBook', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'max:50'],
            'autor' => ['required', 'max:255'],
            'editorial' => ['required', 'max:50'],
            'isbn' => ['required', 'min:13', 'max:13'],
            'paginas' => ['required', 'min:1', 'min:9999'],
            'fecha' => 'required',
            'paginas' => ['required', 'min:1', 'max:9999'],
            'precio' => ['required', 'min:1', 'max:9999'],
            'etiqueta_id' => ['required'],
        ]);
        
        //dd($request);
        
        $book = new Book();
        
        $book->user_id = Auth::user()->id;         
        $book->titulo = $request->titulo;        
        $book->autor = $request->autor;
        $book->editorial = $request->editorial;
        $book->isbn = $request->isbn;
        $book->paginas = $request->paginas;
        $book->fecha = $request->fecha;
        $book->precio = $request->precio;

        //dd($book);
        
        $book->save();

        $book->tags()->attach($request->etiqueta_id);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.readBook', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $tags = Tag::all();
        return view('books.createBook', compact('book','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titulo' => ['required', 'max:50'],
            'autor' => ['required', 'max:255'],
            'editorial' => ['required', 'max:50'],
            'isbn' => ['required', 'min:13', 'max:13'],
            'paginas' => ['required', 'min:1', 'min:9999'],
            'fecha' => 'required',
            'paginas' => ['required', 'min:1', 'max:9999'],
            'precio' => ['required', 'min:1', 'max:9999'],
            'etiqueta_id' => ['required'],
        ]);
        
        $book->user_id = Auth::user()->id;
        $book->titulo = $request->titulo;        
        $book->autor = $request->autor;
        $book->editorial = $request->editorial;
        $book->isbn = $request->isbn;
        $book->paginas = $request->paginas;
        $book->fecha = $request->fecha;
        $book->precio = $request->precio;

        $book->save();     
        
        $book->tags()->sync($request->etiqueta_id);

        return redirect('/');
        //return redirect('/libro/' . $libro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBooks()
    {
        $books = Book::all();           
        return view('books.showBooks', compact('books'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMyBooks()
    {        
        $books = Auth::user()->books;                
        //dd($books);
        return view('books.showMyBooks', compact('books'));
    }
}
