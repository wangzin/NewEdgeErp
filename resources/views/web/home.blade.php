@include('web.layouts.header')
<body class="dark">
    <div id="app">
    <header-component></header-component>
        <router-view></router-view>
    </div>
    @include('web.layouts.footer')
    <script src="/js/app.js"></script>
</body>
