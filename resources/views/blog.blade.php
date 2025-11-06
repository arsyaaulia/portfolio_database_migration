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
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-primary text-blue-600 px-3 py-1 rounded-full text-sm">{{ $post->category }}</span>
                        <span class="text-gray-500 text-sm">{{ $post->published_at->format('d M Y') }}</span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $post->title }}</h2>
                    
                    <!-- Tampilkan author dari relationship -->
                    <p class="text-gray-600 mb-2">
                        <i class="fas fa-user mr-1"></i>By: {{ $post->user->name }}
                    </p>
                    
                    <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                    
                    <!-- Tampilkan jumlah comments -->
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-primary font-semibold hover:text-blue-600 transition duration-300">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <span class="text-gray-500 text-sm">
                            <i class="fas fa-comment mr-1"></i>{{ $post->comments->count() }} Comments
                        </span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection