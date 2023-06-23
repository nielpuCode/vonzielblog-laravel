@include('Header')
<body>
    @include('Navbar')

    @if(session('error'))
        <Script>
            alert('Invalid email or password!')
        </Script>
    @endif

    <div class="container-login" >
        <div class="estetic-form" oncontextmenu="return false">
            <img src="{{ asset('img/vonziellogo.png') }}" alt="">
        </div>

        <div class="loginForm">
            <h1>Hello! Welcome Back</h1>

            <form action="/Logined" method="POST">
                @csrf
                <input type="text" placeholder="Email" name="loginEmail">

                <input type="text" placeholder="Password" name="loginPassword">

                <div class="not-yet-login">
                    <a href="/Register"><span>Create Account!</span></a>

                    <a href="">Forgot Password?</a>
                </div>

                <button>Login</button>
            </form>
        </div>
    </div>

    @include('Footer')


</body>
</html>
