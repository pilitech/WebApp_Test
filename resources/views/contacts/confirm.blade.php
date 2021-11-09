<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ - 確認</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    @php
    $title = '内容確認';
    @endphp

    @extends('layout')

    @section('content')
    <h1 class="text-center mt-2 mb-5">内容確認</h1>
    <div class="container">
      {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前</p>
        <div class="col-sm-8">
          {{ $inputs['name'] }}
        </div>
      </div>
      <input type="hidden" name="name" value="{{ $inputs['name'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">性別</p>
        <div class="col-sm-8">
          {{ $inputs['gender'] }}
        </div>
      </div>
      <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス</p>
        <div class="col-sm-8">
          {{ $inputs['email'] }}
        </div>
      </div>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">郵便番号</p>
        <div class="col-sm-8">
          {{ $inputs['postcode'] }}
        </div>
      </div>
      <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">住所</p>
        <div class="col-sm-8">
          {{ $inputs['address'] }}
        </div>
      </div>
      <input type="hidden" name="address" value="{{ $inputs['address'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">建物名</p>
        <div class="col-sm-8">
          {{ $inputs['building_name'] }}
        </div>
      </div>
      <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">ご意見</p>
        <div class="col-sm-8">
          {{ $inputs['opinion'] }}
        </div>
      </div>
      <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}">

      <div class="text-center">
        <button name="action" type="submit" value="submit" class="btn btn-dark">送信</button>
      </div>
      <div class="text-center">
        <button name="action" type="submit" value="return">修正する</button>
      </div>
      {!! Form::close() !!}
    </div>
    @endsection
  </div>
</body>

</html>