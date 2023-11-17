@extends('landing.userApp')

@section('title', 'Detail Jurusan')

@section('content')
    <section id="major-detail">
        <div class="container mt-5">
            <div class="major-item text-center">
                <h3 class="mb-4">{{ $majorDetail->name }}</h3>
                <img src="{{ asset('storage/majors/' . $majorDetail->image) }}" class="img-fluid" alt="">
            </div>
            <div class="text-justify mt-5">
                {!! $majorDetail->description !!}
            </div>
        </div>
    </section>
@endsection
