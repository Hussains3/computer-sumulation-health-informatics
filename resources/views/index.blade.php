@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <main class="min-h-screen">

        {{-- Hero --}}
        <div class="w-full bg-night">
            <h1 class="invisible">Computer Sumulation and Health Informatics</h1>
            <div class="container pb-14 pt-10 px-4 lg:px-0 lg:pb-28 lg:pt-20 mx-auto grid lg:grid-cols-2 grid-cols-1">
                <div class="">
                    <p class="text-night bg-day px-0.5 inline-block uppercase mb-2.5 text-sm lg:text-base">Artificial
                        intelligence</p>
                    <a href="{{ route('article.show', 'article_slug') }}">
                        <p class="text-white hover:underline hover:decoration-2 uppercase text-xl lg:text-3xl mb-4">
                            artificial intelligence (AI),
                            the ability of a digital computer or computer- <br> controlled robot to perform tasks commonly
                            associated with intelligent beings.
                        </p>
                    </a>
                    <a href="#" class="text-sm text-leaf">Mehedi Hassan et. al</a>
                </div>
                <div class=" hidden lg:block">
                    <div class="flex justify-end items-center">
                        <div class="slideshow-container flex justify-between items-center w-3/4">
                            <a class="prev m-5 text-leaf hover:text-white  bg-white hover:bg-leaf text-base px-2.5 h-10 flex justify-center items-center"
                                onclick="plusSlides(-1)"><span class="iconify" data-icon="ooui:previous-ltr"></span></a>

                            <div class="">
                                <div class="mySlides fade bg-white p-7">
                                    <p class="bg-night inline-block text-white px-1 uppercase">Article</p>
                                    <h3 class="text-xl font-bold">Informatics in Medicine <br> Unlocked (IMU)</h3>
                                    <p>Informatics in Medicine Unlocked (IMU) is an international gold open access journal
                                        covering a broad spectrum of topics within medical informatics, including</p>
                                    <a href="#" class="text-sm text-leaf mt-3">Mehedi Hassan et. al</a>
                                </div>
                            </div>

                            <a class="next m-5 text-leaf hover:text-white  bg-white hover:bg-leaf text-base px-2.5 h-10 flex justify-center items-center"
                                onclick="plusSlides(1)"><span class="iconify" data-icon="ooui:previous-rtl"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Journaal --}}
        <div class="container mx-auto py-7 px-4 lg:px-0">
            <h2
                class="uppercase text-center underline decoration-leaf decoration-2 underline-offset-8 font-bold text-2xl lg:text-4xl">
                Journals
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 my-10 lg:my-16 lg:gap-8">
                <div class="">
                    <p class="text-white bg-night px-0.5 inline-block uppercase mb-2.5 text-sm lg:text-base">Computer</p>
                    <p class="my-2 hover:underline hover:decoration-2 text-xl lg:text-3xl font-bold">Computer Simulation and
                        Health
                        Informatics</p>
                    <p class="my-2">ISSN: 1111-0000</p>
                    <p class="text-leaf my-2">Publishing Option</p>
                    <div class="flex my-2">
                        <button class="text-sm flex justify-between items-center mr-9">Guide for authors<span
                                class="iconify text-leaf inline-block ml-1"
                                data-icon="akar-icons:arrow-up-right"></span></button>
                        <button class="text-sm flex justify-between items-center mr-9">Track your paper<span
                                class="iconify text-leaf inline-block ml-1"
                                data-icon="akar-icons:chevron-down"></span></button>
                    </div>
                    <div class="">
                        <button
                            class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">Submit
                            Paper</button>
                        <button
                            class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf uppercase text-leaf hover:bg-leaf hover:text-white mr-2 lg:mr-4">View
                            Article</button>
                    </div>
                </div>
                <div class="mt-4 lg:mt-0">
                    <div class="flex items-center">
                        <img src="{{ asset('images/editor/editor.png') }}" class="rounded rounded-full mr-3" alt="Editor">
                        <h3>Si Thu Aung, PhD</h3>
                    </div>
                    <p class="text-base text-night">Informatics in Medicine Unlocked (IMU) is an international gold open
                        access journal covering a broad spectrum of topics within medical informatics, including (but not
                        limited to) papers focusing on imaging, pathology, teledermatology, public health, ophthalmological,
                        nursing and translational medicine informatics. The full papers that are published in the journal
                        are accessible to all who visit the website.</p>
                    <a href="#" class="text-base text-leaf">Read More</a>
                    <div class="grid grid-cols-2 lg:grid-cols-3">
                        <div class="my-5 ">
                            <p class="flex items-center"><span class="iconify text-leaf mr-2"
                                    data-icon="bxs:bar-chart-alt-2"></span>Top Readership</p>
                            <div class="flex text-3xl my-1">
                                <span class="iconify mr-2" data-icon="emojione:flag-for-united-states"></span>
                                <span class="iconify mr-2" data-icon="emojione:flag-for-india"></span>
                                <span class="iconify mr-2" data-icon="emojione:flag-for-brazil"></span>
                            </div>
                        </div>
                        <div class="my-5 ">
                            <p class="flex items-center"><span class="iconify text-leaf mr-2"
                                    data-icon="bx:time"></span>Time to first decision</p>
                            <div class="flex text-lg font-bold my-1">
                                <p>2.6 Weeks</p>
                            </div>
                        </div>
                        <div class="my-5 ">
                            <p class="flex items-center"><span class="iconify text-leaf mr-2"
                                    data-icon="bx:time"></span>Review time</p>
                            <div class="flex text-lg font-bold my-1">
                                <p>1.2 Weeks</p>
                            </div>
                        </div>
                        <div class="my-5 ">
                            <p class="flex items-center"><span class="iconify text-leaf mr-2"
                                    data-icon="bx:time"></span>Publication time</p>
                            <div class="flex text-lg font-bold my-1">
                                <p>1.5 Weeks</p>
                            </div>
                        </div>
                        <div class="my-5 ">
                            <p class="flex items-center"><span class="iconify text-leaf mr-2"
                                    data-icon="bxs:bar-chart-alt-2"></span>Articale Publishing Charge</p>
                            <div class="flex text-lg font-bold my-1">
                                <p>*FREE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Horizontal devider --}}
        <div class="container mx-auto">
            <hr>
        </div>

        {{-- latest research --}}
        <div class="container mx-auto py-7 px-4 lg:px-0">
            <h2
                class="uppercase text-center underline decoration-leaf decoration-2 underline-offset-8 font-bold text-2xl lg:text-4xl">
                latest
                research</h2>
            <div class="lg:grid grid-cols-1 lg:grid-cols-3 my-16">
                <div class="letReserch hover:bg-night py-12 px-8 border border-night my-4 lg:my-0">
                    <p class="mb-2 hover:underline hover:decoration-2 uppercase text-xl lg:text-2xl text-night">Informatics
                        in Medicine
                        Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics
                        within medical informatics</p>
                    <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                </div>
                <div class="letReserch hover:bg-night py-12 px-8 border border-night my-4 lg:my-0">
                    <p class="mb-2 hover:underline hover:decoration-2 uppercase text-xl lg:text-2xl text-night">Informatics
                        in Medicine
                        Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics
                        within medical informatics</p>
                    <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                </div>
                <div class="letReserch hover:bg-night py-12 px-8 border border-night my-4 lg:my-0">
                    <p class="mb-2 hover:underline hover:decoration-2 uppercase text-xl lg:text-2xl text-night">Informatics
                        in Medicine
                        Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics
                        within medical informatics</p>
                    <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                </div>
            </div>
        </div>

        {{-- Horizontal devider --}}
        <div class="container mx-auto">
            <hr>
        </div>

        {{-- Editorial Board --}}
        <div class="container mx-auto py-7 px-4 lg:px-0">
            <h2
                class="uppercase text-center underline decoration-leaf decoration-2 underline-offset-8 text-2xl font-bold lg:text-4xl">
                Editorial Board
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 my-16">
                <div class="">
                    <p class="text-white bg-night px-0.5 inline-block uppercase mb-2.5 text-sm lg:text-base">full editorial
                        board</p>
                    <p class="my-2 hover:underline hover:decoration-2 uppercase text-xl lg:text-3xl">72 Editors and
                        editorial board
                        members in 28 countries/regions</p>

                    <div class="flex items-center justify-between pr-20 my-7 flex-wrap">
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl"
                                data-icon="emojione:flag-for-united-states"></span>United State of America (18)</p>
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl"
                                data-icon="emojione:flag-for-india"></span>India (13)</p>
                        <p class="flex items-center"><span class="iconify mr-2  my-2 text-3xl"
                                data-icon="emojione:flag-for-brazil"></span>Brazil (3)</p>
                        <a href="#" class="text-leaf my-2 ">More (23)</a>
                    </div>
                    <a href="{{ route('editors.index') }}" class="flex items-center  text-leaf my-4 text-lg"><span
                            class="iconify" data-icon="akar-icons:chevron-right"></span>View Editorial Board</a>
                </div>
                <div class="">
                    <div class="flex items-center">
                        <img src="{{ asset('images/editor/editor.png') }}" class="rounded rounded-full mr-3"
                            alt="Editor">
                        <div class="">
                            <p>Editor</p>
                            <h3 class="font-semibold">Si Thu Aung, PhD</h3>
                        </div>
                    </div>
                    <div class="flex items-center my-5">
                        <span class="iconify text-leaf mr-4 text-2xl" data-icon="fa-solid:university"></span>
                        <p>Columbia University, New York, New York, United States of America</p>
                    </div>
                    <div class="flex items-center my-5">
                        <span class="iconify text-leaf mr-4 text-3xl" data-icon="akar-icons:paper"></span>
                        <p>Atrial fibrillation, Biomedical engineering, Celiac disease, Computational biology,
                            Image processing, Signal processing, Ventricular tachycardia</p>
                    </div>
                    <p class="text-base text-night">Informatics in Medicine Unlocked (IMU) is an international gold open
                        access journal covering a broad spectrum of topics within medical informatics, including (but not
                        limited to) papers focusing on imaging, pathology, teledermatology, public health, ophthalmological,
                        nursing and translational medicine informatics. The full papers that are published in the journal
                        are accessible to all who visit the website.</p>
                    <a href="#" class="text-base text-leaf">Read More</a>
                </div>
            </div>
        </div>

        {{-- Subscribe to Newsleter --}}
        <div class="bg-cream">
            <div class="container mx-auto py-12">
                <h2
                    class="uppercase text-center underline decoration-night decoration-2 underline-offset-8 text-2xl lg:text-4xl">
                    <strong>Subscribe</strong> for Latest Article <br> and
                    Get notified of the best Journals
                </h2>
                <div class="flex justify-center my-16">
                    <form action="" method="post" class="flex md:w-2/4 justify-center flex-col md:flex-row">
                        <input type="email"
                            class="grow py-4 px-10 border bg-transparent border-night text-night md:mr-4"
                            name="subscriber_email" id="subscriber_email" placeholder="Enter your email" required>
                        <input type="submit"
                            class="py-4 px-10 border border-leaf bg-leaf hover:bg-transparent uppercase text-white hover:text-leaf mt-4 md:mt-0"
                            value="Subscribe">
                    </form>
                </div>
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
