@extends('layouts.homepage')
@section('title')
    Taylor Swift's Fanpage
@endsection

@section('about')
<h1 class="display-4 text-center">About the Artist</h1>
<div class="container row">
    <div class="col">
        <img src="{{ asset('assets/homepage/img/taylor-caption2.jpg')}}" alt="taylor's picture" style="border-radius: 15px; width: 400px; height: 300px; margin-top: 50px;">
    </div>
    <div class="col">
        <h1 class="text-center">Taylor Swift</h1>
        <p class="text-justify">Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter.
            Her discography spans multiple genres and her narrative songwriting—often inspired by her personal
            life—has received critical praise and widespread media coverage. Born in West Reading, Pennsylvania,
            Swift moved to Nashville, Tennessee at the age of 14 to pursue a career in country music. She signed
            a songwriting contract with Sony/ATV Music Publishing in 2004 and a recording deal with Big Machine
            Records in 2005. Her 2006 self-titled debut studio album made her the first female country artist to
            write or co-write every song on a US platinum-certified album.</p>
    </div>
</div>
@endsection

@section('discography')
<h1 class="display-4 text-center">Discography</h1>
<div class="carousel carousel-dark slide" id="carouselExampleControls" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="cards-wrapper">
                @foreach ($albums_front as $album)
                <div class="card">
                    <div class="image-wrapper">
                        <img src="{{ asset("assets/homepage/img/ts-album/$album.png") }}" class="card-img-top" alt="{{$album}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ucfirst($album)}}</h5>
                        <p class="card-text text-justify">{{ucfirst($album)}} is a studio album by American singer-songwriter Taylor Swift.</p>
                        <a class="btn btn-primary" href="#">Listen on Spotify</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-item">
            <div class="cards-wrapper">
                @foreach($albums_middle as $album)
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{ asset("assets/homepage/img/ts-album/$album.png") }}" class="card-img-top" alt="{{$album}}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ucfirst($album)}}</h5>
                            <p class="card-text text-justify">{{ucfirst($album)}} is a studio album by American singer-songwriter Taylor Swift.</p>
                            <a class="btn btn-primary" href="#">Listen on Spotify</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-item">
            <div class="cards-wrapper">
                @foreach($albums_last as $album)
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{ asset("assets/homepage/img/ts-album/$album.png") }}" class="card-img-top" alt="{{$album}}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ucfirst($album)}}</h5>
                            <p class="card-text text-justify">{{ucfirst($album)}} is a studio album by American singer-songwriter Taylor Swift.</p>
                            <a class="btn btn-primary" href="#">Listen on Spotify</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <button class ="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class ="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
@endsection