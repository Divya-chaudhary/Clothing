<?php
use App\Models\Admin\Settings;
$favicon = Settings::get('favicon');
$logo = Settings::get('logo');
$companyName = Settings::get('company_name');
$googleKey = Settings::get('google_api_key');
$version = 1.0;
?>
<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Pinders Work Wear</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/assets/img/favicon.ico') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/plugins/glightbox.min.css') }}">
    <link href="{{ url('frontend/assets/css/plugins/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css" />
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
    <style>
        ul#brands-block {
            display: flex;
            list-style-type: none;
            margin: 10px 0;
            padding: 0;
        }

        ul#brands-block li:first-child {
            margin-left: 0;
        }

        ul#brands-block li {
            margin: 0 15px;
            margin-left: 15px;
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        ul#brands-block li img {
            width: 100%;
            display: block;
            outline: 2px solid #fff;

            transition: .3s;
        }

        ul#brands-block li a {
            color: #000 !important;
            background: #000;
        }

        ul#brands-block li a:hover {
            color: #ea2c49 !important;
            background: #ea2c49;
        }
    </style>

</head>



<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->



    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <ul class="header__shipping--wrapper d-flex">
                            <li class="header__shipping--text text-white">Welcome to Pinders Work Wear</li>

                        </ul>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="header__shipping--wrapper d-flex">

                            <li class="header__shipping--text text-white d-sm-2-none"><img
                                    class="header__shipping--text__icon"
                                    src="{{ url('frontend/assets/img/icon/bus.png') }}" alt="bus-icon"> Track Your Order
                            </li>
                            <li class="header__shipping--text text-white d-sm-2-none"><img
                                    class="header__shipping--text__icon"
                                    src="{{ url('frontend/assets/img/icon/email.png') }}" alt="email-icon"> <a
                                    class="header__shipping--text__link"
                                    href="mailto:info@pindersschoolwear.com">info@pindersschoolwear.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="/"><img
                                    class="main__logo--img"
                                    src="{{ url('frontend/assets/img/logo/logo-workwear.jpg') }}" alt="logo-img"></a>
                        </h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form class="d-flex header__search--form" action="#">
                            <div class="header__select--categories select">
                                <select class="header__select--inner">
                                    <option selected value="1">All Categories</option>
                                    <option value="2">T-Shirts</option>
                                    <option value="3">Polo Shirts</option>
                                    <option value="4">Hi Vis </option>
                                    <option value="5">Jackets </option>
                                    <option value="6">Hoodies </option>
                                    <option value="7">Bottoms </option>
                                    <option value="8">Knitwear </option>
                                    <option value="9">Headwear </option>

                                </select>
                            </div>
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Keyword here..."
                                        type="text">
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit"
                                    aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                        width="27.51" height="26.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32">
                                        </path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <li class="header__account--items">
                                <a class="header__account--btn" href="my-account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>
                                    <span class="header__account--btn__text">My Account</span>
                                </a>
                            </li>
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                        viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor" />
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="header__account--btn__text"> My cart</span>
                                    <span class="items__count">02</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <!--<li class="header__menu--items style2">
                                    <a class="header__menu--link" href="/">Shop by Category
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Gloves</a></li>
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Footwear</a></li>
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Trousers</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">T-Shirts</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Jumpers</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Jackets</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Respirators</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Eye Protection</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Head Protection</a></li>
                                    </ul>
                                </li>-->

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">T-Shirts
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">V Neck</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Short Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Round Neck</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Polo Shirts
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Short Sleeve</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Hi Vis
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Waistcoat</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Vest</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve Polo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Polo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Tshirt</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Sweatshirt</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hoodies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Fleece</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Trouser</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Jacket</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Jackets
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Bombers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Coats</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Fleece</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hi Vis Jackets</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Waterproof</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Hoodies
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Pullover hoodies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Zipper hoodies</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Bottoms
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Cargo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Chinos</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Joggers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Trousers</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Knitwear
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Jumpers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Cardigans</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">V Neck Sweater</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/">Headwear
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Caps</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Beanies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hats</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items style3">
                                    <a class="header__menu--link " href="/" style="color:#ee2761;">SALE </a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__account2 header__sticky--block">
                        <ul class="d-flex">
                            <li
                                class="header__account--items header__account2--items  header__account--search__items d-none d-lg-block">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                        width="26.51" height="23.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                    </svg>
                                    <span class="visually-hidden">Search</span>
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn" href="my-account.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>
                                    <span class="visually-hidden">My Account</span>
                                </a>
                            </li>

                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                    data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                        viewBox="0 0 14.706 13.534">
                                        <g transform="translate(0 0)">
                                            <g>
                                                <path data-name="Path 16787"
                                                    d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                    transform="translate(0 -463.248)" fill="currentColor" />
                                                <path data-name="Path 16788"
                                                    d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                    transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                <path data-name="Path 16789"
                                                    d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                    transform="translate(-2.875 -466.622)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="items__count style2">02</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-fluid">
                <div
                    class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <!--<li class="header__menu--items">
                                    <a class="header__menu--link" href="/">Shop by Category
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Gloves</a></li>
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Footwear</a></li>
                                        <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Trousers</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">T-Shirts</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Jumpers</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Jackets</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Respirators</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Eye Protection</a></li>
          <li class="header__sub--menu__items"><a href="/" class="header__sub--menu__link">Head Protection</a></li>
                                    </ul>
                                </li>-->

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">T-Shirts
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">V Neck</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Short Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Round Neck</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Polo Shirts
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Short Sleeve</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Hi Vis
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Waistcoat</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Vest</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Long Sleeve Polo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Polo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Tshirt</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Sweatshirt</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hoodies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Fleece</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Trouser</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Jacket</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Jackets
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Bombers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Coats</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Fleece</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hi Vis Jackets</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Waterproof</a></li>
                                    </ul>
                                </li>


                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Hoodies
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Pullover hoodies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Zipper hoodies</a></li>
                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Bottoms
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Cargo</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Chinos</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Joggers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Trousers</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Knitwear
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Jumpers</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Cardigans</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">V Neck Sweater</a></li>

                                    </ul>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/">Headwear
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Caps</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Beanies</a></li>
                                        <li class="header__sub--menu__items"><a href="/"
                                                class="header__sub--menu__link">Hats</a></li>

                                    </ul>
                                </li>



                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="/" style="color:#ee2761;">SALE </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <!--<p class="header__discount--text"><img class="header__discount--icon__img" src="{{ url('frontend/assets/img/icon/lamp.png') }}" alt="lamp-img"> Special up to 60% Off all item</p>-->
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.html">
                        <img src="{{ url('frontend/assets/img/logo/logo-workwear.jpg') }}" alt="pinders"
                            width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <!-- <li class="offcanvas__menu_li">
                                    <a class="offcanvas__menu_item" href="/">Shop by Category</a>
                                    <ul class="offcanvas__sub_menu">
                                        <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Gloves</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Footwear</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Trousers</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">T-Shirts</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Jumpers</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Jackets</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Respirators</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Eye Protection</a></li>
          <li class="offcanvas__sub_menu_li"><a href="/" class="offcanvas__sub_menu_item">Head Protection</a></li>
                                    </ul>
                                </li>-->

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">T-Shirts </a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">V
                                        Neck</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Long
                                        Sleeve</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Short
                                        Sleeve</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Round
                                        Neck</a></li>
                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Polo Shirts </a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Long
                                        Sleeve</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Short
                                        Sleeve</a></li>
                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Hi Vis </a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Waistcoat</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Vest</a>
                                </li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Long
                                        Sleeve Polo</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Polo</a>
                                </li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Tshirt</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Sweatshirt</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Hoodies</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Fleece</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Trouser</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Jacket</a></li>

                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Jackets</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Bombers</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Coats</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Fleece</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Hi Vis
                                        Jackets</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Waterproof</a></li>
                            </ul>
                        </li>


                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Hoodies</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Pullover
                                        hoodies</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Zipper
                                        hoodies</a></li>
                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Bottoms</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Cargo</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Chinos</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Joggers</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Trousers</a></li>

                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Knitwear</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Jumpers</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Cardigans</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">V Neck
                                        Sweater</a></li>

                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/">Headwear</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Caps</a>
                                </li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Beanies</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="/"
                                        class="offcanvas__sub_menu_item">Hats</a>
                                </li>

                            </ul>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item " href="/" style="color:#ee2761;">SALE </a>
                        </li>
                    </ul>
                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                            <span class="offcanvas__account--items__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32" />
                                </svg>
                            </span>
                            <span class="offcanvas__account--items__label">Login / Register</span>
                        </a>
                    </div>
                    <div class="language__currency">

                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="index.html">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                                viewBox="0 0 22 17">
                                <path fill="currentColor"
                                    d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Home</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="shop.html">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51"
                                height="17.443" viewBox="0 0 448 512">
                                <path
                                    d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list ">
                    <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)"
                        data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Search</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)"
                        data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                                viewBox="0 0 18.51 15.443">
                                <path
                                    d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                    transform="translate(-62.393 -135.3)" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                        <span class="items__count">3</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h2 class="minicart__title h3"> Shopping Cart</h2>
                    <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas>
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                        </svg>
                    </button>
                </div>
                <p class="minicart__header--desc">Clothing and fashion products are limited</p>
            </div>
            <div class="minicart__product">
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img
                                src="{{ url('frontend/assets/img/product/product1.png') }}" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h3 class="minicart__subtitle h4"><a href="product-details.html">Oversize Cotton Dress</a>
                        </h3>
                        <span class="color__variant"><b>Color:</b> Beige</span>
                        <div class="minicart__price">
                            <span class="current__price">£125.00</span>
                            <span class="old__price">£140.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter />
                                </label>
                                <button type="button" class="quantity__value increase"
                                    value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img
                                src="{{ url('frontend/assets/img/product/product2.png') }}" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h3 class="minicart__subtitle h4"><a href="product-details.html">Boxy Denim Jacket</a></h3>
                        <span class="color__variant"><b>Color:</b> Green</span>
                        <div class="minicart__price">
                            <span class="current__price">£115.00</span>
                            <span class="old__price">£130.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease"
                                    aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter />
                                </label>
                                <button type="button" class="quantity__value increase"
                                    aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="minicart__amount">
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Sub Total:</span>
                    <span><b>£240.00</b></span>
                </div>
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Total:</span>
                    <span><b>£240.00</b></span>
                </div>
            </div>
            <div class="minicart__conditions text-center">
                <input class="minicart__conditions--input" id="accept" type="checkbox">
                <label class="minicart__conditions--label" for="accept">I agree with the <a
                        class="minicart__conditions--link" href="privacy-policy.html">Privacy and Policy</a></label>
            </div>
            <div class="minicart__button d-flex justify-content-center">
                <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
                <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
            </div>
        </div>
        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit"><svg
                            class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                            height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->

    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">
        @yield('content')
    </main>
    <!-- Start shipping section -->
    <section class="shipping__section shipping__style3">
        <div class="container-fluid">
            <div class="shipping__style3--inner border-radius-10 d-flex justify-content-between">
                <div class="shipping__style3--items d-flex align-items-center">
                    <div class="shipping__style3--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33.867" height="36.022"
                            viewBox="0 0 29.867 35.022">
                            <g transform="translate(-37.681 0)">
                                <g data-name="Group 117" transform="translate(37.681 0)">
                                    <g data-name="Group 116" transform="translate(0 0)">
                                        <path id="Path_75" data-name="Path 75"
                                            d="M67.006,6.047A58.257,58.257,0,0,1,52.989.1a.736.736,0,0,0-.749,0A56.662,56.662,0,0,1,38.223,6.047a.737.737,0,0,0-.542.711v7.527a21.655,21.655,0,0,0,6.576,15.822c3.23,3.165,6.992,4.915,8.358,4.915s5.128-1.75,8.358-4.915a21.655,21.655,0,0,0,6.576-15.822V6.758A.737.737,0,0,0,67.006,6.047Zm-.931,8.238a20.211,20.211,0,0,1-6.134,14.769c-3.176,3.112-6.572,4.494-7.326,4.494s-4.151-1.382-7.327-4.494a20.211,20.211,0,0,1-6.134-14.769V7.317A58.019,58.019,0,0,0,52.615,1.59a59.855,59.855,0,0,0,13.46,5.727Z"
                                            transform="translate(-37.681 0)" fill="currentColor" />
                                        <path id="Path_76" data-name="Path 76"
                                            d="M85.814,99.41a.737.737,0,0,0-.956-.415c-1.316.519-2.667,1-4.015,1.419a.737.737,0,0,0-.516.7v2.845a.737.737,0,1,0,1.473,0v-2.307c1.209-.391,2.417-.824,3.6-1.289A.736.736,0,0,0,85.814,99.41Z"
                                            transform="translate(-77.41 -92.175)" fill="currentColor" />
                                        <path id="Path_77" data-name="Path 77"
                                            d="M170.941,87.683a.737.737,0,0,0,.3-.062l.014-.006a.737.737,0,1,0-.595-1.348l-.012.005a.736.736,0,0,0,.3,1.411Z"
                                            transform="translate(-161.138 -80.308)" fill="currentColor" />
                                        <path id="Path_78" data-name="Path 78"
                                            d="M308.871,345.648a.737.737,0,0,0-1.02.214,17.933,17.933,0,0,1-2.117,2.644,18.818,18.818,0,0,1-2.113,1.88.737.737,0,1,0,.893,1.172,20.3,20.3,0,0,0,2.279-2.028,19.388,19.388,0,0,0,2.291-2.863A.737.737,0,0,0,308.871,345.648Z"
                                            transform="translate(-285.16 -321.893)" fill="currentColor" />
                                        <path id="Path_79" data-name="Path 79"
                                            d="M276.974,432.067l-.042.025a.737.737,0,1,0,.738,1.275l.049-.029a.737.737,0,1,0-.745-1.271Z"
                                            transform="translate(-260.223 -402.419)" fill="currentColor" />
                                        <path id="Path_80" data-name="Path 80"
                                            d="M126.909,160.031a2.4,2.4,0,1,0-3.388,3.388l4.35,4.35a2.4,2.4,0,0,0,3.388,0l9.081-9.081a2.4,2.4,0,0,0-3.388-3.388l-7.387,7.387Zm11.085-3.689a.922.922,0,1,1,1.3,1.3l-9.081,9.081a.923.923,0,0,1-1.3,0l-4.35-4.35a.922.922,0,0,1,1.3-1.3l3.177,3.177a.737.737,0,0,0,1.042,0Z"
                                            transform="translate(-116.997 -144.024)" fill="currentColor" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="shipping__style3--content">
                        <h2 class="shipping__style3--content__title">SECURE SHOPPING</h2>
                        <p class="shipping__style3--content__desc">Free order over £300</p>
                    </div>
                </div>
                <div class="shipping__style3--items d-flex align-items-center">
                    <div class="shipping__style3--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38.65" height="31.024"
                            viewBox="0 0 32.65 25.024">
                            <g id="fast-delivery" transform="translate(0 -59.798)">
                                <g id="Group_120" data-name="Group 120" transform="translate(6.111 65.92)">
                                    <g id="Group_119" data-name="Group 119" transform="translate(0 0)">
                                        <path id="Path_103" data-name="Path 103"
                                            d="M97.921,160.126l-1.113-1.1-.018-2.754a.478.478,0,0,0-.478-.475h0a.478.478,0,0,0-.475.481l.019,2.952a.478.478,0,0,0,.142.337l1.253,1.238a.478.478,0,0,0,.672-.68Z"
                                            transform="translate(-95.834 -155.798)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_122" data-name="Group 122" transform="translate(12.594 71.137)">
                                    <g id="Group_121" data-name="Group 121" transform="translate(0 0)">
                                        <path id="Path_104" data-name="Path 104"
                                            d="M205.993,240.415s0-.008,0-.012,0-.026-.007-.039l0-.013c0-.012-.006-.024-.01-.036l-.005-.014c0-.011-.009-.022-.013-.033l-.007-.014-.016-.03-.009-.015-.019-.028-.01-.014-.025-.028-.009-.01a.465.465,0,0,0-.038-.034h0l-2.915-2.377a.478.478,0,0,0-.6.741l1.874,1.528h-6.2a.478.478,0,0,0,0,.957h6.2l-1.874,1.528a.478.478,0,1,0,.6.741l2.915-2.377h0a.488.488,0,0,0,.038-.034l.009-.009.025-.028.01-.014.019-.028.009-.015.016-.03.007-.014c0-.011.009-.022.013-.033l.005-.014c0-.012.007-.024.01-.036l0-.013c0-.013,0-.026.007-.039s0-.008,0-.012a.479.479,0,0,0,0-.052A.494.494,0,0,0,205.993,240.415Z"
                                            transform="translate(-197.501 -237.611)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_124" data-name="Group 124" transform="translate(0 59.798)">
                                    <g id="Group_123" data-name="Group 123" transform="translate(0 0)">
                                        <path id="Path_105" data-name="Path 105"
                                            d="M11.259,64.655a6.708,6.708,0,0,0-.705-.607l.681-.826a.478.478,0,0,0-.738-.609l-.755.916a6.552,6.552,0,0,0-2.655-.77v-.431h.962a.888.888,0,0,0,.887-.887v-.756a.888.888,0,0,0-.887-.887H5.13a.888.888,0,0,0-.887.887v.756a.888.888,0,0,0,.887.887h1v.432a6.555,6.555,0,0,0-2.682.784l-.767-.93a.478.478,0,0,0-.738.609l.7.844a6.707,6.707,0,0,0-.726.635A6.609,6.609,0,0,0,6.608,75.959H6.64a6.609,6.609,0,0,0,4.619-11.3ZM5.2,61.371v-.616h2.78v.616Zm5.425,11.957A5.615,5.615,0,0,1,6.636,75H6.608a5.652,5.652,0,0,1-.026-11.3h.028a5.652,5.652,0,0,1,4.015,9.63Z"
                                            transform="translate(0 -59.798)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_126" data-name="Group 126" transform="translate(1.535 64.277)">
                                    <g id="Group_125" data-name="Group 125" transform="translate(0 0)">
                                        <path id="Path_106" data-name="Path 106"
                                            d="M29.147,130.033h-.025a5.074,5.074,0,0,0,.024,10.147h.025a5.074,5.074,0,0,0-.024-10.147ZM32.072,138a4.09,4.09,0,0,1-2.905,1.22h-.02a4.117,4.117,0,0,1-.019-8.234h.02A4.117,4.117,0,0,1,32.072,138Z"
                                            transform="translate(-24.073 -130.033)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_128" data-name="Group 128" transform="translate(6.889 80.101)">
                                    <g id="Group_127" data-name="Group 127" transform="translate(0 0)">
                                        <path id="Path_107" data-name="Path 107"
                                            d="M110.1,378.274a1.439,1.439,0,0,0-1.176.073,1.648,1.648,0,0,0-.79.891,1.551,1.551,0,0,0,.833,2.024,1.415,1.415,0,0,0,.5.092,1.481,1.481,0,0,0,.673-.165,1.648,1.648,0,0,0,.79-.891A1.551,1.551,0,0,0,110.1,378.274Zm-.061,1.685a.693.693,0,0,1-.329.378.5.5,0,0,1-.4.031.6.6,0,0,1-.278-.791.693.693,0,0,1,.329-.378.531.531,0,0,1,.24-.06.457.457,0,0,1,.163.03A.6.6,0,0,1,110.039,379.959Z"
                                            transform="translate(-108.024 -378.181)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_130" data-name="Group 130" transform="translate(25.315 80.103)">
                                    <g id="Group_129" data-name="Group 129">
                                        <path id="Path_108" data-name="Path 108"
                                            d="M399.045,378.292a1.6,1.6,0,0,0-1.132,2.988,1.415,1.415,0,0,0,.5.092,1.481,1.481,0,0,0,.673-.165,1.648,1.648,0,0,0,.79-.891A1.551,1.551,0,0,0,399.045,378.292Zm-.061,1.685a.693.693,0,0,1-.329.378.5.5,0,0,1-.4.031.6.6,0,0,1-.278-.791.64.64,0,0,1,.568-.438.459.459,0,0,1,.164.03A.6.6,0,0,1,398.984,379.977Z"
                                            transform="translate(-396.969 -378.2)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_132" data-name="Group 132" transform="translate(3.238 67.033)">
                                    <g id="Group_131" data-name="Group 131" transform="translate(0 0)">
                                        <path id="Path_109" data-name="Path 109"
                                            d="M79.88,179.659h0c-.7-.793-1.424-1.62-2.211-2.528a1.265,1.265,0,0,0-.959-.426l-4.02-.005c.122-.756.24-1.509.349-2.246A1.03,1.03,0,0,0,72,173.259l-7.971,0H62.226a.478.478,0,0,0,0,.957h1.806l7.971,0a.1.1,0,0,1,.075.025.1.1,0,0,1,.015.074c-.232,1.579-.508,3.234-.779,4.844-.394,2.324-.8,4.708-1.1,7.033l0,.028h-3.35l-.98,0h-.2l-2.3,0h-.1l-2.374-.005-2.421-.005a2.779,2.779,0,0,0-.972-1.02l-.038-.023-.065-.037-.057-.031-.057-.029-.074-.035L57.178,185c-.041-.018-.083-.035-.125-.051s-.087-.031-.131-.046l-.072-.021-.057-.016-.1-.024-.027-.006c-.04-.009-.08-.016-.121-.023h0a2.772,2.772,0,0,0-1.31.1h0l-.1.035-.04.014-.08.031-.034.013-.032.014-.048.021-.1.046-.022.011-.006,0q-.059.03-.116.062l-.047.028-.063.038-.064.041-.037.025a3.248,3.248,0,0,0-.888.9H51.917l.41-2.53a.478.478,0,0,0-.944-.153c-.286,1.77-.5,3.085-.5,3.085v.007l-.1.651A1.232,1.232,0,0,0,52,188.662h1.031a3.156,3.156,0,0,0,.167.585,2.791,2.791,0,0,0,1.611,1.618,2.705,2.705,0,0,0,.961.176,3.159,3.159,0,0,0,2.888-2.1c.035-.091.065-.183.091-.275l10.406.013,1.294,0h1.012a3.152,3.152,0,0,0,.163.564,2.791,2.791,0,0,0,1.611,1.618,2.724,2.724,0,0,0,.967.178,2.887,2.887,0,0,0,1.311-.322,3.283,3.283,0,0,0,1.571-1.778c.032-.084.059-.168.084-.253h.6a1.429,1.429,0,0,0,1.39-1.181c.353-2.3.723-4.722,1.015-6.853A1.25,1.25,0,0,0,79.88,179.659Zm-26.77,7.5c-.005.019-.01.038-.015.058s-.015.056-.022.085-.011.048-.016.072-.01.045-.014.068-.011.06-.016.091-.005.031-.008.047c-.006.037-.01.074-.015.112l0,.014H52a.275.275,0,0,1-.272-.316l.036-.242h1.345Zm4.787.953s0,.005,0,.008a2.483,2.483,0,0,1-.129.482,2.1,2.1,0,0,1-2.616,1.367,1.846,1.846,0,0,1-1.06-1.074,2.223,2.223,0,0,1-.151-.712c0-.006,0-.012,0-.018a2.379,2.379,0,0,1,.013-.361v0c0-.036.009-.071.015-.107l0-.022c0-.029.011-.058.017-.087l.007-.034c.006-.026.012-.051.019-.077l.01-.039c.007-.025.015-.051.023-.076l.011-.037c.012-.037.025-.074.039-.111v0c.018-.048.038-.095.059-.141l.013-.03c.022-.047.045-.094.07-.139l.006-.01a2.126,2.126,0,0,1,2.08-1.141l.047.006.06.011c.039.008.077.016.115.026l.027.008c.046.013.091.028.136.045l.087.036.053.025.03.014.071.038.009,0a1.876,1.876,0,0,1,.786.9A2.267,2.267,0,0,1,57.9,188.114Zm12.128-.389H69.16l-10.276-.013a3.228,3.228,0,0,0-.053-.553l2.076,0,4.295.009h4.887Q70.056,187.452,70.026,187.725Zm6.3.408v.006a2.487,2.487,0,0,1-.126.465,2.328,2.328,0,0,1-1.11,1.264,1.809,1.809,0,0,1-2.565-.972,2.221,2.221,0,0,1-.151-.7s0-.007,0-.01a2.37,2.37,0,0,1,.011-.362l0-.018q.005-.047.013-.093l.006-.036c0-.025.009-.05.014-.075l.009-.045c.005-.023.011-.046.017-.069s.008-.031.012-.047.014-.048.021-.072l.012-.041c.012-.037.025-.075.039-.112a2.328,2.328,0,0,1,1.11-1.264c.033-.017.067-.033.1-.048l.033-.014.069-.028.039-.014.065-.022.04-.012.065-.018.039-.01.07-.015.034-.007.092-.014.012,0c.035,0,.07-.007.1-.01h.028l.076,0h.026c.047,0,.095,0,.142.006h0c.048,0,.1.011.142.019l.026,0q.068.013.136.031L75,185.8c.046.013.093.028.138.045l.082.034.049.023.027.013A2.069,2.069,0,0,1,76.321,188.133Zm2.905-7.605c-.291,2.124-.66,4.542-1.012,6.837a.479.479,0,0,1-.445.37h-.458a3.187,3.187,0,0,0-.221-1.163,2.805,2.805,0,0,0-1.384-1.519l-.056-.026L75.6,185c-.039-.017-.079-.033-.119-.049a2.762,2.762,0,0,0-2,.02q-.14.055-.278.125a3.283,3.283,0,0,0-1.571,1.778c-.023.062-.044.124-.064.186l-.017.054q-.023.076-.042.152l-.01.04c-.015.063-.028.126-.039.19,0,.013,0,.027-.006.04q-.014.087-.024.174c0,.005,0,.011,0,.016h-.438c.037-.325.076-.652.1-.834.008-.063.015-.126.023-.19.3-2.318.706-4.763,1.1-7.128l.04-.238.014-.08q.137-.807.27-1.6l4.171.006a.307.307,0,0,1,.238.1c.789.91,1.514,1.739,2.216,2.535A.29.29,0,0,1,79.226,180.528Z"
                                            transform="translate(-50.773 -173.254)" fill="currentColor" />
                                    </g>
                                </g>
                                <g id="Group_134" data-name="Group 134" transform="translate(24.791 72.095)">
                                    <g id="Group_133" data-name="Group 133" transform="translate(0 0)">
                                        <path id="Path_110" data-name="Path 110"
                                            d="M394.788,254.861c-.576-.657-1.147-1.312-1.7-1.946a.8.8,0,0,0-.609-.274l-2.277,0h0a.931.931,0,0,0-.9.763l-.069.422c-.155.953-.316,1.939-.469,2.909h0a.791.791,0,0,0,.176.638.807.807,0,0,0,.616.278l4.313,0h0a.924.924,0,0,0,.9-.772c.08-.552.12-.828.2-1.381A.794.794,0,0,0,394.788,254.861Zm-.953,1.834-4.094,0c.144-.907.293-1.825.438-2.715l.062-.382,2.178,0c.518.6,1.056,1.216,1.6,1.835C393.946,255.924,393.907,256.2,393.835,256.695Z"
                                            transform="translate(-388.755 -252.638)" fill="currentColor" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="shipping__style3--content">
                        <h2 class="shipping__style3--content__title">ACCEPT PAYMENT</h2>
                        <p class="shipping__style3--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__style3--items d-flex align-items-center">
                    <div class="shipping__style3--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33.014" height="38.242"
                            viewBox="0 0 30.014 35.242">
                            <g id="refund" transform="translate(-37.974)">
                                <path id="Path_100" data-name="Path 100"
                                    d="M155.458,167.212h.952a.345.345,0,1,1,0,.69H154.9a.516.516,0,0,0,0,1.032h.6v.24a.516.516,0,0,0,1.032,0v-.246a1.378,1.378,0,0,0-.121-2.75h-.953a.345.345,0,0,1,0-.69h1.51a.516.516,0,1,0,0-1.032h-.436v-.24a.516.516,0,0,0-1.032,0v.24h-.041a1.378,1.378,0,1,0,0,2.755Z"
                                    transform="translate(-108.115 -152.432)" fill="currentColor" />
                                <path id="Path_101" data-name="Path 101"
                                    d="M121.421,135.894a3.96,3.96,0,0,0,3.163-1.722,6.966,6.966,0,0,0,0-7.941,3.765,3.765,0,0,0-6.325,0,6.966,6.966,0,0,0,0,7.941A3.96,3.96,0,0,0,121.421,135.894Zm-3.372-5.693c0-2.57,1.513-4.661,3.372-4.661s3.373,2.091,3.373,4.661-1.513,4.66-3.373,4.66S118.049,132.771,118.049,130.2Z"
                                    transform="translate(-73.601 -115.938)" fill="currentColor" />
                                <path id="Path_102" data-name="Path 102"
                                    d="M60.618,11.692h-.646v-1.31a.759.759,0,0,0-1.2-.616l-1.1.795V6.373l5.621,1.5a4.639,4.639,0,0,0,2.92,5.015.516.516,0,0,0,1.015.124l.69-2.59A2.306,2.306,0,0,0,66.276,7.6L64.023,7h0L57.665,5.3v-3A2.309,2.309,0,0,0,55.359,0H40.28a2.309,2.309,0,0,0-2.306,2.306V7.124a.516.516,0,1,0,1.032,0v-2A4.646,4.646,0,0,0,43.1,1.032h9.442a4.646,4.646,0,0,0,4.092,4.092V11.3l-2.84,2.045a1.168,1.168,0,0,0,0,1.9l2.84,2.045V23.4a4.646,4.646,0,0,0-4.092,4.092H43.1A4.646,4.646,0,0,0,39.007,23.4V9.189a.516.516,0,1,0-1.032,0V26.22a2.3,2.3,0,0,0,2.306,2.306h2.431a2.288,2.288,0,0,0,.249,1.684,2.315,2.315,0,0,0,.362.473l.04.039.02.019a2.291,2.291,0,0,0,.979.54l2.252.6.018,0,12.3,3.277q.112.03.225.048a2.306,2.306,0,0,0,2.6-1.683l.6-2.252,0-.011.9-3.374a.516.516,0,0,0-1-.266l-.776,2.914a4.639,4.639,0,0,0-5.008,2.9l-9.124-2.43a4.635,4.635,0,0,0-.311-2.484h8.319a2.3,2.3,0,0,0,2.306-2.306V18.033l1.1.795a.759.759,0,0,0,1.2-.616V16.9h.646a2.879,2.879,0,0,1,2.323,1.278,4.991,4.991,0,0,1,.92,2.905,4.3,4.3,0,0,1-4.5,4.3.542.542,0,0,0-.131,1.074,7.179,7.179,0,0,0,5.978-1.518,7.469,7.469,0,0,0,2.723-5.8A7.39,7.39,0,0,0,60.618,11.692Zm3.674-3.554L66.01,8.6a1.273,1.273,0,0,1,.9,1.558l-.458,1.718A3.613,3.613,0,0,1,64.292,8.138ZM39.007,4.084V2.306A1.275,1.275,0,0,1,40.28,1.032h1.778A3.613,3.613,0,0,1,39.007,4.084Zm17.626,0a3.613,3.613,0,0,1-3.051-3.051h1.811a1.275,1.275,0,0,1,1.24,1.273ZM40.28,27.494a1.273,1.273,0,0,1-1.273-1.273V24.443a3.613,3.613,0,0,1,3.051,3.051H40.28Zm6.066,3.248-1.718-.458a1.272,1.272,0,0,1-.9-1.558l.053-.2H45.89A3.606,3.606,0,0,1,46.346,30.742Zm12.644,1.264a3.576,3.576,0,0,1,2.226-.462l-.458,1.719a1.263,1.263,0,0,1-.592.774,1.264,1.264,0,0,1-.966.129l-1.718-.458A3.577,3.577,0,0,1,58.989,32.006Zm-2.356-5.786a1.273,1.273,0,0,1-1.273,1.273H53.582a3.613,3.613,0,0,1,3.051-3.051v1.778Zm7.92-2.081A6.286,6.286,0,0,1,63.186,25l.055-.052a5.286,5.286,0,0,0,1.652-3.859c0-2.508-1.635-5.216-4.275-5.216h-.712a.967.967,0,0,0-.966.966v.843l-1.49-1.073h0l-3.051-2.2a.135.135,0,0,1,0-.22l3.048-2.195.014-.01,1.481-1.067v.843a.967.967,0,0,0,.966.966h.712A6.357,6.357,0,0,1,66.9,19.141,6.44,6.44,0,0,1,64.553,24.14Z"
                                    fill="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <div class="shipping__style3--content">
                        <h2 class="shipping__style3--content__title">30 DAY RETURN</h2>
                        <p class="shipping__style3--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__style3--items d-flex align-items-center">
                    <div class="shipping__style3--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.326" height="36.112"
                            viewBox="0 0 30.326 33.112">
                            <g id="support" transform="translate(-17.756)">
                                <g id="Group_118" data-name="Group 118" transform="translate(17.756)">
                                    <path id="Path_81" data-name="Path 81"
                                        d="M44.886,13.687H44.8V11.679a11.679,11.679,0,0,0-23.359,0v2.008h-.492a3.337,3.337,0,0,0-3.2,3.442v5.122a3.237,3.237,0,0,0,3.154,3.319h3.075a.779.779,0,0,0,.741-.814c0-.015,0-.031,0-.046V14.671c0-.492-.287-.984-.738-.984h-.9V11.679a10.04,10.04,0,0,1,20.08,0v2.008h-.9c-.451,0-.738.492-.738.984v10.04a.779.779,0,0,0,.691.857l.046,0h.943l-.082.123a6.475,6.475,0,0,1-5.2,2.582,4.057,4.057,0,0,0-8.032.779,4.1,4.1,0,0,0,4.1,4.057,4.221,4.221,0,0,0,2.951-1.27,3.606,3.606,0,0,0,.984-1.967,8.114,8.114,0,0,0,6.516-3.237l.779-1.147a2.79,2.79,0,0,0,2.869-2.828V17.539C48.083,15.777,46.771,13.687,44.886,13.687Zm-21.8,10.245H20.954A1.6,1.6,0,0,1,19.4,22.3c0-.015,0-.029,0-.044V17.13a1.7,1.7,0,0,1,1.557-1.8h2.131Zm12.663,6.762a2.418,2.418,0,0,1-1.762.779,2.5,2.5,0,0,1-2.459-2.418,2.418,2.418,0,1,1,4.836,0v0A2.172,2.172,0,0,1,35.748,30.694Zm10.7-8.032c0,1.106-1.065,1.27-1.557,1.27H43.165V15.326h1.721c.9,0,1.557,1.27,1.557,2.213Z"
                                        transform="translate(-17.756)" fill="currentColor" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="shipping__style3--content">
                        <h2 class="shipping__style3--content__title">24/7 SUPPORT</h2>
                        <p class="shipping__style3--content__desc">Support every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->


    <!-- Start footer section -->
    <footer class="footer__section bg__black">
        <div class="container-fluid">
            <div class="main__footer d-flex justify-content-between">
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">About Us
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__widget--inner">
                        <p class="footer__widget--desc text-ofwhite mb-20">Lorem ipsum dolor sit amet, consectetur
                            adipisici ti elit seddo eiusmod tempor incididunt utlabore et dolore magna aliqua enim ad
                            minim veniam quisnostrud exercitation ullamco</p>
                        <div class="footer__social">
                            <h3 class="social__title text-ofwhite h4 mb-15">Follow Us</h3>
                            <ul class="social__shear d-flex">
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank"
                                        href="https://www.facebook.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                            viewBox="0 0 7.667 16.524">
                                            <path data-name="Path 237"
                                                d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                transform="translate(-960.13 -345.407)" fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
                                </li>
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank"
                                        href="https://twitter.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                            viewBox="0 0 16.489 13.384">
                                            <path data-name="Path 303"
                                                d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Twitter</span>
                                    </a>
                                </li>
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank"
                                        href="https://www.instagram.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492"
                                            viewBox="0 0 19.497 19.492">
                                            <path data-name="Icon awesome-instagram"
                                                d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                transform="translate(0.004 -1.492)" fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Instagram</span>
                                    </a>
                                </li>
                                <li class="social__shear--list">
                                    <a class="social__shear--list__icon" target="_blank"
                                        href="https://www.youtube.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                            viewBox="0 0 16.49 11.582">
                                            <path data-name="Path 321"
                                                d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Youtube</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__widget--menu__wrapper d-flex footer__widget--width">

                    <div class="footer__widget">
                        <h2 class="footer__widget--title text-ofwhite h3">Quick Links
                            <button class="footer__widget--button" aria-label="footer widget button">
                                <svg class="footer__widget--title__arrowdown--icon"
                                    xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394"
                                    viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </button>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">About
                                    Us</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">Contact Us</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">FAQs</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">Privacy Policy</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">Delivery Information</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                    href="/">Return
                                    Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">Instagram
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__instagram footer__widget--inner">
                        <div class="footer__instagram--list d-flex">
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkF3TLBTT7"><img
                                        src="{{ url('frontend/assets/img/other/instagram1.webp') }}"
                                        alt="instagram"></a>
                            </div>
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkF60sBxhN"><img
                                        src="{{ url('frontend/assets/img/other/instagram2.webp') }}"
                                        alt="instagram"></a>
                            </div>
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkF90ZB6HG"><img
                                        src="{{ url('frontend/assets/img/other/instagram3.webp') }}"
                                        alt="instagram"></a>
                            </div>
                        </div>
                        <div class="footer__instagram--list d-flex">
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkGAe6BQeu"><img
                                        src="{{ url('frontend/assets/img/other/instagram4.webp') }}"
                                        alt="instagram"></a>
                            </div>
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkGCWcBbv9"><img
                                        src="{{ url('frontend/assets/img/other/instagram5.webp') }}"
                                        alt="instagram"></a>
                            </div>
                            <div class="instagram__thumbnail">
                                <a class="instagram__thumbnail--img" target="_blank"
                                    href="https://www.instagram.com/p/CZkGFDMhoid"><img
                                        src="{{ url('frontend/assets/img/other/instagram6.webp') }}"
                                        alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__widget footer__widget--width">
                    <h2 class="footer__widget--title text-ofwhite h3">Newsletter
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__widget--inner">
                        <p class="footer__widget--desc text-ofwhite m-0">Fill their seed open meat. Sea you <br> great
                            Saw image stl</p>
                        <div class="newsletter__subscribe">
                            <form class="newsletter__subscribe--form" action="#">
                                <label>
                                    <input class="newsletter__subscribe--input" placeholder="Email Address"
                                        type="email">
                                </label>
                                <button class="newsletter__subscribe--button" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom d-flex justify-content-between align-items-center">
                <p class="copyright__content text-ofwhite m-0">Copyright © 2024 Pinders Schoolwear Ltd . All Rights
                    Reserved.</p>
                <div class="footer__payment text-right">
                    <img class="display-block" src="{{ url('frontend/assets/img/other/payment-visa') }}-card.png"
                        alt="visa-card">
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Quickview Wrapper -->
    <div class="modal" id="modal1" data-animation="slideInUp">
        <div class="modal-dialog quickview__main--wrapper">
            <header class="modal-header quickview__header">
                <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            <div class="quickview__inner">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="quickview__product--media product__details--media">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product1.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product1.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                                        assets/img/product/big-product1.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product2.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product2.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                                    assets/img/product/big-product2.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product3.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product3.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                                assets/img/product/big-product3.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product4.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product4.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                            assets/img/product/big-product4.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32">
                                                        </path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product5.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product5.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                        assets/img/product/big-product5.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32">
                                                        </path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                                data-gallery="product-media-preview"
                                                href="{{ url('assets/img/product/big-product6.jpg') }}"><img
                                                    class="product__media--preview__items--img"
                                                    src="{{ url('frontend/assets/img/product/big-product6.jpg') }}"
                                                    alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                    href="{{ url('
                                                                                    assets/img/product/big-product6.jpg') }}"
                                                    data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                        height="22.443" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__media--nav swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product7.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product8.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product9.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product10.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product11.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                src="{{ url('frontend/assets/img/product/small-product12.png') }}"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next"></div>
                                <div class="swiper__nav--btn swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quickview__info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15">Oversize Cotton Dress</h2>
                                <div class="product__details--info__price mb-10">
                                    <span class="current__price">£58.00</span>
                                    <span class="old__price">£68.00</span>
                                </div>
                                <div class="quickview__info--ratting d-flex align-items-center mb-10">
                                    <ul class="rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul>
                                    <span class="quickview__info--review__text">(5 reviews)</span>
                                </div>
                                <p class="product__details--info__desc mb-15">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit
                                    is. Deserunt totam dolores ea numquam labore! Illum magnam totam tenetur fuga quo
                                    dolor.</p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-10">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-8">Color :</legend>
                                            <input id="color-red1" name="color" type="radio" checked>
                                            <label class="variant__color--value red" for="color-red1"
                                                title="Red"><img class="variant__color--value__img"
                                                    src="{{ url('frontend/assets/img/product/product1.png') }}"
                                                    alt="variant-color-img"></label>
                                            <input id="color-red2" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red2"
                                                title="Black"><img class="variant__color--value__img"
                                                    src="{{ url('frontend/assets/img/product/product2.png') }}"
                                                    alt="variant-color-img"></label>
                                            <input id="color-red3" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red3"
                                                title="Pink"><img class="variant__color--value__img"
                                                    src="{{ url('frontend/assets/img/product/product3.png') }}"
                                                    alt="variant-color-img"></label>
                                            <input id="color-red4" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red4"
                                                title="Orange"><img class="variant__color--value__img"
                                                    src="{{ url('frontend/assets/img/product/product4.png') }}"
                                                    alt="variant-color-img"></label>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list mb-15">
                                        <fieldset class="variant__input--fieldset weight">
                                            <legend class="product__variant--title mb-8">Weight :</legend>
                                            <input id="weight1" name="weight" type="radio" checked>
                                            <label class="variant__size--value red" for="weight1">5 kg</label>
                                            <input id="weight2" name="weight" type="radio">
                                            <label class="variant__size--value red" for="weight2">3 kg</label>
                                            <input id="weight3" name="weight" type="radio">
                                            <label class="variant__size--value red" for="weight3">2 kg</label>
                                        </fieldset>
                                    </div>
                                    <div class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                        <div class="quantity__box">
                                            <button type="button"
                                                class="quantity__value quickview__value--quantity decrease"
                                                aria-label="quantity value" value="Decrease Value">-</button>
                                            <label>
                                                <input type="number"
                                                    class="quantity__number quickview__value--number" value="1"
                                                    data-counter />
                                            </label>
                                            <button type="button"
                                                class="quantity__value quickview__value--quantity increase"
                                                aria-label="quantity value" value="Increase Value">+</button>
                                        </div>
                                        <button class="primary__btn quickview__cart--btn" type="submit">Add To
                                            Cart</button>
                                    </div>
                                    <div class="quickview__variant--list variant__wishlist mb-15">
                                        <a class="variant__wishlist--icon" href="wishlist.html"
                                            title="Add to wishlist">
                                            <svg class="quickview__variant--wishlist__svg"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            Add to Wishlist
                                        </a>
                                    </div>
                                </div>
                                <div class="quickview__social d-flex align-items-center">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
                                                href="https://www.facebook.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667"
                                                    height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
                                                href="https://twitter.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489"
                                                    height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
                                                href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497"
                                                    height="16.492" viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank"
                                                href="https://www.youtube.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49"
                                                    height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quickview Wrapper End -->


    <!-- End News letter popup -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>


    <!-- Core -->
    <script>
        var site_url = "<?php echo url('/'); ?>";
        var admin_url = "<?php echo url('/admin/'); ?>";
        var current_url = "<?php echo url()->current(); ?>";
        var current_full_url = "<?php echo url()->full(); ?>";
        var previous_url = "<?php echo url()->previous(); ?>";
        var csrf_token = function() {
            return "<?php echo csrf_token(); ?>";
        }
    </script>
    <!-- All Script JS Plugins here  -->
    <script src="{{ url('frontend/assets/js/vendor/popper.js') }}" defer="defer')}}"></script>
    <!-- jQuery -->
    <script src="{{ url('frontend/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/vendor/bootstrap.min.js" defer="defer') }}"></script>
    <script src="{{ url('frontend/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/plugins/glightbox.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/plugins/jquery.fancybox.min.js') }}"></script>

    <!-- Customscript js -->
    <script src="{{ url('frontend/assets/js/script.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();

            //        prodcolour
            $("select[name=prodcolour]").change(function() {
                var valThis = $(this).val();
                //            alert(valThis);
                //            alert($("input[name=hfbaseprice]").val());
                var base_price = parseFloat($("input[name=hfbaseprice]").val());
                $("input[name=prodprice]").val(base_price.toFixed(2));
                $("#spnprice").html(' &pound;' + base_price.toFixed(2) + '');

                if ($("select[name=prodsize]").length) {
                    $("input[name=hfprodsize]").val('0');
                    $("select[name=prodsize]").val('');
                }
                if ($("select[name=prodlength]").length) {
                    $("select[name=prodlength]").val('');
                }

                if (valThis.length > 0) {
                    var img_url = $("input[name=base_extra_img_url]").val() + valThis + ".jpg";
                    //            alert(img_url);
                    //            document.location.href = valThis;
                    $("img[name=prodlargeimg]").attr("src", img_url);
                    //$(this).addClass('selected');
                    //$( "ul.pro-thumb-img" ).find( "li:eq(2)" ).focus();
                    //        .css( "fontStyle", "italic" );
                }
            });

            $("select[name=prodcolour]").on("change touchend", function() {
                $('select[name=prodsize] option').each(function() {
                    //      myOptions.push( this.value );
                    $(this).removeAttr('disabled').removeClass("disabledoption").show();
                });


                var t_excludesizes = $("select[name=prodcolour] option:checked").attr('excludesizes');

                if (t_excludesizes.indexOf('_') >= 0) {
                    var t_arrSizes = t_excludesizes.split('_');
                    t_arrSizes.forEach(arrSizesIterator);

                    function arrSizesIterator(value, index, array) {
                        //                    txt = txt + value + "<br>";
                        $("select[name=prodsize] option[value='" + value + "']").attr('disabled',
                            'disabled').addClass("disabledoption").hide();
                    }
                } else {
                    $("select[name=prodsize] option[value='" + t_excludesizes + "']").attr('disabled',
                        'disabled').addClass("disabledoption").hide();
                }

            });

            $("select[name=prodsize]").on("change touchend", function() {
                if ($("select[name=prodlength]").length) {
                    $("select[name=prodlength]").val('');


                    //        $("select[name=prodsize]").change(function () {
                    $("select[name=prodlength] option").removeAttr('disabled').removeClass("disabledoption")
                        .show();
                    //            var t_cur_size_id = $(this).val();

                    var t_excludelengths = $("select[name=prodsize] option:checked").attr('excludelengths');
                    //            var t_excludelengths = $("input[name=hfsize" + t_cur_size_id + "excludelengths").val();

                    if (t_excludelengths.indexOf('_') >= 0) {
                        var t_arrLengths = t_excludelengths.split('_');
                        t_arrLengths.forEach(arrLengthsIterator);

                        function arrLengthsIterator(value, index, array) {
                            //                    txt = txt + value + "<br>";
                            $("select[name=prodlength] option[value='" + value + "']").attr('disabled',
                                'disabled').addClass("disabledoption").hide();
                        }
                    } else {
                        $("select[name=prodlength] option[value='" + t_excludelengths + "']").attr(
                            'disabled', 'disabled').addClass("disabledoption").hide();
                    }
                    //            alert(t_cur_size_id + ' : ' + t_excludelengths);
                    //            if (t_cur_size_id == 1) {
                    //                $("select[name=prodlength] option[value='29']").hide();
                    //            } else {
                    //                $("select[name=prodlength] option").show();
                    //            }
                }
            });
        });
    </script>

</body>

</html>
