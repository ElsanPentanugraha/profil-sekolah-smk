@extends('landing.userApp')

@section('title', 'Information')

@section('content')
    <div class="container page-information mt-5">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="information-posts">
                    <h2>Pengumuman, Informasi, & Artikel</h2>
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
            <div class="col-lg-3 col-md-12">
                <div class="searchbar-feature">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-search" type="submit">Search</button>
                    </form>
                </div>

                <div class="filter-posts">
                    <h3>Filter berdasarkan</h3>
                    <div class="filter-checks">
                        @foreach ($categories as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $item->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
