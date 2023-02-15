<x-layout>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <div class="page-content">
        <div class="card card-page shadow">
            <div class="card-header mb-3">
                <h3 class=" font-weight-bold text-color text-center">Login</h3>
            </div>
            <div class="card-body2">
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-color">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-color">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn button2 btn-block btn-lg">
                                    {{ __('Login') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </div>
</div>

</x-layout>
