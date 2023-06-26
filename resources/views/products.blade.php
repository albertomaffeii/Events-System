@extends('layouts.main')

@section('title', 'Allsites IT - Products')

@section('content')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">                        
                    <div>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Welcome to our Products Page</h2>
                    </div>
                    <div></div>
                </div>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">                        
                    <div>
                        
                    <a href="/home">Home</a>  
                        <b>[Products]</b>  
                        <a href="/contact">Contact</a>
                    </div>
                    <div></div>
                </div>
            </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="/product/01" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Product 01</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex tenetur reiciendis, natus in assumenda iure sapiente magni doloribus ab nulla animi delectus provident dolor quaerat ipsa placeat saepe veritatis sit!
                                </p>
                            </div>
                        </a>

                        <a href="/product/02" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Product 02</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolorem quam alias porro ratione cupiditate distinctio commodi cumque unde. A, delectus culpa quod animi fugiat velit ex eius voluptatum dolor!
                                </p>
                            </div>
                        </a>

                        <a href="/product/03" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Product 03</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex tenetur reiciendis, natus in assumenda iure sapiente magni doloribus ab nulla animi delectus provident dolor quaerat ipsa placeat saepe veritatis sit!
                                </p>
                            </div>
                        </a>

                        <a href="/product/04" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Product 04</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolorem quam alias porro ratione cupiditate distinctio commodi cumque unde. A, delectus culpa quod animi fugiat velit ex eius voluptatum dolor!
                                </p>
                            </div>
                        </a>
                    </div>
                    @endsection