<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSHP Universitas Airlangga</title>

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

    <header class="relative w-full h-[600px] overflow-hidden">
        <img src="https://plus.unsplash.com/premium_photo-1683140900667-15d8b750bda3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Vet Hospital" class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-transparent"></div>

        <div class="relative flex flex-col justify-center mx-auto px-4 h-full text-white container">
            <h2 class="mb-4 font-bold text-4xl md:text-5xl leading-tight">Pelayanan Medis Veteriner<br>Terbaik di
                Surabaya</h2>
            <p class="mb-8 max-w-xl text-gray-200 text-lg md:text-xl">Layanan kesehatan hewan modern, lengkap, dan
                terpercaya. Kami siap merawat hewan kesayangan Anda 24 jam.</p>

            <div class="flex bg-white/20 backdrop-blur-md p-2 rounded-lg max-w-lg">
                <input type="text" placeholder="Cari nama dokter atau layanan..."
                    class="bg-white px-4 py-3 rounded-l-md focus:outline-none w-full text-gray-800">
                <button class="bg-cyan-600 hover:bg-cyan-700 px-6 py-3 rounded-r-md font-semibold transition">
                    Cari
                </button>
            </div>
        </div>
    </header>

    <section class="bg-white py-16">
        <div class="mx-auto px-4 container">
            <div class="mb-12 text-center">
                <h3 class="font-bold text-cyan-600 text-sm uppercase tracking-wide">Layanan Unggulan</h3>
                <h2 class="font-bold text-gray-900 text-3xl">Pusat Kesehatan Hewan Terlengkap</h2>
            </div>

            <div class="gap-8 grid grid-cols-1 md:grid-cols-3">
                <div class="group bg-white shadow-sm hover:shadow-xl p-6 border rounded-xl text-center transition">
                    <div
                        class="flex justify-center items-center bg-blue-50 group-hover:bg-cyan-600 mx-auto mb-4 rounded-full w-16 h-16 text-cyan-600 group-hover:text-white text-3xl transition">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h4 class="mb-2 font-bold text-blue-900 text-xl">Bedah & Rawat Inap</h4>
                    <p class="mb-4 text-gray-500 text-sm">Fasilitas operasi modern dengan ruang rawat inap intensif
                        untuk pemulihan optimal.</p>
                    <a href="#" class="font-semibold text-cyan-600 text-sm hover:underline">Selengkapnya <i
                            class="fa-chevron-right text-xs fas"></i></a>
                </div>

                <div class="group bg-white shadow-sm hover:shadow-xl p-6 border rounded-xl text-center transition">
                    <div
                        class="flex justify-center items-center bg-blue-50 group-hover:bg-cyan-600 mx-auto mb-4 rounded-full w-16 h-16 text-cyan-600 group-hover:text-white text-3xl transition">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h4 class="mb-2 font-bold text-blue-900 text-xl">Radiologi & USG</h4>
                    <p class="mb-4 text-gray-500 text-sm">Pencitraan diagnostik canggih untuk deteksi dini masalah
                        kesehatan internal.</p>
                    <a href="#" class="font-semibold text-cyan-600 text-sm hover:underline">Selengkapnya <i
                            class="fa-chevron-right text-xs fas"></i></a>
                </div>

                <div class="group bg-white shadow-sm hover:shadow-xl p-6 border rounded-xl text-center transition">
                    <div
                        class="flex justify-center items-center bg-blue-50 group-hover:bg-cyan-600 mx-auto mb-4 rounded-full w-16 h-16 text-cyan-600 group-hover:text-white text-3xl transition">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h4 class="mb-2 font-bold text-blue-900 text-xl">Dental Hewan</h4>
                    <p class="mb-4 text-gray-500 text-sm">Perawatan gigi lengkap mulai dari scaling hingga bedah mulut
                        untuk hewan.</p>
                    <a href="#" class="font-semibold text-cyan-600 text-sm hover:underline">Selengkapnya <i
                            class="fa-chevron-right text-xs fas"></i></a>
                </div>
            </div>

            <div class="md:hidden flex justify-between mt-8">
                <button class="p-2 text-gray-400"><i class="fa-chevron-left fas"></i></button>
                <button class="p-2 text-gray-400"><i class="fa-chevron-right fas"></i></button>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-8 border-y">
        <div class="mx-auto px-4 container">
            <h3 class="mb-6 font-bold text-gray-700 text-sm text-center uppercase tracking-widest">Informasi Cepat RSHP
                Unair</h3>
            <div class="gap-4 grid grid-cols-2 md:grid-cols-4">
                <a href="#"
                    class="flex items-center space-x-3 bg-white shadow-sm hover:shadow-md p-3 rounded transition">
                    <i class="text-cyan-600 text-2xl fas fa-user-md"></i>
                    <div class="text-left">
                        <p class="font-bold text-gray-800 text-sm">Cari Dokter</p>
                        <p class="text-gray-500 text-xs">Jadwal Praktik</p>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 bg-white shadow-sm hover:shadow-md p-3 rounded transition">
                    <i class="text-red-500 text-2xl fas fa-ambulance"></i>
                    <div class="text-left">
                        <p class="font-bold text-gray-800 text-sm">UGD 24 Jam</p>
                        <p class="text-gray-500 text-xs">Emergency</p>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 bg-white shadow-sm hover:shadow-md p-3 rounded transition">
                    <i class="text-cyan-600 text-2xl fas fa-map-marker-alt"></i>
                    <div class="text-left">
                        <p class="font-bold text-gray-800 text-sm">Lokasi Kami</p>
                        <p class="text-gray-500 text-xs">Peta Kampus C</p>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 bg-white shadow-sm hover:shadow-md p-3 rounded transition">
                    <i class="text-cyan-600 text-2xl fas fa-headset"></i>
                    <div class="text-left">
                        <p class="font-bold text-gray-800 text-sm">Hubungi Kami</p>
                        <p class="text-gray-500 text-xs">Info & Layanan</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="relative bg-gradient-to-r from-cyan-600 to-blue-600 py-16 overflow-hidden">
        <div class="z-10 relative flex md:flex-row flex-col items-center mx-auto px-4 container">
            <div class="mb-8 md:mb-0 w-full md:w-1/3 text-white">
                <h2 class="mb-4 font-extrabold text-4xl">PROMO TERBAIK<br>UNTUK PELIHARAAN</h2>
                <p class="mb-6 text-blue-100">Dapatkan penawaran khusus untuk vaksinasi dan sterilisasi bulan ini.</p>
                <div class="flex space-x-2">
                    <button class="bg-white/20 hover:bg-white/30 p-3 rounded-full"><i
                            class="fa-chevron-left text-white fas"></i></button>
                    <button class="bg-white hover:bg-gray-100 p-3 rounded-full text-cyan-600"><i
                            class="fa-chevron-right fas"></i></button>
                </div>
            </div>

            <div class="md:pl-10 w-full md:w-2/3">
                <div class="flex md:flex-row flex-col bg-white shadow-2xl p-0 rounded-2xl max-w-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?q=80&w=600&auto=format&fit=crop"
                        class="w-full md:w-1/2 h-64 md:h-auto object-cover" alt="Dog Happy">
                    <div class="flex flex-col justify-center p-6 md:w-1/2">
                        <span class="mb-2 font-bold text-cyan-600 text-xs uppercase">Paket Sehat</span>
                        <h3 class="mb-2 font-bold text-gray-900 text-2xl">Vaksinasi Lengkap & Checkup</h3>
                        <p class="mb-4 text-gray-600 text-sm">Lindungi hewan kesayangan dari virus berbahaya. Diskon
                            20% khusus bulan ini.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-blue-600 text-lg">Rp 150.000,-</span>
                            <button class="bg-blue-900 hover:bg-blue-800 px-4 py-2 rounded text-white text-sm">Ambil
                                Promo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-0 right-0 absolute bg-white/5 w-1/2 h-full skew-x-12 translate-x-20 transform"></div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto px-4 container">
            <h2 class="mb-12 font-bold text-gray-900 text-3xl text-center uppercase">Kabar Terbaru</h2>

            <div class="gap-8 grid grid-cols-1 md:grid-cols-3">
                <div
                    class="bg-white shadow-lg border rounded-lg overflow-hidden transition hover:-translate-y-1 duration-300">
                    <div class="relative bg-gray-200 h-48">
                        <img src="https://images.unsplash.com/photo-1599443015574-be5fe8a05783?q=80&w=800&auto=format&fit=crop"
                            class="w-full h-full object-cover">
                        <span
                            class="top-4 left-4 absolute bg-cyan-600 px-2 py-1 rounded font-bold text-white text-xs">Artikel</span>
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 font-bold text-gray-900 text-lg line-clamp-2">Pentingnya Vaksinasi Rabies untuk
                            Kucing Rumahan</h3>
                        <p class="mb-4 text-gray-500 text-sm line-clamp-3">Meskipun kucing Anda hanya di dalam rumah,
                            risiko penularan tetap ada. Simak penjelasan dokter kami.</p>
                        <a href="#" class="font-semibold text-cyan-600 text-sm">Baca Selengkapnya <i
                                class="fa-arrow-right ml-1 fas"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg border rounded-lg overflow-hidden transition hover:-translate-y-1 duration-300">
                    <div class="relative bg-gray-200 h-48">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?q=80&w=800&auto=format&fit=crop"
                            class="w-full h-full object-cover">
                        <span
                            class="top-4 left-4 absolute bg-blue-600 px-2 py-1 rounded font-bold text-white text-xs">Tips</span>
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 font-bold text-gray-900 text-lg line-clamp-2">Cara Mengatasi Heatstroke pada
                            Anjing</h3>
                        <p class="mb-4 text-gray-500 text-sm line-clamp-3">Cuaca panas Surabaya bisa berbahaya. Kenali
                            tanda-tanda heatstroke dan pertolongan pertamanya.</p>
                        <a href="#" class="font-semibold text-cyan-600 text-sm">Baca Selengkapnya <i
                                class="fa-arrow-right ml-1 fas"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg border rounded-lg overflow-hidden transition hover:-translate-y-1 duration-300">
                    <div class="relative bg-gray-200 h-48">
                        <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?q=80&w=800&auto=format&fit=crop"
                            class="w-full h-full object-cover">
                        <span
                            class="top-4 left-4 absolute bg-green-600 px-2 py-1 rounded font-bold text-white text-xs">Berita</span>
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 font-bold text-gray-900 text-lg line-clamp-2">Jadwal Operasional Selama Libur
                            Lebaran</h3>
                        <p class="mb-4 text-gray-500 text-sm line-clamp-3">Informasi penyesuaian jam operasional
                            poliklinik dan layanan darurat selama hari raya.</p>
                        <a href="#" class="font-semibold text-cyan-600 text-sm">Baca Selengkapnya <i
                                class="fa-arrow-right ml-1 fas"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-10">
        <div class="mx-auto px-4 container">
            <div class="gap-6 grid grid-cols-1 md:grid-cols-3">
                <div class="group relative rounded-xl h-64 overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?q=80&w=800&auto=format&fit=crop"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
                    <div class="bottom-6 left-6 absolute text-white">
                        <h3 class="mb-1 font-bold text-2xl uppercase">Berita Terbaru</h3>
                        <p class="opacity-90 text-sm">Update kegiatan RSHP</p>
                    </div>
                </div>

                <div class="group relative rounded-xl h-64 overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=800&auto=format&fit=crop"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
                    <div class="bottom-6 left-6 absolute text-white">
                        <h3 class="mb-1 font-bold text-2xl uppercase">Cek Jadwal</h3>
                        <p class="opacity-90 text-sm">Temukan dokter spesialis</p>
                    </div>
                </div>

                <div class="group relative rounded-xl h-64 overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=800&auto=format&fit=crop"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
                    <div class="bottom-6 left-6 absolute text-white">
                        <h3 class="mb-1 font-bold text-2xl uppercase">Rawat Inap</h3>
                        <p class="opacity-90 text-sm">Fasilitas dan Prosedur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <p>&copy; 2024 RSHP Universitas Airlangga. All rights reserved.</p>
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

</body>

</html>
