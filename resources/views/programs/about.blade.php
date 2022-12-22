@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')

    @parent

@endsection

@section('container')

    @parent

    @dd($program->name)
@endsection

@section('footer')

    @parent

@endsection
