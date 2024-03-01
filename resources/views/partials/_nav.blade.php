<main> <section class="preloader"> <div class="spinner">
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
                    <li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit Mode Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listings/dashboard">Dashboard</a>
                    </li>
                    
                    </li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="nav-link click-scroll">Logout
                            </button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/listings/about">About</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_3">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_4">Projects</a>
                    </li>
                </ul>
                @endauth

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <a class="custom-btn btn" href="#section_5">
                        +254-720-822-798
                    </a>
                </div>
            </div>
        </div>
    </nav>
    </main>