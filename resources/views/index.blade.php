@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')
    @parent
    @include('layouts.index_blocks.info');
    @include('layouts.index_blocks.our_team');
    @include('layouts.index_blocks.studying_programs');
    @include('layouts.index_blocks.about');
    @include('layouts.index_blocks.representatives');
    @include('layouts.index_blocks.feedback');
@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection
