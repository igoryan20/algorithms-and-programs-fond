<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckPagesWithoutAuth extends TestCase
{
    /**
     * A check that unautorisated user redirected
     * to login page
     * @return void
     * @test
     */
    public function checkPages()
    {
        $response = $this->get('/')->assertRedirect('/login');
        $response = $this->get('/news')->assertRedirect('/login');
        $response = $this->get('/filtered-products')->assertRedirect('/login');
        $response = $this->get('/create-product')->assertRedirect('/login');
        $response = $this->get('/create-news')->assertRedirect('/login');
        $response = $this->get('/profile')->assertRedirect('/login');
        $response = $this->get('/product/{id}')->assertRedirect('/login');
        $response = $this->get('/categories')->assertRedirect('/login');
        $response = $this->get('/users-list')->assertRedirect('/login');
        $response = $this->get('/users-list/edit-user/{id}')->assertRedirect('/login');
        $response = $this->get('/my-developments')->assertRedirect('/login');
        $response = $this->get('/products-library')->assertRedirect('/login');
        $response = $this->get('/statistics')->assertRedirect('/login');
        $response = $this->get('/developers-requests')->assertRedirect('/login');
        $response = $this->get('/groups-list')->assertRedirect('/login');
        $response = $this->get('/journal/{id}')->assertRedirect('/login');
        $response = $this->get('/download-release/{id}')->assertRedirect('/login');
        $response = $this->get('/permissions')->assertRedirect('/login');
        $response = $this->get('/desired-products')->assertRedirect('/login');
        $response = $this->get('/new-products')->assertRedirect('/login');
        $response = $this->get('/publish/{id}')->assertRedirect('/login');
        $response = $this->get('/desired-product-users/{product_id}')->assertRedirect('/login');
        $response = $this->get('/download-releases/{id}')->assertRedirect('/login');
        $response = $this->get('/profile')->assertRedirect('/login');
        $response = $this->get('/profile')->assertRedirect('/login');
    }
}
