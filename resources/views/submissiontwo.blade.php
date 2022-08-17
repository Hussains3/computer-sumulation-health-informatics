@extends('layouts.app')
@section('title')
    Submission
@endsection
@section('content')
    <main class="min-h-screen ">
        <div class="container mx-auto grid grid-cols-5 py-7 gap-3">
            <div class="text-sm">
                <p class="font-bold">Required For Submission</p>
                <ul class="list-disc pl-3">
                    <li id="cover_letter_indicator" class="text-red">Cover Letter</li>
                    <li id="ms_file_indicator" class="text-red">Menuscript File</li>
                    <li id="acknowledgement_indicator" class="text-red">Acknowledgement</li>
                    <li id="conflict_of_interest_indicator" class="text-red">Conflict of Interest</li>
                </ul>
                <p class="mt-4">
                    Editable source files must be uploaded, and these will typically have the extension .docx, .doc, or .tex. A PDF is NOT an acceptable source file. For LaTex related submission, please refer <a href="" class="text-leaf">LaTex Guide</a>.
                </p>
                <p class="mt-4 p-2.5 border text-justify">
                    <strong class="text-bold">Declaration of Interests:</strong><br>
                    All Authors must disclose any financial or personal relationships that may be perceived as influencing their work. Complete CSHI's Declaration of Interests form. See below (after uploading your main file) for instructions.
                </p>
                <p class="mt-4 p-2.5 border text-justify">
                    <strong class="text-bold">Declaration of Interests:</strong><br>
                    All Authors must disclose any financial or personal relationships that may be perceived as influencing their work. Complete CSHI's Declaration of Interests form. Additional instructions may appear below (after uploading your main file) for instructions.
                </p>
            </div>
            <div class=" col-span-4">
                <ul class="flex justify-between">
                    <li class=""></li>
                    <li class="text-sm grow inline relative after:content-['1'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right mt-5">Article Type Selection</p></li>
                    <li class="text-sm grow inline relative after:content-['2'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right text-night mt-5">Attatch Files</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['3'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Review Preferences</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['4'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Aditional Inforamation</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['5'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Comments</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['6'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Menuscript Data</p></li>
                </ul>
                <div class="py-4">
                    <h1 class="font-bold mb-4">Attacth Required Files</h1>
                    <form action="{{route('submissionTwo')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="this_submission" value="{{$submission->submission_id}}">
                        {{-- Cover letter --}}
                        <div class="border border-gray px-4 py-4 mb-4 flex flex-col">
                            <label for="cover_letter">Cover Letter <span class="text-red">*</span></label>
                            <input type="file" name="cover_letter" id="cover_letter" class="mt-2 text-sm file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:text-white file:bg-night hover:file:bg-leaf" required>
                        </div>
                        {{-- Menuscript File --}}
                        <div class="border border-gray px-4 py-4 mb-4 flex flex-col">
                            <label for="ms_file">Menuscript File <span class="text-red">*</span></label>
                            <input type="file" name="ms_file" id="ms_file" class="mt-2 text-sm file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:text-white file:bg-night hover:file:bg-leaf" required>
                        </div>
                        {{-- Acknowledgement --}}
                        <div class="border border-gray px-4 py-4 mb-4 flex flex-col">
                            <label for="acknowledgement">Acknowledgement <span class="text-red">*</span></label>
                            <input type="file" name="acknowledgement" id="acknowledgement" class="mt-2 text-sm file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:text-white file:bg-night hover:file:bg-leaf" required>
                        </div>
                        {{-- Conflict of Interest --}}
                        <div class="border border-gray px-4 py-4 mb-4 flex flex-col">
                            <label for="conflict_of_interest">Conflict of Interest <span class="text-red">*</span></label>
                            <input type="file" name="conflict_of_interest" id="conflict_of_interest" class="mt-2 text-sm file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:text-white file:bg-night hover:file:bg-leaf" required>
                        </div>

                        <button class="py-1 lg:py-2 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">Back</button>
                        <input type="submit" value="Next" class="py-1 lg:py-2 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            // Inputs
            var coverLetter = $("#cover_letter");
            var msfile = $("#ms_file");
            var akmt = $("#acknowledgement");
            var coi = $("#conflict_of_interest");
            // Indicators
            var cvlindicator = $("#cover_letter_indicator");
            var msfindicator = $("#ms_file_indicator");
            var akmindicator = $("#acknowledgement_indicator");
            var coindicator = $("#conflict_of_interest_indicator");
            //
            if (coverLetter.get(0).files.length != 0) {
                cvlindicator.toggleClass("text-red").toggleClass("text-green");
            }
            coverLetter.change(function () {
                if (coverLetter.get(0).files.length != 0) {
                    cvlindicator.toggleClass("text-red").toggleClass("text-green");
                }
            });
            //
            if (msfile.get(0).files.length != 0) {
                msfindicator.toggleClass("text-red").toggleClass("text-green");
            }
            msfile.change(function () {
                if (msfile.get(0).files.length != 0) {
                    msfindicator.toggleClass("text-red").toggleClass("text-green");
                }
            });
            //
            if (akmt.get(0).files.length != 0) {
                akmindicator.toggleClass("text-red").toggleClass("text-green");
            }
            akmt.change(function () {
                if (akmt.get(0).files.length != 0) {
                    akmindicator.toggleClass("text-red").toggleClass("text-green");
                }
            });
            //
            if (coi.get(0).files.length != 0) {
                coindicator.toggleClass("text-red").toggleClass("text-green");
            }
            coi.change(function () {
                if (coi.get(0).files.length != 0) {
                    coindicator.toggleClass("text-red").toggleClass("text-green");
                }
            });


        });

    </script>
@endsection
