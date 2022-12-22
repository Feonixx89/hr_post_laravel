@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')

    @parent

@endsection

@section('container')

    @parent
    @php($program = \App\Models\Programs::find($_GET)[0])
    <h1 class="text-center"> {{ $program->name }} </h1>

    <hr>

    {!! $program->description !!}
@endsection

@section('footer')

    @parent

@endsection
