<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ - 完了</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="text-center">
    @php
    $title = 'お問い合わせ';
    @endphp

    @extends('layout')

    @section('content')
    <h1 class="text-center mt-2 mb-5">ご意見いただきありがとうございました。</h1>
    <div class="text-center">
      <a href="{{ route('contact') }}" class="btn btn-dark" 　>トップページへ</a>
    </div>
      @endsection
    </div>
</body>

</html>