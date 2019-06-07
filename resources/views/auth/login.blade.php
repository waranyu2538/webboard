@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	  
        <div class="col-md-4"><br><br>
            <div class="card">
            
            <div class="container" align="center" ><img src="https://uppic.cc/d/KUCm" style="margin:30px" class="rounded-circle col-md-6 >
            	
            </style>" width="180" height="130"> </div>
                <div  align="center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" ></label>

                            <div class="col-md-12" align="center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label for="password" ></label>

                            <div class="col-md-12" align="center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-block btn-sm btn-primary" >
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>

                        <div class="or">
							<span>OR</span>
						</div>

						<div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit"  class="btn btn-block btn-sm btn-facebook btn-primary" >
                                    {{ url('/auth/redirect/facebook') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
