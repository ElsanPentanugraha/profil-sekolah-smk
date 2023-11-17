@extends('landing.userApp')

@section('title', 'Galeri')

@section('content')
    <section id="gallery">
        <div class="galleries mt-5 mb-4">
            <div class="container">
                <h2 class="text-center">Galeri</h2>
                <div class="row mt-4">
                    @foreach ($photos as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <img src="{{ asset('storage/gallery/' . $item->image) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <a class="card-text">{{ $item->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
