@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($images as $k => $v)
                <div class="col-4">
                        <div class="font-weight-bold">Main Image {{ $k + 1 }}</div>
                        <img class="img-fluid"
                             src="{{ $v }}"
                             alt="main image {{ $k }}"
                        />
                        <input type="file"
                               name="main_image_{{ $k }}"
                               accept="image/jpeg"
                        />
                </div>
            @endforeach
        </div>
    </div>
@endsection
