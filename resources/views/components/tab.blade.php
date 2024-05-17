 <div x-data="{ activeTab: 'tab1' }">
     <!-- Tab Titles -->
     <div class="tabs ">
         <div class="tab" :class="{ 'tab__active': activeTab === 'tab1' }" @click="activeTab = 'tab1'">
             Tab1
         </div>
         <div class="tab" :class="{ 'tab__active': activeTab === 'tab2' }" @click="activeTab = 'tab2'">
             Tab2
         </div>

     </div>

     <!-- Tab Contents -->
     <div class="tab__content" :class="{ 'tab__content-active': activeTab === 'tab1' }">
         <div class="tab__skills">
             <div class="group tab__skills-wrapper">
                 <img src="{{ asset('assets/icons/skills/skill-icons--javascript.svg') }}" alt=""
                     class="h-full">
                 <div>
                     <h6 class="font-semibold text-lg">Javascript</h6>
                     <span class="text-muted hidden group-hover:block">Advanced</span>
                 </div>
             </div>
         </div>
     </div>

     <div class="tab__content" :class="{ 'tab__content-active': activeTab === 'tab2' }">
         <div class="tab__tools">
             <div class="group tab__tools-wrapper">
                 <img src="{{ asset('assets/icons/tools/logos--jira.svg') }}" alt="" class="h-full">
                 <div>
                     <h6 class="font-semibold text-lg">Jira</h6>
                     <span class="text-muted hidden group-hover:block">Basic</span>
                 </div>
             </div>
         </div>
     </div>
 </div>
