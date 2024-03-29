<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <!-- This is for css of aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- This is link of css -->
    <link rel="stylesheet" href="style5.css">
</head>

<style>

</style>

<body>
    <header class="primary-header">
        <nav class="navbar container">
			<img id="icon" src="edushaalalogocircular.png" alt="Logo" style="width:50px; height:50px; margin-right:4px;">
            <a href="#" class="logo">Edushaala</a>
            <ul class="nav-list">
                <li>
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#demo" class="nav-link">About</a>
                </li>
                <li>
                    <a href="#footer" class="nav-link">Contact</a>
                </li>
                <li>
                    <a href="#footer" class="nav-link">Help</a>
                </li>
            </ul>
            <a href="signup2.php" class="button">Sign Up</a>
            <a href="login.php" class="button" style="margin-left: 10px;">Login</a>
        </nav>
    </header>

    <section class="hero">
    </section>
    <hr style="
    border: dotted #ff5f9e 6px;
    border-bottom: none;
    width: 4%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 60px;
">


    <section class="demo-content" style=" margin-top: 80px; background-color: #f5f5f5;" id="demo">

        <div style="width:fit-content;  display: block; margin: auto;" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="3000">
            <h1 class="ml2">Explore</h1>
        </div>

        <!-- This is for the cards -->

        <div id="container1" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="3000">

            <div class="product-details">

                <h1>NGO</h1>

                <!-- The most important information about the product -->
                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all"
                </p>


                <!-- 		Control -->
                <div class="control">

                    <a href="ngo.php">
                        <button class="btn" id="container1button">
                            <span class="buy">Read More</span>
                        </button>
                    </a>
                    <!-- End Button buying -->

                </div>

            </div>


            <div class="product-image">

                <img src="./a.png" alt="Omar Dsoky">

            </div>
            <!--  End product image  -->


        </div>

        <!-- This is for second card -->

        <div id="container3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">

            <div class="product-details">

                <h1>Colleges</h1>

                <!-- The most important information about the product -->
                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all"
                </p>

                <!-- 		Control -->
                <div class="control">

                    <a href="volunteer.php">
                        <button class="btn">
                            <span class="buy">ReadMore</span>
                        </button>
                    </a>
                    <!-- End Button buying -->

                </div>

            </div>


            <div class="product-image">

                <img src="./c.png" alt="Omar Dsoky">

            </div>
            <!--  End product image  -->


        </div>
        <!-- This is for end of second card -->

        <!-- This is Third card -->


        <div id="container2" data-aos="fade-right" data-aos-duration="3000">

            <div class="product-details">

                <h1>Community</h1>

                <!-- The most important information about the product -->
                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all"
                </p>

                <!-- 		Control -->
                <div class="control">

                    <a href="community.php">
                        <button class="btn">

                            <span class="buy">ReadMore</span>
                        </button>
                    </a>
                    <!-- End Button buying -->

                </div>

            </div>


            <div class="product-image">

                <img src="./b.png" alt="Omar Dsoky">

            </div>
            <!--  End product image  -->


        </div>

        <!-- This is end of third card -->
        <br>

    </section>
    <hr style="
            border: dotted #ff5f9e 6px;
            border-bottom: none;
            width: 4%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 60px;
        ">


    <section style="background-color: #F7F7F7"id="sectionofcounter">
        <div class="countinganimation" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear" style="margin-top: 40px;  ">
            <header class="header456">
                <h1 class="ml3">Our Users</h1>
            </header>
            <section class="counters">
                <div class="container1">
                    <div>
                        <i class="fab fa-youtube fa-4x"></i>
                        <div class="counter" data-target="30">0</div>
                        <h3>Registered NGO's</h3>
                    </div>
                    <div>
                        <i class="fab fa-twitter fa-4x"></i>
                        <div class="counter" data-target="50">0</div>
                        <h3>Registered Communities</h3>
                    </div>
                    <div>
                        <i class="fab fa-facebook fa-4x"></i>
                        <div class="counter" data-target="100">0</div>
                        <h3>Colleges and groups</h3>
                    </div>
                </div>
        </div>
        <br><br>
    </section>

    <hr style="
            border: dotted #ff5f9e 6px;
            border-bottom: none;
            width: 4%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 60px;
    ">
<br><br><br>
<section id="footer">
    <div class="main-footer">
      <div class="logoinfo" data-aos="fade-up">
        <h2>We are available for work.</h2>
  
        <div class="contact-details">
          <h1>Contact Us</h1>
          <li>
            <div class="fa fa-phone"></div><a href="tel:+91 7385864121" style="color: black">+91 7385864121</a></li>
          <li>
            <div class="fa fa-envelope"></div><a href="mailto:edushaalahelp@gmail.com" style="color: black">edushaalahelp@gmail.com</a></li>
          </li>
      </div>
    </div>
    <div class="com " data-aos="fade-up">
      <h1>Contact us</h1>
      <ul>
        <li><a href="https://instagram.com/edu_shaala.help?igshid=ZDdkNTZiNTM" style="color: black">Instagram</a></li>
        <li><a href="http://www.linkedin.com/in/edushaala-education-platform-845b67267" style="color: black">LinkedIn</a></li>
        <li><a href="https://twitter.com/edushaalahelp" style="color: black">Twitter</a></li>
        <li><a href="https://www.youtube.com/channel/UCN-6mKEyfEpTiyfYF7u1zww" style="color: black">Youtube</a></li>
      </ul>
    </div>
    <!-- <div class="info" data-aos="fade-up">
      <h1>Social Media</h1>
      <div class="sociallogos">
        <div class="logobox">
          <a href="#" class="fa fa-instagram">Insta</a>
          <a href="#" class="fa fa-linkedin">Linkdin</a>
          <a href="#" class="fa fa-facebook">Facebook</a>
          <a href="#" class="fa fa-youtube-play">Youtube</a>
        </div>
      </div>
    </div> -->
    </div>
  <footer>© Your Copyright 2023 All Rights Reserved</footer>
  </section>

<script>

        const isScrolling = () => {
            const headerEl = document.querySelector('.primary-header')
            let windowPosition = window.scrollY > 250
            headerEl.classList.toggle('active', windowPosition)
        }
        window.addEventListener('scroll', isScrolling)

        let container1button = document.getElementById('container1button');
        let container1 = document.getElementById('container1');

        container1button.addEventListener('click', () => {
            container1.setAttribute('data-aos', 'zoom-in');
        })

        const counters = document.querySelectorAll('.counter');
const speed = 200; // The lower the slower

// counters.forEach(counter => {
// 	const updateCount = () => {
// 		const target = +counter.getAttribute('data-target');
// 		const count = +counter.innerText;

// 		const inc = target / speed;

// 		if (count < target) {
// 			counter.innerText = count + inc;
// 			setTimeout(updateCount, 1);
// 		} else {
// 			counter.innerText = target;
// 		}
// 	};

// 	updateCount();
// });
let sectionofcounter = document.getElementById('sectionofcounter');
sectionofcounter.addEventListener('mouseover', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200; 

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;

                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = count + inc;
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        });

    </script>

    <!-- This is for the Anime JS Link1-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
        integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- This is for the Anime JS For Word Animation  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <!-- This is for the Animation On Scroll(AOS) Link2 -->
    < <script src="https://unpkg.com/aos@next/dist/aos.js">
        </script>
        <script>
            AOS.init();
        </script>

        <div></div>

</body>

</html>