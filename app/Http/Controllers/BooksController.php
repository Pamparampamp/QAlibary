<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
//         public function store(){
//     $data = request()->validate([ 'isbn' => 'required', 'title' => 'required' ]);
//         // Book::create(request()->all());
//         Book::create($data);

// }
// public function update(Book $book){
// $data = request()->validate([ 'title' => 'required' ]);
// $book->update($data);
// }


public function store(){
Book::create($this->validateRequest());
}
public function update(Book $book){
$book->update($this->validateRequest());
}
private function validateRequest(){
return request()->validate([ 'isbn' => 'required', 'title' => 'required' ]);
}
}
