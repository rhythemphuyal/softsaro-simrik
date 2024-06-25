<div class="px-20 pt-20">
    <div class="flex gap-20">
        <div>
            <h1 class="text-[40px] font-bold">Remittance</h1>
            <p class="text-[19px] text-green-600 font-bold">Read More</p>
        </div>
        <div>
            <p class="text-[19px]">We provide various services for online money transfers. Our service is the best known,
                most secure and
                reliable online service.</p>

        </div>

    </div>


     <section class="py-10">
        <div class="owl-carousel owl-theme ">
            <div class="h-[100px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel1.png")}}"class="h-full w-full">
            </div>
            <div class="h-[100px] w-[220px]">
                <img src="{{asset("cooperativeimages/remittancel2.png")}}"class="h-full w-full">
            </div>
            <div class="h-[100px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel3.png")}}"class="h-full w-full">
            </div>
            <div class="h-[120px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel4.png")}}"class="h-full w-full">
            </div>
            <div class="h-[100px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel5.png")}}"class="h-full w-full">
            </div>
            <div class="h-[120px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel6.png")}}"class="h-full w-full">
            </div>
            <div class="h-[100px] w-[200px]">
                <img src="{{asset("cooperativeimages/remittancel7.webp")}}" class="h-full w-full">
            </div>




        </div>

    </section>


</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 6,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 6
                }
            }
        });
    });
</script>
