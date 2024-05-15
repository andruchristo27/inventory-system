<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <style>
            /* Custom styles for modal background */
            .modal-bg {
                display: none;
            }
            .modal-bg.active {
                display: flex;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="relative flex items-center justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="mt-16">
                <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
                    <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>
                
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_barang" class="block text-gray-700 font-medium mb-2">Nama Barang</label>
                            <input type="text" id="nama_barang" name="nama_barang" value="{{ $product->nama_barang }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_user" class="block text-gray-700 font-medium mb-2">Nama User</label>
                            <input type="text" id="nama_user" name="nama_user" value="{{ $product->nama_user }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div class="mb-4">
                            <label for="tgl_masuk_barang" class="block text-gray-700 font-medium mb-2">Tanggal Masuk Barang</label>
                            <input type="date" id="tgl_masuk_barang" name="tgl_masuk_barang" value="{{ $product->tgl_masuk_barang }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
