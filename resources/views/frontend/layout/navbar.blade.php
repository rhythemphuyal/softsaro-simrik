<div
    class="bg-green-700 h-[8vh] w-full flex gap-10 py-4 px-10 sticky top-0 z-20 max-sm:text-[14px] max-sm:gap-4 max-sm:px-2 max-sm:h-[9vh]">

    <ul class="text-white flex gap-10 max-sm:gap-2 max-sm:text-[10px]">

        <li> <a href="{{ route('landing') }}"class="hover:text-orange-600">HOME</a></li>
        <li> <a href="{{ route('aboutus') }}"class="hover:text-orange-600">ABOUT US </a></li>
        <li> <a href="{{route('services')}}"class="hover:text-orange-600">SERVICES</a></li>
        <li> <a href="{{route('news')}}"class="hover:text-orange-600">NEWS & ACTIVITIES</a></li>
        <li> <a href="{{route('report')}}"class="hover:text-orange-600">REPORTS</a></li>
        {{-- <div>
            <div class="flex" id="show">
                <div>rE</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24">
                    <path fill="#ffffff" d="M12 14.308L8.192 10.5h7.616z" />
                </svg>
            </div>

            <div class="absolute pt-4">
                <div class="hidden bg-green-700  w-[16vw]  " id="aa">
                    <form action="{{ route('report') }}">

                        <button type="submit" value="10" name="sortAlpa" class="text-white hover:text-orange-600">
                            REPORTS
                        </button>
                    </form>

                    <form>

                        <button type="submit" value="10" name="date" class="text-white  hover:text-orange-600">
                            HNC QUARTERLY BULLETIN
                        </button>
                    </form>


                </div>


            </div>

        </div> --}}

        {{-- <li> <a href="{{ route('branch') }}" class="hover:text-orange-600">BRANCH</a></li> --}}
        <li> <a href="{{route('gallery')}}"class="hover:text-orange-600" >GALLERY</a></li>
        <li> <a href="{{route('csr') }}"class="hover:text-orange-600">CSR</a></li>
        <li> <a href="{{route('contactus')}}"class="hover:text-orange-600">CONTACT US</a></li>
    </ul>



</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        var hide = $('#aa');
        var show = $('#show'); // Corrected the selector syntax

        show.click(function() { // Corrected the click event syntax
            hide.toggle();
        });
    });
</script>
