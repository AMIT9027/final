<!--<h1>{{Session('User_Details')['CompanyName']}}</h1>
{{-- <img src="{{ asset('./CompanyLogos/'.session('User_Details')['CompanyLogo']) }}" alt="nothing" title="CompanyLogo"> --}}
{{-- <img src="{{asset('storage/app/CompanyLogos'.{{Session('User_Details')['CompanyName']}})}}" --}}
{{-- <img src="{{ asset('storage/app/CompanyLogos/ABC.jpg') }}>" --}}
<img src="{{ asset('storage/CompanyLogos/'.Session('User_Details')['CompanyLogo']) }}" alt="" title="">
<a href="report/?CompanyName={{session('User_Details')['CompanyName']}}">www.whistleB.{{session('User_Details')['CompanyName']}}</a>
<h2>See Your Active Plan</h2><a href="aciveplan">ActivePlan</a>
<h2>Upgrade Plan</h2><a>Upgrade Plan/a>-->
{{-- 
    <h1>{{session('User_Details')['CompanyName']}}</h1>
    <img src ="{{ asset('storage/CompanyLogos/'.session('User_Details')['CompanyLogo']) }}" style="width: 200px;height:200px;">
    {{session('Buyied')}}
    {{-- {{session('NotBuyied')}} --}}
    {{-- {{$Buyied}}
    @if($Buyied)
    <h4>Ugrade Plan</h4>  
    <a href="Linkgenerater">Click here to get Link</a>  
    @else
    <h4><a href="TakePlan">Activate Plan</a></h4>
    @endif --}} 

<!DOCTYPE html>
<html>

<head>
    <title>WHISTLEBz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="
    {{asset('css/libs/animate.css')}}">
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

    <section class="main__conatiner" style="background-color:whitesmoke;">
        <header class="header" style="background-color:whitesmoke;">
            <div class="top__row">
                <div class="site__fix">
                </div>
                <div class="nav__row">
                    <div class="site__fix">
                        <a href="" title="whistleb" class="logo"> <img src="{{ asset('storage/CompanyLogos/'.session('User_Details')['CompanyLogo']) }}" alt="" height="100%"></a>
                        <div class="burger-container">
                            <div id="burger">
                                <div class="bar topBar"></div>
                                <div class="bar btmBar"></div>
                            </div>
                        </div>
                        <nav>
                            <ul class="menu">
                                @if(now() < $planExpiry )
                                {{-- {{$updated_at}} --}}
                                {{-- {{$planExpiry}} --}}
                                <li class="active menu-item"><a href="" disabled>Active</a></li>
                                <li class="active menu-item"><a href="profile/Linkgenerater">Generate Link</a></li>
                                @else
                                
                                <li class="active menu-item"><a href="TakePlan?plan=1">Activate Plan</a></li>
                                @endif
                                <li class="active menu-item" >
                                    <a href="logout" title="">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="black" class="bi bi-power" viewBox="0 0 16 16" >
                                        <path d="M7.5 1v7h1V1h-1z"/>
                                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                                      
                                      </svg>
                                       
                                    </a>
                                  
                                </li>
                        
                          
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
      
        <!-- /header -->
        <section class="body__conatiner">
            <section class="home1__banner">
                <div class="site__fix">
                    <h1 class="banner__text wow fadeInRight" style=" color:black; font-size:75px;padding-top:40%;text-align:center;">
                        WELCOME {{session('User_Details')['CompanyName']}}
                        
                    </h1>
                </div>
            </section>
       
           
            <section class="expertise"style="background-color: white;">
                <div id="Aboutwhistleb" >
                    <div class="site__fix" style="background-color: white;">
                        <h2 style="color: black;">Active plans and offers</h2>
                        <p class="short__dec" style="font-size: 1.4em; color:black;">your current company plain and there details </p>
                        <div class="exp__listing" ">
                            <article class="wow fadeInUp"style="background-color: lightgray;>
                                <i class="exp-icon"> <img src="{{asset('images/expertise/expertise-1.png')}}" alt=""></i>
                                <h2>Plan1</h2>
                                <p>
                                  1. 100 free feedback
                                </p>
                                <span class="link"><a href="/discovery/">Explore Services &gt;</a> </span>
                                <div class="expertise__hover">
                                    <img src="{{asset('images/expertise/expertise_block-1_hover.jpg')}}">
                                    <div class="inner">
                                        <div class="exp__text">
                                            <h4>Discovery</h4>
                                            <ul>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                            </ul>
                                            @if(now() < $planExpiry)
                                            <a href="TakePlan?plan=0" class="learn__more">Active</a>
                                            @else
                                            <a href="TakePlan?plan=1" class="learn__more">Activate</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeInUp"style="background-color: lightgray;>
                                <i class="exp-icon"> <img src="{{asset('images/expertise/expertise-1.png')}}" alt=""></i>
                                <h2 >plan2</h2>
                                <p>
                                  1.200 feedback
                                </p>
                                <span class="link"><a href="/discovery/">Explore Services &gt;</a> </span>
                                <div class="expertise__hover">
                                    <img src="{{asset('images/expertise/expertise_block-1_hover.jpg')}}">
                                    <div class="inner">
                                        <div class="exp__text">
                                            <h4>Discovery</h4>
                                            <ul>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                            </ul>
                                            @if(now() < $planExpiry)
                                            <a href="TakePlan?plan=0" class="learn__more">Active</a>
                                            @else
                                            <a href="TakePlan?plan=1" class="learn__more">Activate</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeInUp"style="background-color: lightgray;>
                                <i class="exp-icon"> <img src="{{asset('images/expertise/expertise-1.png')}}" alt=""></i>
                                <h2>Plan3</h2>
                                <p>
                                   1. 300 feedback 
                                </p>
                                <span class="link"><a href="/discovery/">Explore Services &gt;</a> </span>
                                <div class="expertise__hover">
                                    <img src="{{asset('images/expertise/expertise_block-1_hover.jpg')}}">
                                    <div class="inner">
                                        <div class="exp__text">
                                            <h4>Discovery</h4>
                                            <ul>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                                <li>
                                                    <h3><a href="#">User Research</a></h3>
                                                </li>
                                            </ul>
                                            <a href="plan.html" class="learn__more">upgrade</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    </div>
                </section>
           
          
            
            
         
            
            
            
         
           


            <section class="contact__form">
            <div id="Contactform">
                <div class="site__fix" style="width: 100%;"">
                    <div class="contact__left wow fadeInLeft" style="width: 100%;">
                        <h2>Detail about company</h2>
                        <div class="form">
                            <form action="" method="get" accept-charset="utf-8">
                                <ul>
                                    <li>
                                        <div class="col__1">
                                            <label>Company Name <span> {{Session('User_Details')['CompanyName']}}</span></label>
                                        </div>
                                    </li>
                                   <li>
                                       <div class="col__1">
                                           <label>Number of Complain files<span> {{session('feedbacknumber')['feedbackdata']}}</span></label>
                                       </div>
                                   </li>
                                   <li>
                                    <div class="col__1">
                                        <label>Number of Complain Remaining<span> {{session('feedbacknumber')['feedbackremaining']}}</span></label>
                                    </div>
                                </li>
                                    <button class="btn">Submit</button><br>
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

</html>