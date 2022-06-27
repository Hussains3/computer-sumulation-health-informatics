@extends('layouts.app')
@section('title')
    Article
@endsection
@section('content')
    <main class="min-h-screen">

        {{-- Hero --}}
        <div class="w-full bg-night pb-14">
            <h1 class="invisible">My Article</h1>
            <div class="container mx-auto">
                <div class="pt-10 px-4 lg:px-0 lg:pt-20 mx-auto grid lg:grid-cols-2 grid-cols-1">
                    <div class="">
                        <p class="text-night bg-day px-0.5 inline-block uppercase mb-2.5 text-sm lg:text-base">Informatics in Medicine Unlocked</p>
                        <p class="text-white uppercase my-2">Volume 31, 2022, 100973</p>
                        <p class="text-white hover:underline hover:decoration-2 uppercase text-xl lg:text-3xl mb-3">
                            CRID - A unique, universal, patient-generated identifier to facilitate collaborative rare disease clinical research
                        </p>
                        <a href="#" class="text-sm text-leaf">Mehedi Hassan et. al</a>
                        <div class="grid grid-cols-3">
                            {{-- Item --}}
                            <div class="flex text-white mt-6">
                                <div class="mr-2.5 pt-1">
                                    <span class="iconify" data-icon="bx:time"></span>
                                </div>
                                <div class="">
                                    <p>Received</p>
                                    <p>13 May 2022</p>
                                </div>
                            </div>
                            {{-- Item --}}
                            <div class="flex text-white mt-6">
                                <div class="mr-2.5 pt-1">
                                    <span class="iconify" data-icon="bx:time"></span>
                                </div>
                                <div class="">
                                    <p>Revised</p>
                                    <p>20 May 2022</p>
                                </div>
                            </div>
                            {{-- Item --}}
                            <div class="flex text-white mt-6">
                                <div class="mr-2.5 pt-1">
                                    <span class="iconify" data-icon="bx:time"></span>
                                </div>
                                <div class="">
                                    <p> Accepted</p>
                                    <p>20 May 2022</p>
                                </div>
                            </div>
                            {{-- Item --}}
                            <div class="flex text-white mt-6">
                                <div class="mr-2.5 pt-1">
                                    <span class="iconify" data-icon="bx:time"></span>
                                </div>
                                <div class="">
                                    <p>Published</p>
                                    <p>1 June 2022</p>
                                </div>
                            </div>
                            {{-- Item --}}
                            <div class="flex text-white mt-6">
                                <div class="mr-2.5 pt-1">
                                    <span class="iconify" data-icon="bx:time"></span>
                                </div>
                                <div class="">
                                    <p>Version of Record</p>
                                    <p>3 June 2022</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class=" hidden lg:block"></div>
                </div>
                <ul class="flex w-36 justify-between my-7">
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="cib:facebook-f"></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="akar-icons:twitter-fill"></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="akar-icons:linkedin-fill"></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="akar-icons:youtube-fill"></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-night bg-white p-1.5 w-6 h-6 hover:bg-leaf"><span class="iconify" data-icon="simple-icons:mendeley"></span></li>
                    <li class="mr-2 flex justify-center items-center rounded-full text-white"></li>
                    <li class="mr-2"><button class="text-white hover:text-leaf flex justify-center items-center"><span class="iconify" data-icon="bi:quote"></span>Cite</button></li>
                </ul>
                <hr class="border border-white mt-9">
                <p class="my-2"><span class="uppercase bg-white mr-3 p-1">doi:</span><a class="text-white hover:text-leaf" href="https://doi.org/10.1016/S1473-3099(22)00234-1">https://doi.org/10.1016/S1473-3099(22)00234-1</a></p>
                <p class="text-white my-2">Under a Creative Commons <a href="#" class="text-leaf">license</a></p>
            </div>
        </div>

        <div class="container mx-auto grid grid-cols-4 gap-7">
            <div class="min-h-screen bg-leaf">
                <h2>Outline</h2>
                <ul>
                    <li>
                        <p>Keywords</p>
                        <ol>
                            <li>Introduction</li>
                            <li>Methods</li>
                            <li>Results</li>
                        </ol>
                    </li>
                    <li>Author contributions</li>
                    <li>Funding</li>
                    <li>Declaration of competing interest</li>
                    <li>Acknowledgements</li>
                    <li>References</li>
                </ul>
            </div>
            <div class="min-h-screen bg-white col-span-2 "></div>
            <div class="min-h-screen bg-leaf"></div>

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
