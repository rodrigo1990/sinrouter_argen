<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testIndexView(){

        $response = $this->get('index');

        $response->assertViewHas('provincias');

        //$response->dumpHeaders();

        //$response->assertViewIs('index');
    }


    public function testIndexView(){

    	$response = $this->call('GET','index');


    	$response->assertViewIs('index');
    }
}
