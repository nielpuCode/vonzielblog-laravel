@include('Header')
<body>
    @include('Navbar')

    @auth
    <div class="kumpulbox">
        @foreach ($thePost as $myPost)
            <div class="box">
                <div class="tempatgambar">
                    <button type="button" title="Delete this blog" onclick="confirmDelete({{ $myPost->id }})">
                        <i class="fa-solid fa-trash"></i>
                    </button>

                    <a title="Edit this blog" href="/Edited/{{ $myPost->id }}"><i id="iakhir" class="fa-solid fa-pen"></i></a>
                </div>
                <img id="coverimg" src="{{ asset('storage/images/' . $myPost->image) }}" alt="Thumbnail Blog" >

                <div class="infobox">
                    <h1 id="title"><a href="/Viewpost/{{ $myPost->id }}">{{ $myPost['title'] }}</a></h1>
                    <p id="desc" style="font-weight: 500; font-size: 80%; margin: 10px; margin-bottom: 0;">{{ $myPost['shortdesc'] }}</p>
                </div>
            </div>
        @endforeach

        <div class="boxPlus">
            <a href="/WriteNew" title="Create New Blog">
                <img id="coverimg" src="data:image/png;base64,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" alt="Thumbnail Blog">
            </a>
        </div>

    </div>
    @else
    {{-- If not login yet will redirect to login page first --}}
    <?php header("Location: /Login"); exit; ?>

    @endauth

    @include('Footer')

    <script>
        function confirmDelete(postId) {
            var confirmation = confirm("Are you sure you want to delete this post?");
            if (confirmation) {
                deletePost(postId);
                window.location.reload();
            }
        }

        function deletePost(postId) {
            var xhttp = new XMLHttpRequest();
            xhttp.open("DELETE", "/DeletePost/" + postId, true);
            xhttp.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.reload();
                }
            };
            xhttp.send();
        }
    </script>

</body>
</html>
