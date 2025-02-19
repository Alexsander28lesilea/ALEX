<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?business,technology');
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <div id="app">
        <nav class="bg-gradient-to-r from-purple-600 to-indigo-600 shadow-md py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('img/img.jpg') }}" alt="Logo" class="h-12 mr-3">
                    <span class="text-white text-lg font-bold">QR CODE</span>
                </a>
                <div class="space-x-6 text-lg flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
                            <a href="{{ route('qrcode.index') }}" class="bg-white text-purple-600 py-2 px-4 rounded-lg shadow-lg hover:bg-gray-200">QR Code</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-gray-300">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-white text-purple-600 py-2 px-4 rounded-lg shadow-lg hover:bg-gray-200">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <header class="hero">
            <div>
                <h1 class="text-4xl font-extrabold">Selamat Datang di QR Code Generator</h1>
            </div>
        </header>

        <main class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-semibold text-purple-700 mb-4">Buat QR Code Baru</h2>
            <form action="{{ route('qrcode.store') }}" method="POST" class="bg-gray-50 p-6 rounded-lg shadow">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama:</label>
                        <input type="text" id="nama" name="nama" class="w-full p-3 border rounded-lg focus:ring focus:ring-purple-300" placeholder="Masukkan Nama" required>
                    </div>
                    <div>
                        <label for="kelas" class="block text-gray-700 font-bold mb-2">Kelas:</label>
                        <input type="text" id="kelas" name="kelas" class="w-full p-3 border rounded-lg focus:ring focus:ring-purple-300" placeholder="Masukkan Kelas" required>
                    </div>
                    <div>
                        <label for="no_hp" class="block text-gray-700 font-bold mb-2">No HP:</label>
                        <input type="text" id="no_hp" name="no_hp" class="w-full p-3 border rounded-lg focus:ring focus:ring-purple-300" placeholder="Masukkan No HP" required>
                    </div>
                </div>
                <button type="submit" class="mt-6 w-full md:w-auto bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg">Simpan</button>
            </form>

            <h2 class="text-xl font-semibold text-purple-700 mt-10 mb-4">Daftar Siswa</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse bg-gray-50 rounded-lg shadow">
                    <thead>
                        <tr class="bg-purple-600 text-white text-left">
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Kelas</th>
                            <th class="px-6 py-3">Nomor HP</th>
                            <th class="px-6 py-3 text-center">QR Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="border-b text-gray-700">
                            <td class="px-6 py-3">{{ $item->nama }}</td>
                            <td class="px-6 py-3">{{ $item->kelas }}</td>
                            <td class="px-6 py-3">{{ $item->no_hp }}</td>
                            <td class="px-6 py-3 text-center">
                                <a href="{{ route('qrcode.generate', $item->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Generate</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <footer class="bg-white shadow-md py-6 mt-10 text-center">
            <p>&copy; 2025 Alexsander Sutrino Lesiela.</p>
            <div class="mt-2">
                <a href="#" class="text-purple-600 hover:text-purple-800 mx-2">Kebijakan Privasi</a>
                <a href="#" class="text-purple-600 hover:text-purple-800 mx-2">Syarat dan Ketentuan</a>
            </div>
        </footer>
    </div>
</body>
</html>
