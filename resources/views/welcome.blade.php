<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?technology,business');
            background-size: cover;
            background-position: center;
            height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            transition: transform 0.5s ease-in-out;
        }
        .hero:hover {
            transform: scale(1.02);
        }
        .overlay {
            background: rgba(0, 0, 0, 0.7);
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            animation: fadeIn 1.2s ease-in-out;
        }
        .logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 24px;
            transition: transform 0.3s;
        }
        .social-icons a:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    <div id="app">
        <nav class="bg-gradient-to-r from-indigo-700 to-purple-600 text-white py-5 shadow-lg">
            <div class="container mx-auto flex flex-col items-center px-6">
                <div class="mb-4">
                    <img src="{{ asset('img/img.jpg') }}" alt="Logo" class="logo">  
                </div>
                <div class="space-x-6 text-lg flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn-custom btn-dashboard">
                                <i class="ph ph-house"></i> Dashboard
                            </a>
                            <a href="{{route('qrcode.index')}}" class="btn-custom btn-qrcode">
                                <i class="ph ph-qrcode"></i> QR Code
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg bg-white text-purple-700 hover:bg-gray-200 transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2 rounded-lg bg-purple-600 hover:bg-purple-700 transition">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <main class="hero">
            <div class="overlay">
                <h1 class="text-4xl font-bold">Selamat Datang di Platform Saya</h1>
                <p class="text-lg text-gray-300 mt-3">Temukan berbagai fitur menarik yang akan membantu bisnis dan kebutuhan teknologi Anda.</p>
                <a href="#" class="mt-5 inline-block bg-purple-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-purple-700 transition transform hover:scale-110">Pelajari Lebih Lanjut</a>
            </div>
        </main>

        <section class="container mx-auto my-12 p-8 bg-white shadow-lg rounded-lg text-center">
            <h2 class="text-3xl font-bold text-purple-700 mb-6">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-purple-100 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <i class="ph ph-chart-line text-4xl text-purple-600"></i>
                    <h3 class="text-xl font-semibold mt-3">Analisis Data</h3>
                    <p class="text-gray-700">Alat untuk menganalisis data bisnis dengan mudah.</p>
                </div>
                <div class="p-6 bg-blue-100 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <i class="ph ph-qrcode text-4xl text-blue-600"></i>
                    <h3 class="text-xl font-semibold mt-3">Generator QR Code</h3>
                    <p class="text-gray-700">Buat QR Code untuk bisnis Anda dengan sekali klik.</p>
                </div>
                <div class="p-6 bg-green-100 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <i class="ph ph-bell text-4xl text-green-600"></i>
                    <h3 class="text-xl font-semibold mt-3">Notifikasi Real-Time</h3>
                    <p class="text-gray-700">Dapatkan pemberitahuan instan untuk setiap update.</p>
                </div>
            </div>
        </section>

        <footer class="bg-gray-900 text-white py-6 shadow-inner text-center mt-12">
            <div class="container mx-auto">
                <p>&copy; 2025 Alexsander Sutrino Lesiela</p>
                <div class="social-icons mt-4">
                    <a href="#" class="text-blue-500"><i class="ph ph-facebook-logo"></i></a>
                    <a href="#" class="text-green-500"><i class="ph ph-whatsapp-logo"></i></a>
                    <a href="#" class="text-pink-500"><i class="ph ph-instagram-logo"></i></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
