<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .main-content {
            margin-top: 50px;
        }

        article {
            width: 49%;
            float: left;
            margin-left: 10px;
        }


        .entry-header h2 a,
        .entry-header h6 a {
            text-decoration: none;
            letter-spacing: 0.5px;
        }

        h1 {
            margin: 0 auto;
            text-align: center;
            margin-bottom: 30px;
        }

        .entry-header h2 {
            margin-top: 0;
            font-size: 20px;
        }

        .entry-header h6 {
            color: #00acdf;
            font-weight: 700;
            font-size: 12px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .entry-header h2 {
            font-size: 24px;

        }


        .post-thumb img {
            width: 50%;
            float: left;
            margin: 4px 10px 2px 0px;
        }

        a.more-link {
            font-size: 12px;
            letter-spacing: 1px;
            overflow: hidden;
            padding: 10px 20px;
            text-decoration: none;
            margin: 24px 0 28px;
            display: inline-block;
            color: #00BFF3;
            border: 1px solid #eee;
            transition: all 0.5s;
        }

        a.more-link:hover {
            background: #00BFF3;
            color: #fff;
            border-color: #00BFF3;
        }

        .post {
            background: #fff;
            margin-bottom: 50px;
        }

        .post-content {
            text-align: justify;

        }

        .post .social-share {
            border-top: 1px solid #EEE;
            padding: 15px 0 75px;
        }

        .social-share span a {
            color: #333;
        }

        .social-share-title {
            padding: 9px 0;
            font-style: italic;
            font-size: 13px;
        }

        .social-share span a:hover {
            color: #00BFF3;
            text-decoration: none;
        }

        .post-thumb {
            position: relative;

        }

        .post-thumb:hover .post-thumb-overlay {
            opacity: 1;
        }

        .post-thumb-overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            overflow: hidden;
            transition: all .5s;

        }

        .post-thumb-overlay div {
            color: #fff;
            display: inline-block;
            height: 40px;
            width: 132px;
            border: 1px solid #fff;
            line-height: 40px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            position: relative;
            top: 50%;
            letter-spacing: 1px;
            margin: 5px;
            margin-top: -18px;
            text-transform: uppercase;
        }
        ul {
            list-style: none;
            float: right;
            width: 62%;
    }

        .pagination li {
            float: left;
            padding: 0 10px;
            line-height: 34px;
    }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{route('admin')}}">Admin</a> @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a> @endif
        </div>
        @endif

        <div class="content">

            <h1>Основные новости</h1>
            @foreach ($all as $user)
            <article class="post">
                <div class="post-thumb">
                    <img src="../uploads/{{$user->filename}}" alt="">
                </div>
                <div class="post-content">
                    <header class="entry-header text-center text-uppercase">
                        <h6>Категория: {{$user->category}}</h6>

                        <h2 class="entry-title">{{$user->title}}</h2>
                        <span class="social-share-title pull-left text-capitalize"><?php echo "$user->description" ?></span>

                    </header>
                    <div class="entry-content">
                        <p>
                            <?php echo "$user->content" ?>
                        </p>
                    </div>
                </div>
            </article>
            @endforeach
            {{$all->links()}}
        </div>
    </div>
</body>

</html>
