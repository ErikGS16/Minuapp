<!DOCTYPE html>
<html lang="ca">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Minuapp</title>

        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body>
        <div id="pageContainer">
                <div id="leftDiv" class="sonContainers"></div>
                <div id="rightDiv" class="sonContainers">
                        <div id="topRightContainer">
                                <h1 id="pageTitle">Minuapp</h1>
                                <hr id="titleSeparator">
                        </div>
                        <div id="bottomRightContainer">
                                <div id="textContainer">
                                        <p id="text">Benvingut/da a la Minuapp.<br>
                                                Aquesta és l’aplicació de l’esplai per a fer totes
                                                les nostres gestions i tindre un millor contacte.
                                        </p>
                                </div>
                                <div id="loginContainer">
                                        <div id="leftBorder"></div>
                                        <div id="loginBox">
                                                <div id="box">
                                                        <h2 id="iniciSessió">Inici de sessió</h2>
                                                        <hr id="titleSeparator2">
                                                        <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                                <div id="emailDiv">
                                                                        <label for="email" id="emailLabel" class="labelClass">Correu electrònic</label>
                                                                        <hr id="emailLine" class="loginHr">
                                                                        <div id="emailInput">
                                                                                <input id="emailInput" class="input" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                                @error('email')
                                                                                <br>
                                                                                <span class="" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                        </div>
                                                                </div>
                                                                <div class="" id="passwordDiv">
                                                                        <label id="passwordLabel" for="password" class="labelClass">{{ __('Contrasenya') }}</label>
                                                                        <hr class="loginHr" id="passwordHr">
                                                                        <div class="">
                                                                                <input id="passwordInput" class="input" type="password" class="" name="password" required autocomplete="current-password">
                                                                                @error('password')
                                                                                <br>
                                                                                <span class="" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                        </div>
                                                                </div>
                                                                <div id="checkbox">
                                                                        <div class="">
                                                                                <div class="">
                                                                                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                                        <label id="" for="remember">
                                                                                                {{ __("Recorda'm") }}
                                                                                        </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="loginButton">
                                                                        <div class="">
                                                                                <button type="submit" id="button">
                                                                                        {{ __('Entra') }}
                                                                                </button>
                                                                                <br>
                                                                                @if (Route::has('password.request'))
                                                                                <a id="contrasenyaReminder" href="{{ route('password.request') }}">
                                                                                        {{ __('Has oblidat la teva contrasenya?') }}
                                                                                </a>
                                                                                @endif
                                                                        </div>
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>
                                        <div id="rightBorder"></div>
                                </div>
                        </div>
                </div>
        </div>
</body>

</html>