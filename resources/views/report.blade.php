@if($Register)
<form action="report" method="POST" enctype="multipart/form-data">
   @csrf
   
            <label>what is your concern? <span>*</span></label>
            <input type="text"  name="Concern" /><br>
       
            <label>when this happen?<span>*</span></label>
            <input type="date"  name="Happen" /><br>
        
            <label>Company Name<span>*</span></label>
            <input type="text"  name="Cname" value="{{$_REQUEST['CompanyName']}}" readonly="readonly"/><br>

            <label>Attachment </label>
            <input type="file"  name="attachment" accept="image/*"/><br>

        
            <label>Details of the case ?<span>*</span></label>
            <textarea name="Details" ></textarea><br>
<button type="submit">Submit</button>
</form>
@else
<h2>Company Not Registered</h2>
@endif
{{-- <!DOCTYPE html>
<html>

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
                                <li class="menu-item"><a href="Register.html"  title="">Register</a></li>
                                <li class="menu-item"><a href="login.html"  title="">Login</a></li>
                                <li class="menu-item"><a href="#Contactform" title="">Contact Us</a></li>
                                <li class="menu-item"><a href="Feedback.html"  title="">Testimonial</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
        </header>
   
                   <section class="counters">
              
                <h3 class="counter" aria-label="1000" >1000</h3>
                <h3 class="counter" aria-label="930">930</h3>
                <h3 class="counter" aria-label="400">400</h3>
                <h3 class="counter" aria-label="9875">9875</h3>
           
              
            </section>
            
            
            
         
            
            
            
         
           

            <section class="contact__form">
                <div id="Contactform">
                    <div class="site__fix">
                        <div class="contact__left wow fadeInLeft">
                            <h2>Employee Complaint Form</h2>
                            <div class="form">
                                <form action="report" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                    @csrf
                                    <ul>
                                        <li>
                                            <div class="col__1">
                                                <label>what is your concern? <span>*</span></label>
                                                <input type="text" class="input"  name="Concern" />
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col__1">
                                                <label>when this happen?<span>*</span></label>
                                                <input type="date" class="input" name="Happen" />
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col__1">
                                                <label>Company Name<span>*</span></label>
                                                <input type="text" class="input" name="Cname" value="{{$_GET['CompanyName']}}" disabled/>
                                            </div>
                                        </li>
                                           
                                    
                                        <li>
                                            <div class="col__1">
                                                <label>Attachment </label>
                                                <input type="file" class="input" name="Attachment" />
                                            </div>
                                            </li>
                              
                                        <li>
                                            <div class="col__1">
                                                <label>Details of the case ?<span>*</span></label>
                                                <textarea name="Details" class="input"></textarea>
                                            </div>
                                        </li>
                                        <button class="btn">Submit</button><br>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="contact__right wow fadeInRight">
                            <h3 style="color: aliceblue;font-size:30px;text-align: center;">Do not include sensitive personal information about any individual mentioned in your report if it is not necessary for the describing your concern.</h3>
                            
                            
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
    </section>
    <script src="{{asset('js/libs/wow.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        const stats = document.querySelectorAll(".counter");

stats.forEach(stat => {
	// pattern used to seperate input number from html into an array of numbers and non numbers. EX $65.3M -> ["$65.3M", "$", "65", ".", "3", "M"]
	const patt = /(\D+)?(\d+)(\D+)?(\d+)?(\D+)?/;
	const time = 1000;
	let result = [...patt.exec(stat.textContent)];
	let fresh = true;
	let ticks;

	// Remove first full match from result array (we dont need the full match, just the individual match groups).
	result.shift();
	// Remove undefined values from result array where they didnt have a match in one of the optional regex groups
	result = result.filter(res => res != null);

	while (stat.firstChild) {
		stat.removeChild(stat.firstChild);
	}

	for (let res of result) {
		if (isNaN(res)) {
			stat.insertAdjacentHTML("beforeend", `<span>${res}</span>`);
		} else {
			for (let i = 0; i < res.length; i++) {
				stat.insertAdjacentHTML(
					"beforeend",
					`<span data-value="${res[i]}">
						<span>&ndash;</span>
						${Array(parseInt(res[i]) + 1)
							.join(0)
							.split(0)
							.map(
								(x, j) => `
							<span>${j}</span>
						`
							)
							.join("")}
					</span>`
				);
			}
		}
	}

	ticks = [...stat.querySelectorAll("span[data-value]")];

	let activate = () => {
		let top = stat.getBoundingClientRect().top;
		let offset = window.innerHeight * 0.8;

		setTimeout(() => {
			fresh = false;
		}, time);

		if (top < offset) {
			setTimeout(() => {
				for (let tick of ticks) {
					let dist = parseInt(tick.getAttribute("data-value")) + 1;
					tick.style.transform = `translateY(-${dist * 100}%)`;
				}
			}, fresh ? time : 0);
			window.removeEventListener("scroll", activate);
		}
	};
	window.addEventListener("scroll", activate);
	activate();
});

    </script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
        // Mobile menu Js
        (function() {
            var burger = document.querySelector('.burger-container'),
                header = document.querySelector('.header');

            burger.onclick = function() {
                header.classList.toggle('menu-opened');
            }
        }());
    </script>
</body>

</html> --}}