<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <meta name="author" content="ArtTemplate" />
    <meta name="description" content="vCard" />

{{--    <!-- Twitter data -->--}}
{{--    <meta name="twitter:card" content="summary_large_image">--}}
{{--    <meta name="twitter:site" content="@ArtTemplates">--}}
{{--    <meta name="twitter:title" content="vCard">--}}
{{--    <meta name="twitter:description" content="vCard">--}}
{{--    <meta name="twitter:image" content="assets/images/social.html">--}}

{{--    <!-- Open Graph data -->--}}
{{--    <meta property="og:title" content="ArtTemplate" />--}}
{{--    <meta property="og:type" content="website" />--}}
{{--    <meta property="og:url" content="your url website" />--}}
{{--    <meta property="og:image" content="assets/images/social.html" />--}}
{{--    <meta property="og:description" content="vCard" />--}}
{{--    <meta property="og:site_name" content="vCard" />--}}

    <!-- Favicons -->
{{--    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">--}}
{{--    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">--}}
{{--    <link rel="shortcut icon" href="assets/images/favicons/favicon.png" type="image/png">--}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/demo/style-demo.css"/>
    <link rel="stylesheet" type="text/css" href="assets/styles/custom.css">

</head>
<body class="bg-triangles">

@yield('content')

@include('components.top')

<!-- SVG masks -->
<svg class="svg-defs">
    <clipPath id="avatar-box">
        <path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z"/>
    </clipPath>
    <clipPath id="avatar-hexagon">
        <path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z"/>
    </clipPath>
</svg>

@if(true)
    @include('components.slidenav')
@endif

<!-- JavaScripts -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/common.js"></script>

<script src="assets/demo/plugins-demo.js"></script>

@yield('scripts')
</body>

<!-- Mirrored from netgon.net/artstyles/v-card/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 08:07:53 GMT -->
</html>
