@extends('landing.userApp')

@section('title', 'Galeri')

@section('content')
    <section id="gallery">
        <div class="galleries mt-5 mb-4">
            <div class="container">
                <h2 class="text-center">Galeri</h2>
                <div class="row mt-4">
                    @foreach ($photos as $item)
                        @foreach (explode(',', $item->image) as $imageName)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <img src="{{ asset('storage/gallery/' . $imageName) }}" class="card-img-top" alt=""
                                        onclick="showImage('{{ asset('storage/gallery/' . $imageName) }}', '{{ $item->name }}')">
                                    <div class="card-body">
                                        <a href="#" class="card-text">{{ $item->name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
