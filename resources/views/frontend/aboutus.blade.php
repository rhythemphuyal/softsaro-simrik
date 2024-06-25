@extends('frontend.layout.app')
@section('main')
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src={{ asset('cooperativeimages/contactus.jpg') }} class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">About Us</h1>

    </div>
    <div class="pt-10 grid grid-cols-2 gap-5 items-center max-sm:grid-cols-1">
        <div class="">
            <img src="{{ asset('cooperativeimages/aboutus.jpg') }}" class="px-20">
        </div>
        <div class="max-sm:px-10">
            <h1 class="heading text-[15px] text-black font-bold max-sm:pt-10">About Our Cooperative</h1>
            <h1 class="heading font-bold text-[30px] text-green-700 pt-5">Who <span
                    class="font-normal text-[30px] text-black">we are?</span></h1>

            <p class="paragraph pt-10 w-[90%]">We are new in the market but comparise a professional
                team of well experienced individuals. Each employee is given proper training to deal
                with customers maintaing a friendly and comforing behaviour. We meet the standards and
                regulatory compliances of the government of Nepal. We aim at providing international level
                services and uplifting the living standard of the indviduals. </p>
        </div>

    </div>
    <div class="grid grid-cols-6 max-sm:grid-cols-3 pt-10 px-20">
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Service centers</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">05</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Number of employees</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">20</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Savings</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">10 crore</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Debt Liability</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">3 crore</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Cash and Bank</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">1000000</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Total Expenses</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">5000000</p>
        </div>



        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Property</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">05</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Fund</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">20 crore</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Market Sahre</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">10 crore</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Share Members</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">10k</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-500">

            <h1 class="heading pt-3 text-white text-[15px]">Total Income</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">1000000</p>
        </div>
        <div class=" flex flex-col items-center text-center bg-green-600">

            <h1 class="heading pt-3 text-white text-[15px]">Profit</h1>
            <p class="paragraph pt-2 font-bold text-white text-[25px]">5000000</p>
        </div>
    </div>


    <div class="pt-20 grid grid-cols-2 max-sm:grid-cols-1 gap-5 items-center">
        <div class="flex justify-center items-center">
            <div class="h-[500px] w-[550px] max-sm:h-[480px] max-sm:w-[500px]">
                <img src="{{ asset('cooperativeimages/mission.jpg') }}" class="h-full w-full border rounded-full">
            </div>
        </div>
        <div class="flex gap-5 px-5">
            <div class="h-[40vh] w-10 bg-green-600">

            </div>
            <div>
                <h1 class="heading text-[15px] text-black font-bold">Our Mission</h1>
                <h1 class="heading font-bold text-[30px] text-green-700 pt-5">What <span
                        class="font-normal text-[30px] text-black">we want to achieve?</span></h1>
                <div class="flex pt-5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                            <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                        </svg>
                    </div>

                    <h1 class="font-bold w-[90%]">Empowerment: <span class="font-normal">To empower individuals by providing them
                            with a platform to collectively own and
                            democratically control their economic activities.</span></h1>

                </div>

                <div class="flex pt-5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                            <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                        </svg>
                    </div>

                    <h1 class="font-bold w-[90%]">Community Development:<span class="font-normal">To contribute to the
                            socio-economic development of the community by reinvesting profits locally and addressing
                            community needs.</span></h1>

                </div>


            </div>

        </div>
    </div>

    <div class="pt-20 px-10">

        <div class=" bg-green-100 w-full py-10 grid grid-cols-2 max-sm:grid-cols-1  items-center">
            <div class= "flex flex-col justify-center items-center">
                <div>
                    <img src="{{ asset('cooperativeimages/search.png') }}" class="">
                </div>
            </div>
            <div class="flex gap-5">
                <div class="h-[55vh] w-5 bg-green-600">

                </div>
                <div>
                    <h1 class="heading text-[15px] text-black font-bold">Our Objectives</h1>
                    <h1 class="heading font-bold text-[30px] text-green-700 pt-5">Short term goals <span
                            class="font-normal text-[30px] text-black">we want to achieve?</span></h1>
                    <div class="flex pt-5">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                            </svg>
                        </div>

                        <p>
                            Increase membership engagement through regular communication and participation.
                        </p>
                    </div>

                    <div class="flex pt-5">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                            </svg>
                        </div>

                        <p>
                            Enhance product or service quality to meet evolving member needs.
                        </p>
                    </div>

                    <div class="flex pt-5">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                            </svg>
                        </div>

                        <p>
                            Strengthen financial management for stability and growth.
                        </p>
                    </div>

                    <div class="flex pt-5">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="none" stroke="#286d03" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0" />
                            </svg>
                        </div>

                        <p>
                            Expand market reach through targeted marketing and outreach efforts.
                        </p>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
