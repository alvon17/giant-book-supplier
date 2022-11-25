<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show() {
        $books = Book::all();
        $categories = Category::all();
        return view('home', ['books'=>$books, 'categories'=>$categories]);
    }

    public function findDetail($id){
        $book = Book::find($id);
        $categories = Category::all();
        return view('detail', ['book' => $book, 'categories'=>$categories]);
    }

    public function findCategory($id){
        $category = Category::find($id);
        $categories = Category::all();
        return view('category', ['category' => $category, 'categories'=>$categories]);
    }

    public function showPublishers() {
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('publisher', ['publishers' => $publishers, 'categories'=>$categories]);
    }

    public function sendCategories(){
        $categories = Category::all();
        return view('contact', ['categories'=>$categories]);
    }
}
