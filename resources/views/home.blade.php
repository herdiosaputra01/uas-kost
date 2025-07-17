@extends('layouts.template')

@section('title', 'Home - Galeri Foto')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center text-primary fw-bold">Galeri Foto Kost</h2>

    <div class="row g-4">
        @php
            $photos = [
                ['src' => '02.jpg', 'caption' => 'Teras Kamar'],
                ['src' => '01.jpg', 'caption' => 'Tampak Depan Kost'],
                ['src' => '03.jpg', 'caption' => 'Kamar 1.3'],
                ['src' => '05.jpg', 'caption' => 'Lantai 2'],
                ['src' => '08.jpg', 'caption' => 'Parkiran'],
                ['src' => '06.jpg', 'caption' => 'Lantai 3'],
            ];
        @endphp

        @foreach ($photos as $photo)
        <div class="col-sm-6 col-md-4">
            <div class="card border-0 shadow rounded-4 overflow-hidden h-100">
                <div class="img-hover-zoom">
                    <img src="{{ asset('dist/img/' . $photo['src']) }}" class="card-img-top object-fit-cover" style="height: 200px;" alt="{{ $photo['caption'] }}">
                </div>
                <div class="card-body text-center">
                    <h6 class="card-title text-dark fw-semibold mb-0">{{ $photo['caption'] }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .img-hover-zoom {
        overflow: hidden;
        position: relative;
    }
    .img-hover-zoom img {
        transition: transform 0.5s ease;
    }
    .img-hover-zoom:hover img {
        transform: scale(1.1);
    }
</style>
@endsection


{{-- @extends('layouts.template')

@section('title', 'Home - Galeri Foto')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Galeri Foto Kost</h2>
    <div class="row">
        @php
            $photos = [
                ['src' => '02.jpg', 'caption' => 'Teras Kamar'],
                ['src' => '01.jpg', 'caption' => 'Kost'],
                ['src' => '03.jpg', 'caption' => 'Kamar 1.3'],
                ['src' => '05.jpg', 'caption' => 'Lantai 2'],
                ['src' => '08.jpg', 'caption' => 'Parkiran'],
                ['src' => '06.jpg', 'caption' => 'Lantai 3'],
            ];
        @endphp

        @foreach ($photos as $photo)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('dist/img/' . $photo['src']) }}" style="height: 150px; overflow: hidden;" class="card-img-top" alt="{{ $photo['caption'] }}">
                <div class="card-body text-center">
                    <h6 class="card-title">{{ $photo['caption'] }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection --}}
