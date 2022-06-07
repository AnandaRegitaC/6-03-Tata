@extends('layouts.master')

@section('title', 'Halaman Gallery')

@section('main')
    <h1>Halaman Gallery</h1>
    <div class="row">
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="{{ asset('images/silucuk.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="{{ asset('images/hijabi.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
