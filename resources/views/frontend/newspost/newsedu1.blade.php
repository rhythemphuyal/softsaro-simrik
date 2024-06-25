@extends('frontend.layout.app')
@section('main')
<div class="bg-gray-200">
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src="{{ asset('cooperativeimages/contactus.jpg') }}" class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Member Education Program Held on kathmandu</h1>
    </div>
    

<div class="flex gap-10 pt-10 pl-24 pr-10 ">
    <div class="  ">
            <div class="w-[60vw]">
                <div class="r1 p-4 shadow-md flex flex-col items-center text-center bg-white">
                <div>
                    <a href="" class="block" role="button">
                      <img src="/cooperativeimages/edu.jpg" alt="Image Description" class=" w-[70vw] h-[60vh]">
                    </a>
                </div>
                
                <div class="flex w-full pt-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="bg-green-800 text-white w-20 h-16 mt-2" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                    <div class="ml-2">
                       <h1 class=" font-semibold italic text-lg text-black ">Member Education Program Held on kathmandu</h1>
                       <p class="flex items-center justify-start">24 Mar, 2022</p>
                       <p class="flex items-center justify-start">Posted by admin</p>
                    </div>
                </div>

            
                <p class="pt-4 text-black text-justify text-sm ">Softsaro Savings and Credit Cooperative Ltd. has completed member education program in different areas.The program was conducted on Chaitra 05. Kamal Rural Municipality 3 Chairman Nara Prasad Dangal was the chief guest of the program. Kamaleswori Cooperative Manager Renuka Basnet, Kamal Rural Municipality Education Branch Chief Surya Neupane was the guest. Chief of Kerkha Service Center Manisha Phago delivered a welcome message at the event. Rajendra Gautam, Trilochan Gautam, Rabindra Chapagain, Surya Neupane and others had their say. Bhavani Prasad Dangal played the role of facilitator in the program hosted by Jyoti Parajuli. More than 160 members were briefed on the organization’s activities, financial status, services and future plans.</p>
                    
                    
                <div class="text-gray-500 font-bold text-xl pt-4">
                    Leave a Message
                </div>
                <div class="text-sm">
                   Registration isn't required.
                </div>
               

            <div class="max-w-lg mx-auto ">
                <form action="#" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                   <div class="mb-3 grid grid-cols-3 gap-3">
                   <label class="block text-gray-500 text-sm font-bold mb-2" for="comment"> Comment:</label>
                   <textarea id="comment" name="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline col-span-2" placeholder="Enter Your Message Here"></textarea>
            </div>
            <div class="mb-3 grid grid-cols-3 gap-3">
                    <label class="block text-gray-500 text-sm font-bold mb-2" for="name">Name:</label>
                    <input id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline col-span-2" type="text" placeholder="Enter Your Name Here">
            </div>
            <div class="mb-3 grid grid-cols-3 gap-3">
                    <label class="block text-gray-500 text-sm font-bold mb-2" for="email">Email:</label>
                    <input id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline col-span-2" type="email" placeholder="Enter Your Email Here">
            </div>
            <div class="mb-3 grid grid-cols-3 gap-3">
                    <label class="block text-gray-500 text-sm font-bold mb-2" for="website">Website:</label>
                    <input id="website" name="website" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline col-span-2" type="url" placeholder="Enter Your Website Here">
            </div>
            <div class="flex items-center justify-end">
                    <button class="bg-green-500 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm" type="submit">Post Comment</button>
            </div>
                </form>
            </div>

            </div>

        </div>
    </div>

    <div class=" ">
                <div class=" text-gray-700 underline  text-lg font-bold italic font-serif">
                 Recent Posts

                </div>
                
            
                <div class="flex  pt-8">
                <a href="{{route('newsedu1')}}" class="block" role="button">
                      <img src="/cooperativeimages/edu.jpg" alt="Image Description" class=" w-28 h-12">
                    </a>
                <div class="ml-4">
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
                <div class="ml-4">
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
                <div class="ml-4">
                       <h1 class=" font-bold text-sm text-gray-700 ">Member Education Program Held on Lalitpur</h1>
                       <a href="{{route('newsedu3')}}" class="block">
                    <button class="text-sm text-gray-500 rounded-lg hover:text-teal-900">Read More</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    @endsection
</div>