<footer class="footer">
    <div class="container flex justify-between items-center">
        <a href="{{ route('Home') }}" class="text-amber-400 font-semibold text-lg">Hadi Nurhidayat</a>
        <p class="text-slate-100">© {{ \Carbon\Carbon::now()->format('Y') }} Hadi Nurhidayat</p>
        <div class="flex items-center gap-3">
            <a href="https://github.com/nhadi44" class="w-7 h-7" target="_blank">
                <img src="{{ asset('/assets/icons/github.svg') }}" alt="github" class="w-full h-full" />
            </a>
            <a href="https://gitlab.com/nhadi44" class="w-7 h-7" target="_blank">
                <img src="{{ asset('/assets/icons/gitlab.svg') }}" alt="gitlab" class="w-full h-full">
            </a>
            <a href="https://www.linkedin.com/in/hadinurhidayat" class="w-7 h-7" target="_blank">
                <img src="{{ asset('/assets/icons/linkedin.svg') }}" alt="linkedin" class="w-full h-full">
            </a>
            <a href="#" class="w-7 h-7" target="_blank">
                <img src="{{ asset('assets/icons/instagram.svg') }}" alt="instagram" class="w-full h-full">
            </a>
            <a href="#" class="w-7 h-7" target="_blank">
                <img src="{{ asset('assets/icons/facebook.svg') }}" alt="facebook" class="w-full h-full">
            </a>
            <a href="#" class="w-7 h-7" target="_blank">
                <img src="{{ asset('assets/icons/email.svg') }}" alt="email" class="w-full h-full">
            </a>
        </div>
    </div>
</footer>
