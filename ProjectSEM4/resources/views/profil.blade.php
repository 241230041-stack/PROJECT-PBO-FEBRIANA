@extends('app')

@section('title', 'Profil Kami')

@section('content')
<div class="h-full bg-[#f8fafc] overflow-y-auto">
    <section class="py-20 px-10">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <p class="text-[#004643] font-bold tracking-[0.3em] uppercase text-xs mb-4 opacity-80">Tentang Donasiku</p>
                    <h2 class="text-5xl font-black text-[#004643] leading-tight mb-6">
                        Menjadi Jembatan <br> <span class="text-[#f9bc60]">Kebaikan</span> yang Inklusif.
                    </h2>
                    <p class="text-slate-600 leading-relaxed text-lg mb-8">
                        Berdiri sejak 2024, Donasiku adalah platform filantropi modern yang menghubungkan ribuan tangan baik dengan mereka yang membutuhkan secara transparan dan instan.
                    </p>
                    
                    <div class="grid grid-cols-3 gap-6 border-t border-slate-200 pt-8">
                        <div>
                            <p class="text-2xl font-black text-[#004643]">12K+</p>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Penerima Manfaat</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-[#004643]">500+</p>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Relawan Aktif</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-[#f9bc60]">98%</p>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Dana Tersalurkan</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="w-full h-400px bg-[#004643] rounded-3xl overflow-hidden shadow-2xl relative z-10 flex items-center justify-center p-12">
                        <p class="text-[#abd1c6] italic text-center text-xl font-light">"Kebaikan yang terorganisir akan mengalahkan kejahatan yang tidak terorganisir."</p>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-[#f9bc60] rounded-3xl z-0 opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#002b29] py-20 px-10">
        <div class="container mx-auto text-center mb-16">
            <h2 class="text-3xl font-black text-white">Visi & Dedikasi Kami</h2>
        </div>
        
        <div class="container mx-auto grid md:grid-cols-3 gap-8">
            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all group">
                <div class="w-12 h-12 bg-[#f9bc60] rounded-xl mb-6 flex items-center justify-center font-black text-[#004643]">01</div>
                <h4 class="text-white font-bold mb-4 tracking-wide">Transparansi Radikal</h4>
                <p class="text-[#abd1c6] text-sm leading-relaxed opacity-70">
                    Setiap rupiah yang Anda berikan dapat dilacak penyalurannya secara real-time melalui dashboard kami.
                </p>
            </div>

            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <div class="w-12 h-12 bg-[#f9bc60] rounded-xl mb-6 flex items-center justify-center font-black text-[#004643]">02</div>
                <h4 class="text-white font-bold mb-4 tracking-wide">Aksesibilitas Luas</h4>
                <p class="text-[#abd1c6] text-sm leading-relaxed opacity-70">
                    Mempermudah siapa saja, di mana saja, untuk mulai berbagi mulai dari nominal terkecil sekalipun.
                </p>
            </div>

            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <div class="w-12 h-12 bg-[#f9bc60] rounded-xl mb-6 flex items-center justify-center font-black text-[#004643]">03</div>
                <h4 class="text-white font-bold mb-4 tracking-wide">Dampak Berkelanjutan</h4>
                <p class="text-[#abd1c6] text-sm leading-relaxed opacity-70">
                    Bukan hanya bantuan sesaat, kami berfokus pada program pemberdayaan ekonomi dan pendidikan.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 px-10 text-center">
        <div class="max-w-2xl mx-auto">
            <h3 class="text-2xl font-black text-[#004643] mb-6">Siap Menjadi Bagian dari Perubahan?</h3>
            <p class="text-slate-500 mb-10">Bergabunglah dengan komunitas donatur kami dan mulai buat perubahan nyata hari ini.</p>
            <a href="/donasi" class="inline-block bg-[#004643] text-white px-12 py-4 rounded-full font-bold shadow-xl hover:bg-[#002b29] transition-all transform hover:-translate-y-1">
                Gabung Sekarang
            </a>
        </div>
    </section>
</div>
@endsection