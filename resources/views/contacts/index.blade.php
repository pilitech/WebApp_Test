<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</head>

<body>
  <div class="container">
    @php
    $title = 'お問い合わせ';
    @endphp

    @extends('layout')

    @section('content')
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
      {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          {{ Form::text('name', null, ['class' => 'form-control']) }}
          <p style="color:silver">　例）山田　太郎</p>
        </div>
      </div>
      @if ($errors->has('name'))
      <p class="alert alert-danger">{{ $errors->first('name') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">性別<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          <label>{{ Form::radio('gender', "男性",true) }}男性</label>
          <label>{{ Form::radio('gender', "女性") }}女性</label>
        </div>
      </div>
      @if ($errors->has('gender'))
      <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          {{ Form::text('email', null, ['class' => 'form-control']) }}
          <p style="color:silver">　例）test@example.com</p>
        </div>
      </div>
      @if ($errors->has('email'))
      <p class="alert alert-danger">{{ $errors->first('email') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">郵便番号<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          <p>〒　</p>{{ Form::text('postcode', null, array('onKeyUp' => "AjaxZip3.zip2addr(this,'','address','address')"),['class' => 'form-control']) }}
          <p style="color:silver">　例）123-4567</p>
        </div>
      </div>
      @if ($errors->has('postcode'))
      <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">住所<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          {{ Form::text('address', null, ['class' => 'form-control']) }}
          <p style="color:silver">　例）東京都渋谷区千駄ヶ谷1−2−3</p>
        </div>
      </div>
      @if ($errors->has('address'))
      <p class="alert alert-danger">{{ $errors->first('address') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">建物名</p>
        <div class="col-sm-8">
          {{ Form::text('building_name', null, ['class' => 'form-control']) }}
          <p style="color:silver">　例）千駄ヶ谷マンション101</p>
        </div>
      </div>
      @if ($errors->has('building_name'))
      <p class="alert alert-danger">{{ $errors->first('building_name') }}</p>
      @endif

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">ご意見<span style="color:red"> ※</span></p>
        <div class="col-sm-8">
          {{ Form::textarea('opinion', null, ['class' => 'form-control']) }}
        </div>
      </div>
      @if ($errors->has('opinion'))
      <p class="alert alert-danger">{{ $errors->first('opinion') }}</p>
      @endif

      <div class="text-center">
        {{ Form::submit('確認', ['class' => 'btn btn-dark']) }}
      </div>
      {!! Form::close() !!}
    </div>
    @endsection
  </div>
</body>

</html>