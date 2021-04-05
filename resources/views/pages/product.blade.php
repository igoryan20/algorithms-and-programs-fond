@extends('layouts.main-layout')

@section('title')
    {{ $product->name }}
@endsection

@section('page-content')
    <x-product-page.menu :product="$product" :isDesired="$isDesired" />
    <hr>
    <div class="d-flex justify-content-between">
        <x-product-page.carousel-images :photo-paths="$photo_paths" :product="$product" />
        <x-product-page.about :product="$product" :categories="$categories" :developer="$developer" />
    </div>

    <style>
        label {
            cursor: pointer;
        }
        #upload-photo {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>
    <script src="{{asset('js/upload-photo.js')}}"></script>
@endsection
