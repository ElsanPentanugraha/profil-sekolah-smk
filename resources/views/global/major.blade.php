@extends('landing.userApp')

@section('title', 'Jurusan')

@section('content')
    <div class="majors mt-4">
        <div class="container">
            <h2>Program Keahlian</h2>
            @foreach ($majors as $major)
                <div class="card major-items mb-3 ">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/majors/' . $major->image) }}" class="img-fluid rounded-start"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body desc-major-items">
                                <a href="{{ url('/major', $major->id) }}" class="card-title">
                                    <h5>{{ $major->name }}</h5>
                                </a>
                                <p class="card-text">{!! Str::limit($major->description, 500) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
