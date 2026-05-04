<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasiku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8fafc] h-screen flex flex-col overflow-hidden">

    <header class="bg-[#004643] py-5 px-10 shadow-lg border-b border-white/5 z-50">
        <div class="container mx-auto flex justify-between items-center">
            
            <div class="flex items-center gap-4">
                <div class="text-2xl font-bold text-white tracking-tighter">
                    Donasi<span class="text-[#f9bc60]">ku</span>
                </div>
                <div class="hidden md:flex items-center gap-2 bg-black/20 px-3 py-1 rounded-full border border-white/10">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    <span class="text-[9px] uppercase tracking-widest text-[#abd1c6] font-bold">Platform Aktif</span>
                </div>
            </div>

            <nav class="flex items-center space-x-10">
                <a href="/" class="text-[11px] uppercase tracking-[0.2em] text-white/80 hover:text-[#f9bc60] font-bold transition-all">Home</a>
                <a href="/profil" class="text-[11px] uppercase tracking-[0.2em] text-white/80 hover:text-[#f9bc60] font-bold transition-all">Profil</a>
                <a href="/kontak" class="text-[11px] uppercase tracking-[0.2em] text-white/80 hover:text-[#f9bc60] font-bold transition-all">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="grow overflow-y-auto">
        @yield('content')
    </main>

    <footer class="bg-[#001e1d] py-8 border-t border-white/5">
        <div class="container mx-auto px-10 flex justify-between items-center">
            <p class="text-[9px] uppercase tracking-[0.3em] text-[#abd1c6] opacity-40">
                &copy; 2026 DONASIKU — PLATFORM KEBAIKAN
            </p>
            <div class="flex space-x-8">
                <a href="#" class="text-[9px] uppercase tracking-[0.2em] text-[#abd1c6] opacity-50 hover:opacity-100 hover:text-[#f9bc60]">Privacy</a>
                <a href="#" class="text-[9px] uppercase tracking-[0.2em] text-[#abd1c6] opacity-50 hover:opacity-100 hover:text-[#f9bc60]">Terms</a>
                <a href="#" class="text-[9px] uppercase tracking-[0.2em] text-[#abd1c6] opacity-50 hover:opacity-100 hover:text-[#f9bc60]">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>