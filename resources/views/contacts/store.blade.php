<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>管理システム</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    @php
    $title = '管理システム';
    @endphp

    @extends('layout')

    @section('content')

    <h3 style="text-align:center; padding:20px 0;">管理システム</h3>
    <form action="{{ url('/store')}}" method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div style="border: 1px solid; margin: 10px 10px; padding:40px 40px;">

        <div class="form-group" style="display:flex;">
          <label>お名前　　　　　</label>
          <input type="text" class="form-control col-md-5" name="name">
        </div>

        <div class="form-group" style="display:flex;">
          <label>性別　　　　</label>
          <input type="radio" name="gender" value="all" class="form-control col-md-1" checked>全て
          <input type="radio" name="gender" value="男性" class="form-control col-md-1">　男性
          <input type="radio" name="gender" value="女性" class="form-control col-md-1">　女性
        </div>

        <div class="form-group" style=display:flex;>
          <label>登録日　　　　　</label>
          <input type="date" class="form-control col-md-5" name="created_at">　〜　<input type="date" class="form-control col-md-5" name="created_at">
        </div>

        <div class="form-group" style=display:flex;>
          <label>メールアドレス　</label>
          <input type="text" class="form-control col-md-5" name="email">
        </div>

        <div style="text-align:center;">
          <button type="submit" class="btn btn-dark col-md-2">検索</button><br>
          <a href="{{ route('store') }}">リセット</a>
        </div>
    </form>

  </div>

  @if(session('flash_message'))
  <div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
  <div style="text-align:right;">
    {{ $items->links() }}
  </div>
  @endif
  <div style="margin-top:50px;">
    <table class="table">
      <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
        <th>　　　</th>

      </tr>
      @foreach($contacts as $contact)
      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->gender}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->opinion}}</td>
        <td>
          <button type="submit" class="btn btn-dark btn-sm py-0">削除</button>
        </td>
  </div>
  </tr>
  @endforeach
  </table>
  </div>
  @endsection