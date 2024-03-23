<x-lay>
<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark min-height:100vh" arial-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="/">SilentWise<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                @auth
                <li><a class="nav-link" href="listings/dashboard">Dashboard</a></li>
                <li>
                    <!-- Logout Button -->
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit" style="padding: 0.5rem 1rem; background-color: #14B789; color: white;
                            border-radius: 0.25rem; border: none; cursor: pointer;">Logout
                            </button>
                        </form>
                </li>
                @endauth
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li><a class="nav-link" href="listings/about">About us</a></li>
                <li><a class="nav-link" href="listings/reach">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{asset('/images/user.svg')}}"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="{{asset('/images/cart.svg')}}"></a></li>
            </ul>
        </div>
    </div>

</nav>
<!-- End Header/Navigation -->

<!-- Start Computer Business Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h7>Explore the Latest <span class="d-block">Computer Innovations</span></h7>
                    <p class="mb-4">Discover a world of possibilities with our range of high-performance computers.
                        Shop and get competitive desktop computer prices in Kenya</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                            class="btn btn-white-outline">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


</x-lay>