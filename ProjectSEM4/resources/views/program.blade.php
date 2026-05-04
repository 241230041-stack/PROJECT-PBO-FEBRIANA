@extends('app')

@section('content')
<div class="min-h-full bg-[#f8fafc] overflow-y-auto">
    
    <section class="py-20 px-10 bg-[#004643] text-center">
        <div class="container mx-auto max-w-3xl">
            <p class="text-[#f9bc60] font-bold tracking-[0.4em] uppercase text-[10px] mb-4">Fokus Kebaikan Kami</p>
            <h2 class="text-5xl font-black text-white leading-tight mb-6">Program Kerja Nyata untuk <span class="text-[#f9bc60]">Perubahan.</span></h2>
            <p class="text-[#abd1c6] text-lg opacity-80 font-light">Kami mengkurasi program-program yang memiliki dampak jangka panjang bagi masyarakat yang membutuhkan.</p>
        </div>
    </section>

    <section class="py-20 px-10">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-4xl overflow-hidden shadow-xl shadow-[#004643]/5 group hover:-translate-y-2 transition-all duration-500 border border-slate-100">
                    <div class="h-48 bg-slate-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da07bb5e?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-2 h-2 bg-[#f9bc60] rounded-full"></span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Pendidikan</span>
                        </div>
                        <h4 class="text-xl font-black text-[#004643] mb-3">Beasiswa Cahaya Bangsa</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Membantu anak-anak putus sekolah untuk kembali ke bangku pendidikan dengan fasilitas lengkap.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-bold text-[#004643] opacity-40">124 Sekolah Terbantu</span>
                            <a href="#" class="text-[#f9bc60] font-black text-xs hover:underline italic">Detail &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4xl overflow-hidden shadow-xl shadow-[#004643]/5 group hover:-translate-y-2 transition-all duration-500 border border-slate-100">
                    <div class="h-48 bg-slate-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-2 h-2 bg-[#f9bc60] rounded-full"></span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Kesehatan</span>
                        </div>
                        <h4 class="text-xl font-black text-[#004643] mb-3">Klinik Berjalan Gratis</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Layanan kesehatan gratis untuk lansia dan anak-anak di daerah pelosok yang sulit akses medis.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-bold text-[#004643] opacity-40">5K+ Pasien Terlayani</span>
                            <a href="#" class="text-[#f9bc60] font-black text-xs hover:underline italic">Detail &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4xl overflow-hidden shadow-xl shadow-[#004643]/5 group hover:-translate-y-2 transition-all duration-500 border border-slate-100">
                    <div class="h-48 bg-slate-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-2 h-2 bg-[#f9bc60] rounded-full"></span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Lingkungan</span>
                        </div>
                        <h4 class="text-xl font-black text-[#004643] mb-3">Air Bersih Kehidupan</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Pembangunan sumur bor dan sistem filtrasi air bersih di wilayah terdampak kekeringan panjang.</p>
                        <div class="pt-6 border-t border-slate-200 flex justify-between items-center">
                            <span class="text-[10px] font-bold text-[#004643] opacity-40">89 Desa Hijau</span>
                            <a href="#" class="text-[#f9bc60] font-black text-xs hover:underline italic">Detail &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 border-t border-slate-100 bg-white">
        <div class="container mx-auto px-10 text-center max-w-4xl">
            <h3 class="text-3xl font-light text-[#004643] leading-relaxed italic">
                "Bukan tentang seberapa besar jumlahnya, tapi tentang konsistensi kita dalam menyambung napas kebaikan bagi sesama."
            </h3>
            <div class="mt-10 flex justify-center items-center gap-4">
                <div class="w-10 h-1px bg-[#f9bc60]"></div>
                <p class="text-[10px] uppercase tracking-[0.4em] font-black text-[#004643]">Visi Donasiku 2026</p>
                <div class="w-10 h-px bg-[#f9bc60]"></div>
            </div>
        </div>
    </section>

</div>
@endsection