@extends('app')

@section('content')
<section class="h-full flex items-center justify-center bg-white px-10">
    <div class="container mx-auto text-center">
        <p class="text-[#004643] font-bold tracking-[0.5em] uppercase text-[10px] mb-6 opacity-60">Mari Berbagi Kebaikan</p>
        <h1 class="text-6xl md:text-7xl font-black text-[#004643] leading-tight mb-8 tracking-tighter">
            Selamat Datang di <br> 
            <span class="text-[#f9bc60]">Donasiku</span>
        </h1>
        <p class="text-slate-500 max-w-2xl mx-auto text-lg mb-12 leading-relaxed">
            Setiap kontribusi kecil Anda adalah harapan besar bagi mereka. <br> 
            Mari ciptakan perubahan nyata dan transparan sekarang.
        </p>
        <div class="flex justify-center">
            <a href="/donasi" class="px-12 py-5 bg-[#f9bc60] text-[#004643] font-black rounded-2xl shadow-xl shadow-[#f9bc60]/20 hover:bg-[#004643] hover:text-white transition-all duration-500">
                Mulai Donasi Sekarang
            </a>
        </div>
    </div>
</section>
@endsection