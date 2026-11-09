<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LiteraStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f7f5f0; color: #2c2a29; }
        .serif-title { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-[#ffffff] p-8 sm:p-10 rounded-3xl shadow-xl w-full max-w-md border border-[#e6e2d6]">
        
        <div class="text-center mb-8 flex flex-col items-center justify-center">
            <img src="/build/assets/logo.svg" alt="LiteraStore Logo" class="w-24 h-24 object-cover rounded-2xl shadow-sm mb-3">
            <h1 class="serif-title text-3xl font-bold text-[#2c3e35]">LiteraStore</h1>
            <p class="text-xs tracking-wider uppercase text-[#8c867b] mt-2">A quiet corner for curious minds</p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET" class="space-y-5">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-[#6c6863] mb-2">Username</label>
                <input type="text" name="username" required placeholder="Contoh: BudiSantoso" 
                    class="w-full px-4 py-3.5 bg-[#f7f5f0] border border-[#e6e2d6] rounded-xl focus:outline-none focus:ring-2 focus:ring-[#2c3e35] text-sm text-[#2c3e35]">
            </div>
            <button type="submit" class="w-full bg-[#2c3e35] hover:bg-[#202e27] text-[#f7f5f0] font-medium py-3.5 rounded-xl transition shadow-md text-sm">
                Masuk ke Perpustakaan
            </button>
        </form>
    </div>
</body>
</html>