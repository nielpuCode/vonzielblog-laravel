<div class="navbar" oncontextmenu="return false" onselectstart='return false;'>
    @auth
        @php
            $username = auth()->user()->name;
            $shortName = strlen($username) > 8 ? substr($username, 0, 8) . '...' : $username;
        @endphp

        @if($username === 'Daniel Maheswara Wicaksono')
            <a href="/"><img src="{{ asset('img/logoblog.png') }}" alt="Vonziel Logo"></a>

            <input type="checkbox" class="check" id="check" name="check">

            <ul>
                <li><a href="{{ url('/Allblog') }}">All Blog</a></li>

                <li><a href="{{ url('MyBlog') }}">My Blog</a></li>

                <li>
                    <select name="profile" id="profile">
                        <option value="" disabled selected hidden>Hi, {{ $shortName }}</option>
                        <option value="/Alreadylogin">Edit Profile</option>
                        <option value="/Editportfolio">Edit Portfolio</option>
                        <option value="/logout">Logout</option>
                    </select>
                </li>
            </ul>

            <label class="hamburger" for="check">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </label>
        @else
            <a href="/"><img src="{{ asset('img/logoblog.png') }}" alt="Vonziel Logo"></a>

            <input type="checkbox" class="check" id="check" name="check">

            <ul>
                <li><a href="{{ url('/Allblog') }}">All Blog</a></li>
                <li><a href="{{ url('MyBlog') }}">My Blog</a></li>
                <li>
                    <select name="profile" id="profile">
                        <option value="" disabled selected hidden>Hi, {{ $shortName }}</option>
                        <option value="/Alreadylogin">Edit Profile</option>
                        <option value="/logout">Logout</option>
                    </select>
                </li>
            </ul>

            <label class="hamburger" for="check">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </label>
        @endif
    @else
        <a href="/"><img src="{{ asset('img/logoblog.png') }}" alt="Vonziel Logo"></a>

        <input type="checkbox" class="check" id="check" name="check">

        <ul>
            <li><a href="{{ url('/Allblog') }}">All Blog</a></li>
            <li><a href="{{ url('MyBlog') }}">My Blog</a></li>
            <li><a href="{{ url('Login') }}"><i class="fas fa-user"></i></a></li>
        </ul>

        <label class="hamburger" for="check">
            <i class="fa-sharp fa-solid fa-bars"></i>
        </label>
    @endauth
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var initialOption = $('#profile').val();

        $('#profile').on('change', function() {
            var selectedOption = $(this).val();
            if (selectedOption) {
                window.location.href = selectedOption;
            }
        });

        if (window.location.href === '/Alreadylogin') {
            $('#profile').val(initialOption);
        }
    });

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).width() <= 800) {
                if ($(window).scrollTop() > 100) {
                    $('#check').prop('checked', false);
                    $('ul').hide();
                } else {
                    $('ul').show();
                }
            }
        });
    });

</script>
