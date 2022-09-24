<footer>
    <h1 class="text-center">Ario Mochammad Azizhi, 2022</h1>
    <div class="container text-center">
        @foreach($sosmeds as $sosmed)
            <a href="#">
                <img src="{{ asset("assets/homepage/img/bootstrap-icons/$sosmed.svg") }}" alt="{{ucfirst($sosmed)}}">
            </a>
        @endforeach
    </div>
</footer>