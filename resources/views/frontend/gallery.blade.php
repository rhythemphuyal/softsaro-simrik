@extends('frontend.layout.app')
@section('main')
<div class="bg-gray-200">
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src="{{ asset('cooperativeimages/contactus.jpg') }}" class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Gallery</h1>
    </div>

        <div class=" ml-40 mt-10">
            <span class="relative italic text-green-900 text-2xl font-serif ">Photos<span class="ml-4 absolute top-1/2 h-0.5 bg-green-900 w-full left-full"></span></span>
        </div>
        <div class=" grid  grid-cols-3 gap-20 pl-32 pr-32 pt-14 ">
            <div class=" shadow-lg bg-white  p-4  " >
            <div>
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            </div>
            <div class="pt-4  text-lg text-gray-600 ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                 <p > Staff Orientation Programme 2082-03-06,Solukhumbu</p>
                </a>
            </div> 
            </div>
            <div class=" shadow-sm bg-white  p-4 " >
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu2.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            <div class="pt-4  text-lg text-gray-600 ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                  <p >Rs 51000 provided to Durga Secondary School for Educational Meterial</p>
                </a>
            </div> 
            </div>
            <div class=" shadow-lg bg-white p-4 text-gray-600 " >
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu3.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            <div class="pt-4  text-lg ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                 <p > Branch Management Training 2079</p>
                </a>
            </div> 
            </div>
        </div>
       
        <div class=" grid  grid-cols-3 gap-20 pl-32 pr-32 pt-14 ">
            <div class=" shadow-lg bg-white  p-4  " >
            <div>
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu4.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            </div>
            <div class="pt-4  text-lg text-gray-600 ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                 <p >Member Education Program Lalitpur</p>
                </a>
            </div> 
            </div>
            <div class=" shadow-lg bg-white  p-4 " >
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu5.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            <div class="pt-4  text-lg text-gray-600 ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                  <p >Staff Orientation Program </p>
                </a>
            </div> 
            </div>
            <div class=" shadow-lg bg-white p-4 text-gray-600 " >
                <a href="{{route('gallery1')}}" class="block" role="button">
                  <img src="/cooperativeimages/edu6.jpg" alt="Image Description" class=" w-[30vw] h-[34vh]">
                </a>
            <div class="pt-4  text-lg ">
                <a href="{{route('gallery1')}}" class="block  hover:text-teal-900">
                 <p > Share Member Orientation Program </p>
                </a>
            </div> 
            </div>
        </div>
   
@endsection
    </div>