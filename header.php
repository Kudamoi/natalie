<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natalie Scvortsova</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

<header id="header" class="d-flex a-center">
    <div class="container d-flex j-c-between a-center">
        <div class="block-logo w-10">
            <a href="/" class="link-logo">Lopper</a>
        </div>
        <div class="block-menu w-35">
            <ul class="container-menu d-flex j-c-between a-center nav">
                <li class="item-menu"><a href="/" class="link-menu">Home</a></li>
                <li class="item-menu"><a href="/" class="link-menu">Services</a></li>
                <li class="item-menu"><a href="/" class="link-menu">Work</a></li>
                <li class="item-menu"><a href="/" class="link-menu">About</a></li>
            </ul>

        </div>
        <div class="contact-block w-20">
            <div class="phone-block">
                <a href="tel:01666693456" class="link-phone d-flex j-c-between a-center no-wrap">
                    <svg class="icon-phone" width="18" height="29" viewBox="0 0 18 29" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6 5.4V18.9H5.4V5.4H12.6ZM15.3 0H2.7C1.20938 0 0 1.20938 0 2.7V26.1C0 27.5906 1.20938 28.8 2.7 28.8H15.3C16.7906 28.8 18 27.5906 18 26.1V2.7C18 1.20938 16.7906 0 15.3 0ZM2.7 27C2.205 27 1.8 26.595 1.8 26.1V2.7C1.8 2.205 2.205 1.8 2.7 1.8H15.3C15.795 1.8 16.2 2.205 16.2 2.7V26.1C16.2 26.595 15.795 27 15.3 27H2.7ZM13.725 3.6H4.275C3.90375 3.6 3.6 3.90375 3.6 4.275V20.025C3.6 20.3963 3.90375 20.7 4.275 20.7H13.725C14.0962 20.7 14.4 20.3963 14.4 20.025V4.275C14.4 3.90375 14.0962 3.6 13.725 3.6ZM11.025 23.4H6.975C6.60375 23.4 6.3 23.7038 6.3 24.075V24.525C6.3 24.8963 6.60375 25.2 6.975 25.2H11.025C11.3962 25.2 11.7 24.8963 11.7 24.525V24.075C11.7 23.7038 11.3962 23.4 11.025 23.4Z"
                              fill="#30233D"/>
                    </svg>
                    <span class="content-phone-block nav">(01) 666 - 693 - 456</span>
                </a>
            </div>
        </div>
        <div class="slide-menu-block">
            <input name="checker-menu" type="checkbox" id="checker-menu">
            <label for="checker-menu" class="checker-menu-label">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <div class="slide-menu">
                <div class="background"></div>
                <ul class="container-slide-menu">
                    <li class="item-menu"><a href="/" class="link-menu">Home</a></li>
                    <li class="item-menu"><a href="/" class="link-menu">Services</a></li>
                    <li class="item-menu"><a href="/" class="link-menu">Work</a></li>
                    <li class="item-menu"><a href="/" class="link-menu">About</a></li>
                    <li class="item-menu">
                        <div class="mobile-contact">
                            <div class="phone-block">
                                <a href="tel:01666693456" class="link-phone d-flex j-c-between a-center no-wrap">
                                    <svg class="icon-phone" width="18" height="29" viewBox="0 0 18 29" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6 5.4V18.9H5.4V5.4H12.6ZM15.3 0H2.7C1.20938 0 0 1.20938 0 2.7V26.1C0 27.5906 1.20938 28.8 2.7 28.8H15.3C16.7906 28.8 18 27.5906 18 26.1V2.7C18 1.20938 16.7906 0 15.3 0ZM2.7 27C2.205 27 1.8 26.595 1.8 26.1V2.7C1.8 2.205 2.205 1.8 2.7 1.8H15.3C15.795 1.8 16.2 2.205 16.2 2.7V26.1C16.2 26.595 15.795 27 15.3 27H2.7ZM13.725 3.6H4.275C3.90375 3.6 3.6 3.90375 3.6 4.275V20.025C3.6 20.3963 3.90375 20.7 4.275 20.7H13.725C14.0962 20.7 14.4 20.3963 14.4 20.025V4.275C14.4 3.90375 14.0962 3.6 13.725 3.6ZM11.025 23.4H6.975C6.60375 23.4 6.3 23.7038 6.3 24.075V24.525C6.3 24.8963 6.60375 25.2 6.975 25.2H11.025C11.3962 25.2 11.7 24.8963 11.7 24.525V24.075C11.7 23.7038 11.3962 23.4 11.025 23.4Z"
                                              fill="#30233D"/>
                                    </svg>
                                    <span class="content-phone-block nav">(01) 666 - 693 - 456</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>
<div id="content">
    <div class="banner-block">
        <div class="background-color"></div>
        <div class="container d-flex f-column j-c-center h-100">
            <h2 class="title-banner">Our team</h2>
            <div class="desc-banner title-l">We build great business</div>
        </div>
    </div>
