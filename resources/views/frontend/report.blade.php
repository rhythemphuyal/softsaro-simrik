@extends('frontend.layout.app')
@section('main')
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src={{ asset('cooperativeimages/contactus.jpg') }} class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Reports</h1>

    </div>
    <div class="">
        <div class="h-[40vh] bg-slate-50 py-20 px-40">
            <div class="bg-white shadow-lg border rounde-lg h-[20vh] w-full">
                <div class="flex gap-10 px-4 pt-4">
                    <button type="button" class="text-black font-bold text-[20px] ">Monthly Report</button>
                    <button type="button" class="text-black font-bold text-[20px] ">Quarterly Report</button>
                    <button type="button" class="text-black font-bold text-[20px] ">Progress Report</button>
                    <button type="button" class="text-black font-bold text-[20px] ">Annual Report</button>
                </div>

                <div>
                    <table>
                        <tr>
                            <th class="border border-blue-600  w-[18vw] h-[7vh] text-[25px]">#</th>
                            <th class="border border-blue-600 w-[40vw] text-[20px]">Name</th>
                            <th class="border border-blue-600 w-[60vw] text-[20px]">Download</th>

                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
