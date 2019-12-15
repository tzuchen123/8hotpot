<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" media="all">


    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <style>
        /* Underline From Center */
        .hvr-underline-from-center {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            position: relative;
            overflow: hidden;
        }

        .hvr-underline-from-center:before {
            content: "";
            position: absolute;
            z-index: -1;
            left: 51%;
            right: 51%;
            bottom: 0;
            background: #2098D1;
            height: 4px;
            -webkit-transition-property: left, right;
            transition-property: left, right;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .hvr-underline-from-center:hover:before,
        .hvr-underline-from-center:focus:before,
        .hvr-underline-from-center:active:before {
            left: 0;
            right: 0;
        }
    </style>

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
                <!-- logo照片 -->
                <a class="navbar-brand" href="/"></a>
                <h1>8鍋臭臭鍋</h1>
                <button class=" navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item active hvr-underline-from-center ">
                            <a class="nav-link" href="#brand_story">八鍋故事</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#hotpot_introduction">火鍋種類</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#join_us">加盟資訊</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#news">最新消息</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#stores_information">分店資訊</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#media_news">媒體報導</a>
                        </li>
                </div>
            </nav>
        </div>

        <div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img1">Slide 1</div>
                    <div class="swiper-slide img2">Slide 2</div>
                    <div class="swiper-slide img3">Slide 3</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>

    <main>
        <section id="brand_story">
            <div class="container">
                <h2>八鍋故事</h2>
                <div class="content d-flex">
                    <div class="text">
                        <div class="text_1">
                            <h5>品牌精神</h5>
                            <span>8鍋自創品牌成立於2005年，多年來致力於以平價美食、高級享受提供給顧客們</span>
                            <span>我們深信唯有認真深耕，滿足顧客們的需求，才能得到顧客們的喜愛。</span>
                        </div>
                        <div class="text_2">
                            <h5>平價美味</h5>
                            <span>早期只有賣八種湯頭，創辦人一直保持著不斷「創新改革」的精神，更憑藉著自有的專業技術，開發十多種湯頭。</span>
                            <span>除了全台唯一獨創南瓜、香蒜、養生鍋外。也有清膳、麻辣等多種選擇，讓顧客常常吃也不膩。</span>
                        </div>

                    </div>
                    <div class="image"></div>
                </div>

            </div>
        </section>

        <section id="hotpot_introduction">
            <div class="container">
                <h2>獨家鍋物</h2>
                <div class="hot_pot">
                    <div class="image1"></div>
                    <div class="image2"></div>
                    <div class="image3"></div>
                </div>
                <button type="button" class="btn btn-warning hvr-underline-from-center"
                    onclick="window.open('../images/bg-3.jpg')">完整菜單</button>
            </div>
        </section>

        <section id="shops">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        @foreach ($shops as $shop)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$shop->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$shop->phone}}</h6>
                                <p class="card-text">{{$shop->adress}}
                                </p>
                                <a href="{{$shop->media}}" class="card-link">Card link</a>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <section id="join_us">

        </section>
        <section id="news"></section>

        <section id="media_news"></section>
        <section id="contact_us"></section>
    </main>

    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <!-- googlemap -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2DfJCONnoY5ImISjPYE2lyEuNvCMqdh4">
    </script>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


    <script>
        $(document).ready(function () {
            $('.slider').bxSlider();
        });


        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>


</body>

</html>