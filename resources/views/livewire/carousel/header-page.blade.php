<div>
    <div class="container-fluid bg-primary py-3 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-3 mt-lg-3 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ $pageTitle }}</h1>
                <a href="{{ route('home') }}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ url()->current() }}" class="h5 text-white">{{ $pageTitle }}</a>
            </div>
        </div>
    </div>
</div>
