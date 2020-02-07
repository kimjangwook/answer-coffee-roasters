@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div id="mainImages" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($images as $k => $v)
                            <li data-target="#mainImages"
                                data-slide-to="{{ $k }}"
                                class="{{ $k === 0 ? 'active' : '' }}"
                            ></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($images as $k => $v)
                            <div class="carousel-item {{ $k === 0 ? 'active' : '' }}">
                                <img src="{{ $v }}"
                                     class="d-block w-100"
                                     alt="main image {{ $k }}"
                                />
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#mainImages" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainImages" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
