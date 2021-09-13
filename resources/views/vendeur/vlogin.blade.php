<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>demand un compte vendeur</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed'>

    <style>
      *, *:before, *:after {
                box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            body {
                background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);
                font-size: 12px;
            }

            body, button, input {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                letter-spacing: 1.4px;
            }

            .background {
                display: flex;
                min-height: 100vh;
            }

            .container {
                flex: 0 1 700px;
                margin: auto;
                padding: 10px;
            }

            .screen {
                position: relative;
                background: #3e3e3e;
                border-radius: 15px;
            }

            .screen:after {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 20px;
                right: 20px;
                bottom: 0;
                border-radius: 15px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
                z-index: -1;
            }

            .screen-header {
                display: flex;
                align-items: center;
                padding: 10px 20px;
                background: #4d4d4f;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }

            .screen-header-left {
                margin-right: auto;
            }

            .screen-header-button {
                display: inline-block;
                width: 8px;
                height: 8px;
                margin-right: 3px;
                border-radius: 8px;
                background: white;
            }

            .screen-header-button.close {
                background: #ed1c6f;
            }

            .screen-header-button.maximize {
                background: #e8e925;
            }

            .screen-header-button.minimize {
                background: #74c54f;
            }

            .screen-header-right {
                display: flex;
            }

            .screen-header-ellipsis {
                width: 3px;
                height: 3px;
                margin-left: 2px;
                border-radius: 8px;
                background: #999;
            }

            .screen-body {
                display: flex;
            }

            .screen-body-item {
                flex: 1;
                padding: 50px;
            }

            .screen-body-item.left {
                display: flex;
                flex-direction: column;
            }

            .app-title {
                display: flex;
                flex-direction: column;
                position: relative;
                color: #ea1d6f;
                font-size: 26px;
            }

            .app-title:after {
                content: '';
                display: block;
                position: absolute;
                left: 0;
                bottom: -10px;
                width: 25px;
                height: 4px;
                background: #ea1d6f;
            }

            .app-contact {
                margin-top: auto;
                font-size: 8px;
                color: #888;
            }

            .app-form-group {
                margin-bottom: 15px;
            }

            .app-form-group.message {
                margin-top: 40px;
            }

            .app-form-group.buttons {
                margin-bottom: 0;
                text-align: right;
            }

            .app-form-control {
                width: 100%;
                padding: 10px 0;
                background: none;
                border: none;
                border-bottom: 1px solid #666;
                color: #ddd;
                font-size: 14px;

                outline: none;
                transition: border-color .2s;
            }

            .app-form-control::-moz-placeholder {
                color: #666;
            }

            .app-form-control:-ms-input-placeholder {
                color: #666;
            }

            .app-form-control::placeholder {
                color: #666;
            }

            .app-form-control:focus {
                border-bottom-color: #ddd;
            }

            .app-form-button {
                background: none;
                border: none;
                color: #ea1d6f;
                font-size: 14px;
                cursor: pointer;
                outline: none;
            }

            .app-form-button:hover {
                color: #b9134f;
            }

            .credits {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
                color: #ffa4bd;
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 16px;
                font-weight: normal;
            }

            .credits-link {
                display: flex;
                align-items: center;
                color: #fff;
                font-weight: bold;
                text-decoration: none;
            }

            .dribbble {
                width: 20px;
                height: 20px;
                margin: 0 5px;
            }

            @media screen and (max-width: 520px) {
                .screen-body {
                flex-direction: column;
                }

                .screen-body-item.left {
                margin-bottom: 30px;
                }

                .app-title {
                flex-direction: row;
                }

                .app-title span {
                margin-right: 12px;
                }

                .app-title:after {
                display: none;
                }
            }

            @media screen and (max-width: 600px) {
                .screen-body {
                padding: 40px;
                }

                .screen-body-item {
                padding: 0;
                }
            }



            button {
                position: relative;
                display: inline-block;
                cursor: pointer;
                outline: none;
                border: 0;
                vertical-align: middle;
                text-decoration: none;
                background: transparent;
                padding: 0;
                font-size: inherit;
                font-family: inherit;
            }
            button.learn-more {
                width: 12rem;
                height: auto;
                text-decoration: none;
                outline:none;
            }
            button.learn-more .circle {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: relative;
                display: block;
                margin: 0;
                width: 3rem;
                height: 3rem;
                background: #282936;
                border-radius: 1.625rem;
            }
            button.learn-more .circle .icon {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                bottom: 0;
                margin: auto;
                background: #fff;
            }
            button.learn-more .circle .icon.arrow {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                left: 0.625rem;
                width: 1.125rem;
                height: 0.125rem;
                background: none;
            }
            button.learn-more .circle .icon.arrow::before {
                position: absolute;
                content: "";
                top: -0.25rem;
                right: 0.0625rem;
                width: 0.625rem;
                height: 0.625rem;
                border-top: 0.125rem solid #fff;
                border-right: 0.125rem solid #fff;
                transform: rotate(45deg);
            }
            button.learn-more .button-text {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 0.75rem 0;
                margin: 0 0 0 1.85rem;
                color: #282936;
                font-weight: 700;
                line-height: 1.6;
                text-align: center;
            }
            button:hover .circle {
                width: 100%;
            }
            button:hover .circle .icon.arrow {
                background: #fff;
                transform: translate(1rem, 0);
            }
            button:hover .button-text {
                color: #fff;
            }
            button:active {
                text-decoration: none;
            }



            .forgot {
            height: 100px;
            width: 80%;
            margin-left: center;
            margin-right: auto;
            text-align: center;
            padding-top: 24px;
            margin-top: 55px;
            border-top: solid 1px rgba(255,255,255,.3);
            transition: all 0.5s ease;
            }
            .forgot a {
            color: rgba(255,255,255,.3);
            font-weight: 400;
            font-size: 13px;
            text-decoration: none;
            }


    </style>

</head>
<body>


    <form action="/vlogin" method="post">
        @csrf
            <!-- partial:index.partial.html -->
            <div class="background">
            <div class="container">
                <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                    <div class="app-title">
                        <span>login</span>
                        <span>as vendeur</span>
                    </div>
                    </div>
                    <div class="screen-body-item">
                    <div class="app-form">
                        <div class="app-form-group">
                        <input name="username" class="app-form-control" placeholder="username" value="{{ old('username') }}" required autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="app-form-group">
                        <input name="password" class="app-form-control" placeholder="password" value="{{ old('password') }}" required autocomplete="password" type="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="app-form-group buttons">

                            <button class="learn-more" type="submit">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">{{ __('Login') }}</span>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>
            <!-- partial -->
    </form>

</body>
</html>
