@extends('layouts.main')

@section('content')
    @livewire('carousel.header-page', ['pageTitle' => $pageTitle])
    <div class="container-fluid">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-8">
                    <div class="row pb-3">
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
                    <div class="col-lg-4 mb-4">
                        @livewire('card.card-blog')
                    </div>
    
                    <div class="col-md-12 mb-4">
                        <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">        
                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                        <div class="input-group">
                            <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Keyword"
                            />
                            <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary"
                                ><i class="fa fa-search"></i
                            ></span>
                            </div>
                        </div>
                        </form>
                    </div>
    
                    <!-- Category List -->
                    <div class="mb-5">
                        <h2 class="mb-4">Categories</h2>
                        <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0"
                        >
                            <a href="">Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0"
                        >
                            <a href="">Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0"
                        >
                            <a href="">Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0"
                        >
                            <a href="">Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0"
                        >
                            <a href="">Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                        </ul>
                    </div>
    
                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded" />
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h2 class="mb-4">Recent Post</h2>
                        <div
                        class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
                        >
                        <img
                            class="img-fluid"
                            src="img/post-1.jpg"
                            style="width: 80px; height: 80px"
                        />
                        <div class="ps-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                            <small class="me-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                            >
                            </div>
                        </div>
                        </div>
                        <div
                        class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
                        >
                        <img
                            class="img-fluid"
                            src="img/post-2.jpg"
                            style="width: 80px; height: 80px"
                        />
                        <div class="ps-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                            <small class="me-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                            >
                            </div>
                        </div>
                        </div>
                        <div
                        class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
                        >
                        <img
                            class="img-fluid"
                            src="img/post-3.jpg"
                            style="width: 80px; height: 80px"
                        />
                        <div class="ps-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                            <small class="me-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                            >
                            <small class="me-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                            >
                            </div>
                        </div>
                        </div>
                    </div>
    
                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-2.jpg" alt="" class="img-fluid rounded" />
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h2 class="mb-4">Tag Cloud</h2>
                        <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                        </div>
                    </div>
    
                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-3.jpg" alt="" class="img-fluid rounded" />
                    </div>
    
                    <!-- Plain Text -->
                    <div>
                        <h2 class="mb-4">Plain Text</h2>
                        Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea
                        est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua
                        et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum
                        dolor, tempor takimata clita sit et elitr ut eirmod.
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection