    @include('Header')
    <body>
        @include('Navbar')

        <div class="isiblog">
            <div class="wrapperisi">

            <h1>{{ $post->title }}</h1>

            <img src="{{ asset('storage/images/' . $post->image) }}" alt="Blog Cover/Error">

                <div class="infoblog">
                    <p><span id="identitasblog">Writer :</span><span id="yangnulis"> {{ $post->user->name }}</span></p>
                    
                    <p><span id="identitasblog">Date :</span> {{ $post->created_at }}<span id="tanggal"></span></p>
                </div>

                <div class="blognya">
                    <p id="textblog">{{ $post->textblog }}</p>
                </div>
            </div>
        </div>

        @include('Footer')


    </body>
    </html>
