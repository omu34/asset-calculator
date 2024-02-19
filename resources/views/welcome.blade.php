<x-guest-layout>

    <div class="max-w-screen    gap-6 overflow-hidden bg-gray-300">

        <div class="hidden md:block  lg:block justify-center  pt-6 pb-6 " style="background-color:#f7f3f8;">
            <div class="flex md:gap-2 lg:gap-12 lg:max-w-screen-xl  md:max-w-screen-lg mx-auto ">
                <div class="flex ml-4 transition-transform transform hover:scale-105">
                    <a href="/" class="">
                        <img src="https://vehiclesales.co-opbank.co.ke/assetfinance/images/coop-asset-auction1.png" alt="" srcset="">
                    </a>
                </div>
                <div class=" flex justify-center gap-10 mt-2">
                    <div class=" ">
                        <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="menu-text w-24 text-center inline-flex items-center" type="button">
                            <a href="{{ url('/about') }}" class="hover:text-blue-700"> About us</a>
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="CurrentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="multi-dropdown" class="z-10 hidden bg-gray-300 divide-y divide-gray-100 rounded-lg shadow w-56">
                            <ul class=" p-10 pb-10" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <a href="{{ url('/membership') }}" class="footer-p ">Our Membership</a>
                                </li>

                                <li>
                                    <a href="{{ url('/board-directors') }}" class="footer-p ">Board of Directors</a>
                                </li>
                                <li>
                                    <a href="{{ url('/senior-management') }}" class="footer-p ">Senior Directors</a>
                                </li>

                            </ul>
                        </div>
                    </div>



                    <div class="">
                        <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom" class="menu-text  text-center inline-flex items-center" type="button">
                            <a href="{{ url('/our-resources') }}" class=""> Resources</a>
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownUsers" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                            <ul class=" p-10 pb-10" aria-labelledby="dropdownUsersButton">

                                <li>
                                    <a href="{{ url('/our-downloads') }}" class="footer-p ">Our Downloads</a>
                                </li>
                                <li>
                                    <a href="{{ url('/our-careers') }}" class="footer-p ">Our Careers</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tenders') }}" class="footer-p ">Tenders</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="md:hidden lg:block">
                        <button id="dropdownRadioHelperButton" data-dropdown-toggle="dropdownRadioHelper" class="menu-text  text-center inline-flex items-center" type="button">
                            <a href="{{ url('/news-media') }}" class=""> News $ Media</a>
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadioHelper" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                            <ul class=" p-10 pb-10" aria-labelledby="dropdownRadioHelperButton">

                                <li>
                                    <a href="{{ url('events') }}" class="footer-p ">Events</a>
                                </li>
                                <li>
                                    <a href="{{ url('gallery') }}" class="footer-p ">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ url('news-articles') }}" class="footer-p ">News $ Articles</a>
                                </li>
                                <li>
                                    <a href="{{ url('single-news-article') }}" class="footer-p ">Single News
                                        Article
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="">
                        <a href="{{ url('help-support') }}" class="menu-text text-center inline-flex items-center">Support</a>

                    </div>
                    <div class="md:hidden lg:block">
                        <a href="{{ 'get-in-touch' }}" class="menu-text  text-center inline-flex items-center">Contact</a>

                    </div>
                    <div class="md:hidden lg:block">
                        <a href="{{ 'submit-ticket' }}" class="menu-text text-center inline-flex items-center">Submit
                            ticket
                        </a>
                    </div>
                </div>
                <div class="flex gap-2 justify-end ml-4 md:ml-4 lg:ml-8">
                    <div class="">
                        <a href="" class="">
                            <button type="button" class="bg-green-700 hover:bg-green-300 text-white text-bold rounded-xl px-10 py-2 text-center">
                                Join us
                            </button>
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="">
                            <button type="button" class="bg-green-700 hover:bg-green-300 text-white text-bold rounded-xl px-10 py-2 text-center">
                                Search
                            </button>
                        </a>
                    </div>
                </div>
            </div>


        </div>


        <div class="p-4" style="background-color:#0a7a35;">
            <!-- Toggle Button for Small Screens -->
            <div class="flex justify-end">
                <button id="toggleMenuBtn2" class="md:hidden inline-flex text-gray-900 hover:text-blue-500 rounded-lg text-sm px-4 py-2 text-center items-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <span class="ml-2">Menu2</span>
                </button>
            </div>


            <div id="mobileMenu2" class="hidden md:hidden w-1/2 absolute top-4 left-4  bg-white shadow-md z-50 rounded-md">
                <!-- Add your dropdown menu items here -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">me</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Item 2</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Item 3</a>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toggleMenuBtn = document.getElementById('toggleMenuBtn2');
                var mobileMenu = document.getElementById('mobileMenu2');

                toggleMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            });

        </script>
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-10  mt-1 p-4 md:mt-8 max-w-screen-xl mx-auto">
        <div class=" p-6 lg:p-8 bg-gray-300  rounded-xl">
            <div class="flex justify-center">
                <form method="Post" action="{{ route('calculate') }}">
                    @csrf

                    <div class="form-group">
                        <label for="asset_cost">Asset Cost:</label>
                        <input class="w-full rounded-xl border-lime-400 mt-1 mb-2" type="number" name="asset_cost" id="asset_cost" required min="0" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="down_payment">Down Payment:</label>
                        <input class="w-full rounded-xl border-lime-400 mt-1 mb-2" type="number" name="down_payment" id="down_payment" required min="0" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="term_length">Term Length (months):</label>
                        <input class="w-full rounded-xl border-lime-400 mt-1 mb-2" type="number" name="term_length" id="term_length" required min="1" step="1">
                    </div>

                    <div class="form-group">
                        <label for="interest_rate">Interest Rate (%):</label>
                        <input class="w-full rounded-xl border-lime-400 mt-1 mb-2" type="number" name="interest_rate" id="interest_rate" required min="0" step="0.01">
                    </div>

                    <div class="form-group">
                        <label class="border-lime-400" for="balloon_payment">Balloon Payment (optional):</label>
                        <input class="w-full focus:border-green-700  rounded-xl border-lime-400 mt-1 mb-2" type="number" name="balloon_payment" id="balloon_payment" min="0" step="0.01">
                    </div>
                    <button type="submit" class="btn btn-primary hover:bg-green-400 rounded-xl bg-green-700 px-8 py-2 text-white">Calculate</button>
                </form>
            </div>
        </div>



        <div class="lg:mt-16">
            <div class="flex justify-center">
                <h1 class="text-green-700 text-2xl font-bold p-4 ">
                    Asset Finance Calculator Results
                </h1>
            </div>





            <div id="result-row" class="relative overflow-x-auto rounded-xl hover:shadow-emerald-600 shadow-md bg-green-700 py-8 ">
                <div class=" flex-col justify-center mx-auto max-w-screen-sm">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <tr id="result-row" class=" relative overflow-x-auto shadow-md  py-8 hover:shadow-green-800  ">
                                <td class="px-8 py-4 font-normal text-white">
                                    <p class="text-lg font-bold">Monthly Payment: </p>
                                </td>
                                <td class="px-8 py-4 font-normal text-white">
                                    <p class="text-lg font-semibold ">Total Interest Paid: </p>
                                </td>
                                <td class="px-8 py-4 font-normal text-white">
                                    <p class="text-lg font-bold">Total Cost of Ownership: </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


















            <div class="ml-2 flex justify-center mt-5">
                <a href="{{ route('login') }}" class="">
                    <button class="text-white bg-green-700 px-12 py-3 uppercase hover:bg-green-300 ring-1  ring-white rounded-xl text-sm text-center inline-flex items-center" type="button">
                        Login To Add an Asset
                        <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>





    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
        @endif
        @endauth
    </div>
    @endif




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to handle form submission
            $('form').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();
                // Serialize form data
                var formData = $(this).serialize();
                // Submit the form data using AJAX
                $.ajax({
                    url: $(this).attr('action'), // Get form action URL
                    method: $(this).attr('method'), // Get form method (POST)
                    data: formData, // Form data to be submitted
                    success: function(response) {
                        // Insert the response into the table body
                        $('#result-row').html(response);
                    }
                    , error: function(xhr, status, error) {
                        // Handle errors if any
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>


</x-guest-layout>
