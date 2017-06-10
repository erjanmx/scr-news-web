<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <title>НК</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/logo-120.png">
    <link rel="shortcut icon" sizes="48x48" href="/public/logo-48.png">
    <meta name="theme-color" content="#f60">
    <link rel="manifest" href="/manifest.json">
    <style>
        #skip a {
            position: absolute;
            left: -10000px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }

        #skip a:focus {
            position: static;
            width: auto;
            height: auto;
        }
    </style>
    <style data-vue-ssr-id="336e1da2:0">
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            font-size: 15px;
            background-color: #f2f3f5;
            margin: 0;
            padding-top: 55px;
            color: #34495e;
            overflow-y: scroll;
        }

        a {
            color: #34495e;
            text-decoration: none;
        }

        .header {
            background-color: #f60;
            position: fixed;
            z-index: 999;
            height: 55px;
            top: 0;
            left: 0;
            right: 0;
        }

        .header .inner {
            max-width: 800px;
            box-sizing: border-box;
            margin: 0px auto;
            padding: 15px 5px;
        }

        .header a {
            color: rgba(255, 255, 255, 0.8);
            line-height: 24px;
            transition: color 0.15s ease;
            display: inline-block;
            vertical-align: middle;
            font-weight: 300;
            letter-spacing: 0.075em;
            margin-right: 1.8em;
        }

        .header a:hover {
            color: #fff;
        }

        .header a.router-link-active {
            color: #fff;
            font-weight: 400;
        }

        .header a:nth-child(6) {
            margin-right: 0;
        }

        .header .github {
            color: #fff;
            font-size: 0.9em;
            margin: 0;
            float: right;
        }

        .logo {
            width: 24px;
            margin-right: 10px;
            display: inline-block;
            vertical-align: middle;
        }

        .view {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .fade-enter-active,
        .fade-leave-active {
            transition: all 0.2s ease;
        }

        .fade-enter,
        .fade-leave-active {
            opacity: 0;
        }

        @media (max-width: 860px) {
            .header .inner {
                padding: 15px 30px;
            }
        }

        @media (max-width: 600px) {
            .header .inner {
                padding: 15px;
            }

            .header a {
                margin-right: 1em;
            }

            .header .github {
                display: none;
            }
        }
    </style>
    <style data-vue-ssr-id="1920cfc6:0">
        .news-list-nav,
        .news-list {
            background-color: #fff;
            border-radius: 2px;
        }

        .news-list-nav {
            padding: 15px 30px;
            position: fixed;
            text-align: center;
            top: 55px;
            left: 0;
            right: 0;
            z-index: 998;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .news-list-nav a {
            margin: 0 1em;
        }

        .news-list-nav .disabled {
            color: #ccc;
        }

        .news-list {
            position: absolute;
            margin: 30px 0;
            width: 100%;
            transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
        }

        .news-list ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .slide-left-enter,
        .slide-right-leave-to {
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        .slide-left-leave-to,
        .slide-right-enter {
            opacity: 0;
            -ms-transform: translate(-30px, 0);
            transform: translate(-30px, 0);
        }

        .item-move,
        .item-enter-active,
        .item-leave-active {
            transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
        }

        .item-enter {
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        .item-leave-active {
            position: absolute;
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        @media (max-width: 600px) {
            .news-list {
                margin: 10px 0;
            }
        }
    </style>
    <style data-vue-ssr-id="7b5c9bfb:0">
        .news-item {
            background-color: #fff;
            padding: 20px 30px 20px 80px;
            border-bottom: 1px solid #eee;
            position: relative;
            line-height: 20px;
        }

        .news-item .score {
            color: #f60;
            font-size: 1.1em;
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 0;
            width: 80px;
            text-align: center;
            margin-top: -10px;
        }

        .news-item .meta,
        .news-item .host {
            font-size: 0.85em;
            color: #828282;
        }

        .news-item .meta a,
        .news-item .host a {
            color: #828282;
            text-decoration: underline;
        }

        .news-item .meta a:hover,
        .news-item .host a:hover {
            color: #f60;
        }
        .refresh {
            float: right;
        }
        .anchor {
            cursor: pointer;
        }
        .li-div {
            padding: 15px;
        }

        .button {
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: white;
            color: black;
            border: 2px solid #f60;
        }

        .button-more {
            width: 75%;
            margin-left: 15%;
            padding: 15px 32px;
        }

        .button-modal {
            height: 30px;
        }

        .show-modal-bar {
        }

        [v-cloak] {
            display: none;
        }

        @-webkit-keyframes uil-ring-anim {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-moz-keyframes uil-ring-anim {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-webkit-keyframes uil-ring-anim {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-o-keyframes uil-ring-anim {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes uil-ring-anim {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .uil-ring-css {
            background: none;
            position: relative;
            left: -24px;
            top: -12px;
        }
        .uil-ring-css > div {
            position: absolute;
            display: block;
            width: 160px;
            height: 160px;
            top: 20px;
            left: 22px;
            border-radius: 80px;
            box-shadow: 0 3px 0 0 #59ebff;
            -webkit-transform-origin: 80px 81.5px;
            transform-origin: 80px 81.5px;
        }
        .uil-ring-animate-css > div {
            -webkit-animation: uil-ring-anim 1s linear infinite;
            animation: uil-ring-anim 1s linear infinite;
        }
        * {
            box-sizing: border-box;
        }

        .modal-mask {
            position: fixed;
            z-index: 9998;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            transition: opacity .3s ease;
        }

        .modal-container {
            width: 40%;
            min-width: 300px;
            margin: 40px auto 0;
            padding: 20px 30px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
            transition: all .3s ease;
            font-family: Helvetica, Arial, sans-serif;
        }

        .modal-header h3 {
            margin-top: 0;
            color: #42b983;
        }

        .modal-body {
            margin: 20px 0;
        }

        .text-right {
            text-align: right;
        }

        .form-label {
            display: block;
            margin-bottom: 1em;
        }

        .form-label > .form-control {
            margin-top: 0.5em;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5em 1em;
            line-height: 1.5;
            border: 1px solid #ddd;
        }

        .modal-enter, .modal-leave {
            opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave .modal-container {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }


        .cf:before, .cf:after{
            content:"";
            display:table;
        }

        .cf:after{
            clear:both;
        }


        .form-wrapper {
            /*        width: 245px;
                    padding: 15px;
                    margin: 150px auto 50px auto;
            */        background: #444;
            background: rgba(0,0,0,.2);
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
            box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        }


        .form-wrapper input {
            width: 60%;
            height: 20px;
            padding: 20px 5px;
            float: left;
            font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
            border: 0;
            background: #eee;
            -moz-border-radius: 3px 0 0 3px;
            -webkit-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
        }

        .form-wrapper input:focus {
            outline: 0;
            background: #fff;
            -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
            -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
            box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        }

        .form-wrapper input::-webkit-input-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper input:-moz-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
        }


        .form-wrapper button {
            overflow: visible;
            position: relative;
            float: right;
            border: 0;
            padding: 0;
            cursor: pointer;
            height: 40px;
            width: 40%;
            font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
            color: #fff;
            text-transform: uppercase;
            background: #f60;
            -moz-border-radius: 0 3px 3px 0;
            -webkit-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
        }

        .form-wrapper button:hover{
            background: #e54040;
        }

        .form-wrapper button:active,
        .form-wrapper button:focus{
            background: #c42f2f;
        }

        .form-wrapper button:before {
            content: '';
            position: absolute;
            border-width: 8px 8px 8px 0;
            border-style: solid solid solid none;
            border-color: transparent #f60 transparent;
            top: 12px;
            left: -6px;
        }

        .form-wrapper button:hover:before{
            border-right-color: #e54040;
        }

        .form-wrapper button:focus:before{
            border-right-color: #c42f2f;
        }

        .form-wrapper button::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
        .byline p{
            text-align:center;
            color:#c6c6c6;
            font: bold 18px Arial, Helvetica, Sans-serif;
            text-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }

        .byline p a{
            color:#d83c3c;
            text-decoration:none;
        }

        a.boxclose{
            float:right;
            margin-top:-30px;
            margin-right:-42px;
            cursor:pointer;
            color: #fff;
            border: 1px solid #AEAEAE;
            border-radius: 30px;
            background: #ff6600;
            font-size: 31px;
            font-weight: bold;
            display: inline-block;
            line-height: 0px;
            padding: 11px 3px;
        }

        .boxclose:before {
            content: "×";
        }

    </style>
</head>
<body>
<script type="text/x-template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <a @click="$emit('close')" class="boxclose" id="boxclose"></a>

                    <div class="modal-body">
                        <form class="form-wrapper cf">
                            <input name="q" value="{{ app('request')->input('q') }}" type="text" placeholder="Поиск...">
                            <button type="submit">Найти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</script>

{{--<script type="x/template" id="modal-template">--}}
    {{--<div class="modal-mask" v-show="show" transition="modal">--}}
        {{----}}
        {{--<div class="modal-mask" @click="close" v-show="show" transition="modal">--}}
            {{--<div class="modal-container">--}}
                {{--<button type="button" @click="$emit('close')" class="close" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--<div class="modal-body">--}}
                    {{--<form class="form-wrapper cf">--}}
                        {{--<input name="q" value="{{ app('request')->input('q') }}" type="text" placeholder="Поиск...">--}}
                        {{--<button type="submit">Найти</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{----}}
                {{--</div>--}}
            {{--</div>--}}
        {{-- </script> --}}

<div id="app">
    {{--<button id="show-modal" @click="showModal = true">Show Modal</button>--}}
    <modal v-if="showModal" @close="showModal = false">
    </modal>

    <header class="header">
        <nav class="inner">
            <a class="anchor" id="show-modal" @click="showModal = true">&#9776;</a>
            <a href="/" class="anchor">
                <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAIAAADYYG7QAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4JpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo3RDBBRDcwNDU4NEMxMUU2ODdFNjg5OTYwMjlGNjQ0QSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1NTU3NUVGQUEyRDIxMUU2ODlEMUJBMUE3RTYxMkU1OSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1NTU3NUVGOUEyRDIxMUU2ODlEMUJBMUE3RTYxMkU1OSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNCAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjE2NTUwMDE5LTVjNjQtNGRiNy1iNjhjLTQ1ZWIxYzkxM2FiYiIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOmJlZDc4OTczLWViM2ItMTE3OS04YzQyLWNlMTYwYmQ0NTQ1NSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv38lU4AAAMkSURBVHja7FnbSxRRGP+N666upqUECWK+mUqbmxbRQ4QmFEFQmtZDEPQcvfQ/9BL1WO920SyCjJCIyC5iXsmVMjVB8pbVqnhBc2dm+84azHzjbszsupPBfA8L8ztnzvzmu/zON2elcDiMrWQp2GK25QilsqvQKmB/BCW408SvkZC8iptVCE7CJdlHhjI4LQNXXyE7bwMhGguOYWba4LXkmgp43VCVGCFzeQRgM6FUj1NlDiGH0L9T6r/YWqRE9aapa7RiXuOIC/CY2gVMEyqrRnqWdqmE8PE55FAUTsQmKxdFRxk4N47RHkFrcwjRFnf4Ig5dYOCNSgy0CT8Z7Bdw4hJqrzOw6TIGe+DdrBwiN7y5bQQP1BmDiEhQKDTlZxm4PIvuJng2MalprZFOTAYYuO8UsjOMnGSgoBSFFQwMtOBH0Ey8rHhoRUHnPQbmFKDoCEJ8Jl2WnUYKz4T3Dear2fREclJvc6Rh0llFPfMQxStdQnktm/NtCEPvTMbLCiF656kxfH7JQN9J5GRpnMg9hT4U+Nmc7kYshyAlQxjViPP1Rl3VnkpNciiB/DWQdGsqa+hphDtJSk1uH2jFwjSvtXotXhku7K9hoyNvMT6cNEI0d34RfY8ZWHocuTlQ1uPlR/5eNtrRINyWxL2MSrfzLkO27URJtWBDnEQ665Jl6ScCT82nc1yEyPmjXRj/wKN2LhKvVPjPMLz/CYJzJuUnXkL0/quq0Uklx7A9E7vLkFfM5edOHM2E9TvISX0PEVrREO8OFFcJCdDb9CeMtFuNV1yEhCB9xeALBlZdQXkdQ7ruY1mGZAOh9Qrv4IJEeZ3v0+1oJD8PLFV7YoQoENQMzU/FnDDchokvNhISgrSEvkcxJ5CgKzb31H8EKVpPuvgdgWdxpHNihIQg9WIiEGWovwWz81blx3pPvVGQZBWt13DwvHHo9a1ETgcSuJW66Y5mtDdHWdIT/zFTYicd7ti64Hy5OoQcQlGrTFVEJ6/a+HzxODkWIUkcJ3gz7T70TM+EpLUpku6/jjAWZqDI+uGkGz2dPpuydyHFtZGQk9T/BaHfAgwAytLfbeiDo+IAAAAASUVORK5CYII=" -->
                <!-- alt="logo" class="logo"> -->
                Новости Кыргызстан
            </a>
            {{--<div v-show="loading" class='uil-facebook-css' style='-webkit-transform:scale(0.15)'><div></div><div></div><div></div></div>--}}

            <a title="Обновить" v-show="ns > 0 || loading" v-on:click="refresh" class="refresh anchor">
                <div v-bind:class="[loading ? 'uil-ring-animate-css' : '', 'uil-ring-css']" style='transform:scale(0.25);'><div></div></div><div v-cloak>@{{ ns }}</div>
            </a>
        </nav>
    </header>

    <div v-cloak class="news-view view">
        <div class="news-list">
            <ul>
                <template v-for="item in news">
                    <li class="news-item">
                        <span class="score"><img :src="item.source | icon"></span>
                        <span class="title">
                            <a :href="item.url" target="_blank" rel="noopener">@{{ item.title }}</a>
                        </span>
                        <br>
                        <span class="meta">
                            <span class="time">@{{ item.timestamp | moment }}</span>
                        </span>
                        <span class="host">@{{ item.source }}</span>
                        <br>
                    </li>
                </template>
                <div class="li-div" v-show="lt > 0">
                    <button :disabled="loading_more" class="button button-more" v-on:click="loadMore">Загрузить ещё</button>
                </div>
                <div class="li-div" v-show="news.length == 0 && !loading">
                    No news
                </div>
            </ul>
        </div>
    </div>
    {{--<modal :show.sync="showModal"></modal>--}}
    {{--<modal v-if="showModal" @close="showModal = false">--}}
        <!-- <button id="show-modal" @click="showModal = true">New Post</button> -->
        <!-- <button id="show-modal" @click="showModal = true">Show Modal</button> -->
        <!-- use the modal component, pass in the prop -->
        <!-- <modal v-if="showModal" @close="showModal = false"> -->

</div>
</body>
<script src="https://unpkg.com/moment@2.18.1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/ru.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/2.5.3/vue-router.min.js"></script>
<script src="/js/app.js?t={{time()}}"></script>
</html>

<!-- https://codepen.io/nikhil/pen/GuAho -->