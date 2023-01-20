<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>HRPost @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/libs/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vercel.css') }}" rel="stylesheet">

    <!-- fancyBox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{ asset('css/libs/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/libs/owl.theme.default.min.css') }}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .bg-info, .btn-primary, .bg-secondary {
            background-color: rgb(121, 139, 89) !important;
            color: black !important;
            border: none !important;
        }

        .text-info {
            color: rgb(121, 139, 89) !important;
        }

        .thumb img {
            -webkit-filter: grayscale(0);
            filter: none;
            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 5px;
        }

        .thumb img:hover {
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
        }

        .thumb {
            padding: 5px;
        }
        body {
            background: whitesmoke !important;
        }
        .rounded-3 {
            background-color: whitesmoke !important;
        }
    </style>
</head>
<body class="container">
@section('header')
    @include('layouts.main_blocks.header')
@show

@section('container')
    @yield('content')
@show

@section('footer')
    @include('layouts.main_blocks.footer')
@show
<script src="https://kit.fontawesome.com/7a893587e3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>

<!-- fancyBox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $("#slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 250,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        tinymce.init({
            selector: 'textarea#programDescriptionId', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });

        $('#btnSendDescriptionProgram').on('click', function () {
            let route = $(this).data('route'),
                programName = $('#programName').val(),
                programPrice = $('#programPrice').val();
            $.ajax({
                url: route,
                method: 'post',
                dataType: 'json',
                data: {
                    'description': tinyMCE.activeEditor.getContent(),
                    'programName': programName,
                    'programPrice': programPrice
                },
                success: function () {
                    alert('Получилось');
                }
            });
        });
        $('.apply-for-intensive').on('click', function() {
            let data = $(this).parent().parent().find('form').serializeArray(),
                route = $(this).data('route'),
                programName = $(this).data('program-name');
            $.ajax({
                url: route,
                method: 'post',
                data: {
                    data: data,
                    programName: programName
                },
                success: function(result) {
                    console.log(result);
                }
            })
        });
    });
</script>

