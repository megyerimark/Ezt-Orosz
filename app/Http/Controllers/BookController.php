<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBookData;

class BookController extends Controller
{
    public function newBook(){
        return view ("books");
    }



    public function submitBook(StoreBookData $request){
     

     $name = DB::table('names')->insert([
        "name" => $request->input('name'),
     ]);
     print_r('name');
    
    }
    public function booksData() {
        $data = DB::table("books")->select("books.id as bookId","name",
        "price","type","type.id as typeId")->join("types",  "books.type_id",
        "=", "types.id")->get();
        echo "<pre>";
       print_r($data);

    } 



}
