<div class="flex flex-col bg-white border-r w-64 min-h-screen">
    <div class="flex items-center p-8 border-b h-16">
        <span class="font-bold text-cyan-700 text-xl">RSHP Admin</span>
    </div>

    <nav class="flex-1 space-y-2 p-4 text-sm">
        <a href="/dashboard"
            class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('dashboard*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
            <i class="w-5 fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/jenis-hewan"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('jenis-hewan*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-cat"></i>
                <span>Jenis Hewan</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/ras-hewan"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('ras-hewan*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-earth-europe"></i>
                <span>Ras Hewan</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/kategori"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('kategori*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-folder"></i>
                <span>Kategori</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/klinis"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('klinis*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-folder-plus"></i>
                <span>Kategori Klinis</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/tindakan-terapi"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('tindakan-terapi*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-square-plus"></i>
                <span>Tindakan Terapi</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Dokter', 'Perawat', 'Pemilik']))
            <a href="/rekam-medis"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('rekam-medis*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-clipboard-list"></i>
                <span>Rekam medis</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Resepsionis', 'Pemilik']))
            <a href="/temu-dokter"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('temu-dokter*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-calendar-plus"></i>
                <span>Temu Dokter</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Dokter', 'Perawat', 'Resepsionis', 'Pemilik']))
            <a href="/pet"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('pet*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fas fa-dog"></i>
                <span>Pet</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Resepsionis', 'Pemilik']))
            <a href="/pemilik"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('pemilik*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="fa-people-group w-5 fas"></i>
                <span>Pemilik</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/role"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('role*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fa-id-card fas"></i>
                <span>Role</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator']))
            <a href="/user"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('user*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fa-user fas"></i>
                <span>User</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Perawat']))
            <a href="/perawat"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('perawat*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fa-user-nurse fas"></i>
                <span>Perawat</span>
            </a>
        @endif
        @if (auth()->user() &&
                auth()->user()->hasAnyRole(['Administrator', 'Dokter']))
            <a href="/dokter"
                class="flex items-center space-x-3 p-2 rounded-lg {{ request()->is('dokter*') ? 'bg-cyan-50 text-cyan-700' : 'text-gray-600 hover:bg-gray-50' }}">
                <i class="w-5 fa-user-doctor fas"></i>
                <span>Dokter</span>
            </a>
        @endif
    </nav>

    <div class="p-4 border-t">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="flex items-center space-x-3 hover:bg-red-50 p-2 rounded-lg w-full text-red-600">
                <i class="w-5 fas fa-sign-out-alt"></i>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</div>
