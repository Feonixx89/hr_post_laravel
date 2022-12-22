@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')

    @parent

@endsection

@section('container')

    @parent

    <form class="p-4 p-md-5 border rounded-3 bg-light">

        <div class="mb-3">
            <label for="programName"></label>
            <input type="text" class="form-control" id="programName" placeholder="Введите наименование программы" value="" required="" name="programName">
        </div>

        <div class="mb-3">
            <label for="programDescriptionId"></label>
            <textarea id="programDescriptionId" name="programDescription">Введите текст для редактирования</textarea>
        </div>

        <button class="btn btn-sm btn-outline-info w-100" id="btnSendDescriptionProgram" type="button" data-route="{{ route('sendDescriptionProgram') }}">
            Сохранить
        </button>

    </form>

@endsection

@section('footer')

    @parent

@endsection
