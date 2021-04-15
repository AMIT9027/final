<form action="/login" method="POST">
    @csrf
    <input type="text" placeholder="UserEmail" name="Email">
    <input type="password" placeholder="Password" name="Password">
    <input type="submit" value="Login">
</form> 
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>WHISTLEBz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('js/libs/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
    <style>
        .wow:first-child {
            visibility: hidden;
        }
    </style>
</head>

<body >

    <section class="main__conatiner" style="background: color #3E4095;">
        <header class="header" style="background-color:#3E4095;">
            <div class="top__row">
                <div class="site__fix">
                </div>
                <div class="nav__row">
                    <div class="site__fix">
                        <a href="" title="whistleb" class="logo"> <img src="{{asset('images/logos.jpeg')}}" alt="whistleb" height="100%"></a>
                        <div class="burger-container">
                            <div id="burger">
                                <div class="bar topBar"></div>
                                <div class="bar btmBar"></div>
                            </div>
                        </div>
                        <nav>
                            <ul class="menu">
                                <li class="active menu-item">
                                    <a href="" title="">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#OurProcess" title="">Our process</a>
                                </li>
                                <li class="menu-item"><a href="#Aboutwhistleb" title="">About whistleb </a></li>
                                <li class="menu-item"><a href="Register"  title="">Register</a></li>
                                <li class="menu-item"><a href="/login"  title="">Login</a></li>
                                <li class="menu-item"><a href="#Contactform" title="">Contact Us</a></li>
                                <li class="menu-item"><a href="Feedback.html"  title="">Testimonial</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
      






    

    <section class="contact__form">
        <div id="Contactform">
            <div class="site__fix" style="width: 100%;">
                <div class="contact__left wow fadeInLeft" style="width: 100%;">
                    <h2>Login</h2>
                    <div class="form">
                        <form action="/login" method="POST" accept-charset="utf-8">
                            @csrf
                            <ul>
                                <li>
                                    <div class="col__1">
                                        <label>Email <span>*</span></label>
                                        <input type="email" class="input" name="Email" />
                                    </div>
                                </li>
                                <li>
                                    <div class="col__1">
                                        <label>PASSWORD<span>*</span></label>
                                        <input type="text" class="input" name="Password" />
                                    </div>
                                </li>
                          
                       
                                <button class="btn" type="submit">Submit</button><br>
                               
                                
                                <br>
                            </ul>
                        </form>
                    </div>
                </div>
               
                </div>
                </div>
            </div>
        </section>
    </section>

    


    <footer>
        <div class="site__fix">
            <div class="copyrgt">
                <span class="copytxt" style="text-size-adjust: 10.5em;">
                    © 2021
                    <a href="#">whistleb</a>
                </span>
                <span class="allrgt-resvd">© All Rights Reserved </span>
                <span class="footer-links">
                    <a href="#">Privacy Policy</a>
                </span>
            </div>
            <div class="social-rigth">
                <a href="#"  class="fb-icon"></a>
                <a href="#"  class="twitter-icon"></a>
                <a href="#"  class="linkedin-icon"></a>
            </div>
        </div>
    </footer>

<script src="{{asset('js/libs/wow.js')}}" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html> --}}