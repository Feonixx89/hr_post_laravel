@extends('layouts.main')

@section('container')
    @include('sections.breadcrumb')
{{--    @include('sections.feature')--}}
    @yield('course')
    @include('sections.choose')
    @include('sections.suitable')
    @include('sections.counter')
@endsection
