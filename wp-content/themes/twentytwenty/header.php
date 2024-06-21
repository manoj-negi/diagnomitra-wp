<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <script src="<?php bloginfo('template_url'); ?>/ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>

    <link href="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="<?php bloginfo('template_url'); ?>/fonts.googleapis.com/index.html">
    <link rel="preconnect" href="<?php bloginfo('template_url'); ?>/fonts.gstatic.com/index.html" crossorigin>
    <link
        href="<?php bloginfo('template_url'); ?>/fonts.googleapis.com/css2df7e.css?family=Quicksand:wght@500;600;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="<?php bloginfo('template_url'); ?>/fonts.googleapis.com/css2db6f.css?family=Roboto+Flex&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS Css -->
    <link href="<?php bloginfo('template_url'); ?>/unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />


    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css">
    <link rel="stylesheet"
        href="<?php bloginfo('template_url'); ?>/static.joonsite.com/storage/21443/20284/assets/style1123.css?v=20240509094431">



    <meta name="robots" content="noindex" />
    <meta name="generator" content="Joonweb.com Website Builder" />
    <link rel="icon" type="image/ico"
        href="<?php bloginfo('template_url'); ?>/static.joonsite.com/storage/21443/media/2404251157347610.png"
        size="16x16">
    <link
        href="fonts.googleapis.com/cssbb8b.html?family=Quicksand%2C+sans-serif%7CTimes+New+Roman%7CNunito+Sans%7CRoboto+Flex%2C+sans-serif"
        rel="stylesheet">

    <style>
    :root {
        --color1: #080a52;
        --color2: #ffe4f7;
        --color3: #eb2188;
        --color4: #e6fdff;
        --color5: #fff;
        --color6: #070707;

        --border-color: #CDC2AE;
        --light-border: #171717;
        --bx-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

        --fontStyle1: normal normal bold 48px/1.2 Quicksand, sans-serif;
        --fontStyle2: normal normal bold 40px/1.2 Times New Roman;
        --fontStyle3: normal normal bold 26px/1.2 Nunito Sans;
        --fontStyle4: normal normal normal 18px/1.2 Times New Roman;
        --fontStyle5: normal normal normal 20px/1.3 Times New Roman;
        --fontStyle6: normal normal normal 18px/1.2 Times New Roman;
        --fontStyle7: normal normal normal 18px/1.3 Times New Roman;
        --fontStyle8: normal normal normal 17px/1.3 Times New Roman;
        --fontStyle9: normal normal normal 14px/1.3 Roboto Flex, sans-serif;
    }

    select,
    textarea,
    input {
        background: transparent;
    }

    .background1 {
        background: var(--color1);
        color: var(--color5);
        border-color: var(--color5);
    }

    .background2 {
        background: var(--color2);
        color: var(--color6);
        border-color: var(--color6);
    }

    .background3 {
        background: var(--color3);
        color: var(--color5);
        border-color: var(--color5);
    }

    .background4 {
        background: var(--color4);
        color: var(--color6);
        border-color: var(--color6);
    }

    .background5 {
        background: var(--color5);
        color: var(--color6);
        border-color: var(--color6);
    }

    .background6 {
        background: var(--color6);
        color: var(--color5);
        border-color: var(--color5);
    }

    .background1 input,
    .background1 input::placeholder,
    .background1 textarea,
    .background1 textarea::placeholder {
        color: var(--color5);
    }

    .background2 input,
    .background2 input::placeholder,
    .background2 textarea,
    .background2 textarea::placeholder {
        color: var(--color6);
    }

    .background3 input,
    .background3 input::placeholder,
    .background3 textarea,
    .background3 textarea::placeholder {
        color: var(--color5);
    }

    .background4 input,
    .background4 input::placeholder,
    .background4 textarea,
    .background4 textarea::placeholder {
        color: var(--color6);
    }

    .background5 input,
    .background5 input::placeholder,
    .background5 textarea,
    .background5 textarea::placeholder {
        color: var(--color6);
    }

    .background6 input,
    .background6 input::placeholder,
    .background6 textarea,
    .background6 textarea::placeholder {
        color: var(--color5);
    }

    .background1 input[type=submit] {
        background: var(--color5);
        color: var(--color6);
    }

    .background2 input[type=submit] {
        background: var(--color6);
        color: var(--color5);
    }

    .background3 input[type=submit] {
        background: var(--color5);
        color: var(--color6);
    }

    .background4 input[type=submit] {
        background: var(--color6);
        color: var(--color5);
    }

    .background5 input[type=submit] {
        background: var(--color1);
        color: var(--color5);
    }

    .background6 input[type=submit] {
        background: var(--color1);
        color: var(--color5);
    }

    .background1 input[type=submit]:hover {
        background: var(--color6);
        color: var(--color5);
    }

    .background2 input[type=submit]:hover {
        background: var(--color5);
        color: var(--color6);
    }

    .background3 input[type=submit]:hover {
        background: var(--color6);
        color: var(--color5);
    }

    .background4 input[type=submit]:hover {
        background: var(--color5);
        color: var(--color6);
    }

    .background5 input[type=submit]:hover {
        background: var(--color5);
        color: var(--color1);
    }

    .background6 input[type=submit]:hover {
        background: var(--color5);
        color: var(--color1);
    }

    .fontStyle1 {
        font: var(--fontStyle1);
    }

    .fontStyle2 {
        font: var(--fontStyle2);
    }

    .fontStyle3 {
        font: var(--fontStyle3);
    }

    .fontStyle4 {
        font: var(--fontStyle4);
    }

    .fontStyle5 {
        font: var(--fontStyle5);
    }

    .fontStyle6 {
        font: var(--fontStyle6);
    }

    .fontStyle7 {
        font: var(--fontStyle7);
    }

    .fontStyle8 {
        font: var(--fontStyle8);
    }

    .fontStyle9 {
        font: var(--fontStyle9);
    }

    .mg-0 {
        margin-bottom: 0.5rem;
    }

    .mg-1 {
        margin-bottom: 1rem;
    }

    .mg-2 {
        margin-bottom: 2rem;
    }

    .mg-3 {
        margin-bottom: 3rem;
    }

    .mg-4 {
        margin-bottom: 4rem;
    }

    .padding-2 {
        padding: 2rem 0;
    }

    .padding-3 {
        padding: 3rem 0;
    }

    .padding-4 {
        padding: 4rem 0;
    }

    /* Global CSS for settings */
    .section-padding {
        padding: 24px 0;
    }

    .content-padding {
        padding: 12px 0;
    }

    @media screen and (min-width: 750px) {
        .section-padding {
            padding: 48px 0;
        }

        .content-padding {
            padding: 24px 0;
        }
    }

    /* End */
    @media (max-width: 750px) {
        .w-md-100 {
            width: 100% !important;
        }

        .w-md-75 {
            width: 75% !important;
        }

        .w-md-50 {
            width: 50% !important;
        }
    }


    a {
        text-decoration: none;
        color: unset;
    }

    body {
        overflow-x: hidden;
    }

    .theme-shadow-lg {
        box-shadow: -8px 16px 25px #bbb;
    }


    /* About Variants */
    .about-content {
        width: 80%;
        margin: 0 auto;
    }

    .about-media img {
        width: 100%;
        object-fit: cover;
        aspect-ratio: 2/1;
    }

    .about-media2 img {
        width: 100%;
        object-fit: cover;
        aspect-ratio: 1/1;
    }

    @media(max-width:991px) {
        .about-content {
            width: 100%;
            margin: 0 auto;
        }
    }

    /* About Variants End */

    /* Column Variants */
    .column-media img {
        width: 100%;
        aspect-ratio: 3/2;
        object-fit: cover;
    }

    .column-item {
        text-align: center;
    }

    .column-icon-media img {
        width: 50px;
        aspect-ratio: 1/1;
    }

    .border-radius-2 {
        border-radius: 2rem;
    }

    /* Column Variants End */

    /* Slider */
    .slide_first .slick-slide {
        max-height: 500px;
    }

    .slide_img_2 img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .slide_img_2 {
        position: relative;
    }

    .slider_2_text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 2rem 3rem;
        width: 50%;
        text-align: center;
        width: 50%;
    }

    .slider_text_2 {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 2rem 3rem;
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .slider_22 .slick-next {
        top: 50%;
        right: 0%;
    }

    .slider_22 .slick-prev {
        top: 50%;
        left: 0%;
    }

    .slider_11 .slick-next {
        top: 50%;
        right: 0%;
    }

    .slider_11 .slick-prev {
        top: 50%;
        left: 0%;
    }

    .slider_22 .slick-prev::before {
        font-family: FontAwesome;
        font-size: normal;
        content: '\f104';
        font-size: 1.2rem;
        transition: all 0.4s linear;
        color: var(--color6);
        background: transparent;
        border: none;
        outline: none;
    }

    .slider_22 .slick-next::before {
        font-family: FontAwesome;
        font-size: normal;
        content: '\f105';
        font-size: 1.2rem;
        transition: all 0.4s linear;
        color: var(--color6);
        background: transparent;
        border: none;
        outline: none;
    }

    .slider_22 .slick-prev,
    .slick-next {
        position: absolute;
        width: 50px;
        font-size: 0.1px;
        z-index: 1;
    }

    .slider_22 .slick-dots .slick-active {
        background-color: var(--color6);
        transition: all 0.4s ease-in-out;
    }

    .slider_22 .slick-dots li {
        border-radius: 50%;
        height: 10px;
        width: 10px;
        display: inline-block;
        font-size: 0px;
        margin: 0 0.3rem;
        cursor: pointer;
        border: 0.2px solid var(--color6);
    }

    .slider_22 .slick-dots {
        bottom: 5%;
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .slider_11 .slick-dots {
        bottom: 5%;
        left: 25%;
    }

    .slider_22 .slick-dotted.slick-slider {
        margin-bottom: 0px;
    }

    .slider_22 .slick-dots {
        margin-bottom: 0px;
        padding-left: 0;
    }

    .slider_22 .slick-dots li.slick-active button:before {
        color: unset;
    }

    .slider_22 .slick-dots li button:before {
        color: unset;
    }

    @media(max-width:991px) {
        .slider_22 .slick-next {
            top: 50%;
            right: 0%;
        }

        .slider_22 .slick-prev {
            top: 50%;
            left: 0%;
        }

        .slider_2_text,
        .slider_text_2 {
            width: 70%;
            padding: 2rem 2rem;
        }

        .slider_text_2 {
            width: 50%;
        }

        .slider_11 .slick-next {
            top: 50%;
            right: 0%;
        }

        .slider_11 .slick-prev {
            top: 50%;
            left: 0%;
        }
    }

    @media(max-width:576px) {
        .slider_22 .slick-next {
            top: 50%;
            right: 0%;
        }

        .slider_22 .slick-prev {
            top: 50%;
            left: 0%;
        }

        .slider_2_text,
        .slider_text_2 {
            width: 80%;
            padding: 2rem 1rem;
            text-align: center;
        }

        .slider_text_2 {
            height: auto;
            top: 20%;
            left: 10%;
        }

        .slider_11 .slick-next {
            top: 50%;
            right: 0%;
        }

        .slider_11 .slick-prev {
            top: 50%;
            left: 0%;
        }

        .slider_11 .slick-dots {
            bottom: 5%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
        }
    }

    /* Slider End */

    /* Text variants */
    .text-media img {
        max-height: 240px;
        object-fit: contain;
    }

    /* Text variants End */

    /* Video */
    .video-media iframe {
        width: 100%;
        min-height: 450px;
    }

    .video-media2 iframe {
        width: 100%;
        min-height: 350px;
    }

    /* Video End */

    /* Forms */
    .form_1_img {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .form_1_img .form_1_div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 2rem 3rem;
        width: 50%;
    }

    .form_1_img img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .form_2_img img {
        width: 100%;
        aspect-ratio: 3/2;
        object-fit: cover;
    }

    .form_form_style input,
    .form_form_style textarea,
    .form_form_style select {
        outline: none;
        border: none;
        border-bottom: 1px solid rgb(196, 196, 196);
        border-radius: 0;
        padding: 0.5rem 0.5rem;
        width: 100%;
        background: transparent;
    }

    .form_form_style [type=submit] {
        padding: 0.7rem 3rem;
        margin-top: 1rem;
        transition: 0.4s linear;
    }

    .form_form_style li {
        list-style: none;
        margin-bottom: 1rem;
        display: block;
        align-items: center;
    }

    .form_form_style li label {
        width: 100%;
        margin-bottom: 0.5rem;
    }

    @media (max-width:991px) {
        .form_1_img .form_1_div {
            padding: 2rem 2rem;
            width: 70%;
        }
    }

    @media (max-width:576px) {
        .form_1_img .form_1_div {
            width: 90%;
            padding: 2rem 2rem;
        }

        .form_form_style [type=submit] {
            width: 50%;
        }
    }

    /* Form End */

    /* Welcome */
    .welcome_1_img img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .welcome_1_img {
        position: relative;
    }

    .welcome_1_text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 3rem;
    }

    .welcome_1_textt {
        text-align: center;
    }

    .welcome_texts {
        padding: 5rem 0;
    }

    @media (max-width:576px) {
        .welcome_1_text {
            padding: 1rem 3rem;
            width: 90%;
        }
    }

    /* Welcome End */

    /* content  */
    .content_data a {
        color: var(--color1);
        font: var(--fontStyle8);
    }

    .content_data p {
        margin-bottom: 1rem;
    }

    .content_data p,
    .content_data span,
    .content_data li,
    .content_data td,
    .content_data th {
        font: var(--fontStyle8);
    }

    .content_data th {
        font-weight: bold;
        color: #000;
    }

    .content_data table,
    .content_data td,
    .content_data th {
        border: 1px solid #bbb;
        border-collapse: collapse;
    }

    .content_data td,
    .content_data th {
        padding: 0.7rem 1.4rem;
    }

    .content_data img {
        margin: 1rem auto;
        width: 100%;
    }

    .content_data h1 {
        font: var(--fontStyle6);
        margin-bottom: 1rem;
    }

    .content_data h2 {
        font: var(--fontStyle6);
        margin-bottom: 1rem;
    }

    .content_data h3 {
        font: var(--fontStyle7);
        margin-bottom: 1rem;
    }

    .content_data h4 {
        font: var(--fontStyle8);
        margin-bottom: 1rem;
    }

    .content_data h5 {
        font: var(--fontStyle8);
        margin-bottom: 1rem;
    }

    .content_data h6 {
        font: var(--fontStyle8);
        margin-bottom: 1rem;
    }

    .content_data h1 a,
    .content_data h2 a,
    .content_data h3 a,
    .content_data h4 a,
    .content_data h5 a,
    .content_data h6 a {
        font-size: inherit;
    }

    .content_data ul,
    .content_data ol {
        padding-left: 2rem !important;
    }

    .content_data ul li {
        list-style: disc !important;
    }

    .content_data ol li {
        list-style-type: lower-alpha;
    }

    /* content end */


    /* ------ word_limit_2 ----------- */
    .word_limit_2 {
        text-overflow: ellipsis;
        word-break: break-word;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
    }

    .word_limit_3 {
        text-overflow: ellipsis;
        word-break: break-word;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
    }

    /* ------ word_limit_2 end ----------- */


    .see-list-item {
        cursor: pointer;
    }

    .see_popups {
        display: none;
        z-index: 99999999999;
        position: absolute;
    }

    jw-media {
        display: inline-block;
    }

    .shapewheel {
        position: absolute;
        left: 0;
        bottom: -1px;
        width: 100%;
    }

    #jw-popup-container {
        display: none;
        position: fixed;
        z-index: 996;
        width: 60%;
        left: 50%;
        margin-left: -30%;
        top: 20%;
        background-color: #fff;
    }

    #jw-popup-close {
        cursor: pointer;
        position: absolute;
        right: -10px;
        top: -10px;
        z-index: 998;
        width: 25px;
        height: 25px;
        border-radius: 25px;
        text-align: center;
        font-size: 12px;
        background-color: #000;
        line-height: 25px;
        color: #fff;
    }

    #jw-popup-iframe-container {
        position: absolute;
        z-index: 997;
        width: 100%;
        padding-bottom: 56.25%;
        border: 2px solid #000;
        border-radius: 2px;
    }

    #jw-popup-container iframe {
        z-index: 999;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color: #000;
    }

    #jw-popup-overlay {
        display: none;
        position: fixed;
        z-index: 995;
        top: 0;
        background-color: #000;
        opacity: 0.8;
        width: 100%;
        height: 100%;
    }

    .see-dp-none {
        display: none;
    }

    .rs-modal {
        position: fixed;
        z-index: 999999;
        height: 100vh;
        width: 100%;
        top: 0;
        left: 0;
        display: none;
    }

    .rs-modal-inner {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rs-modal .rs-modal-box {
        width: 95%;
        max-width: 350px;
        background: #fff;
        padding: 20px 15px;
        border-radius: 10px;
    }

    .rs-modal .rs-modal-container {
        max-height: 450px;
        overflow-y: scroll;
        scrollbar-width: thin;
        padding: 0px 10px;
    }

    .rs-modal .rs-modal-container::-webkit-scrollbar {
        width: 5px;
    }

    .rs-modal .rs-modal-container::-webkit-scrollbar-track {
        background: none;
    }

    .rs-modal .rs-modal-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 5px;
    }

    .rs-modal .rs-color-modal,
    .review-site .rs-modal .rs-fonts-modal {
        display: none;
    }

    .rs-modal .rs-modal-title {
        font-size: 25px;
        font-weight: 600;
        padding: 20px 0px;
    }

    #jw-popup-close:hover {
        color: #DE0023;
    }

    [data-popup] {
        display: none;
    }
    </style>
</head>

<body <?php body_class(); ?>>
  

    <?php
		wp_body_open();
		?>
    <style>
    #header_0 .media-fit img {
        object-fit: contain;
        height: 40px
    }

    @media screen and (min-width:750px) {
        #header_0 .media-fit img {
            object-fit: contain;
            height: 59px
        }
    }

    #header_0 .theme-title .jwset {
        font-size: px;
        font-family: ;
        font-weight: ;
        line-height: ;
        letter-spacing:
    }

    /* Loader Styles */
.loader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: rgba(255, 255, 255, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}

.spinner {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.loader.hidden {
    opacity: 0;
    visibility: hidden;
}
/* Ensure these styles are in your stylesheet */

.links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 1rem;
    color: white;
}

.links li {
    position: relative;
}

.links a {
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif; /* Ensure this matches your desired font */
    font-size: 18px; /* Adjust as needed */
    font-weight: normal; /* Adjust as needed */
    color: white;
    transition: color 0.3s;
   
}

.links a:hover {
    color: #007bff; /* Adjust hover color as needed */
}

.htmlCss-sub-menu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background: #fff; /* Adjust background as needed */
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.links li:hover .htmlCss-sub-menu {
    display: block;
}

.htmlCss-sub-menu li {
    padding: 10px 15px;
}

