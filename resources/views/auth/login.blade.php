@extends('layouts.app')

@section('content')
    @include('loading.loader')

    {{-- start login --}}
    <section class="login-page p-70">
        <div class="overlay-login"></div>
        <div class="container m-auto ">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 justify-content-center">
                    <div class="login-boxtop">
                        <img src="{{ asset('assets/img/9700_4_04.jpg') }}" alt="">
                    </div>
                    <div class="login-boxtext text-center my-4 text-light">
                        <h3>
                            <strong>
                                <span id="element"></span>
                            </strong>
                        </h3>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        <div class="row mt-2 justify-content-center mb-3">
                            @csrf
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="input-icons">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Email">

                                        <i class="bi bi-person icon-login"></i>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-8 mt-3">
                                <div class="form-group">
                                    <div class="input-icons">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password">

                                        <i class="bi bi-incognito icon-login"></i>

                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-8 mt-3">
                                <button class="login">Login</button>
                            </div>

                            <div class="col-md-8 text-center mt-2">

                                {{-- @if (Route::has('password.request'))
                                    <br>
                                    <a class="" href="{{ route('password.request') }}"
                                        style="list-style: none; padding: 0 10px ; margin: 0px 0;text-decoration: none;">
                                        Forget your Password ?
                                    </a>
                                @endif --}}

                                <span class="or-text"><Strong> OR </Strong></span>
                            </div>



                            {{--

                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-login btn-login2">
                                    {{ __('Login') }}
                                </button>

                                <div class="new-email mt-2">
                                    <a href="{{ route('register') }}" class="btn btn-login btn-login2 w-100">
                                        Create Email
                                    </a>
                                </div>



                                @if (Route::has('password.request'))
                                    <br>
                                    <a class="" href="{{ route('password.request') }}"
                                        style="list-style: none; padding: 0 10px ; margin: 0px 0;text-decoration: none;">
                                        Forget your Password ?
                                    </a>
                                    <p class="text-center m-0">OR</p>
                                @endif
                            </div> --}}

                            <div class="col-md-8 text-center mt-3">
                                {{-- <a href="{{ route('home-register') }}" class="signup">Sign Up</a> --}}
                                <a href="#" class="signup">Sign Up</a>
                                <a href="{{ route('home') }}" class="signup home">Home</a>
                            </div>

                        </div>
                    </form>






                    {{-- <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-login btn-login2">
                                            {{ __('Login') }}
                                        </button>

                                        <div class="new-email mt-2">
                                            <a href="{{ route('register') }}" class="btn btn-login btn-login2 w-100">
                                                Create Email
                                            </a>
                                        </div>



                                        @if (Route::has('password.request'))
                                            <br>
                                            <a class="" href="{{ route('password.request') }}"
                                                style="list-style: none; padding: 0 10px ; margin: 0px 0;text-decoration: none;">
                                                Forget your Password ?
                                            </a>
                                            <p class="text-center m-0">OR</p>
                                        @endif
                                    </div>

                                    <div class="col-md-12">

                                        <a href="/" style="list-style: none; padding: 0 10px ; text-decoration: none;">
                                            Go back to Home Page ?
                                        </a>


                                    </div>

                                </div>
                            </form>


                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </section>
    {{-- end login --}}

    <script>
        window.addEventListener('load', function() {
            var typed = new Typed("#element", {
                strings: [
                    "Welcome Back ",
                    "Happy to See you a again , Enjoy ",
                    "Have a Look to our Services",
                    "L e v e r a g e ...",
                ],
                typeSpeed: 60,
                loop: true,
                startDelay: 1000,
                backSpeed: 50,
                backDelay: 500,
            });
        });
    </script>
@endsection
