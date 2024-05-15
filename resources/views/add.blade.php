<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        
        <div class="relative flex items-center justify-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
            
            <div class="max-w-6xl mx-auto mt-16 bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">List Produk</h2>
                <div class="flex items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Daftar Produk</h3>
                    <a href="/create" class="bg-green-500 text-black px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">Tambah Produk</a>
                </div>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left text-gray-700">Nama Barang</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left text-gray-700">Nama User</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left text-gray-700">Tanggal Masuk</th>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left text-gray-700">Barcode</th>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300">{{$product->nama_barang}}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{$product->nama_user}}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{$product->tgl_masuk_barang}}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{!!DNS1D::getBarcodeHTML("$product->code",'C128')!!}
                            P - {{$product->code}}</td>
                            <td class="py-2 px-5 border-b border-gray-300">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                                </button>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-FULL hover:bg-red-600 transition duration-300" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

</html>
