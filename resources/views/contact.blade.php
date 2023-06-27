@extends('layouts.main')

@section('title', 'Allsites IT - Contact')

@section('content')
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">                        
                    <div>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Welcome to our Page</h2>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Administration</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    <E-Mail>E-Mail: email@email.com</E-Mail><br>Phone: +39 999 9999999
                                </p>
                            </div>
                        </a>

                    <a href="" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Comercial</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    <E-Mail>E-Mail: email@email.com</E-Mail><br>Phone: +39 999 9999999
                                </p>
                            </div>
                        </a>
                    </div>

                    @endsection