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





class BooksController extends Controller {
public function store(){
$data = request()->validate([ 'isbn' => 'required', 'title' => 'required' ]);
$book = Book::create($data);
return redirect('/books/' . $book->isbn);
}


private function validateRequest(){
return request()->validate([ 'isbn' => 'required', 'title' => 'required' ]);
}
public function update(Book $book){
$data = request()->validate([ 'isbn' => 'required', 'title' => 'required' ]);
$book->update($data);
return redirect('/books/' . $book->isbn);
}
public function destroy(Book $book){
$book->delete();
return redirect('/books');
}
}
}
