@extends('layout.app')

@section('title', $title)

@section('page-content')
<section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About Me</h1>
            <p class="text-xl text-gray-600">Mari berkenalan lebih dekat</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <div class="w-48 h-48 bg-primary rounded-full mx-auto flex items-center justify-center">
                        <i class="fas fa-user text-6xl text-blue-600"></i>
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $about['nama'] }}</h2>
                    <p class="text-xl text-primary font-semibold mb-4">{{ $about['profesi'] }}</p>
                    <p class="text-gray-600 leading-relaxed">{{ $about['deskripsi'] }}</p>
                </div>
            </div>
        </div>

        <!-- Experience -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Pengalaman Kerja</h3>
            <div class="space-y-6">
                @foreach($about['experience'] as $exp)
                <div class="border-l-4 border-primary pl-6 py-2">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-lg font-semibold text-gray-800">{{ $exp['posisi'] }}</h4>
                        <span class="bg-primary text-blue-600 px-3 py-1 rounded-full text-sm">{{ $exp['tahun'] }}</span>
                    </div>
                    <p class="text-gray-600 font-medium">{{ $exp['perusahaan'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection