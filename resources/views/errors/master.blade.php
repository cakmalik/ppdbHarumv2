<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title','Maaf')</title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
    <link href="/500.css" rel="stylesheet" type="text/css" />
    <link href="/assets/org/css/selecthealth.css" rel="stylesheet" type="text/css" media="screen, projection" />

    <style>
        /**/
        :root {
            --main-color: white;
            --stroke-color: #5d862e;
            --link-color: #29abe2;
        }

        /**/
        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        .loading h1,
        .loading h2 {
            margin-top: 0px;
            opacity: 0;
        }

        .gears {
            position: relative;
            margin: 0 auto;
            width: auto;
            height: 0;
        }

        .gear {
            position: relative;
            z-index: 0;
            width: 120px;
            height: 120px;
            margin: 0 auto;
            border-radius: 50%;
            background: var(--stroke-color);
        }

        .gear:before {
            position: absolute;
            left: 5px;
            top: 5px;
            right: 5px;
            bottom: 5px;
            z-index: 2;
            content: "";
            border-radius: 50%;
            background: var(--main-color);
        }

        .gear:after {
            position: absolute;
            left: 25px;
            top: 25px;
            z-index: 3;
            content: "";
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 5px solid var(--stroke-color);
            box-sizing: border-box;
            background: var(--main-color);
        }

        .gear.one {
            left: -130px;
        }

        .gear.two {
            top: -75px;
        }

        .gear.three {
            top: -235px;
            left: 130px;
        }

        .gear .bar {
            position: absolute;
            left: -15px;
            top: 50%;
            z-index: 0;
            width: 150px;
            height: 30px;
            margin-top: -15px;
            border-radius: 5px;
            background: var(--stroke-color);
        }

        .gear .bar:before {
            position: absolute;
            left: 5px;
            top: 5px;
            right: 5px;
            bottom: 5px;
            z-index: 1;
            content: "";
            border-radius: 2px;
            background: var(--main-color);
        }

        .gear .bar:nth-child(2) {
            transform: rotate(60deg);
            -webkit-transform: rotate(60deg);
        }

        .gear .bar:nth-child(3) {
            transform: rotate(120deg);
            -webkit-transform: rotate(120deg);
        }

        @-webkit-keyframes clockwise {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes anticlockwise {
            0% {
                -webkit-transform: rotate(360deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
            }
        }

        @-webkit-keyframes clockwiseError {
            0% {
                -webkit-transform: rotate(0deg);
            }

            20% {
                -webkit-transform: rotate(30deg);
            }

            40% {
                -webkit-transform: rotate(25deg);
            }

            60% {
                -webkit-transform: rotate(30deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
            }
        }

        @-webkit-keyframes anticlockwiseErrorStop {
            0% {
                -webkit-transform: rotate(0deg);
            }

            20% {
                -webkit-transform: rotate(-30deg);
            }

            60% {
                -webkit-transform: rotate(-30deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
            }
        }

        @-webkit-keyframes anticlockwiseError {
            0% {
                -webkit-transform: rotate(0deg);
            }

            20% {
                -webkit-transform: rotate(-30deg);
            }

            40% {
                -webkit-transform: rotate(-25deg);
            }

            60% {
                -webkit-transform: rotate(-30deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
            }
        }

        .gear.one {
            -webkit-animation: anticlockwiseErrorStop 2s linear infinite;
        }

        .gear.two {
            -webkit-animation: anticlockwiseError 2s linear infinite;
        }

        .gear.three {
            -webkit-animation: clockwiseError 2s linear infinite;
        }

        .loading .gear.one,
        .loading .gear.three {
            -webkit-animation: clockwise 3s linear infinite;
        }

        .loading .gear.two {
            -webkit-animation: anticlockwise 3s linear infinite;
        }

        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Oswald);

        .contain:after,
        .contain:before,
        .content-card--wrapper:after,
        .content-card--wrapper:before,
        .hero-overlay__offset:after,
        .hero-overlay__offset:before,
        .hero_caption:after,
        .hero_caption:before,
        .hero_intro:after,
        .hero_intro:before,
        .hero_subtitle:after,
        .hero_subtitle:before,
        .hero_title:after,
        .hero_title:before,
        .main-nav__container:after,
        .main-nav__container:before,
        .search-noresult:after,
        .search-noresult:before,
        .searchresult-s:after,
        .searchresult-s:before,
        .tabs__contain:after,
        .tabs__contain:before {
            content: "";
            display: table
        }

        .contain:after,
        .content-card--wrapper:after,
        .hero-overlay__offset:after,
        .hero_caption:after,
        .hero_intro:after,
        .hero_subtitle:after,
        .hero_title:after,
        .main-nav__container:after,
        .search-noresult:after,
        .searchresult-s:after,
        .tabs__contain:after {
            clear: both
        }

        img {
            max-width: 100%;
            height: auto
        }

        .callout .callout-inner,
        .callout.callout-contact-phone .callout-heading {
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease
        }

        .u-small-block {
            display: block
        }

        .u-text-bold {
            font-weight: 700
        }

        .u-text-semibold {
            font-weight: 600
        }

        .u-ajax-profile-loader {
            height: 20px
        }

        #master.u-hidden {
            display: none !important
        }

        .u-hidden {
            display: none !important
        }

        .disabled {
            pointer-events: none
        }

        .loader {
            margin: auto;
            text-indent: -9999em;
            opacity: 0;
            font-size: 10px;
            border-top: .25em solid rgba(93, 134, 46, .2);
            border-right: .25em solid rgba(93, 134, 46, .2);
            border-bottom: .25em solid rgba(93, 134, 46, .2);
            border-left: .25em solid rgba(93, 134, 46, .9);
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear
        }

        .loader,
        .loader:after {
            border-radius: 50%;
            width: 2em;
            height: 2em
        }

        .loader[data-loading] {
            opacity: 1
        }

        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .banner--force-full-width,
        .provider-profile .provider-information .card-header,
        .provider-search__banner,
        [data-ffw] {
            width: calc(100vw - 17px);
            height: auto;
            position: relative;
            left: 0;
            -webkit-transition: left .4s ease, width .4s ease;
            -o-transition: left .4s ease, width .4s ease;
            transition: left .4s ease, width .4s ease
        }

        @media (min-width:0rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 18.75rem + 17px)/ 2)
            }
        }

        @media (min-width:40rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 30rem + 17px)/ 2)
            }
        }

        @media (min-width:48rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 40rem + 17px)/ 2)
            }
        }

        @media (min-width:60rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 48rem + 17px)/ 2)
            }
        }

        @media (min-width:64rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 60rem + 17px)/ 2)
            }
        }

        @media (min-width:80rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 64rem + 17px)/ 2)
            }
        }

        @media (min-width:87.5rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 80rem + 17px)/ 2)
            }
        }

        @media (min-width:100rem) {

            .banner--force-full-width,
            .provider-profile .provider-information .card-header,
            .provider-search__banner,
            [data-ffw] {
                left: calc((-100vw + 87.5rem + 17px)/ 2)
            }
        }

        .magic-line-select {
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: .438rem;
            background-color: #5d862e;
            -webkit-transition: background-color .4s linear;
            -o-transition: background-color .4s linear;
            transition: background-color .4s linear
        }

        .magic-line-select.hovering {
            background-color: #5d862e
        }

        .boxshadow-pulse {
            -webkit-animation-name: boxshadow-pulse;
            animation-name: boxshadow-pulse;
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear
        }

        @-webkit-keyframes boxshadow-pulse {
            0% {
                -webkit-box-shadow: 0 0 20px 0 #29abe2;
                box-shadow: 0 0 20px 0 #29abe2
            }

            100% {
                -webkit-box-shadow: 0 0 5px 0 rgba(41, 171, 226, 0);
                box-shadow: 0 0 5px 0 rgba(41, 171, 226, 0)
            }
        }

        @keyframes boxshadow-pulse {
            0% {
                -webkit-box-shadow: 0 0 20px 0 #29abe2;
                box-shadow: 0 0 20px 0 #29abe2
            }

            100% {
                -webkit-box-shadow: 0 0 5px 0 rgba(41, 171, 226, 0);
                box-shadow: 0 0 5px 0 rgba(41, 171, 226, 0)
            }
        }

        .border--shallow {
            border-color: #29abe2 !important
        }

        @media (min-width:0rem) {
            .xxs {
                display: block
            }

            .l,
            .m,
            .s,
            .xl,
            .xs,
            .xxl,
            .xxxl {
                display: none
            }
        }

        @media (min-width:40rem) {
            .xs {
                display: block
            }

            .l,
            .m,
            .s,
            .xl,
            .xxl,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:48rem) {
            .s {
                display: block
            }

            .l,
            .m,
            .xl,
            .xs,
            .xxl,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:60rem) {
            .m {
                display: block
            }

            .l,
            .s,
            .xl,
            .xs,
            .xxl,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:64rem) {
            .l {
                display: block
            }

            .m,
            .s,
            .xl,
            .xs,
            .xxl,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:80rem) {
            .xl {
                display: block
            }

            .l,
            .m,
            .s,
            .xs,
            .xxl,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:87.5rem) {
            .xxl {
                display: block
            }

            .l,
            .m,
            .s,
            .xl,
            .xs,
            .xxs,
            .xxxl {
                display: none
            }
        }

        @media (min-width:100rem) {
            .xxxl {
                display: block
            }

            .l,
            .m,
            .s,
            .xl,
            .xs,
            .xxl,
            .xxs {
                display: none
            }
        }

        .slick-loading .slick-list {
            background: #fff url("/assets/org/images/selecthealth-content/ajax-loader.gif") center center no-repeat
        }

        @font-face {
            font-family: slick;
            src: url("/assets/org/fonts/slick/slick.eot");
            src: url("/assets/org/fonts/slick/slick.eot?#iefix") format("embedded-opentype"), url("/assets/org/fonts/slick/slick.woff") format("woff"), url("/assets/org/fonts/slick/slick.ttf") format("truetype"), url("/assets/org/fonts/slick/slick.svg#slick") format("svg");
            font-weight: 400;
            font-style: normal
        }

        .slick-next,
        .slick-prev {
            position: absolute;
            display: block;
            height: 20px;
            width: 20px;
            line-height: 0;
            font-size: 0;
            cursor: pointer;
            background: 0 0;
            color: transparent;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            padding: 0;
            border: none;
            outline: 0
        }

        .slick-next:focus,
        .slick-next:hover,
        .slick-prev:focus,
        .slick-prev:hover {
            outline: 0;
            background: 0 0;
            color: transparent
        }

        .slick-next:focus:before,
        .slick-next:hover:before,
        .slick-prev:focus:before,
        .slick-prev:hover:before {
            opacity: 1
        }

        .slick-next.slick-disabled:before,
        .slick-prev.slick-disabled:before {
            opacity: .25
        }

        .slick-next:before,
        .slick-prev:before {
            font-family: slick;
            font-size: 20px;
            line-height: 1;
            color: #29abe2;
            opacity: .75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .slick-prev {
            left: -25px
        }

        [dir=rtl] .slick-prev {
            left: auto;
            right: -25px
        }

        .slick-prev:before {
            content: "←"
        }

        [dir=rtl] .slick-prev:before {
            content: "→"
        }

        .slick-next {
            right: -25px
        }

        [dir=rtl] .slick-next {
            left: -25px;
            right: auto
        }

        .slick-next:before {
            content: "→"
        }

        [dir=rtl] .slick-next:before {
            content: "←"
        }

        .slick-dotted.slick-slider {
            margin-bottom: 30px
        }

        .slick-dots {
            position: absolute;
            bottom: -25px;
            list-style: none;
            display: block;
            text-align: center;
            padding: 0;
            margin: 0;
            width: 100%
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            height: 20px;
            width: 20px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer
        }

        .slick-dots li button {
            border: 0;
            background: 0 0;
            display: block;
            height: 20px;
            width: 20px;
            outline: 0;
            line-height: 0;
            font-size: 0;
            color: transparent;
            padding: 5px;
            cursor: pointer
        }

        .slick-dots li button:focus,
        .slick-dots li button:hover {
            outline: 0
        }

        .slick-dots li button:focus:before,
        .slick-dots li button:hover:before {
            opacity: 1
        }

        .slick-dots li button:before {
            position: absolute;
            top: 0;
            left: 0;
            content: "•";
            width: 20px;
            height: 20px;
            font-family: slick;
            font-size: 6px;
            line-height: 20px;
            text-align: center;
            color: #a9e2ff;
            opacity: .25;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .slick-dots li.slick-active button:before {
            color: #29abe2;
            opacity: .75
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            font-family: "Open Sans", sans-serif;
            font-style: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.429;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            font-size: .85rem;
            opacity: 0
        }

        .tooltip.in {
            opacity: .9
        }

        .tooltip.top {
            margin-top: -3px;
            padding: 5px 0
        }

        .tooltip.right {
            margin-left: 3px;
            padding: 0 5px
        }

        .tooltip.bottom {
            margin-top: 3px;
            padding: 5px 0
        }

        .tooltip.left {
            margin-left: -3px;
            padding: 0 5px
        }

        .tooltip-inner {
            max-width: 350px;
            padding: 3px 8px;
            color: #fff;
            text-align: left;
            background-color: #333;
            border-radius: 5px
        }

        .tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .tooltip.top .tooltip-arrow {
            bottom: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #333
        }

        .tooltip.top-left .tooltip-arrow {
            bottom: 0;
            right: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #333
        }

        .tooltip.top-right .tooltip-arrow {
            bottom: 0;
            left: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #333
        }

        .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-width: 5px 5px 5px 0;
            border-right-color: #333
        }

        .tooltip.left .tooltip-arrow {
            top: 50%;
            right: 0;
            margin-top: -5px;
            border-width: 5px 0 5px 5px;
            border-left-color: #333
        }

        .tooltip.bottom .tooltip-arrow {
            top: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #333
        }

        .tooltip.bottom-left .tooltip-arrow {
            top: 0;
            right: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #333
        }

        .tooltip.bottom-right .tooltip-arrow {
            top: 0;
            left: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #333
        }

        .collapse {
            display: none
        }

        .collapse.in {
            display: block
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition: height .35s ease, visibility .35s ease;
            -o-transition: height .35s ease, visibility .35s ease;
            transition: height .35s ease, visibility .35s ease
        }

        .twitter-typeahead {
            max-width: 100%;
            -webkit-box-flex: 8;
            -ms-flex-positive: 8;
            flex-grow: 8
        }

        .tt-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%
        }

        .tt-hint {
            position: absolute;
            top: 0;
            left: 0;
            border-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            opacity: 1;
            border: none !important
        }

        .tt-input {
            position: relative;
            vertical-align: top;
            background-color: transparent;
            width: 100%;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            outline: 0
        }

        .tt-input:active,
        .tt-input:focus {
            border: 2px solid #bdbdbd
        }

        .tt-menu {
            position: relative;
            left: 0;
            right: 0;
            top: -2px;
            margin-bottom: -2px;
            z-index: 100;
            display: none;
            border-top: 2px solid #bdbdbd;
            -webkit-box-shadow: 0 0 10px rgba(86, 86, 90, .2);
            box-shadow: 0 0 10px rgba(86, 86, 90, .2);
            background-color: #fff
        }

        @media (min-width:48rem) {
            .tt-menu {
                position: absolute;
                top: 50px;
                margin: 0 -2px;
                border: 2px solid #bdbdbd;
                border-radius: 5px
            }
        }

        .tt-suggestion {
            color: #56565a;
            padding: .5rem;
            cursor: pointer
        }

        .tt-suggestion:last-child {
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .tt-suggestion:hover {
            background-color: #dcf3ff
        }

        .tt-cursor {
            background-color: #dcf3ff
        }

        .multipleselect,
        .select-group {
            margin-top: .5rem;
            margin-bottom: .625rem
        }

        .multipleselect .ms-parent,
        .select-group .ms-parent {
            display: block;
            width: 100%;
            position: relative;
            vertical-align: middle
        }

        .multipleselect .ms-choice,
        .select-group .ms-choice {
            display: block;
            width: 100%;
            height: 36px;
            padding: 0;
            line-height: 26px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid #bdbdbd;
            text-align: left;
            white-space: nowrap;
            color: #333;
            text-decoration: none;
            background-color: #fff;
            outline: 0 !important
        }

        .multipleselect .ms-choice:focus,
        .select-group .ms-choice:focus {
            position: relative;
            z-index: 1001
        }

        .multipleselect .ms-choice>span,
        .select-group .ms-choice>span {
            top: 0;
            left: 0;
            right: 20px;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            display: block;
            padding-left: .5rem;
            padding-right: 1.5rem
        }

        .multipleselect .ms-choice>div,
        .select-group .ms-choice>div {
            position: absolute;
            top: .25rem;
            right: 0;
            width: 20px;
            height: 25px;
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") left top no-repeat
        }

        .multipleselect .ms-choice--border-shallow,
        .select-group .ms-choice--border-shallow {
            border: 2px solid #29abe2
        }

        .multipleselect__network .ms-choice div {
            top: .8rem
        }

        .multipleselect .ms-choice.disabled,
        .select-group .ms-choice.disabled {
            background-color: #f4f4f4;
            background-image: none;
            border: 1px solid #ddd;
            cursor: default
        }

        .multipleselect .ms-choice>span.placeholder,
        .select-group .ms-choice>span.placeholder {
            color: #999;
            font-size: 1.125rem
        }

        .multipleselect .ms-choice>div.open,
        .select-group .ms-choice>div.open {
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") right top no-repeat
        }

        .multipleselect .ms-drop,
        .select-group .ms-drop {
            min-width: 100%;
            width: auto;
            display: none;
            margin-top: -2px;
            padding: 0;
            position: absolute;
            z-index: 1000;
            overflow: hidden;
            background: #fff;
            color: #000;
            border: 2px solid #bdbdbd;
            border-radius: 0
        }

        @media (min-width:40rem) {

            .multipleselect .ms-drop,
            .select-group .ms-drop {
                width: auto
            }
        }

        .multipleselect .ms-drop label,
        .select-group .ms-drop label {
            position: relative;
            padding: .15rem;
            cursor: pointer;
            color: #7f8084
        }

        .multipleselect .ms-drop label input[type=checkbox],
        .multipleselect .ms-drop label input[type=radio],
        .select-group .ms-drop label input[type=checkbox],
        .select-group .ms-drop label input[type=radio] {
            -moz-appearance: none;
            appearance: none;
            -webkit-appearance: none;
            visibility: hidden;
            margin: 0
        }

        .multipleselect .ms-drop label input[type=checkbox]~span,
        .select-group .ms-drop label input[type=checkbox]~span {
            padding-left: 1.25rem
        }

        .multipleselect .ms-drop label input[type=checkbox]~span:after,
        .select-group .ms-drop label input[type=checkbox]~span:after {
            content: '';
            height: 1rem;
            width: 1rem;
            position: absolute;
            top: .5rem;
            left: 0;
            background-image: url("/assets/org/images/selecthealth-content/checkbox.png");
            background-position: 50% 0;
            background-repeat: no-repeat;
            background-size: cover
        }

        .multipleselect .ms-drop label input[type=checkbox]:checked~span:after,
        .select-group .ms-drop label input[type=checkbox]:checked~span:after {
            background-position: 50% 34%
        }

        .multipleselect .ms-drop.bottom,
        .select-group .ms-drop.bottom {
            top: 100%
        }

        .multipleselect .ms-drop.top,
        .select-group .ms-drop.top {
            bottom: 100%;
            -webkit-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
            box-shadow: 0 -4px 5px rgba(0, 0, 0, .15)
        }

        .multipleselect .ms-search,
        .select-group .ms-search {
            display: inline-block;
            margin: 0;
            min-height: 26px;
            padding: 4px;
            position: relative;
            white-space: nowrap;
            width: 100%;
            z-index: 10000
        }

        .multipleselect .ms-search input,
        .select-group .ms-search input {
            width: 100%;
            height: auto !important;
            margin: .25rem auto;
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") no-repeat 99% -18px
        }

        .multipleselect .ms-search,
        .multipleselect .ms-search input,
        .select-group .ms-search,
        .select-group .ms-search input {
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box
        }

        .multipleselect .ms-drop ul,
        .select-group .ms-drop ul {
            overflow: auto;
            margin: 0;
            padding: 0;
            text-align: left
        }

        .multipleselect .ms-drop ul>li,
        .select-group .ms-drop ul>li {
            list-style: none;
            display: list-item;
            background-image: none;
            position: static
        }

        .multipleselect .ms-drop ul>li:hover,
        .select-group .ms-drop ul>li:hover {
            background-color: #dcf3ff
        }

        .multipleselect .ms-drop ul>li .disabled,
        .select-group .ms-drop ul>li .disabled {
            opacity: .35;
            filter: Alpha(Opacity=35)
        }

        .multipleselect .ms-drop ul>li.multiple,
        .select-group .ms-drop ul>li.multiple {
            display: block;
            float: left
        }

        .multipleselect .ms-drop ul>li.group,
        .select-group .ms-drop ul>li.group {
            clear: both
        }

        .multipleselect .ms-drop ul>li.multiple label,
        .select-group .ms-drop ul>li.multiple label {
            width: 100%;
            display: block;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .multipleselect .ms-drop ul>li label,
        .multipleselect .ms-modal-link,
        .select-group .ms-drop ul>li label,
        .select-group .ms-modal-link {
            font-weight: 400;
            display: block;
            text-indent: -1.25rem;
            padding: .4rem;
            padding-left: 1.5rem;
            margin: 0 .5rem
        }

        @media (min-width:48rem) {

            .multipleselect .ms-drop ul>li label,
            .multipleselect .ms-modal-link,
            .select-group .ms-drop ul>li label,
            .select-group .ms-modal-link {
                text-indent: 0;
                padding-left: 0;
                white-space: nowrap
            }
        }

        .multipleselect .ms-drop ul>li label.optgroup,
        .select-group .ms-drop ul>li label.optgroup {
            font-weight: 700
        }

        .multipleselect .ms-drop input[type=checkbox],
        .select-group .ms-drop input[type=checkbox] {
            vertical-align: middle
        }

        .multipleselect .ms-drop .ms-no-results,
        .select-group .ms-drop .ms-no-results {
            display: none;
            padding-left: 6px;
            margin-bottom: 8px;
            color: initial
        }

        .main-example {
            margin: 0 auto;
            width: auto
        }

        .main-example .countdown-container {
            height: 130px;
            font-family: Oswald, sans-serif
        }

        .main-example .time {
            border-radius: 5px;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, .5);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, .5);
            display: inline-block;
            text-align: center;
            position: relative;
            height: 118px;
            width: 85px;
            -webkit-perspective: 479px;
            -ms-perspective: 479px;
            -o-perspective: 479px;
            perspective: 479px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .main-example .count {
            background: #202020;
            color: #f8f8f8;
            display: block;
            font-family: Oswald, sans-serif;
            font-size: 2em;
            line-height: 2.4em;
            overflow: hidden;
            position: absolute;
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, .8);
            top: 0;
            width: 100%;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-transform-style: flat;
            transform-style: flat
        }

        .main-example .count.top {
            border-top: 1px solid rgba(255, 255, 255, .2);
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            border-radius: 5px 5px 0 0;
            height: 50%;
            -webkit-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }

        .main-example .count.bottom {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, .1)), to(transparent));
            background-image: linear-gradient(rgba(255, 255, 255, .1), transparent);
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, .1), transparent);
            background-image: -o-linear-gradient(rgba(255, 255, 255, .1), transparent);
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            border-radius: 0 0 5px 5px;
            line-height: 0;
            height: 50%;
            top: 50%;
            -webkit-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .main-example .label {
            font-family: "Open Sans", sans-serif;
            font-size: normal;
            margin-top: 5px;
            display: block;
            position: absolute;
            top: 118px;
            width: 100%
        }

        .main-example .count.curr.top {
            -webkit-transform: rotateX(0);
            -ms-transform: rotateX(0);
            transform: rotateX(0);
            z-index: 3
        }

        .main-example .count.next.bottom {
            -webkit-transform: rotateX(90deg);
            -ms-transform: rotateX(90deg);
            transform: rotateX(90deg);
            z-index: 2
        }

        .main-example .flip .count.curr.top {
            -webkit-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
            -webkit-transform: rotateX(-90deg);
            -ms-transform: rotateX(-90deg);
            transform: rotateX(-90deg)
        }

        .main-example .flip .count.next.bottom {
            -webkit-transition: all 250ms ease-in-out 250ms;
            -o-transition: all 250ms ease-in-out 250ms;
            transition: all 250ms ease-in-out 250ms;
            -webkit-transform: rotateX(0);
            -ms-transform: rotateX(0);
            transform: rotateX(0)
        }

        @media screen and (max-width:48em) {
            .main-example {
                width: 100%
            }

            .main-example .countdown-container {
                height: 100px
            }

            .main-example .time {
                height: 70px;
                width: 48px
            }

            .main-example .count {
                font-size: 1.5em;
                line-height: 70px
            }

            .main-example .label {
                font-size: .8em;
                top: 72px
            }
        }

        .select2-container {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle
        }

        .select2-container .select2-selection--single {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 28px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .select2-container .select2-selection--single .select2-selection__clear {
            position: relative
        }

        .select2-container[dir=rtl] .select2-selection--single .select2-selection__rendered {
            padding-right: 8px;
            padding-left: 20px
        }

        .select2-container .select2-selection--multiple {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            min-height: 32px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        .select2-container .select2-selection--multiple .select2-selection__rendered {
            display: inline-block;
            overflow: hidden;
            padding-left: 8px;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .select2-container .select2-search--inline {
            float: left
        }

        .select2-container .select2-search--inline .select2-search__field {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: none;
            font-size: 100%;
            margin-top: 5px;
            padding: 0
        }

        .select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none
        }

        .select2-dropdown {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1051
        }

        .select2-results {
            display: block
        }

        .select2-results__options {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .select2-results__option {
            padding: 6px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        .select2-results__option[aria-selected] {
            cursor: pointer
        }

        .select2-container .dropdown-wrapper {
            display: none
        }

        .select2-container--open .dropdown-wrapper {
            display: initial
        }

        .select2-container--open .select2-dropdown {
            left: 0
        }

        .select2-container--open .select2-dropdown--above {
            top: 10px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .select2-container--open .select2-dropdown--below {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .network-filter__dropdown.select2-dropdown--below {
            top: 10px
        }

        .select2-dropdown.network-filter__dropdown {
            position: relative
        }

        .network-filter__dropdown.select2-dropdown--above {
            top: 0
        }

        .select2-search--dropdown {
            display: block;
            padding: 4px
        }

        .select2-search--dropdown .select2-search__field {
            padding: 4px;
            width: 100%;
            margin: .25rem auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: url(/resources/images/selecthealth-content/multiple-select.png) no-repeat 99% -18px
        }

        .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none
        }

        .select2-search--dropdown.select2-search--hide {
            display: none
        }

        .select2-close-mask {
            border: 0;
            margin: 0;
            padding: 0;
            display: block;
            position: fixed;
            left: 0;
            top: 0;
            min-height: 100%;
            min-width: 100%;
            height: auto;
            width: auto;
            opacity: 0;
            z-index: 99;
            background-color: #fff;
            filter: alpha(opacity=0)
        }

        .select2-hidden-accessible {
            border: 0 !important;
            clip: rect(0 0 0 0) !important;
            height: 1px !important;
            margin: -1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            width: 1px !important
        }

        .select2-container.select2-container--shweb .select2-selection__choice {
            display: inline-block;
            color: #333
        }

        .select2-container.select2-container--shweb .select2-selection__choice:nth-last-child(n+2):after {
            display: inline-block;
            content: ", ";
            white-space: pre
        }

        .select2-container.select2-container--shweb .select2-selection__choice__remove {
            display: none
        }

        .select2-container.select2-container--shweb .select2-option__checkbox {
            display: block;
            margin: 0 .5rem;
            padding: .4rem 0;
            color: #7f8084;
            font-weight: 400;
            font-size: .8rem;
            position: relative;
            cursor: pointer
        }

        .select2-container.select2-container--shweb .select2-option__checkbox input[type=checkbox],
        .select2-container.select2-container--shweb .select2-option__checkbox input[type=radio] {
            -moz-appearance: none;
            appearance: none;
            -webkit-appearance: none;
            visibility: hidden;
            margin: 0
        }

        .select2-container.select2-container--shweb .select2-option__checkbox input[type=checkbox]~span {
            padding-left: 1.25rem
        }

        .select2-container.select2-container--shweb .select2-option__checkbox input[type=checkbox]~span:after {
            content: '';
            height: 1rem;
            width: 1rem;
            position: absolute;
            top: .5rem;
            left: 0;
            background-image: url("/assets/org/images/selecthealth-content/checkbox.png");
            background-position: 50% 0;
            background-repeat: no-repeat;
            background-size: cover
        }

        .select2-container.select2-container--shweb .select2-option__checkbox input[type=checkbox]:checked~span:after {
            background-position: 50% 34%
        }

        .select2-container.select2-container--shweb .select2-selection--multiple {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 2px solid #bdbdbd;
            margin-top: .5rem;
            margin-bottom: .625rem;
            position: relative;
            height: 36px;
            color: #7f8084;
            cursor: pointer;
            display: block;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
            overflow: hidden
        }

        .select2-container.select2-container--shweb .select2-selection--multiple .select2-selection__rendered {
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            margin: 0;
            overflow: hidden;
            padding-left: 8px;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 34px;
            color: #333
        }

        .select2-container.select2-container--shweb .select2-selection--multiple .select2-selection__placeholder {
            color: #7f8084
        }

        .select2-container.select2-container--shweb .select2-selection--multiple:after {
            position: absolute;
            top: .25rem;
            right: 0;
            width: 20px;
            height: 25px;
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") left top no-repeat
        }

        .select2-container.select2-container--shweb .select2-selection--border-shallow {
            border-color: #29abe2
        }

        .select2-container.select2-container--shweb .select2-search--inline .select2-search__field {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: none;
            font-size: 100%;
            margin-top: 5px;
            padding: 0
        }

        .select2-container.select2-container--shweb .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none
        }

        .select2-container.select2-container--shweb .select2-selection--single {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 2px solid #bdbdbd;
            margin-top: .5rem;
            margin-bottom: .625rem;
            position: relative;
            height: 36px;
            cursor: pointer;
            display: block;
            height: 36px;
            color: #7f8084;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        .select2-container.select2-container--shweb .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 34px;
            color: #333
        }

        .select2-container.select2-container--shweb .select2-selection--single .select2-selection__clear {
            position: relative
        }

        .select2-container.select2-container--shweb .select2-selection--single .select2-selection__placeholder {
            color: #7f8084
        }

        .select2-container.select2-container--shweb[dir=rtl] .select2-selection--single .select2-selection__rendered {
            padding-right: 8px;
            padding-left: 20px
        }

        .select2-container.select2-container--shweb .select2-selection__arrow {
            position: absolute;
            top: .25rem;
            right: 0;
            width: 20px;
            height: 25px;
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") left top no-repeat
        }

        .select2-container.select2-container--shweb.select2-container--open .select2-selection__arrow {
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") right top no-repeat
        }

        .select2-dropdown {
            background-color: #fff;
            border: 2px solid #bdbdbd;
            border-radius: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1000
        }

        .select2-results {
            display: block
        }

        .select2-results__options {
            list-style: none;
            margin: 0;
            padding: 0;
            max-height: 250px;
            overflow: auto
        }

        .select2-results__option {
            padding: .4rem .9rem;
            font-size: .8rem;
            font-weight: 400;
            line-height: 1.429;
            text-transform: uppercase;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
            color: #7f8084
        }

        .select2-results__option[aria-selected] {
            cursor: pointer
        }

        .select2-results__option:hover {
            background-color: #dcf3ff
        }

        .select2-results__option--multiple {
            padding: unset
        }

        .select2-container--open .select2-dropdown {
            left: 0
        }

        .select2-container--open .select2-dropdown--below {
            margin-top: calc(-.625rem - 2px);
            margin-bottom: 0;
            border-top: 2px solid #bdbdbd
        }

        .select2-search--dropdown {
            display: block;
            padding: 4px
        }

        .select2-search--dropdown .select2-search__field {
            width: 100%;
            margin: .25rem auto;
            padding: .3125rem .625rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: url("/assets/org/images/selecthealth-content/multiple-select.png") no-repeat 99% -18px
        }

        .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none
        }

        .select2-search--dropdown.select2-search--hide {
            display: none
        }

        .select2-modal-link {
            display: block;
            padding: .4rem;
            padding-left: .5rem
        }

        .select2-modal-link--single {
            padding: 0;
            padding-left: 0
        }

        .select-group__network .select2-selection__rendered {
            padding: 9px
        }

        .select-group__network .select2-selection__arrow {
            margin-top: 9px
        }

        .network-dropdown__box {
            margin-top: -2px !important
        }

        html.remodal-is-locked {
            overflow: hidden;
            -ms-touch-action: none;
            touch-action: none
        }

        .remodal,
        [data-remodal-id] {
            display: none
        }

        .remodal-overlay {
            position: fixed;
            z-index: 9999;
            top: -5000px;
            right: -5000px;
            bottom: -5000px;
            left: -5000px;
            display: none
        }

        .remodal-wrapper {
            position: fixed;
            z-index: 10000;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: none;
            overflow: auto;
            text-align: center;
            -webkit-overflow-scrolling: touch
        }

        .remodal-wrapper:after {
            display: inline-block;
            height: 100%;
            margin-left: -.05em;
            content: ""
        }

        .remodal-overlay,
        .remodal-wrapper {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .remodal {
            position: relative;
            outline: 0;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
            text-align: left
        }

        .remodal-is-initialized {
            display: inline-block
        }

        .remodal-bg.remodal-is-opened,
        .remodal-bg.remodal-is-opening {
            -webkit-filter: blur(3px);
            filter: blur(3px)
        }

        .remodal-overlay {
            background: rgba(0, 0, 0, .3)
        }

        .remodal-overlay.remodal-is-closing,
        .remodal-overlay.remodal-is-opening {
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards
        }

        .remodal-overlay.remodal-is-opening {
            -webkit-animation-name: remodal-overlay-opening-keyframes;
            animation-name: remodal-overlay-opening-keyframes
        }

        .remodal-overlay.remodal-is-closing {
            -webkit-animation-name: remodal-overlay-closing-keyframes;
            animation-name: remodal-overlay-closing-keyframes
        }

        .remodal-wrapper {
            padding: 10px 10px 0
        }

        .remodal {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            margin-bottom: 10px;
            padding: 35px;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            color: #2b2e38;
            background: #fff
        }

        .remodal.remodal-is-closing,
        .remodal.remodal-is-opening {
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards
        }

        .remodal.remodal-is-opening {
            -webkit-animation-name: remodal-opening-keyframes;
            animation-name: remodal-opening-keyframes
        }

        .remodal.remodal-is-closing {
            -webkit-animation-name: remodal-closing-keyframes;
            animation-name: remodal-closing-keyframes
        }

        .remodal,
        .remodal-wrapper:after {
            vertical-align: middle
        }

        .remodal-close {
            position: absolute;
            top: 0;
            right: 25px;
            display: block;
            overflow: visible;
            width: auto;
            height: 35px;
            margin: 0;
            padding: 0;
            cursor: pointer;
            -webkit-transition: color .2s;
            -o-transition: color .2s;
            transition: color .2s;
            text-decoration: none;
            color: #95979c;
            border: 0;
            outline: 0;
            background: 0 0
        }

        .remodal-close:focus,
        .remodal-close:hover {
            color: #2b2e38
        }

        .remodal-close:before {
            font-family: Arial, "Helvetica CY", "Nimbus Sans L", sans-serif !important;
            font-size: 27px;
            line-height: 38px;
            position: absolute;
            top: 0;
            right: -27px;
            display: block;
            width: 35px;
            content: "\00d7";
            text-align: center
        }

        .remodal-cancel,
        .remodal-confirm {
            font: inherit;
            display: inline-block;
            overflow: visible;
            min-width: 110px;
            margin: 0;
            padding: 12px 0;
            cursor: pointer;
            -webkit-transition: background .2s;
            -o-transition: background .2s;
            transition: background .2s;
            text-align: center;
            vertical-align: middle;
            text-decoration: none;
            border: 0;
            outline: 0
        }

        .remodal-confirm {
            color: #fff;
            background: #81c784
        }

        .remodal-confirm:focus,
        .remodal-confirm:hover {
            background: #66bb6a
        }

        .remodal-cancel {
            color: #fff;
            background: #e57373
        }

        .remodal-cancel:focus,
        .remodal-cancel:hover {
            background: #ef5350
        }

        .remodal-cancel::-moz-focus-inner,
        .remodal-close::-moz-focus-inner,
        .remodal-confirm::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        @-webkit-keyframes remodal-opening-keyframes {
            from {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
                opacity: 0
            }

            to {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
                -webkit-filter: blur(0);
                filter: blur(0)
            }
        }

        @keyframes remodal-opening-keyframes {
            from {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
                opacity: 0
            }

            to {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
                -webkit-filter: blur(0);
                filter: blur(0)
            }
        }

        @-webkit-keyframes remodal-closing-keyframes {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            to {
                -webkit-transform: scale(.95);
                transform: scale(.95);
                opacity: 0;
                -webkit-filter: blur(0);
                filter: blur(0)
            }
        }

        @keyframes remodal-closing-keyframes {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            to {
                -webkit-transform: scale(.95);
                transform: scale(.95);
                opacity: 0;
                -webkit-filter: blur(0);
                filter: blur(0)
            }
        }

        @-webkit-keyframes remodal-overlay-opening-keyframes {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes remodal-overlay-opening-keyframes {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes remodal-overlay-closing-keyframes {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes remodal-overlay-closing-keyframes {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @media only screen and (min-width:641px) {
            .remodal {
                max-width: 700px
            }
        }

        .lt-ie9 .remodal-overlay {
            background: #2b2e38
        }

        .lt-ie9 .remodal {
            width: 700px
        }

        /*! Flickity v2.0.8
http://flickity.metafizzy.co
---------------------------------------------- */
        .flickity-enabled {
            position: relative
        }

        .flickity-enabled:focus {
            outline: 0
        }

        .flickity-viewport {
            overflow: hidden;
            position: relative;
            height: 100%
        }

        .flickity-slider {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .flickity-enabled.is-draggable {
            -webkit-tap-highlight-color: transparent;
            tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .flickity-enabled.is-draggable .flickity-viewport {
            cursor: move;
            cursor: -webkit-grab;
            cursor: grab
        }

        .flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
            cursor: -webkit-grabbing;
            cursor: grabbing
        }

        .flickity-prev-next-button {
            position: absolute;
            top: 50%;
            width: 44px;
            height: 44px;
            border: none;
            border-radius: 50%;
            background: #fff;
            background: rgba(255, 255, 255, .75);
            cursor: pointer;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .flickity-prev-next-button:hover {
            background: #fff
        }

        .flickity-prev-next-button:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 5px #09f;
            box-shadow: 0 0 0 5px #09f
        }

        .flickity-prev-next-button:active {
            opacity: .6
        }

        .flickity-prev-next-button.previous {
            left: 10px
        }

        .flickity-prev-next-button.next {
            right: 10px
        }

        .flickity-rtl .flickity-prev-next-button.previous {
            left: auto;
            right: 10px
        }

        .flickity-rtl .flickity-prev-next-button.next {
            right: auto;
            left: 10px
        }

        .flickity-prev-next-button:disabled {
            opacity: .3;
            cursor: auto
        }

        .flickity-prev-next-button svg {
            position: absolute;
            left: 20%;
            top: 20%;
            width: 60%;
            height: 60%
        }

        .flickity-prev-next-button .arrow {
            fill: #333
        }

        .flickity-page-dots {
            position: absolute;
            width: 100%;
            bottom: -25px;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
            line-height: 1
        }

        .flickity-rtl .flickity-page-dots {
            direction: rtl
        }

        .flickity-page-dots .dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 8px;
            background: #333;
            border-radius: 50%;
            opacity: .25;
            cursor: pointer
        }

        .flickity-page-dots .dot.is-selected {
            opacity: 1
        }

        @font-face {
            font-family: "Open Sans";
            src: url("/assets/org/fonts/open-sans/OpenSans-Light.ttf") format("truetype");
            font-weight: 300
        }

        @font-face {
            font-family: "Open Sans";
            src: url("/assets/org/fonts/open-sans/OpenSans-Regular.ttf") format("truetype");
            font-weight: 400
        }

        @font-face {
            font-family: "Open Sans";
            src: url("/assets/org/fonts/open-sans/OpenSans-Semibold.ttf") format("truetype");
            font-weight: 600
        }

        @font-face {
            font-family: "Open Sans";
            src: url("/assets/org/fonts/open-sans/OpenSans-Bold.ttf") format("truetype");
            font-weight: 700
        }

        html {
            font-size: 16px;
            -webkit-text-size-adjust: 16px;
            -ms-text-size-adjust: 16px;
            color: #333
        }

        button,
        html,
        input,
        select,
        textarea {
            font-size: 16px;
            font-family: "Open Sans", sans-serif;
            line-height: 1.429
        }

        body {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: none;
            -webkit-font-smoothing: subpixel-antialiased
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 400;
            line-height: 1.2;
            margin-top: 0;
            margin-bottom: .4em
        }

        .rte h1,
        .rte h2,
        .rte h3,
        .rte h4,
        .rte h5,
        .rte h6 {
            margin-top: 1.414em
        }

        .extra-large-title {
            font-size: 4.756em
        }

        .large-title {
            font-size: 3.714em
        }

        .small-title {
            font-size: 3em
        }

        .card__subtitle,
        .card__title,
        .h1,
        .hero-overlay__title,
        .search-faq__question,
        h1 {
            color: #5d862e;
            font-size: calc(1.875rem + 1.125 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {

            .card__subtitle,
            .card__title,
            .h1,
            .hero-overlay__title,
            .search-faq__question,
            h1 {
                font-size: 1.875rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .card__subtitle,
            .card__title,
            .h1,
            .hero-overlay__title,
            .search-faq__question,
            h1 {
                font-size: 3rem
            }
        }

        .article__ending,
        .h2,
        .main-nav__phone,
        .searchresult__ending,
        h2 {
            font-size: calc(1.5rem + .75 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {

            .article__ending,
            .h2,
            .main-nav__phone,
            .searchresult__ending,
            h2 {
                font-size: 1.5rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .article__ending,
            .h2,
            .main-nav__phone,
            .searchresult__ending,
            h2 {
                font-size: 2.25rem
            }
        }

        .card--network .card__title,
        .h3,
        .hero_subtitle,
        .individual-partial__item__title,
        .largeEmployer-partial__item__title,
        .new-patient-modal__title,
        h3 {
            font-size: calc(1.3125rem + .5625 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {

            .card--network .card__title,
            .h3,
            .hero_subtitle,
            .individual-partial__item__title,
            .largeEmployer-partial__item__title,
            .new-patient-modal__title,
            h3 {
                font-size: 1.3125rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .card--network .card__title,
            .h3,
            .hero_subtitle,
            .individual-partial__item__title,
            .largeEmployer-partial__item__title,
            .new-patient-modal__title,
            h3 {
                font-size: 1.875rem
            }
        }

        .h4,
        .hero-overlay .open-enrollment__ctas a,
        .hero-overlay .open-enrollment__list li,
        .provider__specialty,
        .refine-search-filter,
        h4 {
            font-size: calc(1.3125rem + .1875 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {

            .h4,
            .hero-overlay .open-enrollment__ctas a,
            .hero-overlay .open-enrollment__list li,
            .provider__specialty,
            .refine-search-filter,
            h4 {
                font-size: 1.3125rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .h4,
            .hero-overlay .open-enrollment__ctas a,
            .hero-overlay .open-enrollment__list li,
            .provider__specialty,
            .refine-search-filter,
            h4 {
                font-size: 1.5rem
            }
        }

        .card--network .card__subtitle,
        .h5,
        .new-patient-modal__detail,
        h5 {
            font-size: calc(1.125rem + .1875 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {

            .card--network .card__subtitle,
            .h5,
            .new-patient-modal__detail,
            h5 {
                font-size: 1.125rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .card--network .card__subtitle,
            .h5,
            .new-patient-modal__detail,
            h5 {
                font-size: 1.3125rem
            }
        }

        .cta-item__subtitle,
        .h6,
        .main-nav__link,
        .provider__secondary-specialties,
        h6 {
            font-size: calc(1.125rem + 0 * ((100vw - 30rem)/ 87.5));
            text-transform: uppercase;
            letter-spacing: .1em
        }

        @media screen and (max-width:30rem) {

            .cta-item__subtitle,
            .h6,
            .main-nav__link,
            .provider__secondary-specialties,
            h6 {
                font-size: 1.125rem
            }
        }

        @media screen and (min-width:87.5rem) {

            .cta-item__subtitle,
            .h6,
            .main-nav__link,
            .provider__secondary-specialties,
            h6 {
                font-size: 1.125rem
            }
        }

        .p,
        p {
            color: #7f8084;
            line-height: 1.429;
            margin-top: 0;
            font-weight: 300
        }

        small {
            font-size: .8em
        }

        sub,
        sup {
            font-size: .3em;
            line-height: 0
        }

        sup {
            position: relative;
            top: -.5em
        }

        sub {
            vertical-align: bottom
        }

        q {
            quotes: "\201C""\201D""\2018""\2019"
        }

        blockquote {
            font-style: italic;
            font-weight: 400;
            color: #5d862e;
            line-height: 1.2;
            margin: 11.432px 0 22.864px;
            text-indent: -10px;
            margin-left: 10px
        }

        figcaption {
            font-size: .857em;
            font-style: italic;
            color: #7f8084
        }

        a {
            -webkit-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            color: #29abe2;
            text-decoration: none;
            background: 0 0;
            cursor: pointer
        }

        a:hover {
            color: #a9e2ff
        }

        a:active {
            color: tint(#5d862e, 40%)
        }

        a.is-disabled {
            cursor: default;
            pointer-events: none
        }

        a[class^=icon] {
            display: inline-block;
            text-decoration: none
        }

        p a:hover {
            text-decoration: underline
        }

        ol,
        ul {
            padding-left: 2em;
            margin-bottom: 22.864px
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            padding-left: 1em
        }

        li {
            color: #7f8084;
            font-weight: 300
        }

        dl {
            padding-left: 1em;
            margin-bottom: 22.864px
        }

        dd {
            margin-left: 1em
        }

        .strong,
        strong {
            font-weight: 400
        }

        .highlight {
            background-color: #e0e0e0
        }

        .address {
            font-style: italic
        }

        .text--underline {
            text-decoration: underline
        }

        .text--color-onyx {
            color: #7f8084
        }

        .text--color-jungle {
            color: #5d862e
        }

        .text--color-shallow {
            color: #29abe2
        }

        .disclaimer {
            font-size: .6rem;
            color: #7f8084
        }

        .content h2 {
            font-size: 3rem;
            color: #5d862e
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0
        }

        label {
            font-size: .8em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #29abe2
        }

        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .form-group .input-group,
        .form-group .radio-group,
        .form-group .textarea-group {
            margin-bottom: .625rem
        }

        .form-group .checkbox-group {
            margin-bottom: 1.25rem
        }

        input[type=color],
        input[type=date],
        input[type=datetime-local],
        input[type=datetime],
        input[type=email],
        input[type=month],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=time],
        input[type=url],
        input[type=week] {
            display: block;
            min-width: 12rem;
            padding: .3125rem .625rem;
            margin-top: .5rem;
            margin-bottom: .625rem;
            line-height: 1;
            outline: 0;
            border: 2px solid #bdbdbd;
            border-radius: 5px
        }

        input[type=color]:active,
        input[type=color]:focus,
        input[type=date]:active,
        input[type=date]:focus,
        input[type=datetime-local]:active,
        input[type=datetime-local]:focus,
        input[type=datetime]:active,
        input[type=datetime]:focus,
        input[type=email]:active,
        input[type=email]:focus,
        input[type=month]:active,
        input[type=month]:focus,
        input[type=number]:active,
        input[type=number]:focus,
        input[type=password]:active,
        input[type=password]:focus,
        input[type=search]:active,
        input[type=search]:focus,
        input[type=tel]:active,
        input[type=tel]:focus,
        input[type=text]:active,
        input[type=text]:focus,
        input[type=time]:active,
        input[type=time]:focus,
        input[type=url]:active,
        input[type=url]:focus,
        input[type=week]:active,
        input[type=week]:focus {
            border-color: #979797
        }

        input[type=color].invalid,
        input[type=date].invalid,
        input[type=datetime-local].invalid,
        input[type=datetime].invalid,
        input[type=email].invalid,
        input[type=month].invalid,
        input[type=number].invalid,
        input[type=password].invalid,
        input[type=search].invalid,
        input[type=tel].invalid,
        input[type=text].invalid,
        input[type=time].invalid,
        input[type=url].invalid,
        input[type=week].invalid {
            border: 2px solid #eb7425
        }

        select {
            border: 2px solid #bdbdbd;
            height: 36px;
            line-height: 26px;
            margin-top: .5rem;
            margin-bottom: .625rem
        }

        .checkbox-group input[type=checkbox],
        .checkbox-group input[type=radio],
        .radio-group input[type=checkbox],
        .radio-group input[type=radio] {
            -moz-appearance: none;
            appearance: none;
            -webkit-appearance: none;
            visibility: hidden;
            margin: 0
        }

        .checkbox-group label,
        .radio-group label {
            display: inline-block;
            position: relative;
            cursor: pointer;
            white-space: nowrap
        }

        .checkbox-group label span,
        .radio-group label span {
            display: inline-block;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .checkbox-group label input[type=checkbox]~span,
        .checkbox-group label input[type=radio]~span,
        .radio-group label input[type=checkbox]~span,
        .radio-group label input[type=radio]~span {
            padding-left: 2.25rem;
            padding-top: .625rem;
            padding-bottom: .625rem
        }

        .checkbox-group label input[type=checkbox]~span:after,
        .checkbox-group label input[type=radio]~span:after,
        .radio-group label input[type=checkbox]~span:after,
        .radio-group label input[type=radio]~span:after {
            content: '';
            height: 2.25rem;
            width: 2.25rem;
            position: absolute;
            top: 0;
            left: 0;
            background-image: url("/assets/org/images/selecthealth-content/checkbox.png");
            background-position: 50% 0;
            background-repeat: no-repeat;
            background-size: cover
        }

        .checkbox-group label input[type=checkbox]:checked~span:after,
        .checkbox-group label input[type=radio]:checked~span:after,
        .radio-group label input[type=checkbox]:checked~span:after,
        .radio-group label input[type=radio]:checked~span:after {
            background-position: 50% 34%
        }

        .radio-group label input[type=radio]~span:after {
            background-image: url("/assets/org/images/selecthealth-content/radio.png")
        }

        .textarea-group {
            margin-top: 1.25rem;
            margin-bottom: .625rem
        }

        textarea {
            display: block;
            min-width: 6.25rem;
            width: auto;
            padding-left: .625rem;
            padding-right: .625rem;
            margin-top: .5rem;
            margin-left: 0;
            margin-right: auto;
            margin-bottom: .625rem;
            line-height: 1.875rem;
            outline: 0;
            border: 2px solid #bdbdbd;
            border-radius: 5px
        }

        textarea:active,
        textarea:focus {
            border-color: #979797
        }

        .form-disabled input,
        .form-disabled select,
        .form-disabled textarea,
        fieldset[disabled] input,
        fieldset[disabled] select,
        fieldset[disabled] textarea {
            cursor: not-allowed !important;
            background-color: #e0e0e0
        }

        .form-disabled input~span,
        fieldset[disabled] input~span {
            cursor: not-allowed
        }

        .form-disabled input~span:after,
        fieldset[disabled] input~span:after {
            background-position: 50% 66% !important
        }

        .form-disabled .select-group .ms-choice,
        fieldset[disabled] .select-group .ms-choice {
            cursor: not-allowed !important;
            background-color: #e0e0e0
        }

        .error input,
        .error select,
        .error textarea {
            border-color: #eb7425
        }

        .error input~span:after {
            background-position: 50% 100% !important
        }

        .error .select-group .ms-choice {
            border-color: #eb7425
        }

        @font-face {
            font-family: sh-icons;
            src: url("/assets/org/fonts/sh-icons/sh-icon.eot");
            src: url("/assets/org/fonts/sh-icons/sh-icon.eot") format("embedded-opentype"), url("/assets/org/fonts/sh-icons/sh-icon.ttf") format("truetype"), url("/assets/org/fonts/sh-icons/sh-icon.woff") format("woff"), url("/assets/org/fonts/sh-icons/sh-icon.woff2") format("woff2"), url("/assets/org/fonts/sh-icons/sh-icon.svg") format("svg");
            font-weight: 400;
            font-style: normal
        }

        .shown .sh-icon,
        .shown [class^=icon] {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .sh-icon,
        [class^=icon] {
            display: inline-block;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease
        }

        .sh-icon:after,
        .sh-icon:before,
        [class^=icon]:after,
        [class^=icon]:before {
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-family: sh-icons !important;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            letter-spacing: 0;
            -webkit-font-feature-settings: "liga";
            -ms-font-feature-settings: "liga"1;
            font-feature-settings: "liga";
            -webkit-font-variant-ligatures: discretionary-ligatures;
            font-variant-ligatures: discretionary-ligatures;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .icon-AddPlus:before {
            content: "\EA01"
        }

        .icon-ArrowDown1:before {
            content: "\EA02"
        }

        .icon-ArrowDown2:before {
            content: "\EA03"
        }

        .icon-ArrowDown4:before {
            content: "\EA04"
        }

        .icon-ArrowFilterEpty:before {
            content: "\EA05"
        }

        .icon-ArrowFilterFilled-30:before {
            content: "\EA06"
        }

        .icon-ArrowLeft1:before {
            content: "\EA07"
        }

        .icon-ArrowLeft2:before {
            content: "\EA08"
        }

        .icon-ArrowLeft4:before {
            content: "\EA09"
        }

        .icon-ArrowRight2:before {
            content: "\EA0A"
        }

        .icon-ArrowRight4:before {
            content: "\EA0B"
        }

        .icon-ArrowURight1:before {
            content: "\EA0C"
        }

        .icon-ArrowUp2:before {
            content: "\EA0D"
        }

        .icon-ArrowUp3:before {
            content: "\EA0E"
        }

        .icon-ArrowUp4:before {
            content: "\EA0F"
        }

        .icon-Articles:before {
            content: "\EA10"
        }

        .icon-Attatchment:before {
            content: "\EA11"
        }

        .icon-briefcase:before {
            content: "\EA12"
        }

        .icon-building:before {
            content: "\EA13"
        }

        .icon-BigArrowLeft:before {
            content: "\EA14"
        }

        .icon-BigArrowRight:before {
            content: "\EA15"
        }

        .icon-Book:before {
            content: "\EA16"
        }

        .icon-Calandar-28:before {
            content: "\EA17"
        }

        .icon-Calandar-30:before {
            content: "\EA18"
        }

        .icon-Calandar1:before {
            content: "\EA19"
        }

        .icon-Calandar2:before {
            content: "\EA1A"
        }

        .icon-Calandar3:before {
            content: "\EA1B"
        }

        .icon-Cart:before {
            content: "\EA1C"
        }

        .icon-CartOutline:before {
            content: "\EA1D"
        }

        .icon-Census:before {
            content: "\EA1E"
        }

        .icon-Census1:before {
            content: "\EA1F"
        }

        .icon-Census2:before {
            content: "\EA20"
        }

        .icon-ChangeSwapArrows:before {
            content: "\EA21"
        }

        .icon-Chat:before {
            content: "\EA22"
        }

        .icon-Check:before {
            content: "\EA23"
        }

        .icon-CheckApprovedSelected2:before {
            content: "\EA24"
        }

        .icon-CheckApprovedSelectedFilled:before {
            content: "\EA25"
        }

        .icon-CheckSymbols1:before {
            content: "\EA26"
        }

        .icon-CheckSymbols2:before {
            content: "\EA27"
        }

        .icon-Checklist-01:before {
            content: "\EA28"
        }

        .icon-Checklist-04:before {
            content: "\EA29"
        }

        .icon-ChevronArrowDown:before {
            content: "\EA2A"
        }

        .icon-ChevronArrowLeft:before {
            content: "\EA2B"
        }

        .icon-ChevronArrowRight:before {
            content: "\EA2C"
        }

        .icon-CircleArrow:before {
            content: "\EA2D"
        }

        .icon-Clipboard:before {
            content: "\EA2E"
        }

        .icon-ClockScheduleHours1:before {
            content: "\EA2F"
        }

        .icon-ClockScheduleHours2:before {
            content: "\EA30"
        }

        .icon-Close34:before {
            content: "\EA31"
        }

        .icon-youtube-logotype:before {
            content: "\EA32"
        }

        .icon-CommunityHealth:before {
            content: "\EA33"
        }

        .icon-Compass1:before {
            content: "\EA34"
        }

        .icon-Compass2:before {
            content: "\EA35"
        }

        .icon-Delete-Remove:before {
            content: "\EA36"
        }

        .icon-DeliveryMethod1:before {
            content: "\EA37"
        }

        .icon-Dental:before {
            content: "\EA38"
        }

        .icon-DentalOutline:before {
            content: "\EA39"
        }

        .icon-DerliveryMethod2:before {
            content: "\EA3A"
        }

        .icon-Directions:before {
            content: "\EA3B"
        }

        .icon-doctor:before {
            content: "\EA3C"
        }

        .icon-Document1:before {
            content: "\EA3D"
        }

        .icon-Document2:before {
            content: "\EA3E"
        }

        .icon-Document3:before {
            content: "\EA3F"
        }

        .icon-DocumentClaims4:before {
            content: "\EA40"
        }

        .icon-DocumentPage-36:before {
            content: "\EA41"
        }

        .icon-DocumentPage-37:before {
            content: "\EA42"
        }

        .icon-DollarDocument:before {
            content: "\EA43"
        }

        .icon-DollarSign1:before {
            content: "\EA44"
        }

        .icon-DollarSign2:before {
            content: "\EA45"
        }

        .icon-DollarSign3:before {
            content: "\EA46"
        }

        .icon-DoubleArrowLeft:before {
            content: "\EA47"
        }

        .icon-DoubleArrowRight:before {
            content: "\EA48"
        }

        .icon-DoubleArrowUp:before {
            content: "\EA49"
        }

        .icon-DoubleArrowown:before {
            content: "\EA4A"
        }

        .icon-DoubleChat:before {
            content: "\EA4B"
        }

        .icon-DoubleChevronArrowLeft:before {
            content: "\EA4C"
        }

        .icon-DoubleChevronArrowRight:before {
            content: "\EA4D"
        }

        .icon-Download:before {
            content: "\EA4E"
        }

        .icon-Download2:before {
            content: "\EA4F"
        }

        .icon-Download3:before {
            content: "\EA50"
        }

        .icon-DrivingCar:before {
            content: "\EA51"
        }

        .icon-Edit1:before {
            content: "\EA52"
        }

        .icon-Edit2:before {
            content: "\EA53"
        }

        .icon-Edit3:before {
            content: "\EA54"
        }

        .icon-Edit4:before {
            content: "\EA55"
        }

        .icon-Edit5:before {
            content: "\EA56"
        }

        .icon-EditCircle-17:before {
            content: "\EA57"
        }

        .icon-EditCircle-19:before {
            content: "\EA58"
        }

        .icon-EditPencil:before {
            content: "\EA59"
        }

        .icon-Email:before {
            content: "\EA5A"
        }

        .icon-Email1:before {
            content: "\EA5B"
        }

        .icon-Email2:before {
            content: "\EA5C"
        }

        .icon-EmailSend:before {
            content: "\EA5D"
        }

        .icon-EnrollmentStatus2:before {
            content: "\EA5E"
        }

        .icon-EnrollmentStatus3:before {
            content: "\EA5F"
        }

        .icon-EnrollmentStatus4:before {
            content: "\EA60"
        }

        .icon-Error:before {
            content: "\EA61"
        }

        .icon-Export:before {
            content: "\EA62"
        }

        .icon-Export2:before {
            content: "\EA63"
        }

        .icon-Eyewear:before {
            content: "\EA64"
        }

        .icon-EyewearOutline:before {
            content: "\EA65"
        }

        .icon-Facebook1:before {
            content: "\EA66"
        }

        .icon-facebook:before {
            content: "\EA67"
        }

        .icon-Failed:before {
            content: "\EA68"
        }

        .icon-Favorite2:before {
            content: "\EA69"
        }

        .icon-Favorite3:before {
            content: "\EA6A"
        }

        .icon-FavoriteHelp:before {
            content: "\EA6B"
        }

        .icon-FeedbackContactHelpCall:before {
            content: "\EA6D"
        }

        .icon-Filter:before {
            content: "\EA6E"
        }

        .icon-Flag:before {
            content: "\EA6F"
        }

        .icon-Form-02:before {
            content: "\EA70"
        }

        .icon-Form-25:before {
            content: "\EA71"
        }

        .icon-Fovorite1:before {
            content: "\EA72"
        }

        .icon-FullQuote:before {
            content: "\EA73"
        }

        .icon-GridFilter1:before {
            content: "\EA74"
        }

        .icon-GridFilter2:before {
            content: "\EA75"
        }

        .icon-GridFilter3:before {
            content: "\EA76"
        }

        .icon-GridFilter44:before {
            content: "\EA77"
        }

        .icon-GrowthArrowUp:before {
            content: "\EA78"
        }

        .icon-HamburgerMenu:before {
            content: "\EA79"
        }

        .icon-Health-15:before {
            content: "\EA7A"
        }

        .icon-Health-18:before {
            content: "\EA7B"
        }

        .icon-Health-19:before {
            content: "\EA7C"
        }

        .icon-HealthBig:before {
            content: "\EA7D"
        }

        .icon-HealthOutline:before {
            content: "\EA7E"
        }

        .icon-HealthProgram:before {
            content: "\EA7F"
        }

        .icon-HealthResource:before {
            content: "\EA80"
        }

        .icon-Heart1:before {
            content: "\EA81"
        }

        .icon-Heart2:before {
            content: "\EA82"
        }

        .icon-Help1:before {
            content: "\EA83"
        }

        .icon-IDCard1:before {
            content: "\EA84"
        }

        .icon-IDCard2:before {
            content: "\EA85"
        }

        .icon-IDCard3:before {
            content: "\EA86"
        }

        .icon-IDCardDocument:before {
            content: "\EA87"
        }

        .icon-Idaho1:before {
            content: "\EA88"
        }

        .icon-Idaho2:before {
            content: "\EA89"
        }

        .icon-Information:before {
            content: "\EA8A"
        }

        .icon-Lacation3:before {
            content: "\EA8B"
        }

        .icon-Life:before {
            content: "\EA8C"
        }

        .icon-LifeOutline:before {
            content: "\EA8D"
        }

        .icon-Like:before {
            content: "\EA8E"
        }

        .icon-ListFilter1-35:before {
            content: "\EA8F"
        }

        .icon-ListFilter1-41:before {
            content: "\EA90"
        }

        .icon-ListFilter2-36:before {
            content: "\EA91"
        }

        .icon-ListFilter2-42:before {
            content: "\EA92"
        }

        .icon-LiveChat:before {
            content: "\EA93"
        }

        .icon-LiveChatOutline:before {
            content: "\EA94"
        }

        .icon-live-video-chat:before {
            content: "\EA95"
        }

        .icon-Location1:before {
            content: "\EA96"
        }

        .icon-Location2:before {
            content: "\EA97"
        }

        .icon-LocationPin1:before {
            content: "\EA98"
        }

        .icon-Logout:before {
            content: "\EA99"
        }

        .icon-MapLocation:before {
            content: "\EA9A"
        }

        .icon-MedalPrize1:before {
            content: "\EA9B"
        }

        .icon-MedalPrize2:before {
            content: "\EA9C"
        }

        .icon-MedalPrize3:before {
            content: "\EA9D"
        }

        .icon-MedalPrize4:before {
            content: "\EA9E"
        }

        .icon-Medical:before {
            content: "\EA9F"
        }

        .icon-Medical1:before {
            content: "\EAA0"
        }

        .icon-Menu2:before {
            content: "\EAA1"
        }

        .icon-Money1:before {
            content: "\EAA2"
        }

        .icon-Money2:before {
            content: "\EAA3"
        }

        .icon-More:before {
            content: "\EAA4"
        }

        .icon-MyHealth2:before {
            content: "\EAA5"
        }

        .icon-Navigation1:before {
            content: "\EAA6"
        }

        .icon-Navigation2:before {
            content: "\EAA7"
        }

        .icon-Navigation3:before {
            content: "\EAA8"
        }

        .icon-NetworkBanner:before {
            content: "\EAA9"
        }

        .icon-NewEmail2:before {
            content: "\EAAA"
        }

        .icon-Notification1:before {
            content: "\EAAB"
        }

        .icon-Notification2:before {
            content: "\EAAC"
        }

        .icon-NurseHelpCallLine:before {
            content: "\EAAD"
        }

        .icon-nurse-line:before {
            content: "\EAAE"
        }

        .icon-PercentOff:before {
            content: "\EAAF"
        }

        .icon-phone:before {
            content: "\EAB0"
        }

        .icon-PhoneNotification:before {
            content: "\EAB1"
        }

        .icon-PhoneOutline:before {
            content: "\EAB2"
        }

        .icon-Pinterest1:before {
            content: "\EAB3"
        }

        .icon-pinterest:before {
            content: "\EAB4"
        }

        .icon-Print-24:before {
            content: "\EAB5"
        }

        .icon-Print-44:before {
            content: "\EAB6"
        }

        .icon-PrizeRibbon:before {
            content: "\EAB7"
        }

        .icon-Profile1:before {
            content: "\EAB8"
        }

        .icon-Profile2:before {
            content: "\EAB9"
        }

        .icon-Profile3:before {
            content: "\EABA"
        }

        .icon-Profile4:before {
            content: "\EABB"
        }

        .icon-Profile5:before {
            content: "\EABC"
        }

        .icon-Profile6:before {
            content: "\EABD"
        }

        .icon-Profile7:before {
            content: "\EABE"
        }

        .icon-ProfileMan:before {
            content: "\EABF"
        }

        .icon-ProfileWoman:before {
            content: "\EAC0"
        }

        .icon-QUALITY:before {
            content: "\EAC1"
        }

        .icon-QuickQuote:before {
            content: "\EAC2"
        }

        .icon-RXPharmacy1:before {
            content: "\EAC3"
        }

        .icon-RXPharmacy2:before {
            content: "\EAC4"
        }

        .icon-RXPharmacy3:before {
            content: "\EAC5"
        }

        .icon-RatingStars1:before {
            content: "\EAC6"
        }

        .icon-RatingStars2-01:before {
            content: "\EAC7"
        }

        .icon-RatingStars4:before {
            content: "\EAC8"
        }

        .icon-SHLogo1:before {
            content: "\EAC9"
        }

        .icon-SHLogoIcon5:before {
            content: "\EACA"
        }

        .icon-Search:before {
            content: "\EACB"
        }

        .icon-searchcircle:before {
            content: "\EACC"
        }

        .icon-SearchFind1:before {
            content: "\EACD"
        }

        .icon-SearchFind3:before {
            content: "\EACE"
        }

        .icon-SearchFind4:before {
            content: "\EACF"
        }

        .icon-SecureLockPassword:before {
            content: "\EAD0"
        }

        .icon-Select25:before {
            content: "\EAD1"
        }

        .icon-Selecto45:before {
            content: "\EAD2"
        }

        .icon-Selector1:before {
            content: "\EAD3"
        }

        .icon-Selector2:before {
            content: "\EAD4"
        }

        .icon-Selector3:before {
            content: "\EAD5"
        }

        .icon-Selector4-01:before {
            content: "\EAD6"
        }

        .icon-Selector6:before {
            content: "\EAD7"
        }

        .icon-Selector7:before {
            content: "\EAD8"
        }

        .icon-Selector8:before {
            content: "\EAD9"
        }

        .icon-SendEmail:before {
            content: "\EADA"
        }

        .icon-SendEmail2:before {
            content: "\EADB"
        }

        .icon-SettingsGear1:before {
            content: "\EADC"
        }

        .icon-SettingsGear2:before {
            content: "\EADD"
        }

        .icon-SettingsGearDouble:before {
            content: "\EADE"
        }

        .icon-Signiture:before {
            content: "\EADF"
        }

        .icon-SignitureOutline:before {
            content: "\EAE0"
        }

        .icon-Sound:before {
            content: "\EAE1"
        }

        .icon-Stars:before {
            content: "\EAE2"
        }

        .icon-Summary:before {
            content: "\EAE3"
        }

        .icon-TextSize1:before {
            content: "\EAE4"
        }

        .icon-TextSize2:before {
            content: "\EAE5"
        }

        .icon-TouchID1:before {
            content: "\EAE6"
        }

        .icon-TouchID2:before {
            content: "\EAE7"
        }

        .icon-Trophy:before {
            content: "\EAE8"
        }

        .icon-Twitter1:before {
            content: "\EAE9"
        }

        .icon-twitter:before {
            content: "\EAEA"
        }

        .icon-Twitter3:before {
            content: "\EAEB"
        }

        .icon-Upload:before {
            content: "\EAEC"
        }

        .icon-Upload2:before {
            content: "\EAED"
        }

        .icon-urgentcare-icon:before {
            content: "\EAEE"
        }

        .icon-Useage:before {
            content: "\EAEF"
        }

        .icon-Utah1:before {
            content: "\EAF0"
        }

        .icon-Utah2:before {
            content: "\EAF1"
        }

        .icon-VideoArticle:before {
            content: "\EAF2"
        }

        .icon-VideoPlayer:before {
            content: "\EAF3"
        }

        .icon-VideoTranscript:before {
            content: "\EAF4"
        }

        .icon-Website:before {
            content: "\EAF5"
        }

        .icon-add-new-user:before {
            content: "\EAF6"
        }

        .icon-doctor-necklace:before {
            content: "\EAF7"
        }

        .icon-googlepluscircle:before {
            content: "\EAF8"
        }

        .icon-google-plus:before {
            content: "\EAF9"
        }

        .icon-linkedincircle:before {
            content: "\EAFA"
        }

        .icon-linkedin:before {
            content: "\EAFB"
        }

        .icon-pregnant:before {
            content: "\EAFC"
        }

        .icon-uniE901:before {
            content: "\EAFD"
        }

        .icon-uniE902:before {
            content: "\EAFE"
        }

        .icon-uniE903:before {
            content: "\EAFF"
        }

        .icon-uniE905:before {
            content: "\EB00"
        }

        .icon-uniE906:before {
            content: "\EB01"
        }

        .icon-uniE908:before {
            content: "\EB02"
        }

        .icon-uniE909:before {
            content: "\EB03"
        }

        .icon-uniE927:before {
            content: "\EB04"
        }

        .icon-uniE928:before {
            content: "\EB05"
        }

        .icon-uniE92C:before {
            content: "\EB06"
        }

        .icon-uniE92D:before {
            content: "\EB07"
        }

        .icon-uniE930:before {
            content: "\EB08"
        }

        .icon-uniE931:before {
            content: "\EB09"
        }

        .icon-uniE934:before {
            content: "\EB0A"
        }

        .icon-uniE935:before {
            content: "\EB0B"
        }

        .icon-uniE945:before {
            content: "\EB0C"
        }

        .icon-uniE946:before {
            content: "\EB0D"
        }

        .icon-uniE961:before {
            content: "\EB0E"
        }

        .icon-uniE962:before {
            content: "\EB0F"
        }

        .icon-uniE9BD:before {
            content: "\EB10"
        }

        .icon-uniE9BE:before {
            content: "\EB11"
        }

        .icon-uniE9D2:before {
            content: "\EB12"
        }

        .icon-uniE9D3:before {
            content: "\EB13"
        }

        .icon-close:before {
            content: "\EB14"
        }

        .icon-weekends:before {
            content: "\EB15"
        }

        .icon-SelectHealthCheck:before {
            content: "\EC04"
        }

        .icon-fax-dark:before {
            content: "\EC05"
        }

        .icon-link:before {
            content: "\EC06"
        }

        .icon-fax:before {
            content: "\EC07"
        }

        .icon-dark-video-camera:before {
            content: "\EC08"
        }

        .icon-light-video-camera:before {
            content: "\EC09"
        }

        .icon-pdf:before {
            content: "\EC10"
        }

        .icon-visit-page:before {
            content: "\EC11"
        }

        .icon-Youtube:before {
            content: "\EC12"
        }

        .icon-Instagram:before {
            content: "\EC13"
        }

        .icon-CallCenter-Light:before {
            content: "\EC14"
        }

        .icon-Building-Light:before {
            content: "\EC15"
        }

        .icon-CallCenter-Dark:before {
            content: "\EC16"
        }

        .icon-OpenEarly:before {
            content: "\EC17"
        }

        .icon-OpenLate:before {
            content: "\EC18"
        }

        .icon-individual:before {
            content: "\EC01"
        }

        .icon-couple:before {
            content: "\EC02"
        }

        .icon-group:before {
            content: "\EC03"
        }

        figure {
            margin: 0
        }

        .rte figure {
            margin: 1rem
        }

        .pagination {
            padding-top: 22.864px;
            padding-left: 45.728px;
            font-size: 1.3rem
        }

        .pagination ul {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            padding-right: 22.864px
        }

        .pagination ul li {
            padding-right: 11.432px
        }

        .white-tooltip+.tooltip>.tooltip-inner {
            background-color: #fff;
            color: #7f8084;
            border: 1px solid #29abe2;
            -webkit-box-shadow: -1px 0 13px 2px rgba(61, 55, 61, .69);
            box-shadow: -1px 0 13px 2px rgba(61, 55, 61, .69)
        }

        .btn,
        .search-bar .btn {
            display: inline-block;
            position: relative;
            min-width: 6.25rem;
            padding: .5rem 1.25rem .625rem 1.25rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            outline: 0;
            -webkit-transition: padding .4s ease, opacity .4s ease;
            -o-transition: padding .4s ease, opacity .4s ease;
            transition: padding .4s ease, opacity .4s ease
        }

        .btn[data-loading] {
            padding-right: 3rem
        }

        .btn[data-loading] .btn__loader {
            opacity: 1
        }

        .btn--large {
            min-width: 6.25rem;
            padding: 1.5rem 2.25rem 1.625rem 2.25rem;
            border-radius: 5px;
            text-align: center;
            text-decoration: none
        }

        .banner .green .anchor-link a .btn-banner-default,
        .banner .green .content-card a .btn-banner-default,
        .banner .green .gray a .btn-banner-default,
        .banner .green .green a .btn-banner-default,
        .banner .green .wysiwyg a .btn-banner-default,
        .btn-default {
            color: #29abe2;
            border: 1px solid #bdbdbd;
            background-color: transparent
        }

        .banner .green .anchor-link a .btn-banner-default:hover,
        .banner .green .content-card a .btn-banner-default:hover,
        .banner .green .gray a .btn-banner-default:hover,
        .banner .green .green a .btn-banner-default:hover,
        .banner .green .wysiwyg a .btn-banner-default:hover,
        .btn-default:hover {
            color: #29abe2;
            border-color: #b0b0b0;
            background-color: #fafafa
        }

        .banner .green .anchor-link a .btn-banner-default:active,
        .banner .green .content-card a .btn-banner-default:active,
        .banner .green .gray a .btn-banner-default:active,
        .banner .green .green a .btn-banner-default:active,
        .banner .green .wysiwyg a .btn-banner-default:active,
        .btn-default:active {
            color: #29abe2;
            border-color: #979797;
            background-color: #f0f0f0
        }

        .anchor-link .btn-rte-primary,
        .banner .gray .anchor-link a .btn-banner-primary,
        .banner .gray .btn-rte-primary,
        .banner .gray .content-card a .btn-banner-primary,
        .banner .gray .gray a .btn-banner-primary,
        .banner .gray .green a .btn-banner-primary,
        .banner .gray .wysiwyg a .btn-banner-primary,
        .banner .green .btn-rte-primary,
        .btn-primary,
        .content-card .btn-rte-primary,
        .search-bar .btn,
        .wysiwyg .btn-rte-primary {
            color: #fff;
            border: 1px solid #5d862e;
            background-color: #5d862e
        }

        .anchor-link .btn-rte-primary:hover,
        .banner .gray .anchor-link a .btn-banner-primary:hover,
        .banner .gray .btn-rte-primary:hover,
        .banner .gray .content-card a .btn-banner-primary:hover,
        .banner .gray .gray a .btn-banner-primary:hover,
        .banner .gray .green a .btn-banner-primary:hover,
        .banner .gray .wysiwyg a .btn-banner-primary:hover,
        .banner .green .btn-rte-primary:hover,
        .btn-primary:hover,
        .content-card .btn-rte-primary:hover,
        .search-bar .btn:hover,
        .wysiwyg .btn-rte-primary:hover {
            color: #fff;
            border-color: #507327;
            background-color: #6a9935
        }

        .anchor-link .btn-rte-primary:active,
        .banner .gray .anchor-link a .btn-banner-primary:active,
        .banner .gray .btn-rte-primary:active,
        .banner .gray .content-card a .btn-banner-primary:active,
        .banner .gray .gray a .btn-banner-primary:active,
        .banner .gray .green a .btn-banner-primary:active,
        .banner .gray .wysiwyg a .btn-banner-primary:active,
        .banner .green .btn-rte-primary:active,
        .btn-primary:active,
        .content-card .btn-rte-primary:active,
        .search-bar .btn:active,
        .wysiwyg .btn-rte-primary:active {
            color: #fff;
            border-color: #354d1a;
            background-color: #77ac3b
        }

        .anchor-link .btn-rte-primary[data-loading],
        .banner .gray .anchor-link a .btn-banner-primary[data-loading],
        .banner .gray .btn-rte-primary[data-loading],
        .banner .gray .content-card a .btn-banner-primary[data-loading],
        .banner .gray .gray a .btn-banner-primary[data-loading],
        .banner .gray .green a .btn-banner-primary[data-loading],
        .banner .gray .wysiwyg a .btn-banner-primary[data-loading],
        .banner .green .btn-rte-primary[data-loading],
        .btn-primary[data-loading],
        .content-card .btn-rte-primary[data-loading],
        .search-bar .btn[data-loading],
        .wysiwyg .btn-rte-primary[data-loading] {
            color: #fff;
            border-color: #354d1a;
            background-color: #5c7440;
            pointer: auto
        }

        .btn-shallow {
            color: #fff;
            border: 1px solid #29abe2;
            background-color: #29abe2
        }

        .btn-shallow:hover {
            color: #fff;
            border-color: #1a8dbe;
            background-color: #4db9e7
        }

        .btn-shallow:active {
            color: #fff;
            border-color: #177da8;
            background-color: #6cc5eb
        }

        .btn-carbon {
            color: #fff;
            border: 1px solid #bdbdbd;
            background-color: #bdbdbd
        }

        .btn-carbon:hover {
            color: #fff;
            border-color: #b0b0b0;
            background-color: #cacaca
        }

        .btn-carbon:active {
            color: #fff;
            border-color: #979797;
            background-color: #d7d7d7
        }

        .btn-empty-jungle {
            color: #5d862e;
            border: 1px solid #5d862e;
            background-color: transparent
        }

        .btn-empty-jungle:hover {
            color: #5d862e;
            border-color: #507327;
            background-color: #f3f9ed
        }

        .btn-empty-jungle:active {
            color: #5d862e;
            border-color: #436021;
            background-color: #e7f2da
        }

        .anchor-link .btn-rte-empty-shallow,
        .banner .gray .btn-rte-empty-shallow,
        .banner .green .btn-rte-empty-shallow,
        .btn-empty-shallow,
        .content-card .btn-rte-empty-shallow,
        .wysiwyg .btn-rte-empty-shallow {
            color: #29abe2;
            border: 1px solid #29abe2;
            background-color: transparent
        }

        .anchor-link .btn-rte-empty-shallow:hover,
        .banner .gray .btn-rte-empty-shallow:hover,
        .banner .green .btn-rte-empty-shallow:hover,
        .btn-empty-shallow:hover,
        .content-card .btn-rte-empty-shallow:hover,
        .wysiwyg .btn-rte-empty-shallow:hover {
            color: #29abe2;
            border-color: #1d9ed5;
            background-color: #e6f5fc
        }

        .anchor-link .btn-rte-empty-shallow:active,
        .banner .gray .btn-rte-empty-shallow:active,
        .banner .green .btn-rte-empty-shallow:active,
        .btn-empty-shallow:active,
        .content-card .btn-rte-empty-shallow:active,
        .wysiwyg .btn-rte-empty-shallow:active {
            color: #29abe2;
            border-color: #1a8dbe;
            background-color: #d4eef9
        }

        .btn-empty-onyx {
            color: #7f8084;
            border: 1px solid #7f8084;
            background-color: transparent
        }

        .btn-empty-onyx:hover {
            color: #7f8084;
            border-color: #727377;
            background-color: #f4f4f4
        }

        .btn-empty-onyx:active {
            color: #7f8084;
            border-color: #66676a;
            background-color: #ececed
        }

        .btn__loader {
            position: absolute;
            top: 0;
            right: 1rem;
            bottom: 0;
            margin: auto;
            text-indent: -9999em;
            opacity: 0;
            font-size: 10px;
            border-top: .25em solid rgba(255, 255, 255, .2);
            border-right: .25em solid rgba(255, 255, 255, .2);
            border-bottom: .25em solid rgba(255, 255, 255, .2);
            border-left: .25em solid #fff;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear
        }

        .btn__loader,
        .btn__loader:after {
            border-radius: 50%;
            width: 2em;
            height: 2em
        }

        .page-header .index-link {
            float: left;
            width: 25%
        }

        .page-header .tools {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .page-header .login>* {
            display: inline-block
        }

        .page-header .global-search .search-field {
            position: relative;
            width: 0;
            padding: 0;
            margin: 0;
            overflow: hidden
        }

        .page-header .global-search .toggle-region {
            position: absolute;
            height: 0;
            overflow: hidden
        }

        .page-header .primary-nav-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:60rem) {
            .page-header .primary-nav {
                float: left;
                width: 66.66667%
            }
        }

        @media (min-width:64rem) {
            .page-header .primary-nav {
                float: left;
                width: 75%
            }
        }

        .page-header .callout-image-right .callout-heading {
            font-weight: 400;
            color: #5d862e
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section,
        summary {
            display: block
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit
        }

        body {
            margin: 0
        }

        section.theme-wrapper {
            margin-bottom: 80px;
            margin-top: 80px
        }

        .contain,
        .content-card--wrapper,
        .hero-overlay__offset,
        .hero_caption,
        .hero_intro,
        .hero_subtitle,
        .hero_title,
        .main-nav__container,
        .search-noresult,
        .searchresult-s,
        .tabs__contain {
            margin: 0 auto
        }

        @media (min-width:0rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                width: 18.75rem;
                max-width: 18.75rem
            }
        }

        @media (min-width:40rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                width: auto;
                max-width: 30rem
            }
        }

        @media (min-width:48rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 40rem
            }
        }

        @media (min-width:60rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 48rem
            }
        }

        @media (min-width:64rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 60rem
            }
        }

        @media (min-width:80rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 64rem
            }
        }

        @media (min-width:87.5rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 80rem
            }
        }

        @media (min-width:100rem) {

            .contain,
            .content-card--wrapper,
            .hero-overlay__offset,
            .hero_caption,
            .hero_intro,
            .hero_subtitle,
            .hero_title,
            .main-nav__container,
            .search-noresult,
            .searchresult-s,
            .tabs__contain {
                max-width: 87.5rem
            }
        }

        @media (min-width:80rem) {

            .main .contain,
            .main .content-card--wrapper,
            .main .hero-overlay__offset,
            .main .hero_caption,
            .main .hero_intro,
            .main .hero_subtitle,
            .main .hero_title,
            .main .main-nav__container,
            .main .search-noresult,
            .main .searchresult-s,
            .main .tabs__contain {
                padding-right: 0;
                padding-left: 0
            }
        }

        .header {
            background-color: #fff
        }

        @media (min-width:60rem) {
            .header {
                background-color: #f0f0f0
            }
        }

        @media (min-width:60rem) {
            .two-column {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex
            }

            .two-column .one-third {
                width: 26%
            }

            .two-column .two-third {
                width: 70%
            }
        }

        .main-nav__langauge {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .main-nav__logo {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .main-nav__menu-toggle {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .main-nav__menu {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .main-nav__myhealth-and-phone {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        @media (min-width:64rem) {
            .main-nav__langauge {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0
            }

            .main-nav__logo {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1
            }

            .main-nav__myhealth-and-phone {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2
            }

            .main-nav__menu-toggle {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3
            }

            .main-nav__menu {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4
            }
        }

        .main-nav {
            width: 100%;
            min-width: 320px;
            position: relative
        }

        @media (min-width:64rem) {
            .main-nav {
                border-bottom: 2px solid #bdbdbd
            }
        }

        .main-nav__container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (max-width:64rem) {
            .main-nav__container {
                max-width: 100%;
                width: 100%;
                min-width: 320px
            }
        }

        @media (min-width:87.5rem) {
            .main-nav__container {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between
            }
        }

        .main-nav__language {
            display: none;
            text-decoration: underline;
            -ms-flex-item-align: end;
            align-self: flex-end;
            margin-bottom: .5rem
        }

        @media (min-width:64rem) {
            .main-nav__language {
                display: block
            }
        }

        @media (min-width:87.5rem) {
            .main-nav__language {
                width: 100%;
                text-align: right
            }
        }

        .main-nav__language-item {
            color: #7f8084;
            font-size: .75rem
        }

        .main-nav__logo {
            -ms-flex-item-align: center;
            align-self: center;
            padding: 20px 0 15px;
            width: 300px
        }

        @media (min-width:64rem) {
            .main-nav__logo {
                padding: 0 0 30px
            }
        }

        @media (min-width:87.5rem) {
            .main-nav__logo {
                padding: 0;
                margin-top: -1rem
            }
        }

        .main-nav__logo__img {
            width: 100%
        }

        .main-nav__menu-toggle {
            height: 60px;
            background-color: #5d862e;
            color: #fff;
            font-size: 1.5rem;
            text-align: center;
            line-height: 2.5;
            z-index: 1000
        }

        .main-nav__menu-toggle-link {
            display: block;
            color: #fff
        }

        .main-nav__menu-toggle-link:hover {
            color: #fff
        }

        .main-nav__animated-bars {
            display: inline-block;
            width: 30px;
            height: 30px;
            position: relative;
            vertical-align: middle;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer
        }

        .main-nav__animated-bars span {
            display: block;
            position: absolute;
            height: 4px;
            width: 100%;
            background: #fff;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out
        }

        .main-nav__animated-bars span:nth-child(1) {
            top: 0;
            -webkit-transform-origin: left center;
            -ms-transform-origin: left center;
            transform-origin: left center
        }

        .main-nav__animated-bars span:nth-child(2) {
            top: 10px;
            -webkit-transform-origin: left center;
            -ms-transform-origin: left center;
            transform-origin: left center
        }

        .main-nav__animated-bars span:nth-child(3) {
            top: 20px;
            -webkit-transform-origin: left center;
            -ms-transform-origin: left center;
            transform-origin: left center
        }

        .main-nav__animated-bars.open span:nth-child(1) {
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            top: -2px;
            left: 8px
        }

        .main-nav__animated-bars.open span:nth-child(2) {
            width: 0%;
            opacity: 0
        }

        .main-nav__animated-bars.open span:nth-child(3) {
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            top: 19px;
            left: 8px
        }

        .main-nav__menu-button {
            display: inline-block;
            vertical-align: top
        }

        .main-nav__menu {
            width: 100%
        }

        .main-nav__nav-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: auto;
            list-style: none;
            padding: 0;
            margin: 0
        }

        @media (min-width:64rem) {
            .main-nav__nav-list {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                width: 100%;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -ms-flex-item-align: center;
                align-self: center;
                margin-top: 1rem;
                margin-left: -.5rem;
                margin-right: -.5rem
            }
        }

        @media (min-width:87.5rem) {
            .main-nav__nav-list {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between
            }
        }

        .main-nav__item {
            position: relative;
            width: 100%;
            white-space: nowrap;
            border-top: 2.2px solid #bdbdbd
        }

        @media (min-width:64rem) {
            .main-nav__item {
                width: auto;
                border: none;
                border-radius: 5px;
                border: 2.2px solid transparent;
                -webkit-transition: all .4s ease;
                -o-transition: all .4s ease;
                transition: all .4s ease
            }

            .main-nav__item:hover {
                position: relative;
                color: #7f8084
            }
        }

        .main-nav__item--sub-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (min-width:64rem) {
            .main-nav__item--sub-nav {
                display: list-item;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0
            }

            .main-nav__item--sub-nav:hover {
                border: 2.2px solid #29abe2;
                border-bottom: 2.2px solid transparent
            }

            .main-nav__item--sub-nav:after {
                position: absolute;
                bottom: -2.2px;
                left: 0;
                right: 0;
                content: '';
                opacity: 0;
                border-bottom: 2.2px solid #fff;
                background-color: #fff
            }
        }

        @media (min-width:64rem) {

            .main-nav__item--sub-nav[data-dropdown-closing]:after,
            .main-nav__item--sub-nav[data-dropdown-open]:after {
                opacity: 1;
                z-index: 3
            }
        }

        .main-nav__item--search {
            display: none
        }

        @media (min-width:64rem) {
            .main-nav__item--search {
                display: list-item
            }

            .main-nav__item--search [class*=icon-] {
                font-size: 1.75rem;
                line-height: 1;
                vertical-align: middle
            }
        }

        .main-nav__link {
            display: block;
            padding: 1rem;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
            font-weight: 600
        }

        @media (min-width:64rem) {
            .main-nav__link {
                padding: 1rem .5rem
            }

            .main-nav__link:hover {
                color: #7f8084
            }
        }

        .main-nav__sub-nav-toggle {
            border-left: 2.2px solid #e0e0e0
        }

        @media (min-width:64rem) {
            .main-nav__sub-nav-toggle {
                display: none
            }
        }

        .main-nav__sub-nav-toggle-link {
            display: block;
            padding: 1rem;
            font-size: 1.125rem
        }

        .main-nav__sub-nav {
            width: 100%;
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 2.2px solid #bdbdbd
        }

        @media (min-width:64rem) {
            .main-nav__sub-nav {
                width: auto;
                position: absolute;
                left: -2.2px;
                z-index: 1;
                background-color: #fff;
                -webkit-transition: all .4s ease;
                -o-transition: all .4s ease;
                transition: all .4s ease;
                border: 2.2px solid #fff;
                border-radius: 5px;
                border-top-left-radius: 0
            }
        }

        @media (min-width:64rem) {
            .main-nav__sub-nav--right-align {
                left: auto;
                right: -2.2px;
                border-radius: 5px 0 5px
            }
        }

        @media (min-width:64rem) {
            .main-nav [data-dropdown-open] .main-nav__sub-nav {
                border: 2.2px solid #29abe2;
                border-top: 2px solid #29abe2
            }
        }

        .main-nav__sub-item {
            display: block;
            background-color: #f0f0f0;
            border-bottom: 2.2px solid #fff
        }

        .main-nav__sub-item:last-child {
            border-bottom: none
        }

        @media (min-width:64rem) {
            .main-nav__sub-item {
                border-bottom: none;
                background-color: transparent
            }

            .main-nav__sub-item:first-child {
                margin-top: 1rem
            }

            .main-nav__sub-item:last-child {
                margin-bottom: 1rem
            }
        }

        .main-nav__sub-link {
            display: block;
            text-align: center;
            padding: 1rem
        }

        @media (min-width:64rem) {
            .main-nav__sub-link {
                color: #7f8084;
                text-align: left;
                padding: .5rem 2rem
            }
        }

        .main-nav__search {
            background-color: #f0f0f0;
            text-align: center;
            line-height: 2
        }

        @media only screen and (max-width:639px) {
            .main-nav__search {
                left: 0;
                width: 100%
            }
        }

        @media (min-width:64rem) {
            .main-nav__search {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                position: relative;
                z-index: 1
            }

            .main-nav__search-wrapper {
                border-top: 1px solid #bdbdbd;
                border-bottom: 12px solid #5d862e;
                -webkit-box-shadow: inset 0 8px 20px -10px #bdbdbd;
                box-shadow: inset 0 8px 20px -10px #bdbdbd
            }
        }

        .main-nav__search-wrapper {
            padding: .5rem;
            display: none
        }

        .main-nav__search-form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .main-nav__search-input {
            width: 50%;
            height: 42px;
            margin-right: 1rem
        }

        @media (min-width:64rem) {
            .main-nav__search-input {
                width: 25%
            }
        }

        .main-nav__search-submit-btn {
            display: none;
            height: 42px;
            margin-top: -3px;
            margin-bottom: 0
        }

        @media (min-width:64rem) {
            .main-nav__search-submit-btn {
                display: block
            }
        }

        .main-nav__search-submit-btn [class*=icon-] {
            margin-left: .5rem;
            font-size: 1.5rem;
            line-height: 1;
            vertical-align: middle
        }

        .main-nav__search-submit-icon {
            border: none;
            background: 0 0;
            cursor: pointer;
            color: #29abe2
        }

        .main-nav__search-submit-icon:hover {
            color: #a9e2ff
        }

        .main-nav__search-submit-icon [class*=icon-] {
            font-size: 2rem;
            line-height: 1;
            vertical-align: middle
        }

        @media (min-width:64rem) {
            .main-nav__search-submit-icon {
                display: none
            }
        }

        .main-nav__myhealth-and-phone {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:64rem) {
            .main-nav__myhealth-and-phone {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }
        }

        .main-nav__myhealth {
            height: auto;
            text-align: center;
            background-color: #29abe2
        }

        @media (min-width:64rem) {
            .main-nav__myhealth.collapse {
                display: block
            }
        }

        @media (min-width:64rem) {
            .main-nav__myhealth {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2
            }
        }

        .main-nav .form-group--horizontal {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .main-nav__phone {
            color: #5d862e;
            border-bottom: 1px solid #7f8084;
            height: 50px;
            line-height: 2;
            text-align: center;
            white-space: nowrap
        }

        @media (min-width:64rem) {
            .main-nav__phone {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
                border: none;
                height: auto;
                line-height: 1;
                margin-top: -1.3rem
            }
        }

        .main-nav__phone__img {
            display: none
        }

        .main-nav__phone-link {
            color: #5d862e
        }

        @media (min-width:64rem) {
            .main-nav__phone-link {
                margin-right: 15px
            }
        }

        .main-nav__phone-border .spacer {
            height: 12px;
            background-color: #5d862e;
            margin-top: -5px
        }

        @media (min-width:64rem) {
            .main-nav {
                min-width: 0
            }

            .main-nav__menu-toggle {
                display: none
            }

            .main-nav__menu {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        @media (min-width:64rem) {
            .main-nav .myhealth {
                position: relative;
                display: block
            }
        }

        .main-nav .myhealth__desktop:hover {
            cursor: pointer
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__icon {
                background-color: #fff;
                padding-left: 15px;
                padding-right: 15px
            }
        }

        @media (min-width:64rem) and (min-width:87.5rem) {
            .main-nav .myhealth__icon {
                margin-top: -30px
            }
        }

        .main-nav .myhealth__icon span.login-button-myhealth {
            margin-left: 80px;
            color: #fff
        }

        .main-nav .myhealth__icon a {
            cursor: pointer;
            height: auto;
            display: block;
            background: #29abe2;
            padding: 10px 30px 10px;
            -webkit-border-bottom-right-radius: 0;
            -webkit-border-bottom-left-radius: 0;
            -moz-border-radius-bottomright: 0;
            -moz-border-radius-bottomleft: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__icon a {
                border-radius: 10px
            }
        }

        @media (min-width:87.5rem) {
            .main-nav .myhealth__icon a {
                padding: 60px 30px 10px;
                -webkit-border-top-right-radius: 0;
                -webkit-border-top-left-radius: 0;
                -moz-border-radius-topright: 0;
                -moz-border-radius-topleft: 0;
                border-top-right-radius: 0;
                border-top-left-radius: 0;
                -webkit-border-bottom-right-radius: 10px;
                -webkit-border-bottom-left-radius: 10px;
                -moz-border-radius-bottomright: 10px;
                -moz-border-radius-bottomleft: 10px;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px
            }
        }

        .main-nav .myhealth__icon a span.icon-ArrowDown2 {
            color: #fff;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            margin-left: 2rem;
            margin-top: .25rem;
            height: 20px
        }

        .main-nav .myhealth__icon a.collapsed span.icon-ArrowDown2 {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0)
        }

        .main-nav .myhealth__icon .collapse {
            display: inline-block;
            margin-bottom: 20px
        }

        .main-nav .myhealth__icon .clickable {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        .main-nav .myhealth__login-form .input__username {
            margin-right: 15px;
            margin-bottom: 0
        }

        .main-nav .myhealth__login-form .input__password {
            margin-bottom: 0
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__login-form .tam-login-form {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }
        }

        .main-nav .myhealth__login-form .input-contain {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            display: inline-grid
        }

        .main-nav .myhealth__login-form .input-contain a.username {
            text-align: right;
            font-size: 12px;
            margin-right: 15px;
            color: #fff
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__login-form .input-contain a.username {
                color: #29abe2
            }
        }

        .main-nav .myhealth__login-form .input-contain a.password {
            text-align: right;
            font-size: 12px;
            color: #fff
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__login-form .input-contain a.password {
                color: #29abe2
            }
        }

        .main-nav .myhealth__register {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__register {
                display: block;
                position: absolute;
                bottom: -.5rem;
                left: 0;
                right: 0
            }
        }

        .main-nav .myhealth__register-link {
            color: #fff;
            font-size: .75rem;
            padding: .5rem
        }

        .main-nav .myhealth__register-link:hover {
            color: #a9e2ff
        }

        @media (min-width:64rem) {
            .main-nav .myhealth__register-link {
                color: #29abe2;
                background-color: #fff
            }
        }

        .myhealth-modal__title {
            color: #5d862e
        }

        .myhealth-modal__error {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .myhealth-modal__error .error-message {
            color: #eb7425
        }

        .form-group--tam-submit {
            display: block
        }

        .btn-shallow--tam {
            border: none;
            font-size: 1.3125rem;
            font-weight: 600;
            padding-top: 0;
            padding-bottom: 0
        }

        @media (min-width:64rem) {
            .btn-shallow--tam {
                background: #fff;
                color: #29abe2
            }
        }

        .btn-shallow--tam:hover {
            background: #29abe2;
            color: #a9e2ff
        }

        @media (min-width:64rem) {
            .btn-shallow--tam:hover {
                background: #fff
            }
        }

        .btn-shallow--tam:first-child {
            margin-top: .5rem
        }

        .btn-shallow--tam:last-child {
            margin-bottom: .625rem
        }

        .btn__loader--tam {
            border-top-color: rgba(41, 171, 226, .2);
            border-right-color: rgba(41, 171, 226, .2);
            border-bottom-color: rgba(41, 171, 226, .2);
            border-left-color: #29abe2
        }

        .icon-MyHealth2--login {
            display: block;
            height: 1.7rem
        }

        .icon-MyHealth2--login:before {
            line-height: .3;
            font-size: 8rem !important;
            color: #fff
        }

        .icon-MyHealth2--login:before {
            font-size: 5.25rem
        }

        .cards {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: 0;
            border-bottom: 1px solid #bdbdbd
        }

        @media (min-width:60rem) {
            .cards {
                border-top: 1px solid #bdbdbd
            }
        }

        .card {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding-top: 3.75rem
        }

        .card__image {
            display: none;
            width: 100%;
            height: auto;
            min-height: 1px
        }

        @media (min-width:48rem) {
            .card__image {
                display: block
            }
        }

        @media (min-width:60rem) {
            .card__image {
                padding: 0
            }
        }

        .card__header {
            margin-top: 3.5rem;
            margin-bottom: 2rem
        }

        @media (min-width:60rem) {
            .card__header {
                min-height: 6rem
            }
        }

        @media (min-width:64rem) {
            .card__header {
                min-height: 7rem
            }
        }

        .card__title {
            margin: 0;
            line-height: 1.1
        }

        .card__subtitle {
            margin: 0
        }

        .card__text {
            width: 100%;
            margin-top: 0;
            margin-bottom: 2rem;
            letter-spacing: 0;
            font-weight: 300;
            font-size: 1.3125rem;
            line-height: 1.2;
            color: #333
        }

        @media (min-width:60rem) {
            .card__text {
                min-height: 8.125rem
            }
        }

        .card__links {
            margin-top: auto
        }

        .card__link {
            display: block;
            border-top: 1px solid #7f8084
        }

        .card__link:last-of-type {
            border-bottom: 1px solid #7f8084
        }

        .card__link-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: .8rem 0;
            padding-left: .5rem;
            padding-right: .5rem;
            text-align: center
        }

        .card__link-container:hover [class$="--card-arrow"] {
            color: #a9e2ff
        }

        @media (min-width:48rem) {
            .card__link-container {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                text-align: left
            }
        }

        @media (min-width:80rem) {
            .card__link-container {
                padding-left: 1.875rem;
                padding-right: 1.25rem
            }
        }

        @media (min-width:0rem) {
            .card__link-container [class$="--card-arrow"] {
                display: none
            }
        }

        @media (min-width:48rem) {
            .card__link-container [class$="--card-arrow"] {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .card__link-text {
            margin: 0;
            font-weight: 300;
            font-size: 1.125rem
        }

        .card--2up {
            border-bottom: 1px solid #bdbdbd
        }

        @media (min-width:60rem) {
            .card--2up {
                width: 50%;
                padding-top: 60px;
                padding-bottom: 60px
            }
        }

        @media (min-width:60rem) {
            .card--2up:nth-child(odd) {
                border-right: 1px solid #bdbdbd;
                padding-right: 60px
            }
        }

        @media (min-width:60rem) {
            .card--2up:nth-child(even) {
                padding-left: 60px
            }
        }

        .card--2up:last-child,
        .card--2up:nth-last-child(-n+2):not(:nth-child(even)) {
            border-bottom: none
        }

        @media (min-width:80rem) {
            .card--network {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start
            }
        }

        .card--network .card__header {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            width: 100%;
            min-height: auto;
            margin-top: 0
        }

        .card--network .card__title {
            color: #333;
            margin: 0
        }

        .card--network .card__subtitle {
            color: #7f8084
        }

        .card--network .card__image {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
            margin-bottom: 2rem;
            padding-top: 0
        }

        @media (min-width:80rem) {
            .card--network .card__image {
                width: 33.33%
            }

            .card--network .card__image img {
                padding-right: 30px
            }
        }

        .card--network .card__content {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        @media (min-width:80rem) {
            .card--network .card__content {
                width: 66.66%
            }
        }

        .card--network .card__text {
            min-height: auto;
            color: #7f8084;
            color: #7f8084;
            line-height: 1.429;
            font-size: 1rem
        }

        .icon-ArrowRight2--cards-arrow {
            height: 1rem;
            cursor: pointer;
            color: #29abe2
        }

        .stars-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: inline-block
        }

        .stars-list li {
            display: inline-block;
            vertical-align: middle
        }

        .stars-list [class^=icon-]:before {
            font-size: 1.125rem
        }

        .icon-RatingStars1 {
            color: #bdbdbd
        }

        .icon-RatingStars1.gold {
            color: #d9bf26
        }

        .feature {
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat
        }

        .feature__overlay {
            width: 100%;
            height: 40.625rem;
            min-height: 40.625rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:0rem) {
            .feature__overlay {
                background: rgba(255, 255, 255, .5)
            }
        }

        @media (min-width:60rem) {
            .feature__overlay {
                background: 0 0
            }
        }

        .feature__contain {
            padding-left: 15px;
            padding-right: 15px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            width: 100%
        }

        .feature__contain--right {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .feature__contain--left {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        @media (min-width:80rem) {
            .feature__contain {
                padding-left: 0;
                padding-right: 0
            }
        }

        .feature__content {
            width: 100%
        }

        @media (min-width:60rem) {
            .feature__content--left {
                width: 50%;
                padding-right: 5%
            }
        }

        @media (min-width:60rem) {
            .feature__content--right {
                width: 50%;
                padding-left: 5%
            }
        }

        .feature__text {
            margin: 0;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 300
        }

        .feature__title {
            margin-bottom: 2.5rem
        }

        .feature__title h2 {
            font-size: 3rem;
            color: #5d862e
        }

        .feature__copy {
            color: #333
        }

        @media (min-width:0rem) {
            .feature__copy {
                margin-bottom: 3.75rem
            }
        }

        @media (min-width:60rem) {
            .feature__copy {
                margin-bottom: 2rem
            }
        }

        .feature__links {
            width: 100%
        }

        .feature__link {
            display: block;
            border-top: 1px solid #7f8084
        }

        .feature__link:last-of-type {
            border-bottom: 1px solid #7f8084
        }

        .feature__link-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: .8rem 0;
            padding-left: 1.875rem;
            padding-right: 1.25rem;
            text-align: center
        }

        .feature__link-wrapper:hover [class$="--features"] {
            color: #a9e2ff
        }

        @media (min-width:48rem) {
            .feature__link-wrapper {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                text-align: left;
                padding-left: .5rem;
                padding-right: .5rem
            }
        }

        @media (min-width:80rem) {
            .feature__link-wrapper {
                padding-left: 1.875rem;
                padding-right: 1.25rem
            }
        }

        @media (min-width:0rem) {
            .feature__link-wrapper [class$="--features"] {
                display: none
            }
        }

        @media (min-width:48rem) {
            .feature__link-wrapper [class$="--features"] {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .icon-ArrowRight2--features {
            font-size: 1rem;
            cursor: pointer;
            color: #29abe2
        }

        h1.feature__text {
            font-weight: 400
        }

        .ms-modal {
            width: auto;
            -webkit-box-shadow: 0 0 3rem 0 rgba(0, 0, 0, .6);
            box-shadow: 0 0 3rem 0 rgba(0, 0, 0, .6)
        }

        .ms-modal__body,
        .ms-modal__title {
            text-align: left
        }

        .ms-modal__title {
            margin-bottom: 0
        }

        .ms-modal__body {
            color: #7f8084;
            margin-bottom: 2rem
        }

        .ms-modal__or {
            color: #7f8084;
            margin: 0 1rem
        }

        .make-a-payment-modal .btn--inline {
            margin-right: 7.5px
        }

        .make-a-payment-modal .btn--inline:last-child {
            margin-right: unset
        }

        .make-a-payment__section {
            margin-bottom: 15px
        }

        .btn--selection {
            min-width: 13.25rem
        }

        .leaving-modal {
            max-width: 565px
        }

        .leaving-modal__title {
            color: #5d862e
        }

        .leaving-modal__selection {
            padding: 10px;
            text-align: center
        }

        .leaving-modal__selection-element {
            padding: 10px
        }

        @media (min-width:0rem) {
            .leaving-modal__selection-element {
                display: block
            }
        }

        @media (min-width:40rem) {
            .leaving-modal__selection-element {
                display: inline-block
            }
        }

        .nav,
        nav {
            margin-bottom: 11.432px;
            padding-bottom: 11.432px
        }

        @media (min-width:48rem) {

            .nav,
            nav {
                margin-bottom: 22.864px;
                padding-bottom: 22.864px
            }
        }

        @media (min-width:64rem) {

            .nav,
            nav {
                margin-bottom: 45.728px;
                padding-bottom: 45.728px
            }
        }

        .nav .nav-item-inner,
        nav .nav-item-inner {
            display: block
        }

        .nav img,
        nav img {
            display: block;
            border: 1px solid #e0e0e0
        }

        .nav h1,
        .nav h2,
        .nav h3,
        .nav h4,
        .nav h5,
        .nav h6,
        nav h1,
        nav h2,
        nav h3,
        nav h4,
        nav h5,
        nav h6 {
            color: #333
        }

        .nav .nav-heading,
        nav .nav-heading {
            border-bottom: 1px solid #bdbdbd;
            color: #7f8084;
            text-transform: uppercase;
            font-weight: 700;
            padding-bottom: 10px;
            letter-spacing: 3px
        }

        @media (min-width:0rem) {

            .nav .nav-heading,
            nav .nav-heading {
                font-size: 1em
            }
        }

        @media (min-width:40rem) {

            .nav .nav-heading,
            nav .nav-heading {
                font-size: 1.2em
            }
        }

        .nav .nav-item-heading,
        nav .nav-item-heading {
            color: #333;
            padding-top: 11.432px
        }

        .nav p,
        nav p {
            color: #7f8084
        }

        .nav ul,
        nav ul {
            padding-left: 0;
            margin-bottom: 0;
            margin-top: 0
        }

        .nav li,
        nav li {
            list-style-type: none
        }

        @media (min-width:0rem) {

            .nav .list,
            nav .list {
                font-size: smaller
            }

            .nav .list li,
            nav .list li {
                padding-bottom: 8px
            }
        }

        @media (min-width:40rem) {

            .nav .list,
            nav .list {
                font-size: inherit;
                font-size: initial
            }

            .nav .list li,
            nav .list li {
                padding-bottom: inherit
            }
        }

        .nav .list h2,
        nav .list h2 {
            color: #5d862e
        }

        .nav .list li,
        nav .list li {
            list-style-type: disc;
            color: #29abe2;
            margin-left: 16px
        }

        @media (min-width:0rem) {

            .nav .list1,
            nav .list1 {
                font-size: larger
            }

            .nav .list1 li,
            nav .list1 li {
                padding-bottom: 8px
            }
        }

        @media (min-width:40rem) {

            .nav .list1,
            nav .list1 {
                font-size: inherit;
                font-size: initial
            }

            .nav .list1 li,
            nav .list1 li {
                padding-bottom: inherit
            }
        }

        .nav .list1 h2,
        nav .list1 h2 {
            color: #eb7425
        }

        .nav .list1 li,
        nav .list1 li {
            list-style-type: circle;
            color: #5d862e;
            margin-left: 16px
        }

        .primary-nav {
            padding: 11.432px 0;
            z-index: 3
        }

        .primary-nav .toggle-trigger {
            display: inline-block
        }

        @media (min-width:48rem) {
            .primary-nav .toggle-trigger {
                display: none
            }
        }

        .primary-nav .menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-pack: distribute;
            justify-content: space-around
        }

        .primary-nav h2 {
            display: none
        }

        .primary-nav .nav-item {
            display: flex-item
        }

        .primary-nav .nav-item h3 {
            font-size: 1.3em
        }

        .primary-nav .nav-item a {
            padding: 8px 0;
            margin: 0 8px
        }

        .primary-nav .nav-item a:hover {
            color: #a9e2ff
        }

        .primary-nav .nav-item a.is-current {
            color: #5d862e;
            border-bottom: 4px solid #5d862e
        }

        @media (min-width:0rem) {
            .primary-nav .menu {
                display: block
            }

            .primary-nav .menu-tap {
                color: #29abe2;
                float: right
            }

            .primary-nav ul {
                overflow: hidden
            }

            .primary-nav ul li {
                border-bottom: 2px solid #e0e0e0
            }

            .primary-nav h2 {
                color: #5d862e;
                display: block;
                padding-top: 5px;
                padding-bottom: 10px
            }

            .primary-nav .nav-item h3 {
                line-height: 1.8;
                font-size: 1.2em;
                padding: 10px
            }

            .primary-nav .menu {
                clear: both;
                max-height: 0;
                -webkit-transition: max-height .2s ease-out;
                -o-transition: max-height .2s ease-out;
                transition: max-height .2s ease-out
            }

            .primary-nav .menu-icon {
                background-color: #5d862e;
                cursor: pointer;
                display: inline-block;
                float: left;
                padding: 28px 20px;
                position: relative;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none
            }

            .primary-nav .menu-icon .navicon {
                background: #fff;
                display: block;
                height: 2px;
                position: relative;
                -webkit-transition: background .2s ease-out;
                -o-transition: background .2s ease-out;
                transition: background .2s ease-out;
                width: 18px
            }

            .primary-nav .menu-icon .navicon:after,
            .primary-nav .menu-icon .navicon:before {
                background: #fff;
                content: '';
                display: block;
                height: 100%;
                position: absolute;
                -webkit-transition: all .2s ease-out;
                -o-transition: all .2s ease-out;
                transition: all .2s ease-out;
                width: 100%
            }

            .primary-nav .menu-icon .navicon:before {
                top: 5px
            }

            .primary-nav .menu-icon .navicon:after {
                top: -5px
            }

            .primary-nav .menu-btn {
                display: none
            }

            .primary-nav .menu-btn:checked~.menu {
                max-height: 685px;
                width: 300px;
                padding-left: 16px
            }

            .primary-nav .menu-btn:checked~.menu .hamburger {
                display: inline-block
            }

            .primary-nav .menu-btn:checked~.menu-icon {
                left: 300px
            }

            .primary-nav .menu-btn:checked~.menu-icon .navicon {
                background: 0 0
            }

            .primary-nav .menu-btn:checked~.menu-icon .navicon:before {
                -webkit-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .primary-nav .menu-btn:checked~.menu-icon .navicon:after {
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg)
            }

            .primary-nav .menu-btn:checked~.menu-icon:not(.steps) .navicon:after,
            .primary-nav .menu-btn:checked~.menu-icon:not(.steps) .navicon:before {
                top: 0
            }
        }

        @media (min-width:48rem) {
            .primary-nav .menu {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .primary-nav .menu-tap {
                display: none
            }

            .primary-nav ul {
                overflow: inherit
            }

            .primary-nav ul li {
                border-bottom: inherit
            }

            .primary-nav h2 {
                display: none
            }

            .primary-nav .nav-item h3 {
                line-height: inherit;
                padding: inherit;
                font-size: 1em
            }

            .primary-nav .menu {
                width: inherit
            }

            .primary-nav .menu-icon {
                display: none
            }

            .primary-nav .menu-btn:checked~.menu {
                width: inherit;
                max-height: inherit
            }

            .primary-nav .menu-btn:checked~.menu .hamburger {
                display: none
            }
        }

        @media (min-width:60rem) {
            .primary-nav .nav-item h3 {
                font-size: 1.3em
            }
        }

        .menu-contact {
            display: none
        }

        @media (min-width:48rem) {
            .menu-contact {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .menu-contact h4 {
            font-size: 1em
        }

        @media (min-width:60rem) {
            .menu-contact h4 {
                font-size: 1.25em
            }
        }

        .menu-contact [class*=icon],
        .menu-contact [class^=icon] {
            font-size: 1.6rem;
            padding-right: 11.432px
        }

        .nav.nav-icons .nav-items,
        nav.nav-icons .nav-items {
            text-align: center
        }

        @media (min-width:60rem) {

            .nav.nav-icons .nav-items,
            nav.nav-icons .nav-items {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:0rem) {

            .nav.nav-icons .nav-item,
            nav.nav-icons .nav-item {
                margin-bottom: 8px;
                border-bottom: 1px solid #bdbdbd
            }
        }

        @media (min-width:48rem) {

            .nav.nav-icons .nav-item,
            nav.nav-icons .nav-item {
                margin-bottom: 0
            }
        }

        @media (min-width:60rem) {

            .nav.nav-icons .nav-item,
            nav.nav-icons .nav-item {
                border-bottom: none;
                max-width: 15%;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto
            }
        }

        @media all and (min-width:60rem) and (-ms-high-contrast:none),
        (min-width:60rem) and (-ms-high-contrast:active) {

            .nav.nav-icons .nav-item,
            nav.nav-icons .nav-item {
                margin-left: 0;
                margin-right: 0
            }
        }

        .nav.nav-icons .nav-item-inner,
        nav.nav-icons .nav-item-inner {
            margin-left: 1rem;
            margin-right: 1rem
        }

        @media (min-width:0rem) {

            .nav.nav-icons .nav-item-inner,
            nav.nav-icons .nav-item-inner {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                text-align: left
            }
        }

        @media (min-width:48rem) {

            .nav.nav-icons .nav-item-inner,
            nav.nav-icons .nav-item-inner {
                display: block;
                text-align: center
            }
        }

        @media (min-width:0rem) {

            .nav.nav-icons .nav-item-inner figure,
            nav.nav-icons .nav-item-inner figure {
                padding-right: 16px
            }
        }

        @media (min-width:48rem) {

            .nav.nav-icons .nav-item-inner figure,
            nav.nav-icons .nav-item-inner figure {
                padding-right: inherit
            }
        }

        @media (min-width:0rem) {

            .nav.nav-icons .nav-item-inner header,
            nav.nav-icons .nav-item-inner header {
                width: 80%
            }
        }

        @media (min-width:40rem) {

            .nav.nav-icons .nav-item-inner header,
            nav.nav-icons .nav-item-inner header {
                width: auto;
                width: inherit
            }
        }

        .nav.nav-icons .nav-item-heading,
        nav.nav-icons .nav-item-heading {
            color: #29abe2;
            margin-bottom: 0
        }

        @media (min-width:0rem) {

            .nav.nav-icons .nav-item-heading,
            nav.nav-icons .nav-item-heading {
                font-size: 1.2em;
                font-weight: 400
            }
        }

        @media (min-width:40rem) {

            .nav.nav-icons .nav-item-heading,
            nav.nav-icons .nav-item-heading {
                font-size: initial;
                font-size: inherit
            }
        }

        @media (min-width:48rem) {

            .nav.nav-icons .nav-item-heading,
            nav.nav-icons .nav-item-heading {
                font-weight: 700
            }
        }

        .nav.nav-icons figure,
        nav.nav-icons figure {
            margin-top: 22.864px
        }

        .nav.nav-icons span[class^=icon-],
        nav.nav-icons span[class^=icon-] {
            color: #5d862e;
            font-size: 3em;
            line-height: 1;
            display: block;
            text-align: center
        }

        .nav.nav-icons p,
        nav.nav-icons p {
            font-size: smaller
        }

        .nav.hamburger,
        nav.hamburger {
            display: none;
            color: #29abe2;
            padding: 0
        }

        .nav.hamburger h2,
        nav.hamburger h2 {
            display: none
        }

        .nav.hamburger p,
        nav.hamburger p {
            display: none
        }

        .nav.hamburger span[class^=icon-],
        nav.hamburger span[class^=icon-] {
            color: #29abe2
        }

        .nav.hamburger .nav-item,
        nav.hamburger .nav-item {
            display: inline-block;
            border-bottom: none;
            width: 32%;
            text-transform: uppercase
        }

        .nav.hamburger .nav-item:nth-child(2),
        nav.hamburger .nav-item:nth-child(2) {
            border-left: 2px solid #e0e0e0;
            border-right: 2px solid #e0e0e0
        }

        .nav.hamburger .nav-item-inner,
        nav.hamburger .nav-item-inner {
            display: inline-block;
            font-size: .6em;
            text-align: center
        }

        .nav.double-primary,
        nav.double-primary {
            background-color: #e0e0e0;
            -webkit-box-shadow: 0 -6px 3px rgba(50, 50, 50, .35);
            box-shadow: 0 -6px 3px rgba(50, 50, 50, .35);
            font-size: smaller
        }

        .nav.double-primary h2,
        nav.double-primary h2 {
            display: none
        }

        .nav.double-primary h5,
        nav.double-primary h5 {
            text-transform: uppercase
        }

        .nav.double-primary section,
        nav.double-primary section {
            padding-top: 0;
            padding-bottom: 0
        }

        .nav.double-primary .nav-item,
        nav.double-primary .nav-item {
            margin-left: 0;
            margin-right: 0
        }

        @media (min-width:0rem) {

            .nav.double-primary,
            nav.double-primary {
                background-color: #fff;
                -webkit-box-shadow: none;
                box-shadow: none;
                white-space: nowrap;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }

            .nav.double-primary .nav-item,
            nav.double-primary .nav-item {
                display: inline-block;
                border-bottom: none
            }

            .nav.double-primary .nav-item-inner,
            nav.double-primary .nav-item-inner {
                display: inherit
            }

            .nav.double-primary .nav-item-inner header,
            nav.double-primary .nav-item-inner header {
                width: auto
            }

            .nav.double-primary p,
            nav.double-primary p {
                display: none
            }
        }

        @media (min-width:60rem) {

            .nav.double-primary,
            nav.double-primary {
                background-color: #e0e0e0;
                -webkit-box-shadow: inherit;
                box-shadow: inherit;
                white-space: inherit;
                overflow-x: inherit;
                -webkit-overflow-scrolling: inherit;
                -ms-overflow-style: inherit
            }

            .nav.double-primary .nav-item,
            nav.double-primary .nav-item {
                display: inherit;
                border-bottom: inherit
            }

            .nav.double-primary .nav-item-inner,
            nav.double-primary .nav-item-inner {
                display: inline-block
            }

            .nav.double-primary p,
            nav.double-primary p {
                display: inherit
            }
        }

        .nav.nav-tabs .resp-tabs-list,
        nav.nav-tabs .resp-tabs-list {
            width: 80%;
            margin-left: auto;
            margin-right: auto
        }

        .nav.nav-tabs .resp-tabs-list li,
        nav.nav-tabs .resp-tabs-list li {
            background-color: #e0e0e0;
            display: inline-block;
            padding: 20px;
            margin: 0 2px 0 0;
            list-style: none;
            cursor: pointer;
            float: left;
            width: 24%
        }

        .nav.nav-tabs .resp-tabs-list li:first-child,
        nav.nav-tabs .resp-tabs-list li:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .nav.nav-tabs .resp-tabs-list li:last-child,
        nav.nav-tabs .resp-tabs-list li:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px
        }

        .nav.nav-tabs .resp-tabs-list h3,
        nav.nav-tabs .resp-tabs-list h3 {
            font-weight: 700;
            color: #56565a;
            text-align: center
        }

        .nav.nav-tabs .resp-tabs-container,
        nav.nav-tabs .resp-tabs-container {
            padding: 0;
            background-color: #fff;
            clear: left
        }

        .nav.nav-tabs h2.resp-accordion,
        nav.nav-tabs h2.resp-accordion {
            cursor: pointer;
            padding: 5px;
            display: none
        }

        .nav.nav-tabs .resp-tab-content,
        nav.nav-tabs .resp-tab-content {
            display: none;
            padding: 15px
        }

        .nav.nav-tabs .resp-tab-active,
        nav.nav-tabs .resp-tab-active {
            background-color: #fff;
            border-bottom: none;
            padding: 20px !important;
            border-bottom: 0 #fff solid !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .nav.nav-tabs .resp-tab-active h3,
        nav.nav-tabs .resp-tab-active h3 {
            color: #29abe2
        }

        .nav.nav-tabs .resp-accordion-active,
        .nav.nav-tabs .resp-content-active,
        nav.nav-tabs .resp-accordion-active,
        nav.nav-tabs .resp-content-active {
            display: block
        }

        @media (min-width:0rem) {

            .nav.nav-tabs .resp-tabs-list,
            nav.nav-tabs .resp-tabs-list {
                width: 100%
            }

            .nav.nav-tabs .resp-tabs-list li,
            nav.nav-tabs .resp-tabs-list li {
                border-radius: 5px;
                border: 2px solid #29abe2;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin: 3px;
                padding: 25px;
                width: 48%;
                height: 75px
            }

            .nav.nav-tabs h3,
            nav.nav-tabs h3 {
                font-size: .9em;
                text-transform: uppercase
            }

            .nav.nav-tabs .resp-tab-active li,
            nav.nav-tabs .resp-tab-active li {
                border: 2px solid #29abe2
            }

            .nav.nav-tabs .resp-tabs-container .tab-content,
            nav.nav-tabs .resp-tabs-container .tab-content {
                position: relative;
                background-color: #e0e0e0;
                border: 2px solid #bdbdbd
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:after,
            .nav.nav-tabs .resp-tabs-container .tab-content:before,
            nav.nav-tabs .resp-tabs-container .tab-content:after,
            nav.nav-tabs .resp-tabs-container .tab-content:before {
                bottom: 100%;
                left: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:after,
            nav.nav-tabs .resp-tabs-container .tab-content:after {
                border-color: rgba(224, 224, 224, 0);
                border-bottom-color: #e0e0e0;
                border-width: 10px;
                margin-left: -10px
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:before,
            nav.nav-tabs .resp-tabs-container .tab-content:before {
                border-color: rgba(189, 189, 189, 0);
                border-bottom-color: #bdbdbd;
                border-width: 16px;
                margin-left: -16px
            }
        }

        @media (min-width:48rem) {

            .nav.nav-tabs .resp-tabs-list,
            nav.nav-tabs .resp-tabs-list {
                width: 80%;
                margin-left: auto;
                margin-right: auto
            }

            .nav.nav-tabs .resp-tabs-list li,
            nav.nav-tabs .resp-tabs-list li {
                border-radius: inherit;
                border: inherit;
                border: initial;
                display: inline-block;
                margin: 0 2px 0 0;
                padding: 20px;
                width: 24%;
                height: 70px
            }

            .nav.nav-tabs h3,
            nav.nav-tabs h3 {
                font-size: inherit;
                text-transform: inherit
            }

            .nav.nav-tabs .resp-tab-active li,
            nav.nav-tabs .resp-tab-active li {
                border: inherit
            }

            .nav.nav-tabs .resp-tabs-container .tab-content,
            nav.nav-tabs .resp-tabs-container .tab-content {
                position: inherit;
                background-color: inherit;
                border: none
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:after,
            .nav.nav-tabs .resp-tabs-container .tab-content:before,
            nav.nav-tabs .resp-tabs-container .tab-content:after,
            nav.nav-tabs .resp-tabs-container .tab-content:before {
                bottom: inherit;
                left: inherit;
                border: inherit;
                content: inherit;
                height: inherit;
                width: inherit;
                position: inherit;
                pointer-events: none
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:after,
            nav.nav-tabs .resp-tabs-container .tab-content:after {
                border-color: inherit;
                border-bottom-color: inherit;
                border-width: inherit;
                margin-left: inherit
            }

            .nav.nav-tabs .resp-tabs-container .tab-content:before,
            nav.nav-tabs .resp-tabs-container .tab-content:before {
                border-color: inherit;
                border-bottom-color: inherit;
                border-width: inherit;
                margin-left: inherit
            }
        }

        @media (min-width:64rem) {

            .nav.nav-tabs .resp-tabs-list li,
            nav.nav-tabs .resp-tabs-list li {
                height: 100px
            }

            .nav.nav-tabs h3,
            nav.nav-tabs h3 {
                font-size: 1.286em
            }
        }

        .nav.nav-topics,
        nav.nav-topics {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background-color: #fff;
            font-size: 1.2em;
            margin-bottom: -60px;
            padding-bottom: 0
        }

        @media (min-width:60rem) {

            .nav.nav-topics,
            nav.nav-topics {
                margin-bottom: -100px
            }
        }

        .nav.nav-topics .nav-topics-heading,
        nav.nav-topics .nav-topics-heading {
            color: #5d862e;
            font-weight: 400;
            padding: 4px 22.864px 4px 0;
            white-space: nowrap
        }

        .nav.nav-topics .nav-items,
        nav.nav-topics .nav-items {
            text-align: center;
            bottom: 22.864px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (min-width:60rem) {

            .nav.nav-topics .nav-items,
            nav.nav-topics .nav-items {
                bottom: 35px
            }
        }

        .nav.nav-topics .nav-items .nav-item,
        nav.nav-topics .nav-items .nav-item {
            padding-right: 22.864px
        }

        .nav.nav-topics .nav-item-heading,
        nav.nav-topics .nav-item-heading {
            padding-top: initial;
            background-color: #f0f0f0;
            color: #7f8084;
            font-weight: 400;
            border-radius: 5px;
            padding: 4px
        }

        a.bx-next {
            color: #5d862e;
            font-weight: 700;
            font-size: 2.5rem;
            padding-left: 22.864px;
            position: relative;
            bottom: 11.432px
        }

        a.bx-next:hover {
            text-decoration: none
        }

        .bx-pager-item {
            display: none
        }

        .search-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            border-radius: 5px;
            position: relative
        }

        @media (min-width:48rem) {
            .search-bar {
                margin-left: auto;
                margin-right: auto;
                padding: 16px 0;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .search-bar .search-input {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            padding: .875rem;
            position: relative;
            z-index: 101;
            margin-top: 0;
            margin-bottom: 0;
            outline: 0;
            border-radius: 5px
        }

        .search-bar .search-input[placeholder] {
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        @media (min-width:48rem) {
            .search-bar .search-input {
                border-radius: 5px
            }
        }

        .search-bar .btn {
            z-index: 101;
            font-weight: 600;
            text-transform: uppercase;
            padding: .875rem 0 .9rem 0;
            border: 1px solid #5d862e;
            border-radius: 5px
        }

        @media (min-width:48rem) {
            .search-bar .btn {
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                padding: 0;
                border-radius: 5px
            }
        }

        .btn-provider-search {
            width: 100%;
            height: 50px;
            margin: 1rem auto
        }

        @media (min-width:48rem) {
            .btn-provider-search {
                width: 190px
            }
        }

        .hero {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background-size: contain;
            background-position: top center;
            background-repeat: no-repeat;
            position: relative;
            background-size: 1px 1px;
            background-position: 0 0
        }

        @media (min-width:48rem) {
            .hero {
                background-size: cover;
                background-position: top center
            }
        }

        .hero .button-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            height: 100%;
            margin: auto;
            text-align: center
        }

        .hero .button-wrapper .btn-huge {
            height: 100px;
            width: 175px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
            margin-bottom: 22.864px;
            margin-right: 11.432px
        }

        .hero .button-small-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            height: 100%;
            text-align: left
        }

        @media (min-width:40rem) {
            .hero .button-small-wrapper {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between
            }
        }

        @media (min-width:48rem) {
            .hero .button-small-wrapper {
                width: 90%
            }
        }

        @media (min-width:60rem) {
            .hero .button-small-wrapper {
                width: 80%
            }
        }

        @media (min-width:80rem) {
            .hero .button-small-wrapper {
                width: 60%
            }
        }

        @media (min-width:40rem) {
            .hero .button-small-wrapper .btn-hero-large {
                width: 45%
            }
        }

        .anchor-link .hero .btn-rte-primary,
        .banner .gray .anchor-link a .hero .btn-banner-primary,
        .banner .gray .content-card a .hero .btn-banner-primary,
        .banner .gray .gray a .hero .btn-banner-primary,
        .banner .gray .green a .hero .btn-banner-primary,
        .banner .gray .hero .btn-rte-primary,
        .banner .gray .wysiwyg a .hero .btn-banner-primary,
        .banner .green .hero .btn-rte-primary,
        .content-card .hero .btn-rte-primary,
        .hero .anchor-link .btn-rte-primary,
        .hero .banner .gray .anchor-link a .btn-banner-primary,
        .hero .banner .gray .btn-rte-primary,
        .hero .banner .gray .content-card a .btn-banner-primary,
        .hero .banner .gray .gray a .btn-banner-primary,
        .hero .banner .gray .green a .btn-banner-primary,
        .hero .banner .gray .wysiwyg a .btn-banner-primary,
        .hero .banner .green .btn-rte-primary,
        .hero .btn-primary,
        .hero .content-card .btn-rte-primary,
        .hero .search-bar .btn,
        .hero .wysiwyg .btn-rte-primary,
        .search-bar .hero .btn,
        .wysiwyg .hero .btn-rte-primary {
            font-size: 1.125rem
        }

        .hero .btn-hero-large {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: distribute;
            justify-content: space-around;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 80px;
            color: #29abe2;
            border: 2px solid #29abe2;
            background-color: transparent;
            overflow: hidden;
            margin-right: 2%;
            padding: .5rem .5rem .6rem
        }

        .hero .btn-hero-large:hover {
            color: #29abe2;
            background-color: rgba(41, 171, 255, .2)
        }

        @media (min-width:48rem) {
            .hero .btn-hero-large {
                width: 45%;
                color: #fff;
                border: 2px solid #fff
            }

            .hero .btn-hero-large:hover {
                color: #fff;
                background-color: rgba(255, 255, 255, .2)
            }
        }

        @media (min-width:60rem) {
            .hero .btn-hero-large {
                height: 90px;
                padding: .75rem 1.25rem .625rem
            }
        }

        .hero .btn-hero-large span {
            overflow: hidden
        }

        .hero_caption {
            max-width: 100%;
            width: 100%;
            position: relative
        }

        @media (min-width:0rem) {
            .hero_caption {
                min-height: 6.66667em
            }
        }

        @media (min-width:40rem) {
            .hero_caption {
                min-height: 18.66667em
            }
        }

        @media (min-width:48rem) {
            .hero_caption {
                min-height: 26.66667em
            }
        }

        @media (min-width:60rem) {
            .hero_caption {
                min-height: 40em
            }
        }

        @media (min-width:48rem) {
            .hero_caption-inner {
                margin: auto;
                padding: 45.728px 0
            }
        }

        @media (min-width:48rem) {
            .hero--left .hero_caption-inner {
                margin-left: 5%;
                margin-right: 40%
            }
        }

        .hero--left .hero_intro {
            font-weight: 300
        }

        @media (min-width:60rem) {
            .hero--left .hero_intro {
                max-width: 100%
            }
        }

        @media (min-width:48rem) {
            .hero--right .hero_caption-inner {
                margin-left: 40%;
                margin-right: 5%
            }
        }

        .hero--right .hero_intro {
            font-weight: 300
        }

        @media (min-width:60rem) {
            .hero--right .hero_intro {
                max-width: 100%
            }
        }

        .hero--center {
            text-align: center
        }

        @media (min-width:0rem) {
            .hero--center .hero_title {
                font-weight: 400
            }
        }

        @media (min-width:48rem) {
            .hero--center .hero_caption-inner {
                width: 60%
            }
        }

        .hero_header {
            background-size: cover;
            background-position: center
        }

        @media (min-width:48rem) {
            .hero_header {
                background-image: none !important
            }
        }

        .hero_title {
            font-size: calc(2.15rem + 2.35 * ((100vw - 30rem)/ 87.5));
            font-weight: 400;
            padding: 45.728px 22.864px;
            margin-bottom: 10px;
            line-height: 1.1;
            letter-spacing: 2px
        }

        @media screen and (max-width:30rem) {
            .hero_title {
                font-size: 2.15rem
            }
        }

        @media screen and (min-width:87.5rem) {
            .hero_title {
                font-size: 4.5rem
            }
        }

        @media (min-width:48rem) {
            .hero_title {
                padding: 0
            }
        }

        .hero_subtitle {
            color: #fff;
            padding: 0 22.864px;
            text-align: left
        }

        @media (min-width:48rem) {
            .hero_subtitle {
                padding: 0
            }
        }

        .hero_intro {
            background-color: #fff;
            padding: 22.864px;
            font-weight: 300;
            font-size: calc(1.3125rem + .1875 * ((100vw - 30rem)/ 87.5))
        }

        @media screen and (max-width:30rem) {
            .hero_intro {
                font-size: 1.3125rem
            }
        }

        @media screen and (min-width:87.5rem) {
            .hero_intro {
                font-size: 1.5rem
            }
        }

        @media (min-width:48rem) {
            .hero_intro {
                background-color: transparent;
                padding: 0;
                padding-top: 2rem
            }
        }

        .hero_intro a {
            text-decoration: underline;
            white-space: nowrap
        }

        .hero_intro a:hover {
            color: #f0f0f0
        }

        .hero_intro p {
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .hero_intro .btn {
            text-decoration: none;
            font-weight: 400;
            white-space: normal
        }

        .hero_subtitle {
            color: #333;
            margin-bottom: 0
        }

        .hero {
            color: #fff
        }

        .hero--primary .hero_title {
            color: #5d862e
        }

        .hero--primary p {
            color: #333
        }

        .hero--light a {
            font-weight: 400;
            font-size: 1.5rem
        }

        @media (min-width:48rem) {
            .hero--light a {
                color: #fff
            }
        }

        .hero--light .hero_title {
            color: #fff
        }

        .hero--light .hero_intro,
        .hero--light .hero_subtitle {
            color: #7f8084
        }

        @media (min-width:48rem) {

            .hero--light .hero_intro,
            .hero--light .hero_subtitle {
                color: #fff
            }
        }

        @media (min-width:48rem) {
            .hero--light h2 {
                color: #fff
            }
        }

        @media (min-width:48rem) {
            .hero--light p {
                color: #fff
            }
        }

        .hero--dark a {
            font-weight: 400
        }

        .hero--dark .hero_title {
            color: #333
        }

        @media (min-width:48rem) {

            .hero--dark .hero_intro,
            .hero--dark .hero_subtitle {
                color: #333
            }
        }

        .hero--dark p {
            color: #333
        }

        .hero--white-overlay .hero_caption {
            background-color: rgba(255, 255, 255, .45)
        }

        .hero--black-overlay .hero_caption {
            background-color: rgba(0, 0, 0, .45)
        }

        .hero_buttons .hero_subtitle {
            color: #5d862e
        }

        .hero_buttons h4 {
            padding-bottom: 22.864px
        }

        .anchor-link .hero_buttons .btn-rte-primary,
        .banner .gray .anchor-link a .hero_buttons .btn-banner-primary,
        .banner .gray .content-card a .hero_buttons .btn-banner-primary,
        .banner .gray .gray a .hero_buttons .btn-banner-primary,
        .banner .gray .green a .hero_buttons .btn-banner-primary,
        .banner .gray .hero_buttons .btn-rte-primary,
        .banner .gray .wysiwyg a .hero_buttons .btn-banner-primary,
        .banner .green .hero_buttons .btn-rte-primary,
        .content-card .hero_buttons .btn-rte-primary,
        .hero_buttons .anchor-link .btn-rte-primary,
        .hero_buttons .banner .gray .anchor-link a .btn-banner-primary,
        .hero_buttons .banner .gray .btn-rte-primary,
        .hero_buttons .banner .gray .content-card a .btn-banner-primary,
        .hero_buttons .banner .gray .gray a .btn-banner-primary,
        .hero_buttons .banner .gray .green a .btn-banner-primary,
        .hero_buttons .banner .gray .wysiwyg a .btn-banner-primary,
        .hero_buttons .banner .green .btn-rte-primary,
        .hero_buttons .btn-primary,
        .hero_buttons .content-card .btn-rte-primary,
        .hero_buttons .search-bar .btn,
        .hero_buttons .wysiwyg .btn-rte-primary,
        .search-bar .hero_buttons .btn,
        .wysiwyg .hero_buttons .btn-rte-primary {
            margin: 11.432px
        }

        .hero-overlay {
            position: relative;
            margin: 0 0 50px
        }

        @media (min-width:60rem) {
            .hero-overlay {
                margin: 0
            }
        }

        .hero-overlay h4 {
            font-weight: 300
        }

        .hero-overlay__offset {
            width: 100%;
            overflow: hidden;
            background-color: #fff;
            border: 2px solid #bdbdbd
        }

        @media (min-width:48rem) {
            .hero-overlay__offset {
                position: relative;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px
            }
        }

        @media (min-width:60rem) {
            .hero-overlay__offset {
                margin-top: -100px
            }
        }

        @media (min-width:87.5rem) {
            .hero-overlay__offset {
                margin-top: -150px
            }
        }

        .hero-overlay__title {
            text-align: center;
            padding: 10px;
            font-weight: 600;
            background-color: #f0f0f0;
            border-bottom: 2px solid #bdbdbd
        }

        .hero-overlay__copy {
            padding: 45px
        }

        .hero-overlay .open-enrollment__grid {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:48rem) {
            .hero-overlay .open-enrollment__grid {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .hero-overlay .open-enrollment__list {
            padding-bottom: 15px
        }

        @media (min-width:48rem) {
            .hero-overlay .open-enrollment__list {
                padding-right: 60px
            }
        }

        @media (min-width:60rem) {
            .hero-overlay .open-enrollment__list {
                border-right: 2px solid #bdbdbd
            }
        }

        .hero-overlay .open-enrollment__list ul {
            margin: 0
        }

        .hero-overlay .open-enrollment__ctas {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:48rem) {
            .hero-overlay .open-enrollment__ctas {
                padding-left: 40px;
                border-left: 2px solid #bdbdbd
            }
        }

        @media (min-width:60rem) {
            .hero-overlay .open-enrollment__ctas {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                border: none
            }
        }

        .hero-overlay .open-enrollment__ctas a {
            margin: 0 20px
        }

        .hero-overlay .open-enrollment__ctas span {
            -ms-flex-item-align: center;
            align-self: center;
            padding: 15px 0
        }

        @media (min-width:60rem) {
            .hero-overlay .open-enrollment__ctas .btn--oep-qualify {
                line-height: 2
            }
        }

        @media (min-width:64rem) {
            .hero-overlay .open-enrollment__ctas .btn--oep-qualify {
                line-height: 1.4
            }
        }

        .dir {
            margin-bottom: 11.432px;
            padding-bottom: 11.432px
        }

        @media (min-width:48rem) {
            .dir {
                margin-bottom: 22.864px;
                padding-bottom: 22.864px
            }
        }

        @media (min-width:64rem) {
            .dir {
                margin-bottom: 45.728px;
                padding-bottom: 45.728px
            }
        }

        @media (min-width:0rem) {
            .dir .dir-item {
                margin-bottom: 22.864px
            }
        }

        @media (min-width:48rem) {
            .dir .dir-item {
                margin-bottom: 11.432px
            }
        }

        .dir .dir-item-inner {
            display: block
        }

        .dir img {
            display: block;
            border: 1px solid #e0e0e0
        }

        .dir h1,
        .dir h2,
        .dir h3,
        .dir h4,
        .dir h5,
        .dir h6 {
            color: #333
        }

        .dir .dir-heading {
            color: #5d862e;
            font-weight: 700;
            padding-bottom: 10px
        }

        .dir .dir-item-heading {
            color: #29abe2;
            font-weight: 700
        }

        .dir p {
            color: #7f8084
        }

        .dir.dir-images .dir-item-heading {
            border-bottom: 2px solid #e0e0e0
        }

        .dir.dir-icons .dir-items {
            text-align: center
        }

        .dir.dir-icons .dir-item {
            border: 2px solid #e0e0e0;
            border-radius: 5px
        }

        .dir.dir-icons .dir-item-inner {
            margin-left: 1rem;
            margin-right: 1rem
        }

        .dir.dir-icons figure {
            margin-top: 22.864px
        }

        .dir.dir-icons span[class^=icon-] {
            font-size: 6em;
            line-height: 1;
            display: block;
            text-align: center
        }

        .dir.news .dir-heading {
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 0
        }

        .dir.news .dir-items {
            padding-top: 22.864px
        }

        .dir.news .date {
            color: #bdbdbd;
            font-size: smaller;
            margin-top: -11.432px
        }

        .dir.programs .date {
            display: none
        }

        .dir.dir-list .dir-items {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-direction: column;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -ms-flex-align: stretch;
            -webkit-box-align: stretch;
            align-items: stretch;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .dir.dir-list .dir-item {
            overflow: hidden
        }

        @media (min-width:0rem) {
            .dir.dir-list .dir-item {
                margin-bottom: 10px
            }
        }

        @media (min-width:60rem) {
            .dir.dir-list .dir-item {
                width: 60%;
                max-width: 60%;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 20px
            }
        }

        .dir.dir-list .dir-item-inner {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex
        }

        @media (min-width:0rem) {
            .dir.dir-list .dir-item-inner .dir-item-heading {
                margin-bottom: 0
            }
        }

        @media (min-width:60rem) {
            .dir.dir-list .dir-item-inner .dir-item-heading {
                margin-bottom: .4em
            }
        }

        @media (min-width:0rem) {
            .dir.dir-list .dir-item-inner figure {
                margin-right: 16px
            }
        }

        @media (min-width:48rem) {
            .dir.dir-list .dir-item-inner figure {
                margin-right: 30px
            }
        }

        .dir.dir-list .dir-item-inner img {
            border: 1px solid #e0e0e0;
            padding-right: 0
        }

        @media (min-width:0rem) {
            .dir.dir-list .dir-item-inner p {
                visibility: hidden
            }
        }

        @media (min-width:40rem) {
            .dir.dir-list .dir-item-inner p {
                visibility: inherit
            }
        }

        .dir.dir-list .dir-item-inner figure,
        .dir.dir-list .dir-item-inner header {
            width: 50%
        }

        .dir.dir-list figure {
            margin-bottom: 11.432px
        }

        @media (min-width:48rem) {
            .dir.dir-grid .dir-items {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex;
                -ms-flex-direction: row;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                flex-direction: row;
                -ms-flex-align: stretch;
                -webkit-box-align: stretch;
                align-items: stretch;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:48rem) {
            .dir.dir-grid .dir-item {
                width: 31%;
                max-width: 31%;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto
            }
        }

        @media (min-width:0rem) {
            .dir.dir-grid .dir-item-inner {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex
            }
        }

        @media (min-width:48rem) {
            .dir.dir-grid .dir-item-inner {
                display: block
            }
        }

        @media (min-width:0rem) {
            .dir.dir-grid .dir-item-inner figure {
                margin-right: 16px
            }
        }

        @media (min-width:48rem) {
            .dir.dir-grid .dir-item-inner img {
                border: 1px solid #e0e0e0;
                padding-right: 0
            }
        }

        @media (min-width:0rem) {
            .dir.dir-grid .dir-item-inner p:not(.date) {
                display: none;
                overflow: hidden
            }
        }

        @media (min-width:40rem) {
            .dir.dir-grid .dir-item-inner p:not(.date) {
                display: inherit
            }
        }

        @media (min-width:0rem) {

            .dir.dir-grid .dir-item-inner figure,
            .dir.dir-grid .dir-item-inner header {
                width: 50%
            }
        }

        @media (min-width:48rem) {

            .dir.dir-grid .dir-item-inner figure,
            .dir.dir-grid .dir-item-inner header {
                width: inherit
            }
        }

        .dir.dir-grid figure {
            margin-bottom: 11.432px
        }

        .dir.dir-simple {
            font-size: smaller
        }

        .dir.dir-simple .dir-heading {
            border-bottom: none;
            padding-left: 11px
        }

        @media (min-width:64rem) {
            .dir.dir-simple .dir-item {
                max-width: 23%
            }
        }

        .dir.dir-simple p {
            text-transform: uppercase
        }

        .callout .callout-inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .callout.callout-image-right header {
            -webkit-box-flex: 3;
            -ms-flex: 3 1;
            flex: 3 1;
            text-align: right
        }

        .callout.callout-image-right figure {
            -webkit-box-flex: 1;
            -ms-flex: 1 3;
            flex: 1 3
        }

        .callout.callout-icon-left [class*=icon],
        .callout.callout-icon-left [class^=icon] {
            font-size: 2.286em;
            padding: 22.864px
        }

        .callout.callout-contact-phone {
            font-weight: 400
        }

        .callout.callout-contact-phone .callout-inner {
            padding: 8px;
            border-radius: 5px
        }

        .callout.callout-contact-phone .callout-heading {
            color: #5d862e;
            margin-bottom: 0
        }

        .callout.callout-contact-phone p {
            font-size: 1.714rem;
            margin-bottom: 0
        }

        .callout.callout-contact-phone .callout-inner:hover {
            background-color: #5d862e;
            color: #fff
        }

        .callout.callout-contact-phone .callout-inner:hover .callout-heading {
            color: #fff
        }

        .callout.callout-contact-phone .callout-inner:active {
            background-color: tint(#5d862e, 20%);
            color: #fff
        }

        .callout.callout-login-myhealth {
            background-color: #f0f0f0;
            padding: 22.864px
        }

        .callout.callout-login-myhealth .callout-heading {
            color: #333
        }

        .callout.callout-login-myhealth .callout-bottom {
            margin-top: 11.432px;
            color: #29abe2;
            font-weight: 400
        }

        .callout.callout-service {
            text-align: left;
            padding: 22.864px;
            position: relative;
            z-index: 0
        }

        .callout.callout-service .callout-heading {
            color: #5d862e;
            font-weight: 700;
            text-transform: uppercase
        }

        .callout.callout-service header {
            text-align: left;
            width: 80%;
            z-index: 5
        }

        .callout.callout-service img {
            max-width: initial;
            right: 0;
            top: 0;
            z-index: -1
        }

        .callout.callout-nav-contact {
            display: none
        }

        @media (min-width:48rem) {
            .callout.callout-nav-contact {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .callout.callout-nav-contact .callout-header {
            font-size: 1em;
            display: none
        }

        @media (min-width:60rem) {
            .callout.callout-nav-contact .callout-header {
                display: inherit;
                font-size: 1.286em
            }
        }

        .callout.callout-nav-contact [class*=icon],
        .callout.callout-nav-contact [class^=icon] {
            font-size: 1.714em
        }

        .contain-button {
            width: 350px
        }

        .content-card--content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .banner .content-card .gray img,
        .banner .content-card .green img,
        .content-card .anchor-link img,
        .content-card .banner .gray img,
        .content-card .banner .green img,
        .content-card .content-card img,
        .content-card .wysiwyg img {
            display: none !important
        }

        .content-card-list--title {
            text-align: center
        }

        .content-card-list--cards {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (min-width:64rem) {
            .content-card-list--cards {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .content-card-list--plans-2up .content-card {
            width: 100%;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%
        }

        .content-card-list--plans-2up .content-card--wrapper {
            padding: 15px;
            height: 100%
        }

        .content-card-list--plans-2up .content-card--content {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            border-bottom: 1px solid #e0e0e0;
            height: 100%;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .content-card-list--plans-2up .content-card--image {
            display: block;
            -ms-flex-item-align: center;
            align-self: center;
            padding-bottom: 7.5px
        }

        .content-card-list--plans-2up .content-card--wysiwyg {
            text-align: center
        }

        .content-card-list--plans-2up .content-card:nth-last-child(-n+1) .content-card--content {
            border-bottom: 0
        }

        @media (min-width:40rem) {
            .content-card-list--plans-2up .content-card--content {
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                margin-bottom: 30px
            }

            .content-card-list--plans-2up .content-card--image {
                padding-bottom: 15px
            }
        }

        @media (min-width:60rem) {
            .content-card-list--plans-2up .content-card--content {
                padding-left: 50px;
                padding-right: 50px;
                padding-bottom: 50px;
                margin-bottom: 50px
            }

            .content-card-list--plans-2up .content-card--image {
                padding-bottom: 25px
            }
        }

        @media (min-width:64rem) {
            .content-card-list--plans-2up .content-card {
                width: 50%;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%
            }

            .content-card-list--plans-2up .content-card--wrapper {
                padding: 40px
            }

            .content-card-list--plans-2up .content-card:nth-last-child(-n+2) .content-card--content {
                border-bottom: 0
            }
        }

        .individual-partial {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .individual-partial__item {
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            width: 50%;
            height: auto;
            padding-top: 2rem;
            padding-bottom: 3rem;
            font-family: "Open Sans", sans-serif
        }

        .individual-partial__item__title {
            padding-bottom: 3rem
        }

        .individual-partial__item__detail {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .individual-partial__item__img {
            padding-right: 4.3125rem;
            height: 100%
        }

        .individual-partial__item__content {
            color: #7f8084;
            font-size: 1.3125rem;
            font-family: "Open Sans", sans-serif
        }

        .individual-partial .individual_1 {
            border-top: 2px solid #f0f0f0;
            border-bottom: 2px solid #f0f0f0;
            border-right: 2px solid #f0f0f0;
            padding-right: 3rem
        }

        .individual-partial .individual_2 {
            border-top: 2px solid #f0f0f0;
            border-bottom: 2px solid #f0f0f0;
            padding-left: 3rem
        }

        .individual-partial .individual_3 {
            border-right: 2px solid #f0f0f0;
            border-bottom: 2px solid #f0f0f0;
            padding-right: 3rem
        }

        .largeEmployer-partial {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .largeEmployer-partial__item {
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            width: 50%;
            height: auto;
            padding-top: 2rem;
            padding-bottom: 3rem;
            font-family: "Open Sans", sans-serif
        }

        .largeEmployer-partial__item__title {
            padding-bottom: 3rem
        }

        .largeEmployer-partial__item__detail {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .largeEmployer-partial__item__img {
            padding-right: 4.3125rem;
            height: 100%
        }

        .largeEmployer-partial__item__content {
            color: #7f8084;
            font-size: 1.3125rem;
            font-family: "Open Sans", sans-serif
        }

        .largeEmployer-partial .largeEmployers_1 {
            border-top: 2px solid #f0f0f0;
            border-right: 2px solid #f0f0f0;
            padding-right: 3rem
        }

        .largeEmployer-partial .largeEmployers_2 {
            border-top: 2px solid #f0f0f0;
            padding-left: 3rem
        }

        .largeEmployer-partial .largeEmployers_3 {
            border-top: 2px solid #f0f0f0;
            border-right: 2px solid #f0f0f0;
            padding-right: 3rem
        }

        .largeEmployer-partial .largeEmployers_4 {
            border-top: 2px solid #f0f0f0;
            padding-left: 3rem
        }

        .largeEmployer-partial .largeEmployers_5 {
            border-top: 2px solid #f0f0f0;
            border-right: 2px solid #f0f0f0;
            border-bottom: 2px solid #f0f0f0;
            padding-right: 3rem
        }

        .largeEmployer-partial .largeEmployers_6 {
            border-top: 2px solid #f0f0f0;
            border-bottom: 2px solid #f0f0f0;
            padding-left: 3rem
        }

        @media (min-width:60rem) {
            .plan-individual__hero {
                position: absolute;
                top: 200px;
                left: 0;
                right: 0
            }
        }

        @media (min-width:60rem) {
            .plan-individual__banner {
                position: absolute;
                top: 800px;
                left: 0;
                right: 0
            }
        }

        .article-list--title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #5d862e;
            margin-bottom: 22.864px
        }

        @media (min-width:40rem) {

            .author-article-list .article-card--image-wrapper,
            .latest-article .article-card--image-wrapper,
            .recent-article-list .article-card--image-wrapper {
                max-width: 100%
            }
        }

        @media (min-width:60rem) {

            .author-article-list .article-card--image-wrapper,
            .latest-article .article-card--image-wrapper,
            .recent-article-list .article-card--image-wrapper {
                max-width: 25%
            }
        }

        @media (min-width:40rem) {

            .author-article-list .article-card--image img,
            .latest-article .article-card--image img,
            .recent-article-list .article-card--image img {
                max-width: 170px
            }
        }

        @media (min-width:60rem) {

            .author-article-list .article-card--image img,
            .latest-article .article-card--image img,
            .recent-article-list .article-card--image img {
                max-width: 100%
            }
        }

        .article-card {
            display: block;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-bottom: 11.432px;
            margin-bottom: 22.864px;
            border-bottom: 1px solid #bdbdbd
        }

        @media (min-width:48rem) {
            .article-card {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding-left: 20px;
                padding-right: 20px
            }
        }

        .article-card--image-wrapper {
            max-width: 100%;
            height: 100%
        }

        @media (min-width:40rem) {
            .article-card--image-wrapper {
                height: auto;
                padding-right: 20px
            }
        }

        .article-card--figure {
            max-width: 100%;
            border: 2px solid #e0e0e0;
            overflow: hidden;
            padding-bottom: 0;
            display: inline-block
        }

        @media (min-width:40rem) {
            .article-card--figure {
                margin-bottom: 20px
            }
        }

        .article-card--image img {
            display: block;
            -webkit-transition: -webkit-transform .4s ease-in-out;
            transition: -webkit-transform .4s ease-in-out;
            -o-transition: transform .4s ease-in-out;
            transition: transform .4s ease-in-out;
            transition: transform .4s ease-in-out, -webkit-transform .4s ease-in-out
        }

        .article-card--image img:hover {
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05)
        }

        @media (min-width:40rem) {
            .article-card--image img {
                max-width: 170px
            }
        }

        .article-card--content {
            max-width: 100%
        }

        .article-card--category {
            display: none
        }

        .article-card--title h3 {
            font-size: 1.25em;
            padding-top: 11.432px;
            margin-bottom: -4px;
            text-transform: capitalize
        }

        @media (min-width:48rem) {
            .article-card--title h3 {
                padding-top: 0;
                margin-bottom: 11.432px;
                font-size: 1.286em
            }
        }

        .article-card--intro {
            display: none;
            padding-top: 11.432px;
            margin-bottom: 0
        }

        @media (min-width:48rem) {
            .article-card--intro {
                padding-top: 0;
                display: inherit
            }
        }

        .article-card--author {
            display: none
        }

        .article-card--date {
            display: none
        }

        .article-card--readmore {
            display: none
        }

        @media (min-width:48rem) {
            .article-card--readmore {
                display: inline-block
            }
        }

        .article__spinner {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0
        }

        .loader--article {
            font-size: 3rem
        }

        .article__ending {
            opacity: 0;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease;
            font-style: italic;
            text-align: center
        }

        .article__ending.shown {
            opacity: 1
        }

        .article__scroll-top {
            display: none;
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            padding: .5rem 1rem;
            border-radius: .5rem;
            cursor: pointer;
            color: #29abe2;
            background-color: #fff;
            -webkit-box-shadow: 0 0 8px rgba(51, 51, 51, .5);
            box-shadow: 0 0 8px rgba(51, 51, 51, .5);
            border: 2px solid #bdbdbd;
            z-index: 100;
            font-size: 2rem
        }

        .recent-articles--title {
            font-size: 1.5rem;
            color: #5d862e;
            font-weight: 600;
            margin-bottom: 1.618rem
        }

        @media (min-width:48rem) {
            .recent-articles--title {
                font-size: 2rem
            }
        }

        .recent-articles .latest-article {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 22.864px
        }

        @media (min-width:48rem) {
            .recent-articles .latest-article {
                padding: 20px
            }
        }

        .recent-articles .latest-article--title {
            color: #5d862e;
            margin: 10px 0 20px 0;
            font-size: 21px
        }

        @media (min-width:48rem) {
            .recent-articles .latest-article--title {
                margin: 0;
                margin-bottom: 10px
            }
        }

        .recent-articles .latest-article .article-card {
            border-bottom: none;
            margin-bottom: 0
        }

        .recent-articles .latest-article .article-card--intro {
            display: inherit
        }

        @media (min-width:48rem) {
            .recent-articles .latest-article .article-card {
                padding: 0
            }
        }

        .author-landing .author-card {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 45.728px
        }

        .author-landing .author-card--title {
            font-size: 1.5rem;
            color: #5d862e;
            font-weight: 600;
            margin-bottom: 1.618rem
        }

        @media (min-width:48rem) {
            .author-landing .author-card--title {
                font-size: 2rem
            }
        }

        .author-landing .author-card--inside {
            background-color: #f0f0f0;
            border-top: none;
            border-bottom: none;
            display: inline-block;
            padding: 22.864px
        }

        .author-landing .author-card--figure {
            width: 100%;
            height: auto
        }

        @media (min-width:48rem) {
            .author-landing .author-card--figure {
                float: left;
                max-width: 28%;
                margin-right: 20px
            }
        }

        @media (min-width:60rem) {
            .author-landing .author-card--figure {
                max-width: 23%
            }
        }

        .author-landing .author-card--name {
            font-weight: 600;
            color: #5d862e;
            margin-bottom: 0;
            font-size: 1.125rem
        }

        @media (min-width:48rem) {
            .author-landing .author-card--name {
                font-size: 1.3125rem
            }
        }

        .author-landing .author-card--city {
            text-transform: uppercase
        }

        .author-landing .author-article-list--name h5 {
            font-weight: 600;
            color: #5d862e;
            margin-bottom: 2rem;
            font-size: 1.125rem
        }

        @media (min-width:48rem) {
            .author-landing .author-article-list--name h5 {
                font-size: 1.3125rem
            }
        }

        .topics-landing--title {
            font-size: 1.5rem;
            color: #5d862e;
            font-weight: 600;
            margin-bottom: 1.618rem
        }

        @media (min-width:48rem) {
            .topics-landing--title {
                font-size: 2rem
            }
        }

        .topics-landing .featured-articles {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 45.728px
        }

        @media (min-width:48rem) {
            .topics-landing .featured-articles {
                padding: 20px
            }
        }

        .topics-landing .featured-articles--title {
            color: #5d862e;
            margin: 10px 0 20px 0
        }

        @media (min-width:48rem) {
            .topics-landing .featured-articles--title {
                margin: 0;
                margin-bottom: 10px
            }
        }

        .topics-landing .featured-articles--main {
            padding-bottom: 22.864px
        }

        .topics-landing .featured-articles--main .article-card {
            border-bottom: none;
            margin-bottom: 0
        }

        .topics-landing .featured-articles--main .article-card--intro {
            display: inherit
        }

        .topics-landing .featured-articles--main .article-card--readmore {
            display: inherit
        }

        @media (min-width:48rem) {
            .topics-landing .featured-articles--main .article-card {
                padding: 0
            }
        }

        .topics-landing .featured-articles--list .article-card {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .topics-landing .featured-articles--list .article-card--image-wrapper {
            -ms-flex-preferred-size: 33.33%;
            flex-basis: 33.33%
        }

        .topics-landing .featured-articles--list .article-card--content {
            -ms-flex-preferred-size: 66.66%;
            flex-basis: 66.66%
        }

        .topics-landing .featured-articles--list .article-card--title h3 {
            padding-top: 0;
            margin-top: -3px;
            font-size: 1rem
        }

        .topics-landing .featured-articles--list .article-card--figure {
            margin-right: 10px
        }

        .article-carousel__wrapper {
            position: relative
        }

        .article-carousel__loader {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #fff;
            z-index: 101
        }

        .loader--article__carousel {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            background-color: #fff;
            border-top-width: .5em;
            border-right-width: .5em;
            border-left-width: .5em;
            border-bottom-width: .5em;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease
        }

        .loader--article__carousel,
        .loader--article__carousel:after {
            height: 1.5rem;
            width: 1.5rem
        }

        .article-carousel {
            margin: 1.5rem 0 1rem 0;
            white-space: nowrap;
            overflow: hidden;
            padding: 0 2rem
        }

        .article-carousel[data-loaded] {
            opacity: 1
        }

        .article-carousel .carousel-cell {
            display: inline-block;
            text-align: center;
            width: auto;
            height: auto;
            border: 1px solid #29abe2;
            border-radius: 3px;
            margin: 0 5px;
            padding: 0 5px;
            white-space: nowrap
        }

        .article-carousel .flickity-prev-next-button {
            background: 0 0
        }

        .article-carousel .flickity-prev-next-button:hover {
            background: 0 0
        }

        .article-carousel .flickity-prev-next-button .arrow {
            fill: #29abe2
        }

        .article-carousel .flickity-prev-next-button.no-svg {
            color: #29abe2
        }

        .article-carousel .flickity-prev-next-button.previous {
            left: -5px
        }

        .article-carousel .flickity-prev-next-button.next {
            right: -5px
        }

        .topics-landing .featured-articles--title {
            font-size: 21px
        }

        .topics-landing .featured-articles--main .article-card--image-wrapper {
            width: 100%;
            height: 100%
        }

        .topics-landing .featured-articles--main .article-card--content {
            width: 100%
        }

        .topics-landing .featured-articles--main .article-card--title h3 {
            margin-bottom: 11.432px
        }

        @media (min-width:48rem) {
            .topics-landing .featured-articles {
                display: block;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch
            }

            .topics-landing .featured-articles--title {
                width: 100%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 100%;
                flex: 1 0 100%
            }

            .topics-landing .featured-articles--main {
                width: calc(60% - 25px);
                -ms-flex-preferred-size: calc(60% - 25px);
                flex-basis: calc(60% - 25px);
                margin-right: 20px
            }

            .topics-landing .featured-articles--main .article-card {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .topics-landing .featured-articles--main .article-card--image-wrapper {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }

            .topics-landing .featured-articles--main .article-card--content {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }

            .topics-landing .featured-articles--main .article-card--image img {
                max-width: 100%
            }

            .topics-landing .featured-articles--list {
                width: 40%;
                border-left: 2px solid #e0e0e0;
                padding-left: 20px
            }

            .topics-landing .featured-articles--list .article-card {
                padding-left: 0;
                padding-right: 0;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .topics-landing .featured-articles--list .article-card--title h3 {
                font-size: 21px
            }

            .topics-landing .featured-articles--list .article-card:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0
            }

            .topics-landing .featured-articles--list .article-card--image-wrapper {
                width: 50%;
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto
            }

            .topics-landing .featured-articles--list .article-card--content {
                width: 50%;
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto
            }

            .topics-landing .featured-articles--list .article-card--figure {
                margin-bottom: 0
            }

            .topics-landing .featured-articles--list .article-card--image img {
                max-width: 100%
            }

            .topics-landing .featured-articles--list .article-card--intro {
                display: none
            }

            .topics-landing .featured-articles--list .article-card--readmore {
                display: none
            }
        }

        .article-homepage h1,
        .article-homepage h2 {
            color: #5d862e;
            font-weight: 600
        }

        .article-homepage section {
            padding-top: 0
        }

        .article-homepage .topics-list {
            display: none
        }

        @media (min-width:48rem) {
            .article-homepage .topics-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .article-homepage--featured {
            margin-bottom: 57.16px;
            padding-bottom: 34.296px;
            border-bottom: 2px solid #e0e0e0
        }

        @media (min-width:64rem) {
            .article-homepage .featured--articles {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start
            }
        }

        @media (min-width:64rem) {
            .article-homepage .featured--main {
                width: 66.66%
            }
        }

        .article-homepage .featured--main .article-card {
            border-bottom: none
        }

        @media (min-width:40rem) {
            .article-homepage .featured--main .article-card {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-left: 0;
                padding-right: 0
            }
        }

        @media (min-width:48rem) {
            .article-homepage .featured--main .article-card {
                display: block;
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 0
            }
        }

        @media (min-width:60rem) {
            .article-homepage .featured--main .article-card {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        @media (min-width:64rem) {
            .article-homepage .featured--main .article-card {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 30px
            }
        }

        .article-homepage .featured--main .article-card--image-wrapper {
            height: 100%
        }

        @media (min-width:60rem) {
            .article-homepage .featured--main .article-card--image-wrapper {
                width: 50%
            }
        }

        @media (min-width:64rem) {
            .article-homepage .featured--main .article-card--image-wrapper {
                width: auto
            }
        }

        @media (min-width:64rem) {
            .article-homepage .featured--main .article-card--figure {
                margin-right: 0
            }
        }

        .article-homepage .featured--main .article-card--image img {
            max-width: 100%
        }

        .article-homepage .featured--main .article-card--category {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .article-homepage .featured--main .article-card--title {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .article-homepage .featured--main .article-card--intro {
            display: inherit;
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .article-homepage .featured--main .article-card--readmore {
            display: inherit;
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .article-homepage .featured--list {
            padding: 10px 10px;
            background-color: #f0f0f0
        }

        @media (min-width:48rem) {
            .article-homepage .featured--list {
                padding: 20px 20px
            }
        }

        @media (min-width:64rem) {
            .article-homepage .featured--list {
                width: 33.33%
            }
        }

        .article-homepage .featured--list .article-card {
            padding-top: 11.432px;
            margin-bottom: 11.432px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding-left: 0;
            padding-right: 0
        }

        @media (min-width:48rem) {
            .article-homepage .featured--list .article-card {
                padding-top: 0;
                padding-left: 20px;
                padding-right: 20px
            }
        }

        .article-homepage .featured--list .article-card:last-child {
            border-bottom: none
        }

        @media (min-width:48rem) {
            .article-homepage .featured--list .article-card:last-child {
                margin-bottom: 0;
                padding-bottom: 0
            }
        }

        .article-homepage .featured--list .article-card--category {
            margin: 0;
            text-transform: uppercase;
            font-weight: 600;
            color: #7f8084;
            font-size: .85rem;
            display: inherit
        }

        .article-homepage .featured--list .article-card--title h3 {
            padding-top: 0;
            font-size: 1rem
        }

        .article-homepage .featured--list .article-card--image-wrapper {
            display: none
        }

        .article-homepage .featured--list .article-card--intro {
            display: none
        }

        .article-homepage .featured--list .article-card--readmore {
            display: none
        }

        .article-homepage--title {
            font-size: 72px;
            margin-bottom: 0;
            line-height: 72px
        }

        .article-homepage .featured--main .article-card--title h3 {
            font-size: 36px;
            color: #333
        }

        .article-homepage .featured--main .article-card--intro {
            font-size: 21px;
            font-weight: 200
        }

        .article-homepage .featured--main .article-card--readmore {
            font-size: 18px
        }

        .article-homepage .featured--main .article-card--category {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 600;
            font-size: 24px;
            color: #29abe2
        }

        .article-homepage--category {
            margin-bottom: 22.864px
        }

        @media (min-width:48rem) {
            .article-homepage--category .category--title {
                margin-bottom: 1.5rem
            }
        }

        .article-homepage--category .category--articles {
            height: 100%
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--articles {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .article-homepage--category .category--article-main {
            border-bottom: 1px solid #bdbdbd;
            padding-bottom: 22.864px;
            margin-bottom: 22.864px
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-main {
                width: calc(60% - 25px);
                -ms-flex-preferred-size: calc(60% - 25px);
                flex-basis: calc(60% - 25px);
                margin-right: 20px;
                border-right: 2px solid #e0e0e0;
                border-bottom: none;
                padding-bottom: initial
            }
        }

        .article-homepage--category .category--article-main .article-card {
            padding-left: 0;
            padding-right: 0
        }

        .article-homepage--category .category--article-main .article-card:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-main .article-card--image-wrapper {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-main .article-card--content {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        .article-homepage--category .category--article-main .article-card--figure {
            margin-bottom: 0
        }

        .article-homepage--category .category--article-main .article-card--image img {
            max-width: 100%
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-list {
                width: 40%;
                -ms-flex-preferred-size: 40%;
                flex-basis: 40%
            }
        }

        .article-homepage--category .category--article-list .article-card {
            padding-left: 0;
            padding-right: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .article-homepage--category .category--article-list .article-card:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-list .article-card--image-wrapper {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        @media (min-width:60rem) {
            .article-homepage--category .category--article-list .article-card--content {
                width: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        .article-homepage--category .category--article-list .article-card--figure {
            margin-bottom: 0
        }

        .article-homepage--category .category--article-list .article-card--image img {
            max-width: 100%
        }

        .article-homepage--category .category--article-list .article-card--intro {
            display: none
        }

        .article-homepage--category .category--article-list .article-card--readmore {
            display: none
        }

        .article-homepage--category .category--more-link {
            margin-top: 22.864px;
            -ms-flex-item-align: end;
            align-self: flex-end
        }

        @media (min-width:60rem) {
            .article-homepage--category.reverse .category--articles {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse
            }
        }

        .article-homepage--category.reverse .category--article-main {
            border-right: none
        }

        @media (min-width:60rem) {
            .article-homepage--category.reverse .category--article-main {
                border-left: 2px solid #e0e0e0
            }
        }

        @media (min-width:60rem) {
            .article-homepage--category.reverse .category--article-main .article-card {
                margin-left: 20px;
                margin-right: 0
            }
        }

        @media (min-width:60rem) {
            .article-homepage--category.reverse .category--article-list .article-card {
                margin-left: 0;
                margin-right: 20px
            }
        }

        .article-homepage--category.reverse .category--more-link {
            margin-top: 22.864px;
            -ms-flex-item-align: start;
            align-self: flex-start
        }

        @media (min-width:60rem) {
            .article-page .inner {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:60rem) {
            .article-page .article--main {
                width: 75%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 75%;
                flex: 1 0 75%
            }
        }

        @media (min-width:64rem) {
            .article-page .article--main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start
            }
        }

        .article-page .article--title {
            margin-bottom: 30px
        }

        @media (min-width:60rem) {
            .article-page .article--title {
                width: 100%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 100%;
                flex: 1 0 100%;
                padding-right: 50px
            }
        }

        .article-page .article--title .title {
            font-size: 1.5rem;
            color: #5d862e;
            font-weight: 600
        }

        @media (min-width:48rem) {
            .article-page .article--title .title {
                font-size: 2.25rem
            }
        }

        .article-page .article--title h2 {
            font-size: 1.5rem
        }

        .article-page .article--left-sidebar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        @media (min-width:60rem) {
            .article-page .article--left-sidebar {
                width: calc(20% - 15px);
                -webkit-box-flex: 1;
                -ms-flex: 1 1 calc(20% - 15px);
                flex: 1 1 calc(20% - 15px);
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-right: 15px
            }
        }

        @media (min-width:60rem) {
            .article-page .article--content {
                width: calc(80% - 15px);
                -webkit-box-flex: 1;
                -ms-flex: 1 1 calc(80% - 15px);
                flex: 1 1 calc(80% - 15px);
                padding-right: 50px
            }
        }

        @media (min-width:60rem) {
            .article-page .article--right-sidebar {
                width: 25%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 25%;
                flex: 1 0 25%
            }
        }

        .article-page .article--author .author-card {
            margin-bottom: 30px
        }

        .article-page .article--author .author-card--title {
            font-size: 1.3125rem;
            font-weight: 600;
            color: #5d862e;
            padding-bottom: .625rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #e0e0e0
        }

        .article-page .article--author .author-card--inside {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .article-page .article--author .author-card--figure {
            width: 45%;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 45%;
            flex: 1 0 45%
        }

        @media (min-width:48rem) {
            .article-page .article--author .author-card--figure {
                width: 25%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 25%;
                flex: 1 0 25%
            }
        }

        @media (min-width:60rem) {
            .article-page .article--author .author-card--figure {
                width: 45%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 45%;
                flex: 1 0 45%
            }
        }

        .article-page .article--author .author-card--image {
            padding-bottom: 15px
        }

        .article-page .article--author .author-card--about {
            width: 55%;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 55%;
            flex: 1 0 55%
        }

        @media (min-width:48rem) {
            .article-page .article--author .author-card--about {
                width: 30%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 30%;
                flex: 1 0 30%
            }
        }

        @media (min-width:48rem) {
            .article-page .article--author .author-card--about {
                width: 55%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 55%;
                flex: 1 0 55%
            }
        }

        .article-page .article--author .author-card--city,
        .article-page .article--author .author-card--name {
            padding-left: 15px
        }

        .article-page .article--more-articles,
        .article-page .article--other-articles {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 30px
        }

        .article-page .article--more-articles .title,
        .article-page .article--other-articles .title {
            color: #5d862e;
            font-size: 1.3125rem;
            font-weight: 600
        }

        .article-page .article--more-articles .article-list,
        .article-page .article--other-articles .article-list {
            list-style: none;
            padding: 0;
            margin: 0
        }

        @media (min-width:48rem) {

            .article-page .article--more-articles .article-list,
            .article-page .article--other-articles .article-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:60rem) {

            .article-page .article--more-articles .article-list,
            .article-page .article--other-articles .article-list {
                display: block
            }
        }

        @media (min-width:48rem) {

            .article-page .article--more-articles .article-item,
            .article-page .article--other-articles .article-item {
                width: 50%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 50%;
                flex: 1 0 50%
            }
        }

        @media (min-width:60rem) {

            .article-page .article--more-articles .article-item,
            .article-page .article--other-articles .article-item {
                width: 100%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 100%;
                flex: 1 0 100%
            }
        }

        .article-page .article--more-articles .article-card,
        .article-page .article--other-articles .article-card {
            border-bottom: none
        }

        .article-page .article--more-articles .article-card--image-wrapper,
        .article-page .article--other-articles .article-card--image-wrapper {
            height: 100%
        }

        @media (min-width:48rem) {

            .article-page .article--more-articles .article-card,
            .article-page .article--other-articles .article-card {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .article-page .article--more-articles .article-card:nth-child(odd),
            .article-page .article--other-articles .article-card:nth-child(odd) {
                padding-left: 0
            }

            .article-page .article--more-articles .article-card:nth-child(even),
            .article-page .article--other-articles .article-card:nth-child(even) {
                padding-right: 0
            }

            .article-page .article--more-articles .article-card--figure,
            .article-page .article--other-articles .article-card--figure {
                margin-right: 0
            }

            .article-page .article--more-articles .article-card--figure img,
            .article-page .article--other-articles .article-card--figure img {
                max-width: 100%
            }
        }

        @media (min-width:60rem) {

            .article-page .article--more-articles .article-card,
            .article-page .article--other-articles .article-card {
                padding-left: 0;
                padding-right: 0
            }
        }

        .article-page .article--more-articles .article-card--intro,
        .article-page .article--more-articles .article-card--readmore,
        .article-page .article--other-articles .article-card--intro,
        .article-page .article--other-articles .article-card--readmore {
            display: inherit
        }

        .article-page .article--other-articles {
            background-color: transparent
        }

        @media (min-width:60rem) {
            .article-page .article--other-articles {
                width: 100%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 100%;
                flex: 1 0 100%;
                padding-top: 15px;
                border-top: 2px solid #e0e0e0
            }
        }

        @media (min-width:60rem) {
            .article-page .article--other-articles .article-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        @media (min-width:60rem) {
            .article-page .article--other-articles .article-item {
                width: calc(25% - 45px);
                -webkit-box-flex: 1;
                -ms-flex: 1 0 calc(25% - 45px);
                flex: 1 0 calc(25% - 45px);
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                margin-right: 15px
            }

            .article-page .article--other-articles .article-item:last-child {
                margin-right: 0
            }
        }

        .article-page .article--other-articles .article-card--image-wrapper {
            height: 100%
        }

        .article-page .article--meta .title {
            font-weight: 600
        }

        .article-page .article--meta>div {
            padding-right: 15px
        }

        @media (min-width:64rem) {
            .article-page .article--meta .meta--date {
                margin-bottom: 15px
            }
        }

        .article-page .article--meta .meta--category {
            display: none
        }

        @media (min-width:64rem) {
            .article-page .article--meta .meta--category {
                display: inherit;
                margin-bottom: 15px
            }
        }

        .article-page .article--meta .meta--tags {
            display: none
        }

        @media (min-width:64rem) {
            .article-page .article--meta .meta--tags {
                display: inherit;
                margin-bottom: 15px
            }
        }

        .article-page .article--social-share {
            margin-bottom: 30px
        }

        .article-page .article--social-share .title {
            font-weight: 600
        }

        @media (min-width:48rem) {
            .article-page .article--social-share .title {
                display: none
            }
        }

        @media (min-width:64rem) {
            .article-page .article--social-share .title {
                display: inherit
            }
        }

        .article-page .article--social-share .social-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        @media (min-width:64rem) {
            .article-page .article--social-share .social-list {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        .article-page .article--social-share .social-item {
            margin-right: 10px
        }

        .article-page .article--social-share .social-item:last-child {
            margin-right: 0
        }

        @media (min-width:64rem) {
            .article-page .article--social-share .social-item {
                margin-bottom: 5px
            }

            .article-page .article--social-share .social-item figure {
                display: inline-block;
                margin-right: 5px
            }
        }

        @media (min-width:48rem) {
            .article-page .article--social-share .social-icon {
                font-size: 1.5rem
            }
        }

        @media (min-width:64rem) {
            .article-page .article--social-share .social-icon {
                font-size: 1rem
            }
        }

        .article-page .article--social-share .social-name {
            display: none
        }

        @media (min-width:64rem) {
            .article-page .article--social-share .social-name {
                display: inline-block;
                color: #333
            }
        }

        .article-page .article--social-share .icon-facebook {
            color: #3b5998
        }

        .article-page .article--social-share .icon-twitter {
            color: #49c9f2
        }

        .article-page .article--social-share .icon-pinterest {
            color: #cd2129
        }

        .article-page .article--social-share .icon-google-plus {
            color: #dc4e41;
            font-size: .8em
        }

        .article-page .article--social-share .icon-linkedin {
            color: #007bb6
        }

        .article-page .article--social-share .icon-email,
        .article-page .article--social-share .icon-print {
            color: #7f8084
        }

        .article-post .share-buttons {
            padding-top: 22.864px
        }

        @media (min-width:0rem) {
            .article-post .share-buttons {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                font-size: 2em
            }
        }

        @media (min-width:60rem) {
            .article-post .share-buttons {
                display: block;
                font-size: inherit
            }
        }

        .article-post .share-buttons .share-item-inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 22.864px;
            padding-left: 5px
        }

        .article-post .share-buttons h5 {
            color: #7f8084;
            font-weight: 400
        }

        .article-post .share-buttons figure {
            padding-right: 11.432px
        }

        .article-post .share-buttons .icon-facebook {
            color: #3b5998
        }

        .article-post .share-buttons .icon-twitter {
            color: #49c9f2
        }

        .article-post .share-buttons .icon-pinterest {
            color: #cd2129
        }

        .article-post .share-buttons .icon-google-plus {
            color: #dc4e41;
            margin-right: -5px;
            font-size: .8em
        }

        .article-post .share-buttons .icon-linkedin {
            color: #007bb6
        }

        .article-post .share-buttons .icon-email,
        .article-post .share-buttons .icon-print {
            color: #7f8084
        }

        @media (min-width:0rem) {

            .article-post .share-buttons .share-title,
            .article-post .share-buttons h5 {
                display: none
            }
        }

        @media (min-width:60rem) {

            .article-post .share-buttons .share-title,
            .article-post .share-buttons h5 {
                display: inherit
            }
        }

        .hero .share-buttons {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            font-size: 1.5em;
            position: absolute;
            bottom: 0;
            height: 100px
        }

        @media (min-width:40rem) {
            .hero .share-buttons {
                padding: 11.432px 45.728px
            }
        }

        .hero .share-buttons .share-title,
        .hero .share-buttons header {
            display: none
        }

        @media (min-width:40rem) {
            .hero .share-buttons .share-item-inner {
                padding-right: 10px
            }
        }

        .hero .share-buttons [class^=icon] {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            width: 50px;
            height: 50px
        }

        .hero .share-buttons .icon-facebook {
            color: #3b5998
        }

        .hero .share-buttons .icon-twitter {
            color: #49c9f2
        }

        .hero .share-buttons .icon-pinterest {
            color: #cd2129
        }

        .hero .share-buttons .icon-google-plus {
            color: #dc4e41
        }

        .hero .share-buttons .icon-linkedin {
            color: #007bb6
        }

        .hero .share-buttons figure {
            display: inline-block;
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 25px;
            margin: 5px
        }

        .hero--social-share-left .share-buttons {
            left: 0
        }

        .hero--social-share-right .share-buttons {
            right: 0
        }

        .provider-profile .provider-header {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 100%
        }

        .provider-profile .provider-header * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        @media (min-width:48rem) {
            .provider-profile .provider-header {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .provider-profile .provider-header ul.no-bullets {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .provider-profile .provider-header__image-wrapper {
            position: relative;
            padding-bottom: 22.864px
        }

        @media (min-width:48rem) {
            .provider-profile .provider-header__image-wrapper {
                margin-right: 3rem;
                padding-bottom: 0;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 245px;
                flex: 0 0 245px
            }
        }

        .provider-profile .provider-header__image {
            opacity: 0;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease
        }

        .provider-profile .provider-header__image[data-loaded] {
            opacity: 1
        }

        .provider-profile .provider-header-pcp--available {
            text-align: center;
            margin-top: -10px;
            padding: 20px 5px 10px 5px;
            border-bottom: 2px #e0e0e0 solid;
            border-right: 2px #e0e0e0 solid;
            border-left: 2px #e0e0e0 solid;
            border-radius: 5px
        }

        .provider-profile .provider-header-pcp--not {
            text-align: center;
            margin-top: -10px;
            padding: 20px 5px 10px 5px;
            border-bottom: 2px #e0e0e0 solid;
            border-right: 2px #e0e0e0 solid;
            border-left: 2px #e0e0e0 solid;
            border-radius: 5px;
            color: #bdbdbd
        }

        .provider-profile .provider-header #no-image {
            display: none
        }

        .provider-profile .provider-header .provider-header-information {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .provider-profile .provider-header .provider-personal-info {
            margin-bottom: 22.864px;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1
        }

        .provider-profile .provider-header .provider-personal-info .name {
            color: #5d862e;
            font-weight: 700;
            font-size: 2.25rem;
            line-height: 1;
            margin-bottom: 0;
            margin-top: -.1667em
        }

        .provider-profile .provider-header .provider-personal-info .primary-specialty {
            font-size: 1.5rem;
            line-height: 1
        }

        .provider-profile .provider-header .provider-personal-info .specialties {
            font-size: 1.125rem;
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .gender {
            color: #bdbdbd;
            margin-bottom: 11.432px;
            line-height: 1rem
        }

        .provider-profile .provider-header .provider-personal-info .icon-add-new-user {
            color: #bdbdbd
        }

        .provider-profile .provider-header .provider-personal-info .icon-add-new-user.active {
            color: #5d862e
        }

        .provider-profile .provider-header .provider-personal-info .icon-add-new-user:before {
            line-height: 22px;
            vertical-align: middle
        }

        .provider-profile .provider-header .provider-personal-info .accepting-new-patients {
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .not-accepting-new-patients {
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .not-accepting-new-patients .icon-add-new-user {
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .myhealth {
            overflow-y: hidden;
            margin-bottom: .25rem;
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .icon-MyHealth2 {
            color: #5d862e
        }

        .provider-profile .provider-header .provider-personal-info .icon-MyHealth2:before {
            font-size: 60px;
            line-height: 18px;
            vertical-align: bottom;
            margin-left: 1px
        }

        .provider-profile .provider-header .provider-personal-info .practices-ob {
            color: #7f8084
        }

        .provider-profile .provider-header .provider-personal-info .icon-pregnant {
            color: #5d862e
        }

        .provider-profile .provider-header .provider-services {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .provider-profile .provider-header .provider-services .provider-item {
            -webkit-box-flex: 100%;
            -ms-flex: 100%;
            flex: 100%;
            margin-bottom: 22.864px
        }

        @media (min-width:64rem) {
            .provider-profile .provider-header .provider-services .provider-item {
                -webkit-box-flex: 33%;
                -ms-flex: 33%;
                flex: 33%;
                max-width: 335px;
                padding-right: 16px
            }

            .provider-profile .provider-header .provider-services .provider-item h2 {
                font-size: 1.3125rem;
                color: #5d862e;
                font-weight: 600;
                margin-bottom: 3px
            }
        }

        .provider-profile .provider-header .patient-experience__comments {
            display: none
        }

        .provider-profile .provider-header .patient-experience__data {
            position: relative
        }

        .provider-profile .provider-header .patient-experience__loader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff
        }

        .provider-profile .provider-header .patient-experience .loader--patient-experience {
            font-size: 18px
        }

        .provider-profile .provider-header .patient-experience-rating .stars-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: inline-block
        }

        .provider-profile .provider-header .patient-experience-rating .stars-list li {
            display: inline-block;
            vertical-align: middle
        }

        .provider-profile .provider-header .patient-experience-rating [class^=icon-]:before {
            font-size: 1.125rem
        }

        .provider-profile .provider-header .icon-RatingStars1 {
            color: #bdbdbd
        }

        .provider-profile .provider-header .icon-RatingStars1.gold {
            color: #d9bf26
        }

        .provider-profile .provider-header .patient-experience-count {
            font-size: 1.3125rem;
            color: #7f8084
        }

        .provider-profile .provider-header .provider-pcp--available {
            width: 220px;
            border: 2px #e0e0e0 solid;
            border-radius: 5px;
            padding: 11.432px 22.864px;
            text-align: center
        }

        .provider-profile .provider-header .provider-pcp--not {
            width: 220px;
            border: 2px #e0e0e0 solid;
            border-radius: 5px;
            padding: 11.432px 22.864px;
            text-align: center;
            color: #bdbdbd
        }

        .provider-profile .provider-header .no-pcp-button {
            display: none
        }

        .provider-profile .provider-header #no-image {
            display: none
        }

        .loader--provider__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border-top-width: 1em;
            border-right-width: 1em;
            border-left-width: 1em;
            border-bottom-width: 1em;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease
        }

        .loader--provider__image,
        .loader--provider__image:after {
            height: 80px;
            width: 80px
        }

        .provider-profile .provider-information {
            margin-top: 3rem
        }

        .provider-profile .provider-information .tooltip {
            white-space: pre-wrap
        }

        .provider-profile .provider-information .card-header {
            display: block;
            margin-bottom: -2px;
            padding: 11.432px 0;
            border: 2px solid #bdbdbd;
            border-left: none;
            border-right: none;
            background-color: #f0f0f0;
            color: #7f8084
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .card-header {
                display: none
            }
        }

        .provider-profile .provider-information .card-header [class^=icon-]:before {
            font-size: 1.5rem;
            vertical-align: middle;
            padding-right: 10px
        }

        .provider-profile .provider-information .card-header.disabled {
            color: #e0e0e0
        }

        .provider-profile .provider-information .card-header.disabled [class^=icon-] {
            color: #e0e0e0
        }

        .provider-profile .provider-information .collapse {
            display: none
        }

        .provider-profile .provider-information .collapse.in {
            display: block
        }

        .provider-profile .provider-information .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-timing-function: ease;
            -o-transition-timing-function: ease;
            transition-timing-function: ease;
            -webkit-transition-duration: .35s;
            -o-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-property: height;
            -o-transition-property: height;
            transition-property: height
        }

        .provider-profile .provider-information .provider-tabs {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            padding-bottom: 7px;
            border-bottom: 2px solid #e0e0e0
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .provider-tabs {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .provider-profile .provider-information .provider-tabs .provider-info-tab:last-child {
            border-right: none
        }

        .provider-profile .provider-information .provider-tabs.magic-line .provider-info-tab:nth-last-child(2) {
            border-right: none
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .fade {
                opacity: 0;
                -webkit-transition: opacity .15s linear;
                -o-transition: opacity .15s linear;
                transition: opacity .15s linear
            }

            .provider-profile .provider-information .fade.in {
                opacity: 1
            }
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .tab-content>.tab-pane {
                display: none
            }

            .provider-profile .provider-information .tab-content>.active {
                display: block
            }
        }

        .provider-profile .provider-information .provider-info-tab {
            margin-bottom: -2px;
            border-right: 1px solid #e0e0e0;
            -webkit-transition: color .4s linear;
            -o-transition: color .4s linear;
            transition: color .4s linear
        }

        .provider-profile .provider-information .provider-info-tab a {
            font-weight: 600;
            display: inline-block;
            padding: 3px 10px;
            color: #7f8084;
            text-transform: uppercase
        }

        .provider-profile .provider-information .provider-info-tab [class^=icon-]:before {
            font-size: 1.5rem;
            vertical-align: middle;
            padding-right: 5px
        }

        .provider-profile .provider-information .provider-info-tab:hover [class^=icon-]:before,
        .provider-profile .provider-information .provider-info-tab:hover a {
            color: #bdbdbd
        }

        .provider-profile .provider-information .provider-info-tab.active [class^=icon-]:before,
        .provider-profile .provider-information .provider-info-tab.active a {
            color: #5d862e
        }

        .provider-profile .provider-information .provider-info-tab.disabled [class^=icon-]:before,
        .provider-profile .provider-information .provider-info-tab.disabled a {
            cursor: not-allowed;
            color: #e0e0e0
        }

        .provider-profile .provider-information .provider-info-tab.disabled:hover {
            border-bottom-color: transparent
        }

        .provider-profile .provider-information .magic-line-select {
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 7px;
            background-color: #5d862e;
            -webkit-transition: background-color .4s linear;
            -o-transition: background-color .4s linear;
            transition: background-color .4s linear
        }

        .provider-profile .provider-information .magic-line-select.hovering {
            background-color: #5d862e
        }

        .provider-profile .provider-information .locations-list {
            list-style: none;
            padding: 45.728px 0;
            margin: 0;
            padding-bottom: 0
        }

        @media (min-width:40rem) {
            .provider-profile .provider-information .locations-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .locations-list {
                margin-left: -1rem;
                margin-right: -1rem
            }
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .location-item {
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        @media (min-width:60rem) {
            .provider-profile .provider-information .location-item {
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }
        }

        @media (min-width:64rem) {
            .provider-profile .provider-information .location-item {
                -ms-flex-preferred-size: 33.33%;
                flex-basis: 33.33%
            }
        }

        @media (min-width:87.5rem) {
            .provider-profile .provider-information .location-item {
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%
            }
        }

        .provider-profile .provider-information .location-item-wrapper {
            margin-bottom: 22.864px
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .location-item-wrapper {
                padding-left: 1rem;
                padding-right: 1rem
            }
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .location-item.collapse {
                display: block
            }
        }

        .provider-profile .provider-information .expand-hidden-locations {
            text-align: right;
            padding: 20px 10px;
            margin-bottom: 10px
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .expand-hidden-locations {
                display: none
            }
        }

        .provider-profile .provider-information .location-item-network {
            display: none;
            width: auto;
            height: 3.25rem;
            text-align: center;
            font-size: 1.3125rem;
            font-weight: 600;
            color: #fff;
            padding-top: .6rem
        }

        .provider-profile .provider-information .location-item-network--in-network {
            display: block;
            background-color: #5d862e
        }

        .provider-profile .provider-information .location-item-network--out-of-network {
            display: block;
            background-color: #7f8084
        }

        .provider-profile .provider-information .google-location-map {
            border: 2px solid #e0e0e0;
            background-color: #f0f0f0;
            color: #7f8084;
            margin-bottom: 22.864px
        }

        .provider-profile .provider-information .google-location-map [class^=icon-] {
            color: #29abe2
        }

        .provider-profile .provider-information .google-location-map figcaption {
            padding: 11.432px
        }

        .provider-profile .provider-information .map-links {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .provider-profile .provider-information .map-links li {
            margin-bottom: 11.432px
        }

        .provider-profile .provider-information .map-links li:last-child {
            margin-bottom: 0
        }

        @media (min-width:100rem) {
            .provider-profile .provider-information .map-links li {
                display: inline-block;
                margin-bottom: 0
            }

            .provider-profile .provider-information .map-links li:last-child {
                margin-left: 10px
            }
        }

        .provider-profile .provider-information .map-links a {
            font-size: 1rem;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            font-style: normal;
            color: #7f8084
        }

        .provider-profile .provider-information .map-links a [class^=icon-] {
            line-height: 1.125rem
        }

        .provider-profile .provider-information .map-links a [class^=icon-]:before {
            vertical-align: bottom;
            color: #29abe2;
            font-size: 1.25rem
        }

        .provider-profile .provider-information .location-info-list {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .provider-profile .provider-information .location-info-item {
            padding-left: 2.125rem;
            margin-bottom: 11.432px
        }

        .provider-profile .provider-information .location-info-item:last-child,
        .provider-profile .provider-information .location-info-item:nth-last-child(2) {
            margin-bottom: 0
        }

        .provider-profile .provider-information .location-name {
            font-size: 1.5rem;
            color: #5d862e;
            font-weight: 600;
            margin-left: -2.125rem;
            margin-bottom: -2.858px
        }

        .provider-profile .provider-information .accept-new-patient {
            color: #7f8084
        }

        .provider-profile .provider-information .icon-add-new-user {
            color: #5d862e;
            font-size: 1rem;
            margin-left: -34px
        }

        .provider-profile .provider-information .no-accept {
            display: none
        }

        .provider-profile .provider-information .location-address,
        .provider-profile .provider-information .location-phone {
            font-size: 1.3125rem;
            font-weight: 300;
            margin-left: -2.125rem
        }

        .provider-profile .provider-information .location-address [class^=icon-],
        .provider-profile .provider-information .location-phone [class^=icon-] {
            font-size: 1.5rem;
            color: #333;
            vertical-align: middle;
            width: 28px
        }

        .provider-profile .provider-information .location-address {
            line-height: 1
        }

        .provider-profile .provider-information .location-collapsable-toggle {
            color: #29abe2
        }

        .provider-profile .provider-information .location-collapsable-toggle [class^=icon-] {
            color: #bdbdbd;
            font-size: .75rem;
            line-height: 1;
            vertical-align: middle;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease
        }

        .provider-profile .provider-information .location-collapsable-toggle.shown [class^=icon-] {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .provider-profile .provider-information .location-collapsable-content [class$="-list"] {
            list-style: none;
            margin: 0
        }

        .provider-profile .provider-information .location-collapsable-content .highlight,
        .provider-profile .provider-information .location-collapsable-content [class$="-item"] {
            text-indent: -5.716px;
            color: #7f8084
        }

        .provider-profile .provider-information .location-collapsable-content ul:only-child .highlight,
        .provider-profile .provider-information .location-collapsable-content ul:only-child [class$="-item"] {
            text-indent: 0
        }

        .provider-profile .provider-information .location-collapsable-content .highlight {
            color: #5d862e;
            background-color: transparent
        }

        .provider-profile .provider-information .location-collapsable-content .plans__accept-new-patient {
            font-size: 1rem;
            line-height: 1;
            padding-bottom: 5px
        }

        .provider-profile .provider-information .office-hours-list {
            display: table
        }

        .provider-profile .provider-information .office-hour-item {
            display: table-row
        }

        .provider-profile .provider-information .office-hour-item .day,
        .provider-profile .provider-information .office-hour-item .hours {
            display: table-cell
        }

        .provider-profile .provider-information .office-hour-item .day {
            padding-right: 10px;
            font-weight: 600
        }

        .provider-profile .provider-information .accepted-plan-item {
            display: table;
            width: auto;
            padding: 0 8px;
            margin: 2px 0;
            border-radius: 5px
        }

        .provider-profile .provider-information .accepted-plan-item--in-network {
            padding: 5px 8px;
            background-color: #5d862e;
            color: #fff
        }

        .provider-profile .provider-information .location__info-open {
            margin-left: -2.125rem
        }

        .provider-profile .provider-information .ratings-container {
            padding: 45.728px 0
        }

        .provider-profile .provider-information .patient-ratings-overall__header,
        .provider-profile .provider-information .patient-reviews__header {
            font-size: 1.3125rem;
            font-weight: 600;
            color: #5d862e
        }

        .provider-profile .provider-information .overall-rating {
            background-color: #f0f0f0;
            color: #333;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-bottom: 22.864px
        }

        .provider-profile .provider-information .overall-rating .score {
            font-weight: 700
        }

        .provider-profile .provider-information .overall-rating>div {
            font-size: 1rem;
            padding: 15px;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%
        }

        .provider-profile .provider-information .overall-rating>div:first-child {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            padding-bottom: 0
        }

        @media (min-width:40rem) {
            .provider-profile .provider-information .overall-rating>div {
                padding: 20px;
                -ms-flex-preferred-size: 33%;
                flex-basis: 33%;
                font-size: 1rem
            }

            .provider-profile .provider-information .overall-rating>div:first-child {
                -ms-flex-preferred-size: 33%;
                flex-basis: 33%;
                padding-bottom: 20px
            }
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .overall-rating>div {
                font-size: 1.125rem;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-flex: 0;
                -ms-flex: 0 1 auto;
                flex: 0 1 auto
            }

            .provider-profile .provider-information .overall-rating>div:first-child {
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-flex: 0;
                -ms-flex: 0 1 auto;
                flex: 0 1 auto;
                padding-bottom: 20px
            }
        }

        .provider-profile .provider-information .stars-list {
            list-style: none;
            padding: 0;
            margin: 0;
            white-space: nowrap
        }

        .provider-profile .provider-information .star-item {
            display: inline-block;
            vertical-align: middle
        }

        .provider-profile .provider-information .star-item svg {
            max-width: 1.125rem
        }

        .provider-profile .provider-information .icon-RatingStars1 {
            color: #e0e0e0
        }

        .provider-profile .provider-information .icon-RatingStars1.gold {
            color: #d9bf26
        }

        .provider-profile .provider-information .overall-rating-list {
            list-style: none;
            margin: 0;
            padding: 0
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .overall-rating-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        .provider-profile .provider-information .overall-rating-item {
            padding-bottom: 34.296px
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-category {
            margin-bottom: .5rem
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-score {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-score>div {
            padding-right: 10px
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-score>div:last-child {
            padding-right: 0
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-score .star-item svg {
            max-width: 1rem
        }

        .provider-profile .provider-information .overall-rating-item .rating-item-count {
            color: #7f8084;
            vertical-align: middle;
            white-space: nowrap;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .provider-profile .provider-information .overall-rating-item .score {
            font-weight: 700
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .overall-rating-item {
                font-size: 1rem;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%
            }

            .provider-profile .provider-information .overall-rating-item .overall-rating-wrapper {
                padding-right: 20px
            }

            .provider-profile .provider-information .overall-rating-item:nth-child(2n) .overall-rating-wrapper {
                padding-right: 0
            }
        }

        @media (min-width:80rem) {
            .provider-profile .provider-information .overall-rating-item {
                -ms-flex-preferred-size: 33.33%;
                flex-basis: 33.33%
            }

            .provider-profile .provider-information .overall-rating-item:nth-child(2n) .overall-rating-wrapper {
                padding-right: 20px
            }
        }

        .provider-profile .provider-information .ratings-overall-description {
            margin-top: 22.864px;
            padding-bottom: 22.864px;
            color: #7f8084
        }

        @media (min-width:64rem) {
            .provider-profile .provider-information .ratings-overall-description {
                width: 66%
            }
        }

        .provider-profile .provider-information .patient-reviews {
            margin-top: 22.864px
        }

        .provider-profile .provider-information .patient-review-list {
            list-style: none;
            padding: 0;
            margin: 0
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .patient-review-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 10px;
                padding-right: 10px
            }
        }

        .provider-profile .provider-information .patient-review-item {
            margin-bottom: 22.864px
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .patient-review-item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                width: 100%;
                margin-bottom: 34.296px;
                padding-bottom: 34.296px;
                border-bottom: 1px solid #e0e0e0
            }

            .provider-profile .provider-information .patient-review-item>div {
                -ms-flex-item-align: start;
                align-self: flex-start
            }

            .provider-profile .provider-information .patient-review-item:last-child {
                margin-bottom: 11.432px
            }
        }

        .provider-profile .provider-information .patient-review-item .star-item svg {
            max-width: .875rem
        }

        .provider-profile .provider-information .patient-review-score-date {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .provider-profile .provider-information .patient-review-score-date .stars-list {
            list-style: none
        }

        .provider-profile .provider-information .patient-review-score-date .patient-review-date,
        .provider-profile .provider-information .patient-review-score-date [class^=icon-]:before {
            font-size: .85rem
        }

        .provider-profile .provider-information .patient-review-score-date .patient-review-date {
            color: #5d862e;
            font-weight: 600
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .patient-review-score-date {
                min-width: 205px;
                -ms-flex-preferred-size: 205px;
                flex-basis: 205px;
                margin-right: 20px;
                margin-top: 3px;
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
                text-align: right
            }

            .provider-profile .provider-information .patient-review-score-date .patient-review-date,
            .provider-profile .provider-information .patient-review-score-date .star-list {
                align-left: flex-start
            }
        }

        .provider-profile .provider-information .patient-review-summary {
            margin-bottom: 0
        }

        .provider-profile .provider-information .patient-review-summary p {
            margin-bottom: 0
        }

        @media (min-width:48rem) {
            .provider-profile .provider-information .patient-review-summary {
                padding-right: 40px
            }
        }

        .provider-profile .provider-information .patient-review-pagination {
            list-style: none;
            padding: 0 10px;
            margin: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .provider-profile .provider-information .patient-review-pagination .active .page {
            color: #333
        }

        .provider-profile .provider-information .patient-review-pagination .page {
            padding: 5px
        }

        .provider-profile .provider-information .prof-summary-list {
            list-style: none;
            margin: 0;
            padding: 45.728px 0
        }

        @media (min-width:60rem) {
            .provider-profile .provider-information .prof-summary-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        .provider-profile .provider-information .prof-summary-item {
            padding-bottom: 30px
        }

        .provider-profile .provider-information .prof-summary-item.training,
        .provider-profile .provider-information .prof-summary-item.wrapper {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 50%;
            list-style: none
        }

        .provider-profile .provider-information .prof-summary-item .boardcert,
        .provider-profile .provider-information .prof-summary-item .degree,
        .provider-profile .provider-information .prof-summary-item .membership {
            padding-bottom: 30px
        }

        .provider-profile .provider-information .prof-summary-item-header {
            color: #5d862e;
            font-size: 1.3125rem;
            font-weight: 600;
            margin-bottom: 0
        }

        .provider-profile .provider-information .prof-summary-item-subheader {
            color: #333;
            font-size: 1.125rem;
            margin-bottom: 0
        }

        .provider-profile .provider-information .profposition {
            width: 100%
        }

        .provider-profile .provider-information .awards {
            width: 100%
        }

        .provider-profile .provider-information .trainings-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .provider-profile .provider-information .training-item {
            margin-bottom: 11.432px
        }

        .provider-profile .provider-information .prof-summary-item-body,
        .provider-profile .provider-information .prof-summary-membership-item {
            color: #7f8084;
            margin-bottom: 0
        }

        .provider-profile .provider-information .prof-summary-membership-list {
            list-style: square;
            margin-left: .5rem;
            margin-bottom: 0;
            padding-left: .75rem;
            text-indent: -.25rem
        }

        .new-patient-modal__title {
            padding-bottom: 1rem;
            color: #5d862e
        }

        .new-patient-modal__detail {
            text-align: left;
            color: #333
        }

        .new-patient-modal__detail__network {
            padding: .5rem 0
        }

        .new-patient-modal__detail__location {
            font-size: 1rem
        }

        .new-patient-modal__notice {
            font-size: .75rem;
            color: #bdbdbd;
            text-align: left;
            padding-top: 1rem
        }

        .anchor-link .article__ending,
        .anchor-link .card--network .card__subtitle,
        .anchor-link .card--network .card__title,
        .anchor-link .card__subtitle,
        .anchor-link .card__title,
        .anchor-link .cta-item__subtitle,
        .anchor-link .h1,
        .anchor-link .h2,
        .anchor-link .h3,
        .anchor-link .h4,
        .anchor-link .h5,
        .anchor-link .h6,
        .anchor-link .hero-overlay .open-enrollment__ctas a,
        .anchor-link .hero-overlay .open-enrollment__list li,
        .anchor-link .hero-overlay__title,
        .anchor-link .hero_subtitle,
        .anchor-link .individual-partial__item__title,
        .anchor-link .largeEmployer-partial__item__title,
        .anchor-link .main-nav__link,
        .anchor-link .main-nav__phone,
        .anchor-link .new-patient-modal__detail,
        .anchor-link .new-patient-modal__title,
        .anchor-link .provider__secondary-specialties,
        .anchor-link .provider__specialty,
        .anchor-link .refine-search-filter,
        .anchor-link .search-faq__question,
        .anchor-link .searchresult__ending,
        .anchor-link h1,
        .anchor-link h2,
        .anchor-link h3,
        .anchor-link h4,
        .anchor-link h5,
        .anchor-link h6,
        .banner .gray .article__ending,
        .banner .gray .card--network .card__subtitle,
        .banner .gray .card--network .card__title,
        .banner .gray .card__subtitle,
        .banner .gray .card__title,
        .banner .gray .cta-item__subtitle,
        .banner .gray .h1,
        .banner .gray .h2,
        .banner .gray .h3,
        .banner .gray .h4,
        .banner .gray .h5,
        .banner .gray .h6,
        .banner .gray .hero-overlay .open-enrollment__ctas a,
        .banner .gray .hero-overlay .open-enrollment__list li,
        .banner .gray .hero-overlay__title,
        .banner .gray .hero_subtitle,
        .banner .gray .individual-partial__item__title,
        .banner .gray .largeEmployer-partial__item__title,
        .banner .gray .main-nav__link,
        .banner .gray .main-nav__phone,
        .banner .gray .new-patient-modal__detail,
        .banner .gray .new-patient-modal__title,
        .banner .gray .provider__secondary-specialties,
        .banner .gray .provider__specialty,
        .banner .gray .refine-search-filter,
        .banner .gray .search-faq__question,
        .banner .gray .searchresult__ending,
        .banner .gray h1,
        .banner .gray h2,
        .banner .gray h3,
        .banner .gray h4,
        .banner .gray h5,
        .banner .gray h6,
        .banner .green .article__ending,
        .banner .green .card--network .card__subtitle,
        .banner .green .card--network .card__title,
        .banner .green .card__subtitle,
        .banner .green .card__title,
        .banner .green .cta-item__subtitle,
        .banner .green .h1,
        .banner .green .h2,
        .banner .green .h3,
        .banner .green .h4,
        .banner .green .h5,
        .banner .green .h6,
        .banner .green .hero-overlay .open-enrollment__ctas a,
        .banner .green .hero-overlay .open-enrollment__list li,
        .banner .green .hero-overlay__title,
        .banner .green .hero_subtitle,
        .banner .green .individual-partial__item__title,
        .banner .green .largeEmployer-partial__item__title,
        .banner .green .main-nav__link,
        .banner .green .main-nav__phone,
        .banner .green .new-patient-modal__detail,
        .banner .green .new-patient-modal__title,
        .banner .green .provider__secondary-specialties,
        .banner .green .provider__specialty,
        .banner .green .refine-search-filter,
        .banner .green .search-faq__question,
        .banner .green .searchresult__ending,
        .banner .green h1,
        .banner .green h2,
        .banner .green h3,
        .banner .green h4,
        .banner .green h5,
        .banner .green h6,
        .card--network .anchor-link .card__subtitle,
        .card--network .anchor-link .card__title,
        .card--network .banner .gray .card__subtitle,
        .card--network .banner .gray .card__title,
        .card--network .banner .green .card__subtitle,
        .card--network .banner .green .card__title,
        .card--network .content-card .card__subtitle,
        .card--network .content-card .card__title,
        .card--network .wysiwyg .card__subtitle,
        .card--network .wysiwyg .card__title,
        .content-card .article__ending,
        .content-card .card--network .card__subtitle,
        .content-card .card--network .card__title,
        .content-card .card__subtitle,
        .content-card .card__title,
        .content-card .cta-item__subtitle,
        .content-card .h1,
        .content-card .h2,
        .content-card .h3,
        .content-card .h4,
        .content-card .h5,
        .content-card .h6,
        .content-card .hero-overlay .open-enrollment__ctas a,
        .content-card .hero-overlay .open-enrollment__list li,
        .content-card .hero-overlay__title,
        .content-card .hero_subtitle,
        .content-card .individual-partial__item__title,
        .content-card .largeEmployer-partial__item__title,
        .content-card .main-nav__link,
        .content-card .main-nav__phone,
        .content-card .new-patient-modal__detail,
        .content-card .new-patient-modal__title,
        .content-card .provider__secondary-specialties,
        .content-card .provider__specialty,
        .content-card .refine-search-filter,
        .content-card .search-faq__question,
        .content-card .searchresult__ending,
        .content-card h1,
        .content-card h2,
        .content-card h3,
        .content-card h4,
        .content-card h5,
        .content-card h6,
        .hero-overlay .open-enrollment__ctas .anchor-link a,
        .hero-overlay .open-enrollment__ctas .banner .gray a,
        .hero-overlay .open-enrollment__ctas .banner .green a,
        .hero-overlay .open-enrollment__ctas .content-card a,
        .hero-overlay .open-enrollment__ctas .wysiwyg a,
        .hero-overlay .open-enrollment__list .anchor-link li,
        .hero-overlay .open-enrollment__list .banner .gray li,
        .hero-overlay .open-enrollment__list .banner .green li,
        .hero-overlay .open-enrollment__list .content-card li,
        .hero-overlay .open-enrollment__list .wysiwyg li,
        .wysiwyg .article__ending,
        .wysiwyg .card--network .card__subtitle,
        .wysiwyg .card--network .card__title,
        .wysiwyg .card__subtitle,
        .wysiwyg .card__title,
        .wysiwyg .cta-item__subtitle,
        .wysiwyg .h1,
        .wysiwyg .h2,
        .wysiwyg .h3,
        .wysiwyg .h4,
        .wysiwyg .h5,
        .wysiwyg .h6,
        .wysiwyg .hero-overlay .open-enrollment__ctas a,
        .wysiwyg .hero-overlay .open-enrollment__list li,
        .wysiwyg .hero-overlay__title,
        .wysiwyg .hero_subtitle,
        .wysiwyg .individual-partial__item__title,
        .wysiwyg .largeEmployer-partial__item__title,
        .wysiwyg .main-nav__link,
        .wysiwyg .main-nav__phone,
        .wysiwyg .new-patient-modal__detail,
        .wysiwyg .new-patient-modal__title,
        .wysiwyg .provider__secondary-specialties,
        .wysiwyg .provider__specialty,
        .wysiwyg .refine-search-filter,
        .wysiwyg .search-faq__question,
        .wysiwyg .searchresult__ending,
        .wysiwyg h1,
        .wysiwyg h2,
        .wysiwyg h3,
        .wysiwyg h4,
        .wysiwyg h5,
        .wysiwyg h6 {
            margin-bottom: .5rem;
            font-family: "Open Sans", sans-serif;
            font-weight: 400
        }

        .anchor-link .card__subtitle,
        .anchor-link .card__title,
        .anchor-link .h1,
        .anchor-link .hero-overlay__title,
        .anchor-link .search-faq__question,
        .anchor-link h1,
        .banner .gray .card__subtitle,
        .banner .gray .card__title,
        .banner .gray .h1,
        .banner .gray .hero-overlay__title,
        .banner .gray .search-faq__question,
        .banner .gray h1,
        .banner .green .card__subtitle,
        .banner .green .card__title,
        .banner .green .h1,
        .banner .green .hero-overlay__title,
        .banner .green .search-faq__question,
        .banner .green h1,
        .content-card .card__subtitle,
        .content-card .card__title,
        .content-card .h1,
        .content-card .hero-overlay__title,
        .content-card .search-faq__question,
        .content-card h1,
        .wysiwyg .card__subtitle,
        .wysiwyg .card__title,
        .wysiwyg .h1,
        .wysiwyg .hero-overlay__title,
        .wysiwyg .search-faq__question,
        .wysiwyg h1 {
            color: #5d862e
        }

        .anchor-link .article__ending,
        .anchor-link .card--network .card__subtitle,
        .anchor-link .card--network .card__title,
        .anchor-link .cta-item__subtitle,
        .anchor-link .h2,
        .anchor-link .h3,
        .anchor-link .h4,
        .anchor-link .h5,
        .anchor-link .h6,
        .anchor-link .hero-overlay .open-enrollment__ctas a,
        .anchor-link .hero-overlay .open-enrollment__list li,
        .anchor-link .hero_subtitle,
        .anchor-link .individual-partial__item__title,
        .anchor-link .largeEmployer-partial__item__title,
        .anchor-link .main-nav__link,
        .anchor-link .main-nav__phone,
        .anchor-link .new-patient-modal__detail,
        .anchor-link .new-patient-modal__title,
        .anchor-link .provider__secondary-specialties,
        .anchor-link .provider__specialty,
        .anchor-link .refine-search-filter,
        .anchor-link .searchresult__ending,
        .anchor-link h2,
        .anchor-link h3,
        .anchor-link h4,
        .anchor-link h5,
        .anchor-link h6,
        .banner .gray .article__ending,
        .banner .gray .card--network .card__subtitle,
        .banner .gray .card--network .card__title,
        .banner .gray .cta-item__subtitle,
        .banner .gray .h2,
        .banner .gray .h3,
        .banner .gray .h4,
        .banner .gray .h5,
        .banner .gray .h6,
        .banner .gray .hero-overlay .open-enrollment__ctas a,
        .banner .gray .hero-overlay .open-enrollment__list li,
        .banner .gray .hero_subtitle,
        .banner .gray .individual-partial__item__title,
        .banner .gray .largeEmployer-partial__item__title,
        .banner .gray .main-nav__link,
        .banner .gray .main-nav__phone,
        .banner .gray .new-patient-modal__detail,
        .banner .gray .new-patient-modal__title,
        .banner .gray .provider__secondary-specialties,
        .banner .gray .provider__specialty,
        .banner .gray .refine-search-filter,
        .banner .gray .searchresult__ending,
        .banner .gray h2,
        .banner .gray h3,
        .banner .gray h4,
        .banner .gray h5,
        .banner .gray h6,
        .banner .green .article__ending,
        .banner .green .card--network .card__subtitle,
        .banner .green .card--network .card__title,
        .banner .green .cta-item__subtitle,
        .banner .green .h2,
        .banner .green .h3,
        .banner .green .h4,
        .banner .green .h5,
        .banner .green .h6,
        .banner .green .hero-overlay .open-enrollment__ctas a,
        .banner .green .hero-overlay .open-enrollment__list li,
        .banner .green .hero_subtitle,
        .banner .green .individual-partial__item__title,
        .banner .green .largeEmployer-partial__item__title,
        .banner .green .main-nav__link,
        .banner .green .main-nav__phone,
        .banner .green .new-patient-modal__detail,
        .banner .green .new-patient-modal__title,
        .banner .green .provider__secondary-specialties,
        .banner .green .provider__specialty,
        .banner .green .refine-search-filter,
        .banner .green .searchresult__ending,
        .banner .green h2,
        .banner .green h3,
        .banner .green h4,
        .banner .green h5,
        .banner .green h6,
        .card--network .anchor-link .card__subtitle,
        .card--network .anchor-link .card__title,
        .card--network .banner .gray .card__subtitle,
        .card--network .banner .gray .card__title,
        .card--network .banner .green .card__subtitle,
        .card--network .banner .green .card__title,
        .card--network .content-card .card__subtitle,
        .card--network .content-card .card__title,
        .card--network .wysiwyg .card__subtitle,
        .card--network .wysiwyg .card__title,
        .content-card .article__ending,
        .content-card .card--network .card__subtitle,
        .content-card .card--network .card__title,
        .content-card .cta-item__subtitle,
        .content-card .h2,
        .content-card .h3,
        .content-card .h4,
        .content-card .h5,
        .content-card .h6,
        .content-card .hero-overlay .open-enrollment__ctas a,
        .content-card .hero-overlay .open-enrollment__list li,
        .content-card .hero_subtitle,
        .content-card .individual-partial__item__title,
        .content-card .largeEmployer-partial__item__title,
        .content-card .main-nav__link,
        .content-card .main-nav__phone,
        .content-card .new-patient-modal__detail,
        .content-card .new-patient-modal__title,
        .content-card .provider__secondary-specialties,
        .content-card .provider__specialty,
        .content-card .refine-search-filter,
        .content-card .searchresult__ending,
        .content-card h2,
        .content-card h3,
        .content-card h4,
        .content-card h5,
        .content-card h6,
        .hero-overlay .open-enrollment__ctas .anchor-link a,
        .hero-overlay .open-enrollment__ctas .banner .gray a,
        .hero-overlay .open-enrollment__ctas .banner .green a,
        .hero-overlay .open-enrollment__ctas .content-card a,
        .hero-overlay .open-enrollment__ctas .wysiwyg a,
        .hero-overlay .open-enrollment__list .anchor-link li,
        .hero-overlay .open-enrollment__list .banner .gray li,
        .hero-overlay .open-enrollment__list .banner .green li,
        .hero-overlay .open-enrollment__list .content-card li,
        .hero-overlay .open-enrollment__list .wysiwyg li,
        .wysiwyg .article__ending,
        .wysiwyg .card--network .card__subtitle,
        .wysiwyg .card--network .card__title,
        .wysiwyg .cta-item__subtitle,
        .wysiwyg .h2,
        .wysiwyg .h3,
        .wysiwyg .h4,
        .wysiwyg .h5,
        .wysiwyg .h6,
        .wysiwyg .hero-overlay .open-enrollment__ctas a,
        .wysiwyg .hero-overlay .open-enrollment__list li,
        .wysiwyg .hero_subtitle,
        .wysiwyg .individual-partial__item__title,
        .wysiwyg .largeEmployer-partial__item__title,
        .wysiwyg .main-nav__link,
        .wysiwyg .main-nav__phone,
        .wysiwyg .new-patient-modal__detail,
        .wysiwyg .new-patient-modal__title,
        .wysiwyg .provider__secondary-specialties,
        .wysiwyg .provider__specialty,
        .wysiwyg .refine-search-filter,
        .wysiwyg .searchresult__ending,
        .wysiwyg h2,
        .wysiwyg h3,
        .wysiwyg h4,
        .wysiwyg h5,
        .wysiwyg h6 {
            color: #333
        }

        .anchor-link .li,
        .anchor-link .p,
        .anchor-link .ul,
        .anchor-link li,
        .anchor-link p,
        .anchor-link ul,
        .banner .gray .li,
        .banner .gray .p,
        .banner .gray .ul,
        .banner .gray li,
        .banner .gray p,
        .banner .gray ul,
        .banner .green .li,
        .banner .green .p,
        .banner .green .ul,
        .banner .green li,
        .banner .green p,
        .banner .green ul,
        .content-card .li,
        .content-card .p,
        .content-card .ul,
        .content-card li,
        .content-card p,
        .content-card ul,
        .wysiwyg .li,
        .wysiwyg .p,
        .wysiwyg .ul,
        .wysiwyg li,
        .wysiwyg p,
        .wysiwyg ul {
            color: #7f8084;
            font-family: "Open Sans", sans-serif;
            font-weight: 300
        }

        .anchor-link .link,
        .anchor-link a,
        .banner .gray .link,
        .banner .gray a,
        .banner .green .link,
        .banner .green a,
        .content-card .link,
        .content-card a,
        .wysiwyg .link,
        .wysiwyg a {
            -webkit-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            color: #29abe2;
            text-decoration: none;
            background: 0 0;
            cursor: pointer
        }

        .anchor-link .link:hover,
        .anchor-link a:hover,
        .banner .gray .link:hover,
        .banner .gray a:hover,
        .banner .green .link:hover,
        .banner .green a:hover,
        .content-card .link:hover,
        .content-card a:hover,
        .wysiwyg .link:hover,
        .wysiwyg a:hover {
            color: #56bde8
        }

        .anchor-link .link:active,
        .anchor-link a:active,
        .banner .gray .link:active,
        .banner .gray a:active,
        .banner .green .link:active,
        .banner .green a:active,
        .content-card .link:active,
        .content-card a:active,
        .wysiwyg .link:active,
        .wysiwyg a:active {
            color: #146c91
        }

        .anchor-link .link .disabled,
        .anchor-link .link.is-disabled,
        .anchor-link a .disabled,
        .anchor-link a.is-disabled,
        .banner .gray .link .disabled,
        .banner .gray .link.is-disabled,
        .banner .gray a .disabled,
        .banner .gray a.is-disabled,
        .banner .green .link .disabled,
        .banner .green .link.is-disabled,
        .banner .green a .disabled,
        .banner .green a.is-disabled,
        .content-card .link .disabled,
        .content-card .link.is-disabled,
        .content-card a .disabled,
        .content-card a.is-disabled,
        .wysiwyg .link .disabled,
        .wysiwyg .link.is-disabled,
        .wysiwyg a .disabled,
        .wysiwyg a.is-disabled {
            cursor: default;
            pointer-events: none
        }

        .anchor-link .article__ending:last-child,
        .anchor-link .card--network .card__subtitle:last-child,
        .anchor-link .card--network .card__title:last-child,
        .anchor-link .card__subtitle:last-child,
        .anchor-link .card__title:last-child,
        .anchor-link .cta-item__subtitle:last-child,
        .anchor-link .h1:last-child,
        .anchor-link .h2:last-child,
        .anchor-link .h3:last-child,
        .anchor-link .h4:last-child,
        .anchor-link .h5:last-child,
        .anchor-link .h6:last-child,
        .anchor-link .hero-overlay .open-enrollment__ctas a:last-child,
        .anchor-link .hero-overlay .open-enrollment__list li:last-child,
        .anchor-link .hero-overlay__title:last-child,
        .anchor-link .hero_subtitle:last-child,
        .anchor-link .individual-partial__item__title:last-child,
        .anchor-link .largeEmployer-partial__item__title:last-child,
        .anchor-link .link:last-child,
        .anchor-link .main-nav__link:last-child,
        .anchor-link .main-nav__phone:last-child,
        .anchor-link .new-patient-modal__detail:last-child,
        .anchor-link .new-patient-modal__title:last-child,
        .anchor-link .p:last-child,
        .anchor-link .provider__secondary-specialties:last-child,
        .anchor-link .provider__specialty:last-child,
        .anchor-link .refine-search-filter:last-child,
        .anchor-link .search-faq__question:last-child,
        .anchor-link .searchresult__ending:last-child,
        .anchor-link a:last-child,
        .anchor-link h1:last-child,
        .anchor-link h2:last-child,
        .anchor-link h3:last-child,
        .anchor-link h4:last-child,
        .anchor-link h5:last-child,
        .anchor-link h6:last-child,
        .anchor-link p:last-child,
        .banner .gray .article__ending:last-child,
        .banner .gray .card--network .card__subtitle:last-child,
        .banner .gray .card--network .card__title:last-child,
        .banner .gray .card__subtitle:last-child,
        .banner .gray .card__title:last-child,
        .banner .gray .cta-item__subtitle:last-child,
        .banner .gray .h1:last-child,
        .banner .gray .h2:last-child,
        .banner .gray .h3:last-child,
        .banner .gray .h4:last-child,
        .banner .gray .h5:last-child,
        .banner .gray .h6:last-child,
        .banner .gray .hero-overlay .open-enrollment__ctas a:last-child,
        .banner .gray .hero-overlay .open-enrollment__list li:last-child,
        .banner .gray .hero-overlay__title:last-child,
        .banner .gray .hero_subtitle:last-child,
        .banner .gray .individual-partial__item__title:last-child,
        .banner .gray .largeEmployer-partial__item__title:last-child,
        .banner .gray .link:last-child,
        .banner .gray .main-nav__link:last-child,
        .banner .gray .main-nav__phone:last-child,
        .banner .gray .new-patient-modal__detail:last-child,
        .banner .gray .new-patient-modal__title:last-child,
        .banner .gray .p:last-child,
        .banner .gray .provider__secondary-specialties:last-child,
        .banner .gray .provider__specialty:last-child,
        .banner .gray .refine-search-filter:last-child,
        .banner .gray .search-faq__question:last-child,
        .banner .gray .searchresult__ending:last-child,
        .banner .gray a:last-child,
        .banner .gray h1:last-child,
        .banner .gray h2:last-child,
        .banner .gray h3:last-child,
        .banner .gray h4:last-child,
        .banner .gray h5:last-child,
        .banner .gray h6:last-child,
        .banner .gray p:last-child,
        .banner .green .article__ending:last-child,
        .banner .green .card--network .card__subtitle:last-child,
        .banner .green .card--network .card__title:last-child,
        .banner .green .card__subtitle:last-child,
        .banner .green .card__title:last-child,
        .banner .green .cta-item__subtitle:last-child,
        .banner .green .h1:last-child,
        .banner .green .h2:last-child,
        .banner .green .h3:last-child,
        .banner .green .h4:last-child,
        .banner .green .h5:last-child,
        .banner .green .h6:last-child,
        .banner .green .hero-overlay .open-enrollment__ctas a:last-child,
        .banner .green .hero-overlay .open-enrollment__list li:last-child,
        .banner .green .hero-overlay__title:last-child,
        .banner .green .hero_subtitle:last-child,
        .banner .green .individual-partial__item__title:last-child,
        .banner .green .largeEmployer-partial__item__title:last-child,
        .banner .green .link:last-child,
        .banner .green .main-nav__link:last-child,
        .banner .green .main-nav__phone:last-child,
        .banner .green .new-patient-modal__detail:last-child,
        .banner .green .new-patient-modal__title:last-child,
        .banner .green .p:last-child,
        .banner .green .provider__secondary-specialties:last-child,
        .banner .green .provider__specialty:last-child,
        .banner .green .refine-search-filter:last-child,
        .banner .green .search-faq__question:last-child,
        .banner .green .searchresult__ending:last-child,
        .banner .green a:last-child,
        .banner .green h1:last-child,
        .banner .green h2:last-child,
        .banner .green h3:last-child,
        .banner .green h4:last-child,
        .banner .green h5:last-child,
        .banner .green h6:last-child,
        .banner .green p:last-child,
        .card--network .anchor-link .card__subtitle:last-child,
        .card--network .anchor-link .card__title:last-child,
        .card--network .banner .gray .card__subtitle:last-child,
        .card--network .banner .gray .card__title:last-child,
        .card--network .banner .green .card__subtitle:last-child,
        .card--network .banner .green .card__title:last-child,
        .card--network .content-card .card__subtitle:last-child,
        .card--network .content-card .card__title:last-child,
        .card--network .wysiwyg .card__subtitle:last-child,
        .card--network .wysiwyg .card__title:last-child,
        .content-card .article__ending:last-child,
        .content-card .card--network .card__subtitle:last-child,
        .content-card .card--network .card__title:last-child,
        .content-card .card__subtitle:last-child,
        .content-card .card__title:last-child,
        .content-card .cta-item__subtitle:last-child,
        .content-card .h1:last-child,
        .content-card .h2:last-child,
        .content-card .h3:last-child,
        .content-card .h4:last-child,
        .content-card .h5:last-child,
        .content-card .h6:last-child,
        .content-card .hero-overlay .open-enrollment__ctas a:last-child,
        .content-card .hero-overlay .open-enrollment__list li:last-child,
        .content-card .hero-overlay__title:last-child,
        .content-card .hero_subtitle:last-child,
        .content-card .individual-partial__item__title:last-child,
        .content-card .largeEmployer-partial__item__title:last-child,
        .content-card .link:last-child,
        .content-card .main-nav__link:last-child,
        .content-card .main-nav__phone:last-child,
        .content-card .new-patient-modal__detail:last-child,
        .content-card .new-patient-modal__title:last-child,
        .content-card .p:last-child,
        .content-card .provider__secondary-specialties:last-child,
        .content-card .provider__specialty:last-child,
        .content-card .refine-search-filter:last-child,
        .content-card .search-faq__question:last-child,
        .content-card .searchresult__ending:last-child,
        .content-card a:last-child,
        .content-card h1:last-child,
        .content-card h2:last-child,
        .content-card h3:last-child,
        .content-card h4:last-child,
        .content-card h5:last-child,
        .content-card h6:last-child,
        .content-card p:last-child,
        .hero-overlay .open-enrollment__ctas .anchor-link a:last-child,
        .hero-overlay .open-enrollment__ctas .banner .gray a:last-child,
        .hero-overlay .open-enrollment__ctas .banner .green a:last-child,
        .hero-overlay .open-enrollment__ctas .content-card a:last-child,
        .hero-overlay .open-enrollment__ctas .wysiwyg a:last-child,
        .hero-overlay .open-enrollment__list .anchor-link li:last-child,
        .hero-overlay .open-enrollment__list .banner .gray li:last-child,
        .hero-overlay .open-enrollment__list .banner .green li:last-child,
        .hero-overlay .open-enrollment__list .content-card li:last-child,
        .hero-overlay .open-enrollment__list .wysiwyg li:last-child,
        .wysiwyg .article__ending:last-child,
        .wysiwyg .card--network .card__subtitle:last-child,
        .wysiwyg .card--network .card__title:last-child,
        .wysiwyg .card__subtitle:last-child,
        .wysiwyg .card__title:last-child,
        .wysiwyg .cta-item__subtitle:last-child,
        .wysiwyg .h1:last-child,
        .wysiwyg .h2:last-child,
        .wysiwyg .h3:last-child,
        .wysiwyg .h4:last-child,
        .wysiwyg .h5:last-child,
        .wysiwyg .h6:last-child,
        .wysiwyg .hero-overlay .open-enrollment__ctas a:last-child,
        .wysiwyg .hero-overlay .open-enrollment__list li:last-child,
        .wysiwyg .hero-overlay__title:last-child,
        .wysiwyg .hero_subtitle:last-child,
        .wysiwyg .individual-partial__item__title:last-child,
        .wysiwyg .largeEmployer-partial__item__title:last-child,
        .wysiwyg .link:last-child,
        .wysiwyg .main-nav__link:last-child,
        .wysiwyg .main-nav__phone:last-child,
        .wysiwyg .new-patient-modal__detail:last-child,
        .wysiwyg .new-patient-modal__title:last-child,
        .wysiwyg .p:last-child,
        .wysiwyg .provider__secondary-specialties:last-child,
        .wysiwyg .provider__specialty:last-child,
        .wysiwyg .refine-search-filter:last-child,
        .wysiwyg .search-faq__question:last-child,
        .wysiwyg .searchresult__ending:last-child,
        .wysiwyg a:last-child,
        .wysiwyg h1:last-child,
        .wysiwyg h2:last-child,
        .wysiwyg h3:last-child,
        .wysiwyg h4:last-child,
        .wysiwyg h5:last-child,
        .wysiwyg h6:last-child,
        .wysiwyg p:last-child {
            margin-bottom: 0
        }

        .anchor-link hr,
        .banner .gray hr,
        .banner .green hr,
        .content-card hr,
        .wysiwyg hr {
            margin-top: 22.864px;
            margin-bottom: 22.864px;
            border: 0;
            border-top: 2px solid #f0f0f0
        }

        .anchor-link .small,
        .anchor-link small,
        .banner .gray .small,
        .banner .gray small,
        .banner .green .small,
        .banner .green small,
        .content-card .small,
        .content-card small,
        .wysiwyg .small,
        .wysiwyg small {
            font-size: .85em
        }

        .anchor-link .strong,
        .anchor-link strong,
        .banner .gray .strong,
        .banner .gray strong,
        .banner .green .strong,
        .banner .green strong,
        .content-card .strong,
        .content-card strong,
        .wysiwyg .strong,
        .wysiwyg strong {
            font-weight: 700
        }

        .anchor-link .list-unstyled,
        .banner .gray .list-unstyled,
        .banner .green .list-unstyled,
        .content-card .list-unstyled,
        .wysiwyg .list-unstyled {
            list-style: none
        }

        .anchor-link .list-inline,
        .banner .gray .list-inline,
        .banner .green .list-inline,
        .content-card .list-inline,
        .wysiwyg .list-inline {
            list-style: none
        }

        .anchor-link .list-inline-item,
        .banner .gray .list-inline-item,
        .banner .green .list-inline-item,
        .content-card .list-inline-item,
        .wysiwyg .list-inline-item {
            display: inline-block
        }

        .anchor-link .blockquote,
        .anchor-link blockquote,
        .banner .gray .blockquote,
        .banner .gray blockquote,
        .banner .green .blockquote,
        .banner .green blockquote,
        .content-card .blockquote,
        .content-card blockquote,
        .wysiwyg .blockquote,
        .wysiwyg blockquote {
            font-family: "Open Sans", sans-serif;
            font-weight: 400;
            font-size: 1rem;
            padding: 11.432px 22.864px;
            margin-bottom: 22.864px;
            border-left: 4px solid #f0f0f0
        }

        .anchor-link .figcaption,
        .anchor-link figcaption,
        .banner .gray .figcaption,
        .banner .gray figcaption,
        .banner .green .figcaption,
        .banner .green figcaption,
        .content-card .figcaption,
        .content-card figcaption,
        .wysiwyg .figcaption,
        .wysiwyg figcaption {
            font-family: "Open Sans", sans-serif;
            font-size: .875rem;
            font-weight: 400
        }

        .wysiwyg--highlight {
            background-color: #e0e0e0
        }

        .wysiwyg--text-center {
            text-align: center
        }

        .wysiwyg--text-left {
            text-align: left
        }

        .wysiwyg--text-right {
            text-align: right
        }

        .wysiwyg--width80p {
            max-width: 80%;
            margine-left: auto;
            margin-right: auto
        }

        .wysiwyg--column2 {
            -webkit-column-count: 2;
            column-count: 2
        }

        .wysiwyg--img-responsive {
            max-width: 100%;
            height: auto;
            display: block
        }

        .wysiwyg--center {
            margin-left: auto;
            margin-right: auto
        }

        .wysiwyg--text-bold {
            font-weight: 700
        }

        .anchor-link>*,
        .banner .gray>*,
        .banner .green>*,
        .content-card>*,
        .wysiwyg>* {
            margin-bottom: 20px
        }

        .anchor-link>:last-child,
        .banner .gray>:last-child,
        .banner .green>:last-child,
        .content-card>:last-child,
        .wysiwyg>:last-child {
            margin-bottom: 0
        }

        .anchor-link .large,
        .banner .gray .large,
        .banner .green .large,
        .content-card .large,
        .wysiwyg .large {
            font-weight: 600;
            font-size: 1.875rem;
            line-height: 1.875rem;
            padding: 20px 0;
            color: #333;
            text-align: left
        }

        .anchor-link .medium,
        .banner .gray .medium,
        .banner .green .medium,
        .content-card .medium,
        .wysiwyg .medium {
            font-weight: 600;
            font-size: 1.5rem;
            line-height: 1.5rem;
            padding: 15px 0;
            color: #333;
            text-align: left
        }

        .anchor-link .small,
        .banner .gray .small,
        .banner .green .small,
        .content-card .small,
        .wysiwyg .small {
            font-weight: 600;
            font-size: 1.3125rem;
            line-height: 1.3125rem;
            padding: 10px 0;
            color: #333;
            text-align: left
        }

        .anchor-link .paragraph,
        .banner .gray .paragraph,
        .banner .green .paragraph,
        .content-card .paragraph,
        .wysiwyg .paragraph {
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.3125rem;
            padding: 0 0 30px;
            color: #7f8084;
            text-align: left
        }

        .anchor-link .pull-out-quote,
        .banner .gray .pull-out-quote,
        .banner .green .pull-out-quote,
        .content-card .pull-out-quote,
        .wysiwyg .pull-out-quote {
            font-weight: 600;
            font-style: italic;
            font-size: 1.875rem;
            line-height: 2.25rem;
            padding: 20px;
            color: #5d862e;
            text-align: center
        }

        .anchor-link .disclaimer-sources,
        .banner .gray .disclaimer-sources,
        .banner .green .disclaimer-sources,
        .content-card .disclaimer-sources,
        .wysiwyg .disclaimer-sources {
            font-weight: 400;
            font-size: .75rem;
            line-height: .875rem;
            padding: 50px 0;
            color: #bdbdbd;
            text-align: left
        }

        .anchor-link .list-container-regular,
        .banner .gray .list-container-regular,
        .banner .green .list-container-regular,
        .content-card .list-container-regular,
        .wysiwyg .list-container-regular {
            margin: 20px 0;
            display: block
        }

        .anchor-link .list-container-regular li,
        .banner .gray .list-container-regular li,
        .banner .green .list-container-regular li,
        .content-card .list-container-regular li,
        .wysiwyg .list-container-regular li {
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.3125rem;
            color: #7f8084;
            text-align: left;
            list-style: none
        }

        .anchor-link .list-container-bulleted,
        .banner .gray .list-container-bulleted,
        .banner .green .list-container-bulleted,
        .content-card .list-container-bulleted,
        .wysiwyg .list-container-bulleted {
            margin: 20px 0;
            display: block;
            list-style-position: inside
        }

        .anchor-link .list-container-bulleted li,
        .banner .gray .list-container-bulleted li,
        .banner .green .list-container-bulleted li,
        .content-card .list-container-bulleted li,
        .wysiwyg .list-container-bulleted li {
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.3125rem;
            color: #7f8084;
            text-align: left;
            list-style: square
        }

        .anchor-link .list-container-numbered,
        .banner .gray .list-container-numbered,
        .banner .green .list-container-numbered,
        .content-card .list-container-numbered,
        .wysiwyg .list-container-numbered {
            margin: 20px 0;
            display: block
        }

        .anchor-link .list-container-numbered li,
        .banner .gray .list-container-numbered li,
        .banner .green .list-container-numbered li,
        .content-card .list-container-numbered li,
        .wysiwyg .list-container-numbered li {
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.3125rem;
            color: #7f8084;
            text-align: left;
            list-style: decimal
        }

        .anchor-link .bluebox,
        .banner .gray .bluebox,
        .banner .green .bluebox,
        .content-card .bluebox,
        .wysiwyg .bluebox {
            display: inline-block;
            width: 100%
        }

        .anchor-link .bluebox a,
        .banner .gray .bluebox a,
        .banner .green .bluebox a,
        .content-card .bluebox a,
        .wysiwyg .bluebox a {
            display: inline-block;
            font-weight: 600;
            font-size: 1rem;
            color: #29abe2;
            text-align: center;
            text-decoration: none;
            border: 1px solid #29abe2;
            padding: 20px 40px;
            border-radius: 5px;
            margin: 20px 0
        }

        .anchor-link .greenbox,
        .banner .gray .greenbox,
        .banner .green .greenbox,
        .content-card .greenbox,
        .wysiwyg .greenbox {
            display: inline-block;
            width: 100%
        }

        .anchor-link .greenbox a,
        .banner .gray .greenbox a,
        .banner .green .greenbox a,
        .content-card .greenbox a,
        .wysiwyg .greenbox a {
            font-weight: 600;
            font-size: 1rem;
            color: #f0f0f0;
            text-align: center;
            text-decoration: none;
            padding: 20px 40px;
            background-color: #5d862e;
            border-radius: 5px;
            display: inline-block;
            margin: 20px 0
        }

        .anchor-link .street-address,
        .banner .gray .street-address,
        .banner .green .street-address,
        .content-card .street-address,
        .wysiwyg .street-address {
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.3125rem;
            color: #333;
            text-align: left
        }

        .anchor-link .city-state-zip-country-address,
        .banner .gray .city-state-zip-country-address,
        .banner .green .city-state-zip-country-address,
        .content-card .city-state-zip-country-address,
        .wysiwyg .city-state-zip-country-address {
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.3125rem;
            color: #7f8084;
            text-align: left
        }

        .anchor-link img.full-width,
        .banner .gray img.full-width,
        .banner .green img.full-width,
        .content-card img.full-width,
        .wysiwyg img.full-width {
            width: 90%;
            margin: 30px
        }

        .anchor-link img.half-left,
        .banner .gray img.half-left,
        .banner .green img.half-left,
        .content-card img.half-left,
        .wysiwyg img.half-left {
            width: 45%;
            margin: 30px 40px 20px 0;
            float: left
        }

        .anchor-link img.half-right,
        .banner .gray img.half-right,
        .banner .green img.half-right,
        .content-card img.half-right,
        .wysiwyg img.half-right {
            width: 45%;
            margin: 30px 0 20px 40px;
            float: right
        }

        .anchor-link .two-column,
        .banner .gray .two-column,
        .banner .green .two-column,
        .content-card .two-column,
        .wysiwyg .two-column {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:48rem) {

            .anchor-link .two-column,
            .banner .gray .two-column,
            .banner .green .two-column,
            .content-card .two-column,
            .wysiwyg .two-column {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        @media (min-width:60rem) {

            .anchor-link .two-column,
            .banner .gray .two-column,
            .banner .green .two-column,
            .content-card .two-column,
            .wysiwyg .two-column {
                margin: auto 1rem
            }
        }

        @media (min-width:64rem) {

            .anchor-link .two-column,
            .banner .gray .two-column,
            .banner .green .two-column,
            .content-card .two-column,
            .wysiwyg .two-column {
                margin: auto 2rem
            }
        }

        @media (min-width:87.5rem) {

            .anchor-link .two-column,
            .banner .gray .two-column,
            .banner .green .two-column,
            .content-card .two-column,
            .wysiwyg .two-column {
                margin: auto 8rem
            }
        }

        .banner {
            text-align: center;
            width: 100%
        }

        .banner .invalid {
            border: 2px solid #eb7425
        }

        .banner .valid {
            border: 2px solid #7f8084
        }

        .banner .ms-choice {
            color: #999
        }

        @media (min-width:60rem) {
            .banner {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .banner__zip-form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:40rem) {
            .banner__zip-form {
                -ms-flex-direction: row;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                flex-direction: row
            }
        }

        .banner__zip-input {
            width: 50%;
            height: 42px;
            margin-right: 1rem;
            -ms-flex-direction: column;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column
        }

        @media (min-width:40rem) {
            .banner__zip-input {
                width: 20%
            }
        }

        .banner__error-message {
            display: none;
            color: #eb7425;
            font-size: .6875rem;
            font-weight: 400;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            text-align: center
        }

        .banner__tabs-wrapper {
            float: center;
            margin-right: 7rem;
            margin-left: 7rem
        }

        @media (min-width:40rem) {
            .banner__tabs-wrapper--right {
                float: right;
                margin-right: 2rem
            }
        }

        @media (min-width:40rem) {
            .banner__tabs-wrapper--left {
                float: left;
                margin-left: 2rem
            }
        }

        .banner__zip-label {
            display: none;
            vertical-align: middle;
            margin-left: 2px;
            color: #29abe2
        }

        .banner__tab {
            display: block;
            padding: 5px 10px;
            margin: 0 5px;
            background: #29abe2;
            -webkit-transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            transform-origin: 0 100%;
            -webkit-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
            min-width: 6.25rem;
            padding: .5rem 1.25rem .625rem 1.25rem;
            margin-bottom: 1rem;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            outline: 0;
            border-radius: 0 0 5px 5px;
            -webkit-transition: padding .4s ease, opacity .4s ease;
            -o-transition: padding .4s ease, opacity .4s ease;
            transition: padding .4s ease, opacity .4s ease
        }

        .banner__tab-header {
            color: #fff
        }

        .banner__tab-header-zip {
            color: #29abe2;
            display: none
        }

        .banner-wrapper {
            padding: 50px
        }

        .banner-wrapper--disable {
            display: none
        }

        .banner-wrapper--enable {
            display: block
        }

        .banner .anchor-link h1,
        .banner .anchor-link h2,
        .banner .content-card h1,
        .banner .content-card h2,
        .banner .gray h1,
        .banner .gray h2,
        .banner .green h1,
        .banner .green h2,
        .banner .wysiwyg h1,
        .banner .wysiwyg h2 {
            font-weight: 400
        }

        .banner .anchor-link h3,
        .banner .anchor-link h4,
        .banner .content-card h3,
        .banner .content-card h4,
        .banner .gray h3,
        .banner .gray h4,
        .banner .green h3,
        .banner .green h4,
        .banner .wysiwyg h3,
        .banner .wysiwyg h4 {
            font-weight: 300
        }

        .banner .green {
            background: #5d862e;
            background-image: url(../images/selecthealth-content/GreenBack-Texture.svg);
            background-size: cover;
            background-position: center center
        }

        .banner .green .anchor-link a,
        .banner .green .anchor-link h1,
        .banner .green .anchor-link h2,
        .banner .green .anchor-link h3,
        .banner .green .anchor-link h4,
        .banner .green .anchor-link h5,
        .banner .green .anchor-link h6,
        .banner .green .anchor-link img,
        .banner .green .anchor-link li,
        .banner .green .anchor-link p,
        .banner .green .anchor-link ul,
        .banner .green .content-card a,
        .banner .green .content-card h1,
        .banner .green .content-card h2,
        .banner .green .content-card h3,
        .banner .green .content-card h4,
        .banner .green .content-card h5,
        .banner .green .content-card h6,
        .banner .green .content-card img,
        .banner .green .content-card li,
        .banner .green .content-card p,
        .banner .green .content-card ul,
        .banner .green .gray a,
        .banner .green .gray h1,
        .banner .green .gray h2,
        .banner .green .gray h3,
        .banner .green .gray h4,
        .banner .green .gray h5,
        .banner .green .gray h6,
        .banner .green .gray img,
        .banner .green .gray li,
        .banner .green .gray p,
        .banner .green .gray ul,
        .banner .green .green a,
        .banner .green .green h1,
        .banner .green .green h2,
        .banner .green .green h3,
        .banner .green .green h4,
        .banner .green .green h5,
        .banner .green .green h6,
        .banner .green .green img,
        .banner .green .green li,
        .banner .green .green p,
        .banner .green .green ul,
        .banner .green .wysiwyg a,
        .banner .green .wysiwyg h1,
        .banner .green .wysiwyg h2,
        .banner .green .wysiwyg h3,
        .banner .green .wysiwyg h4,
        .banner .green .wysiwyg h5,
        .banner .green .wysiwyg h6,
        .banner .green .wysiwyg img,
        .banner .green .wysiwyg li,
        .banner .green .wysiwyg p,
        .banner .green .wysiwyg ul {
            color: #fff
        }

        .banner .green .anchor-link a,
        .banner .green .content-card a,
        .banner .green .gray a,
        .banner .green .green a,
        .banner .green .wysiwyg a {
            text-decoration: underline
        }

        .banner .green .anchor-link a:hover,
        .banner .green .content-card a:hover,
        .banner .green .gray a:hover,
        .banner .green .green a:hover,
        .banner .green .wysiwyg a:hover {
            color: #e0e0e0;
            text-decoration: none
        }

        .banner .green .anchor-link a .btn-banner-primary,
        .banner .green .content-card a .btn-banner-primary,
        .banner .green .gray a .btn-banner-primary,
        .banner .green .green a .btn-banner-primary,
        .banner .green .wysiwyg a .btn-banner-primary {
            display: none
        }

        .banner .gray {
            background: #f0f0f0;
            background-image: none;
            color: #333
        }

        .banner .gray .anchor-link a,
        .banner .gray .anchor-link h1,
        .banner .gray .anchor-link h2,
        .banner .gray .anchor-link h3,
        .banner .gray .anchor-link h4,
        .banner .gray .anchor-link h5,
        .banner .gray .anchor-link h6,
        .banner .gray .anchor-link img,
        .banner .gray .anchor-link li,
        .banner .gray .anchor-link p,
        .banner .gray .anchor-link ul,
        .banner .gray .content-card a,
        .banner .gray .content-card h1,
        .banner .gray .content-card h2,
        .banner .gray .content-card h3,
        .banner .gray .content-card h4,
        .banner .gray .content-card h5,
        .banner .gray .content-card h6,
        .banner .gray .content-card img,
        .banner .gray .content-card li,
        .banner .gray .content-card p,
        .banner .gray .content-card ul,
        .banner .gray .gray a,
        .banner .gray .gray h1,
        .banner .gray .gray h2,
        .banner .gray .gray h3,
        .banner .gray .gray h4,
        .banner .gray .gray h5,
        .banner .gray .gray h6,
        .banner .gray .gray img,
        .banner .gray .gray li,
        .banner .gray .gray p,
        .banner .gray .gray ul,
        .banner .gray .green a,
        .banner .gray .green h1,
        .banner .gray .green h2,
        .banner .gray .green h3,
        .banner .gray .green h4,
        .banner .gray .green h5,
        .banner .gray .green h6,
        .banner .gray .green img,
        .banner .gray .green li,
        .banner .gray .green p,
        .banner .gray .green ul,
        .banner .gray .wysiwyg a,
        .banner .gray .wysiwyg h1,
        .banner .gray .wysiwyg h2,
        .banner .gray .wysiwyg h3,
        .banner .gray .wysiwyg h4,
        .banner .gray .wysiwyg h5,
        .banner .gray .wysiwyg h6,
        .banner .gray .wysiwyg img,
        .banner .gray .wysiwyg li,
        .banner .gray .wysiwyg p,
        .banner .gray .wysiwyg ul {
            color: #333
        }

        .banner .gray .anchor-link a,
        .banner .gray .content-card a,
        .banner .gray .gray a,
        .banner .gray .green a,
        .banner .gray .wysiwyg a {
            text-decoration: underline
        }

        .banner .gray .anchor-link a:hover,
        .banner .gray .content-card a:hover,
        .banner .gray .gray a:hover,
        .banner .gray .green a:hover,
        .banner .gray .wysiwyg a:hover {
            color: #7f8084;
            text-decoration: none
        }

        .banner .gray .anchor-link a .btn-banner-default,
        .banner .gray .content-card a .btn-banner-default,
        .banner .gray .gray a .btn-banner-default,
        .banner .gray .green a .btn-banner-default,
        .banner .gray .wysiwyg a .btn-banner-default {
            display: none
        }

        .banner .gray-wrapper {
            padding: 50px;
            padding-left: 100px;
            padding-right: 100px
        }

        .btn-default--zip-submit {
            background-color: #fff;
            width: 40%;
            height: 42px;
            margin-right: 1rem;
            margin-top: 1rem
        }

        @media (min-width:40rem) {
            .btn-default--zip-submit {
                width: 10%
            }
        }

        .icon-Close34--tab-close-icon {
            display: none;
            cursor: pointer;
            vertical-align: middle;
            margin-left: 2px;
            color: #29abe2
        }

        .anchor-link {
            text-align: center;
            width: 100%
        }

        .anchor-link--content {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
            height: 200px
        }

        .anchor-link--container {
            padding: 20px
        }

        .anchor-link--container img {
            display: block;
            margin: 0 auto
        }

        .anchor-link--container p {
            text-align: center
        }

        .anchor-link .anchor-link p,
        .anchor-link .banner .gray p,
        .anchor-link .banner .green p,
        .anchor-link .content-card p,
        .anchor-link .wysiwyg p,
        .banner .anchor-link .gray p,
        .banner .anchor-link .green p {
            color: #29abe2;
            font-weight: 600;
            display: block
        }

        .cta-item {
            text-align: center;
            height: auto;
            width: 100%;
            margin: 0 auto
        }

        .cta-item__wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            margin: 0 -1rem
        }

        @media (min-width:40rem) {
            .cta-item__wrapper {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch
            }
        }

        .cta-item__container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            text-align: left;
            width: 100%;
            padding: 0 1rem 1rem 1rem
        }

        @media (min-width:64rem) {
            .cta-item__container {
                width: 25%;
                max-width: 21rem;
                height: auto;
                text-align: center;
                vertical-align: top
            }
        }

        .cta-item__link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            -webkit-transition: background-color .4s ease, color .4s ease;
            -o-transition: background-color .4s ease, color .4s ease;
            transition: background-color .4s ease, color .4s ease
        }

        .cta-item__link:hover {
            background-color: #5d862e
        }

        .cta-item__link:hover [class*=cta-item__] {
            color: #fff
        }

        @media (min-width:64rem) {
            .cta-item__link {
                display: block
            }
        }

        .cta-item__copy {
            margin: 0
        }

        .cta-item__header {
            font-weight: 700;
            color: #5d862e;
            text-transform: none;
            margin-bottom: 0
        }

        @media (min-width:48rem) {
            .cta-item__header {
                display: block
            }
        }

        .cta-item__subtitle {
            color: #7f8084;
            margin-bottom: 0;
            display: none
        }

        .cta-item__subtitle:hover {
            color: #fff
        }

        @media (min-width:48rem) {
            .cta-item__subtitle {
                display: block
            }
        }

        .cta-item__icons {
            display: none;
            margin-bottom: .5rem;
            margin-right: 1rem;
            width: 100px;
            height: 100px;
            overflow: hidden;
            font-size: 90px;
            color: #7f8084
        }

        .cta-item__icons--myhealth:before {
            font-size: 185px;
            line-height: 100px
        }

        @media (min-width:60rem) {
            .cta-item__icons {
                display: inline-block
            }
        }

        @media (min-width:64rem) {
            .cta-item__icons {
                width: auto;
                margin-bottom: .5rem;
                margin-right: 0
            }
        }

        .searchresult {
            position: relative
        }

        .searchresult .banner__text {
            margin-bottom: 0;
            padding: 1rem
        }

        .searchresult .banner--no-network {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            overflow: hidden;
            max-height: 0;
            z-index: 102;
            cursor: pointer;
            background-color: #29abe2;
            color: #fff;
            text-align: center;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .searchresult .banner--fixed-top {
            max-height: 160px
        }

        .searchresult__grid {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 1rem
        }

        .searchresult__spinner {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0
        }

        .searchresult__ending {
            opacity: 0;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease;
            font-style: italic;
            text-align: center
        }

        .searchresult__ending.shown {
            opacity: 1
        }

        .searchresult__scroll-top {
            display: none;
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            padding: .5rem 1rem;
            border-radius: .5rem;
            cursor: pointer;
            color: #29abe2;
            background-color: #fff;
            -webkit-box-shadow: 0 0 8px rgba(51, 51, 51, .5);
            box-shadow: 0 0 8px rgba(51, 51, 51, .5);
            border: 2px solid #bdbdbd;
            z-index: 100;
            font-size: 2rem
        }

        .searchresult__ashchiropractor {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            border: 2px solid #bdbdbd;
            border-radius: .5rem
        }

        .loader--provider-search {
            font-size: 3rem
        }

        .searchresult-s {
            display: none;
            margin-top: 30px;
            margin-bottom: 15px
        }

        @media (min-width:40rem) {
            .searchresult-s {
                color: #5d862e;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .searchresult-xs {
            display: block;
            color: #5d862e;
            line-height: 1;
            margin-top: 2.25rem;
            margin-bottom: 1rem
        }

        @media (min-width:40rem) {
            .searchresult-xs {
                margin-top: 0
            }
        }

        .searchresult-xs .icon-doctor-necklace {
            display: inline-block;
            font-size: 2.25rem;
            font-weight: 700;
            vertical-align: middle
        }

        .searchresult-xs .doctor-tab {
            display: inline-block;
            font-size: 1.315rem;
            font-weight: 600;
            vertical-align: middle
        }

        .searchresult-xs .doctor-facility-tab {
            padding-bottom: 8px
        }

        @media (min-width:40rem) {
            .searchresult-xs .doctor-facility-tab {
                padding-bottom: 12px
            }
        }

        @media (min-width:40rem) {
            .searchresult-xs .tab-container {
                border-bottom: 2px solid #e0e0e0;
                padding-bottom: 6px
            }
        }

        @media (min-width:64rem) {
            .searchresult-xs .tab-container {
                margin-left: 0;
                margin-right: 0
            }
        }

        .searchresult-xs .icon-ArrowDown2 {
            display: inline;
            float: right;
            vertical-align: bottom
        }

        .searchresult-xs.shown .icon-ArrowDown2 {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        @media (min-width:0rem) {
            .searchresult-xs {
                border-bottom: 8px solid #5d862e
            }
        }

        @media (min-width:40rem) {
            .searchresult-xs {
                border-bottom: none
            }

            .searchresult-xs .doctor-facility-tab {
                border-bottom: 8px solid #5d862e
            }
        }

        .searchresult-card {
            width: 100%;
            position: relative
        }

        @media (min-width:60rem) {
            .searchresult-card {
                width: calc(50% - 1rem)
            }
        }

        .provider {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 2rem;
            padding: .75rem;
            border: 2px solid #bdbdbd;
            border-radius: .5rem;
            overflow: hidden;
            background-color: #fff
        }

        @media (min-width:40rem) {
            .provider {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        .provider__image {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            margin-bottom: 1rem
        }

        @media (min-width:40rem) {
            .provider__image {
                width: 40%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 auto;
                flex: 1 0 auto;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: initial;
                -ms-flex-pack: initial;
                justify-content: initial;
                padding-right: 1rem
            }
        }

        @media (min-width:60rem) {
            .provider__image {
                width: 100%;
                padding-right: 0
            }
        }

        @media (min-width:64rem) {
            .provider__image {
                width: 40%;
                padding-right: 1rem
            }
        }

        .provider__image-wrapper {
            position: relative;
            padding-right: 1rem;
            max-width: 123px;
            min-height: 1px
        }

        @media (min-width:40rem) {
            .provider__image-wrapper {
                max-width: 100%;
                padding-right: 0;
                margin-bottom: 1rem
            }
        }

        .provider__image-link {
            display: block
        }

        .provider__image-tag {
            display: block
        }

        @media (min-width:40rem) {
            .provider__view-profile {
                width: 100%
            }
        }

        @media (min-width:40rem) {
            .provider__info {
                width: 60%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 auto;
                flex: 1 0 auto
            }
        }

        @media (min-width:60rem) {
            .provider__info {
                width: 100%
            }
        }

        @media (min-width:64rem) {
            .provider__info {
                width: 60%
            }
        }

        .provider__name-tag {
            display: inline-block;
            margin-bottom: 0;
            color: #5d862e;
            font-weight: 700
        }

        .provider__name-tag:hover {
            color: #86a467
        }

        .provider__specialty {
            text-transform: none
        }

        .provider__secondary-specialties {
            color: #7f8084;
            text-transform: none;
            line-height: 1
        }

        .provider__gender {
            color: #bdbdbd;
            text-transform: none
        }

        .provider__additional-info {
            float: right;
            margin-bottom: 1rem;
            color: #eb7425
        }

        .provider__additional-info:hover {
            color: #f4b082
        }

        @media (min-width:40rem) {
            .provider__additional-info {
                display: none
            }
        }

        .provider__additional-info-accordion {
            margin-left: 2rem;
            clear: both
        }

        @media (min-width:40rem) {
            .provider__additional-info-accordion.collapse {
                display: block
            }
        }

        .provider__reviews {
            margin-left: -2rem
        }

        .provider__basic-info,
        .provider__locations,
        .provider__networks,
        .provider__phone {
            margin-bottom: 1rem
        }

        .provider__stars {
            line-height: 1rem
        }

        .provider__stars-link {
            display: inline-block
        }

        .provider__locations-link,
        .provider__networks-link,
        .provider__phone-link {
            margin-left: -2rem
        }

        .provider__locations-link [class^=icon-],
        .provider__networks-link [class^=icon-],
        .provider__phone-link [class^=icon-] {
            font-size: 1.25rem;
            margin-right: .5rem;
            line-height: 1rem;
            vertical-align: middle
        }

        .provider__pcp {
            width: calc(100% + 2rem);
            max-height: 0;
            overflow: hidden;
            margin-left: -.75rem;
            margin-right: -.75rem;
            margin-bottom: -.75rem;
            border-top-width: 0;
            border-top-style: solid;
            text-align: center;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .provider__pcp--show {
            max-height: 60px;
            border-top-width: 2px
        }

        .provider__pcp--available {
            background-color: #29abe2;
            color: #fff
        }

        .provider__pcp--not-available {
            background-color: #e0e0e0;
            border-top-color: #bdbdbd;
            color: #bdbdbd;
            pointer-events: none
        }

        .provider__pcp--not-available .provider__pcp-link {
            color: #7f8084
        }

        .provider__pcp-link {
            display: block;
            padding: 1rem;
            color: #fff
        }

        .provider__pcp-link:hover {
            color: #99d7f1
        }

        .networks__list {
            padding: 0;
            margin: 0;
            list-style: none
        }

        .btn--view-profile {
            white-space: nowrap;
            padding: .3rem 1.25rem .425rem 1.25rem
        }

        @media (min-width:40rem) {
            .btn--view-profile {
                width: 100%;
                border-radius: .5rem;
                padding: .8rem 1.25rem .925rem 1.25rem
            }
        }

        .btn--view-profile:first-child {
            margin-top: 0
        }

        .btn--view-profile:last-child {
            margin-bottom: 0
        }

        .loader--provider__stars {
            position: relative;
            top: -15px;
            left: -30px;
            border-top-color: rgba(41, 171, 226, .2);
            border-right-color: rgba(41, 171, 226, .2);
            border-bottom-color: rgba(41, 171, 226, .2);
            border-left-color: rgba(41, 171, 226, .9)
        }

        .location__open-early {
            padding-right: 5px
        }

        .location__open-late {
            padding-right: 5px
        }

        .icon-OpenEarly {
            color: #5d862e;
            font-size: 1rem
        }

        .icon-OpenLate {
            color: #5d862e;
            font-size: 1rem
        }

        .icon-weekends {
            color: #5d862e;
            font-size: 1rem
        }

        .searchresult-s {
            display: none
        }

        @media (min-width:40rem) {
            .searchresult-s {
                color: #5d862e;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .search-noresult {
            background-color: #f0f0f0
        }

        .search-noresult__container {
            margin: 2rem calc(2rem - 22.864px);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        @media (min-width:60rem) {
            .search-noresult__container {
                margin: 4rem calc(4rem - 22.864px)
            }
        }

        @media (min-width:64rem) {
            .search-noresult__container {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .search-noresult__imgwrapper {
            display: none;
            padding: 0 22.864px
        }

        @media (min-width:60rem) {
            .search-noresult__imgwrapper {
                display: block;
                -ms-flex-preferred-size: 35%;
                flex-basis: 35%
            }
        }

        .search-noresult__text {
            padding: 0 22.864px
        }

        @media (min-width:60rem) {
            .search-noresult__text {
                -ms-flex-preferred-size: 65%;
                flex-basis: 65%
            }
        }

        .search-noresult__title {
            color: #7f8084;
            margin-bottom: 3rem
        }

        .search-noresult p {
            color: #7f8084;
            font-weight: 400
        }

        .selected-filter-collapse {
            display: inline-block;
            font-size: 1.125rem;
            color: #7f8084;
            padding-bottom: .5rem
        }

        .selected-filter-collapse .icon-arrowu-sm {
            font-size: 1rem;
            color: #29abe2;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .selected-filter-collapse.shown .icon-arrowu-sm {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0)
        }

        .selected-filter-collapse:hover {
            color: #bdbdbd
        }

        .filter-labels-list {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin-left: -5.716px;
            margin-right: -5.716px
        }

        .filter-labels-container.in {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            min-height: 2.625rem
        }

        .label {
            display: inline-block;
            position: relative
        }

        .label__name {
            padding-right: 12px;
            font-size: .75rem
        }

        .label__close {
            font-size: .5rem;
            position: absolute;
            top: calc(50% - .2rem);
            right: 4px
        }

        .label--filter {
            height: auto;
            width: auto;
            padding: 2px 4px 5px 5px;
            border: 1px solid #e0e0e0;
            border-radius: 3px;
            margin: 5.716px;
            line-height: .8
        }

        .label--filter:hover {
            color: #bdbdbd
        }

        .label:only-child {
            visibility: hidden
        }

        .provider-search__loader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 9999
        }

        .provider-search__title {
            text-align: center;
            margin-top: 3rem
        }

        .provider-search-filters-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch
        }

        @media (min-width:48rem) {
            .provider-search-filters-wrapper {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .provider-search .form-group--network {
            margin-right: 3px;
            -ms-flex-item-align: stretch;
            align-self: stretch
        }

        .provider-search .form-group--network button {
            height: 54px;
            margin-bottom: 10px
        }

        @media (min-width:48rem) {
            .provider-search .form-group--network button {
                margin-bottom: 0
            }
        }

        .provider-search .form-group--network button .placeholder {
            color: #7f8084;
            font-size: 1rem
        }

        .provider-search .multipleselect__network {
            margin: 0
        }

        @media (max-width:40em) {
            .provider-search .multipleselect__network .ms-drop {
                position: relative;
                margin-top: -12px;
                margin-bottom: 10px
            }
        }

        .provider-search .select-group__network {
            margin: 0
        }

        .provider-search__search-bar {
            -webkit-box-flex: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            height: auto;
            border: 2px solid #bdbdbd;
            border-radius: 3px;
            padding: 0
        }

        .provider-search__search-bar .search-input {
            line-height: 1.4;
            border: none;
            -webkit-appearance: none
        }

        .provider-search__search-bar .btn-search-input {
            border: none;
            margin: -2px;
            border-radius: 0 0 3px 3px;
            text-transform: none
        }

        @media (min-width:48rem) {
            .provider-search__search-bar .btn-search-input {
                border-radius: 0 3px 3px 0
            }
        }

        .search-filters {
            width: 100%
        }

        .search-filters__basic {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 1rem
        }

        @media (min-width:40rem) {
            .search-filters__basic {
                margin-left: -1rem;
                margin-right: -1rem
            }
        }

        @media (min-width:60rem) {
            .search-filters__basic {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .search-filters__advanced-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: .5rem
        }

        @media (min-width:40rem) {
            .search-filters__advanced-container {
                margin-left: -1rem;
                margin-right: -1rem
            }
        }

        @media (min-width:60rem) {
            .search-filters__advanced-container {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .search-filters__advanced-toggle a {
            color: #7f8084;
            padding-bottom: .25rem
        }

        .search-filters__advanced-toggle a [class^=icon-] {
            color: #29abe2;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .search-filters__advanced-toggle a.shown [class^=icon-] {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .search-filters__advanced-toggle a:hover {
            color: #bdbdbd
        }

        .search-filters__disclaimer {
            margin-top: .25rem
        }

        .search-filters .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end
        }

        @media (min-width:40rem) {
            .search-filters .form-group {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                margin-left: .5rem;
                margin-right: .5rem
            }
        }

        @media (min-width:40rem) {

            .search-filters .form-group .checkbox-group,
            .search-filters .form-group .input-group,
            .search-filters .form-group .radio-group,
            .search-filters .form-group .select-group,
            .search-filters .form-group .textarea-group {
                margin-left: .5rem;
                margin-right: .5rem
            }
        }

        .group--or {
            display: none;
            -ms-flex-item-align: center;
            align-self: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-top: .85rem;
            color: #7f8084
        }

        @media (min-width:40rem) {
            .group--or {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .select-group {
            width: 100%
        }

        .select-group__network {
            width: calc(100% + 4px)
        }

        @media (min-width:48rem) {
            .select-group__network {
                width: 13rem
            }
        }

        @media (min-width:64rem) {
            .select-group__network {
                width: 20rem
            }
        }

        @media (min-width:40rem) {
            .select-group__specialty {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .select-group__specialty {
                width: 10rem
            }
        }

        @media (min-width:80rem) {
            .select-group__specialty {
                width: 15rem
            }
        }

        @media (min-width:40rem) {

            .select-group__city,
            .select-group__state,
            .select-group__within {
                width: 25%
            }
        }

        @media (min-width:60rem) {

            .select-group__city,
            .select-group__state,
            .select-group__within {
                width: 7rem
            }
        }

        @media (min-width:64rem) {

            .select-group__city,
            .select-group__state,
            .select-group__within {
                width: 10rem
            }
        }

        @media (min-width:80rem) {

            .select-group__city,
            .select-group__state,
            .select-group__within {
                width: 10rem
            }
        }

        @media (min-width:60rem) {
            .select-group__state {
                margin-right: 0
            }
        }

        @media (min-width:60rem) {
            .select-group__clinics {
                width: 23rem
            }
        }

        @media (min-width:64rem) {
            .select-group__clinics {
                width: 10rem
            }
        }

        @media (min-width:40rem) {

            .select-group__gender,
            .select-group__language {
                width: 50%
            }
        }

        @media (min-width:60rem) {

            .select-group__gender,
            .select-group__language {
                width: 8rem
            }
        }

        @media (min-width:64rem) {

            .select-group__gender,
            .select-group__language {
                width: 10rem
            }
        }

        @media (min-width:40rem) {

            .select-group__clinics,
            .select-group__hospital_affiliation,
            .select-group__hours {
                width: 50%
            }
        }

        @media (min-width:60rem) {

            .select-group__clinics,
            .select-group__hospital_affiliation,
            .select-group__hours {
                width: 8rem
            }
        }

        @media (min-width:64rem) {

            .select-group__clinics,
            .select-group__hospital_affiliation,
            .select-group__hours {
                width: 10rem
            }
        }

        @media (min-width:60rem) {
            .select-group__hospital_affiliation {
                width: 10rem
            }
        }

        @media (min-width:64rem) {
            .select-group__hospital_affiliation {
                width: 15rem
            }
        }

        @media (min-width:60rem) {
            .select-group__hours {
                width: 5rem
            }
        }

        @media (min-width:64rem) {
            .select-group__hours {
                width: 7rem
            }
        }

        .input-group {
            width: 100%
        }

        .input-group__zip .input__zip {
            min-width: 0;
            width: 100%
        }

        @media (min-width:40rem) {
            .input-group__zip {
                width: 25%
            }
        }

        @media (min-width:60rem) {
            .input-group__zip {
                width: 7rem
            }
        }

        @media (min-width:64rem) {
            .input-group__zip {
                width: 10rem
            }
        }

        .checkbox-group {
            width: 100%
        }

        .checkbox-group__accepting-new-patients {
            margin-top: 1rem
        }

        @media (min-width:87.5rem) {
            .checkbox-group__accepting-new-patients {
                margin-top: 0
            }
        }

        .search-filters__toggle a {
            padding-bottom: .5rem;
            color: #7f8084
        }

        .search-filters__toggle a [class^=icon-] {
            color: #29abe2;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .search-filters__toggle a.shown [class^=icon-] {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .search-filters__toggle a:hover {
            color: #bdbdbd
        }

        .search-filters__toggle h6 {
            display: inline-block;
            text-transform: none
        }

        .search-filters__toggle h6 .icon-ArrowDown2 {
            margin-left: 4.5rem;
            font-size: 1rem;
            line-height: 1
        }

        .provider-search__banner {
            width: 100vw;
            overflow-x: hidden
        }

        .provider-search__banner__wrapper {
            text-align: center;
            padding: 4rem
        }

        .provider-search__banner__title {
            padding-bottom: 1rem
        }

        @media (min-width:64rem) {
            .provider-search__banner__detail {
                padding: 0 10rem
            }
        }

        @media (min-width:87.5rem) {
            .provider-search__banner__detail {
                padding: 0 15rem
            }
        }

        .provider-search__banner__link {
            color: #fff !important;
            text-decoration: underline !important
        }

        .provider-search .provider-search-filters__toggle a {
            color: #333
        }

        .provider-search .provider-search-filters__toggle a [class^=icon-] {
            color: #29abe2;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .provider-search .provider-search-filters__toggle a.shown [class^=icon-] {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0)
        }

        .provider-search__page__loader {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: 9999;
            background-color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .provider-search__preload {
            font-size: 5rem
        }

        .select-group__network .select2-selection--multiple {
            height: 54px !important;
            margin: 0 !important
        }

        .search-faq {
            margin-top: 2rem
        }

        .search-faq__title {
            padding: 25px 0;
            border-bottom: 2px solid #e0e0e0
        }

        @media (min-width:48rem) {
            .search-faq__title {
                color: #5d862e;
                border: none
            }
        }

        .search-faq__wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .search-faq__container {
            width: 100%
        }

        @media (min-width:48rem) {
            .search-faq__container {
                width: 55%
            }
        }

        .search-faq__item {
            padding: 11.432px 0;
            border-bottom: 2px solid #e0e0e0;
            width: 100%
        }

        @media (min-width:48rem) {
            .search-faq__item {
                border: none
            }
        }

        @media (min-width:48rem) {
            .search-faq__question {
                color: #56565a
            }
        }

        .search-faq__question.shown .icon-ArrowDown2 {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .search-faq__question .icon-ArrowDown2 {
            height: 30px;
            color: #29abe2;
            float: right;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .search-faq__question__wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-left: 30px;
            padding-right: 30px
        }

        .search-faq__answer {
            font-size: 1rem;
            color: #7f8084;
            margin-top: 11.432px
        }

        .search-faq__image {
            display: none
        }

        @media (min-width:48rem) {
            .search-faq__image {
                display: block;
                width: 35%;
                height: auto
            }
        }

        .form-group--network {
            position: relative
        }

        .form-group--network .network-modal-link {
            font-size: .75rem
        }

        .form-group--network .network-card-image {
            position: absolute;
            top: 15px;
            right: 10px
        }

        .form-group--network .network-subscriber {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center
        }

        .network-filter-modal {
            text-align: left
        }

        .network-filter-modal p {
            color: #7f8084
        }

        .anchor-link .network-filter-modal .btn-rte-primary,
        .banner .gray .anchor-link a .network-filter-modal .btn-banner-primary,
        .banner .gray .content-card a .network-filter-modal .btn-banner-primary,
        .banner .gray .gray a .network-filter-modal .btn-banner-primary,
        .banner .gray .green a .network-filter-modal .btn-banner-primary,
        .banner .gray .network-filter-modal .btn-rte-primary,
        .banner .gray .wysiwyg a .network-filter-modal .btn-banner-primary,
        .banner .green .network-filter-modal .btn-rte-primary,
        .content-card .network-filter-modal .btn-rte-primary,
        .network-filter-modal .anchor-link .btn-rte-primary,
        .network-filter-modal .banner .gray .anchor-link a .btn-banner-primary,
        .network-filter-modal .banner .gray .btn-rte-primary,
        .network-filter-modal .banner .gray .content-card a .btn-banner-primary,
        .network-filter-modal .banner .gray .gray a .btn-banner-primary,
        .network-filter-modal .banner .gray .green a .btn-banner-primary,
        .network-filter-modal .banner .gray .wysiwyg a .btn-banner-primary,
        .network-filter-modal .banner .green .btn-rte-primary,
        .network-filter-modal .btn-primary,
        .network-filter-modal .content-card .btn-rte-primary,
        .network-filter-modal .search-bar .btn,
        .network-filter-modal .wysiwyg .btn-rte-primary,
        .search-bar .network-filter-modal .btn,
        .wysiwyg .network-filter-modal .btn-rte-primary {
            position: relative
        }

        .network-filter-modal .error p {
            color: #eb7425
        }

        .network-filter__modal-link {
            text-align: center;
            background-color: #29abe2
        }

        .network-filter__modal-link:hover {
            background-color: #56bde8
        }

        .network-filter__subscriber-remodal-link {
            display: block;
            padding: .4rem;
            color: #fff
        }

        .network-filter__subscriber-remodal-link:hover {
            color: #fff
        }

        .network-filter__icon {
            margin-right: .5rem;
            line-height: 1.25rem;
            font-size: 1.5rem;
            vertical-align: middle
        }

        .network-filter__modal {
            text-align: left
        }

        .network-filter__modal p {
            color: #7f8084
        }

        .anchor-link .network-filter__modal .btn-rte-primary,
        .banner .gray .anchor-link a .network-filter__modal .btn-banner-primary,
        .banner .gray .content-card a .network-filter__modal .btn-banner-primary,
        .banner .gray .gray a .network-filter__modal .btn-banner-primary,
        .banner .gray .green a .network-filter__modal .btn-banner-primary,
        .banner .gray .network-filter__modal .btn-rte-primary,
        .banner .gray .wysiwyg a .network-filter__modal .btn-banner-primary,
        .banner .green .network-filter__modal .btn-rte-primary,
        .content-card .network-filter__modal .btn-rte-primary,
        .network-filter__modal .anchor-link .btn-rte-primary,
        .network-filter__modal .banner .gray .anchor-link a .btn-banner-primary,
        .network-filter__modal .banner .gray .btn-rte-primary,
        .network-filter__modal .banner .gray .content-card a .btn-banner-primary,
        .network-filter__modal .banner .gray .gray a .btn-banner-primary,
        .network-filter__modal .banner .gray .green a .btn-banner-primary,
        .network-filter__modal .banner .gray .wysiwyg a .btn-banner-primary,
        .network-filter__modal .banner .green .btn-rte-primary,
        .network-filter__modal .btn-primary,
        .network-filter__modal .content-card .btn-rte-primary,
        .network-filter__modal .search-bar .btn,
        .network-filter__modal .wysiwyg .btn-rte-primary,
        .search-bar .network-filter__modal .btn,
        .wysiwyg .network-filter__modal .btn-rte-primary {
            position: relative
        }

        .network-filter__modal .error p {
            color: #eb7425
        }

        .error-404 {
            text-align: center;
            overflow: hidden
        }

        .error-404__text {
            z-index: 1001;
            margin-top: 200px
        }

        .error-404__text p {
            font-size: 1.5rem
        }

        .error-404 .moving-icon {
            -webkit-transition: fill .3s ease-out;
            -o-transition: fill .3s ease-out;
            transition: fill .3s ease-out;
            display: block;
            width: 200px;
            height: 200px;
            position: absolute;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            fill: #bdbdbd;
            z-index: 1;
            overflow: hidden
        }

        .error-404 .moving-icon.highlight {
            fill: #5d862e;
            background-color: transparent;
            overflow: hidden
        }

        .error-502 {
            text-align: center;
            overflow: hidden
        }

        .error-502__text {
            z-index: 1001;
            margin-top: 200px
        }

        .error-502__text p {
            font-size: 1.5rem
        }

        .error-502 .moving-icon {
            -webkit-transition: fill .3s ease-out;
            -o-transition: fill .3s ease-out;
            transition: fill .3s ease-out;
            display: block;
            width: 200px;
            height: 200px;
            position: absolute;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            fill: #bdbdbd;
            z-index: 1;
            overflow: hidden
        }

        .error-502 .moving-icon.highlight {
            fill: #5d862e;
            background-color: transparent;
            overflow: hidden
        }

        .form {
            margin-top: 3.125rem
        }

        @media (min-width:60rem) {
            .form {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .form .filter-accordion {
            margin-bottom: 0;
            width: 100%
        }

        @media (min-width:60rem) {
            .form .filter-accordion.collapse {
                display: block
            }
        }

        .form-header {
            border-bottom: .125rem solid #bdbdbd
        }

        @media (min-width:40rem) {
            .form-header {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media (min-width:60rem) {
            .form-header__left {
                width: 20%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 20%;
                flex: 1 0 20%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start;
                padding: .125rem 1.375rem 0 0
            }
        }

        @media (min-width:0rem) {
            .form-header__right {
                display: none
            }
        }

        @media (min-width:40rem) {
            .form-header__right {
                width: 75%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 75%;
                flex: 1 0 75%;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start;
                text-align: right;
                padding-right: 0;
                display: block
            }
        }

        .form-header__title {
            padding-top: 2.125rem
        }

        @media (min-width:40rem) {
            .form-header__paragraph {
                -ms-flex-line-pack: start;
                align-content: flex-start;
                padding-right: 2.25rem;
                margin-bottom: 0;
                margin-top: 1.25rem
            }
        }

        @media (min-width:0rem) {
            .form-filter {
                border-right: none;
                padding: 0
            }
        }

        @media (min-width:60rem) {
            .form-filter {
                width: 25%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 25%;
                flex: 1 0 25%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start;
                padding: .125rem 3.125rem 0 0;
                border-right: .125rem solid #bdbdbd;
                height: 100%
            }

            .form-filter .form-filter--top {
                margin-top: 0
            }
        }

        .form-filter__toggle {
            cursor: pointer
        }

        @media (min-width:0rem) {
            .form-filter__toggle {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start
            }
        }

        @media (min-width:60rem) {
            .form-filter__toggle {
                display: none
            }
        }

        .form-filter__toggle .shown {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            text-align: left
        }

        .form-filter__text {
            color: #333
        }

        @media (min-width:0rem) {
            .form-filter__text {
                margin-right: 70%
            }
        }

        @media (min-width:40rem) {
            .form-filter__text {
                margin-right: 80%
            }
        }

        @media (min-width:48rem) {
            .form-filter__text {
                margin-right: 85%
            }
        }

        .form-filter__group {
            width: 100%;
            margin-top: 2.5rem
        }

        @media (min-width:0rem) {
            .form-filter__group:first-child {
                margin-top: 2.5rem
            }
        }

        @media (min-width:60rem) {
            .form-filter__group:first-child {
                margin-top: 0
            }
        }

        @media (min-width:60rem) {
            .form-filter__group--clear-all {
                padding-bottom: 1.875rem
            }
        }

        .form-filter__group__button {
            margin-top: 2.5rem
        }

        .form-filter__group .btn:first-child {
            margin-top: 0
        }

        .form-filter__title {
            color: #5d862e;
            font-size: 1.125rem;
            margin-bottom: 0
        }

        .form-filter__label {
            text-transform: none;
            letter-spacing: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1;
            margin-top: 1.25rem;
            width: 1.25rem;
            cursor: default;
            color: #333;
            display: block !important
        }

        .form-document {
            padding-left: 2.313rem
        }

        @media (min-width:0rem) {
            .form-document {
                padding-left: 0;
                margin-left: -.813rem
            }
        }

        @media (min-width:60rem) {
            .form-document {
                width: 70%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 70%;
                flex: 1 0 70%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start;
                padding-left: 2.312rem;
                margin-top: 0;
                margin-left: 0
            }
        }

        .form-document__title {
            color: #333;
            line-height: .9;
            margin-bottom: -.7rem;
            margin-left: .813rem
        }

        @media (min-width:100rem) {
            .form-document__title {
                margin-left: .5rem
            }
        }

        .form-document__content {
            width: 100%
        }

        .form-document__section {
            width: 100%;
            margin-top: 2.5rem
        }

        @media (min-width:0rem) {
            .form-document__margin-top {
                margin-top: -.625rem
            }
        }

        @media (min-width:60rem) {
            .form-document__margin-top {
                margin-top: -2.5rem
            }
        }

        .form-document__form-items {
            margin-bottom: 0
        }

        .form-item__link {
            font-size: 1.125rem
        }

        .icon-ArrowUp2--filter {
            height: 1rem;
            margin-top: 5px;
            cursor: pointer;
            float: right;
            color: #29abe2;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0)
        }

        .btn-default--clearall {
            width: 100%;
            margin-bottom: 0;
            max-width: 18.75rem
        }

        .btn-default--call-us {
            padding: .5rem 3.25rem .625rem 3.25rem;
            max-width: 18.75rem
        }

        .checkbox-group.checkbox-group--form-filter {
            margin-bottom: 0;
            display: grid
        }

        .checkbox-group.checkbox-group--form-filter .form-filter__span {
            padding-left: 1.188rem;
            padding-top: 0;
            padding-bottom: 0
        }

        .checkbox-group.checkbox-group--form-filter .form-filter__span:after {
            height: 1rem;
            width: 1rem;
            background-position: 20% 0
        }

        .contact-us {
            width: 100%;
            margin: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column wrap;
            flex-flow: column wrap;
            color: #7f8084
        }

        .contact-us .invalid {
            border: 2px solid #eb7425
        }

        .contact-us .valid {
            border: 2px solid #7f8084
        }

        .contact-us .ms-choice {
            color: #999
        }

        @media (min-width:60rem) {
            .contact-us {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .contact-us__title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            white-space: normal;
            margin: 0 auto
        }

        .contact-us__title:nth-child(odd) {
            color: #5d862e
        }

        .contact-us__title:nth-child(even) {
            color: #333
        }

        @media (min-width:60rem) {
            .contact-us__title {
                white-space: nowrap
            }
        }

        @media (min-width:64rem) {
            .contact-us__title {
                white-space: normal
            }
        }

        .contact-us__sub-title {
            color: #333
        }

        .contact-us__extended-hours {
            margin-bottom: 0
        }

        .contact-us__listing {
            list-style-type: circle filled;
            padding-left: 3.125rem;
            margin-top: 0
        }

        .contact-us__rtc {
            margin-bottom: 2rem
        }

        @media (min-width:0rem) {
            .contact-us__rtc:nth-child(odd) {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .contact-us__rtc:nth-child(odd) {
                width: 48%;
                margin-right: 4%
            }
        }

        @media (min-width:0rem) {
            .contact-us__rtc:nth-child(even) {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .contact-us__rtc:nth-child(even) {
                width: 48%
            }
        }

        .contact-us__content {
            width: 100%;
            height: 16.813rem;
            margin-bottom: 1.25rem
        }

        .contact-us__error {
            text-align: right;
            position: relative
        }

        .contact-us__error--common-error {
            display: none;
            color: #eb7425;
            font-size: .6875rem;
            text-transform: none;
            font-weight: 400;
            left: 0;
            top: 0;
            text-align: left
        }

        @media (min-width:0rem) {
            .contact-us__error--common-error {
                width: 100%;
                position: static;
                margin-bottom: .313rem
            }
        }

        @media (min-width:40rem) {
            .contact-us__error--common-error {
                position: absolute;
                width: calc(100% - (150px));
                padding-right: 1rem
            }
        }

        @media (min-width:0rem) {
            .contact-us__form {
                display: block;
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .contact-us__form {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                width: 100%
            }
        }

        .contact-us__message {
            margin-top: 2.188rem;
            display: block
        }

        @media (min-width:60rem) {
            .contact-us__message {
                margin-top: 0
            }
        }

        .contact-us__inputs {
            margin-right: 5%
        }

        @media (min-width:0rem) {
            .contact-us__inputs {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .contact-us__inputs {
                width: 35%
            }
        }

        @media (min-width:0rem) {
            .contact-us__text-area {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .contact-us__text-area {
                width: 55%;
                margin-top: .25rem
            }
        }

        .contact-us .select-group__range--margin {
            margin-top: 0;
            margin-bottom: 0
        }

        @media (min-width:0rem) {
            .speak-to-someone {
                width: 100%
            }
        }

        @media (min-width:60rem) {
            .speak-to-someone {
                width: 30%;
                margin-top: .25rem
            }
        }

        .speak-to-someone__label {
            color: #7f8084;
            display: block;
            border-bottom: 2px solid #bdbdbd;
            padding-bottom: .5rem;
            margin-bottom: 1.875rem
        }

        .speak-to-someone__email,
        .speak-to-someone__fax-number {
            margin-bottom: 1.875rem;
            width: 100%;
            height: auto;
            display: inline-block;
            vertical-align: top;
            padding-left: .5rem;
            white-space: nowrap
        }

        .speak-to-someone__section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .icon-SendEmail2--email:before,
        .icon-fax--fax:before {
            font-size: 1.563rem;
            color: #5d862e
        }

        @media (min-width:48rem) {
            .tabs .fade {
                opacity: 0;
                -webkit-transition: opacity .5s linear;
                -o-transition: opacity .5s linear;
                transition: opacity .5s linear
            }

            .tabs .fade.in {
                opacity: 1
            }
        }

        .tabs__header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: -2px;
            margin-left: calc((17.75rem - 100vw)/ 2);
            padding: 11.432px;
            width: 100vw;
            min-height: 3.75rem;
            border: 2px solid #bdbdbd;
            border-left: none;
            border-right: none;
            background-color: #f0f0f0;
            color: #7f8084
        }

        @media (min-width:0rem) {
            .tabs__header {
                margin-left: calc((17.8rem - 100vw)/ 2)
            }
        }

        @media (min-width:40rem) {
            .tabs__header {
                margin-left: calc((29rem - 100vw)/ 2)
            }
        }

        @media (min-width:48rem) {
            .tabs__header {
                display: none
            }
        }

        .tabs__header:hover {
            color: #7f8084
        }

        .tabs__header .shown {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            text-align: left;
            margin-top: -2px
        }

        .tabs__contain {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .tabs__collapse-title {
            width: 100%
        }

        .tabs__list {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e0e0e0
        }

        @media (min-width:48rem) {
            .tabs__list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .tabs__list [class^=icon] {
            padding-bottom: 1rem
        }

        .tabs__content {
            padding: 2.858rem 0
        }

        @media (min-width:48rem) {
            .tabs__content--tabs>.tabs__panel {
                display: none
            }

            .tabs__content--tabs>.active {
                display: block
            }
        }

        .tabs__title {
            margin-bottom: 1.25rem;
            color: #5d862e;
            margin-top: 1rem
        }

        .tabs__sub-title {
            color: #333;
            margin-bottom: 1.3rem
        }

        .tabs__description {
            color: #7f8084;
            margin-bottom: 1.3rem
        }

        .tabs__link {
            display: inline-block;
            padding: .188rem 3rem;
            color: #7f8084;
            text-transform: uppercase;
            white-space: nowrap
        }

        @media (min-width:48rem) {
            .tabs__link {
                text-align: center;
                padding: .188rem 0
            }
        }

        .tabs__link:hover {
            color: #bdbdbd
        }

        .tabs__item {
            -webkit-transition: color .4s linear;
            -o-transition: color .4s linear;
            transition: color .4s linear;
            width: 33.33%;
            text-align: center
        }

        .tabs__item:hover .tabs__info-tab--collapse,
        .tabs__item:hover [class^=icon-]:before {
            color: #bdbdbd;
            text-align: center
        }

        .tabs__item.active .tabs__info-tab--collapse,
        .tabs__item.active .tabs__link,
        .tabs__item.active [class^=icon-]:before {
            color: #5d862e;
            text-align: center
        }

        @media (min-width:48rem) {
            .tabs__panel {
                display: none
            }

            .tabs__panel.active {
                display: block;
                overflow: hidden
            }
        }

        .icon-individual--tab:before {
            width: 3.5rem;
            color: #7f8084;
            padding-left: 1rem
        }

        @media (min-width:0rem) {
            .icon-individual--tab:before {
                font-size: 1.6rem;
                margin-top: 0;
                text-align: center;
                padding-right: .8rem
            }
        }

        @media (min-width:48rem) {
            .icon-individual--tab:before {
                font-size: 4.55rem;
                margin-top: 1rem;
                width: auto;
                padding: 0
            }
        }

        @media (min-width:64rem) {
            .icon-individual--tab:before {
                font-size: 5rem
            }
        }

        .icon-couple--tab:before {
            width: 3.5rem;
            color: #7f8084;
            text-align: center;
            padding-left: .4rem
        }

        @media (min-width:0rem) {
            .icon-couple--tab:before {
                font-size: 2rem;
                padding-right: .5rem
            }
        }

        @media (min-width:48rem) {
            .icon-couple--tab:before {
                font-size: 4.55rem;
                width: auto;
                padding: 0
            }
        }

        @media (min-width:64rem) {
            .icon-couple--tab:before {
                font-size: 5rem
            }
        }

        .icon-group--tab:before {
            width: 3.5rem;
            color: #7f8084;
            text-align: center
        }

        @media (min-width:0rem) {
            .icon-group--tab:before {
                font-size: 2rem;
                padding-right: .35rem
            }
        }

        @media (min-width:48rem) {
            .icon-group--tab:before {
                font-size: 4.55rem;
                width: auto;
                padding: 0
            }
        }

        @media (min-width:64rem) {
            .icon-group--tab:before {
                font-size: 5rem
            }
        }

        .icon-ArrowUp2--tab-arrow {
            height: 1rem;
            cursor: pointer;
            float: right;
            color: #7f8084;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .loader--tabs {
            font-size: 4rem
        }

        .site-search {
            width: 100%;
            margin-top: 5rem
        }

        .site-search__header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            white-space: normal;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 3.5rem
        }

        @media (min-width:48rem) {
            .site-search__header {
                padding-left: 0
            }
        }

        .site-search__header-title {
            margin: 0;
            width: 100%
        }

        @media (min-width:80rem) {
            .site-search__header-title {
                width: 50%
            }
        }

        .site-search__text {
            margin: 0;
            color: #7f8084;
            display: none
        }

        @media (min-width:80rem) {
            .site-search__text {
                display: inline;
                width: 50%;
                text-align: right
            }
        }

        .site-search__results {
            padding-bottom: 5rem;
            border-bottom: 2px solid #bdbdbd;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .site-search__item {
            width: 100%;
            margin-top: 2.5rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .site-search__item:first-child {
            margin-top: 3.125rem
        }

        .site-search__icon {
            color: #29abe2;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-right: 1.25rem;
            width: 4rem
        }

        .site-search__link-text {
            margin: 0;
            display: inline
        }

        .site-search__description {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 1.25rem;
            margin-bottom: 0
        }

        .site-search__content {
            width: 100%;
            color: #7f8084;
            margin-bottom: auto
        }

        .site-search__paging {
            margin-top: 1.25rem;
            margin-bottom: 5rem
        }

        @media (min-width:48rem) {
            .site-search__paging {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }
        }

        .site-search__next-active {
            display: inline
        }

        .site-search__next {
            display: none
        }

        .site-search__prev-active {
            display: inline
        }

        .site-search__prev {
            display: none
        }

        .site-search__count {
            margin: 0;
            color: #333
        }

        .site-search__pagination {
            list-style: none;
            margin: 0
        }

        @media (min-width:0rem) {
            .site-search__pagination {
                display: inline;
                margin-left: -2.438rem
            }
        }

        @media (min-width:48rem) {
            .site-search__pagination {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-left: 0
            }
        }

        .site-search__page {
            padding: .313rem;
            display: inline
        }

        .site-search__page:last-child {
            padding-right: 0
        }

        .site-search__page-active {
            color: #333
        }

        [class*=--site-search] {
            color: #7f8084;
            font-size: 2.2rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 2.3rem;
            width: auto
        }

        .faq {
            margin-top: 3.125rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .faq .shown-filter {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            text-align: left;
            margin-top: -2px
        }

        .faq .shown-list {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            text-align: left;
            margin-top: -2px
        }

        @media (min-width:60rem) {
            .faq {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .icon-ClockScheduleHours1--faq,
        .icon-phone--faq {
            padding-right: 1.25rem;
            padding-top: .1875rem
        }

        .icon-ArrowUp2--faq-filter {
            height: 1rem;
            cursor: pointer;
            float: right;
            color: #29abe2
        }

        .icon-ArrowUp2--faq-list {
            height: 1rem;
            cursor: pointer;
            float: right;
            color: #29abe2;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .btn-default--faq-clear-all {
            margin-top: 2.5rem;
            width: 100%
        }

        .checkbox-group.checkbox-group--faq-filter {
            margin-bottom: 0
        }

        .checkbox-group.checkbox-group--faq-filter .faq-filter__span {
            padding: 0
        }

        .checkbox-group.checkbox-group--faq-filter .faq-filter__span:after {
            height: 1rem;
            width: 1rem;
            top: .125rem;
            background-position: 20% 0
        }

        .form-group__field-label--faq {
            margin-top: 1rem
        }

        .faq-header {
            border-bottom: .125rem solid #bdbdbd
        }

        .faq-header__title {
            margin-bottom: 0
        }

        .faq-header__content {
            margin-bottom: 3.125rem
        }

        .faq-header__description,
        .faq-header__member {
            color: #bdbdbd;
            margin-bottom: 1.875rem
        }

        .faq-header__clock,
        .faq-header__phone {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .faq-header__phone {
            color: #bdbdbd;
            margin-bottom: 1.875rem
        }

        .faq-header__clock {
            color: #bdbdbd;
            margin-bottom: 0
        }

        .faq-filter {
            width: 100%
        }

        @media (min-width:60rem) {
            .faq-filter {
                width: 25%;
                padding: .125rem 3.125rem 0 0;
                border-right: .125rem solid #e0e0e0;
                height: 100%
            }
        }

        .faq-filter__toggle {
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        @media (min-width:60rem) {
            .faq-filter__toggle {
                display: none
            }
        }

        .faq-filter__accordion {
            width: 100%
        }

        @media (min-width:60rem) {
            .faq-filter__accordion.collapse {
                display: inline-table
            }
        }

        .faq-filter__text-filter-title {
            margin: 0;
            color: #333;
            font-weight: 300;
            text-transform: capitalize;
            white-space: normal;
            letter-spacing: 0
        }

        .faq-filter__text {
            margin: 0;
            color: #333;
            font-weight: 300;
            text-transform: none;
            white-space: normal;
            padding-left: 1.25rem;
            letter-spacing: 0
        }

        .faq-filter__group {
            margin-top: 2.5rem
        }

        @media (min-width:60rem) {
            .faq-filter__group:first-child {
                margin-top: 0
            }
        }

        .faq-filter__title {
            color: #5d862e;
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1.25rem
        }

        @media (min-width:60rem) {
            .faq-list {
                width: 75%;
                padding-left: 3.125rem
            }
        }

        .faq-list__content {
            width: 100%
        }

        @media (min-width:60rem) {
            .faq-list__margin-top {
                margin-top: -3rem
            }
        }

        .faq-list__section {
            width: 100%;
            margin: 3rem 0
        }

        .faq-list__items {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
            margin-top: 0
        }

        .faq-list__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%
        }

        .faq-list__item:first-child {
            margin-top: -1.25rem
        }

        @media (min-width:60rem) {
            .faq-list__item:first-child {
                margin-top: -.625rem
            }
        }

        .faq-list__title {
            line-height: .9;
            margin-bottom: 2rem;
            font-weight: 400
        }

        @media (min-width:60rem) {
            .faq-list__title {
                margin-bottom: 1.5rem
            }
        }

        .faq-list__item-question {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
            margin-top: .5rem;
            cursor: pointer
        }

        .faq-list__item-question-text {
            font-weight: 300;
            color: #333;
            padding-right: 4.06rem;
            margin-bottom: .5rem;
            text-transform: none;
            letter-spacing: normal
        }

        .faq-list__item-answer-text {
            margin: .25rem 0 2rem;
            color: #7f8084;
            font-weight: 300
        }

        .faq-list__empty {
            display: none
        }

        @media only screen and (min-device-width:320px) and (max-device-width:736px) and (orientation:landscape) {
            .video__remodal-video {
                height: 65vh
            }
        }

        .remodal--video {
            width: 95%;
            padding: 3.125rem 1.25rem
        }

        .footer {
            background-color: #f0f0f0;
            border-top: 2px solid #e0e0e0
        }

        .footer__contain {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .footer__link-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:0rem) {
            .footer__link-container {
                width: 100%;
                margin-top: 2rem
            }
        }

        @media (min-width:48rem) {
            .footer__link-container {
                border-bottom: 2px solid #e0e0e0;
                padding-bottom: 2.1875rem;
                margin-top: 2.5rem
            }
        }

        @media (min-width:80rem) {
            .footer__link-container {
                width: 57%;
                border-bottom: none;
                border-right: 2px solid #e0e0e0
            }
        }

        .footer__group-links {
            margin: 0;
            display: block;
            padding-right: 5%;
            width: 100%
        }

        @media (min-width:48rem) {
            .footer__group-links {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .footer__disclaimer {
            width: 100%;
            padding-top: 2.8125rem
        }

        @media (min-width:48rem) {
            .footer__disclaimer {
                width: 70%;
                padding: 0
            }
        }

        .footer__disclaimer__message {
            width: 100%;
            height: 12rem;
            border: 2px solid #e0e0e0;
            padding: 10px;
            overflow-y: scroll
        }

        .footer__title {
            color: #333;
            width: 100%
        }

        @media (min-width:0rem) {
            .footer__title:nth-child(odd) {
                margin-bottom: 0
            }
        }

        @media (min-width:48rem) {
            .footer__title:nth-child(odd) {
                margin-bottom: .75rem
            }
        }

        .footer__link-subtitle {
            color: #7f8084;
            font-weight: 600
        }

        @media (min-width:0rem) {
            .footer__link-subtitle {
                margin-bottom: 0
            }
        }

        @media (min-width:48rem) {
            .footer__link-subtitle {
                margin-bottom: 1rem
            }
        }

        .footer__listing {
            padding-left: 0;
            margin: 0
        }

        .footer__group-links-item {
            list-style-type: none
        }

        @media (min-width:0rem) {
            .footer__group-links-item {
                padding-top: 1rem;
                padding-bottom: 5px;
                margin: 0
            }
        }

        @media (min-width:48rem) {
            .footer__group-links-item {
                padding-top: 0
            }
        }

        @media (min-width:0rem) {
            .footer__nav-rte:nth-child(1) {
                width: 100%;
                padding-top: 1.875rem
            }
        }

        @media (min-width:48rem) {
            .footer__nav-rte:nth-child(1) {
                width: 30%;
                padding-top: 0
            }
        }

        @media (min-width:0rem) {
            .footer__nav-rte:nth-child(2) {
                width: 100%;
                padding-top: 2.8125rem
            }
        }

        @media (min-width:48rem) {
            .footer__nav-rte:nth-child(2) {
                width: 45%;
                padding-top: 0;
                padding: 0 7%
            }
        }

        @media (min-width:60rem) {
            .footer__nav-rte:nth-child(2) {
                padding: 0
            }
        }

        @media (min-width:80rem) {
            .footer__nav-rte:nth-child(2) {
                padding-left: 4%
            }
        }

        @media (min-width:87.5rem) {
            .footer__nav-rte:nth-child(2) {
                padding: 0
            }
        }

        @media (min-width:0rem) {
            .footer__nav-rte:nth-child(3) {
                width: 100%;
                padding-top: 2.5rem
            }
        }

        @media (min-width:48rem) {
            .footer__nav-rte:nth-child(3) {
                width: 25%;
                padding-top: 0
            }
        }

        .footer__contact-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:0rem) {
            .footer__contact-container {
                width: 100%;
                padding-top: 4.375rem
            }
        }

        @media (min-width:48rem) {
            .footer__contact-container {
                padding-top: 2.5rem
            }
        }

        @media (min-width:80rem) {
            .footer__contact-container {
                width: 43%
            }
        }

        @media (min-width:48rem) {
            .footer__contact-us {
                width: 100%
            }
        }

        @media (min-width:80rem) {
            .footer__contact-us {
                margin-left: 5%
            }
        }

        .footer__locations-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-top: 2rem
        }

        @media (min-width:48rem) {
            .footer__locations-container {
                padding-top: 0
            }
        }

        @media (min-width:48rem) {
            .footer__locations {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .footer__location {
            padding-left: 2rem;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            white-space: nowrap;
            vertical-align: top
        }

        .footer__location:not(:first-child) {
            padding-top: 2.8125rem
        }

        @media (min-width:48rem) {
            .footer__location:not(:first-child) {
                padding-top: 0
            }
        }

        .footer__location-name {
            color: #7f8084;
            font-weight: 700;
            margin: 0
        }

        .footer__address {
            margin-bottom: 0
        }

        .footer__phone {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (min-width:0rem) {
            .footer__phone {
                padding-top: 2.1875rem;
                padding-bottom: 2.5rem
            }
        }

        @media (min-width:48rem) {
            .footer__phone {
                padding-bottom: 0;
                padding-top: 1rem
            }
        }

        .footer__call-us {
            padding-left: 1.875rem;
            width: 44%;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            vertical-align: middle;
            white-space: nowrap
        }

        .footer__call-content {
            color: #7f8084;
            font-weight: 700;
            margin-bottom: 0
        }

        .footer--text-bold {
            font-weight: 700
        }

        .footer__copyright-socialmedia {
            width: 100%;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-top: 2px solid #e0e0e0;
            border-bottom: 2px solid #e0e0e0
        }

        @media (min-width:0rem) {
            .footer__copyright-socialmedia {
                margin-top: 0
            }
        }

        @media (min-width:48rem) {
            .footer__copyright-socialmedia {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-top: 2.5rem;
                padding: .5rem 0
            }
        }

        .footer__copyright-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        @media (min-width:0rem) {
            .footer__copyright-wrapper {
                padding-top: 2.5rem;
                text-align: center
            }
        }

        @media (min-width:48rem) {
            .footer__copyright-wrapper {
                padding-top: 0;
                text-align: none
            }
        }

        .footer__copyright {
            margin-bottom: 0
        }

        @media (min-width:0rem) {
            .footer__social-media {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 2rem;
                padding-bottom: 3.125rem
            }
        }

        @media (min-width:48rem) {
            .footer__social-media {
                padding-top: 0;
                padding-bottom: 0
            }
        }

        .footer__social-media-listing {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            margin: 0
        }

        .footer__social-media-item {
            list-style-type: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .footer__social-media-item:hover [class$="--footer"] {
            color: #bdbdbd
        }

        .footer__anchor {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .footer__anchor [class$="--footer"] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .footer__language {
            width: 100%;
            padding: .25rem 0
        }

        .footer__language-item {
            list-style-type: none;
            display: inline;
            border-right: 2px solid #e0e0e0;
            padding: .25rem 0;
            line-height: 40px
        }

        .footer__language-item:last-child {
            border-right: none
        }

        .footer__language-anchor {
            padding: .375rem;
            white-space: pre
        }

        .icon-Building-Light--footer {
            padding-top: 2.8125rem;
            display: inline;
            font-size: 1.875rem;
            color: #5d862e
        }

        @media (min-width:48rem) {
            .icon-Building-Light--footer {
                padding-top: 0
            }
        }

        .icon-CallCenter-Dark--footer {
            font-size: 1.875rem;
            color: #5d862e
        }

        .icon-facebook--footer {
            font-size: 1.5rem;
            color: #7f8084;
            padding-right: .375rem
        }

        .icon-Instagram--footer,
        .icon-Pinterest1--footer,
        .icon-Youtube--footer,
        .icon-linkedin--footer,
        .icon-twitter--footer {
            font-size: 1.5rem;
            color: #7f8084;
            padding-right: .8rem
        }

        .text-align {
            margin-top: 0
        }

        .plans-tables {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 3.75rem
        }

        .plans-table {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .plans-table__row {
            width: 100%
        }

        @media (min-width:48rem) {
            .plans-table__row {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
        }

        .plans-table__row--header {
            display: none
        }

        @media (min-width:48rem) {
            .plans-table__row--header {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                background-color: #f0f0f0;
                border-top: .125rem solid #e0e0e0;
                border-bottom: .125rem solid #e0e0e0
            }
        }

        .plans-table__row--body {
            border-bottom: .125rem solid #e0e0e0
        }

        @media (min-width:48rem) {
            .plans-table__row--body {
                border-bottom-style: none
            }
        }

        .plans-table__row.collapse.in {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:48rem) {
            .plans-table__row.collapse.in {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        @media (min-width:48rem) {
            .plans-table__row:nth-last-of-type(1) .plans-table__body-wrapper {
                width: 100%;
                padding-left: 5%;
                padding-right: 5%
            }
        }

        .plans-table__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .plans-table__item:before {
            content: attr(data-header);
            width: 50%;
            text-align: left;
            padding: 1.563rem 1.25rem 1.563rem .625rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            font-size: 1rem;
            font-weight: 700;
            word-wrap: break-word
        }

        @media (min-width:48rem) {
            .plans-table__item {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .plans-table__item:nth-child(odd) {
                border-left-style: none;
                border-bottom-style: none;
                border-right: .125rem solid #e0e0e0
            }

            .plans-table__item:nth-child(even) {
                border-left-style: none;
                border-right-style: none
            }

            .plans-table__item:before {
                content: none
            }
        }

        .plans-table__item--header-left {
            text-align: left;
            padding: 1.563rem 1.563rem .9375rem 1.563rem
        }

        .plans-table__item--header-center {
            text-align: center;
            padding: 1.563rem 1.563rem .9375rem 1.563rem
        }

        .plans-table__item--header-right {
            text-align: right;
            padding: 1.563rem 1.563rem .9375rem 1.563rem
        }

        .plans-table__item--body {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .plans-table__body-wrapper {
            padding-top: 1.563rem;
            padding-bottom: 1.563rem;
            text-align: center;
            width: 50%;
            font-weight: 700;
            height: 100%
        }

        @media (min-width:48rem) {
            .plans-table__body-wrapper {
                width: 90%;
                font-weight: 400;
                border-bottom: .125rem solid #e0e0e0
            }
        }

        .plans-table__header-title {
            color: #333;
            margin: 0
        }

        .plans-table__header-description {
            color: #7f8084
        }

        .plans-table__body-title {
            color: #5d862e;
            margin: 0;
            font-weight: 700
        }

        .plans-table__subtitle {
            color: #333;
            font-weight: 700
        }

        .plans-table__detail {
            margin: 0;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 400;
            color: #7f8084
        }

        .plans-table__sub-detail {
            margin: 0;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 400;
            color: #333;
            white-space: normal
        }

        .plans-table-toggle {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            cursor: pointer;
            padding-left: .3125rem;
            padding-right: .3125rem;
            border-bottom: .125rem solid #e0e0e0
        }

        @media (min-width:48rem) {
            .plans-table-toggle {
                display: none
            }
        }

        .icon-ArrowUp2--table {
            height: 1rem;
            cursor: pointer;
            float: right;
            color: #29abe2;
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            margin-top: 5px
        }

        .shown--plans-table-arrow {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            text-align: left
        }

        .plans-table__header {
            text-align: center;
            padding: .75rem;
            width: 100%;
            display: block
        }

        .sliding-banner__container {
            min-height: auto;
            background-color: #f0f0f0
        }

        .sliding-banner__container--green {
            background-image: url("/assets/org/selecthealth-content/GreenBack-Texture.svg");
            background-color: #5d862e
        }

        .sliding-banner__container--gray {
            background-image: none;
            background-color: #f0f0f0
        }

        .sliding-banner__loader {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #fff;
            z-index: 101
        }

        .loader--sliding-banner {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            background-color: #fff;
            border-top-width: .5em;
            border-right-width: .5em;
            border-left-width: .5em;
            border-bottom-width: .5em;
            -webkit-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease
        }

        .loader--sliding-banner,
        .loader--sliding-banner:after {
            height: 5rem;
            width: 5rem
        }

        .sliding-banner__carousel {
            position: relative
        }

        .sliding-banner__carousel .flickity-prev-next-button {
            display: none
        }

        .sliding-banner__carousel .flickity-page-dots {
            bottom: 20px;
            color: #fff
        }

        @media (min-width:64rem) {
            .sliding-banner__carousel .flickity-page-dots {
                padding-left: 85%
            }
        }

        .sliding-banner__carousel .flickity-page-dots .dot {
            width: 20px;
            height: 20px;
            opacity: 1;
            background: 0 0;
            border: 2px solid #bdbdbd
        }

        @media (min-width:64rem) {
            .sliding-banner__carousel .flickity-page-dots .dot {
                width: 12px;
                height: 12px
            }
        }

        .sliding-banner__carousel .flickity-page-dots .dot.is-selected {
            background: #e0e0e0
        }

        .sliding-banner {
            width: 100%;
            min-height: 100%;
            border: none;
            overflow: hidden;
            position: absolute;
            left: 0;
            visibility: hidden
        }

        .sliding-banner:first-child {
            position: relative;
            top: 0;
            left: 0;
            visibility: visible
        }

        @media (min-width:64rem) {
            .sliding-banner {
                min-height: 0
            }
        }

        .sliding-banner__wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: 30px;
            overflow: hidden
        }

        @media (min-width:64rem) {
            .sliding-banner__wrapper {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-pack: distribute;
                justify-content: space-around
            }
        }

        @media (min-width:100rem) {
            .sliding-banner__wrapper {
                margin-bottom: 70px
            }
        }

        .sliding-banner__image {
            border: 3px solid #bdbdbd;
            border-radius: 50%;
            width: 70%;
            height: auto;
            min-height: 1px
        }

        @media (min-width:40rem) {
            .sliding-banner__image {
                width: 40%;
                margin: 20px 0
            }
        }

        @media (min-width:64rem) {
            .sliding-banner__image {
                width: 28%;
                height: 20%;
                margin: 80px 0 120px 40px
            }
        }

        @media (min-width:80rem) {
            .sliding-banner__image {
                margin: 80px 0 80px 40px
            }
        }

        @media (min-width:100rem) {
            .sliding-banner__image {
                width: 25%;
                margin: 30px 50px 30px 50px
            }
        }

        .sliding-banner__content {
            text-align: left;
            font-weight: 300;
            width: 100%
        }

        @media (min-width:64rem) {
            .sliding-banner__content {
                width: 60%
            }
        }

        @media (min-width:100rem) {
            .sliding-banner__content {
                width: 60%
            }
        }

        .sliding-banner__title {
            color: #5d862e;
            padding: 20px 0;
            font-weight: 400;
            text-align: center
        }

        @media (min-width:40rem) {
            .sliding-banner__title {
                text-align: left
            }
        }

        .sliding-banner__title h2 {
            font-size: 3rem
        }

        .sliding-banner__description h3 {
            width: 100%;
            word-break: normal;
            white-space: normal;
            font-size: 1.3125rem
        }

        @media (min-width:48rem) {
            .sliding-banner__description h3 {
                font-size: 1.75rem
            }
        }

        @media (min-width:80rem) {
            .sliding-banner__description h3 {
                font-size: 1.875rem
            }
        }

        .sliding-banner__detail {
            width: 100%;
            word-break: normal;
            white-space: normal;
            font-size: 1.3125rem
        }

        @media (min-width:48rem) {
            .sliding-banner__detail {
                font-size: 1.375rem
            }
        }

        @media (min-width:80rem) {
            .sliding-banner__detail {
                font-size: 1.5rem
            }
        }

        .sliding-banner__app-links {
            display: block;
            padding-bottom: 15px
        }

        .sliding-banner__app-links img {
            border-radius: 12px;
            width: 100px;
            margin-right: 20px
        }

        @media (min-width:40rem) {
            .sliding-banner__app-links img {
                width: 140px
            }
        }

        @media (min-width:48rem) {
            .sliding-banner__app-links img {
                width: 165px
            }
        }

        @media (min-width:100rem) {
            .sliding-banner__app-links img {
                width: 250px;
                margin-right: 35px
            }
        }

        .sliding-banner__container--green .sliding-banner__image {
            border: 3px solid #fff
        }

        .sliding-banner__container--green .sliding-banner__description,
        .sliding-banner__container--green .sliding-banner__description a,
        .sliding-banner__container--green .sliding-banner__description p,
        .sliding-banner__container--green .sliding-banner__detail li,
        .sliding-banner__container--green .sliding-banner__title {
            color: #fff
        }

        .sliding-banner__container--green .sliding-banner__description a {
            text-decoration: underline;
            font-weight: 400
        }

        .sliding-banner__container--gray .sliding-banner__description,
        .sliding-banner__container--gray .sliding-banner__description p,
        .sliding-banner__container--gray .sliding-banner__detail li {
            color: #333
        }

        .registration-form__header-body {
            color: #7f8084
        }

        .registration-form__section {
            margin-top: 3.125rem
        }

        .registration-form__submit-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -ms-flex-wrap: wrap-reverse;
            flex-wrap: wrap-reverse;
            width: 100%
        }

        .registration-form__error-message {
            display: none;
            color: #eb7425;
            font-size: .6875rem;
            font-weight: 400;
            width: 100%
        }

        @media (min-width:48rem) {
            .registration-form__error-message {
                width: 44%;
                margin-right: 5%
            }
        }

        .registration-form .invalid {
            border: .125rem solid #eb7425
        }

        .form-group--registration {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%
        }

        .field-label-registration {
            width: 100%;
            cursor: pointer
        }

        @media (min-width:48rem) {
            .field-label-registration {
                width: 49%
            }
        }

        @media (min-width:64rem) {
            .field-label-registration {
                width: auto
            }
        }

        @media (min-width:48rem) {
            .field-label-registration--private-school {
                margin-right: 1%
            }
        }

        .field-label-registration--prev-participated {
            margin-top: 4%
        }

        @media (min-width:48rem) {
            .field-label-registration--prev-participated {
                margin-left: 1%;
                margin-top: 0
            }
        }

        .field-label-registration--number-students-participating {
            width: 100%
        }

        .field-label-registration--number-students-participating-english-and-spanish {
            width: auto;
            margin-top: 18px;
            color: #7f8084;
            margin-left: 10px
        }

        .field-label-registration--add-class {
            width: auto;
            padding-left: .9375rem
        }

        .field-label-registration--wrapper-title {
            width: 100%;
            margin-bottom: .625rem
        }

        .field-label-registration--billboard,
        .field-label-registration--email,
        .field-label-registration--mailing,
        .field-label-registration--past-participant {
            margin-top: 1.25rem;
            margin-right: 2%
        }

        @media (min-width:48rem) {

            .field-label-registration--billboard,
            .field-label-registration--email,
            .field-label-registration--mailing,
            .field-label-registration--past-participant {
                margin-top: .5rem
            }
        }

        .field-label-registration--past-participant {
            color: #7f8084
        }

        @media (min-width:64rem) {
            .field-label-registration--past-participant {
                width: auto
            }
        }

        .field-label-registration--mailing {
            color: #7f8084;
            margin-left: 0
        }

        @media (min-width:64rem) {
            .field-label-registration--mailing {
                width: auto;
                margin-left: 0
            }
        }

        @media (min-width:87.5rem) {
            .field-label-registration--mailing {
                width: auto
            }
        }

        .field-label-registration--email {
            color: #7f8084;
            margin-left: 0
        }

        @media (min-width:64rem) {
            .field-label-registration--email {
                width: auto;
                margin-left: 0
            }
        }

        @media (min-width:87.5rem) {
            .field-label-registration--email {
                width: auto
            }
        }

        .field-label-registration--billboard {
            color: #7f8084
        }

        @media (min-width:64rem) {
            .field-label-registration--billboard {
                width: auto
            }
        }

        .field-label-registration--other {
            width: auto;
            color: #7f8084;
            margin-top: 1.063rem;
            margin-right: .625rem
        }

        .input-group--registration {
            width: 100%
        }

        @media (min-width:48rem) {
            .input-group--registration {
                width: 49%
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__school-name {
                margin-right: 1%
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__district {
                margin-left: 1%
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__school-address {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__school-address {
                width: 49%;
                margin-top: 1rem
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__city {
                margin-left: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__city {
                width: 23.5%;
                margin-right: 1%;
                margin-top: 1rem
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__zip {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__zip {
                width: 23.5%;
                margin-top: 1rem
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__school-phone-number {
                margin-left: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__school-phone-number {
                width: 25%;
                margin-left: 0;
                margin-top: 1rem
            }
        }

        .input-group--registration.input-group__principals-name {
            margin-top: -.8rem
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__principals-name {
                margin-right: 1%;
                margin-top: -.8
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__principals-name {
                margin-top: 0;
                width: 28%;
                margin-right: 1%
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__principals-email {
                margin-left: 1%;
                margin-top: -.8rem
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__principals-email {
                margin-top: 0;
                width: 28%;
                margin-right: 1%
            }
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__lesson-plan {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__lesson-plan {
                width: 40%;
                margin-left: 1%;
                margin-right: 0
            }
        }

        .input-group--registration.input-group__teacher-name {
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__teacher-name {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__teacher-name {
                width: 25%
            }
        }

        .input-group--registration.input-group__teacher-email {
            margin-left: 0;
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__teacher-email {
                margin-left: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__teacher-email {
                width: 25%;
                margin-right: 1%
            }
        }

        .input-group--registration.input-group__number-students-participating {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-left: 0;
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__number-students-participating {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__number-students-participating {
                width: 28%;
                margin-left: 1%;
                margin-right: 0
            }
        }

        .input-group--registration.input-group__pe-specialist-name-fieldset {
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__pe-specialist-name-fieldset {
                margin-right: 1%
            }
        }

        .input-group--registration.input-group__pe-specialist-email-fieldset {
            margin-left: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__pe-specialist-email-fieldset {
                margin-left: 1%
            }
        }

        .input-group--registration.input-group__name-person-submitting {
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__name-person-submitting {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__name-person-submitting {
                width: 37%;
                white-space: nowrap
            }
        }

        .input-group--registration.input-group__phone-number {
            margin-left: 0;
            margin-right: 0;
            margin-top: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__phone-number {
                margin-left: 1%;
                margin-top: 1.375rem
            }
        }

        @media (min-width:60rem) {
            .input-group--registration.input-group__phone-number {
                margin-top: 0
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__phone-number {
                width: 29.5%;
                margin-right: 1%
            }
        }

        .input-group--registration.input-group__person-submitting-email {
            margin-left: 0;
            margin-right: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__person-submitting-email {
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .input-group--registration.input-group__person-submitting-email {
                width: 29.5%;
                margin-left: 1%;
                margin-right: 0
            }
        }

        .input-group--registration.input-group__other {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            width: 100%;
            margin-top: 0
        }

        @media (min-width:48rem) {
            .input-group--registration.input-group__other {
                width: 100%
            }
        }

        .input-group--registration.input-registration {
            width: 100%
        }

        .input-group--registration.input-registration--english {
            min-width: 50px;
            width: 50px
        }

        .input-group--registration.input-registration--spanish {
            min-width: 50px;
            width: 50px;
            margin-left: 20px
        }

        .input-group--registration.input-registration--lesson-plan {
            width: 100%
        }

        @media (min-width:64rem) {
            .input-group--registration.input-registration--lesson-plan {
                min-width: 50px;
                width: 50px
            }
        }

        .select-group-registration.select-group {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
            margin-top: -.1%
        }

        @media (min-width:48rem) {
            .select-group-registration.select-group {
                width: 49%;
                margin-right: 1%
            }
        }

        @media (min-width:64rem) {
            .select-group-registration.select-group {
                width: 18%;
                margin-left: 1%;
                margin-top: 1rem
            }
        }

        .multipleselect--state {
            margin-bottom: .1rem
        }

        .multipleselect--state .ms-choice {
            color: #999;
            border-radius: .3125rem
        }

        .checkbox-group.checkbox-group--private-school-prev-participated {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin-top: .3125rem;
            padding-left: 0
        }

        @media (min-width:64rem) {
            .checkbox-group.checkbox-group--private-school-prev-participated {
                width: 72%;
                margin-top: 2.875rem;
                padding-left: 6%
            }
        }

        .checkbox-group.checkbox-group--past-participant-mailing-email {
            margin-bottom: .25rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .class-information-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            width: 100%
        }

        .class-information-row__add-class-group,
        .class-information-row__remove-class-group {
            width: auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            cursor: pointer
        }

        @media (min-width:48rem) {

            .class-information-row__add-class-group,
            .class-information-row__remove-class-group {
                margin-top: 1.75rem
            }
        }

        @media (min-width:64rem) {

            .class-information-row__add-class-group,
            .class-information-row__remove-class-group {
                width: auto;
                margin-top: 0
            }
        }

        @media (min-width:48rem) {
            .class-information-row__remove-class-group {
                margin-left: 1%
            }
        }

        .class-information-row__button-label-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: .45rem
        }

        .icon-Add-Remove--registration {
            color: #29abe2;
            font-size: 2.188rem;
            line-height: 1
        }

        .fieldset-registration {
            width: 100%;
            margin-top: 2.5rem;
            margin-bottom: 1.875rem;
            padding-top: .35rem;
            padding-bottom: .625em;
            padding-left: 1.875rem;
            padding-right: 1.875rem;
            border: .125rem solid #bdbdbd;
            border-radius: .3125rem
        }

        .fieldset-registration__legend {
            margin-left: 1.25rem;
            color: #7f8084;
            padding-left: .625rem;
            padding-right: .625rem;
            font-size: 1.313rem;
            background: #fff
        }

        .fieldset-registration>.fieldset-registration__legend {
            float: left;
            margin-top: -1.25rem
        }

        .fieldset-registration>.fieldset-registration__legend+* {
            clear: both
        }

        .fieldset-registration__wrapper {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .checkboxes-input-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin-top: 1.25rem
        }

        .checkboxes-input-wrapper__checkboxes-wrapper {
            width: 100%
        }

        .checkboxes-input-wrapper__input-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .textarea-group-registration.textarea-group {
            width: 100%
        }

        .textarea-group-registration__field {
            width: 100%
        }

        [data-form=newsletter] .form-group-contain {
            width: 100%
        }

        @media (min-width:48rem) {
            [data-form=newsletter] .form-group-contain {
                width: 50%
            }
        }

        @media (min-width:64rem) {
            [data-form=newsletter] .form-group-contain {
                width: 35%
            }
        }

        [data-form=newsletter] .radio-format {
            margin-right: 50px
        }

        [data-form=newsletter] .input__text-newsletter {
            width: 100%
        }

        [data-form=newsletter] .btn-subscribe-contain {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media (min-width:48rem) {
            [data-form=newsletter] .btn-subscribe-contain {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between
            }
        }

        [data-form=newsletter] .btn-subscribe {
            width: 100%;
            margin-top: 10px;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        @media (min-width:48rem) {
            [data-form=newsletter] .btn-subscribe {
                width: 35%;
                -ms-flex-item-align: end;
                align-self: flex-end;
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2
            }
        }

        [data-form=newsletter] .required-contain {
            width: 100%;
            font-size: .8rem;
            color: #7f8084;
            margin-top: -15px
        }

        [data-form=newsletter] .error__list {
            margin: .5rem
        }

        [data-form=newsletter] .error__item {
            color: #eb7425
        }

        .select-25 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .select-25__filter {
            height: 100%;
            width: 100%
        }

        @media (min-width:48rem) {
            .select-25__filter {
                width: 25%;
                border-right: .125rem solid #e0e0e0;
                padding: .125rem 3.125rem 0 0
            }
        }

        .select-25__toggle {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 1.5rem;
            cursor: pointer
        }

        @media (min-width:48rem) {
            .select-25__toggle {
                display: none
            }
        }

        .select-25__toggle .shown {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            text-align: left
        }

        .select-25__filter-text {
            margin: 0;
            color: #333;
            font-weight: 700;
            text-transform: capitalize
        }

        .select-25__text {
            margin: 0;
            color: #333;
            font-weight: 300;
            text-transform: capitalize;
            white-space: normal;
            padding-left: 1.25rem;
            letter-spacing: 0
        }

        .select-25__accordion {
            width: 100%
        }

        @media (min-width:48rem) {
            .select-25__accordion.collapse {
                display: inline-table
            }
        }

        .select-25__subtitle-text {
            margin: 0;
            color: #333;
            text-transform: capitalize
        }

        .select-25__group {
            margin-top: 2.5rem
        }

        @media (min-width:48rem) {
            .select-25__group:first-child {
                margin-top: 0
            }
        }

        .select-25__section {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            margin-top: 2.5rem
        }

        @media (min-width:60rem) {
            .select-25__section {
                margin-top: 0
            }
        }

        .select-25__title {
            width: 100%;
            margin-bottom: 1.25rem;
            color: #5d862e;
            font-weight: 700;
            border-bottom: 2px solid #e0e0e0
        }

        .select-25__sub-title {
            width: 100%;
            margin-bottom: 1.25rem;
            color: #5d862e;
            font-weight: 700
        }

        .select-25__card {
            width: 100%;
            display: block
        }

        @media (min-width:48rem) {
            .select-25__card {
                width: 44%;
                margin-right: 3%;
                margin-bottom: 2.5rem;
                border-bottom: 2px solid #e0e0e0
            }
        }

        @media (min-width:64rem) {
            .select-25__card {
                width: 30%
            }
        }

        .select-25__card::nth-last-of-type {
            margin-right: 0
        }

        .select-25__card-img {
            width: 100%;
            display: none
        }

        @media (min-width:48rem) {
            .select-25__card-img {
                display: block;
                width: 18.75rem;
                margin-right: 1.875rem;
                border-bottom: 2px solid #e0e0e0
            }
        }

        .select-25__card-title {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (min-width:48rem) {
            .select-25__card-title {
                padding-top: 1.5625rem
            }
        }

        .select-25__card-text {
            padding-bottom: 1.875rem
        }

        @media (min-width:48rem) {
            .select-25__card-text {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding-bottom: 3.125rem
            }
        }

        .select-25__content {
            width: 100%
        }

        @media (min-width:48rem) {
            .select-25__content {
                width: 75%;
                padding-left: 2.313rem
            }
        }

        .btn-default--select-25-clear-all {
            margin-top: 2.5rem;
            margin-bottom: 3.125rem;
            width: 100%
        }

        @media (min-width:60rem) {
            .btn-default--select-25-clear-all {
                margin-bottom: 8.125rem
            }
        }

        .icon-ArrowUp2--select-25 {
            -webkit-transition: -webkit-transform .4s ease;
            transition: -webkit-transform .4s ease;
            -o-transition: transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            cursor: pointer;
            color: #29abe2
        }

        .checkbox-group.checkbox-group--select-25 {
            margin-bottom: 0
        }

        .checkbox-group.checkbox-group--select-25 .select-25__span {
            padding: 0
        }

        .checkbox-group.checkbox-group--select-25 .select-25__span:after {
            height: 1rem;
            width: 1rem;
            top: .125rem;
            background-position: 20% 0
        }

        .form-group__field-label--select-25 {
            margin-top: 1rem
        }

        .information-kit__header-body {
            color: #7f8084
        }

        .information-kit__section {
            margin-top: 3.125rem
        }

        .information-kit__submit-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -ms-flex-wrap: wrap-reverse;
            flex-wrap: wrap-reverse;
            width: 100%
        }

        .information-kit__error-message {
            display: none;
            color: #eb7425;
            font-size: .6875rem;
            font-weight: 400;
            width: 100%
        }

        @media (min-width:48rem) {
            .information-kit__error-message {
                width: 44%;
                margin-right: 5%
            }
        }

        .information-kit .invalid {
            border: .125rem solid #eb7425
        }

        .form-group--information-kit {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .input-group--information-kit.input-group {
            width: 100%
        }

        .input-group--information-kit.input-group__first-name {
            width: 100%
        }

        @media (min-width:60rem) {
            .input-group--information-kit.input-group__first-name {
                width: 48%;
                margin-right: 2%
            }
        }

        .input-group--information-kit.input-group__last-name {
            width: 100%
        }

        @media (min-width:60rem) {
            .input-group--information-kit.input-group__last-name {
                width: 48%;
                margin-left: 2%
            }
        }

        .input-group--information-kit.input-group__street-address {
            width: 100%
        }

        .input-group--information-kit.input-group__city {
            width: 100%
        }

        @media (min-width:60rem) {
            .input-group--information-kit.input-group__city {
                width: 38%;
                margin-right: 2%
            }
        }

        .input-group--information-kit.input-group__state {
            width: 100%
        }

        @media (min-width:60rem) {
            .input-group--information-kit.input-group__state {
                width: 26%;
                margin-right: 2%;
                margin-left: 2%
            }

            .input-group--information-kit.input-group__state input {
                min-width: auto
            }
        }

        .input-group--information-kit.input-group__zip {
            width: 100%
        }

        @media (min-width:60rem) {
            .input-group--information-kit.input-group__zip {
                width: 28%;
                margin-left: 2%
            }

            .input-group--information-kit.input-group__zip input {
                min-width: auto
            }
        }

        .field-label-information-kit {
            width: 100%;
            cursor: pointer
        }

        @media (min-width:48rem) {
            .field-label-information-kit {
                width: 49%
            }
        }

        @media (min-width:64rem) {
            .field-label-information-kit {
                width: auto
            }
        }

        .multipleselect--state {
            border-radius: 5px;
            margin-bottom: .1rem;
            background: #fff
        }

        .multipleselect--state .ms-choice {
            color: #999;
            border-radius: .3125rem
        }

        .input-information-kit {
            width: 100%
        }

        .btn-primary--information-kit-submit {
            width: 100%
        }

        @media (min-width:60rem) {
            .btn-primary--information-kit-submit {
                width: 45%
            }
        }

        @media (min-width:64rem) {
            .btn-primary--information-kit-submit {
                width: 50%
            }
        }

        /*# sourceMappingURL=selecthealth.css.map */

    </style>
</head>

<body class="loading">
    <div class="error-502__container">
        <div class="error-502">
            <div class="error-502__text">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="gears">
        <div class="gear one">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="gear two">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="gear three">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script>
        $(function() {
            setTimeout(function() {
                $('body').removeClass('loading');
            }, 1000);
        });

    </script>
</body>

</html>