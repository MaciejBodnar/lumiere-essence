<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ esc_attr(get_bloginfo('description')) }}">
    <meta name="author" content="{{ esc_attr(get_bloginfo('name')) }}">
    <meta name="keywords" content="clinic, wellness, health, lifestyle">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ esc_attr(get_bloginfo('name')) }}">
    <meta property="og:description" content="{{ esc_attr(get_bloginfo('description')) }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ esc_url(home_url('/')) }}">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="{{ get_theme_file_uri('/resources/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Red+Rose:wght@300..700&display=swap"
        rel="stylesheet">
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app">

        @include('sections.header')

        <main id="main" class="main">
            @yield('content')
        </main>

        @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>

</html>
