<div class="row">
<form class="col s12" method="POST" action="{{ route('login') }}">
                        @csrf
<label for="email">{{ __('E-Mail Address') }}</label>

    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

<label for="password">{{ __('Password') }}</label>


    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="" for="remember">
            {{ __('Remember Me') }}
        </label>

    <button type="submit" class="">
        {{ __('Login') }}
    </button>
    @if (Route::has('password.request'))
        <a class="" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
</form>
</div>
