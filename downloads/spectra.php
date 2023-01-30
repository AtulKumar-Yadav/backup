<!DOCTYPE html>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/912a1d2112.js" crossorigin="anonymous"></script>
    <title>Spectra - The Activity Club</title>

    <style>
        html {
            scroll-behavior: smooth;

        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            /* width: 100vw; */
            font-family: 'Montserrat', sans-serif;
            background-image: linear-gradient(#00000031, #00000037);
            /* background-image: url(./images/logo.png); */
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            background-attachment: fixed;
        }

        .navbar {
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: teal;
            box-shadow: 1px 1px 5px#444;
            /* position: sticky; */
        }

        .nav-list {
            display: flex;
            padding-right: 20px;
        }

        .nav-list li {
            list-style: none;
            padding: 0 20px;
            font-size: 1.2rem;
            font-weight: 500;
        }

        .nav-list li a {
            text-decoration: none;
            color: #000;
        }

        .nav-list li a:hover {
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        nav .logo {
            padding-left: 20px;
        }

        nav .logo img {
            width: 90px;
            filter: drop-shadow(5px 0px 10px #fff);
        }

        nav .fa-solid {
            display: none;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(images/logo.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 50%;
        }

        header h1 {
            font-size: 10rem;
            letter-spacing: 30px;
            filter: drop-shadow(10px 10px 0 #555);
        }

        header img {
            width: 100%;
            background-attachment: fixed;
            opacity: .8;
        }

        .content {
            margin: 3rem;
        }

        .content h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 18px;
            text-align: justify;
        }

        @media(max-width: 700px) {

            .nav-links ul {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-links {
                position: absolute;
                background: rgb(116, 214, 214);
                height: 100vh;
                width: 250px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }

            nav .fa-solid {
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
            }

            .nav-links ul {
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar background">
        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="nav-links" id="navLinks">
            <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
            <ul class="nav-list">
                <div class="logo">
                    <img src="">
                </div>
                <li><a href="#about">About Spectra</a></li>
                <li><a href="#">Clubs </a></li>
                <li><a href="#">Members</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="contact us/contact.html">Contact Us</a></li>
            </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>

    <header>
        <!-- <img src="./images/logo.png"> -->

    </header>
    <section class="content" id="about">

        <h1>About Spectra</h1>
        <p>
            Only academic excellence alone is not enough along with it extracurricular activities are also very
            important to develop the skills of a student. Keeping this in mind our CSE department always organize
            interactive activities with the intention to promote student's personality traits, interpersonal skills,
            leadership skills and knowledge. To enhance, upgrade and to refine these skills and traits in every student
            our department established SPECTRA - The students activity club in May 2022 . SPECTRA is created with the
            vision to facilitate meaningful involvement, community engagement and leadership development, which will
            enable all students to contribute to the global society. The mission is to enrich student organizations
            offering transformative leadership programs, challenging and supporting student leaders, working together
            with the student organization advisors and campus/community partners to advance a student-centered
            co-curricular experience. Seven clubs were created under spectra-<br><br>
            1. Deverse Coding Club<br>
            2. Project Making Club<br>
            3. Academics Club<br>
            4. Sports Club<br>
            5. Cultural Club<br>
            6. Digital Marketing Club<br>
            7. Entrepreneurship Club<br><br>
            The firmness of the Spectra is to attract people who share the same interests such as in music, arts, or
            sports. Club activities help students develop sense of unity and teamwork, learning how to work with others
            in reaching the same goals. They help learners develop social skills.<br><br>
            By inaugrating this activity club a bunch of benefits can be aquire by the students and teaching staffs.
            Some of them are listed -<br><br>
            1. Improves Acadmic Performance<br>
            The person who participate in extracurricular or co-curricular activities have a marked improvement in
            academic grades. This is because person participating in activities they are interested in can increase
            their brain function that helps to concentrate and get higher grades.<br><br>
            2. Social Opportunities<br>
            Being part of a group with extracurricular activities offers an opportunity for person to interact with
            others with similar interests. <br><br>
            3. Higher Self-esteem<br>
            Extracurricular activities can keep person afloat with positive self-esteem. When person achieve success
            through the activities they are passionate about and hence their self-confidence will improve.<br><br>
            4. Learn Essential Skills<br>
            The top benefits of extracurricular activities is that person learn important skills that include goal
            setting, teamwork, critical thinking, and public speaking. Moreover, persons who participate in
            extracurricular activities help them overcome peer pressure related problems.<br><br>
            5. Personal Growth and Development<br>
            Extracurricular activities, help persons learn to take care of their friends. However, person develop this
            attitude gradually with time because in extra-curricular activities they get a chance to be involved in a
            team with their peers. And alot of benefits are pinned with this activity club.

        </p>

    </section>
    <!------Javascript for Toggle Menu------>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-250px";
        }

    </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>