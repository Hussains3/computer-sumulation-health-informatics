@extends('layouts.app')
@section('title')
    Article
@endsection
@section('content')
    <main class="min-h-screen">

        {{-- Hero --}}
        <div class="w-full bg-night pb-4 lg:pb-14">
            <h1 class="invisible">My Article</h1>
            <div class="container mx-auto">
                <div class=" lg:pt-10 px-4 lg:px-0 lg:pt-20 mx-auto grid lg:grid-cols-2 grid-cols-1">
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
                <ul class="flex w-36 justify-between my-7 px-4 lg:px-0">
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
                <div class="flex justify-between items-start lg:items-center px-4 lg:px-0 flex-col lg:flex-row mt-1 ">
                    <p class="my-2 text-xs lg:text-base"><span class="uppercase bg-white mr-3 p-1">doi:</span><a class="text-white hover:text-leaf" href="https://doi.org/10.1016/S1473-3099(22)00234-1">https://doi.org/10.1016/S1473-3099(22)00234-1</a></p>
                    <p class="text-white text-xs lg:text-base text-right">Get rights and content</p>
                </div>
                <div class="flex justify-between items-center px-4 lg:px-0">
                    <p class="text-white my-2 text-xs lg:text-base">Under a Creative Commons <a href="#" class="text-leaf">license</a></p>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-green rounded rounded-full mr-1">&nbsp;</div>
                        <p class="text-white italic font-medium text-xs">Open Access</p>
                    </div>
                </div>

                <div class="flex justify-start text-white gap-2 mt-4 px-4 lg:px-0 lg:hidden">
                    <button class="flex flex-col items-center">
                        <span class="iconify text-xl" data-icon="ant-design:file-pdf-filled"></span>
                        <p class="text-xs">View PDF</p>
                    </button>
                    <button class="flex flex-col items-center">
                        <span class="iconify text-xl" data-icon="ion:download"></span>
                        <p class="text-xs">Download</p>
                    </button>
                    <button class="flex flex-col items-center">
                        <span class="iconify text-xl" data-icon="icon-park-solid:doc-success"></span>
                        <p class="text-xs">Subscribe</p>
                    </button>
                    <button class=" ml-auto flex items-center lg:hidden" id="mobileOutlineToggle">
                        Outline<span class="iconify text-xl ml-1" data-icon="charm:menu-hamburger"></span>
                    </button>
                </div>
                <div class="relative lg:hidden hidden" id="mobilOutlineMenu">
                    <ul class=" font-light text-sm absolute bg-night right-0 text-white p-4">
                        <li class="my-2">
                            <p class="mb-4 opacity-40 underline">Abstract</p>
                            <p class="mb-4">Keywords</p>
                            <ol class="ml-2">
                                <li class="mb-4">1. Introduction</li>
                                <li class="mb-4">2. Methods</li>
                                <li class="mb-4">3. Results</li>
                                <li class="mb-4">4. Discussion</li>
                                <li class="mb-4">5. Conclusion</li>
                                <li class="mb-4">6. Summary table</li>
                            </ol>
                        </li>
                        <li class="mb-2">Author contributions</li>
                        <li class="my-2">Funding</li>
                        <li class="my-2">Declaration of competing interest</li>
                        <li class="my-2">Acknowledgements</li>
                        <li class="my-2">References</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Article Body --}}
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-4 gap-7">
            <div class="min-h-screen py-14 hidden lg:block">
                <h2 class="mb-8">Outline</h2>
                <ul class=" font-light text-sm">
                    <li class="my-2">
                        <p class="mb-4 opacity-40 underline">Abstract</p>
                        <p class="mb-4">Keywords</p>
                        <ol class="ml-2">
                            <li class="mb-4">1. Introduction</li>
                            <li class="mb-4">2. Methods</li>
                            <li class="mb-4">3. Results</li>
                            <li class="mb-4">4. Discussion</li>
                            <li class="mb-4">5. Conclusion</li>
                            <li class="mb-4">6. Summary table</li>
                        </ol>
                    </li>
                    <li class="mb-2">Author contributions</li>
                    <li class="my-2">Funding</li>
                    <li class="my-2">Declaration of competing interest</li>
                    <li class="my-2">Acknowledgements</li>
                    <li class="my-2">References</li>
                </ul>
                <button class="text-leaf flex items-center">See full outline<span class="iconify ml-1" data-icon="akar-icons:chevron-down"></span></button>

                <div class="mt-20">
                    <p class="mb-7">Figure (10)</p>
                    <div class="grid grid-cols-3 gap-1">
                        <img src="{{asset('images/figure/figure1.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                        <img src="{{asset('images/figure/figure2.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                        <img src="{{asset('images/figure/figure3.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                        <img src="{{asset('images/figure/figure4.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                        <img src="{{asset('images/figure/figure5.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                        <img src="{{asset('images/figure/figure6.png')}}" class="hover:scale-105 transition-all" alt="" srcset="">
                    </div>
                </div>
                <button class="text-leaf flex items-center mt-7">See all figure<span class="iconify ml-1" data-icon="akar-icons:chevron-down"></span></button>
            </div>
            <div class="min-h-screen bg-white col-span-2 p-4 lg:py-14 ">
                <h2 class="mb-8 text-lg">Abstract</h2>
                <p class="text-base">Background</p>
                <p class="text-base mt-4 text-justify">
                    Knowledge about rare diseases is often lacking due to the low prevalence of each disease. A challenge to increasing knowledge about rare diseases is the plethora of data silos being generated, which create barriers to information sharing, collaboration and coordination between researchers. The inability to share and reuse research data contributes to inefficient data collection, increased patient burden and possibly decelerates the path to better treatments. A unique, universal identifier would have the ability to link the same patient across research datasets and eliminate data silos.
                    Methods
                </p>
                <p class="text-base mt-4 text-justify">
                    We present CRID (clinical research ID), a unique, universal, patient-generated identifier that can be used to facilitate collaborative rare disease clinical research. The identifier consists of 8 random alphanumeric characters, and can uniquely identify a patient. The CRID website [https://TheCRID.org] is available in multiple languages to support patients globally, and is installed on a secure, cloud-based server platform. All patient data are encrypted in-transit, at rest and within the application. We field-tested the CRID identifier across 6 rare disease research studies to demonstrate its ability to connect a patient across multiple research studies.
                    Results
                </p>
                <p class="text-base mt-4 text-justify">
                    The CRID website allows a patient to create their unique identifier quickly and share it with researchers easily. Field tested across multiple disease research studies, this identifier has helped to reduce the burden on the patient by reusing their documents and transposing form data from the patient's original study into subsequent studies.
                    Conclusion
                </p>
                <p class="text-base mt-4 text-justify">
                    A unique, universal, patient-generated identifier can be used to facilitate collaborative rare disease clinical research. With patients’ data connected using the CRID identifier and shared across study protocols, better insights can be gained into how a disease develops that is not possible with inaccessible data silos.
                </p>
                <div class="flex justify-between items-center mt-9">
                    <button class="flex items-center npBtn">
                        <div class="w-8 h-8 bg-night flex justify-center items-center">
                            <span class="iconify text-white" data-icon="ooui:previous-ltr"></span>
                        </div>
                        <p class="ml-3"><strong>Previous</strong></p>
                    </button>
                    <button class="flex items-center npBtn">
                        <p class="mr-3"><strong>Next</strong></p>
                        <div class="w-8 h-8 bg-night flex justify-center items-center">
                            <span class="iconify text-white" data-icon="ooui:previous-rtl"></span>
                        </div>
                    </button>
                </div>
                <div class="text-center mt-10">
                    <button class="py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">READ MORE</button>
                </div>
            </div>
            <div class="min-h-screen py-14 hidden lg:block ">
                <div class="grid grid-cols-4 text-night gap-2">
                    <button class="flex flex-col items-center hover:text-leaf">
                        <span class="iconify text-3xl" data-icon="ant-design:file-pdf-filled"></span>
                        <p class="text-xs">View PDF</p>
                    </button>
                    <button class="flex flex-col items-center hover:text-leaf">
                        <span class="iconify text-3xl" data-icon="ion:download"></span>
                        <p class="text-xs">Download</p>
                    </button>
                    <button class="flex flex-col items-center hover:text-leaf">
                        <span class="iconify text-3xl" data-icon="icon-park-solid:doc-success"></span>
                        <p class="text-xs">Subscribe</p>
                    </button>
                </div>
                <div class="lg:grid grid-cols-1 lg:grid-cols-1 mt-9">
                    <div class="letReserch hover:bg-night py-12 px-8 my-4 lg:my-0">
                        <p class="ar-category uppercase text-xs text-white bg-night inline-block px-1" >Article</p>
                        <p class="ar-title mb-2 hover:underline hover:decoration-2 text-xl lg:text-2xl text-night">
                            Informatics in Medicine
                            Unlocked (IMU)
                        </p>
                        <p class="ar-desc text-lg text-night">
                            Informatics in Medicine Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics within medical informatics, including
                        </p>
                        <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                    </div>
                    <div class="letReserch hover:bg-night py-12 px-8 my-4 lg:my-0">
                        <p class="ar-category uppercase text-xs text-white bg-night inline-block px-1" >Article</p>
                        <p class="ar-title mb-2 hover:underline hover:decoration-2 text-xl lg:text-2xl text-night">
                            Informatics in Medicine
                            Unlocked (IMU)
                        </p>
                        <p class="ar-desc text-lg text-night">
                            Informatics in Medicine Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics within medical informatics, including
                        </p>
                        <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                    </div>
                    <div class="letReserch hover:bg-night py-12 px-8 my-4 lg:my-0">
                        <p class="ar-category uppercase text-xs text-white bg-night inline-block px-1" >Article</p>
                        <p class="ar-title mb-2 hover:underline hover:decoration-2 text-xl lg:text-2xl text-night">
                            Informatics in Medicine
                            Unlocked (IMU)
                        </p>
                        <p class="ar-desc text-lg text-night">
                            Informatics in Medicine Unlocked (IMU) is an international gold open access journal covering a broad spectrum of topics within medical informatics, including
                        </p>
                        <p class="text-sm text-leaf my-2">Mehedi Hassan et. al</p>
                    </div>
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
                    $(this).children('p.ar-category').toggleClass('bg-white');
                    $(this).children('p.ar-category, p.ar-title, p.ar-desc').toggleClass('text-white');
                },
                function() {
                    $(this).children('p.ar-category').toggleClass('bg-white');
                    $(this).children('p.ar-category, p.ar-title, p.ar-desc').toggleClass('text-white');
                }
            );
        });

        
        $("#mobileOutlineToggle").click(function (e) {
            e.preventDefault();
            $("#mobilOutlineMenu").toggle();
        });

        $(".npBtn").hover(
            function() {
                $(this).children('div').toggleClass('bg-leaf');
                $(this).children('p').toggleClass('text-leaf');
            },
            function() {
                $(this).children('div').toggleClass('bg-leaf');
                $(this).children('p').toggleClass('text-leaf');
            }
        );
    </script>
@endsection
