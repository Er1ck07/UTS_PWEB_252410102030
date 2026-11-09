<nav class="bg-[#f7f5f0] border-b border-[#e6e2d6] py-5 px-6 sm:px-12 sticky top-0 z-50">
    <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-3">
            <img src="/build/assets/logo.svg" alt="LiteraStore Logo" class="w-9 h-9 object-cover rounded-xl shadow-sm">
            <span class="serif-title text-xl font-bold tracking-tight text-[#2c3e35]">LiteraStore</span>
        </div>
        <div class="flex flex-wrap justify-center gap-6 text-sm font-medium text-[#6c6863]">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="hover:text-[#2c3e35] transition">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="hover:text-[#2c3e35] transition">Katalog Buku</a>
            <a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:text-[#2c3e35] transition">Profil</a>
            <a href="{{ route('login') }}" class="text-[#a35c48] hover:text-[#8a4b39] transition">Keluar</a>
        </div>
    </div>
</nav>