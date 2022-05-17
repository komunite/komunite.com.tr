<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }className="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}type="image/svg">

    <title>{{config('app.name')}} | {{$title}}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Readex+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193681692-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-193681692-1');
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E3GQGELPX0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E3GQGELPX0');
    </script>


    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TZDT78D"></script>

    <script async data-uid="d1e7ad420a" src="https://komunite.ck.page/d1e7ad420a/index.js"></script>

    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Komünite&#039;ye katılın, katma değerli çalışmaya başlayın!" />
    <meta property="og:description" content="Türkiye’nin en yetenekli yaratıcıları bir araya gelip, kariyerlerini dünya standartlarında bir komünitenin yardımıyla bir adım ileriye götürmeye çalışıyor." />
    <meta property="og:url" content="https://komunite.com.tr/" />
    <meta property="og:site_name" content="Komünite" />
    <meta property="og:updated_time" content="2022-01-07T14:14:23+03:00" />
    <meta property="og:image" content="https://komunite.com.tr/img/open-graph.png" />
    <meta property="og:image:secure_url" content="https://komunite.com.tr/img/open-graph.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:image:alt" content="Zamanı ölçeklemek mümkün değil. Komünite ile katma değerli ürünler üretmeye başlayın." />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Komünite&#039;ye katılın, katma değerli çalışmaya başlayın!" />
    <meta name="twitter:description" content="Türkiye’nin en yetenekli yaratıcıları bir araya gelip, kariyerlerini dünya standartlarında bir komünitenin yardımıyla bir adım ileriye götürmeye çalışıyor." />
    <meta name="twitter:image" content="https://komunite.com.tr/img/open-graph.png" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="Fatih Güner" />
    <meta name="twitter:label2" content="Time to read" />
    <meta name="twitter:data2" content="9 dakika" />

</head>

<body className="text-almost-black bg-bright">
    {{$headerBefore ?? ''}}
    <x-organisms.top-bar />
    <x-organisms.floating-newsletter />
    <x-organisms.header />
    <main role="main" className="pt-10 lg:pt-15 pb-15 lg:pb-20">
        {{$slot}}
    </main>
    <x-organisms.footer />
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
