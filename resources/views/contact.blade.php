@extends('layout.app')

@section('title', $title)

@section('page-content')
<section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Saya</h1>
            <p class="text-xl text-gray-600">Mari berkolaborasi dan buat sesuatu yang amazing!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-primary text-xl mr-4"></i>
                        <div>
                            <p class="text-gray-600">Email</p>
                            <p class="font-semibold text-gray-800">{{ $contact_info['email'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-primary text-xl mr-4"></i>
                        <div>
                            <p class="text-gray-600">Telepon</p>
                            <p class="font-semibold text-gray-800">{{ $contact_info['phone'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-primary text-xl mr-4"></i>
                        <div>
                            <p class="text-gray-600">Lokasi</p>
                            <p class="font-semibold text-gray-800">{{ $contact_info['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Nama</label>
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition duration-300">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition duration-300">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Pesan</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition duration-300"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection