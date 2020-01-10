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
<html data-scrapbook-source="https://kaleort.godaddysites.com/" data-scrapbook-create="20200110142641172" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>kaleort</title><meta name="author" content="kaleort"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://kaleort.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://kaleort.appspot.com/">
<meta property="og:site_name" content="kaleort">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/Qzw90G5">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="kaleort">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/Qzw90G5">
<meta name="twitter:image:alt" content="kaleort">
<meta name="theme-color" content="#f5f4f2"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
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
Copyright (c) 2011 by Brian J. Bonislawsky DBA Astigmatic (AOETI). All rights reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* latin */
@font-face {
  font-family: 'Yellowtail';
  font-style: normal;
  font-weight: 400;
  src: local('Yellowtail Regular'), local('Yellowtail-Regular'), url("https://img1.wsimg.com/gfonts/s/yellowtail/v10/OZpGg_pnoDtINPfRIlLohlvHwWL9f4k.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Lora Project Authors (https://github.com/cyrealtype/Lora-Cyrillic), with Reserved Font Name "Lora".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LLPtLtfOm84TX.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LJftLtfOm84TX.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LLvtLtfOm84TX.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LL_tLtfOm84TX.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LIftLtfOm8w.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5eldGr2b7e-DpH.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5enNGr2b7e-DpH.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5el9Gr2b7e-DpH.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5eltGr2b7e-DpH.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5emNGr2b7e-A.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwf7I_FMl_GW8g.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMw77I_FMl_GW8g.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwX7I_FMl_GW8g.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwT7I_FMl_GW8g.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwr7I_FMl_E.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtFumtus-7zu-Q.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNthumtus-7zu-Q.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtNumtus-7zu-Q.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtJumtus-7zu-Q.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url("https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtxumtus-7w.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/e0562a869434d66d/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Lora, serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { overflow-wrap: break-word; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { line-height: 1.2; }
.x .c2-c { margin-left: 0px; }
.x .c2-d { margin-right: 0px; }
.x .c2-e { margin-top: 0px; }
.x .c2-f { margin-bottom: 0px; }
.x .c2-g { max-width: 100%; }
.x .c2-h { padding-top: 24px; }
.x .c2-i { padding-bottom: 24px; }
.x .c2-j { font-family: "Yellowtail", serif, system-ui; }
.x .c2-k { color: rgb(27, 27, 27); }
.x .c2-l { font-weight: 400; }
.x .c2-m { font-size: 32px; }
.x .c2-r { display: inline-block; }
.x .c2-s { width: 100%; }
.x .c2-t { padding-top: 8px; }
.x .c2-u { padding-bottom: 8px; }
.x .c2-v { padding-left: 32px; }
.x .c2-w { padding-right: 32px; }
.x .c2-x { background-color: rgb(255, 255, 255); }
.x .c2-y { border-style: none; }
.x .c2-z { text-align: center; }
.x .c2-10 { text-decoration: none; }
.x .c2-11 { cursor: pointer; }
.x .c2-12 { border-radius: 0px; }
.x .c2-13 { margin-top: 16px; }
.x .c2-14 { margin-bottom: 16px; }
.x .c2-15 { border: 1px solid; }
.x .c2-16 { border-color: rgb(147, 144, 138); }
.x .c2-17 { color: rgb(122, 118, 110); }
.x .c2-18 { text-shadow: none; }
.x .c2-19:hover { background-color: rgb(229, 226, 221); }
.x .c2-1a:hover { border-color: rgb(28, 27, 27); }
.x .c2-1b:hover { color: rgb(28, 27, 27); }
.x .c2-1c:focus { outline: currentcolor none medium; }
.x .c2-1d:active { background-color: rgb(229, 226, 221); }
.x .c2-1e:active { border-color: rgb(28, 27, 27); }
.x .c2-1g { display: flex; }
.x .c2-1h { box-sizing: border-box; }
.x .c2-1i { flex-direction: row; }
.x .c2-1j { flex-wrap: wrap; }
.x .c2-1k { margin-right: -12px; }
.x .c2-1l { margin-bottom: -24px; }
.x .c2-1m { margin-left: -12px; }
.x .c2-1r { flex-grow: 1; }
.x .c2-1s { flex-shrink: 1; }
.x .c2-1t { flex-basis: 0%; }
.x .c2-1u { padding-top: 0px; }
.x .c2-1v { padding-right: 12px; }
.x .c2-1w { padding-left: 12px; }
.x .c2-27 { flex-direction: column; }
.x .c2-28 { width: auto; }
.x .c2-29 { margin-right: auto; }
.x .c2-2a { vertical-align: middle; }
.x .c2-2b { align-self: flex-start; }
.x .c2-2d { padding-bottom: 0px; }
.x .c2-2f { line-height: 1.8; }
.x .c2-2g a:not([data-ux]) { color: inherit; }
.x .c2-2h a:not([data-ux]) { border-bottom-style: solid; }
.x .c2-2i a:not([data-ux]) { border-bottom-width: 1px; }
.x .c2-2j a:not([data-ux]) { border-color: rgb(245, 244, 242); }
.x .c2-2k a:not([data-ux]) { padding-bottom: 2px; }
.x .c2-2l a:not([data-ux]) { text-decoration: none; }
.x .c2-2m a:not([data-ux]) { font-size: inherit; }
.x .c2-2n { color: rgb(255, 255, 255); }
.x .c2-2o { justify-content: center; }
.x .c2-2p { align-items: center; }
.x .c2-2r { margin-bottom: 24px; }
.x .c2-2w { position: relative; }
.x .c2-2x { background-color: transparent; }
.x .c2-2y { border-color: rgba(255, 255, 255, 0.3); }
.x .c2-2z { border-top-width: 0px; }
.x .c2-30 { border-right-width: 0px; }
.x .c2-31 { border-bottom-width: 1px !important; }
.x .c2-32 { border-left-width: 0px; }
.x .c2-33 { padding-top: 23px; }
.x .c2-34 { padding-bottom: 7px; }
.x .c2-35 { padding-left: 0px; }
.x .c2-36 { padding-right: 0px; }
.x .c2-37 { border-bottom-style: solid; }
.x .c2-38::placeholder { color: inherit; }
.x .c2-39:focus + label { font-size: 12px; }
.x .c2-3a:focus + label { top: 5px; }
.x .c2-3b:focus + label { color: rgb(255, 255, 255); }
.x .c2-3c:not([value=""]) + label { font-size: 12px; }
.x .c2-3d:not([value=""]) + label { top: 8px; }
.x .c2-3e:not([value=""]) + label { color: rgb(255, 255, 255); }
.x .c2-3f::-webkit-input-placeholder { color: inherit; }
.x .c2-3h { position: absolute; }
.x .c2-3i { top: 50%; }
.x .c2-3j { left: 0px; }
.x .c2-3k { transition: all 0.15s ease 0s; }
.x .c2-3l { pointer-events: none; }
.x .c2-3m { margin-top: 4px; }
.x .c2-3n { margin-bottom: 4px; }
.x .c2-3o { border-color: rgb(255, 255, 255); }
.x .c2-3p:hover { background-color: rgb(245, 244, 242); }
.x .c2-3q:hover { border-color: rgb(0, 0, 0); }
.x .c2-3r:hover { color: rgb(0, 0, 0); }
.x .c2-3s:active { background-color: rgb(245, 244, 242); }
.x .c2-3t:active { border-color: rgb(0, 0, 0); }
.x .c2-3u { line-height: 1.25; }
.x .c2-3v { font-size: 18px; }
.x .c2-40 { border-color: rgb(226, 226, 226); }
.x .c2-41 { color: rgb(71, 71, 71); }
.x .c2-42:focus + label { color: rgb(122, 118, 110); }
.x .c2-43:not([value=""]) + label { color: rgb(122, 118, 110); }
.x .c2-44 { padding-top: 23px; }
.x .c2-45 { padding-bottom: 7px; }
.x .c2-46 { resize: vertical; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-k{padding-top:0px}}@media (max-width: 767px){.x .c1-l{padding-bottom:0px}}@media (max-width: 767px){.x .c1-1v{width:100%}}@media (max-width: 767px){.x .c1-4s{padding-top:40px}}@media (max-width: 767px){.x .c1-4t{padding-bottom:40px}}@media (max-width: 767px){.x .c1-5i > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5j  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-6w{width:auto}}@media (max-width: 767px){.x .c1-6x{max-width:224px}}@media (max-width: 767px){.x .c1-6y{display:block}}@media (max-width: 767px){.x .c1-6z{max-height:80px}}@media (max-width: 767px){.x .c1-70{margin-top:0}}@media (max-width: 767px){.x .c1-71{margin-right:auto}}@media (max-width: 767px){.x .c1-72{margin-bottom:0}}@media (max-width: 767px){.x .c1-73{margin-left:auto}}@media (max-width: 767px){.x .c1-94{display:flex}}@media (max-width: 767px){.x .c1-95{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/d2f5a44e7bba0078/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-n { font-size: 38px; }
}
@media (min-width: 768px) {
  .x .c2-1f { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1o { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1p { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-1q { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1x { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-1y { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-1z { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-20 { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-21 { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-22 { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-23 { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2c { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2e { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-3w { font-size: 18px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/be4f7efa15d906f4/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-o { font-size: 38px; }
}
@media (min-width: 1024px) {
  .x .c2-24 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-25 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-26 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2q { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2s { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2t { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2u { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2v { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-3x { font-size: 18px; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-11 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-2k { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c1-3z { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-4p > div { max-width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-50 { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-5n { font-size: 18px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-p { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-3y { font-size: 18px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-12 { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-2l { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-40 { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-51 { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-5o { font-size: 20px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-q { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-3z { font-size: 20px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-yellowtail" context="[object Object]"><div id="layout-04-d-2-c-5-d-5-1229-4638-a-602-97-bd-7-de-15484" class="layout layout-layout layout-layout-layout-26 locale-en-US lang-en"><div data-ux="Page" id="page-5900" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-d c1-r c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-i c1-j c1-b c1-c c1-x c1-d c1-y c1-z c1-10 c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-14 c1-b c1-c c1-d c1-15 c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-1m c1-j c1-1n c1-1o c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1t c1-1u c1-w c1-c c1-1v c1-1w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="kaleort" href="" class="x-el x-el-a c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-b c1-28 c1-c c1-29 c1-2a c1-2b c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.5904.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingZeta" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-1" logotext="kaleort" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-r c2-s c2-j c2-m c2-n c2-o c2-p c2-q x-d-ux x-d-aid x-d-route">kaleort</span></h3></span></div></a></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2m c1-b c1-c c1-d c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1e c1-16 c1-2n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2o c1-2p c1-2q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1o c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1t c1-1u c1-w c1-4 c1-c c1-1v c1-1w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="kaleort" href="" class="x-el x-el-a c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-b c1-28 c1-c c1-29 c1-2a c1-2b c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.5906.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingZeta" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-2" logotext="kaleort" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-r c2-s c2-j c2-m c2-n c2-o c2-p c2-q x-d-ux x-d-aid x-d-route">kaleort</span></h3></span></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2o c1-2p c1-2q c1-16 c1-2r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></nav></div></div><div id="guacBg5908" role="img" data-guac-image="loaded" data-ux="Background" data-ht="Fill" data-aid="BACKGROUND_IMAGE_RENDERED" data-route="hasMedia:mediaData" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-4 c1-2y c1-2z c1-30 c1-b c1-c c1-d c1-31 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-ht x-d-aid x-d-route" style="background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:2980,h:880,cg:true,m/cr=w:2980,h:880,a:cc&quot;); opacity: 1;"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg5908'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-2x c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-16 c1-32 c1-1e c1-33 c1-13 c1-34 c1-4 c1-35 c1-36 c1-b c1-c c1-d c1-37 c1-38 c1-e c1-f c1-g x-d-ux"><h1 typography="BodyAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-1c c1-1o c1-b c1-3a c1-c c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div typography="HeadingEpsilon" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-3b c1-1a c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-1o c1-3j c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-4 c1-3q c1-3r c1-3s c1-3t c1-3u c1-b c1-2f c1-3v c1-2g c1-3w c1-3x c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-3" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="HeroButton" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-1 c2-2 c2-t c2-u c2-v c2-w c2-x c2-y c2-r c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-s c2-12 c2-13 c2-14 c2-15 c2-16 c2-j c2-17 c2-l c2-18 c2-4 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4q c1-4r c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-20 c1-21 c1-4u c1-2d c1-2e c1-1a c1-4v c1-4w c1-1o c1-1u c1-4x c1-2f c1-2g c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Our App</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-53 c1-54 c1-55 c1-b c1-c c1-1f c1-1g c1-56 c1-1i c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-58 c1-59 c1-b c1-c c1-1p c1-1q c1-5a c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-53 c1-1c c1-55 c1-5b c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-j c1-59 c1-16 c1-32 c1-1e c1-b c1-c c1-5c c1-5d c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-33 c1-4 c1-5e c1-5f c1-5g c1-5h c1-36 c1-b c1-c c1-5i c1-5j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-1c c1-b c1-2f c1-5k c1-2g c1-5l c1-5m c1-5n c1-5o x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-1a c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-3a c1-c c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-58 c1-59 c1-b c1-c c1-1p c1-1q c1-5a c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-53 c1-1c c1-55 c1-5b c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-j c1-59 c1-16 c1-32 c1-1e c1-b c1-c c1-5c c1-5d c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-33 c1-4 c1-5e c1-5f c1-5g c1-5h c1-36 c1-b c1-c c1-5i c1-5j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-1c c1-b c1-2f c1-5k c1-2g c1-5l c1-5m c1-5n c1-5o x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-1a c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-3a c1-c c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-58 c1-59 c1-b c1-c c1-1p c1-1q c1-5a c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-53 c1-1c c1-55 c1-5b c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-1l c1-w c1-i c1-57 c1-j c1-59 c1-16 c1-32 c1-1e c1-b c1-c c1-5c c1-5d c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-33 c1-4 c1-5e c1-5f c1-5g c1-5h c1-36 c1-b c1-c c1-5i c1-5j c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-1c c1-b c1-2f c1-5k c1-2g c1-5l c1-5m c1-5n c1-5o x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-1a c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-3a c1-c c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-5"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-6i c1-6j c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4q c1-4r c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-2 c1-20 c1-21 c1-4u c1-2d c1-2e c1-1a c1-4v c1-4w c1-1o c1-1u c1-4x c1-2f c1-2g c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-1l c2-1m c2-3 c2-4 c2-1n c2-1o c2-1p c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-1v c2-i c2-1w c2-3 c2-4 c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-5 c2-24 c2-25 c2-26 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/NpGkDJg/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-28 c2-c c2-29 c2-e c2-f c2-2a c2-2b c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/yrnrO9R/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-28 c2-c c2-29 c2-e c2-f c2-2a c2-2b c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/jp1PnrG/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-28 c2-c c2-29 c2-e c2-f c2-2a c2-2b c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4q c1-4r c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-4v c1-1o c1-b c1-2f c1-4x c1-2g c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-32 c1-54 c1-b c1-c c1-52 c1-6u c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1o c1-u c1-v c1-6v c1-b c1-c c1-d c1-3x c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image6" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-w c1-6r c1-s c1-t c1-1a c1-1c c1-6s c1-b c1-c c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1o c1-u c1-v c1-6v c1-b c1-c c1-d c1-3x c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image7" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-w c1-6r c1-s c1-t c1-1a c1-1c c1-6s c1-b c1-c c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1o c1-u c1-v c1-6v c1-b c1-c c1-d c1-3x c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image8" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-w c1-6r c1-s c1-t c1-1a c1-1c c1-6s c1-b c1-c c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1o c1-u c1-v c1-6v c1-b c1-c c1-d c1-3x c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image9" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-w c1-6r c1-s c1-t c1-1a c1-1c c1-6s c1-b c1-c c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-6i c1-6j c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg5909" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-7a c1-2t c1-2u c1-2v c1-7b c1-2z c1-7c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-guac-image="loaded" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/xVErzm3/:/rs=w:2240,h:560,cg:true,m/cr=w:2240,h:560,a:cc&quot;); opacity: 1;"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-7d c1-4q c1-4r c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-7e c1-b c1-c c1-d c1-7f c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-7g c1-1o c1-b c1-7h c1-3v c1-2g c1-3w c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-route">Subscribe</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-f c2-1m c2-3 c2-4 c2-1n c2-1o c2-2c c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-1v c2-2d c2-1w c2-3 c2-4 c2-1x c2-1y c2-1z c2-20 c2-21 c2-2e c2-23 c2-5 c2-24 c2-25 c2-26 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-2f c2-e c2-14 c2-2g c2-2h c2-2i c2-2j c2-2k c2-2l c2-2m c2-z c2-3 c2-2n c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c2-1 c2-2 c2-f c2-1g c2-27 c2-2o c2-2p c2-z c2-18 c2-3 c2-4 c2-5 c2-2q c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2r c2-s c2-3 c2-4 c2-5 c2-2s c2-2t c2-2u c2-2v c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2x c2-2y c2-s c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-12 c2-3 c2-2n c2-4 c2-l c2-38 c2-1c c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e c2-3f c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3h c2-3i c2-3j c2-3k c2-3l c2-3 c2-2n c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-s c2-3 c2-4 c2-5 c2-2t c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-1 c2-2 c2-t c2-u c2-v c2-w c2-2x c2-y c2-r c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-s c2-12 c2-3m c2-3n c2-15 c2-3o c2-j c2-2n c2-l c2-18 c2-4 c2-3p c2-3q c2-3r c2-1c c2-3s c2-3t c2-1f c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/xVErzm3/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg5909'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-4n c1-4o c1-4p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4q c1-4r c1-2x c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-20 c1-21 c1-4u c1-2d c1-2e c1-1a c1-4v c1-4w c1-1o c1-1u c1-4x c1-2f c1-2g c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-f c2-1m c2-3 c2-4 c2-1n c2-1o c2-2c c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-1v c2-2d c2-1w c2-3 c2-4 c2-1x c2-1y c2-1z c2-20 c2-21 c2-2e c2-23 c2-5 c2-24 c2-25 c2-26 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-2o c2-z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-1 c2-2 c2-9 c2-a c2-3u c2-c c2-d c2-e c2-2r c2-3 c2-k c2-3v c2-l c2-3w c2-3x c2-3y c2-3z x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" aria-live="polite" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="kaleort.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="04d2c5d5-1229-4638-a602-97bd7de15484" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="068c06f4-33b5-11ea-81b3-3417ebe725e0" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-f c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-2w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-2x c2-40 c2-s c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-12 c2-3 c2-41 c2-4 c2-l c2-38 c2-1c c2-39 c2-3a c2-42 c2-3c c2-3d c2-43 c2-3f c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3h c2-3i c2-3j c2-3k c2-3l c2-3 c2-41 c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-2w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-2x c2-40 c2-s c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-12 c2-3 c2-41 c2-4 c2-l c2-38 c2-1c c2-39 c2-3a c2-42 c2-3c c2-3d c2-43 c2-3f c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3h c2-3i c2-3j c2-3k c2-3l c2-3 c2-41 c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-2x c2-40 c2-s c2-2z c2-30 c2-31 c2-32 c2-44 c2-45 c2-35 c2-36 c2-37 c2-12 c2-46 c2-3 c2-41 c2-4 c2-l c2-38 c2-1c c2-3f c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-1 c2-2 c2-t c2-u c2-v c2-w c2-x c2-y c2-r c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-s c2-12 c2-3m c2-3n c2-15 c2-16 c2-j c2-17 c2-l c2-18 c2-4 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 1px; height: 1px; visibility: hidden;"></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-53 c1-54 c1-55 c1-b c1-c c1-1f c1-1g c1-56 c1-1i c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1j c1-1k c1-6k c1-w c1-i c1-57 c1-14 c1-59 c1-b c1-c c1-6l c1-6m c1-6n c1-1p c1-1q c1-5a c1-1s c1-d c1-6o c1-6p c1-6q c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8q c1-1o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-6v c1-b c1-2f c1-5k c1-2g c1-5l c1-5m c1-5n c1-5o x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-1a c1-6v c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-3a c1-c c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-21 c1-39 c1-2d c1-2e c1-1a c1-6v c1-b c1-2f c1-5k c1-2g c1-5l c1-5m c1-5n c1-5o x-d-ux x-d-aid x-d-route">kaleort</h4></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-8r c1-8s c1-b c1-c c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-52 c1-1a c1-2e c1-1c c1-2d c1-1e c1-1o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-8t c1-1k c1-1l c1-w c1-i c1-7v c1-j c1-7u c1-b c1-c c1-d c1-8u c1-8v c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-1a c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-b c1-8w c1-c c1-2g c1-d c1-8x c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 kaleort - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-8t c1-1k c1-1l c1-w c1-i c1-7v c1-j c1-7u c1-b c1-c c1-d c1-8u c1-8v c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-20 c1-21 c1-5p c1-8y c1-1c c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-b c1-8w c1-c c1-2g c1-d c1-8z c1-7f c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-23 c1-28 c1-7w c1-90 c1-4f c1-91 c1-c c1-8y c1-b c1-29 c1-2a c1-2b c1-d c1-8z c1-7f c1-e c1-f c1-g x-d-ux" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.5913.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-u c1-v c1-w c1-1o c1-8y c1-b c1-c c1-x c1-d c1-y c1-e c1-11 c1-f c1-12 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-92 c1-i c1-7v c1-j c1-7u c1-1a c1-2e c1-1c c1-2d c1-93 c1-b c1-c c1-94 c1-95 c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.43.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/6ad343a6cab6f349/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["yellowtail","default",""],"colors":["#f5f4f2"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme26"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kaleort"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kaleort"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/260fe478289b9483/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-4'] = {"renderMode":"PUBLISH","fonts":["yellowtail","default",""],"colors":["#f5f4f2"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme26"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/11c27ca4a7bad6d6/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/136f3b5331be8020/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/355669d0c5d18d38/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/c606086891af9280/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/04d2c5d5-1229-4638-a602-97bd7de15484/gpub/6630cb1a4f2e1929/script.js"></script>
<script type="text/javascript">document.getElementById('page-5900').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"04d2c5d5-1229-4638-a602-97bd7de15484"}),_trfd.push({"pd":"2020-01-10T14:25:57.354Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
