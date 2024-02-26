<main>
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/" class="navbar-brand mx-auto mx-lg-0">
                <!-- <img src="images/swlogo.png"> -->
                SilentWise</a>

            <div class="d-flex align-items-center d-lg-none">
                
                <a class="custom-btn btn" href="#section_5">
                    +254720822798
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                @auth
                    <li>
                    <!-- <span class="font-mono font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span> -->
                    </li>
                    <li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Edit Mode Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listings/dashboard">Dashboard</a>
                        </li>
                        
                    </li>
                    <li>
                        <!-- Logout Button -->
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit"
                            style="padding: 0.5rem 1rem; background-color: #14B789; color: white; 
                            border-radius: 0.25rem; border: none; cursor: pointer;">Logout
                        </button>
                    </form>

                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/listings/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Projects</a>
                    </li>
                    

                </ul>
                @endauth

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <i class="bi bi-telephone-fill me-3"></i>
                    <a class="custom-btn btn" href="#section_5">
                        +254-720-822-798
                    </a>
                </div>
            </div>

        </div>
    </nav>
</main>

<section class="hero d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="hero-text">
                    <div class="hero-title-wrap d-flex align-items-center mb-4">
                        <img src="images/swlogo.png" class="avatar-image avatar-image-large img-fluid" alt="">
                        <!-- <h1 class="hero-title ms-3 mb-0">Hello There!</h1> -->
                    </div>
                    <!-- <h2 class="mb-4">I’m available for freelance work.</h2> -->
                    <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                </div>
            </div>

            <div class="col-lg-5 col-12 position-relative">
                <div class="hero-image-wrap"></div>
                <img src="images/d.png" class="hero-image img-fluid" alt="">
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#535da1" fill-opacity="1"
            d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
        </path>
    </svg>
</section>


