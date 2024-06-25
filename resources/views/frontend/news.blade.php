@extends('frontend.layout.app')
@section('main')
<div class="bg-gray-200">
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src="{{ asset('cooperativeimages/contactus.jpg') }}" class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">News & Activities</h1>

    </div>
    
    
    <div class=" ml-40 mt-10">
       <span class="relative italic text-green-900 text-2xl font-serif ">Our Events<span class="ml-4 absolute top-1/2 h-0.5 bg-green-900 w-full left-full"></span></span>
    </div>
 
    <div class="reasons pt-10 ml-28 ">
        <div class="grid grid-cols-3 gap-10 max-[600px]:grid-cols-1 ">
            <div class="r1 p-4 shadow-md flex flex-col  bg-white ">
                <div>
                    <a href="{{route('newsedu1')}}" class="block" role="button">
                      <img src="/cooperativeimages/edu.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                    </a>
                </div>

                <div class="flex pt-4 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-green-800 text-white w-20 h-14 pt-4" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                
                    <h1 class=" font-bold text-lg text-black text-justify ml-4 italic ">Member Education Program Held on Kathmandu</h1>  
                </div>

                    <p class="pt-2 text-black text-sm text-justify ">Softsaro Savings and Credit Cooperative Ltd. has completed member education program in different areas.</p>
                    <p class=" text-black  text-sm ">The program was conducted...</p>
                    <a href="{{route('newsedu1')}}" class="block">
                    <button class="pt-2 text-gray-500 rounded-lg hover:text-teal-900 text-sm">Read More</button>
                    </a>
            </div>

            <div class="r1 p-4 shadow-m flex flex-col  bg-white">
                    <div>
                        <a href="{{(route('newsedu2'))}}" class="block" role="button">
                          <img src="/cooperativeimages/edu2.jpg" alt="Image Description" class="w-[60vh] h-[34vh]  ">
                        </a>
                        </div>

                        <div class="flex pt-4 ">
                       <svg xmlns="http://www.w3.org/2000/svg" class="bg-green-800 text-white w-20 h-14 pt-2" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                    
                       <h1 class="font-bold text-lg text-black text-justify ml-4 italic ">Member Education Program Held on Solukhumbu</h1>
                    
                </div>
                           <p class="paragraph  text-black text-justify text-sm pt-2">Softsaro Savings and Credit Cooperative Ltd. has completed member education program in different areas.</p>
                           <p class=" text-black text-justify text-sm">The program was conducted...</p>
                        <a href="{{route('newsedu1')}}" class="block">
                          <button class=" pt-2 text-gray-500 rounded-lg hover:text-teal-900 text-sm">Read More</button>
                       </a>
                </div>


            <div class="pr-12">
                <div class=" text-gray-700 underline text-xl font-bold italic font-serif">
                 Recent Posts

                </div>
                
            
                <div class="flex pt-8">
                <a href="{{route('newsedu1')}}" class="block" role="button">
                      <img src="/cooperativeimages/edu.jpg" alt="Image Description" class=" w-28 h-12">
                    </a>
                <div class="ml-6">
                       <h1 class=" font-bold text-sm text-gray-700 ">Member Education Program Held on kathmandu</h1>
                       <a href="{{route('newsedu1')}}" class="block">
                    <button class="  text-gray-500 rounded-lg hover:text-teal-900 text-sm">Read More</button>
                    </a>
                </div>
                </div>
                <div class="flex pt-8">
                <a href="{{route('newsedu2')}}" class="block" role="button">
                      <img src="/cooperativeimages/edu2.jpg" alt="Image Description" class=" w-28 h-12">
                    </a>
                <div class="ml-6">
                       <h1 class=" font-bold text-sm text-gray-700 ">Member Education Program Held on Solukhumbu</h1>
                       <a href="{{route('newsedu2')}}" class="block">
                    <button class="text-sm text-gray-500 rounded-lg hover:text-teal-900">Read More</button>
                    </a>
                </div>
                </div>

                <div class="flex pt-8">
                <a href="{{route('newsedu3')}}" class="block" role="button">
                      <img src="/cooperativeimages/edu3.jpg" alt="Image Description" class=" w-28 h-12">
                    </a>
                <div class="ml-6">
                          <h1 class=" font-bold text-sm text-gray-700 ">Member Education Program Held on Lalitpur</h1>
                          <a href="{{route('newsedu3')}}" class="block">
                           <button class="text-sm text-gray-500 rounded-lg hover:text-teal-900">Read More</button>
                         </a>
                     </div>
                   </div>
                   </div>
                  </div>
                 </div>
                <div class="reasons pt-10 ml-28">
                   <div class="grid grid-cols-3 gap-10 max-[600px]:grid-cols-1 ">
                      <div class="r1 p-4 shadow-md flex flex-col  bg-white ">
                        <div>
                        <a href="{{route('newsedu3')}}" class="block" role="button">
                            <img src="/cooperativeimages/edu3.jpg" alt="Image Description" class="w-[60vh] h-full ">
                        </a>
                        </div>

                        <div class="flex pt-4 ">
                       <svg xmlns="http://www.w3.org/2000/svg" class="bg-green-800 text-white w-20 h-14 pt-2" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                    
                       <h1 class=" font-bold text-lg text-black text-justify ml-4 italic ">Member Education Program Held on Lalitpur</h1>
                    
                </div>
                    <p class="paragraph pt-2 text-black text-justify text-sm">Softsaro Savings and Credit Cooperative Ltd. has completed member education program in different areas.</p>
                    <p class=" text-black  text-sm w-full">The program was conducted...</p>
                    <a href="{{route('newsedu1')}}" class="block">
                    <button class=" pt-2  text-gray-500 rounded-lg hover:text-teal-900 tevt-sm">Read More</button>
                    </a>
                
                </div>
            </div>
        </div>


    @endsection
    </div>