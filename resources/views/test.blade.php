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

    <style>
        A[href=""],
        A[href="#"] {
            display: none;
        }

        .content {
            border: solid black 1px;

        }

        .media {
            height: 50px;
            width: 50px;
            background-color: black
        }

        header {
            height: 30vh;
            width: 100vw;
            background-color: black
        }

        footer {
            height: 30vh;
            width: 100vw;
            background-color: black
        }
    </style>


</head>

<body>
    <header>
        <h2>header</h2>
    </header>
    <main>
        <div class="container">
            <h2>分店地圖</h2>
            <div class="row">

                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="content">
                        <h2>一號店</h2>
                        <p>地址:xxx路xx號</p>
                        <p>電話:09xx-xxx-xxx</p>
                        <a href="" target="_blank" alt="none" data-linkid="1" class="link">
                            <div class="media" data-linkid="1"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="content">
                        <h2>二號店</h2>
                        <p>地址:xxx路xx號</p>
                        <p>電話:09xx-xxx-xxx</p>
                        <a href="https://www.google.com.tw/" target="_blank" alt="none" data-linkid="2" class="link">
                            <div class="media" data-linkid="2"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="content">
                        <h2>三號店</h2>
                        <p>地址:xxx路xx號</p>
                        <p>電話:09xx-xxx-xxx</p>
                        <a href="https://www.google.com.tw/" target="_blank" alt="none" data-linkid="3" class="link">
                            <div class="media" data-linkid="3"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="content">
                        <h2>四號店</h2>
                        <p>地址:xxx路xx號</p>
                        <p>電話:09xx-xxx-xxx</p>
                        <a href="https://www.google.com.tw/" target="_blank" alt="none" data-linkid="4" class="link">
                            <div class="media" data-linkid="4"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <h3>
            footer
        </h3>
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
        if ($(this).attr('href') != '') {
    $(this).hide();
    } else {
    $(this).show();
    }

    </script>
</body>

</html>