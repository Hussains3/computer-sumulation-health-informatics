@extends('layouts.app')
@section('title')
    Submission
@endsection
@section('content')
    <main class="min-h-screen ">
        <div class="container mx-auto grid grid-cols-5 py-7">
            <div class="text-sm">
                <p>Choose the Article Type your submission form dropdown menu.</p>
                <a href="" class="text-leaf hover:text-leaf">How do I submit a menuscript?</a>
            </div>
            <div class=" col-span-4">
                <ul class="flex justify-between">
                    <li class=""></li>
                    <li class="text-sm grow inline relative after:content-['1'] after:absolute after:right-0 after:bg-leaf after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-leaf before:absolute before:top-2"><p class="text-right mt-5">Article Type Selection</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['2'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Attatch Files</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['3'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Review Preferences</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['4'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Aditional Inforamation</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['5'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Comments</p></li>
                    <li class="text-sm text-white grow inline relative after:content-['6'] after:absolute after:right-0 after:bg-night after:w-5 after:text-center after:rounded-full after:top-0 before:content-[''] before:w-full before:h-1 before:bg-night before:absolute before:top-2"><p class="text-right text-night mt-5">Menuscript Data</p></li>
                </ul>
                <div class="py-4">
                    <h1 class="font-bold mb-4">Select Article Types</h1>
                    <form action="" method="post">
                        <select name="articleType" id="articleType">
                            <option value="">Select One</option>
                            @foreach ($articleTypes as $type)
                            <option value="{{$type->id}}" class="">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Next" class="py-1 lg:py-2 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4">
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script>

    </script>
@endsection
