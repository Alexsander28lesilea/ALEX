<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .logo {
            height: 50px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <div id="app">
        <!-- Navbar -->
        <nav class="bg-gradient-to-r from-indigo-600 to-purple-700 shadow-lg py-5">
            <div class="container mx-auto flex justify-between items-center px-6">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('img/img.jpg') }}" alt="Logo" class="logo mr-2">
                    <span class="text-white text-lg font-bold">QR Code Scanner</span>
                </a>
                <div class="space-x-6 text-lg flex items-center">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/') }}" class="bg-white text-indigo-600 py-2 px-4 rounded-lg hover:bg-indigo-100 transition duration-300 shadow-md">
                        Home
                    </a>
                    <a href="{{ route('qrcode.index') }}" class="bg-purple-800 text-white py-2 px-4 rounded-lg hover:bg-purple-900 transition duration-300 shadow-md">
                        QR Code
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="bg-white text-indigo-600 py-2 px-4 rounded-lg hover:bg-indigo-100 transition duration-300 shadow-md">
                        Login
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-purple-800 text-white py-2 px-4 rounded-lg hover:bg-purple-900 transition duration-300 shadow-md">
                        Register
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="container mx-auto mt-12 flex flex-col items-center">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden p-10 max-w-3xl w-full text-center">
                <h1 class="text-4xl font-bold text-indigo-700 mb-6">QR Code untuk {{ $siswa->nama }}</h1>
                <div class="flex justify-center">
                    <div class="border-4 border-indigo-500 rounded-lg p-8 bg-gray-50 shadow-md">
                        {!! $qrcode !!}
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('qrcode.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg">
                        Kembali
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white shadow-inner py-6 mt-16">
            <div class="container mx-auto text-center text-gray-600">
                &copy; 2025 QR Code App. All Rights Reserved.
                <a href="#" class="text-indigo-600 hover:text-indigo-800 ml-4">Privacy Policy</a>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 ml-4">Terms & Conditions</a>
            </div>
        </footer>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                isLoggedIn: false
            },
            mounted() {
                axios.get('/api/user')
                    .then(response => {
                        if (response.data) {
                            this.isLoggedIn = true;
                        }
                    })
                    .catch(error => {
                        console.log('Error checking login status', error);
                    });
            }
        });
    </script>
</body>

</html>
