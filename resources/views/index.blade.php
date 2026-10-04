@extends('layouts.app')

@section('title')
    <title>FashionablyLate</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="top mb150">
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
    <div class="top__mv">
        <video src="{{ asset('video/top.mp4') }}" loop autoplay muted></video>
    </div>
    <div class="top__txt">
        <h2 class="sub__ttl">About</h2>
        <h2 class="top__h2">あえて少しだけ遅れて、自分らしく。</h2>
        <p>
        FashionablyLateは、余裕を愛する人のための<br>
        ライフスタイルブランドです。
        </p>
    </div>
</div>

<div class="swiper mySwiper mb150 w1200">
    <h2 class="sub__ttl txt-center">Prologue</h2>
    <p class="txt-center">急がないから、見える景色がある。 自分らしく、遅れよう。</p>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide__img-set">
                <div class="slide__photo-person">
                    <img src="{{ asset('img/scene1.jpg') }}" alt="">
                </div>
                <div class="slide__photo-landscape">
                    <img src="{{ asset('img/landscape1.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide__img-set">
                <div class="slide__photo-person">
                    <img src="{{ asset('img/scene2.jpg') }}" alt="">
                </div>
                <div class="slide__photo-landscape">
                    <img src="{{ asset('img/landscape2.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide__img-set">
                <div class="slide__photo-person">
                    <img src="{{ asset('img/scene3.jpg') }}" alt="">
                </div>
                <div class="slide__photo-landscape">
                    <img src="{{ asset('img/landscape3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product mb150">
    <h2 class="sub__ttl pd25">Products</h2>
    <div class="product__item mb150">
        <div class="product__main">
            <img src="{{ asset('img/shirt1.png') }}" alt="">
        </div>
        <div class="product__bottom">
            <div class="product__sub">
                <div><img src="{{ asset('img/shirt2.jpg') }}" alt=""></div>
                <div><img src="{{ asset('img/shirt3.jpg') }}" alt=""></div>
            </div>
            <div class="product__description">
                <h2>Shirt</h2>
                <p>お気に入りのTシャツを着るように、もっと自由に、もっとカジュアルにシャツを楽しみましょう。定番の白シャツから、遊び心のあるオーバーサイズ、季節を彩るカラーシャツまで豊富にラインナップ。</p>
                <a href="./" class="btn">view more</a>
            </div>
        </div>
    </div>

    <div class="product__item mb150">
        <div class="product__main main2">
            <img src="{{ asset('img/jacket1.jpg') }}" alt="">
        </div>
        <div class="product__bottom product__reverse">
            <div class="product__description">
                <h2>Jacket</h2>
                <p>トレンドに左右されず、ワードローブに1着は持っておきたい大人のカジュアルジャケットです。</p>
                <a href="./" class="btn">view more</a>
            </div>
            <div class="product__sub sub2">
                <div><img src="{{ asset('img/jacket2.jpg') }}" alt=""></div>
                <div><img src="{{ asset('img/jacket3.jpg') }}" alt=""></div>
            </div>
        </div>
    </div>

    <div class="product__item mb150">
        <div class="product__main main3">
            <img src="{{ asset('img/Bottoms1.jpg') }}" alt="">
        </div>
        <div class="product__bottom">
            <div class="product__sub">
                <div><img src="{{ asset('img/Bottoms2.jpg') }}" alt=""></div>
                <div><img src="{{ asset('img/Bottoms3.jpg') }}" alt=""></div>
            </div>
            <div class="product__description">
                <h2>Bottoms</h2>
                <p>ラインの美しさと、1日中穿いていても疲れない快適さを両立したボトムスコレクション。「体型をきれいに見せたい」「動きやすさも妥協したくない」そんなあなたの日常に寄り添う、コーディネートの主役になるボトムスをお届けします。</p>
                <a href="./" class="btn">view more</a>
            </div>
        </div>
    </div>
</div>

<div class="pickup mb150 w1200">
    <h2 class="sub__ttl txt-center">Pick up</h2>
    <div class="pickup__flex">
        <div class="pickup__card">
            <div class="pickup__img">
                <a href="https://blue855385.studio.site/posts/the-modern-website" target="_blank"><img src="{{ asset('img/pickup1.jpg') }}" alt=""></a>
            </div>
            <div class="pickup__content">
                <div class="pickup__border"></div>
                <h2 class="pickup__content-h2 txt-center">
                    FASHION
                </h2>
                <p class="pickup__content-txt">
                    オフィススタイルに「私というスパイス」を
                </p>
            </div>
        </div>
        <div class="pickup__card">
            <div class="pickup__img">
                <img src="{{ asset('img/pickup2.jpg') }}" alt="">
            </div>
            <div class="pickup__content">
                <div class="pickup__border"></div>
                <h2 class="pickup__content-h2 txt-center">
                    FASHION
                </h2>
                <p class="pickup__content-txt">
                    トレンドに左右されない、ユニークなデザインのTシャツ
                </p>
            </div>
        </div>
        <div class="pickup__card">
            <div class="pickup__img">
                <img src="{{ asset('img/pickup3.jpg') }}" alt="">
            </div>
            <div class="pickup__content">
                <div class="pickup__border"></div>
                <h2 class="pickup__content-h2 txt-center">
                    WORLD SNAP
                </h2>
                <p class="pickup__content-txt">
                    ブルーワンピースコーデはゆったりデザインでシルエットを美しく
                </p>
            </div>
        </div>
    </div>
</div>

<div class="contact mb150 w1200">
    <div class="contact__description txt-center">
        <h2 class="sub__ttl">Contact</h2>
        <p>ご依頼やご相談については、お電話・お問い合わせフォームより、お気軽にお問い合わせください。</p>
    </div>
    <div class="contact__flex">
        <div><a href="/contact" class="btn" target="_blank">Contact Form</a></div>
        <div class="contact__tel">
            <span class="contact__tel-span">TEL</span>
            <a href="tel:000000000">000000000</a>
        </div>
    </div>
</div>

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

@endsection

@section('script')
<!-- テキストアニメーション -->
<script>
window.addEventListener("scroll", () => {
    const target = document.querySelector(".top");
    // スクロール量が 50px を超えたらクラスを追加
    if (window.scrollY > 50) {
        target.classList.add("is-active");
    } else {
        target.classList.remove("is-active");
    }
});
</script>

<!-- スライドショー -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,               // 無限ループ
            effect: "fade",
            fadeEffect: {
                crossFade: true // これを追加：スライドが重なるのを防ぐ
            },          // フェードで切り替え（余裕を演出）
            speed: 1500,              // 切り替えにかかる時間（1.5秒）
            autoplay: {
                delay: 4000,          // 4秒ごとに自動再生
                disableOnInteraction: false,
            },
        });
</script>

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
@endsection
