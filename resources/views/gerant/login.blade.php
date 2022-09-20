@extends('layout.master')

@section('content')
{{-- @if ($message= Session::get('sucess'))
  <div class="alert alert-info">
  {{$message}}
  </div>
@endif --}}
<section class="vh-100" style="background-color: #fefdfd">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-8">
                <div class="card" style="border: 3px #000090 ridge; box-shadow: 10px 10px 0px #000090;">
                    <div class="row justify-content-center">
                            <div class="col-md-8 card-body text-black">
                                <form method="POST" action="{{ route('gerant.validate_login') }}">
                                    @csrf

                                    <div class="mb-3" style="margin-left: 150px;">
                                      <img src="{{ asset('assets/img/logo__stage.jpg') }}" alt="">
<br><br>
                                </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Entrer votre Email</label>

                                      <input type="email" id="email" name="email" class="form-control form-control-sm" required autofocus autocomplete="email" />
                                      @if($errors->has('email'))
							        <span class="text-danger">{{ $errors->first('email') }}</span>
						            @endif

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Mot de passe</label>

                                      <input type="password" name="password" id="password" class="form-control form-control-sm" required autofocus autocomplete="password"/>
                                      @if($errors->has('password'))
							            <span class="text-danger">{{ $errors->first('password') }}</span>
						            @endif
                                    </div>

                                    <div class="pt-1 mb-4 justify-content-center float-right" style="border: 2px solid #000090">
                                      <button class="btn rounded btn-block btn-sm" type="submit" style="color: #393f81">Login</button>
                                    </div>

                                    <a class="small text-muted" href="{{url('/forgot-password')}}">Forgot password?</a>
                                    {{-- <p class="small mb-5 pb-lg-2" style="color: #3a3a3b;">Pas encore inscrit ? <a href="{{ url('/register') }}"
                                        style="color: #000090;">S'inscrire</a></p> --}}
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
