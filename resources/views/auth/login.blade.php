<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RSHP Universitas Airlangga</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="flex justify-center items-center bg-gray-50 h-screen overflow-hidden">

    <div class="flex md:flex-row flex-col bg-white shadow-2xl w-full h-full overflow-hidden">

        <div class="hidden relative md:flex justify-center items-center bg-cyan-800 md:w-1/2">
            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=2068&auto=format&fit=crop"
                alt="Vet caring for cat"
                class="absolute inset-0 opacity-50 w-full h-full object-cover mix-blend-overlay">

            <div class="z-10 relative p-12 max-w-lg text-white">
                <div class="flex items-center space-x-3 mb-6">
                    <div>
                        <img src="https://unair.ac.id/wp-content/uploads/2021/04/Logo-Universitas-Airlangga-UNAIR-768x768.png"
                            alt="Unair" class="size-10">
                    </div>
                    <div>
                        <h1 class="font-bold text-2xl leading-none">RSHP UNAIR</h1>
                        <p class="opacity-80 text-xs tracking-widest">UNIVERSITAS AIRLANGGA</p>
                    </div>
                </div>
                <h2 class="mb-4 font-bold text-4xl">Selamat Datang Kembali</h2>
                <p class="mb-8 text-cyan-100 text-lg">Akses rekam medis hewan kesayangan Anda, jadwal vaksinasi, dan
                    konsultasi dokter dalam satu akun.</p>

                <div
                    class="flex items-center space-x-4 bg-white/10 backdrop-blur-sm p-4 border border-white/20 rounded-lg">
                    <div class="flex -space-x-2">
                        <img class="border-2 border-cyan-800 rounded-full w-8 h-8"
                            src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                        <img class="border-2 border-cyan-800 rounded-full w-8 h-8"
                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                        <img class="border-2 border-cyan-800 rounded-full w-8 h-8"
                            src="https://randomuser.me/api/portraits/women/68.jpg" alt="User">
                    </div>
                    <div class="text-sm">
                        <p class="font-bold">10.000+ Pemilik Hewan</p>
                        <p class="opacity-80 text-xs">Telah bergabung bersama kami</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col justify-center bg-white p-8 md:p-16 lg:p-24 w-full md:w-1/2">

            <div class="flex justify-between items-start w-full">
                <div class="md:hidden flex justify-center items-center space-x-2 mt-8 mb-8">
                    <i class="text-cyan-600 text-2xl fas fa-paw"></i>
                    <span class="font-bold text-gray-800 text-xl">RSHP UNAIR</span>
                </div>
                <div class="mb-8">
                    <h3 class="font-bold text-gray-900 text-2xl">Masuk ke Akun</h3>
                    <p class="mt-1 text-gray-500 text-sm">Silakan masukkan email dan password Anda.</p>
                </div>
                <a href="#"
                    class="flex items-center font-medium text-gray-400 hover:text-cyan-600 text-sm transition">
                    <i class="fa-arrow-left mr-2 fas"></i> Kembali ke Beranda
                </a>
            </div>


            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block mb-1 font-medium text-gray-700 text-sm">Email Address</label>
                    <div class="relative">
                        <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 far fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 py-3 pr-4 pl-10 border border-gray-200 focus:border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 w-full text-gray-700 text-sm transition"
                            placeholder="nama@email.com" required>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1">
                        <label for="password" class="block font-medium text-gray-700 text-sm">Password</label>
                        <a href="#" class="font-medium text-cyan-600 hover:text-cyan-800 text-xs">Lupa
                            Password?</a>
                    </div>
                    <div class="relative">
                        <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 fas fa-lock"></i>
                        </div>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 py-3 pr-4 pl-10 border border-gray-200 focus:border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 w-full text-gray-700 text-sm transition"
                            placeholder="••••••••" required>
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                        class="border-gray-300 rounded focus:ring-cyan-500 w-4 h-4 text-cyan-600">
                    <label for="remember-me" class="block ml-2 text-gray-600 text-sm">
                        Ingat saya
                    </label>
                </div>

                <button type="submit"
                    class="flex justify-center items-center bg-cyan-600 hover:bg-cyan-700 shadow-md hover:shadow-lg py-3 rounded-lg w-full font-semibold text-white transition duration-200">
                    Masuk Sekarang <i class="fa-arrow-right ml-2 text-xs fas"></i>
                </button>
            </form>

            <div class="relative mt-8 mb-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="border-gray-200 border-t w-full"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="bg-white px-2 text-gray-500">Atau masuk dengan</span>
                </div>
            </div>

            <div class="gap-3 grid grid-cols-2">
                <button
                    class="flex justify-center items-center hover:bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg font-medium text-gray-700 text-sm transition">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="mr-2 w-5 h-5" alt="Google">
                    Google
                </button>
                <button
                    class="flex justify-center items-center hover:bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg font-medium text-gray-700 text-sm transition">
                    <i class="mr-2 text-blue-600 text-lg fab fa-facebook"></i>
                    Facebook
                </button>
            </div>

            <p class="mt-8 text-gray-600 text-sm text-center">
                Belum punya akun?
                <a href="#" class="font-semibold text-cyan-600 hover:text-cyan-800 hover:underline">Daftar Pasien
                    Baru</a>
            </p>

            <div class="mt-auto pt-6 md:text-left text-center">
                <p class="text-gray-400 text-xs">&copy; 2024 RSHP Universitas Airlangga. Privacy Policy</p>
            </div>
        </div>
    </div>
</body>

</html>
