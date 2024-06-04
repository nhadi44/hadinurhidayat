<div class="grid grid-cols-3 gap-6">
    @for ($i = 0; $i < 10; $i++)
        <x-card>
            @slot('body')
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-slate-200 mb-1">
                        PT. Bringin Inti Teknologi
                    </h1>
                    <h2 class="text-[16px] text-slate-200 mb-1">
                        Frontend Developer
                    </h2>
                    <span class="text-slate-400 text-sm">
                        Jan 2020 - Present
                    </span>
                </div>
                <div class="mb-4">
                    <p class="text-slate-200 text-[16px] text-justify">
                        As a Frontend Developer at PT. Bringin Inti Teknologi, I design and implement responsive and
                        intuitive user
                        interfaces. I collaborate with the design and backend teams to ensure our web applications are
                        efficient and
                        user-friendly.
                    </p>
                </div>
                <div class="border-t-[1px] border-slate-400 py-2">
                    <ul class="flex gap-3">
                        <li class="text-slate-400 text-[14px]">Laravel</li>
                        <li class="text-slate-400 text-[14px]">ReactJs</li>
                        <li class="text-slate-400 text-[14px]">Vue</li>
                        <li class="text-slate-400 text-[14px]">Jquery</li>
                        <li class="text-slate-400 text-[14px]">Bootstrap</li>
                        <li class="text-slate-400 text-[14px]">Git</li>
                    </ul>
                </div>
            @endslot
        </x-card>
    @endfor
</div>
