<div class="w-64 bg-white border-r min-h-screen flex flex-col">
    <div class="h-16 flex items-center px-6 border-b">
        <span class="text-xl font-bold text-cyan-700">RSHP Admin</span>
    </div>

    <nav class="flex-1 p-4 space-y-2">
        <a href="/dashboard" class="flex items-center space-x-3 p-2 rounded-lg bg-cyan-50 text-cyan-700">
            <i class="fas fa-home w-5"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-gray-50">
            <i class="fas fa-calendar-alt w-5"></i>
            <span>Janji Temu</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-gray-50">
            <i class="fas fa-user-md w-5"></i>
            <span>Dokter</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-gray-50">
            <i class="fas fa-paw w-5"></i>
            <span>Pasien</span>
        </a>
    </nav>

    <div class="p-4 border-t">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center space-x-3 p-2 w-full rounded-lg text-red-600 hover:bg-red-50">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</div>
