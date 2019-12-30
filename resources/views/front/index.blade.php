<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>8鍋臭臭鍋</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" media="all">


    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <style>
        /* href="#" (錨點)會回到原網頁， */
        /* 空的連結不會出現！！！！ */
        A[href=""],
        A[href="#"] {
            display: none;
        }

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

        .hvr-float {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .hvr-float:hover,
        .hvr-float:focus,
        .hvr-float:active {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
    </style>

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
                {{-- logo照片，手機板要消失 --}}
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
                            <a class="nav-link" href="#hotpot_introduction">獨家鍋物</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#shops">分店地圖</a>
                        </li>

                    </ul>
                    <a class="navbar-brand" href="/"></a>
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#news">最新消息</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#join_us">加盟專區</a>
                        </li>
                        <li class="nav-item active hvr-underline-from-center">
                            <a class="nav-link" href="#googlemap">總店位置</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img1">所有圖片僅供參考</div>
                    <div class="swiper-slide img2">所有圖片僅供參考 </div>
                    <div class="swiper-slide img3">所有圖片僅供參考 </div>
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
                <div class="row">
                    <div class="col-12 col-md-6 ">
                        {{-- media query 記得寫手機板的高度 --}}
                        <div class="image">所有圖片僅供參考</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text1">
                            <h5>品牌精神</h5>
                            <span>8鍋自創品牌成立於2005年，多年來致力於以平價美食、高級享受提供給顧客們</span>
                            <span>我們深信唯有認真深耕，滿足顧客們的需求，才能得到顧客們的喜愛。</span>
                        </div>
                        <div class="text2">
                            <h5>平價美味</h5>
                            <span>早期只有賣八種湯頭，創辦人一直保持著不斷「創新改革」的精神，更憑藉著自有的專業技術，開發十多種湯頭。</span>
                            <span>除了全台唯一獨創南瓜、香蒜、養生鍋外。也有清膳、麻辣等多種選擇，讓顧客常常吃也不膩。</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="hotpot_introduction">
            <div class="container">
                <h2>獨家鍋物</h2>
                <div class="hot_pot">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide image1">所有圖片僅供參考</div>
                            <div class="swiper-slide image2">所有圖片僅供參考</div>
                            <div class="swiper-slide image3">所有圖片僅供參考</div>
                            <div class="swiper-slide image2">所有圖片僅供參考</div>
                            <div class="swiper-slide image3">所有圖片僅供參考</div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <button type="button" class="btn btn-warning hvr-underline-from-center"
                    onclick="window.open('../images/menu.jpg')">完整菜單</button>
                <h6>各分店價錢可能有約十塊差異，請以現場菜單為準。</h6>

            </div>
        </section>

        <section id="shops">
            <div class="container">
                <h2>分店地圖</h2>
                <div class="row">
                    @foreach ($shops as $shop)
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="content">
                            <h2>{{$shop->name}}</h2>
                            <p>地址:{{$shop->address}}</p>
                            <p>電話:09xx-xxx-xxx</p>
                            <a href="{{$shop->media}}" target="_blank" alt="none" data-linkid="{{$shop->id}}"
                                class="link">
                                <div class="media" data-linkid="{{$shop->id}}"></div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="news">
            <div class="container">
                <h2>最新消息</h2>
                <div class="row">
                    @foreach ($news as $new)
                    <div class="col-12 col-md-6 ">
                        <div class="card" style=" ">
                            <img src="{{asset('/storage/'.$new->image)}}" class="card-img-top" alt="..." 　>
                            <div class="card-body">
                                <h5 class="card-title">{{$new->title}}</h5>
                                <p class="card-text">{{$new->content}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </section>


        <section id="join_us">
            <div class="container">
                <h2>加盟專區</h2>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center ">
                        <div class="text">
                            <span>可洽詢</span>
                            <br>
                            <span> 台灣</span>
                            <span> 0933-496-801</span>
                            <br>
                            <span>台中以南0963-228-338</span>
                            <span>( 張先生 )</span>
                            <br>
                            <span>廣東省</span>
                            <span>400-8013-250(林先生)</span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 d-flex  justify-content-center align-items-center">
                        <button type="button" class="btn btn-danger" id="btn1"
                            onclick="window.open('/join_us', '_blank' ) ">加盟<br>請按我</button>
                    </div>
                </div>

            </div>

            <section id="googlemap">
                <div class="container ">
                    <h2>總店位置</h2>
                    <div class="content ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14460.352881920839!2d121.433942!3d25.03108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd432505ab3608f72!2zOOmNi-aWsOepjuaZguWwmuiHreiHremNiw!5e0!3m2!1szh-TW!2stw!4v1576831568114!5m2!1szh-TW!2stw"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="content">
                        <h5>總店位於新北市新莊區建國一路46號，歡迎蒞臨指導</h5>
                    </div>


                </div>
            </section>
    </main>
    <footer>
        <div class="container">
            <h5>僅為職訓局全端工程師養成班作品使用，不做商業使用。 </h5>
            <h5>如有侵權，煩請來信告知，會以最快速度下架。</h5>

            <ul class="footerbar d-flex">
                <li class="item active hvr-shrink ">
                    <a class="nav-link" href="#brand_story">八鍋故事</a>
                </li>
                <li class="item active hvr-shrink">
                    <a class="nav-link" href="#hotpot_introduction">獨家鍋物</a>
                </li>
                <li class="item active hvr-shrink">
                    <a class="nav-link" href="#shops">分店地圖</a>
                </li>
                <li class="item active hvr-shrink">
                    <a class="nav-link" href="#news">最新消息</a>
                </li>
                <li class="item active hvr-shrink">
                    <a class="nav-link" href="#join_us">加盟專區</a>
                </li>
                <li class="item active hvr-shrink">
                    <a class="nav-link" href="#googlemap">總店位置</a>
                </li>
                <li class="item active hvr-shrink">
                    {{-- <a class="nav-link" href="">聯絡我們</a> --}}
                    <button type="button" class="btn btn-info hvr-float" id="btn2"
                        onclick="window.open('/contact_us', '_blank' ) ">聯絡我們</button>
                </li>

            </ul>



        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <!-- googlemap -->


    <!-- swiper -->
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


    <script>
        $(document).ready(function () {
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
        });

    </script>


</body>

</html>
