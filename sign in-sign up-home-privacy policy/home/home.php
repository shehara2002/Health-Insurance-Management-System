<!DOCTYPE html>
<html>
<head>
    <title>home page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!--header start-->   
    <div class="header-container">
        <header>
            <img src="../image/logo.jpg" alt="site logo" class="logo">
            <ul class="navbar">
                <li><a href="http://localhost/hims/sign in-sign up-home-privacy policy/home/home.php">Home</a></li>
                <li><a href="http://localhost/hims/about us emergency plan claim request/about index.html">About us</a></li>
                <li><a href="http://localhost/hims/all plans-adult-plan-registration-user dashboard/all_plans.html">Plans</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <div class="profile" style="display: flex; justify-content: center; flex-wrap: no-wrap">
                <a href="http://localhost/hims/sign in-sign up-home-privacy policy/signin/login.php" style="text-decoration: none; border-radius: 10px; background-color: teal; padding: 10px; color: white; padding-left: 15px; padding-right: 15px" class="sign-btn">sign in</a>
                <a href="http://localhost/hims/sign in-sign up-home-privacy policy/signup/signup.php" style="text-decoration: none; border-radius: 10px; background-color: teal; padding: 10px; color: white; padding-left: 15px; padding-right: 15px" class="sign-btn">sign up</a>
            </div>
        </header>
    </div>
    <!--header end-->

    <!--slide show-->
    <div class="slide-show"></div>
        <div class="slide fade">
            <div class="text">
                <h3>Keep your life steady and without worry with our Medical Plans</h3>
            </div>
            <img src="../image/first.jpg" alt="slide show 1st" class="slide-show-images">
        </div>

        <div class="slide fade">
            <div class="text">
                <h3>Your safety is our priority live purposefully</h3>
            </div>
            <img src="../image/second.jpg" alt="slide show 2st" class="slide-show-images">
        </div>

        <div class="slide fade">
            <div class="text">
                <h3>Protect yourself within a few minutes with our Online insurance solutions</h3>
            </div>
            <img src="../image/third.jpg" alt="slide show 3st" class="slide-show-images">
        </div>

        <button class="befour" onclick="clicka(-1)">&#10094;</button>
        <button class="next" onclick="clicka(1)">&#10095;</button>
    </div>
    <script src="home.js"></script>

    <!--Heading text-->
    <div class="text-area">
        <div class="text">
            <h1>"To be the Community's chioce for an exceptional healthcare experience and exceptional work place"</h1>
        </div>
    </div>
    <hr>

    <!-- who we are -->
    <div class="who-we-are">
        <img src="../image/who-we-are image.png" alt="">
        <div class="para">
            <h4>Who we are</h4>
            <span>your insuarance expert</span>
            <p>Life looks different to everyone, but a life well lived is one where you have absolute peace of mind to follow your aspirations, 
                while those closest to you, are happy and content. Still, the path to a life well lived can have its own hurdles. 
                Lifecare is your partner in crossing those hurdles, by helping you plan for your aspirations by taking care of the risks, so that you, and everyone you love, are free to live well.
            </p>
            <a href="">Learn More</a>
        </div>
    </div>

    <!-- what we cover -->
    <div class="allSlide"></div>
    <h1 class="coverWe">What we cover</h1>
    <div class="sliderA">
        <div class="containerA fade">
            <div class="slideA"><img src="../image/allinone.png" alt="Image 1" /><h3>All in one Plan</h3></div>
            <div class="slideA"><img src="../image/Child-Insurance.png" alt="Image 2" /><h3>Child Plan</h3></div>
            <div class="slideA"><img src="../image/elderperson.jpg" alt="Image 3" /><h3>Elderly Plan</h3></div>
            <div class="slideA"><img src="../image/oneperson.png" alt="Image 4" /><h3>One person Plan</h3></div>
            <div class="slideA"><img src="../image/groupplan.png" alt="Image 5" /><h3>Group Plan</h3></div>
        </div>
    </div>
</div>
    <!-- what we cover  js-->
     <script>
        let index = 0;
        const slides = document.querySelectorAll('.slideA');
        const totalSlides = slides.length;
    
        function showSlides1() {
            index++;
            if (index >= totalSlides) {
                index = 0;
            }
            const offset = -index * 100;
            document.querySelector('.containerA').style.transform = `translateX(${offset}%)`;
        }
    
        setInterval(showSlides1, 5000);
    </script>

    
    <!--F&Q-->
    <div class="fq-header">
        <h1 class="fq-title">FAQ</h1>
        <p>Frequently Ask Question</p>

        <div class="search-box">
            <select id="select">
                <option value="option0"></option>
                <option value="option1">How do i know the status of the claim? </option>
                <option value="option2">How can i obtain a quotation before deciding on obtainning a policy?</option>
                <option value="option3">Any possibility to increase the amounts of cover?</option>
            </select>
            <button class="answer-btn">search</button>
        </div>
    </div>

    <p class="show-answer-list"></p>

    <!--FAQ js-->
    <script>
        const searchbtn = document.querySelector('.answer-btn');
        const answerlits = document.querySelector('.show-answer-list');

        searchbtn.addEventListener('click', () => {

            const selectedValue = document.querySelector('#select').value;

            if (selectedValue === "option0"){
                answerlits.textContent = "";
            }

            if (selectedValue === "option1"){
                answerlits.textContent = "You may contact our 24hr Hotline and get your details clarified or reach out to our claims processing through our call center. You could also visit any of the branch outlets or customer care center for more details about the claim status.";
            }

            else if (selectedValue === "option2"){
                answerlits.textContent = "You may visit one of our branch outlets at your convenience and request for a quotation or you may contact one of our Sales Agents.";
            }

            else if (selectedValue === "option3"){
                answerlits.textContent = "Yes. You have to submit a written request & Good health form to the Branch Manager at the closest branch to you or call the Life Insurance Customer Care to be instructed on the steps to follow. If required medicals to be done.";
            }
        });
    </script>

    
    

    <!--footer-->
    <footer style="background-color: #90CAF9;">
        <div class="footer-container">
            <div class="site-details">
                <div class="description">
                    <p><b>LifeCare</b></p>
                    <p style="font-size: 14px;">Empowering Care, Simplifying Coverage.</p>
                </div>
                <div class="plans-company">
                    <div>
                        <p><b>Plans</b></p>
                        <ul>
                            <li><a href="http://localhost/hims/all plans-adult-plan-registration-user dashboard/adult_plan.html">Adult plan</a></li>
                            <li><a href="">Emergency plan</a></li>
                            <li><a href="">Complete plan</a></li>
                            <li><a href="http://localhost/hims/familyplan-inquiry/plan.html">Family plan</a></li>
                            <li><a href="http://localhost/hims/about us emergency plan claim request/emergency index.html">Emergency plan</a></li>
                        </ul>
                    </div>
                    <div>
                        <p><b>Company</b></p>
                        <ul>
                            <li><a href="http://localhost/sign in-sign up-home-privacy policy/policy/policy.html">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="http://localhost/hims/about us emergency plan claim request/about index.html">About us</a></li>
                            <li><a href="">Terms and conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social">
                    <p><b>Social</b></p>
                    <div>
                        <a href=""><i src="" alt="facebook"></a>
                        <a href=""><i src="" alt="X"></a>
                        <a href=""><i src="" alt="linked in"></a>
                        <a href=""><i src="" alt="whatsapp"></a>
                    </div>
                </div>
            </div>
            <div class="rights">
                <p>LifeCare 2024 © All rights resserved</p>
            </div>
        </div>
    </footer>


</body>
</html>