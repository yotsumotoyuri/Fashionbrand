# FashionablyLate - ファッションブランドサイト
「あえて少しだけ遅れて、自分らしく。」をコンセプトにした、架空のライフスタイルブランド「FashionablyLate」のファッションブランドサイトです。
本プロジェクトはポートフォリオとして制作しました。

## 使用技術(実行環境)
- サーバーサイド: Laravel 10.x (PHP 8.x)
- フロントエンド: HTML5, CSS3, JavaScript (Vanilla JS), Swiper.js
- インフラ: Docker / Laravel Sail
- 認証: Laravel Fortify（ログイン・会員登録機能の基盤として使用）

## 実装における注力ポイント
- レスポンシブデザインの完全対応:
  - PC/タブレット/スマホそれぞれのデバイスに最適化したレイアウト。
  - スマホ時には専用のハンバーガーメニューを実装。
- JavaScriptによるインタラクション:
  - スクロール検知による is-active クラスの付与で、CSSアニメーションをトリガー。
  - Swiper.js のカスタマイズ（フェードエフェクト、自動再生、レスポンシブな画像比率の調整）。
- CSS設計:
  - アスペクト比（aspect-ratio）を保持した画像配置により、画像が崩れない柔軟なコーディング。
  - ホバーエフェクト（ボタン、画像ズーム）による操作感の向上。

## ページ構成
1. トップページ (Main Showcase): ブランド紹介・プロダクト一覧・ピックアップ。
2. お問い合わせフォーム: 入力・確認・送信完了のフロー。
3. 認証ページ: ログイン・会員登録（Fortifyによるバリデーション実装）。
4. 管理画面: お問い合わせ一覧の確認（要ログイン）。

## セットアップ（初回のみ）
1. `cp .env.example .env`
2. `composer install` （またはDocker経由のインストール）
3. `./vendor/bin/sail up -d`
4. `./vendor/bin/sail artisan key:generate`
5. `./vendor/bin/sail artisan migrate:fresh --seed`

## 起動・動作確認
1. ターミナルで `./vendor/bin/sail up -d` を実行。
2. ブラウザで [http://localhost/](http://localhost/) にアクセス。
3. 管理画面を試す場合は、/register からユーザーを作成するか、シーダーで作成されたテストユーザー（設定している場合）でログインしてください。

## 画面イメージ
- トップページ
    ![画面](img/top_screen.png)