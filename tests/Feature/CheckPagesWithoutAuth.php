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
        $response = $this->get('/fap')->assertRedirect('/fap/login');
        $response = $this->get('/fap/news')->assertRedirect('/fap/login');
        $response = $this->get('/fap/create-product')->assertRedirect('/fap/login');
        $response = $this->get('/fap/create-news')->assertRedirect('/fap/login');
        $response = $this->get('/fap/profile')->assertRedirect('/fap/login');
        $response = $this->get('/fap/product/{id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/categories')->assertRedirect('/fap/login');
        $response = $this->get('/fap/users-list')->assertRedirect('/fap/login');
        $response = $this->get('/fap/users-list/edit-user/{id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/my-developments')->assertRedirect('/fap/login');
        $response = $this->get('/fap/products-library')->assertRedirect('/fap/login');
        $response = $this->get('/fap/statistics')->assertRedirect('/fap/login');
        $response = $this->get('/fap/developers-requests')->assertRedirect('/fap/login');
        $response = $this->get('/fap/groups-list')->assertRedirect('/fap/login');
        $response = $this->get('/fap/journal/{id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/download-release/{id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/permissions')->assertRedirect('/fap/login');
        $response = $this->get('/fap/desired-products')->assertRedirect('/fap/login');
        $response = $this->get('/fap/new-products')->assertRedirect('/fap/login');
        $response = $this->get('/fap/desired-product-users/{product_id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/download-releases/{id}')->assertRedirect('/fap/login');
        $response = $this->get('/fap/profile')->assertRedirect('/fap/login');
        $response = $this->get('/fap/profile')->assertRedirect('/fap/login');
    }
}
