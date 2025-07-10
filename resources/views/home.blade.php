@extends('layouts.template')

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
@endsection
