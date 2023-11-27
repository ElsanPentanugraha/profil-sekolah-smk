@extends('landing.userApp')

@section('title', 'Artikel')

@section('content')
    <div class="container page-information mt-5">
        <div class="row">
            <div class="col-lg-9 col-md-7 col-sm-12">
                <div class="information-posts">
                    <h2>Artikel</h2>
                    @foreach ($informations as $information)
                        <div class="card information-post-items mb-3 ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/image/' . $information->image) }}"
                                        class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="{{ url('/detail-post', $information->id) }}" class="card-title">
                                            <h5>{{ $information->name }}</h5>
                                        </a>
                                        <p class="card-text">{!! Str::limit($information->description, 240) !!}</p>
                                        <p class="card-text"><small
                                                class="text-muted">{{ date('d F Y', strtotime($information->created_at)) }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="my-5">
                    {!! $informations->withQueryString()->links() !!}
                </div>

            </div>
            <div class="col-lg-3 col-md-5 col-sm-12">
                <div class="searchbar-feature">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-search" type="submit">Search</button>
                    </form>
                </div>

                <div class="archives mt-4 px-3">
                    {{-- buat arsip berdasarkan bulan tahun berjalan --}}
                    <h2>Arsip</h2>
                    <div class="archieve-menu">
                        <a href="" class="archieve-link my-3">Pengumuman</a>
                        <a href="" class="archieve-link my-3">Berita</a>
                        <a href="" class="archieve-link my-3">Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
