<base href="/"><!--[if lte IE 6]></base><![endif]-->
$MetaTags

<meta name="application-name" content="{$SiteConfig.Title}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5" />
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />

<link rel="preconnect dns-prefetch" href="https://d9itsn2w6jeob.cloudfront.net/" crossorigin />

<link rel="icon" type="image/svg" sizes="32x32" href="/favicon.svg">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#8e6222">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

$ViteClient.RAW
<link rel="stylesheet" href="$Vite('app/client/src/scss/app.scss')">
<% yield 'Preload' %>
<!-- INSERT CSS HERE -->
