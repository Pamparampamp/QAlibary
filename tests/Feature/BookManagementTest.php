<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookManagementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   /** @test */
/** @test */
public function title_is_required_to_create_book() {
// given
// $this->withoutExceptionHandling();
// $bookData = ['isbn' => 9780840700551, 'title' => '' ];
// // when
// // when / then
// $this->expectException(\Illuminate\Validation\ValidationException::class);
// $this->expectExceptionMessage('The given data was invalid.');
// // $response = $this->post('/books', $bookData);
// $response = $this->post('/books', $bookData);
// then
// $response->assertStatus(200);
// $this->assertCount(1, Book::all());
//==============================================================

// // given
// $bookData = ['isbn' => 9780840700551, 'title' => '' ];
// // when
// $response = $this->post('/books', $bookData);
// // then
// $response->assertStatus(302);
// $response->assertSessionHasErrors('title');
// $this->assertCount(0, Book::all());
}


/** @test */
public function book_can_be_added() {
// given
$this->withoutExceptionHandling();
$bookData = ['isbn' => 9780840700551, 'title' => 'Holy Bible' ];
// when
$response = $this->post('/books', $bookData);
// then
// $response->assertStatus(200);
$this->assertCount(1, Book::all());
$response->assertRedirect('/books/' . $bookData['isbn']);
}


/** @test */
public function book_can_be_updated() {
// given
$this->withoutExceptionHandling();
$bookData = ['isbn' => 9780840700551, 'title' => 'Holy Bible' ];
$this->post('/books', $bookData);
// when
$updatedBookData = ['isbn' => 9780840700551, 'title' => 'Anything' ];
$response = $this->put('/books/' . $updatedBookData['isbn'], $updatedBookData);
// then
// $response->assertStatus(200);
$this->assertCount(1, Book::all());
$this->assertEquals($updatedBookData['isbn'], Book::first()->isbn);
$this->assertEquals($updatedBookData['title'], Book::first()->title);
$response->assertRedirect('/books/' . $bookData['isbn']);
}



/** @test */
public function book_can_be_deleted() {
// given
$this->withoutExceptionHandling();
$bookData = ['isbn' => 9780840700551, 'title' => 'Holy Bible' ];
$this->post('/books', $bookData);
// when
$this->assertCount(1, Book::all()); // optional, we have already proved that this works above
$response = $this->delete('/books/' . $bookData['isbn']);
// then
// $response->assertStatus(200);
$this->assertCount(0, Book::all());
$response->assertRedirect('/books/');
}




}
