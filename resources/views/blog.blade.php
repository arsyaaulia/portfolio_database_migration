@extends('layout.app')

@section('title', $title)

@section('page-content')
<section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Blog & Artikel</h1>
            <p class="text-xl text-gray-600">Pemikiran, tutorial, dan sharing knowledge</p>
        </div>

        <div class="space-y-8">
            @foreach($posts as $post)
   
        </div>
    </div>
</section>
@endsection