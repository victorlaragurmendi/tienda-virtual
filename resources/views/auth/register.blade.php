@extends('layouts.app')
@section('body-class','signup-page')


@section('content')

 <div class="page-header header-filter" style="background-image: url('{{asset('/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Registro</h4>
              </div>
              <p class="description text-center">Registra tus datos</p>
              <div class="card-body">
                

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                      </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                    <input placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                   @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror 
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input   placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

              </div>
              <div class="footer text-center">
                <!--<button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar Registro</a>-->
                <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>
  </div>


@endsection
