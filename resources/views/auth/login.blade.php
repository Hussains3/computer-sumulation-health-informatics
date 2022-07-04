@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')
<div class="bg-night">
    <div class="container mx-auto grid grid-cols-4">
        <div class=""></div>
        <div class="col-span-2 py-16 px-4 lg:px-0">
            <h1 class="text-white uppercase text-2xl lg:mb-7">Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" class="form-input w-full my-2.5" name="email" id="email" placeholder="Email">
                <input type="password" class="form-input w-full my-2.5" name="password" id="password" placeholder="Password">
                <div class="flex justify-between items-center">
                    <div class="">
                        <input type="checkbox" class="border-none bg-leaf checked:bg-leaf mr-2" name="remember" id="remember">
                        <label for="remember" class="text-white">Remember me.</label>
                    </div>
                    <a href="" class="ml-auto text-white hover:text-leaf hover:underline block">Forget Password?</a>
                </div>
                <div class="mt-6">
                    <input type="submit" class="inline py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4" value="SIGN IN">
                </div>
                <div class="flex justify-between items-center mt-6">
                    <p class="text-white ">Don’t have an account? <a href="{{route('register')}}" class="text-leaf">Register Now.</a></p>
                    <div class="flex">
                        <p class="text-white">Or, Sign in with ORCID</p>
                        <a href="" class="mx-2"><img src="{{asset('images/icons/orchid.svg')}}" alt="ID"></a>
                        <a href="" class="text-leaf underline">What is ORCID?</a>
                    </div>
                </div>
            </form>
        </div>
        <div class=""></div>
    </div>
</div>
@endsection
@section('script')

@endsection
