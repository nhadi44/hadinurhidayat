@extends('layouts.app')
@section('title', 'Portfolio - Hadi Nurhidayat')
@section('content')
    <div class="bg-slate-950">
        <div class="container px-7 pt-[8rem] pb-[8rem]">
            <h1 class="text-white text-2xl mb-10 font-semibold">Featured Projects</h1>
            <div class="grid grid-cols-3 gap-7">
                @for ($i = 0; $i < 10; $i++)
                    <section class="bg-slate-900/60 border-[1px] border-slate-400/20 rounded-md">
                        <img src="{{ asset('assets/images/kas_keluarga.png') }}" alt="featured-project"
                            class="rounded-tl-md rounded-tr-md" loading="lazy" />
                        <div class="py-6 px-8">
                            <h1 class="text-amber-400 font-semibold text-xl mb-3">Kas Keluarga</h1>
                            <p class="text-slate-200 font-thin text-[17px]">
                                Kas Keluarga is an application for managing your family's finances. Your family's financial
                                records can be stored in the application.
                            </p>

                            <div class="text-slate-300 mt-4 font-thin text-[11px] flex items-center gap-2">
                                <span class="bg-gray-800 px-3 py-1 rounded-sm">Laravel</span>
                                <span class="bg-gray-800 px-3 py-1 rounded-sm">Bootstrap</span>
                                <span class="bg-gray-800 px-3 py-1 rounded-sm">MySQL</span>
                                <span class="bg-gray-800 px-3 py-1 rounded-sm">JQuery</span>
                            </div>
                        </div>
                    </section>
                @endfor
            </div>
        </div>
    </div>
@endsection
