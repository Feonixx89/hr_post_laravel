@extends('layouts.main.main')

@section('content')

    @include('layouts.learning_blocks.start')

    <div class="row mb-2">
        @include('layouts.learning_blocks.promotion');
    </div>

    <div class="row mb-2">
        @include('layouts.learning_blocks.program');
    </div>

    <div class="container">
        @include('layouts.learning_blocks.after_intensive');
    </div>

    <main class="px-3">
        @include('layouts.learning_blocks.contacts');
    </main>

    <div class="container">
        @include('layouts.learning_blocks.intensive');
    </div>

    <div class="row mb-2">
        @include('layouts.learning_blocks.help_in_selection');
    </div>

@endsection
