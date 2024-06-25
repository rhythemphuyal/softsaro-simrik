@extends('frontend.layout.app')
@section('main')
<div class="bg-gray-200">
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src="{{ asset('cooperativeimages/contactus.jpg') }}" class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Services</h1>
    </div>

    <div class="bg-gray-200">
<div class=" bg-slate-50 shadowed-4xl ml-56 mt-14  w-[73vw] rounded-md mb-4">
    <style>

        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
    </style>

    <div class="container mx-auto mt-8">

        <div class="flex mb-4">

            <button id="tab-btn-a" class="mr-2 px-4 py-2 text-gray-600 text-2xl italic">Schemes</button>

            <button id="tab-btn-b" class="px-4 py-2 text-gray-600 text-2xl italic">Interest Rates</button>
        </div>

        <div id="tab-content-a" class="tab-content">
        <div class="">

            <section class=" bg-green-800 mt-10 text-center h-12 mx-4 text-white font-bold p-2 text-xl "> Optional (General) Savings </section>
<div class=" mt-8 grid grid-cols-3 ml-9 gap-1 mr-80">
  <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/1st.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      Sadharan Bachat</p>
      <p class="font-normal ml-2">
      The savings collected by the employees of the organization by going to the doorsteps and...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
        Read More
      </a>

    </p>
  </div>
  <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/2nd.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      Bishesh Bachat</p>
      <p class="font-normal ml-2">
        With the objective of encouraging the members who are share members in the...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
        Read More
      </a>

    </p>
  </div>
  <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/3.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      Sansthagat Bachat</p>
      <p class="font-normal ml-2">
        Sansthagat Bachat will be the savings received from the organizations (business groups,...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
        Read More
      </a>

    </p>
</div>

</div>
<section class="bg-green-800 mt-10 text-center h-12 mx-4 text-white font-bold p-2 text-xl"> Aniwarya Mashik Bachat </section>
<div class="mt-8 grid grid-cols-4 ml-9">
  <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/4.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      75 Mahine Kramik Bachat</p>
      <p class="font-normal ml-2">
        This savings can be deposited in your favor for 75 months on the basis of...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
      Read More
    </a>
    </p>
 </div>
 <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/5.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Ajiwann (Pension) Bachat</p>
    <p class="font-normal ml-2">
      This savings is a minimum of Rs. 500 or 500 is the equivalent of dividing your...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/6.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Baal Bachat</p>
    <p class="font-normal ml-2">
      The savings have been made to meet the education, health and emergency needs of your child and...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/7.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Naari Bachat</p>
    <p class="font-normal ml-2">
      This savings will be mobilized especially for women share members. Improving women's participation can...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>

</div>


<div class="mt-8 grid grid-cols-4 ml-9">
  <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/8.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      Umang Bachat</p>
      <p class="font-normal ml-2">
        This savings can be deposited on the basis of regular monthly installments. This savings can be...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
      Read More
    </a>
    </p>
 </div>
 <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/9.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Senior Citizen Savings</p>
    <p class="font-normal ml-2">
      The savings made by the senior citizen members of the organization to meet their needs...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/10.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Other Kramik Bachat</p>
    <p class="font-normal ml-2">
      These savings will be gradually accumulated by the members on a daily or a monthly basis depending on the...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/11th.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Ekmustha Bachat</p>
    <p class="font-normal ml-2">
      This savings can be made up to a minimum lump sum of over Rs. 50,000 over a cerain time frame depending upon the....
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>

</div>

<section class="bg-green-800 mt-10 text-center h-12 mx-4 text-white font-bold p-2 text-xl"> Other Savings </section>
<div class="mt-8 grid grid-cols-4 ml-9">
    <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
    <img class="ml-2" src="/cooperativeimages/12.jpg">

    <p class="ml-2 text-gray-600 text-lg">
      Bima Bachat</p>
      <p class="font-normal ml-2">
        Other savings are the savings accounts required by the members of the organization to transactions...
    </p>
    <p class="text-yellow-400 text-right p-3">
      <a href="\">
      Read More
    </a>
    </p>
   </div>
 <div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/13.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Lavanmsa Bachat</p>
    <p class="font-normal ml-2">
      This account can be operated for the purpose of depositing the amount received from the right share...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/14.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Karja Bachat</p>
    <p class="font-normal ml-2">
      As per the rules of this organization, only the member who consumes the loan can open this type of...
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left  bg-white ">
  <img class="ml-2" src="/cooperativeimages/15.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Share Bachat</p>
    <p class="font-normal ml-2">
      The savings made by the share members in order to purchase the shares of the organization is the type of....
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>
<div class="font-bold shadow-xl max-w-48 h-[50w] text-left flex flex-col justify-left mt-11  bg-white ">
  <img class="ml-2" src="/cooperativeimages/16.jpg">

  <p class="ml-2 text-gray-600 text-lg">
    Remit Bachat</p>
    <p class="font-normal ml-2">
      Shareholder members affiliated to this organization who wish to deposit the money earned from the right share....
  </p>
  <p class="text-yellow-400 text-right p-3">
    <a href="\">
    Read More
  </a>
  </p>
</div>

</div>
</div>
        </div>
        </div>







        <div id="tab-content-b" class="tab-content ">

    <div class="bg-slate-50 shadowed-4xl  w-[73vw] rounded-md mb-4">


      <div class="grid grid-cols-2 p-4 gap-10">
        <div class="bg-slate-200 mt-4 h-72 rounded-xl shadow-xl flex-row">

        <section class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            SADHARAN BACHAT
          </section>
          <div class="flex gap-7">
            <img class="h-40 mt-3 ml-4 " src="/cooperativeimages/100.jpg" />
            <div class="flex-col">
              <p class="text-green-800 mt-3 font-extrabold text-lg">
                Minimum Balance
              </p>
              <p class="text-orange-500 font-light text-4xl">1000</p>
              <p class="border-t border-2 border-gray-400 my-3 w-52"></p>
              <p class="text-green-800 font-extrabold text-lg">Interest Rate</p>
              <p class="text-orange-500 font-light text-4xl">7%</p>
            </div>
          </div>
          <p class="mt-4 ml-4  max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
        <div
          class="bg-slate-200 mt-4 h-72 rounded-xl shadow-xl flex-row"
        >
          <section
            class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            SANSTHAGAT BACHAT
          </section>
          <div class="flex gap-7">
            <img class="h-40 mt-3 ml-4" src="/cooperativeimages/101.jpg" />
            <div class="flex-col">
              <p class="text-green-800 mt-3 font-extrabold text-lg">
                Minimum Balance
              </p>
              <p class="text-orange-500 font-light text-4xl">1000-50000</p>
              <p class="border-t border-gray-400 my-3 w-52 border-2"></p>
              <p class="text-green-800 font-extrabold text-lg">Interest Rate</p>
              <p class="text-orange-500 font-light text-4xl">7%</p>
            </div>
          </div>
          <p class="mt-4 ml-4 ml-1 max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
        <div
          class="bg-slate-200 mt-24 h-72 rounded-xl shadow-xl flex-row"
        >
          <section
            class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            BISHESH BACHAT
          </section>
          <div class="flex gap-3">
            <img class="h-40 mt-3 ml-4" src="/cooperativeimages/102.jpg" />
            <div class="relative">
              <p class="text-orange-500 mt-4 font-extrabold text-lg">Normal</p>
              <p class="text-green-800 font-bold text-sm">Min.Balance: 1Lakh</p>
              <p class="text-green-800 font-bold text-sm">Int.rate:8%</p>
              <p class="border-t border-gray-400 w-[19vw] mt-2 border-2"></p>
              <p class="text-orange-500 font-extrabold text-lg">Premium</p>
              <p class="text-green-800 font-bold text-sm">Min.Balance: 3lakh</p>
              <p class="text-green-800 font-bold text-sm">Int.rate:9.50%</p>

              <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 border w-0 h-3/4border h-40 border-gray-400"
              >
                <p class="text-orange-500 ml-2 font-extrabold text-lg mt-2">
                  Silver
                </p>
                <p class="text-green-800 font-bold ml-2 text-sm w-[10vw]">
                  Min.Balance: 1Lakh
                </p>
                <p class="text-green-800 font-bold ml-2 text-sm">Int.rate:9%</p>
                <p class="text-orange-500 ml-2 font-extrabold text-lg mt-3">
                  Platinum
                </p>
                <p class="text-green-800 font-bold ml-2 text-sm w-[10vw]">
                  Min.Balance: 5Lakh
                </p>
                <p class="text-green-800 font-bold ml-2 text-sm">
                  Int.rate:10.50%
                </p>
              </div>
            </div>
          </div>
          <p class="mt-4 ml-4 max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
        <div
          class="bg-slate-200 mt-24 h-72 rounded-xl shadow-xl flex-row"
        >
          <section
            class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            KRAMIK BACHAT
          </section>
          <div class="flex gap-3">
            <img class="h-40 mt-3 ml-4" src="/cooperativeimages/103.jpg" />
            <div class="relative">
              <p class="text-orange-500 mt-6 font-extrabold text-lg">
                Duration
              </p>
              <p class="text-green-800 font-bold text-sm">12 Months</p>
              <p class="text-green-800 font-bold text-sm">24 Months</p>
              <p class="text-green-800 font-bold text-sm">24 Months</p>
              <p class="text-green-800 font-bold text-sm">36 Months</p>

              <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 border w-0 h-3/4border h-36 border-gray-400 ml-20"
              >
                <p class="text-orange-500 ml-4 font-extrabold text-lg mt-2">
                  INT.Rate
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">7.50%</p>
                <p class="text-green-800 font-bold ml-4 text-sm">8.50%</p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">9.50%</p>
                <p class="text-green-800 font-bold ml-4 text-sm">10.50%</p>
              </div>
            </div>
          </div>
          <p class="mt-4 ml-4 max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
        <div
          class="bg-slate-200 mt-24 h-72 rounded-xl shadow-xl flex-row"
        >
          <section
            class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            BAL BACHAT
          </section>
          <div class="flex gap-3">
            <img class="h-40 mt-3 ml-4" src="/cooperativeimages/104.jpg" />
            <div class="relative">
              <p class="text-orange-500 mt-6 font-extrabold text-lg">
                Duration
              </p>
              <p class="text-green-800 font-bold text-sm">75 Months</p>
              <p class="text-green-800 font-bold text-sm">120 Months</p>
              <p class="text-green-800 font-bold text-sm">144 Months</p>
              <p class="text-green-800 font-bold text-sm">180 Months</p>

              <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 border w-0 h-3/4border h-36 border-gray-400 ml-20"
              >
                <p class="text-orange-500 ml-4 font-extrabold text-lg mt-2">
                  INT.Rate
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 40%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 65%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 85%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 120%
                </p>
              </div>
            </div>
          </div>
          <p class="mt-4 ml-4 max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
        <div
          class="bg-slate-200 mt-24 h-72 rounded-xl shadow-xl flex-row"
        >
          <section
            class="bg-green-800 text-center p-2 text-white font-bold rounded-sm rounded-t-xl h-10 mb-0"
          >
            NAARI BACHAT
          </section>
          <div class="flex gap-3">
            <img class="h-40 mt-3 ml-4" src="/cooperativeimages/105.jpg" />
            <div class="relative">
              <p class="text-orange-500 mt-6 font-extrabold text-lg">
                Duration
              </p>
              <p class="text-green-800 font-bold text-sm">75 Months</p>
              <p class="text-green-800 font-bold text-sm">120 Months</p>
              <p class="text-green-800 font-bold text-sm">144 Months</p>
              <p class="text-green-800 font-bold text-sm">180 Months</p>

              <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 border w-0 h-3/4border h-36 border-gray-400 ml-20"
              >
                <p class="text-orange-500 ml-4 font-extrabold text-lg mt-2">
                  INT.Rate
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 33%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 60%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 80%
                </p>
                <p class="text-green-800 font-bold ml-4 text-sm w-32">
                  Added 100%
                </p>
              </div>
            </div>
          </div>
          <p class="mt-4 ml-4 max-w-96 text-xs">
            * Interest rate mentioned above can change from time to time as
            per the decision of the Board of Directors.
          </p>
        </div>
      </div>
    </div>
    </div>



    <script>
        const tabContentA = document.getElementById('tab-content-a');
        tabContentA.classList.add('active');

        document.addEventListener("DOMContentLoaded", function() {

            const tabBtnA = document.getElementById('tab-btn-a');
            const tabBtnB = document.getElementById('tab-btn-b');

            const tabContentB = document.getElementById('tab-content-b');


            tabBtnA.addEventListener('click', function() {

                hideAllTabContents();

                tabContentA.classList.add('active');
            });

            tabBtnB.addEventListener('click', function() {

                hideAllTabContents();

                tabContentB.classList.add('active');
            });


            function hideAllTabContents() {
                tabContentA.classList.remove('active');
                tabContentB.classList.remove('active');
            }
        });
    </script>


    </div>

    @endsection
    </div>
