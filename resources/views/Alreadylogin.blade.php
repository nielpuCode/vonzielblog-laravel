@include('Header')
<body>
    @include('Navbar')

    <div class="Already-login">
        <form action="/ProfileChange" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Username" name="editUsername" value="{{ auth()->user()->name }}">
            <input type="email" placeholder="Email" name="editEmail" value="{{ auth()->user()->email }}">
            <input type="password" placeholder="New Password" name="editPassword">
            <button type="submit">Save Change!</button>
        </form>
    </div>


    @include('Footer');

</body>
</html>
