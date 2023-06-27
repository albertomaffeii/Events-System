@extends('layouts.main')

@section('title', 'Allsites IT - Product {{$id}}')

@section('content')

@if($id != null)

<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">                        
            <div>
                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Welcome to  Products {{ $id }} Page</h2>
            </div>
            <div></div>
        </div>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="/product/1" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Product {{ $id }}</h2>
                    <img src="http://www.allsites.com.br/giopet/uploads/logo11.png" vspace='10'>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex tenetur reiciendis, natus in assumenda iure sapiente magni doloribus ab nulla animi delectus provident dolor quaerat ipsa placeat saepe veritatis sit!
                    </p>
                    <br>
                    <form action="/products">
                        <button class="btn btn-secondary" id="backBtn" onclick="back()">Back</button>
                    </form>
                </div>
            </a>
        </div>
@else
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">                        
            <div>
                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Welcome to  Products {{ $id }} Page</h2>
            </div>
        </div>
    </div>
    <div>
        <p class="bg-fail"><br /><br />ATTENTION: No product has been selected.</p>
        <p>
            Click the button below to return to the product page to select. <br /><br />
            <form action="/products">
                <button class="btn btn-secondary" id="backBtn" onclick="back()">Back</button>
            </form>
        </p>  
    </div>
@endif                  

@endsection