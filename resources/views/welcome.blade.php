@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.nosotros')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.contactos')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

        html,
        h2,
        h5,
        p {
            font-family: "Merriweather", serif !important;
        }

        body {
            background: url('/img/background.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-family: "Merriweather", serif !important;
        }

        /* bootstrap style */
        .bg-dark {
            background: #D2B48C !important;
        }

        .text-light {
            color: #A83F24 !important;
            font-family: "Merriweather", serif !important;
        }

        .btn-primary {
            background: #A83F24;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background: black;
            color: #fff;
            border: none;
        }

        /* navbar style */
        .navbar-custom {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .logo-container img {
            width: 70px;
            height: 70px;
            border: 3px solid white;
        }

        .navbar-nav .nav-item .nav-link {
            padding-left: 15px;
            padding-right: 15px;
            align-self: center;
        }

        .navigation:hover {
            border-bottom: 2px solid #A83F24;
        }

        /* banner style */
        .banner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }

        .banner-image {
            position: relative;
            flex: 1;
            min-width: 300px;
            margin: 10px;
        }

        .banner-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        .banner-text h2 {
            margin: 0;
            font-size: 24px;
        }

        .banner-text p {
            margin: 5px 0 0;
            font-size: 16px;
        }

        /* about */
        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-body .video {
            max-width: 100%;
            width: 400px;
            height: 500px;
        }

        /* contactos */
        .contact-section {
            background: linear-gradient(135deg, #f6ddd7 0%, #D2B48C 100%);
            color: white;
            padding: 60px 0;
        }

        .contact-section h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .contact-section .icon-hover:hover {
            color: #ff6347;
            /* Tomate */
            transition: color 0.3s ease-in-out;
        }

        .map-container {
            height: 300px;
            border: 0;
        }

        /* footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .social-icons {
            list-style-type: none;
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons a {
            color: white;
            font-size: 20px;
        }

        .address {
            margin-top: 10px;
        }

        /* style */
        .text-primary {
            color: #fff !important;
        }

        .text-secondary {
            color: #fff !important;
        }

        .icontext{
            color: #A83F24 !important;
        }

        .text-primary:hover {
            color: #A83F24 !important;
            border-bottom: 2px solid #A83F24;
        }


        /* mobile style  */
        @media (max-width: 768px) {
            .navbar-custom {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .banner {
                flex-direction: column;
            }

            .banner-image {
                margin: 10px 0;
            }
        }
    </style>
@endsection
