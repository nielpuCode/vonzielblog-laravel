@include('Header')
<body>
    @include('Navbar')

    {{-- For user cannot right click --}}
    <div class="Myself" oncontextmenu="return false" onmousedown='return false;' onselectstart='return false;'>
        @foreach ($allProfile as $myProfile)
        <div class="biografiTeks">
            <h3>{{ $myProfile->profileName }}</h3>
            <h1>{{ $myProfile->profileJob }}</h1>
            <p>{{ $myProfile->profileDesc }}</p>
        </div>

        <div class="profilePic">
            <img src="{{ asset('storage/images/' . $myProfile->profilePic) }}" alt="Author Picture">
        </div>
        @endforeach
    </div>

    {{-- Project Gallery --}}
    <div class="Allproject" data-aos="zoom-in">
        <h1>Portfolio Projects</h1>
        <div class="mywork">
            @auth
                @php
                    $username = auth()->user()->name;
                @endphp

                @if($username === 'Daniel Maheswara Wicaksono')
                    @foreach ($allProject as $theProject)
                        <div id="firstwork" class="infobox">
                            <img src="{{ asset('storage/images/' . $theProject->imageProject) }}" alt="No Internet" />

                            <a target="_blank" rel="noreferrer" href="{{ $theProject->projectLink }}">{{ $theProject->projectTitle }}</a>
                            <p>{{ $theProject->projectDesc }}</p>

                            <form action="/DeleteProject/{{ $theProject->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Delete this blog" style="color: blue"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    @endforeach

                @else
                    @foreach ($allProject as $theProject)
                        <div id="firstwork" class="infobox">
                            <img src="{{ asset('storage/images/' . $theProject->imageProject) }}" alt="No Internet" />

                            <a target="_blank" rel="noreferrer" href="{{ $theProject->projectLink }}">{{ $theProject->projectTitle }}</a>
                            <p>{{ $theProject->projectDesc }}</p>
                        </div>
                    @endforeach
                @endif
            @else
                @foreach ($allProject as $theProject)
                    <div id="firstwork" class="infobox">
                        <img src="{{ asset('storage/images/' . $theProject->imageProject) }}" alt="No Internet" />

                        <a target="_blank" rel="noreferrer" href="{{ $theProject->projectLink }}">{{ $theProject->projectTitle }}</a>
                        <p>{{ $theProject->projectDesc }}</p>
                    </div>
                @endforeach
            @endauth
        </div>
    </div>

    <div class="My-skill" data-aos="zoom-in">
        <h1>My Ability <i class="fa-solid fa-code"></i></h1>
        <div class="scrollSkill">
            @for ($i = 1; $i <= 1; $i++)
            <div class="theSkill">
                <h3>Web Developer</h3>

                <div class="detailSkill">
                    <p><i class="fa-brands fa-laravel"></i> Laravel</p>
                    <p><i class="fa-brands fa-react"></i> ReactJS</p>
                    <p>Tailwind CSS</p>
                    <p><i class="fa-solid fa-database"></i> MySQL</p>
                    <p><i class="fa-brands fa-sass"></i> SCSS/SASS</p>
                </div>
            </div>

            <div class="theSkill">
                <h3>App Developer</h3>

                <div class="detailSkill">
                    <p><i class="fa-brands fa-react"></i> React Native</p>
                    <p>tailwindCSS</p>
                </div>
            </div>
            @endfor
        </div>
    </div>

    {{-- Education Licenses --}}
    <div class="container-education" data-aos="zoom-in">
        <h3><span>Education</span> & <span>Certification</span></h3>
        <div class="education">
            @foreach ($allEducation as $theEdu)
                <a href="{{ $theEdu->linkEdu }}">
                    <div class="sertif-box">
                        <img src="{{ asset('storage/images/' . $theEdu->iconEdu) }}" alt="No Internet">

                        <div class="sertif-name">
                            <h1>{{ $theEdu->titleEdu }}</h1>
                            <p>{{ $theEdu->nameEdu }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="school-history">
            <h1>State Junior High School 36 Bekasi City</h1>
            <h1>Al Azhar 18 Grandwisata Islamic High School</h1>
            <h1>President University</h1>
        </div>
    </div>


    {{-- Contact Me Page --}}
    <div class="container-contact" data-aos="zoom-in">
        <h1>Contact Me</h1>
        <div class="contact-me">
            <div class="symbol-contact">

                <img src="{{ asset('img/vonziellogo.png') }}" alt="">

                <h3>Daniel Maheswara</h3>
                <p>Full Stack Developer</p>

                <div class="detail-contact">
                    <a target="_blank" href="https://www.linkedin.com/in/daniel-maheswara-wicaksono-1982ab247/"><i class="fa-brands fa-linkedin"></i></a>
                    <a target="_blank" href="https://www.instagram.com/danielmw101/?hl=id&theme=dark"><i class="fa-brands fa-instagram"></i></a>
                    <a target="_blank" href="https://github.com/nielpuCode"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>

            <form>
                <input type="text" name="name" placeholder="What is your name?" required>
                <input type="email" name="email" placeholder="What is your email?" required>
                <input type="text" name="purpose" placeholder="What is your purpose?">
                <textarea name="message" placeholder="Your Message Here..." required></textarea>
                <button type="submit">Send Message</button>

            </form>

        </div>
    </div>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("gZGsjgABJm2J1qBe4");
        })();
    </script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            emailjs.sendForm('service_danc15r', 'template_jrq4lym', this).then(function(response) {
                console.log('Email sent!', response.status, response.text);
            }, function(error) {
                console.error('Email error:', error);
            });
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    @include('Footer')

</body>
</html>
