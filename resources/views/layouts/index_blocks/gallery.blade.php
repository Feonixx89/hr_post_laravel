<style>
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
</style>
<div class="container">
    <h1 class="text-center m-5">Галерея</h1>
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_01.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_01_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_02.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_02_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_03.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_03_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_03.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_03_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_02.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_02_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_01.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_01_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_02.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_02_big.jpg') }}" alt="...">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 thumb">
            <a data-fancybox="gallery" href="{{ asset('images/test_gallery/img_03.jpg') }}">
                <img class="img-fluid" src="{{ asset('images/test_gallery/img_03_big.jpg') }}" alt="...">
            </a>
        </div>
    </div>
</div>
