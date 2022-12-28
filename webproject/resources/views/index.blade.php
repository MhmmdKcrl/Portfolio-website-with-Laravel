<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOIU-STUDENT</title>
    <link rel="icon" href="http://asoiu.edu.az/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
    <header id="header" class="header">
        <div class="container">
            <div class="headerContainer">
                <div class="headerLeft">
                    <div class="headerLogo">
                        <img src="{{ asset('/img/asoiu-logo.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="headerRight">
                    <div class="navBar">
                        <ul class="mainUl">
                            <li class="childLi">
                                <a href="#start">HOME</a>
                            </li>
                            <li class="childLi">
                                <a href="#student">STUDENTS</a>
                            </li>
                            <li class="childLi">
                                <a href="#contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="start">
        <div class="container">
            <nav class="startContainer">
                <div class="startTextBox">
                    <div class="startHeader">
                        <h1>AZERBAIJAN STATE OIL AND INDUSTRY UNIVERSITY</h1>
                    </div>
                    <div class="startDesc">
                        <P>Website about students</P>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section id="student">
        
        <div class="container">
            <div class="studentSlider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <a href="{{route('user3')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                    <img src="{{ asset('/img/user3.jpg') }}" alt="Logo">
                                     </div>
                                <div class="sliderUser">
                                    <h4>Ismayil Hummatov</h4>
                                </div>
                        </a>
                                <div class="sliderText">
                                    <p>Back-End Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{route('user2')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                    <img src="{{ asset('/img/user2.jpg') }}" alt="Logo">
                                </div>
                                <div class="sliderUser">
                                    <h4>Ali Dadashzade</h4>
                                </div>
                         </a>
                                <div class="sliderText">
                                    <p>Front-End Developer and QA Tester</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{route('user1')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                <img src="{{ asset('/img/user1.jpg') }}" alt="Logo">
                                </div>
                                <div class="sliderUser">
                                    <h4>Mahammad Kocharli</h4>
                                </div>
                                </a>
                                <div class="sliderText">
                                    <p>QA Engineer</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{route('user4')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                <img src="{{ asset('/img/user3.jpg') }}" alt="Logo">
                                </div>
                                <div class="sliderUser">
                                    <h4>Mikayil Zeynalabdinov</h4>
                                </div>
                              </a>
                                <div class="sliderText">
                                    <p>QA Engineer</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{route('user5')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                <img src="{{ asset('/img/user5.jpg') }}" alt="Logo">
                                </div>
                                <div class="sliderUser">
                                    <h4>Janna Dark</h4>
                                </div>
</a>
                                <div class="sliderText">
                                    <p>Web Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{route('user6')}}">
                            <div class="sliderBox">
                                <div class="sliderImg">
                                <img src="{{ asset('/img/user6.jpg') }}" alt="Logo">
                                </div>
                                <div class="sliderUser">
                                    <h4>Nicole Butler</h4>
                                </div>
</a>
                                <div class="sliderText">
                                    <p>Data Scientist</p>
                                </div>
                            </div>
                        </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
        <div id="loading" style="background-image: url('{{ asset('img/contact.bck.jpg')}}');">
            <div class="contactContainer">
                <div class="contactHeader">
                    <h2>CONTACT</h2>
                </div>
                <div class="icons">
                    <div class="contactInsta">
                        <a href="https://www.instagram.com/asoiu_university/" title="Instagram" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="contactFb">
                        <a href="https://www.facebook.com/Azii1920.ADNSU/" title="Facebook" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="contactLn">
                        <a href="https://www.linkedin.com/school/azerbaijan-state-university-of-oil-and-industry/?originalSubdomain=az" title="Linkedin" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div></div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="footerContainer">
                <div class="footerLeft">
                    <div class="footerLogo">
                        <img src="{{ asset('/img/asoiu-logo.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="footerMiddle">
                    <div class="footerDesc">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error provident sint fuga! Fugit quasi qui magnam dolorem, vel odio quas vitae ipsa tempore, reprehenderit laboriosam placeat praesentium corrupti maiores. Dolore?</p>
                    </div>
                </div>
                <div class="footerRight">
                    <div class="footerMedia">
                        <div class="footerInsta fIco">
                            <a href="https://www.instagram.com/asoiu_university/" title="Instagram" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="footerFb fIco">
                            <a href="https://www.facebook.com/Azii1920.ADNSU/" title="Facebook" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="footerLn fIco">
                            <a href="https://www.linkedin.com/school/azerbaijan-state-university-of-oil-and-industry/?originalSubdomain=az" title="Linkedin" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
</body>
</html>