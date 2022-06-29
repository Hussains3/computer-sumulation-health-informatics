@extends('layouts.app')
@section('title')
    Editors
@endsection
@section('content')
    <main class="min-h-screen">

        {{-- Hero --}}
        <div class="w-full bg-night">
            <h1 class="invisible">Computer Sumulation and Health Informatics</h1>
            <div class="container pb-14 pt-10 px-4 lg:px-0 lg:pb-28 lg:pt-20 mx-auto grid lg:grid-cols-2 grid-cols-1">
                <div class="">
                    <p class="text-night bg-white px-0.5 inline-block uppercase mb-2.5 text-sm lg:text-base">Informatics in Medicine Unlocked</p>
                    <p class="text-white my-2 hover:underline hover:decoration-2 font-bold text-xl lg:text-5xl">
                        Computer Simulation and Health Informatics
                    </p>
                    <p class="my-2 text-white">ISSN: 1111-0000</p>
                    <p class="text-leaf mb-2 mt-7">Publishing Option</p>
                    <div class="flex my-2">
                        <button class="text-white text-sm flex justify-between items-center mr-9">Guide for authors<span
                                class="iconify text-leaf inline-block ml-1"
                                data-icon="akar-icons:arrow-up-right"></span></button>
                        <button class="text-white text-sm flex justify-between items-center mr-9">Track your paper<span
                                class="iconify text-leaf inline-block ml-1"
                                data-icon="akar-icons:chevron-down"></span></button>
                    </div>
                    <div class="mt-8">
                        <button class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">Submit
                            Paper</button>
                        <button
                            class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf uppercase text-leaf hover:bg-leaf hover:text-white mr-2 lg:mr-4">View
                            Article</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Editorial Board --}}
        <div class="container mx-auto py-7 px-4 lg:px-0">
            <h2 class="uppercase text-center underline decoration-leaf decoration-2 underline-offset-8 font-bold text-2xl lg:text-4xl">editorial board
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-4 my-4 lg:my-6">
                <div class="hidden lg:block"></div>
                <div class="col-span-2">
                    <h3 class="text-2xl text-night font-bold uppercase">72 editors and editorial board members in 28 countries/regions</h3>
                    <div class="flex items-center justify-between pr-20 my-7 flex-wrap">
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl" data-icon="emojione:flag-for-united-states"></span>United State of America (18)</p>
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl" data-icon="emojione:flag-for-india"></span>India (13)</p>
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl" data-icon="emojione:flag-for-brazil"></span>Brazil (3)</p>
                        <a href="#" class="text-leaf my-2 ">More (23)</a>
                    </div>
                    {{-- Horizontal devider --}}
                    <div class="">
                        <hr>
                    </div>
                    <h4 class="text-lg text-night font-medium my-3">Editors</h4>
                    {{-- Editor --}}
                    <div class="flex lg:p-7 gap-x-5 flex-col lg:flex-row">
                        <div class="my-5">
                            <img src="{{asset('images/editor/editor.png')}}" class="rounded-full mr-3" alt="Editor">
                        </div>
                        <div class="my-5">
                            <div class="mb-5">
                                <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                            </div>
                            <div class="flex lg:items-center ">
                                <span class="iconify text-leaf mr-4 text-4xl lg:text-2xl" data-icon="fa-solid:university"></span>
                                <p>Columbia University, New York, New York, United States of America</p>
                            </div>
                            <div class="flex mt-4 lg:items-center">
                                <span class="iconify text-leaf mr-4 text-8xl lg:text-4xl" data-icon="akar-icons:paper"></span>
                                <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                                    Image processing, Signal processing, Ventricular tachycardia</p>
                            </div>
                            <button class="flex items-center text-leaf my-6">View Full Biography<span class="iconify ml-1 " data-icon="akar-icons:chevron-down"></span></button>
                        </div>
                    </div>
                    {{-- Horizontal devider --}}
                    <div class="">
                        <hr>
                    </div>
                    <h4 class="text-lg text-night font-medium my-3">Authors</h4>
                    {{-- Author --}}
                    <div class="flex lg:p-7 gap-x-5 flex-col lg:flex-row">
                        <div class="my-5">
                            <img src="{{asset('images/editor/editor.png')}}" class="rounded-full mr-3" alt="Editor">
                        </div>
                        <div class="my-5">
                            <div class="mb-5">
                                <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                            </div>
                            <div class="flex lg:items-center ">
                                <span class="iconify text-leaf mr-4 text-4xl lg:text-2xl" data-icon="fa-solid:university"></span>
                                <p>Columbia University, New York, New York, United States of America</p>
                            </div>
                            <div class="flex mt-4 lg:items-center">
                                <span class="iconify text-leaf mr-4 text-8xl lg:text-4xl" data-icon="akar-icons:paper"></span>
                                <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                                    Image processing, Signal processing, Ventricular tachycardia</p>
                            </div>
                            <button class="flex items-center text-leaf my-6">View Full Biography<span class="iconify ml-1 " data-icon="akar-icons:chevron-down"></span></button>
                        </div>
                    </div>
                    {{-- Author --}}
                    <div class="flex lg:p-7 gap-x-5 flex-col lg:flex-row">
                        <div class="my-5">
                            <img src="{{asset('images/editor/editor.png')}}" class="rounded-full mr-3" alt="Editor">
                        </div>
                        <div class="my-5">
                            <div class="mb-5">
                                <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                            </div>
                            <div class="flex lg:items-center ">
                                <span class="iconify text-leaf mr-4 text-4xl lg:text-2xl" data-icon="fa-solid:university"></span>
                                <p>Columbia University, New York, New York, United States of America</p>
                            </div>
                            <div class="flex mt-4 lg:items-center">
                                <span class="iconify text-leaf mr-4 text-8xl lg:text-4xl" data-icon="akar-icons:paper"></span>
                                <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                                    Image processing, Signal processing, Ventricular tachycardia</p>
                            </div>
                            <button class="flex items-center text-leaf my-6">View Full Biography<span class="iconify ml-1 " data-icon="akar-icons:chevron-down"></span></button>
                        </div>
                    </div>
                    <div class="text-center mb-7">
                        <button class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white ">VIEW ALL AUTHOR</button>
                    </div>

                    {{-- Horizontal devider --}}
                    <div class="">
                        <hr>
                    </div>
                    <h4 class="text-lg text-night font-medium my-3">Reviewers</h4>
                    {{-- Reviewers --}}
                    <div class="flex lg:p-7 gap-x-5 flex-col lg:flex-row">
                        <div class="my-5">
                            <img src="{{asset('images/editor/editor.png')}}" class="rounded-full mr-3" alt="Editor">
                        </div>
                        <div class="my-5">
                            <div class="mb-5">
                                <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                            </div>
                            <div class="flex lg:items-center ">
                                <span class="iconify text-leaf mr-4 text-4xl lg:text-2xl" data-icon="fa-solid:university"></span>
                                <p>Columbia University, New York, New York, United States of America</p>
                            </div>
                            <div class="flex mt-4 lg:items-center">
                                <span class="iconify text-leaf mr-4 text-8xl lg:text-4xl" data-icon="akar-icons:paper"></span>
                                <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                                    Image processing, Signal processing, Ventricular tachycardia</p>
                            </div>
                            <button class="flex items-center text-leaf my-6">View Full Biography<span class="iconify ml-1 " data-icon="akar-icons:chevron-down"></span></button>
                        </div>
                    </div>
                    {{-- Reviewers --}}
                    <div class="flex lg:p-7 gap-x-5 flex-col lg:flex-row">
                        <div class="my-5">
                            <img src="{{asset('images/editor/editor.png')}}" class="rounded-full mr-3" alt="Editor">
                        </div>
                        <div class="my-5">
                            <div class="mb-5">
                                <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                            </div>
                            <div class="flex lg:items-center ">
                                <span class="iconify text-leaf mr-4 text-4xl lg:text-2xl" data-icon="fa-solid:university"></span>
                                <p>Columbia University, New York, New York, United States of America</p>
                            </div>
                            <div class="flex mt-4 lg:items-center">
                                <span class="iconify text-leaf mr-4 text-8xl lg:text-4xl" data-icon="akar-icons:paper"></span>
                                <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                                    Image processing, Signal processing, Ventricular tachycardia</p>
                            </div>
                            <button class="flex items-center text-leaf my-6">View Full Biography<span class="iconify ml-1 " data-icon="akar-icons:chevron-down"></span></button>
                        </div>
                    </div>
                    <div class="text-center mb-7">
                        <button class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white ">VIEW ALL AUTHOR</button>
                    </div>


                </div>
                <div class="hidden lg:block"></div>
            </div>
        </div>

    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".letReserch").hover(
                function() {
                    $(this).children('p:first-child').toggleClass('text-white', 'text-night');
                },
                function() {
                    $(this).children('p:first-child').toggleClass('text-white', 'text-night');
                }
            );
        });
    </script>
@endsection
