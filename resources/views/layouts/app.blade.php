<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}?v={{ time() }}">
    @yield('css')
</head>
<body>
    <header class="top-header">
        <h1 class="top-header__logo">
            <a href="./">FashionablyLate</a>
        </h1>

        <button class="top-header__hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="top-nav">
            <ul class="top-nav__list">
                <li><a href="" target="_blank">Home</a></li>
                <li><a href="" target="_blank">About</a></li>
                <li><a href="" target="_blank">Products</a></li>
                <li><a href="" target="_blank">Pick up</a></li>
                <li><a href="/contact" target="_blank">Contact</a></li>
                <li><a href="/register" target="_blank">Register</a></li>
                <li><a href="/login" target="_blank">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')

        <footer class="top-footer">
            <h2 class="top-footer__logo">
                <a href="./">FashionablyLate</a>
            </h2>
            <nav class="footer-nav">
                <ul class="footer-nav__list">
                    <li><a href="" target="_blank">Home</a></li>
                    <li><a href="" target="_blank">About</a></li>
                    <li><a href="" target="_blank">Products</a></li>
                    <li><a href="" target="_blank">Pick up</a></li>
                    <li><a href="/contact" target="_blank">Contact</a></li>
                    <li><a href="/register" target="_blank">Register</a></li>
                    <li><a href="/login" target="_blank">Login</a></li>
                </ul>
            </nav>
        </footer>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        @yield('script')

        <!-- ハンバーガーメニュー -->
        <script>
            const hamburger = document.querySelector('.top-header__hamburger');
            const nav = document.querySelector('.top-nav');

            hamburger.addEventListener('click', function() {
                // ボタンとメニューの両方に is-active クラスをつけ外しする
                hamburger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
            });
        </script>
    </main>
</body>
</html>