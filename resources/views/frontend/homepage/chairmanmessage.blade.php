   <div class="px-20 py-10">
       <div class="grid grid-cols-4 shadow-lg gap-10 p-5  message-container ">
           <div class="c1 col-span-2">
               <div class="w-[40px] h-[40px]">
                   <img src="{{ asset('cooperativeimages/quotation.png') }}" class="h-full w-full">
               </div>
               <h1 class="font-bold text-[30px] pt-5">
                   We value transparency, collaboration, and integrity in all our endeavors.
               </h1>
               <p class="pt-5 text-[18px]">To make the best cooperative of province by providing all financial services
                   to
                   raise the living standard
                   of members through modern technology following the cooperative principle.</p>
               <div class="mt-5 h-1 w-[40vw] bg-green-600">

               </div>
               <h1 class="pt-5 font-bold text-[18px]">Anand Thapa</h1>
               <p>Chairman of Simrik Cooperative Limited</p>

           </div>
           <div class= "c1 col-span-2 flex justify-end items-end">
               <div class="relative bg-green-700 h-[50vh] w-[28.5vw] ">
                   <div class="absolute bottom-6 right-6 h-[50vh] w-[28.5vw]">
                       <img src="{{ asset('cooperativeimages/chairman.jpg') }}" class="h-full w-full">
                   </div>
               </div>
           </div>

       </div>
   </div>






   <script>
       document.addEventListener("DOMContentLoaded", function() {
           const messageContainer = document.querySelector('.message-container');

           // Function to check if an element is in the viewport
           function isInViewport(element) {
               const rect = element.getBoundingClientRect();
               return (
                   rect.top >= 0 &&
                   rect.left >= 0 &&
                   rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                   rect.right <= (window.innerWidth || document.documentElement.clientWidth)
               );
           }

           // Function to handle animation
           function handleAnimation() {
               if (isInViewport(messageContainer)) {
                   // Add slide-in animation class
                   document.querySelectorAll('.c1').forEach(function(element) {
                       element.classList.add('slide-in-from-bottom');
                   });


                   // Remove the event listener to prevent multiple triggers
                   window.removeEventListener('scroll', handleAnimation);
               }
           }

           // Add event listener to handle animation when the section is scrolled into view
           window.addEventListener('scroll', handleAnimation);
       });
   </script>
