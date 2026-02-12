<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RSHP Universitas Airlangga')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(90deg, rgba(14, 116, 144, 0.9) 0%, rgba(6, 182, 212, 0.4) 100%);
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="hidden md:block bg-white py-2 border-b text-xs">
        <div class="flex justify-between items-center mx-auto px-4 text-gray-500 container">
            <div class="flex space-x-4">
                <span><i class="mr-1 fas fa-phone-alt"></i> (031) 5992785</span>
                <span><i class="mr-1 fas fa-envelope"></i> info@rsh.unair.ac.id</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-cyan-600">Karir</a>
                <a href="#" class="hover:text-cyan-600">Berita</a>
                <div class="flex items-center space-x-1">
                    <span class="bg-cyan-600 px-1 rounded text-[10px] text-white">IND</span>
                    <span>ENG</span>
                </div>
            </div>
        </div>
    </div>

    <nav class="top-0 z-50 sticky bg-white shadow-sm">
        <div class="flex justify-between items-center mx-auto px-4 py-3 container">
            <div class="flex items-center space-x-3">
                <div>
                    <img src="https://unair.ac.id/wp-content/uploads/2021/04/Logo-Universitas-Airlangga-UNAIR-768x768.png"
                        alt="Unair" class="size-10">
                </div>
                <div>
                    <h1 class="font-bold text-blue-900 text-lg leading-tight">RSHP</h1>
                    <p class="text-gray-500 text-xs tracking-wider">UNIVERSITAS AIRLANGGA</p>
                </div>
            </div>

            <div class="hidden lg:flex space-x-8 font-medium text-gray-700 text-sm">
                <a href="#" class="hover:text-cyan-600">Tentang Kami</a>
                <a href="#" class="hover:text-cyan-600">Layanan Medis</a>
                <a href="#" class="hover:text-cyan-600">Dokter Hewan</a>
                <a href="#" class="hover:text-cyan-600">Fasilitas</a>
                <a href="#" class="hover:text-cyan-600">Edukasi</a>
            </div>

            <a href="/login"
                class="hidden md:block bg-cyan-600 hover:bg-cyan-700 px-6 py-2 rounded-full font-semibold text-white text-sm transition">
                <i class="fa-arrow-right-to-bracket mr-2 fa-solid"></i>Masuk
            </a>

            <button class="lg:hidden text-gray-700 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-12 text-gray-300 text-sm">
        <div class="mx-auto px-4 container">
            <div class="gap-8 grid grid-cols-1 md:grid-cols-4 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4 font-bold text-white text-lg">
                        <i class="text-cyan-500 fas fa-paw"></i>
                        <span>RSHP UNAIR</span>
                    </div>
                    <p class="mb-4 text-gray-400">Kampus C Mulyorejo,<br>Surabaya, Jawa Timur 60115</p>
                    <p>Telp: (031) 5992785</p>
                    <p>Email: info@rsh.unair.ac.id</p>
                </div>

                <div>
                    <h4 class="mb-4 font-bold text-white uppercase">Perusahaan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-cyan-500 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">Manajemen</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">Karir</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">Mitra</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="mb-4 font-bold text-white uppercase">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-cyan-500 transition">Janji Temu Dokter</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="mb-4 font-bold text-white uppercase">Jam Operasional</h4>
                    <p class="mb-2">Senin - Jumat: 08.00 - 20.00</p>
                    <p class="mb-2">Sabtu: 08.00 - 15.00</p>
                    <p class="mb-2 font-bold text-red-400">UGD: 24 Jam / 7 Hari</p>
                </div>
            </div>

            <div class="flex md:flex-row flex-col justify-between items-center pt-8 border-gray-700 border-t">
                <p>&copy; {{ date('Y') }} RSHP Universitas Airlangga. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#"
                        class="flex justify-center items-center bg-gray-700 hover:bg-cyan-600 rounded-full w-8 h-8 transition"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#"
                        class="flex justify-center items-center bg-gray-700 hover:bg-cyan-600 rounded-full w-8 h-8 transition"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#"
                        class="flex justify-center items-center bg-gray-700 hover:bg-cyan-600 rounded-full w-8 h-8 transition"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="top-1/2 right-0 z-50 fixed flex flex-col space-y-2 -translate-y-1/2 transform">
        <a href="#" class="bg-blue-600 shadow-lg p-3 hover:pl-5 rounded-l-md text-white transition-all"><i
                class="fab fa-facebook-f"></i></a>
        <a href="#" class="bg-pink-600 shadow-lg p-3 hover:pl-5 rounded-l-md text-white transition-all"><i
                class="fab fa-instagram"></i></a>
        <a href="#" class="bg-green-500 shadow-lg p-3 hover:pl-5 rounded-l-md text-white transition-all"><i
                class="fab fa-whatsapp"></i></a>
        <a href="#" class="bg-blue-400 shadow-lg p-3 hover:pl-5 rounded-l-md text-white transition-all"><i
                class="fas fa-map-marker-alt"></i></a>
    </div>

    @stack('scripts')
</body>

</html>
