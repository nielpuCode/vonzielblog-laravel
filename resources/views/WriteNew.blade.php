@include('Header')

<body>

    @include('Navbar')

    <div class="creatediv">
        <form action="/NewPosted" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="postImage" placeholder="Upload Image" required>
            <input name="title" id="inputtitle" type="text" placeholder="Title Here" title="The title of your post" required>

            <input name="shortdesc" id="inputdesc" type="text" placeholder="Short Description" title="Create a short description for your writing!" required>

            <button name="tambah" type="submit" >Save Blog!</button>

            <br>

            <textarea name="textblog" id="textblog" cols="0" rows="24" placeholder="Just write whatever comes to your mind here!" required></textarea>
        </form>
    </div>

    @include('Footer')

</body>
</html>
