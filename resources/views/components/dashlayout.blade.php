<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS FILES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet">
        <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet">
        <!-- Clock Css -->

        <link href="{{ asset('fonts/Lato.css') }}" rel="stylesheet">
        <link href="{{ asset('css1/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css1/style.css') }}" rel="stylesheet">



        <!-- Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    </head>

    <body>
        <main>
            {{$slot}}
        </main>

        <!-- Core JS Files -->
        <script src="{{ asset('js/core/popper.min.js') }}"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>

        <!-- clock  -->
        <script src="{{ asset('js1/jquery.min.js') }}"></script>
        <script src="{{ asset('js1/popper.js') }}"></script>
        <script src="{{ asset('js1/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js1/main.js') }}"></script>
        

    </body>
</html>