<html>

<head>
    <title>Login | Register</title>

    @include ('app.meta')

    <style>
        button {
            border-radius: 20px;
            border: 1px solid #798bff;
            background-color: #798bff;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 1400px;
            max-width: 100%;
            min-height: 800px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            /* background: #798bff;
            background: -webkit-linear-gradient(to right, #798bff, #9da4d1);
            background: linear-gradient(to right, #798bff, #9da4d1); */
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../img/login/banner.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
    </style>
</head>

<body>
    <div class="container py-5 my-5" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('register') }}" method="POST" class="form" style="align-items: baseline!important;">
                @csrf
                <h1>Hasap döret</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="" type="text" id="inputName" placeholder="Ady" name="name" required autofocus autocomplete="off">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <input type="text" id="inputName" placeholder="Familya" name="surename" required autofocus autocomplete="off" class="ml-5">
                        @error('surename')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <input type="email" id="inputEmail" placeholder="E-mail adresi" name="email" required autocomplete="off">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3 align-items-end">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-0" style="height: 48px;" id="basic-addon1">+993</span>
                    </div>
                    <input type="number" style="position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;width: 1%;min-width: 0;margin-bottom: 0;" name="phone_number" placeholder="Telefon belgisi" aria-label="Username" aria-describedby="basic-addon1" required autofocus autocomplete="off">
                    @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input type="password" id="inputPassword" placeholder="Açar sözi" name="password" required autocomplete="off">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="password" id="inputPasswordConfirmation" placeholder="Açar sözüni gaýtala" name="password_confirmation" required autocomplete="off">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="mt-3">Hasap döret</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Içeri gir</h1>
                <input type="email" id="inputEmail" placeholder="E-mail adresi" name="email" autocomplete="off" required>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="inputPassword" placeholder="Açar sözi" name="password" autocomplete="off" required>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="mt-3">Içeri gir</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <button class="ghost" id="signIn">Içeri gir</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <button class="ghost" id="signUp">Hasap döret</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
    @include ('app.script')
</body>

</html>