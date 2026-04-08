<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sancakra Group | Holding Company</title>
    <meta name="description"
        content="Sancakra Group helps businesses grow through digital solutions, innovation, and strategic development. Explore our services, latest updates, and company profile.">
    <meta name="keywords" content="Sancakra Group, digital solutions, business innovation, company profile, Indonesia">
    <meta name="author" content="Sancakra Group">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Sancakra Group | Digital Solutions & Business Innovation">
    <meta property="og:description"
        content="Sancakra Group helps businesses grow through digital solutions, innovation, and strategic development.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Sancakra Group">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">

    @vite(['resources/css/app.css'])

</head>

<body>

    @include('Components.Navbar')
    @include('Components.Hero')
    @include('Components.Features')
    @include('Components.OurCompany')
    @include('Components.Latest')
    @include('Components.Footer')


</body>

</html>