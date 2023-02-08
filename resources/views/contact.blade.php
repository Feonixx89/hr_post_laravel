@extends('layouts.main')

@section('title', 'Контакты')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')

    @include('sections.breadcrumb')
    @include('sections.location')
    @include('sections.contact')
    @include('sections.counter')

@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection
