@extends('landing.userApp')

@section('title', 'Information')

@section('content')
    <section id="information-detail">
        <div class="container mt-5">
            <div class="text-center information-item">
                <h3 class="mb-3">{{ $information->name }}</h3>
                <img src="{{ asset('storage/postimage/' . $information->image) }}" class="img-fluid" alt="">
            </div>
            <div class="text-justify mt-3">
                {!! $information->description !!}
            </div>
            <div class="post-info-selected d-flex justify-content-start mt-1">
                <div class="d-flex">
                    <i class="bi bi-calendar-event px-2"> </i>
                    <p> {{ date('d F Y', strtotime($information->created_at)) }} </p>
                </div>
                <div class="d-flex px-3">
                    <i class="bi bi-person px-2"> </i>
                    <p> {{ $information->write_by }}</p>
                </div>
                <div class="d-flex px-3">
                    <i class="bi bi-tags px-2"></i>
                    @foreach ($information->category as $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
