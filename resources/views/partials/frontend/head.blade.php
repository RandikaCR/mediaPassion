<meta charset="utf-8" />
<title>@yield('page_title') :: Media Passion</title>
<meta name="description" content=""/>
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="twitter:title" content="" />
<meta property="twitter:description" content="" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="{{ asset('assets/common/images/favicon.png') }}">

<script type="text/javascript">
    !(function (o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        (n.className += t + "js"),
        ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) &&
        (n.className += t + "touch");
    })(window, document);
</script>

<style>
    * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>

<!-- Lennis script and styles -->
<script src="https://unpkg.com/lenis@1.3.4/dist/lenis.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/lenis@1.3.4/dist/lenis.css" />

<style type="text/css">
    .home-header_content{
        background: url("{{ asset('assets/common/images/cover.png') }}") center center /cover;
    }

    .fs-1-rem{
        font-size: 1rem !important;
        transition: 0.8s;
    }

    .fs-2-5-rem{
        font-size: 2.5rem !important;
        transition: 0.8s;
    }

    .w-3-rem{
        width: 3rem !important;
        transition: 0.8s;
    }

    .w-5-rem{
        width: 3rem !important;
        transition: 0.8s;
    }

    .w-15-rem{
        width: 15rem !important;
        transition: 0.8s;
    }

    .drop-shadow{
        box-shadow: 0 -1px 10px #333;
        transition: 0.8s;
    }

    .header-extra-space{
        margin-top: 160px;
    }

    @media screen and (max-width: 991px) {
        .fs-2-5-rem{
            font-size: 1.2rem !important;
        }

        .w-15-rem{
            width: 8rem !important;
        }

        .header-extra-space{
            margin-top: 70px;
        }
    }

    @media screen and (max-width: 480px) {
        .fs-2-5-rem{
            font-size: 1rem !important;
        }

        .fs-1-rem{
            font-size: .8rem !important;
        }

        .w-15-rem{
            width: 6rem !important;
        }

        .header-extra-space{
            margin-top: 35px;
        }
    }

</style>
