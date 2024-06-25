@extends('frontend.layout.app')
@section('main')
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src={{ asset('cooperativeimages/contactus.jpg') }} class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">EMI Calculator</h1>

    </div>

    <div class="px-20 pt-10">
        <div class="h-[50vh] w-[25vw] bg-slate-200">
            <div class="bg-black">
                <h1 class="text-white text-center text-[30px]">EMI Calculator</h1>
            </div>

            <form class="p-4">

                <div class="pt-2 relative">
                    <input type="text" name="loanamount" id="input" placeholder="Loan Amount"
                        class="h-[7vh] w-full  text-[18px] text-left focus:outline-none pl-9">
                    <div class="absolute top-6 left-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.75rem" height="1.2rem" viewBox="0 0 15 24">
                            <path fill="#17a60c"
                                d="M15.307 5.83v1.759c0 .29-.235.525-.525.525h-.022h.001h-2.864a6.38 6.38 0 0 1-2.19 3.981l-.009.008a8.584 8.584 0 0 1-4.673 1.873l-.032.002q2.846 3.034 7.824 9.136a.465.465 0 0 1 .067.581l.001-.002a.496.496 0 0 1-.459.308L12.389 24h.002h-3.345a.5.5 0 0 1-.404-.204l-.001-.001Q3.425 17.539.152 14.062a.509.509 0 0 1-.154-.365v-.011v.001v-2.167a.553.553 0 0 1 .545-.546h1.909a7.664 7.664 0 0 0 3.668-.753l-.046.02a3.35 3.35 0 0 0 1.742-2.107l.005-.023H.52a.525.525 0 0 1-.525-.525v-.022v.001v-1.759c0-.29.235-.525.525-.525h.022h-.001h7.04Q6.61 3.355 3.013 3.355H.542a.553.553 0 0 1-.546-.545V.521c0-.29.235-.525.525-.525h.022h-.001h14.203c.29 0 .525.235.525.525v.022v-.001v1.759c0 .29-.235.525-.525.525h-.022h.001h-3.971a5.849 5.849 0 0 1 1.085 2.417l.006.037h2.935c.29 0 .525.235.525.525v.022v-.001z" />
                        </svg>
                    </div>
                </div>


                <div class="pt-5 relative">
                    <input type="text" name="interestrate" id="input" placeholder="Interest Rate"
                        class="h-[7vh] w-full  text-[18px] text-left focus:outline-none pl-9">
                    <div class="absolute top-9 left-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 48 48">
                            <g fill="none" stroke="#17a60c" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4">
                                <circle cx="11" cy="11" r="5" />
                                <circle cx="37" cy="37" r="5" />
                                <path d="M42 6L6 42" />
                            </g>
                        </svg>
                    </div>
                </div>


                <div class="flex gap-2">
                    <div class="pt-5 relative">
                        <input type="text" name="loantenure" id="input" placeholder="Loan Tenure"
                            class="h-[7vh] w-full text-[18px] text-left focus:outline-none pl-9">
                        <div class="absolute top-9 left-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24">
                                <g fill="none" stroke="#17a60c" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                                    <path d="M12 7v5l3 3" />
                                </g>
                            </svg>
                        </div>
                    </div>




                    <div class="pt-5 flex justify-center items-center">
                        <button type="submit" class="bg-blue-900 px-5 py-3 text-white">Yr</button>
                        <button type="submit" class="bg-blue-600 px-4 py-3 text-white">Mo</button>
                    </div>
                </div>
            </form>

        </div>







    </div>
@endsection
