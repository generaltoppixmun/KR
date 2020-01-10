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
<html data-scrapbook-source="https://ofaton.godaddysites.com/" data-scrapbook-create="20200110150820268" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>ofaton</title><meta name="author" content="ofaton"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://ofaton.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://ofaton.appspot.com/">
<meta property="og:site_name" content="ofaton">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/ka6pG8G">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="ofaton">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/ka6pG8G">
<meta name="twitter:image:alt" content="ofaton">
<meta name="theme-color" content="#8b939a"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
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
<style type="text/css">/*
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/c0d1a28b38715b03/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Lato, arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { letter-spacing: 1px; }
.x .c2-a { text-transform: uppercase; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { overflow-wrap: break-word; }
.x .c2-d { line-height: 1.2; }
.x .c2-e { margin-left: 0px; }
.x .c2-f { margin-right: 0px; }
.x .c2-g { margin-top: 0px; }
.x .c2-h { margin-bottom: 0px; }
.x .c2-i { max-width: 100%; }
.x .c2-j { text-align: center; }
.x .c2-k { font-family: "Cabin", arial, sans-serif; }
.x .c2-l { color: rgb(27, 27, 27); }
.x .c2-m { font-size: 24px; }
.x .c2-n { font-weight: 700; }
.x .c2-s { display: inline-block; }
.x .c2-t { width: 100%; }
.x .c2-u { letter-spacing: 0.143em; }
.x .c2-v { padding-top: 16px; }
.x .c2-w { padding-bottom: 16px; }
.x .c2-x { padding-left: 32px; }
.x .c2-y { padding-right: 32px; }
.x .c2-z { background-color: rgb(139, 147, 154); }
.x .c2-10 { border-style: solid; }
.x .c2-11 { text-decoration: none; }
.x .c2-12 { cursor: pointer; }
.x .c2-13 { width: auto; }
.x .c2-14 { transition-property: background-color; }
.x .c2-15 { transition-duration: 0.3s; }
.x .c2-16 { transition-timing-function: ease-in-out; }
.x .c2-17 > img { box-shadow: none; }
.x .c2-18 { border-top-width: 0px; }
.x .c2-19 { border-left-width: 0px; }
.x .c2-1a { border-right-width: 0px; }
.x .c2-1b { border-bottom-width: 4px; }
.x .c2-1c { border-bottom-color: rgb(102, 109, 114); }
.x .c2-1d { border-radius: 0px; }
.x .c2-1e { margin-top: 24px; }
.x .c2-1f { margin-bottom: 24px; }
.x .c2-1g { color: rgb(0, 0, 0); }
.x .c2-1h { text-shadow: none; }
.x .c2-1i { font-size: 14px; }
.x .c2-1j:hover { background-color: rgb(152, 160, 168); }
.x .c2-1k:focus { outline: currentcolor none medium; }
.x .c2-1l:active { background-color: rgb(114, 121, 127); }
.x .c2-1s { flex-shrink: 0; }
.x .c2-1t { width: 24px; }
.x .c2-1u { min-height: 1px; }
.x .c2-1y { margin-left: auto; }
.x .c2-1z { margin-right: auto; }
.x .c2-20 { vertical-align: middle; }
.x .c2-21 { box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 6px 0px; }
.x .c2-22 { opacity: 0; }
.x .c2-23 { display: block; }
.x .c2-24 { transition: opacity 0.5s ease-in-out 0s; }
.x .c2-25 { height: 38vh; }
.x .c2-26 { max-height: 100%; }
.x .c2-29 { width: 8px; }
.x .c2-2a { padding-left: 24px; }
.x .c2-2b { padding-right: 24px; }
.x .c2-2g { display: flex; }
.x .c2-2h { box-sizing: border-box; }
.x .c2-2i { flex-direction: row; }
.x .c2-2j { flex-wrap: wrap; }
.x .c2-2k { margin-right: -12px; }
.x .c2-2l { margin-left: -12px; }
.x .c2-2q { flex-grow: 1; }
.x .c2-2r { flex-shrink: 1; }
.x .c2-2s { flex-basis: 0%; }
.x .c2-2t { padding-top: 0px; }
.x .c2-2u { padding-right: 12px; }
.x .c2-2v { padding-bottom: 0px; }
.x .c2-2w { padding-left: 12px; }
.x .c2-37 { line-height: 1.5; }
.x .c2-38 { margin-bottom: 16px; }
.x .c2-39 { color: rgb(94, 94, 94); }
.x .c2-3a { font-weight: 400; }
.x .c2-3b { flex-direction: column; }
.x .c2-3c { justify-content: center; }
.x .c2-3d { align-items: center; }
.x .c2-3i { position: relative; }
.x .c2-3j { background-color: rgb(241, 241, 241); }
.x .c2-3k { border-color: rgb(226, 226, 226); }
.x .c2-3l { border-bottom-width: 0px; }
.x .c2-3m { padding-top: 23px; }
.x .c2-3n { padding-bottom: 8px; }
.x .c2-3o { padding-left: 16px; }
.x .c2-3p { padding-right: 16px; }
.x .c2-3q { color: rgb(59, 59, 59); }
.x .c2-3r::placeholder { color: inherit; }
.x .c2-3s:focus + label { font-size: 12px; }
.x .c2-3t:focus + label { top: 8px; }
.x .c2-3u:focus + label { color: rgb(111, 120, 127); }
.x .c2-3v:not([value=""]) + label { font-size: 12px; }
.x .c2-3w:not([value=""]) + label { top: 8px; }
.x .c2-3x:not([value=""]) + label { color: rgb(111, 120, 127); }
.x .c2-3y::-webkit-input-placeholder { color: inherit; }
.x .c2-40 { position: absolute; }
.x .c2-41 { top: 30%; }
.x .c2-42 { left: 16px; }
.x .c2-43 { transition: all 0.15s ease 0s; }
.x .c2-44 { pointer-events: none; }
.x .c2-45 { padding-left: 40px; }
.x .c2-46 { padding-right: 40px; }
.x .c2-47 { line-height: 1.25; }
.x .c2-48 { border-bottom-width: 1px; }
.x .c2-49 { border-bottom-style: solid; }
.x .c2-4a { border-color: rgba(226, 226, 226, 0.7); }
.x .c2-4b { font-size: 20px; }
.x .c2-4g { padding-bottom: 24px; }
.x .c2-4h { resize: vertical; }
.x .c2-4i { height: auto; }
.x .c2-4j { align-items: stretch; }
.x .c2-4k { display: none; }
.x .c2-4l { height: 2px; }
.x .c2-4m { background: currentcolor none repeat scroll 0% 0%; }
.x .c2-4n { margin-top: 4px; }
.x .c2-4o { border-radius: 2px; }
.x .c2-4p { margin-right: 4px; }
.x .c2-4q { margin-bottom: 4px; }
.x .c2-4r { margin-left: 4px; }
.x .c2-4s::after { content: ""; }
.x .c2-4t::after { display: block; }
.x .c2-4u::after { position: absolute; }
.x .c2-4v::after { top: -16px; }
.x .c2-4w::after { bottom: -16px; }
.x .c2-4x::after { left: 0px; }
.x .c2-4y::after { right: 0px; }
.x .c2-4z::after { padding-top: 4px; }
.x .c2-50::after { padding-right: 4px; }
.x .c2-51::after { padding-bottom: 4px; }
.x .c2-52::after { padding-left: 4px; }
.x .c2-54 { color: rgb(127, 116, 116); }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:40px}}@media (max-width: 767px){.x .c1-m{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1d{width:100%}}@media (max-width: 767px){.x .c1-67 > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-68  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-7r{width:auto}}@media (max-width: 767px){.x .c1-7s{max-width:224px}}@media (max-width: 767px){.x .c1-7t{display:block}}@media (max-width: 767px){.x .c1-7u{max-height:80px}}@media (max-width: 767px){.x .c1-7v{margin-top:0}}@media (max-width: 767px){.x .c1-7w{margin-right:auto}}@media (max-width: 767px){.x .c1-7x{margin-bottom:0}}@media (max-width: 767px){.x .c1-7y{margin-left:auto}}@media (max-width: 767px){.x .c1-99{padding-bottom:32px}}@media (max-width: 767px){.x .c1-9f{display:flex}}@media (max-width: 767px){.x .c1-9g{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/703aafa58005411d/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-o { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-1m { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1n { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-2c { width: 100%; }
}
@media (min-width: 768px) {
  .x .c2-2m { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2n { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2o { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2p { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2x { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-2y { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2z { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-30 { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-31 { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-32 { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-33 { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-4c { font-size: 22px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/d042d54ea075af3f/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-p { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-1o { max-width: 500px; }
}
@media (min-width: 1024px) {
  .x .c2-1p { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-1v { width: calc(-468px + 50vw); }
}
@media (min-width: 1024px) {
  .x .c2-27 { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-28 { height: 50vh; }
}
@media (min-width: 1024px) {
  .x .c2-2d { width: 984px; }
}
@media (min-width: 1024px) {
  .x .c2-34 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-35 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-36 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-3e { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-3f { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-3g { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-3h { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-4d { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-53 { display: block; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-25 { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-37 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-4j { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-5a { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-6h { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-7g { width: calc(-556px + 50vw); }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-q { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c2-1q { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c2-1w { width: calc(-556px + 50vw); }
}
@media (min-width: 1280px) {
  .x .c2-2e { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c2-4e { font-size: 22px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-26 { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-38 { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-44 { margin-bottom: 0.25em; }
}
@media (min-width: 1536px) {
  .x .c1-4k { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-5b { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-6i { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-7h { width: calc(-616px + 50vw); }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-r { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-1r { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c2-1x { width: calc(-616px + 50vw); }
}
@media (min-width: 1536px) {
  .x .c2-2f { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c2-4f { font-size: 24px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-0-ac-5-b-3-c-9-fc-77-4-d-82-9-c-4-a-f-79278-bd-0007" class="layout layout-layout layout-layout-layout-22 locale-en-US lang-en"><div data-ux="Page" id="page-7937" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-u c1-v c1-w c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-x c1-b c1-c c1-d c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-14 c1-15 c1-16 c1-17 c1-t c1-18 c1-w c1-19 c1-1a c1-1b c1-1c c1-c c1-1d c1-1e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="ofaton" href="" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-1q c1-c c1-1r c1-1s c1-1t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.7941.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="ofaton" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-s c2-t c2-k c2-m c2-o c2-p c2-q c2-r x-d-ux x-d-aid x-d-route">ofaton</span></h3></span></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-27 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-28 c1-4 c1-29 c1-2a c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2c c1-1b c1-2a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1z c1-1x c1-2d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-14 c1-15 c1-16 c1-17 c1-t c1-c c1-1d c1-1e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="ofaton" href="" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-1q c1-c c1-1r c1-1s c1-1t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.7943.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="ofaton" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-s c2-t c2-k c2-m c2-o c2-p c2-q c2-r x-d-ux x-d-aid x-d-route">ofaton</span></h3></span></div></a></div></div></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-b c1-c c1-d c1-2e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="https://img1.wsimg.com/isteam/stock/ka6pG8G/:/" alt="image1" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Fill" class="x-el x-el-img c1-1 c1-2 c1-t c1-4 c1-p c1-q c1-1x c1-1y c1-2f c1-2g c1-2h c1-2i c1-x c1-b c1-c c1-d c1-2j c1-2k c1-2l c1-2m c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg7945" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="none" treatment="Fill" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2n c1-2o c1-2p c1-2q c1-2r c1-4 c1-29 c1-2s c1-2a c1-2t c1-2u c1-2v c1-b c1-c c1-d c1-2w c1-y c1-2k c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: url(&quot;https://img1.wsimg.com/isteam/stock/ka6pG8G/:/rs=w:2980,h:1040,cg:true,m/cr=w:2980,h:1040,a:cc&quot;);"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-x c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-29 c1-2x c1-2y c1-1b c1-2z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-29 c1-2x c1-2y c1-1b c1-2z c1-2t c1-30 c1-31 c1-32 c1-b c1-c c1-33 c1-d c1-34 c1-35 c1-36 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><div data-ux="HeroLeft" class="x-el x-el-div c1-1 c1-2 c1-39 c1-3a c1-1z c1-1v c1-1w c1-3b c1-3c c1-29 c1-2x c1-30 c1-4 c1-b c1-c c1-d c1-3d c1-3e c1-3f c1-3g c1-e c1-f c1-g x-d-ux"><div typography="HeadingBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-3h c1-15 c1-1i c1-1j c1-3i c1-1x c1-3j c1-3k c1-3l c1-n c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-b c1-c c1-20 c1-43 c1-d c1-e c1-f c1-44 c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-49 c1-15 c1-1i c1-1j c1-4a c1-1v c1-1w c1-1x c1-4b c1-3k c1-3l c1-n c1-3m c1-3n c1-3o c1-3p c1-4c c1-4d c1-4e c1-4f c1-3t c1-3u c1-31 c1-w c1-t c1-42 c1-b c1-20 c1-4g c1-43 c1-4h c1-4i c1-4j c1-4k x-d-ux x-d-aid x-d-route"><span>A New Way to Use Your Phone</span></h1><div id="bs-3" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="HeroButton" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-u c2-a c2-v c2-w c2-x c2-y c2-z c2-10 c2-s c2-j c2-11 c2-12 c2-c c2-b c2-i c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-3 c2-1g c2-n c2-1h c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/ka6pG8G/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg7945'),{"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-27 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-29 c1-2x c1-2y c1-1b c1-2z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-29 c1-2x c1-2y c1-1b c1-2z c1-2t c1-30 c1-31 c1-32 c1-b c1-c c1-33 c1-d c1-34 c1-35 c1-36 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><div data-ux="HeroLeft" class="x-el x-el-div c1-1 c1-2 c1-39 c1-3a c1-1z c1-1v c1-1w c1-3b c1-3c c1-29 c1-2x c1-30 c1-4 c1-b c1-c c1-d c1-3d c1-3e c1-3f c1-3g c1-e c1-f c1-g x-d-ux"><div typography="HeadingBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-3h c1-15 c1-1i c1-1j c1-3i c1-1x c1-3j c1-3k c1-3l c1-n c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-b c1-c c1-20 c1-43 c1-d c1-e c1-f c1-44 c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-49 c1-15 c1-1i c1-1j c1-4a c1-1v c1-1w c1-1x c1-4b c1-3k c1-3l c1-n c1-3m c1-3n c1-3o c1-3p c1-4c c1-4d c1-4e c1-4f c1-3t c1-3u c1-31 c1-w c1-t c1-42 c1-b c1-20 c1-4g c1-43 c1-4h c1-4i c1-4j c1-4k x-d-ux x-d-aid x-d-route"><span>A New Way to Use Your Phone</span></h1><div id="bs-4" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="HeroButton" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-u c2-a c2-v c2-w c2-x c2-y c2-z c2-10 c2-s c2-j c2-11 c2-12 c2-c c2-b c2-i c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-3 c2-1g c2-n c2-1h c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-3h c1-15 c1-1i c1-1j c1-3i c1-1v c1-1w c1-1x c1-5d c1-5e c1-3k c1-3l c1-n c1-5f c1-3n c1-3o c1-3p c1-3q c1-3r c1-5g c1-4e c1-4f c1-3t c1-3u c1-1z c1-b c1-c c1-20 c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Our App</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1z c1-2t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-29 c1-5h c1-5i c1-5j c1-1x c1-5k c1-5l c1-5m c1-b c1-c c1-5n c1-5o c1-5p c1-5q c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-5s c1-t c1-39 c1-5t c1-5u c1-5v c1-29 c1-b c1-c c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-d c1-62 c1-63 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-29 c1-2x c1-2a c1-1z c1-2t c1-4 c1-64 c1-65 c1-66 c1-2y c1-b c1-c c1-67 c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-1y c1-6a c1-6b c1-6c c1-v c1-1z c1-6d c1-b c1-20 c1-6e c1-43 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-1y c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-2y c1-b c1-7c c1-c c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-5s c1-t c1-39 c1-5t c1-5u c1-5v c1-29 c1-b c1-c c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-d c1-62 c1-63 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-29 c1-2x c1-2a c1-1z c1-2t c1-4 c1-64 c1-65 c1-66 c1-2y c1-b c1-c c1-67 c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-1y c1-6a c1-6b c1-6c c1-v c1-1z c1-6d c1-b c1-20 c1-6e c1-43 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-1y c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-2y c1-b c1-7c c1-c c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-5s c1-t c1-39 c1-5t c1-5u c1-5v c1-29 c1-b c1-c c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-d c1-62 c1-63 c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-29 c1-2x c1-2a c1-1z c1-2t c1-4 c1-64 c1-65 c1-66 c1-2y c1-b c1-c c1-67 c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-1y c1-6a c1-6b c1-6c c1-v c1-1z c1-6d c1-b c1-20 c1-6e c1-43 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-1y c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-2y c1-b c1-7c c1-c c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-8"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-3h c1-15 c1-1i c1-1j c1-3i c1-1v c1-1w c1-1x c1-5d c1-5e c1-3k c1-3l c1-n c1-5f c1-3n c1-3o c1-3p c1-3q c1-3r c1-5g c1-4e c1-4f c1-3t c1-3u c1-1z c1-b c1-c c1-20 c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Photo Gallery</span></h2></div><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div style="display: flex; align-items: center; flex-wrap: nowrap; overflow: auto; scroll-behavior: smooth;"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1s c2-1t c2-1u c2-3 c2-4 c2-5 c2-1v c2-6 c2-1w c2-7 c2-1x c2-8 x-d-ux"></div><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/4684/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/4684/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/4684/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/4684/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/4684/:/rs=w:1800,m,cg:true 3x" alt="image13" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:1800,m,cg:true 3x" alt="image14" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/NpGkDJg/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/NpGkDJg/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/NpGkDJg/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/NpGkDJg/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/NpGkDJg/:/rs=w:1800,m,cg:true 3x" alt="image15" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:1800,m,cg:true 3x" alt="image16" data-ux="Image" data-aid="GALLERY_IMAGE3_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/8020/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/8020/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/8020/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/8020/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/8020/:/rs=w:1800,m,cg:true 3x" alt="image17" data-ux="Image" data-aid="GALLERY_IMAGE4_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><figure style="margin: 0px 16px 0px 0px; padding: 0px; flex-shrink: 0; position: relative;"><img src="https://img1.wsimg.com/isteam/stock/121885/:/rs=w:600,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/121885/:/rs=w:600,m,cg:true,//img1.wsimg.com/isteam/stock/121885/:/rs=w:900,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/121885/:/rs=w:1200,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/121885/:/rs=w:1800,m,cg:true 3x" alt="image18" data-ux="Image" data-aid="GALLERY_IMAGE5_RENDERED" class="x-el x-el-img gallery-8-img c2-1 c2-2 c2-i c2-13 c2-1y c2-1z c2-g c2-h c2-20 c2-21 c2-1d c2-22 c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-27 c2-28 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></figure><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1s c2-29 c2-1u c2-3 c2-4 c2-5 c2-1v c2-6 c2-1w c2-7 c2-1x c2-8 x-d-ux"></div></div><div data-ux="Container" class="x-el x-el-div c2-1 c2-2 c2-1y c2-1z c2-2a c2-2b c2-i c2-3 c2-4 c2-2c c2-5 c2-2d c2-6 c2-2e c2-7 c2-2f c2-8 x-d-ux"><div data-ux="HorizontalBox" class="x-el x-el-div x-el c2-1 c2-2 c2-4i c2-t c2-2g c2-3c c2-4j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4k c2-4l c2-1t c2-4m c2-4n c2-4o c2-12 c2-3i c2-l c2-4p c2-4q c2-4r c2-3 c2-4 c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-4y c2-4z c2-50 c2-51 c2-52 c2-5 c2-53 c2-6 c2-7 c2-8 x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4k c2-4l c2-1t c2-4m c2-4n c2-4o c2-12 c2-3i c2-54 c2-4p c2-4q c2-4r c2-3 c2-4 c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-4y c2-4z c2-50 c2-51 c2-52 c2-5 c2-53 c2-6 c2-7 c2-8 x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4k c2-4l c2-1t c2-4m c2-4n c2-4o c2-12 c2-3i c2-54 c2-4p c2-4q c2-4r c2-3 c2-4 c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-4y c2-4z c2-50 c2-51 c2-52 c2-5 c2-53 c2-6 c2-7 c2-8 x-d-ux"></div></div></div></span></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-14 c1-15 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-5d c1-1z c1-17 c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-29 c1-2a c1-2t c1-5l c1-b c1-c c1-5j c1-7q c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-r c1-s c1-50 c1-b c1-c c1-d c1-7n c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image8" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-t c1-4q c1-p c1-q c1-1x c1-1y c1-2f c1-2g c1-2h c1-b c1-c c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-r c1-s c1-50 c1-b c1-c c1-d c1-7n c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image9" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-t c1-4q c1-p c1-q c1-1x c1-1y c1-2f c1-2g c1-2h c1-b c1-c c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-r c1-s c1-50 c1-b c1-c c1-d c1-7n c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image10" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-t c1-4q c1-p c1-q c1-1x c1-1y c1-2f c1-2g c1-2h c1-b c1-c c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-r c1-s c1-50 c1-b c1-c c1-d c1-7n c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image11" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-t c1-4q c1-p c1-q c1-1x c1-1y c1-2f c1-2g c1-2h c1-b c1-c c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-3h c1-15 c1-1i c1-1j c1-3i c1-1v c1-1w c1-85 c1-5d c1-5e c1-3k c1-3l c1-n c1-5f c1-3n c1-3o c1-3p c1-3q c1-3r c1-5g c1-4e c1-4f c1-3t c1-3u c1-1z c1-b c1-c c1-20 c1-43 c1-d c1-86 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Subscribe</span></h2><div><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-2g c2-2h c2-2i c2-2j c2-g c2-2k c2-h c2-2l c2-3 c2-4 c2-2m c2-2n c2-2o c2-2p c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2h c2-2q c2-2r c2-2s c2-i c2-2t c2-2u c2-2v c2-2w c2-3 c2-4 c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-5 c2-34 c2-35 c2-36 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-b c2-c c2-37 c2-g c2-38 c2-j c2-3 c2-39 c2-4 c2-3a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c2-1 c2-2 c2-h c2-2g c2-3b c2-3c c2-3d c2-j c2-1h c2-3 c2-4 c2-5 c2-3e c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-1f c2-t c2-3 c2-4 c2-5 c2-3f c2-27 c2-3g c2-3h c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-3j c2-3k c2-t c2-18 c2-1a c2-3l c2-19 c2-1d c2-10 c2-3m c2-3n c2-3o c2-3p c2-3 c2-3q c2-4 c2-3a c2-3r c2-1k c2-3s c2-3t c2-3u c2-3v c2-3w c2-3x c2-3y c2-3z c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-40 c2-41 c2-42 c2-43 c2-44 c2-3 c2-3q c2-4 c2-3a c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-t c2-3 c2-4 c2-5 c2-27 c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="FormButton" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-u c2-a c2-v c2-w c2-45 c2-46 c2-z c2-10 c2-s c2-j c2-11 c2-12 c2-c c2-b c2-i c2-t c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-3 c2-1g c2-n c2-1h c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1p c2-1q c2-1r x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-w c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-3h c1-15 c1-1i c1-1j c1-3i c1-1v c1-1w c1-1x c1-5d c1-5e c1-3k c1-3l c1-n c1-5f c1-3n c1-3o c1-3p c1-3q c1-3r c1-5g c1-4e c1-4f c1-3t c1-3u c1-1z c1-b c1-c c1-20 c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2g c2-2h c2-2i c2-2j c2-g c2-2k c2-h c2-2l c2-3 c2-4 c2-2m c2-2n c2-2o c2-2p c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2h c2-2q c2-2r c2-2s c2-i c2-2t c2-2u c2-2v c2-2w c2-3 c2-4 c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-5 c2-34 c2-35 c2-36 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-3c c2-j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-1 c2-2 c2-b c2-c c2-47 c2-e c2-f c2-g c2-1f c2-48 c2-49 c2-4a c2-w c2-3 c2-l c2-4b c2-3a c2-4c c2-4d c2-4e c2-4f x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" aria-live="polite" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="ofaton.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="0ac5b3c9-fc77-4d82-9c4a-f79278bd0007" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="f07778c9-33ba-11ea-81ba-3417ebe725c2" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3j c2-3k c2-t c2-18 c2-1a c2-3l c2-19 c2-1d c2-10 c2-3m c2-3n c2-3o c2-3p c2-3 c2-3q c2-4 c2-3a c2-3r c2-1k c2-3s c2-3t c2-3u c2-3v c2-3w c2-3x c2-3y c2-3z c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-40 c2-41 c2-42 c2-43 c2-44 c2-3 c2-3q c2-4 c2-3a c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3j c2-3k c2-t c2-18 c2-1a c2-3l c2-19 c2-1d c2-10 c2-3m c2-3n c2-3o c2-3p c2-3 c2-3q c2-4 c2-3a c2-3r c2-1k c2-3s c2-3t c2-3u c2-3v c2-3w c2-3x c2-3y c2-3z c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-40 c2-41 c2-42 c2-43 c2-44 c2-3 c2-3q c2-4 c2-3a c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-3j c2-3k c2-t c2-18 c2-1a c2-3l c2-19 c2-1d c2-10 c2-v c2-w c2-3o c2-3p c2-4h c2-3 c2-3q c2-4 c2-3a c2-3r c2-1k c2-3y c2-3z c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="FormButton" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-u c2-a c2-v c2-w c2-x c2-y c2-z c2-10 c2-s c2-j c2-11 c2-12 c2-c c2-b c2-i c2-t c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-3 c2-1g c2-n c2-1h c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1p c2-1q c2-1r x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 1px; height: 1px; visibility: hidden;"></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-29 c1-5h c1-5i c1-5j c1-1x c1-5k c1-5l c1-5m c1-b c1-c c1-5n c1-5o c1-5p c1-5q c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-88 c1-t c1-39 c1-5t c1-5u c1-5v c1-b c1-c c1-89 c1-8a c1-8b c1-5y c1-5z c1-60 c1-61 c1-d c1-8d c1-8e c1-8f c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-98 c1-1z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-50 c1-6a c1-6b c1-6c c1-v c1-b c1-20 c1-6e c1-43 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-50 c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-b c1-7c c1-c c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-69 c1-1v c1-1w c1-1x c1-50 c1-6a c1-6b c1-6c c1-v c1-b c1-20 c1-6e c1-43 c1-6f c1-6g c1-6h c1-6i x-d-ux x-d-aid x-d-route">ofaton</h4></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-5c c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-5u c1-b c1-c c1-99 c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-1z c1-9a c1-5c c1-b c1-c c1-33 c1-d c1-34 c1-e c1-37 c1-f c1-38 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9b c1-39 c1-9c c1-3a c1-9d c1-1x c1-1w c1-1y c1-1v c1-9e c1-b c1-c c1-9f c1-9g c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-8g c1-22 c1-b c1-20 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">ofaton</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-29 c1-5h c1-5i c1-5j c1-1x c1-1w c1-1y c1-1v c1-2a c1-1z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-5s c1-t c1-39 c1-9c c1-3a c1-9d c1-b c1-c c1-d c1-9h c1-9i c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-1x c1-1y c1-b c1-9j c1-52 c1-43 c1-57 c1-3g c1-59 c1-5a c1-5b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 ofaton - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5h c1-2y c1-5r c1-5s c1-t c1-39 c1-9c c1-3a c1-9d c1-b c1-c c1-d c1-9h c1-9i c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6j c1-9k c1-1y c1-b c1-9j c1-52 c1-43 c1-57 c1-9l c1-86 c1-59 c1-5a c1-5b x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-9k c1-b c1-1q c1-52 c1-1r c1-1s c1-1t c1-57 c1-9l c1-86 c1-59 c1-5a c1-5b x-d-ux" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.7949.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.43.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/906844ec8cf84913/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["cabin","default",""],"colors":["#8b939a"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme22"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"ofaton"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"ofaton"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Left"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Left"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/907e1737b1377278/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-5'] = {"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#8b939a"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme22"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/ba8a4ba56512e523/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/5c161d56337ef2ab/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/c606086891af9280/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/0ac5b3c9-fc77-4d82-9c4a-f79278bd0007/gpub/940a63e9fdfad7e5/script.js"></script>
<script type="text/javascript">document.getElementById('page-7937').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"0ac5b3c9-fc77-4d82-9c4a-f79278bd0007"}),_trfd.push({"pd":"2020-01-10T15:08:01.329Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
