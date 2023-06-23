@include('Header')
<body class="">

    @include('Navbar')

    <div class="kumpulbox">
        @if(count($thePost) > 0)
            @foreach ($thePost as $allPost)
                <div class="box">
                    <img id="coverimg" src="{{ asset('storage/images/' . $allPost->image) }}" alt="Thumbnail Blog">
                    <div class="infobox">
                        <h1 id="title"><a href="/Viewpost/{{ $allPost->id }}">{{ $allPost['title'] }}</a></h1>
                        <p id="desc" style="font-weight: 500; font-size: 80%; margin: 10px; margin-bottom: 0;">{{ $allPost['shortdesc'] }}</p>
                    </div>
                </div>
            @endforeach
        @else
                <div class="no-post">
                    <p>No Post!</p>
                </div>
        @endif
    </div>

    @include('Footer')


</body>
</html>

