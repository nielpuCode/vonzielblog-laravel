@include('Header')

<body>
    @include('Navbar')

    <div class="container-login">
        <div class="estetic-form">
            <img src="{{ asset('img/vonziellogo.png') }}" alt="Vonziel Logo" class="spin">
        </div>

        <div class="loginForm">

            <h1>Create Account</h1>
            <p>Get started by creating your new account</p>

            <form action="/Registered" method="POST">
                @csrf
                <input type="text" placeholder="Username" name="registerUsername">

                <input type="email" placeholder="Email" name="registerEmail">

                <input type="password" placeholder="Password" name="registerPassword">

                <button>Register!</button>
            </form>
        </div>
    </div>

    @include('Footer')

    <script>
        @if (session('error'))
            alert('{{ session('error') }}');
        @endif
    </script>


</body>
</html>
