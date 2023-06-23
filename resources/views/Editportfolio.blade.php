@include('Header')
<body>

    @include('Navbar')

    <div class="editPortfolio">
        @foreach ($profile as $theProfile)
        <form action="/NewProfile/{{ $theProfile->id }}" method="POST" enctype="multipart/form-data" class="formEdit">
            <h1>Profile Edit</h1></h1>
            @csrf
            {{-- method PUT is for update --}}
            @method('PUT')

            <input type="file" name="profilePic" value="{{ $theProfile->profilePic }}">
            <input type="text" name="profileName" placeholder="top" value="{{ $theProfile->profileName }}">
            <input type="text" name="profileJob" placeholder="middle (proffesion name)" value="{{ $theProfile->profileJob }}">
            <textarea name="profileDesc" placeholder="Self Description">{{ $theProfile->profileDesc }}</textarea>

            <button>Save Profile</button>
        </form>
        @endforeach

        <form action="/NewProject" method="POST" enctype="multipart/form-data" class="formEdit">
            <h1>Project Edit</h1></h1>
            @csrf
            <input type="file" name="imageProject">
            <input type="text" name="projectTitle" placeholder="Project Title">
            <input type="text" name="projectLink" placeholder="Project Link">
            <textarea name="projectDesc" placeholder="Project Description"></textarea>

            <button>Save Project</button>
        </form>

        <form form action="/NewEducation" method="POST" class="formEdit" enctype="multipart/form-data">
            <h1>Education Edit (Image File)</h1>
            @csrf
            <input type="file" name="iconEdu" placeholder="Link image Logo">
            <input type="text" name="titleEdu" placeholder="Title Education/Licenses">
            <input type="text" name="nameEdu" placeholder="Platform Name">
            <input type="text" name="linkEdu" placeholder="Link Education/Certificate">

            <button>Save Education</button>
        </form>

        {{-- <form action="/NewEducation" method="POST" class="formEdit" enctype="multipart/form-data" >
            <h1>Education Edit (Image Link)</h1>
            @csrf
            <input type="text" name="iconEdu" placeholder="Link image Logo">
            <input type="text" name="titleEdu" placeholder="Title Education/Licenses">
            <input type="text" name="nameEdu" placeholder="Platform Name">
            <input type="text" name="linkEdu" placeholder="Link Education/Certificate">

            <button>Save Education</button>
        </form> --}}
    </div>


</body>
</html>
