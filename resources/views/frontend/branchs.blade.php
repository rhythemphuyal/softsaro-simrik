@extends('frontend.layout.app')
@section('main')
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src={{ asset('cooperativeimages/contactus.jpg') }} class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Branchs</h1>

    </div>
    <div class="pt-20 px-10">
        <h1 class="text-[40px] font-bold">Our<span class="font-normal text-[40px] text-green-600"> Branches</span>
        </h1>

    </div>


    <div class="grid grid-cols-3 px-20 gap-10">
        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch1.jpg') }}" class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Abiskar Shrestha</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>


        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch2.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Dhangadi</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>

                        <h1 class="text-white text-[20px] pt-2">Rhythem Phuyal</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>

        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch3.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Subashree Shrestha</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>


        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch1.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Subekshya Thapa</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>




    </div>
@endsection
