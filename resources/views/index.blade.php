<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <title>Новости Кыргызстан - KG-News</title>
    <meta name="description" content="Новостной агрегатор: актуальные новости Кыргызстана в режиме онлайн" />
    <meta name="keywords" content="новостной агрегатор, новости, агрегатор новостей, новости Кыргызстана, новости Киргизии, сми Кыргызстана" />
    <meta name="generator" content="Новостной агрегатор Кыргызстана" />
    <meta name="yandex-verification" content="f23d1ea06271ed31" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="theme-color" content="#f60">
    {{--<link rel="manifest" href="/manifest.json">--}}
    <link href="/css/styles.css" rel="stylesheet">
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
<div id="app">
    <modal v-if="showModal" @close="showModal = false">
    </modal>
    <header class="header">
        <nav class="inner">
            <a class="anchor" id="show-modal" @click="showModal = true">&#9776;</a>
            <a href="/" class="anchor">Новости Кыргызстан</a>
            <a v-show="ns > 0" title="Обновить" v-on:click="refresh" class="refresh anchor">
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
                    Нет новостей
                </div>
            </ul>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/ru.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.3.3/dist/vue.min.js"></script>
<script src="https://unpkg.com/vue-router@2.0.3"></script>
<script src="/js/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100329126-1', 'auto');
    ga('send', 'pageview');

</script>
</html>
