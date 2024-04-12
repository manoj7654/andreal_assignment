<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\book;

class bookController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books=book::all();
        return view("books.index",["books"=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $title = $request->input('title');
        $author = $request->input('author');
        $photo = $request->file('icon')->getClientOriginalName();
        // $request->file('icon')->store('public/images',$photo);
        $request->file('icon')->storeAs('public/images', $photo);

        $books=new book();
        $books->title=$title;
        $books->author=$author;
        $books->photo=$photo;
        $books->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books=book::find($id);
        return view('books.show',['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $book=book::find($id);
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
 

     public function update(Request $request, string $id)
     {
         $book = Book::find($id);
         $title = $request->input('title');
         $author = $request->input('author');
     
         if ($request->hasFile('icon')) {
             if ($book->photo) {
                 Storage::delete('public/images/' . $book->photo);
             }
             $photo = $request->file('icon');
             $extension = $photo->getClientOriginalExtension();
             $filename = time() . '.' . $extension;
             $photo->storeAs('public/images', $filename);
             $book->photo = $filename;
         }
         $book->title = $title;
         $book->author = $author;
         $book->save();
     
         return redirect()->route('books.index', ['book' => $book]);
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book=book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
