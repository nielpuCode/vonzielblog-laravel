@include('Header')

<body>

    @include('Navbar')

    <div class="creatediv">
        <form action="/DoneEdit/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- method PUT is for update --}}
            @method('PUT')
            <input name="title" id="inputtitle" type="text" placeholder="Title Here" title="The title of your post" required value="{{ $post->title }}">

            <input name="shortdesc" id="inputdesc" type="text" placeholder="Short Description" title="Create a short description for your writing!" required value="{{ $post->shortdesc }}"">

            <button name="tambah" type="submit" >Save Change!</button>

            <br>

            <textarea name="textblog" id="textblog" cols="0" rows="24" placeholder="Just write whatever comes to your mind here!" required>{{ $post->textblog }}</textarea>
        </form>
    </div>

    @include('Footer')

</body>
</html>
