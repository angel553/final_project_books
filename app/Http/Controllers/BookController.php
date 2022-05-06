<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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
        $books = Book::latest()->take(6)->get();
        $tags = Tag::all();        
        
//        Session::flash('message','Your message');

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
            'archivo' => ['required'],
        ]);                
        
        $book = new Book();
        
        $book->user_id = Auth::user()->id;         
        $book->titulo = $request->titulo;        
        $book->autor = $request->autor;
        $book->editorial = $request->editorial;
        $book->isbn = $request->isbn;
        $book->paginas = $request->paginas;
        $book->fecha = $request->fecha;
        $book->precio = $request->precio;
        
        //dd($request);

        if($request->hasFile('archivo') && $request->file('archivo')->isValid()) {            
            //$ruta = $request->archivo->store('images');
            
            $ruta = $request->archivo->store('public/images');
            /* $ruta = $request->archivo->storeAs(
                'public/images', $request->archivo->getClientOriginalName()
            );  */                   

            $book->book_image = $request->archivo->getClientOriginalName();
            $book->route_image = $ruta;
            /* $archivo->ruta = $ruta;
            $archivo->mime = $request->archivo->getMimetype();
            dd($archivo);
            $archivo->save(); */
        }                            
        
        $book->save();

        $book->tags()->attach($request->etiqueta_id);

        return redirect('/products')->with('success','Publicación Realizada');
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
            'archivo' => ['required'],
        ]);
                
        if($request->hasFile('archivo') && $request->file('archivo')->isValid()) {                        
            //unlink(storage_path($book->route_image));                        

            /* $path=$request->file('avatar')->storeAs(
                'avatars', $request->user()->id
            ); */
            
            Storage::delete($book->book_image);
            
            $ruta = $request->archivo->store('public/images');            
            /* $ruta = $request->archivo->storeAs(
                'public/images', $request->archivo->getClientOriginalName()
            ); */
            
            $book->book_image = $request->archivo->getClientOriginalName();
            $book->route_image = $ruta;            
        }
                
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

        return redirect('/myproducts')->with('success','Producto Actualizado');
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
        $url = str_replace('storage','public',$book->route_image);
        //dd($url);
        Storage::delete($url);        

        //dd($book->book_image);

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
        $tags = Tag::all();                 
        //dd($books);
        return view('books.showMyBooks', compact('books'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {                                       
        return view('us.contactUs');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUS()
    {                                       
        return view('us.about');
    }
}
