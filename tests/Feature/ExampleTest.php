<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function  testBasicTest()
    {

        // dump($this);
        // $response = $this->get('/');

        // $response->assertStatus(200);
//         fwrite(STDOUT, env('APP_ENV'));
// fwrite(STDOUT, env('CACHE_DRIVER'));
fwrite(STDOUT, $_ENV['MINDAUGAS_OPTION']);
print_r($_ENV);
    }
}
