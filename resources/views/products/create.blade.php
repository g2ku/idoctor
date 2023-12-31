@extends('base')

@section('content')

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <title>IDoctor</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>
    <a href="{{route('products.index')}}" type="text" class="home">
        Home
    </a>

    <h1 class="idoctor">IDoctor</h1>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-49">
                                Login
                            </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Type your password">
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-155">
                                <span class="txt1 p-b-17">
                                    Or Sign Up Using
                                </span>

                        <a href="#" class="txt2">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <style>
        .home
        {
            text-decoration: none;
            color: black;
            font-size: 22px;
            text-align: center  ;
        }
        .idoctor
        {
            color: #0d6efd;
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-size: 70px;
            font-weight: bold;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Nunito, sans-serif;
        }

        body, html {
            height: 100%;
        }

        a {
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            text-decoration: none;

        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #a64bf4;
        }

        h1,h2,h3,h4,h5,h6 {
            margin: 0px;
        }

        p {
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul, li {
            margin: 0;
            list-style-type: none;
        }


        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus, input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }
        input:focus::-moz-placeholder { color:transparent; }
        input:focus:-ms-input-placeholder { color:transparent; }

        textarea:focus::-webkit-input-placeholder { color:transparent; }
        textarea:focus:-moz-placeholder { color:transparent; }
        textarea:focus::-moz-placeholder { color:transparent; }
        textarea:focus:-ms-input-placeholder { color:transparent; }

        input::-webkit-input-placeholder { color: #adadad;}
        input:-moz-placeholder { color: #adadad;}
        input::-moz-placeholder { color: #adadad;}
        input:-ms-input-placeholder { color: #adadad;}

        textarea::-webkit-input-placeholder { color: #adadad;}
        textarea:-moz-placeholder { color: #adadad;}
        textarea::-moz-placeholder { color: #adadad;}
        textarea:-ms-input-placeholder { color: #adadad;}

        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }

        .txt1 {
            font-size: 14px;
            line-height: 1.5;
            color: #666666;
            margin-left: 170px;
        }

        .txt2 {
            font-size: 14px;
            line-height: 1.5;
            color: #333333;
            text-transform: uppercase;
        }

        .bg1 {background-color: #3b5998}
        .bg2 {background-color: #1da1f2}
        .bg3 {background-color: #ea4335}


        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 70vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .wrap-login100 {
            width: 500px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }


        .login100-form {
            width: 100%;
        }

        .login100-form-title {
            display: block;
            font-size: 39px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
        }

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid #d9d9d9;
        }

        .label-input100 {
            font-size: 14px;
            color: #333333;
            line-height: 1.5;
            padding-left: 7px;
        }

        .input100 {
            font-size: 16px;
            color: #333333;
            line-height: 1.2;

            display: block;
            width: 100%;
            height: 55px;
            background: transparent;
            padding: 0 7px 0 43px;
        }


        .container-login100-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .wrap-login100-form-btn {
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
            border-radius: 25px;
            overflow: hidden;
            margin: 0 auto;

            box-shadow: 0 5px 30px 0 rgba(3, 216, 222, 0.2);
            -moz-box-shadow: 0 5px 30px 0 rgba(3, 216, 222, 0.2);
            -webkit-box-shadow: 0 5px 30px 0 rgba(3, 216, 222, 0.2);
            -o-box-shadow: 0 5px 30px 0 rgba(3, 216, 222, 0.2);
            -ms-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
        }

        .login100-form-bgbtn {
            position: absolute;
            z-index: -1;
            width: 300%;
            height: 100%;
            background: #a64bf4;
            background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
            background: -o-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
            background: -moz-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
            background: linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
            top: 0;
            left: -100%;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .login100-form-btn {
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
        }

        .wrap-login100-form-btn:hover .login100-form-bgbtn {
            left: 0;
        }


        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            bottom: calc((100% - 20px) / 2);
            -webkit-transform: translateY(50%);
            -moz-transform: translateY(50%);
            -ms-transform: translateY(50%);
            -o-transform: translateY(50%);
            transform: translateY(50%);
            right: 2px;
            pointer-events: none;

            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            display: block;
            position: absolute;
            color: #c80000;
            font-size: 16px;
            bottom: calc((100% - 20px) / 2);
            -webkit-transform: translateY(50%);
            -moz-transform: translateY(50%);
            -ms-transform: translateY(50%);
            -o-transform: translateY(50%);
            transform: translateY(50%);
            right: 8px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }


        .login100-social-item {
            font-size: 25px;
            color: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 5px;
        }

        .login100-social-item:hover {
            color: #fff;
            background-color: #333333;
        }


        @media (max-width: 576px) {
            .wrap-login100 {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

    </style>
    <script>
        (function ($) {
            "use strict";

            $('.input100').each(function(){
                $(this).on('blur', function(){
                    if($(this).val().trim() != "") {
                        $(this).addClass('has-val');
                    }
                    else {
                        $(this).removeClass('has-val');
                    }
                })
            })

            var input = $('.validate-input .input100');

            $('.validate-form').on('submit',function(){
                var check = true;

                for(var i=0; i<input.length; i++) {
                    if(validate(input[i]) == false){
                        showValidate(input[i]);
                        check=false;
                    }
                }

                return check;
            });


            $('.validate-form .input100').each(function(){
                $(this).focus(function(){
                    hideValidate(this);
                });
            });

            function validate (input) {
                if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                    if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                        return false;
                    }
                }
                else {
                    if($(input).val().trim() == ''){
                        return false;
                    }
                }
            }

            function showValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).addClass('alert-validate');
            }

            function hideValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).removeClass('alert-validate');
            }

        })(jQuery);
    </script>
@endsection
