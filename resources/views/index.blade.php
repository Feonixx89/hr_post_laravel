@extends('layouts.main')

@section('title', 'Главная')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')
    @include('layouts.content')
@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection
