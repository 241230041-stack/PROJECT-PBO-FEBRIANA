@extends('app')

@section('title', 'Hubungi Kami')

@section('content')
<div class="h-full bg-[#f8fafc] overflow-y-auto">
    <section class="py-20 px-10">
        <div class="container mx-auto max-w-6xl">
            
            <div class="mb-16">
                <p class="text-[#004643] font-bold tracking-[0.3em] uppercase text-xs mb-4 opacity-80 text-center md:text-left">Get in Touch</p>
                <h2 class="text-5xl font-black text-[#004643] leading-tight text-center md:text-left">
                    Ada Pertanyaan? <br> <span class="text-[#f9bc60]">Kami Siap Membantu.</span>
                </h2>
            </div>

            <div class="grid lg:grid-cols-5 gap-16">
                
                <div class="lg:col-span-2 space-y-10">
                    <div>
                        <h4 class="text-sm font-black text-[#004643] uppercase tracking-widest mb-6 border-b border-slate-200 pb-2">Informasi</h4>
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="text-[#f9bc60]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[#004643] font-bold text-sm">Kantor Pusat</p>
                                    <p class="text-slate-500 text-sm leading-relaxed">Jl. Kebaikan No. 123, Jakarta Selatan, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="text-[#f9bc60]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[#004643] font-bold text-sm">Email Support</p>
                                    <p class="text-slate-500 text-sm">halo@donasiku.id</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-black text-[#004643] uppercase tracking-widest mb-6 border-b border-slate-200 pb-2">Media Sosial</h4>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center hover:bg-[#004643] hover:text-white transition-all shadow-sm">IG</a>
                            <a href="#" class="w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center hover:bg-[#004643] hover:text-white transition-all shadow-sm">FB</a>
                            <a href="#" class="w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center hover:bg-[#004643] hover:text-white transition-all shadow-sm">TW</a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="bg-white p-10 rounded-3xl shadow-xl border border-slate-100">
                        <form action="#" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Nama Lengkap</label>
                                    <input type="text" placeholder="John Doe" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#f9bc60] outline-none transition-all text-sm">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Alamat Email</label>
                                    <input type="email" placeholder="john@example.com" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#f9bc60] outline-none transition-all text-sm">
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Subjek</label>
                                <select class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#f9bc60] outline-none transition-all text-sm appearance-none">
                                    <option>Pertanyaan Umum</option>
                                    <option>Masalah Donasi</option>
                                    <option>Kemitraan</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Pesan Anda</label>
                                <textarea rows="5" placeholder="Tulis pesan Anda di sini..." class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#f9bc60] outline-none transition-all text-sm resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#004643] text-white py-4 rounded-xl font-bold hover:bg-[#002b29] transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection