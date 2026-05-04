@extends('app')

@section('content')
<div class="min-h-full bg-[#f8fafc] py-16 px-10">
    <div class="container mx-auto max-w-4xl">
        
        <div class="text-center mb-12">
            <p class="text-[#004643] font-bold tracking-[0.4em] uppercase text-[10px] mb-3">Langkah Kecil Anda</p>
            <h2 class="text-4xl font-black text-[#004643]">Mulai <span class="text-[#f9bc60]">Berdonasi</span></h2>
            <p class="text-slate-500 mt-4 text-sm">Pilih nominal dan metode pembayaran yang paling nyaman untuk Anda.</p>
        </div>

        <div class="bg-white rounded-[40px] shadow-2xl shadow-[#004643]/5 overflow-hidden border border-slate-100">
            <form action="#" class="p-10 md:p-16 space-y-12">
                
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="flex-none w-8 h-8 bg-[#f9bc60] text-[#004643] rounded-full flex items-center justify-center font-black text-sm">1</span>
                        <h4 class="text-xs font-black text-[#004643] uppercase tracking-widest">Pilih Nominal</h4>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <label class="group cursor-pointer">
                            <input type="radio" name="amt" class="hidden peer" checked>
                            <div class="py-5 text-center border-2 border-slate-100 rounded-2xl peer-checked:border-[#f9bc60] peer-checked:bg-[#f9bc60]/5 transition-all group-hover:border-[#f9bc60]/30">
                                <span class="text-[10px] font-bold text-slate-400 block mb-1">Rp</span>
                                <span class="text-xl font-black text-[#004643]">50K</span>
                            </div>
                        </label>
                        
                        <label class="group cursor-pointer">
                            <input type="radio" name="amt" class="hidden peer">
                            <div class="py-5 text-center border-2 border-slate-100 rounded-2xl peer-checked:border-[#f9bc60] peer-checked:bg-[#f9bc60]/5 transition-all group-hover:border-[#f9bc60]/30">
                                <span class="text-[10px] font-bold text-slate-400 block mb-1">Rp</span>
                                <span class="text-xl font-black text-[#004643]">100K</span>
                            </div>
                        </label>

                        <label class="group cursor-pointer">
                            <input type="radio" name="amt" class="hidden peer">
                            <div class="py-5 text-center border-2 border-slate-100 rounded-2xl peer-checked:border-[#f9bc60] peer-checked:bg-[#f9bc60]/5 transition-all group-hover:border-[#f9bc60]/30">
                                <span class="text-[10px] font-bold text-slate-400 block mb-1">Rp</span>
                                <span class="text-xl font-black text-[#004643]">500K</span>
                            </div>
                        </label>

                        <div class="relative">
                            <input type="number" placeholder="Lainnya" class="w-full h-full px-4 pt-6 pb-2 border-2 border-slate-100 rounded-2xl focus:border-[#f9bc60] outline-none text-center font-black text-[#004643] placeholder:text-slate-300 transition-all">
                            <span class="absolute top-2 left-0 right-0 text-[8px] font-bold text-slate-400 uppercase tracking-tighter">Custom</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="flex-none w-8 h-8 bg-[#f9bc60] text-[#004643] rounded-full flex items-center justify-center font-black text-sm">2</span>
                        <h4 class="text-xs font-black text-[#004643] uppercase tracking-widest">Metode Pembayaran</h4>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:bg-slate-50 transition-all has-checked:border-[#004643]">
                            <div class="w-10 h-10 bg-[#abd1c6]/30 rounded-lg flex items-center justify-center text-[#004643] font-bold text-[10px]">BANK</div>
                            <span class="ml-4 text-sm font-bold text-[#004643]">Transfer Manual</span>
                            <input type="radio" name="pay" class="ml-auto accent-[#004643]" checked>
                        </label>
                        <label class="flex items-center p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:bg-slate-50 transition-all has-checked:border-[#004643]">
                            <div class="w-10 h-10 bg-[#f9bc60]/20 rounded-lg flex items-center justify-center text-[#004643] font-bold text-[10px]">E-WAL</div>
                            <span class="ml-4 text-sm font-bold text-[#004643]">QRIS & E-Wallet</span>
                            <input type="radio" name="pay" class="ml-auto accent-[#004643]">
                        </label>
                    </div>
                </div>

                <div class="space-y-6 bg-slate-50/50 p-8 rounded-[30px] border border-slate-100">
                    <div class="flex items-center gap-4">
                        <span class="flex-none w-8 h-8 bg-[#f9bc60] text-[#004643] rounded-full flex items-center justify-center font-black text-sm">3</span>
                        <h4 class="text-xs font-black text-[#004643] uppercase tracking-widest">Data Donatur</h4>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Nama Lengkap" class="w-full px-6 py-4 rounded-xl border border-slate-200 outline-none focus:border-[#004643] text-sm font-medium">
                        <input type="email" placeholder="Email Anda" class="w-full px-6 py-4 rounded-xl border border-slate-200 outline-none focus:border-[#004643] text-sm font-medium">
                    </div>
                    <textarea placeholder="Pesan atau doa (Opsional)" class="w-full px-6 py-4 rounded-xl border border-slate-200 outline-none focus:border-[#004643] text-sm font-medium h-32 resize-none"></textarea>
                </div>

                <button type="submit" class="w-full bg-[#004643] text-white py-6 rounded-2xl font-black text-sm uppercase tracking-[0.3em] shadow-xl shadow-[#004643]/20 hover:bg-[#002b29] hover:-translate-y-1 transition-all">
                    Konfirmasi Donasi
                </button>

            </form>
        </div>
    </div>
</div>
@endsection