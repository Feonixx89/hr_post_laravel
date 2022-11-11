@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')
    @parent
    @include('info');
    @include('our_team');
    @include('studying_programs');
    @include('about');
    @include('representatives');
    @include('feedback');
@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection
