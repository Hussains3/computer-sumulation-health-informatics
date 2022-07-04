@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<div class="bg-night">
    <div class="container mx-auto grid grid-cols-4">
        <div class=""></div>
        <div class="col-span-2 py-16 px-4 lg:px-0">
            <h1 class="text-white uppercase text-2xl lg:mb-7">Registration {{Auth::id() ?? 'nai'}}</h1>
            <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                @method('post')
                <input type="text" class="form-input w-full my-2.5" name="user_name" id="user_name" placeholder="Username">
                <input type="email" class="form-input w-full my-2.5" name="email" id="email" placeholder="Email">
                <input type="password" class="form-input w-full my-2.5" name="password" id="password" placeholder="Password">
                <input type="password" class="form-input w-full my-2.5" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                <input type="checkbox" class="hidden border-none bg-leaf checked:bg-leaf mr-2" name="acceptTerms" id="acceptTerms">
                <label for="acceptTerms" class="text-white">By signing up, you agree to the <a href="" class="text-leaf" target="_blank">Terms of Service and Privacy Policy</a> </label>
                <div class="mt-6">
                    <input type="submit" id="registerSubmit" class="inline py-2 lg:py-4 px-5 lg:px-10 border border-leaf bg-leaf uppercase text-white mr-2 lg:mr-4" value="REGISTER">
                </div>
                <div class="flex justify-between items-center mt-6">
                    <p class="text-white ">Already have an account? <a href="{{route('login')}}" class="text-leaf">Sign In.</a></p>
                    <div class="flex">
                        <p class="text-white">Or, Register with ORCID</p>
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
<script>

    // $("#registerSubmit").click(function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         headers: {
    //                 'X-CSRF-TOKEN': "{{csrf_token()}}",
    //             },
    //         url : "{{route('register')}}",
    //         type : "POST",
    //         data: $('#form').serialize(),
    //         beforeSend: function() {
    //             $("#registerSubmit").text('Processing Data ...');
    //         },
    //         success : function(response){
    //             alert(response);
    //         }
    //     });
    // });


</script>
@endsection
