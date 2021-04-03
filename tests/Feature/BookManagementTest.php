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
public function book_can_be_added() {
    $this->withoutExceptionHandling();
$response = $this->post('/books', [
'isbn' => 9780840700551,
'title' => 'Holy Bible'
]);
$response->assertStatus(200);
$this->assertCount(1, Book::all());
}
}
