@extends('layouts.app')

@section('title')
    <title>FashionablyLate</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jacket.css') }}">
@endsection

@section('content')
    <div class="jacket__slideshow-container mb100">
        <div class="jacket__slide active"><img src="{{ asset('img/jacket_slide1.jpg') }}" alt=""></div>
        <div class="jacket__slide"><img src="{{ asset('img/jacket_slide2.jpg') }}" alt=""></div>
        <div class="jacket__slide"><img src="{{ asset('img/jacket_slide3.jpg') }}" alt=""></div>
        <div class="jacket__slide"><img src="{{ asset('img/jacket_slide4.jpg') }}" alt=""></div>
    </div>

    <div class="jacket__detail w1200 mb150">
        <h2 class="jacket__detail-ttl txt-center">Jacketは、素材・裏地・サイズで選ぶ</h2>
        <p>育てる楽しさがある一生もののレザーか、軽快でタフに日常を彩るテキスタイルか。リッチな袖通しを叶えるサテン・キルトか、衣服内を常に快適に保つ高通気なメッシュか。身体に寄り添うタイトめなレザーか、美しいレイヤードを作る余裕のあるテキスタイルか。</p>
    </div>

    <div class="jacket__split mb150">
        <div class="jacket__column jacket__column-left">
            <div class="jacket__track">
                <img src="{{ asset('img/split_left1.jpg') }}" alt="">
                <img src="{{ asset('img/split_left2.jpg') }}" alt="">
                <img src="{{ asset('img/split_left3.jpg') }}" alt="">

                <img src="{{ asset('img/split_left1.jpg') }}" alt="">
                <img src="{{ asset('img/split_left2.jpg') }}" alt="">
                <img src="{{ asset('img/split_left3.jpg') }}" alt="">
            </div>
        </div>
        <div class="jacket__column jacket__column-right">
            <div class="jacket__track">
                <img src="{{ asset('img/split_right1.jpg') }}" alt="">
                <img src="{{ asset('img/split_right2.jpg') }}" alt="">
                <img src="{{ asset('img/split_right3.jpg') }}" alt="">

                <img src="{{ asset('img/split_right1.jpg') }}" alt="">
                <img src="{{ asset('img/split_right2.jpg') }}" alt="">
                <img src="{{ asset('img/split_right3.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="jacket__category w1200 mb150">
        <div class="jacket__tab">
            <button class="jacket__tab-btn" data-tab="women">Women’s</button>
            <button class="jacket__tab-btn" data-tab="men">Men’s</button>
            <button class="jacket__tab-btn" data-tab="unisex">Unisex’s</button>
        </div>

        <div class="jacket__content">
            <div class="jacket__item active" id="women">
                <h2 class="sub__ttl">Leather jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_women1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_women2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                                <img src="{{ asset('img/leather_women3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="sub__ttl">Textile jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_women1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                                <img src="{{ asset('img/textile_women2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                                <img src="{{ asset('img/textile_women3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>S</div>
                                <div>M</div>
                                <div>L</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jacket__item active" id="men">
                <h2 class="sub__ttl">Leather jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_men1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_men2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_men3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="sub__ttl">Textile jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_men1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_men2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_men3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>LL</div>
                                <div>3L</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jacket__item active" id="unisex">
                <h2 class="sub__ttl">Leather jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_unisex1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_unisex2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/leather_unisex3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="sub__ttl">Textile jacket</h2>
                <div class="jacket__item-grid">
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                        <a href="./">
                            <img src="{{ asset('img/textile_unisex1.jpg') }}" alt="">
                        </a>
                        </div>
                        <div class="jacket__item-txt">
                        <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_unisex2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                    <div class="jacket__item-box">
                        <div class="jacket__item-img">
                            <a href="./">
                            <img src="{{ asset('img/textile_unisex3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="jacket__item-txt">
                            <a href="./"><h2>Part Number</h2></a>
                            <p>¥40,000</p>
                            <div class="jacket__item-size">
                                <div>M</div>
                                <div>L</div>
                                <div>XL</div>
                                <div>2XL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const slides = document.querySelectorAll('.jacket__slide');
        let currentIndex = 0;
        const intervalTime = 4000; // 切り替え間隔（4000ms = 4秒）

        function nextSlide() {
            // 現在のスライドから active クラスを削除
            slides[currentIndex].classList.remove('active');
            
            // 次のスライドのインデックスを計算（最後の次は最初に戻る）
            currentIndex = (currentIndex + 1) % slides.length;
            
            // 次のスライドに active クラスを追加
            slides[currentIndex].classList.add('active');
        }

        // 指定した時間ごとに nextSlide 関数を繰り返し実行
        setInterval(nextSlide, intervalTime);
    </script>

    <script>
        document.querySelectorAll('.jacket__tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        // 1. すべてのボタンから 'active' を削除し、クリックしたものに追加
        document.querySelectorAll('.jacket__tab-btn').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // 2. すべてのコンテンツから 'active' を一旦削除
        document.querySelectorAll('.jacket__item').forEach(item => item.classList.remove('active'));

        // 3. クリックしたボタンに対応するIDの要素だけに 'active' を追加
        const tabTarget = button.getAttribute('data-tab');
        document.getElementById(tabTarget).classList.add('active');
    });
});
    </script>
@endsection