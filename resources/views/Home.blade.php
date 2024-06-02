@extends('layouts.app')
@section('title', 'Hadi Nurhidayat')
@section('content')
    <div class="home">
        <div class="home__wrapper">
            <div class=" block lg:flex-1">
                <h5 class="home__helo">Hello World, i'm</h5>
                <h1 class="home__name">Hadi Nurhidayat</h1>
                <h4 class="home__position" id="typewriter">
                    {{-- Web Developer --}}
                </h4>
                <p class="home__description">
                    Welcome to My Personal Website, where I showcase my skills as a full stack developer. Explore my
                    projects below!
                </p>
                <div class="mt-4 flex items-center gap-4">
                    <a href="https://github.com/nhadi44" class="w-10 h-10" target="_blank">
                        <img src="{{ asset('/assets/icons/github.svg') }}" alt="github" class="w-full h-full" />
                    </a>
                    <a href="https://gitlab.com/nhadi44" class="w-10 h-10" data-tip="nhadi44" target="_blank">
                        <img src="{{ asset('/assets/icons/gitlab.svg') }}" alt="gitlab" class="w-full h-full">
                    </a>
                    <a href="https://www.linkedin.com/in/hadinurhidayat" class="w-10 h-10" data-tip="Hadi Nurhidayat"
                        target="_blank">
                        <img src="{{ asset('/assets/icons/linkedin.svg') }}" alt="gitlab" class="w-full h-full">
                    </a>
                </div>
            </div>
            <div class="flex-1">
                <div class="home__image">
                    <img src="{{ asset('/assets/images/hadinurhidayat-edit.png') }}" alt="hadinurhidayat"
                        class="z-10 h-[27rem]">
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
