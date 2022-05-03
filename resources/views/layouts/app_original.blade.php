<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>無題ドキュメント</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h1 class="logo"><img src="{{ asset('img/icon_blogger-brands.svg') }}" alt="logo"></h1>
        <ul class="hd_nav">
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">ログアウト</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
        </ul>
    </header>
    @yield('content')
    <footer>
        <p class="copyright">Copyright &copy;  MitsuApp Inc.</p>
    </footer>
<!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>