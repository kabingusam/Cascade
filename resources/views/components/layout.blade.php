<!doctype html> <html lang="en"> <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS FILES -->
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/templatemo-first-portfolio-style.css') }}">

<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
        <main>
            {{$slot}}
        </main>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="copyright-text-wrap">
                    <p class="mb-0">
                        <span class="copyright-text">Copyright © 2024 <a href="#">SilentWise</a> Company. All
                            rights reserved.</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/click-scroll.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>