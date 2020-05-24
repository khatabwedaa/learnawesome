@extends('_layouts.master')

@section('body')
    <div class="bg-gray-200 h-screen">
        <header class="md:flex md:items-center md:justify-between bg-white shadow px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold text-gray-700"><a href="#">Learn <span class="text-indigo-500">Awesome</span></a></div>

                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <nav class="md:flex md:items-center md:justify-between flex-1 hidden">
                <div class="md:flex md:items-center ml-8">
                    <a href="#" class="mr-2 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:text-gray-800 hover:bg-gray-200">Join Slack</a>
                    <a href="#" class="mr-2 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:text-gray-800 hover:bg-gray-200">Browse Topics</a>
                    <a href="#" class="mr-2 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:text-gray-800 hover:bg-gray-200">Random Item</a>
                    <a href="#" class="mr-2 px-2 py-1 text-sm text-gray-700 font-medium rounded-md hover:text-gray-800 hover:bg-gray-200">Experts</a>
                </div>

                <div class="flex items-center">
                    <div class="relative w-56 hidden lg:block">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-4 w-4 text-gray-600" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
    
                        <input class="block w-full rounded-md pl-10 pr-4 py-2 text-md text-gray-800 placeholder-gray-600 bg-gray-200 focus:outline-none focus:bg-gray-300" type="text" placeholder="search by keywords">
                    </div>

                    <button class="mx-4 text-gray-600 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button type="button" class="focus:outline-none">
                        <div class="h-8 w-8 overflow-hidden rounded-full border-2  border-gray-400">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" class="h-full w-full object-cover">
                        </div>
                    </button>
                </div>
            </nav>
        </header>
    </div>
@endsection