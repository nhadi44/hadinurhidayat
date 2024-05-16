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
         <h2>Content for Tab 1</h2>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel sed itaque nam aliquam numquam error
             perferendis aliquid vitae veritatis ipsa consequuntur omnis est, nesciunt laborum accusantium ab
             praesentium tempora voluptate voluptates totam ex aut. Ratione dolor autem expedita a maiores quisquam
             error sed nihil quae consequatur, incidunt odio rem quo, necessitatibus eos! A cupiditate natus praesentium
             quia harum rerum repudiandae corrupti corporis nostrum atque porro earum facilis consectetur non, pariatur
             magnam sapiente nemo iure perferendis. Placeat reiciendis velit itaque, nobis tenetur beatae cupiditate
             minus, accusamus harum vel incidunt quas at magnam exercitationem laudantium quod, ipsam sit dolorum iure
             possimus deserunt!</p>
     </div>
     <div class="tab__content" :class="{ 'tab__content-active': activeTab === 'tab2' }">
         <h2>Content for Tab 2</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius obcaecati et praesentium nam earum
             officiis distinctio id, aspernatur doloremque ea laborum, dignissimos, ipsa nobis voluptates? Doloremque
             aliquid maxime tempora assumenda nihil nemo dolore quod asperiores maiores sit numquam ullam eum at nobis
             esse quia itaque, aspernatur debitis repellendus, modi nesciunt! Laboriosam magnam aspernatur consequatur
             hic unde repellat velit cumque assumenda, odio reiciendis in esse nisi voluptas nostrum iusto officiis quam
             natus ipsa? Voluptates facere maiores culpa nam. Cumque earum velit excepturi quasi! In, labore explicabo!
             Fugit quas dignissimos consequatur pariatur iste quis omnis illum rerum odio? Vel, porro nostrum.</p>
     </div>
 </div>
