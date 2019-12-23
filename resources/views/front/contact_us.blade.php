<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body {
            margin: 0 auto;
        }

        .img {
            height: 100px;
            width: 230px;
            background-image: url(../images/logo-sm.png);

        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <div class="img"></div>
        <br>
        <br>

        <form method="POST" action="/contact_us/store">
            @csrf
            <div class="form-group">
                <label for="name">您的大名</label>
                <input type="text" name" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">信箱</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="phone">連絡電話</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}

            <div class="form-group">
                <label for="content">內文</label>
                <textarea class="form-control" id="content" rows="5" name="content"></textarea>
            </div>



            <div class="g-recaptcha" data-sitekey="6LcYuMgUAAAAAMN_XZkgB3dqSSS6NRKMESnpNU0z"></div>

            <br>
            <small id="emailHelp" class="form-text text-muted">感謝您的支持，我們會盡快聯絡您！</small>

            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    {{-- 我不是機器人 --}}

    <script src="https://www.google.com/recaptcha/api.js"></script>

</body>

</html>