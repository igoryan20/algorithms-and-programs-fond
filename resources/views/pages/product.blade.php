@extends('layouts.main-layout')

@section('title')
    {{ $program->name }}
@endsection

@section('page-content')
    <x-product-page.menu :program="$program" />
    <hr>
    <div class="d-flex justify-content-between">
        <x-product-page.carousel-images :photo-paths="$photo_paths" />
        <x-product-page.about :categories="$categories" :program="$program" />
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
