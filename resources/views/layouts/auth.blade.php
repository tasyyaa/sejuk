<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <link rel="icon" href="/images/icon.png" type="image/x-icon" />
{{--    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"--}}
{{--          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="--}}
{{--          crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">--}}
{{--    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">--}}
{{--    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />

    @yield('child-sheet')
    @yield('additional-sheet')

    <script src="{{ mix('/js/app.js') }}" defer></script>

    @yield('child-script')
    @yield('additional-script')
</head>

<body>
@yield('child-layout')
@yield('additional-layout')
</body>

</html>
