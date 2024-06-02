 <div x-data="{ activeTab: 'tab1' }">
     <!-- Tab Titles -->
     <div class="tabs">
         <div class="tab" :class="{ 'tab__active': activeTab === 'tab1' }" @click="activeTab = 'tab1'">
             Programming
         </div>
         <div class="tab" :class="{ 'tab__active': activeTab === 'tab2' }" @click="activeTab = 'tab2'">
             Tools
         </div>

     </div>

     <!-- Tab Contents -->
     <div class="tab__content" :class="{ 'tab__content-active': activeTab === 'tab1' }">
         <div class="grid grid-cols-5 gap-3">
             @for ($i = 0; $i < 10; $i++)
                 <div class="border border-amber-400 p-4 rounded-md flex items-center gap-4">
                     <img src="{{ asset('assets/icons/skill-icons--javascript.svg') }}" alt="skills" class="h-12"
                         loading="lazy">
                     <div class="flex flex-col">
                         <h1 class="text-slate-100 text-lg font-semibold">Javascript</h1>
                         <small class="text-muted">Intermediate</small>
                     </div>
                 </div>
             @endfor
         </div>
     </div>
     <div class="tab__content" :class="{ 'tab__content-active': activeTab === 'tab2' }">
         <div class="grid grid-cols-5 gap-3">
             @for ($i = 0; $i < 10; $i++)
                 <div class="border border-amber-400 p-4 rounded-md flex items-center gap-4">
                     <img src="{{ asset('assets/icons/logos--jira.svg') }}" alt="skills" class="h-12"
                         loading="lazy">
                     <div class="flex flex-col">
                         <h1 class="text-slate-100 text-lg font-semibold">Jira</h1>
                         <small class="text-muted">Intermediate</small>
                     </div>
                 </div>
             @endfor
         </div>
     </div>
 </div>
