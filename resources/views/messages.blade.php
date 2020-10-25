@extends('layouts.app')

@section('title_doc')Все сообщения @endsection

@section('content')
    <div class="home-text">
        <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->message }}</p>
        </div>
    @endforeach
    </div>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на главной</p>
@endsection