.htmlCss-sub-menu a {
    color: white;
    font-family: 'Times New Roman', Times, serif; /* Ensure this matches your desired font */
    font-size: 18px; /* Adjust as needed */
}

.htmlCss-sub-menu a:hover {
    color: #007bff; /* Adjust hover color as needed */
}

    </style>
    <header class="header nav-down" id="header_0">
        <div class="top-bar background4">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo desk align-items-center gap-2">
                    <div class="d-flex flex-wrap gap-2 align-items-center"><a href="index.html" class="media-fit"><img
                                src="<?php bloginfo('template_url'); ?>/static.joonsite.com/storage/21443/media/2404241259411841.png"
                                alt=""></a></div>
                </div>
                <ul class="contact-info gap-3 fontStyle9">
                    <li class="d-flex gap-2"><a href="tel:+91-7055001141"><i class="fa-solid fa-phone me-2"></i><span
                                class="para enquiry">+91-7055001141</span></a></li>
                    <li class="d-flex gap-2"><a href="mailto:help@diagnomitra.com"><i
                                class="fa-solid fa-envelope me-2"></i><span
                                class="para enquiry">help@diagnomitra.com</span></a></li>
                    <li class="d-flex gap-2"><a href="mailto:diagnomitralabs@gmail.com"><i
                                class="fa-solid fa-envelope me-2"></i><span
                                class="para enquiry">diagnomitralabs@gmail.com</span></a></li>
                </ul><a href="javascript:jwpopup('seepoup248962');" target=""
                    class="btn-1 btn-lg comm-btn fontStyle7 background3">Quick Enquiry</a>
            </div>
        </div>
        <nav class="nav background1">
    <div class="container">
        <div class="overlay"></div>
        <div class="navbars">
            <div class="logo mob align-items-center gap-2 py-2">
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <a href="index.html" class="media-fit">
                        <img src="<?php bloginfo('template_url'); ?>/static.joonsite.com/storage/21443/media/2404241259411841.png" alt="">
                    </a>
                </div>
            </div>
            <div class="hamburgers">
                <div class="hamburger">
                    <svg width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle cx="5" cy="6" fill="none" id="XMLID_303_" r="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                        <circle cx="5" cy="16" fill="none" id="XMLID_305_" r="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                        <circle cx="5" cy="26" fill="none" id="XMLID_304_" r="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                        <line fill="none" id="XMLID_29_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="6" y2="6"></line>
                        <line fill="none" id="XMLID_30_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="16" y2="16"></line>
                        <line fill="none" id="XMLID_31_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="26" y2="26"></line>
                    </svg>
                </div>
            </div>
            <div class="nav-links al w-100">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'links',
                    'fallback_cb' => 'wp_page_menu',
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>
            </div>
        </div>
    </div>
