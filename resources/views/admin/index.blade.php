@extends('layout.app')

@section('title', $title)

@section('page-content')
<section class="py-8 bg-primary min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Admin Dashboard</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-primary mr-4">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-600">Pengunjung</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $stats['visitors'] }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-primary mr-4">
                        <i class="fas fa-briefcase text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-600">Projects</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $stats['projects'] }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-primary mr-4">
                        <i class="fas fa-file-alt text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-600">Blog Posts</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $stats['blog_posts'] }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-primary mr-4">
                        <i class="fas fa-envelope text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-600">Pesan</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $stats['messages'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Quick Actions</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button class="bg-primary text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">
                    <i class="fas fa-plus mr-2"></i>Tambah Project
                </button>
                <button class="bg-primary text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">
                    <i class="fas fa-edit mr-2"></i>Edit Blog
                </button>
                <button class="bg-primary text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">
                    <i class="fas fa-cog mr-2"></i>Settings
                </button>
                <button class="bg-primary text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">
                    <i class="fas fa-chart-bar mr-2"></i>Analytics
                </button>
            </div>
        </div>
    </div>
</section>
@endsection