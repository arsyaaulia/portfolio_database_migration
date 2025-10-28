@extends('layout.app')

@section('title', $title)

@section('page-content')
<!-- Hero Section -->
<section class="bg-primary py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-center mb-6">
            <div class="w-32 h-32 bg-white rounded-full shadow-lg flex items-center justify-center">
                <i class="fas fa-user text-4xl text-primary"></i>
            </div>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-4">Halo, I'm Arsya</h1>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Full Stack Developer yang passionate dalam membuat aplikasi web yang indah dan functional
        </p>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('about') }}" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-md">
                <i class="fas fa-user mr-2"></i>About Me
            </a>
            <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-md">
                <i class="fas fa-envelope mr-2"></i>Get in Touch
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Skills & Technologies</h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">
        @foreach($skills as $skill)
        <div class="bg-primary rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
            <i class="{{ $skill->icon }} text-3xl text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-800">{{ $skill->name }}</h3>
        </div>
        @endforeach

        @foreach($projects as $project)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $project->name }}</h3>
                <p class="text-gray-600 mb-4">{{ $project->description }}</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(json_decode($project->technologies) as $tech)
                    <span class="bg-primary text-blue-600 px-3 py-1 rounded-full text-sm">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    

</section>


{{-- <!-- Skills Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Skills & Technologies</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach($skills as $skill)
            <div class="bg-primary rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                <i class="fas fa-code text-3xl text-blue-600 mb-3"></i>
                <h3 class="font-semibold text-gray-800">{{ $skill }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-16 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Project Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $project['name'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech'] as $tech)
                        <span class="bg-primary text-blue-600 px-3 py-1 rounded-full text-sm">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}
@endsection