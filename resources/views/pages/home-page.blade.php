@extends('layouts.main-layout')

@section('title')
    Главная
@endsection

@section('page-content')
    <div class="d-flex flex-row justify-content-between">
      <div class="ml-5 mt-5"  style="width: 70vw">
        <x-home-page.programs-list :products="$products" />
      </div>
      <div class="mr-5 mt-5">
        <div class="container">
          <form action="/filtered-products" method="GET" >
            <input id="search" name="search" type="text"
              class="form-control mb-4" placeholder="Название программы" value="{{ $search ?? '' }}"/>
            <x-home-page.card-with-checkboxes title="Категории" :checkboxes="$categories" entity="category" />
            <x-home-page.card-with-select title="Вид" />
            <x-home-page.card-with-select title="Стоимость" />
            <x-home-page.card-with-checkboxes title="Операционная система" :checkboxes="$operationSystems" entity="os" />
            <button type='submit' class="btn btn-primary w-100 mb-4" >Применить фильтр</button>
          </form>
        </div>
      </div>
    </div>
@endsection
