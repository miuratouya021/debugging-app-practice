# debugging-app-practice

## 概要

COACHTECH 教材 Tutorial 10-4「デバッグ ハンズオン演習」で作成した成果物です。

Laravelのユーザー登録機能で発生するエラーを調査・修正し、正常にユーザー登録ができるアプリケーションを作成しました。また、ログ出力を使ってリクエストやレスポンスの処理の流れを確認できるようにしました。

## 使用技術

- PHP 8.x
- Laravel 10.x
- MySQL
- Docker/LaravelSail
- デバッグツール（`dd()`, `dump()`, `Log` ファサード）

## 学んだこと

- dd() を使ってフォームから送信されたデータを確認する方法
  -Log::info() を使って処理の実行状況をログファイルに記録する方法

## 動作確認

Laravel Sailを起動する。
http://localhost/users/create にアクセスする。
フォームにユーザー名、メールアドレス、パスワードを入力して登録する。
http://localhost/users に登録したユーザーが表示されることを確認する。
storage/logs/laravel.log を確認し、リクエストとレスポンスのログが記録されていることを確認する。
