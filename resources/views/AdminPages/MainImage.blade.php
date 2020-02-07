@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($images as $k => $v)
                <div class="col-4">
                        <div class="font-weight-bold">Main Image {{ $k + 1 }}</div>
                        <img class="img-fluid" src="{{ $v }}">
                        <input type="file">
                </div>
            @endforeach
        </div>
    </div>
@endsection
