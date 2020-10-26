@extends('layouts.app')

@section('title_doc')Все сообщения @endsection

@section('content')
    <div class="home-text">
        <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
    </div>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на главной</p>
@endsection


