<!doctype html>
<html lang="de" class="h-full bg-white scroll-smooth overflow-y-scroll overflow-x-hidden">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZXBFSD');</script>
<!-- End Google Tag Manager -->


<title>{{ env('APP_NAME') }}</title>
<meta name="description" content="{{ env('APP_DESCRIPTION') }}">
<meta property="og:title" content="{{ env('APP_NAME') }}">
<meta property="og:description" content="{{ env('APP_DESCRIPTION') }}">
<meta property="og:url" content="{{ url()->current()}} ">
<meta property="og:site_name" content="{{ env('APP_NAME') }}">
<meta property="og:image" content="{{ asset('gewinnspiel-og.png') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
@vite('resources/css/app.css')
@livewireStyles

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1326344278707493');
fbq('track', 'PageView');
</script>
<!-- End Meta Pixel Code -->



</head>
<body class="{{ Route::is('page.competition') || Route::is('page.conditions') ? 'bg-white text-fern' : 'bg-fern text-white' }} antialiased font-thesans-regular text-lg md:text-xl lg:text-2xl leading-[1.2] flex flex-col min-h-full">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-PZXBFSD
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1326344278707493&ev=PageView&noscript=1"
/></noscript>