</nav>

    </header>
    <style>
    .see-xsm-logo img {
        height: 40px !important;
        object-fit: contain
    }

    .see-sm-logo img {
        height: 50px !important;
        object-fit: contain
    }

    .see-medium-logo img {
        height: 70px !important;
        object-fit: contain
    }

    .see-large-logo img {
        height: 85px !important;
        object-fit: contain
    }

    .see-extra-large-logo img {
        height: 100px !important;
        object-fit: contain
    }

    .navbars {
        display: flex;
        justify-content: space-between
    }

    .nav-links {
        display: flex;
        justify-content: space-between
    }

    @media(max-width:992px) {
        .header {
            box-shadow: unset;
            position: unset
        }

        .overlay {
            background: var(--color6);
            width: 100%;
            height: auto
        }

        nav .navbars .nav-links {
            display: none
        }
    }
    </style>
    <script>
    let navLinks = document.querySelector(".nav-links");
    let overlay = document.querySelector(".overlay");
    let menuOpenBtn = document.querySelector(".navbars .bx-menu, .hamburger");
    let menuCloseBtn = document.querySelector(".overlay, .nav-links .fa-xmark, .hamburger");
    menuOpenBtn.onclick = function() {
        navLinks.style.top = "0";
        overlay.style.top = "0";
        overlay.style.height = "100%";
        navLinks.style.display = "block";
    }
    menuCloseBtn.onclick = function() {
        navLinks.style.top = "-100%";
        overlay.style.top = "-100%";

    }

    // sidebar submenu open close js code
    let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    htmlcssArrow.onclick = function() {
        navLinks.classList.toggle("show1");
    }
    let moreArrow = document.querySelector(".more-arrow");
    moreArrow.onclick = function() {
        navLinks.classList.toggle("show2");
    }
    let jsArrow = document.querySelector(".js-arrow");
    jsArrow.onclick = function() {
        navLinks.classList.toggle("show3");
    }
    function cssLoaded(callback) {
        var cssFiles = document.querySelectorAll('link[rel="stylesheet"]');
        var loaded = 0;
        var total = cssFiles.length;

        function checkLoaded() {
            loaded++;
            if (loaded === total) {
                callback();
            }
        }

        cssFiles.forEach(function(cssFile) {
            if (cssFile.sheet) {
                checkLoaded();
            } else {
                cssFile.addEventListener('load', checkLoaded);
                cssFile.addEventListener('error', checkLoaded);
            }
        });
    }

    // Function to hide the loader
    function hideLoader() {
        var loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('hidden');
            // Remove the loader element after the transition
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    }

    // Wait until the CSS is fully loaded before hiding the loader
    document.addEventListener('DOMContentLoaded', function() {
        cssLoaded(hideLoader);
    });

    </script>


    <?php
		