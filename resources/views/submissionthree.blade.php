@extends('layouts.app')
@section('title')
    Submission
@endsection
@section('content')
    <main class="min-h-screen ">
        <div class="container mx-auto grid grid-cols-5 py-7 gap-3">
            <div class="text-sm">
                <p class="font-bold">Please provide requested informations.</p>
                <p class="mt-4 text-justify">
                    Please suggest potential reviewers for this submission and provide specific reasons for your suggestion in the comments box for each person. Please note that the editorial office may not use your suggestions, but your help is appreciated and may speed up the selection of appropriate reviewers.
                </p>
            </div>
            <div class=" col-span-4">
                <ul class="flex justify-between">
                    <li class="text-sm text-white grow inline relative after:content-['1'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right text-night mt-5">Select Type</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['2'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right text-night mt-5">Attatch Files</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['3'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right text-night mt-5">Review Preferences</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['4'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Aditional Inforamation</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['5'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Comments</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['6'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Menuscript Data</p></li>
                </ul>
                <div class="py-4">
                    <h1 class="font-bold mb-4">Suggest Reviwers</h1>
                    <div class="grid grid-cols-5 gap-3">
                        <div class="col-span-3 border border-gray">
                            <h3 class="text-white bg-leaf p-2">Add New Reviwer</h3>
                            <form action="{{route('reviwers.store')}}" method="post" class="p-4">
                                @csrf
                                <div class="flex w-full flex-col mb-2">
                                    <label for="first_name" class="mb-2">First Name <span class="text-red">*</span></label>
                                    <input type="text" name="first_name" id="first_name" required class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="middle_name" class="mb-2">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name" class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="last_name" class="mb-2">Last Name <span class="text-red">*</span></label>
                                    <input type="text" name="last_name" id="last_name" required class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="degree" class="mb-2">Degree</label>
                                    <input type="text" name="degree" id="degree" class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="position" class="mb-2">Position</label>
                                    <input type="text" name="position" id="position" class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="institution" class="mb-2">Institution</label>
                                    <input type="text" name="institution" id="institution" class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="department" class="mb-2">Department</label>
                                    <input type="text" name="department" id="department" class="w-full border-gray">
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="email" class="mb-2">Email <span class="text-red">*</span></label>
                                    <input type="email" name="email" id="email" class="w-full border-gray" required>
                                </div>
                                <div class="flex w-full flex-col mb-2">
                                    <label for="reason" class="mb-2">Reason</label>
                                    <textarea name="reason" id="reason" cols="30" rows="3" class="w-full border-gray"></textarea>
                                </div>
                                <input type="submit" value="Add" class="py-1 mt-4 lg:py-2 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">
                            </form>
                        </div>
                        <div class="col-span-2 border border-gray">
                            <h2 class="text-white bg-leaf p-2">Current Suggested Reviwer</h2>
                            <div class="">
                                <ul class="list-decimal ml-8 py-4">
                                    @foreach ($reviwers as $reviwer)

                                    <li class="">
                                        <h3 class="font-bold">{{$reviwer->first_name.' '.$reviwer->middle_name ?? ''.$reviwer->last_name}}</h3>
                                        <p>Email: <a href="" class="text-leaf">email@mail.com</a></p>
                                        <button class="bg-night hover:bg-leaf hover:text-white py-1  px-4 text-white"><span class="iconify" data-icon="dashicons:trash"></span></button>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script>

    </script>
@endsection
