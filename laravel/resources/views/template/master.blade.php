<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title','Default Laravel Title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @yield('css')
    <style>
        .cartNumber {
            width: 20px;
            height: 20px;
            line-height: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.create')}}">建立文章</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.index')}}">商品列表</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.create')}}">新增商品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.product')}}">商品管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.create')}}">商品分類管理</a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="#">訪客測試</a>
                    </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item">
                        <a href="/register" class="nav-link">註冊</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">登入</a>
                    </li>
                    @endguest
                    <?php
                        $carts = \App\Models\Cart::where('user_id',Auth::id())->get();
                        $cartNumber = count($carts);
                    ?>
                    <li class="nav-item">
                        <a href="{{route('orderList')}}" class="nav-link">訂單列表</a>
                    </li>
                    <li class="nav-item position-relative">
                        @if($cartNumber > 0)
                        <span class="cartNumber position-absolute bg-danger text-white text-center rounded-circle start-50">
                            {{$cartNumber}}
                        </span>
                        @endif
                        <a href="{{route('cart')}}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                            </svg>
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('登出') }}
                            </a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('main')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
