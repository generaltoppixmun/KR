<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = 'p13d0i';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html data-scrapbook-source="https://flaxton.godaddysites.com/" data-scrapbook-create="20200117110319474" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>flaxton</title><meta name="author" content="flaxton"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://flaxton.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://flaxton.appspot.com/">
<meta property="og:site_name" content="flaxton">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/yrnrO9R">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="flaxton">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/yrnrO9R">
<meta name="twitter:image:alt" content="flaxton">
<meta name="theme-color" content="#7896ae"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js"></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">@import url("");
/*
Copyright (c) 2010 - 2013, Matt McInerney (matt@pixelspread.com), Pablo Impallari (impallari@gmail.com), Rodrigo Fuenzalida (hello@rfuenzalida.com) with Reserved Font Name "Raleway"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), local('Raleway-Regular'), url("https://img1.wsimg.com/gfonts/s/raleway/v14/1Ptug8zYS_SKggPNyCMIT4ttDfCmxA.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), local('Raleway-Regular'), url("https://img1.wsimg.com/gfonts/s/raleway/v14/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 700;
  src: local('Raleway Bold'), local('Raleway-Bold'), url("https://img1.wsimg.com/gfonts/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqhPANqczVsq4A.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 700;
  src: local('Raleway Bold'), local('Raleway-Bold'), url("https://img1.wsimg.com/gfonts/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqZPANqczVs.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/587f47587180c071/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Helvetica, arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { letter-spacing: 1.5px; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { line-height: 1.2; }
.x .c2-d { margin-left: 0px; }
.x .c2-e { margin-right: 0px; }
.x .c2-f { margin-top: 0px; }
.x .c2-g { margin-bottom: 0px; }
.x .c2-h { max-width: 100%; }
.x .c2-i { font-family: "Raleway", arial, sans-serif; }
.x .c2-j { color: rgb(27, 27, 27); }
.x .c2-k { font-size: 28px; }
.x .c2-l { font-weight: 700; }
.x .c2-s { display: inline-block; }
.x .c2-t { width: 100%; }
.x .c2-u { color: rgb(247, 247, 247); }
.x .c2-v { display: block; }
.x .c2-x { white-space: pre-line; }
.x .c2-y { overflow-wrap: normal; }
.x .c2-z { word-break: normal; }
.x .c2-10 { display: none; }
.x .c2-11 { visibility: hidden; }
.x .c2-12 { position: absolute; }
.x .c2-13 { left: 0px; }
.x .c2-14 { font-size: 40px; }
.x .c2-19 { font-size: 32px; }
.x .c2-1e { letter-spacing: 3px; }
.x .c2-1f { text-transform: uppercase; }
.x .c2-1g { padding-top: 16px; }
.x .c2-1h { padding-bottom: 16px; }
.x .c2-1i { padding-left: 32px; }
.x .c2-1j { padding-right: 32px; }
.x .c2-1k { background-color: transparent; }
.x .c2-1l { border-style: solid; }
.x .c2-1m { text-align: center; }
.x .c2-1n { text-decoration: none; }
.x .c2-1o { cursor: pointer; }
.x .c2-1p { width: auto; }
.x .c2-1q { border-color: rgb(247, 247, 247); }
.x .c2-1r { border-radius: 0px; }
.x .c2-1s { border-top-width: 2px; }
.x .c2-1t { border-right-width: 2px; }
.x .c2-1u { border-bottom-width: 2px; }
.x .c2-1v { border-left-width: 2px; }
.x .c2-1w { margin-top: 40px; }
.x .c2-1x { text-shadow: none; }
.x .c2-1y { font-size: 12px; }
.x .c2-1z:hover { background-color: rgb(247, 247, 247); }
.x .c2-20:hover { border-color: rgb(247, 247, 247); }
.x .c2-21:hover { color: rgb(22, 22, 22); }
.x .c2-22:focus { outline: currentcolor none medium; }
.x .c2-23:active { background-color: rgb(99, 124, 144); }
.x .c2-24:disabled { color: rgb(169, 169, 169); }
.x .c2-25:disabled:hover { color: rgb(22, 22, 22); }
.x .c2-2b { display: flex; }
.x .c2-2c { box-sizing: border-box; }
.x .c2-2d { flex-direction: row; }
.x .c2-2e { flex-wrap: wrap; }
.x .c2-2f { margin-right: -12px; }
.x .c2-2g { margin-bottom: 16px; }
.x .c2-2h { margin-left: -12px; }
.x .c2-2o { flex-grow: 1; }
.x .c2-2p { flex-shrink: 1; }
.x .c2-2q { flex-basis: 100%; }
.x .c2-2r { padding-top: 0px; }
.x .c2-2s { padding-right: 12px; }
.x .c2-2t { padding-bottom: 0px; }
.x .c2-2u { padding-left: 12px; }
.x .c2-31 { margin-left: auto; }
.x .c2-32 { margin-right: auto; }
.x .c2-33 { vertical-align: middle; }
.x .c2-34 { flex-basis: 0%; }
.x .c2-39 { line-height: 1.5; }
.x .c2-3a { color: rgb(94, 94, 94); }
.x .c2-3b { font-weight: 400; }
.x .c2-3d { flex-direction: column; }
.x .c2-3e { justify-content: center; }
.x .c2-3f { align-items: center; }
.x .c2-3h { margin-bottom: 24px; }
.x .c2-3m { position: relative; }
.x .c2-3n { background-color: rgb(246, 246, 246); }
.x .c2-3o { border-color: rgb(218, 218, 218); }
.x .c2-3p { border-top-width: 0px; }
.x .c2-3q { border-right-width: 0px; }
.x .c2-3r { border-bottom-width: 0px; }
.x .c2-3s { border-left-width: 0px; }
.x .c2-3t { padding-top: 23px; }
.x .c2-3u { padding-bottom: 7px; }
.x .c2-3v { padding-left: 16px; }
.x .c2-3w { padding-right: 16px; }
.x .c2-3x { color: rgb(71, 71, 71); }
.x .c2-3y::placeholder { color: inherit; }
.x .c2-3z:focus + label { font-size: 12px; }
.x .c2-40:focus + label { top: 8px; }
.x .c2-41:focus + label { color: rgb(90, 116, 138); }
.x .c2-42:not([value=""]) + label { font-size: 12px; }
.x .c2-43:not([value=""]) + label { top: 8px; }
.x .c2-44:not([value=""]) + label { color: rgb(90, 116, 138); }
.x .c2-45::-webkit-input-placeholder { color: inherit; }
.x .c2-47 { top: 33%; }
.x .c2-48 { left: 16px; }
.x .c2-49 { transition: all 0.15s ease 0s; }
.x .c2-4a { pointer-events: none; }
.x .c2-4b { border-color: rgb(27, 27, 27); }
.x .c2-4c:hover { background-color: rgb(27, 27, 27); }
.x .c2-4d:hover { border-color: rgb(27, 27, 27); }
.x .c2-4e:hover { color: rgb(255, 255, 255); }
.x .c2-4f:disabled { color: rgb(89, 89, 89); }
.x .c2-4g:disabled:hover { color: rgb(255, 255, 255); }
.x .c2-4h { margin-bottom: -24px; }
.x .c2-4j { padding-bottom: 24px; }
.x .c2-4l { line-height: 1.25; }
.x .c2-4m { font-size: 22px; }
.x .c2-4r { resize: vertical; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px) {
  .x .c1-10 { padding-top: 40px; }
}
@media (max-width: 767px) {
  .x .c1-11 { padding-bottom: 40px; }
}
@media (max-width: 767px) {
  .x .c1-2k { width: 100%; }
}
@media (max-width: 767px) {
  .x .c1-39 { font-size: 22px; }
}
@media (max-width: 767px) {
  .x .c1-7q > :nth-child(n) { margin-bottom: 24px; }
}
@media (max-width: 767px) {
  .x .c1-7r > :last-child { margin-bottom: 0px !important; }
}
@media (max-width: 767px) {
  .x .c1-8w { width: auto; }
}
@media (max-width: 767px) {
  .x .c1-b1 { display: flex; }
}
@media (max-width: 767px) {
  .x .c1-b2 { flex-direction: column; }
}
@media (max-width: 767px) {
  .x .c2-m { font-size: 22px; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/b4ff254a59ae11cd/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .x .c2-n { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-o { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-15 { font-size: 50px; }
}
@media (min-width: 768px) {
  .x .c2-1a { font-size: 38px; }
}
@media (min-width: 768px) {
  .x .c2-26 { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-27 { font-size: 12px; }
}
@media (min-width: 768px) {
  .x .c2-2i { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2j { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2k { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2l { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2v { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2w { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2x { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2y { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-35 { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-36 { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-37 { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-4i { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-4k { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-4n { font-size: 22px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/1b125b2290643d4/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-p { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-w { display: none; }
}
@media (min-width: 1024px) {
  .x .c2-16 { font-size: 50px; }
}
@media (min-width: 1024px) {
  .x .c2-1b { font-size: 38px; }
}
@media (min-width: 1024px) {
  .x .c2-28 { font-size: 12px; }
}
@media (min-width: 1024px) {
  .x .c2-2m { margin-bottom: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-2n { flex-direction: row-reverse; }
}
@media (min-width: 1024px) {
  .x .c2-2z { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-30 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-38 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-3c { font-weight: 400; }
}
@media (min-width: 1024px) {
  .x .c2-3g { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-3i { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-3j { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-3k { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-3l { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-4o { font-size: 22px; }
}</style>
<link data-glamor="cxs-lg-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/5c0add9737a25576/styles.css"><style type="text/css" data-glamor="cxs-lg-sheet">@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-q { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c2-17 { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c2-1c { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-29 { font-size: 12px; }
}
@media (min-width: 1280px) {
  .x .c2-4p { font-size: 22px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-1z { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-3e { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-5t { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-64 { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-6i { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-7b { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c1-7n { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-r { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-18 { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c2-1d { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-2a { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-4q { font-size: 24px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-raleway" context="[object Object]"><div id="layout-bc-3-ca-009-ac-01-47-e-2-bbc-1-f-9112-f-659-e-8-e" class="layout layout-layout layout-layout-layout-29 locale-en-US lang-en"><div data-ux="Page" id="page-11770" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-h c1-i c1-j c1-k c1-l c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="sidebar-container" class="x-el x-el-div c1-1 c1-2 c1-m c1-b c1-c c1-d c1-e c1-n c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-o c1-p c1-q c1-r c1-s c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-u c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-10 c1-11 c1-d c1-12 c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="n-11771-header-sidebar-container" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-13 c1-14 c1-15 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Sidebar" id="n-11771-sidebar" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-3 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-d c1-1g c1-1h c1-e c1-1i c1-1j c1-1k c1-f c1-g x-d-ux"><div data-ux="SidebarContainer" leftoffset="xlarger" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-1n c1-1o c1-1p c1-y c1-13 c1-1q c1-1r c1-1s c1-1t c1-1u c1-b c1-c c1-1v c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="CloseIcon" data-edit-interactive="true" data-close="true" class="x-el x-el-svg c1-1 c1-2 c1-20 c1-17 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-1p c1-b c1-c c1-2a c1-2b c1-d c1-e c1-f c1-g x-d-ux x-d-edit-interactive x-d-close"><path fill-rule="evenodd" d="M19.219 5.22a.75.75 0 0 0-1.061 0l-5.939 5.939-5.939-5.94a.75.75 0 1 0-1.061 1.062l5.939 5.939-5.939 5.939a.752.752 0 0 0 0 1.06.752.752 0 0 0 1.061 0l5.939-5.938 5.939 5.939a.75.75 0 1 0 1.061-1.061l-5.939-5.94 5.939-5.938a.75.75 0 0 0 0-1.061"></path></svg><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-2c c1-b c1-c c1-d c1-e c1-2d c1-2e c1-2f c1-2g c1-2h c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2i c1-2j c1-1p c1-c c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="flaxton" href="" class="x-el x-el-a c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-22 c1-2s c1-2t c1-2u c1-2v c1-b c1-2w c1-c c1-2x c1-2y c1-2z c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.11772.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingDelta" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-1" logotext="flaxton" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-s c2-t c2-i c2-k c2-o c2-p c2-q c2-r x-d-ux x-d-aid x-d-route">flaxton</span></h3></span></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-3f c1-3g c1-4 c1-b c1-c c1-3h c1-d c1-e c1-2e c1-3i c1-3j c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3k c1-4 c1-3l c1-b c1-c c1-3m c1-d c1-e c1-f c1-g x-d-ux"><ul data-ux="SidebarList" class="x-el x-el-ul c1-1 c1-2 c1-34 c1-35 c1-32 c1-33 c1-3n c1-3o c1-3p c1-1n c1-3q c1-y c1-13 c1-1q c1-b c1-c c1-3h c1-d c1-e c1-f c1-g x-d-ux"></ul></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-2c c1-b c1-c c1-d c1-e c1-3r c1-2e c1-2g c1-3s c1-3t c1-f c1-g x-d-ux"><div data-ux="UtilitiesMenu" id="n-11771-sidebar11774-utility-menu" class="x-el x-el-div c1-1 c1-2 c1-y c1-3u c1-3v c1-x c1-b c1-c c1-3w c1-d c1-3x c1-3y c1-3z c1-40 c1-e c1-41 c1-42 c1-f c1-g x-d-ux"></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="container" class="x-el x-el-div c1-1 c1-2 c1-y c1-13 c1-x c1-43 c1-14 c1-44 c1-45 c1-46 c1-47 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-x c1-14 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg11775" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="neutral" treatment="Fill" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-48 c1-49 c1-4a c1-4b c1-4c c1-y c1-13 c1-4d c1-4 c1-4e c1-4f c1-b c1-c c1-4g c1-d c1-4h c1-4i c1-4j c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(99, 99, 99, 0.25) 0%, rgba(99, 99, 99, 0.25) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/yrnrO9R/:/rs=w:2340,h:1480,cg:true,m/cr=w:2340,h:1480,a:cc&quot;); opacity: 1;"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-x c1-4 c1-4m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-4n c1-4o c1-4p c1-34 c1-4q c1-35 c1-4r c1-3u c1-4s c1-4t c1-4u c1-1q c1-b c1-c c1-4v c1-4w c1-4x c1-4y c1-d c1-e c1-4z c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-1m c1-b c1-c c1-57 c1-58 c1-59 c1-5a c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-5b c1-1p c1-53 c1-54 c1-55 c1-56 c1-x c1-y c1-1q c1-4u c1-2q c1-2p c1-b c1-c c1-57 c1-58 c1-59 c1-5a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2i c1-2j c1-1p c1-x c1-c c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="flaxton" href="" class="x-el x-el-a c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-22 c1-2s c1-2t c1-2u c1-2v c1-b c1-5c c1-c c1-2x c1-5d c1-5e c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.11776.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingDelta" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-2" logotext="flaxton" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-u c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-s c2-t c2-i c2-k c2-o c2-p c2-q c2-r x-d-ux x-d-aid x-d-route">flaxton</span></h3></span></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-51 c1-1p c1-53 c1-54 c1-55 c1-56 c1-y c1-3w c1-b c1-c c1-57 c1-58 c1-59 c1-5a c1-d c1-e c1-f c1-g x-d-ux"></div></div></nav><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-y c1-1q c1-3u c1-14 c1-4 c1-b c1-c c1-d c1-5g c1-5h c1-5i c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-x c1-4u c1-4 c1-b c1-c c1-1w c1-d c1-1x c1-h c1-5j c1-4j c1-5k c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-5l c1-5m c1-4u c1-4 c1-b c1-c c1-d c1-5n c1-5o c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-32 c1-33 c1-1n c1-1o c1-1p c1-1r c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-30 c1-2 c1-2p c1-2q c1-31 c1-32 c1-33 c1-34 c1-35 c1-17 c1-2j c1-5f c1-5p c1-38 c1-5q c1-1g c1-5r c1-5s c1-5t x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Element" id="tagline-container-3" class="x-el x-el-div c2-1 c2-2 c2-a c2-b c2-c c2-v c2-3 c2-4 c2-5 c2-w c2-6 c2-7 c2-8 x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-x c2-s c2-t c2-4 c2-i c2-u c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-y c2-z c2-10 c2-11 c2-12 c2-13 c2-14 c2-i c2-15 c2-16 c2-17 c2-18 x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-y c2-z c2-10 c2-11 c2-12 c2-13 c2-19 c2-i c2-1a c2-1b c2-1c c2-1d x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-y c2-z c2-10 c2-11 c2-12 c2-13 c2-k c2-i c2-o c2-p c2-q c2-r x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span></div></span></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-65 c1-2 c1-2p c1-2q c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-b c1-5f c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-4" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="HeroButton" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-1l c2-s c2-1m c2-1n c2-1o c2-b c2-a c2-h c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-3 c2-u c2-l c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-27 c2-28 c2-29 c2-2a x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/yrnrO9R/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg11775'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(99, 99, 99, 0.25) 0%, rgba(99, 99, 99, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-v c1-w c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-6n c1-6o c1-2p c1-2q c1-7c c1-1l c1-33 c1-34 c1-7d c1-7e c1-4u c1-b c1-7f c1-7g c1-38 c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Our App</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-4u c1-7o c1-7p c1-32 c1-33 c1-b c1-c c1-7q c1-7r c1-7s c1-7t c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-y c1-4n c1-4o c1-7u c1-34 c1-4q c1-7v c1-4r c1-b c1-c c1-4v c1-4w c1-7w c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-3g c1-1p c1-53 c1-54 c1-55 c1-56 c1-y c1-7x c1-7p c1-b c1-c c1-7y c1-7z c1-57 c1-80 c1-59 c1-81 c1-d c1-82 c1-83 c1-e c1-f c1-g x-d-ux"><div id="guacBg11779" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-13 c1-3u c1-4u c1-7o c1-4 c1-84 c1-85 c1-86 c1-1s c1-87 c1-88 c1-89 c1-v c1-w c1-8a c1-8b c1-8c c1-14 c1-b c1-c c1-7q c1-7r c1-d c1-8d c1-8e c1-8f c1-8g c1-5i c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-8h c1-87 c1-4a c1-4b c1-4c c1-4e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-35 c1-2j c1-36 c1-37 c1-38 c1-3b c1-3c c1-3d c1-3e x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-65 c1-2 c1-2p c1-2q c1-8i c1-34 c1-35 c1-14 c1-4c c1-b c1-36 c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-3g c1-1p c1-53 c1-54 c1-55 c1-56 c1-y c1-7x c1-7p c1-b c1-c c1-7y c1-7z c1-57 c1-80 c1-59 c1-81 c1-d c1-82 c1-83 c1-e c1-f c1-g x-d-ux"><div id="guacBg11780" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-13 c1-3u c1-4u c1-7o c1-4 c1-84 c1-85 c1-86 c1-1s c1-87 c1-88 c1-89 c1-v c1-w c1-8a c1-8b c1-8c c1-14 c1-b c1-c c1-7q c1-7r c1-d c1-8d c1-8e c1-8f c1-8g c1-5i c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-8h c1-87 c1-4a c1-4b c1-4c c1-4e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-35 c1-2j c1-36 c1-37 c1-38 c1-3b c1-3c c1-3d c1-3e x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-65 c1-2 c1-2p c1-2q c1-8i c1-34 c1-35 c1-14 c1-4c c1-b c1-36 c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-3g c1-1p c1-53 c1-54 c1-55 c1-56 c1-y c1-7x c1-7p c1-b c1-c c1-7y c1-7z c1-57 c1-80 c1-59 c1-81 c1-d c1-82 c1-83 c1-e c1-f c1-g x-d-ux"><div id="guacBg11781" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-13 c1-3u c1-4u c1-7o c1-4 c1-84 c1-85 c1-86 c1-1s c1-87 c1-88 c1-89 c1-v c1-w c1-8a c1-8b c1-8j c1-14 c1-b c1-c c1-7q c1-7r c1-d c1-8k c1-8e c1-8l c1-8g c1-8m c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-8h c1-87 c1-4a c1-4b c1-4c c1-4e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-35 c1-2j c1-36 c1-37 c1-38 c1-3b c1-3c c1-3d c1-3e x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-65 c1-2 c1-2p c1-2q c1-8i c1-34 c1-35 c1-14 c1-4c c1-b c1-36 c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-7"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-v c1-w c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-6n c1-6o c1-2p c1-2q c1-7c c1-1l c1-33 c1-34 c1-7d c1-7e c1-4u c1-b c1-7f c1-7g c1-38 c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2b c2-2c c2-2d c2-2e c2-f c2-2f c2-2g c2-2h c2-3 c2-4 c2-2i c2-2j c2-2k c2-2l c2-5 c2-2m c2-2n c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2o c2-2p c2-2q c2-h c2-2r c2-2s c2-2t c2-2u c2-3 c2-4 c2-2v c2-2w c2-2x c2-2y c2-5 c2-2z c2-30 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/NpGkDJg/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1p c2-31 c2-32 c2-f c2-g c2-33 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2b c2-2c c2-2d c2-2e c2-f c2-2f c2-2g c2-2h c2-3 c2-4 c2-2i c2-2j c2-2k c2-2l c2-5 c2-2m c2-2n c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2o c2-2p c2-2q c2-h c2-2r c2-2s c2-2t c2-2u c2-3 c2-4 c2-2v c2-2w c2-2x c2-2y c2-5 c2-2z c2-30 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/Qzw90G5/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1p c2-31 c2-32 c2-f c2-g c2-33 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2b c2-2c c2-2d c2-2e c2-f c2-2f c2-2g c2-2h c2-3 c2-4 c2-2i c2-2j c2-2k c2-2l c2-5 c2-2m c2-2n c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2o c2-2p c2-2q c2-h c2-2r c2-2s c2-2t c2-2u c2-3 c2-4 c2-2v c2-2w c2-2x c2-2y c2-5 c2-2z c2-30 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/8020/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1p c2-31 c2-32 c2-f c2-g c2-33 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></span></div></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-v c1-w c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-7d c1-4u c1-2j c1-36 c1-37 c1-38 c1-3b c1-3c c1-3d c1-3e x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-y c1-3u c1-1q c1-7v c1-b c1-c c1-7u c1-8s c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-4u c1-4k c1-4l c1-8t c1-b c1-c c1-d c1-8u c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image15" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1p c1-29 c1-1l c1-1m c1-34 c1-35 c1-21 c1-8v c1-b c1-c c1-8w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-4u c1-4k c1-4l c1-8t c1-b c1-c c1-d c1-8u c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image16" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1p c1-29 c1-1l c1-1m c1-34 c1-35 c1-21 c1-8v c1-b c1-c c1-8w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-4u c1-4k c1-4l c1-8t c1-b c1-c c1-d c1-8u c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image17" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1p c1-29 c1-1l c1-1m c1-34 c1-35 c1-21 c1-8v c1-b c1-c c1-8w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-4u c1-4k c1-4l c1-8t c1-b c1-c c1-d c1-8u c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image18" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1p c1-29 c1-1l c1-1m c1-34 c1-35 c1-21 c1-8v c1-b c1-c c1-8w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-v c1-w c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><h2 typography="HeadingGamma" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-8x c1-8y c1-4u c1-2j c1-36 c1-37 c1-38 c1-3b c1-8z c1-3c c1-3d c1-3e x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-2b c2-2c c2-2d c2-2e c2-f c2-2f c2-g c2-2h c2-3 c2-4 c2-2i c2-2j c2-2k c2-2l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2o c2-2p c2-34 c2-h c2-2r c2-2s c2-2t c2-2u c2-3 c2-4 c2-35 c2-36 c2-37 c2-2v c2-2w c2-2x c2-2y c2-5 c2-38 c2-2z c2-30 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-a c2-b c2-39 c2-f c2-2g c2-1m c2-3 c2-3a c2-4 c2-3b c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c2-1 c2-2 c2-g c2-2b c2-3d c2-3e c2-3f c2-1m c2-1x c2-3 c2-4 c2-5 c2-3g c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-3h c2-t c2-3 c2-4 c2-5 c2-3i c2-3j c2-3k c2-3l c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-3n c2-3o c2-t c2-3p c2-3q c2-3r c2-3s c2-1r c2-3t c2-3u c2-3v c2-3w c2-1l c2-3 c2-3x c2-4 c2-3b c2-3y c2-22 c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-45 c2-46 c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-12 c2-47 c2-48 c2-49 c2-4a c2-3 c2-3x c2-4 c2-3b c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-t c2-3 c2-4 c2-5 c2-3j c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-1l c2-s c2-1m c2-1n c2-1o c2-b c2-a c2-h c2-1p c2-4b c2-1r c2-1s c2-1t c2-1u c2-1v c2-3 c2-j c2-l c2-1x c2-1y c2-4c c2-4d c2-4e c2-22 c2-23 c2-4f c2-4g c2-26 c2-27 c2-28 c2-29 c2-2a x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-v c1-w c1-x c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-6n c1-6o c1-2p c1-2q c1-7c c1-1l c1-33 c1-34 c1-7d c1-7e c1-4u c1-b c1-7f c1-7g c1-38 c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2b c2-2c c2-2d c2-2e c2-f c2-2f c2-4h c2-2h c2-3 c2-4 c2-2i c2-2j c2-4i c2-2l c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2o c2-2p c2-34 c2-h c2-2r c2-2s c2-4j c2-2u c2-3 c2-4 c2-35 c2-36 c2-37 c2-2v c2-2w c2-4k c2-2y c2-5 c2-38 c2-2z c2-30 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-3e c2-1m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-9 c2-2 c2-a c2-b c2-4l c2-d c2-e c2-f c2-3h c2-i c2-j c2-4m c2-l c2-4n c2-4o c2-4p c2-4q x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" aria-live="polite" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="flaxton.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="bc3ca009-ac01-47e2-bbc1-f9112f659e8e" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="b343b667-3918-11ea-81c1-3417ebe7253b" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3n c2-3o c2-t c2-3p c2-3q c2-3r c2-3s c2-1r c2-3t c2-3u c2-3v c2-3w c2-1l c2-3 c2-3x c2-4 c2-3b c2-3y c2-22 c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-45 c2-46 c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-12 c2-47 c2-48 c2-49 c2-4a c2-3 c2-3x c2-4 c2-3b c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input6" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3n c2-3o c2-t c2-3p c2-3q c2-3r c2-3s c2-1r c2-3t c2-3u c2-3v c2-3w c2-1l c2-3 c2-3x c2-4 c2-3b c2-3y c2-22 c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-45 c2-46 c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-12 c2-47 c2-48 c2-49 c2-4a c2-3 c2-3x c2-4 c2-3b c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="6" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-3n c2-3o c2-t c2-3p c2-3q c2-3r c2-3s c2-1r c2-1g c2-1h c2-3v c2-3w c2-1l c2-4r c2-3 c2-3x c2-4 c2-3b c2-3y c2-22 c2-45 c2-46 c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-1l c2-s c2-1m c2-1n c2-1o c2-b c2-a c2-h c2-1p c2-4b c2-1r c2-1s c2-1t c2-1u c2-1v c2-3 c2-j c2-l c2-1x c2-1y c2-4c c2-4d c2-4e c2-22 c2-23 c2-4f c2-4g c2-26 c2-27 c2-28 c2-29 c2-2a x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 1px; height: 1px; visibility: hidden;"></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-y c1-4n c1-4o c1-7u c1-34 c1-4q c1-7v c1-4r c1-5l c1-4u c1-b c1-c c1-4v c1-4w c1-7w c1-4y c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-90 c1-1p c1-53 c1-54 c1-a3 c1-56 c1-34 c1-33 c1-35 c1-32 c1-a6 c1-b c1-c c1-91 c1-92 c1-93 c1-57 c1-58 c1-a4 c1-5a c1-d c1-94 c1-8q c1-8r c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-4n c1-4o c1-7u c1-34 c1-4q c1-7v c1-4r c1-b c1-c c1-4v c1-4w c1-7w c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_SECTION_INFO_REND" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-3g c1-1p c1-53 c1-54 c1-a3 c1-56 c1-3u c1-1q c1-4u c1-b c1-c c1-57 c1-58 c1-a4 c1-5a c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-8t c1-2j c1-36 c1-6d c1-38 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-2p c1-2q c1-66 c1-34 c1-8t c1-a7 c1-a8 c1-a9 c1-aa c1-ab c1-ac c1-ad c1-ae c1-af c1-ag c1-ah c1-ai c1-aj c1-ak c1-al c1-am c1-an c1-ao c1-ap c1-aq c1-ar c1-as c1-at c1-au c1-av c1-aw c1-ax c1-ay c1-b c1-20 c1-c c1-6e c1-d c1-95 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="GridCell" data-aid="CONTACT_SECTION_DETAILS_REND" class="x-el x-el-div c1-1 c1-2 c1-4n c1-14 c1-50 c1-3g c1-1p c1-53 c1-54 c1-a3 c1-56 c1-3u c1-1q c1-4u c1-b c1-c c1-57 c1-58 c1-a4 c1-5a c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-30 c1-2 c1-2p c1-2q c1-8i c1-32 c1-33 c1-34 c1-8t c1-2j c1-36 c1-6d c1-38 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route">flaxton</h4></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-az c1-b0 c1-b c1-c c1-10 c1-11 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-4u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-6n c1-6o c1-2p c1-2q c1-66 c1-34 c1-8t c1-b c1-7f c1-6z c1-6e c1-78 c1-79 c1-7a c1-7b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 flaxton - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-4k c1-4l c1-1p c1-4u c1-67 c1-b c1-c c1-1w c1-d c1-1x c1-e c1-1y c1-f c1-1z c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-3q c1-53 c1-1o c1-55 c1-1n c1-34 c1-33 c1-35 c1-32 c1-a6 c1-b c1-c c1-b1 c1-b2 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-8c c1-8b c1-6r c1-34 c1-8t c1-b3 c1-1l c1-1m c1-5l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-6n c1-6o c1-2p c1-2q c1-66 c1-34 c1-35 c1-b c1-7f c1-6z c1-6e c1-78 c1-79 c1-7a c1-7b x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-22 c1-b c1-2w c1-6z c1-2x c1-2y c1-2z c1-78 c1-79 c1-7a c1-7b x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.11785.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/d27e94605d3263ae/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["raleway","default",""],"colors":["#7896ae"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme29"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"flaxton"},"fontPackLogoId":null,"scaledFontSizes":["xxlarge","xlarge","large","medium"],"maxLines":5,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"flaxton"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js"></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"A New Way to Use Your Phone","style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/bcfe2e48b215762/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-5'] = {"renderMode":"PUBLISH","fonts":["raleway","default",""],"colors":["#7896ae"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme29"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/fe110b9ef0dbb708/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/252b83a4e1388282/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/b57fd462d1d54aec/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/bc3ca009-ac01-47e2-bbc1-f9112f659e8e/gpub/8a7fae181fa704e2/script.js"></script>
<script type="text/javascript">document.getElementById('page-11770').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"bc3ca009-ac01-47e2-bbc1-f9112f659e8e"}),_trfd.push({"pd":"2020-01-17T11:02:49.131Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
