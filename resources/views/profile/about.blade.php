@include('profile.header')
@include('layouts.header')
<body class="container">
    <div class=" bg-light p-5 mt-5 ml-3">
        <h1 class="text-monospace" >Apotek Nusa Farma</h1>
        <p class="lead">Apotek Nusa Darma adalah salah satu apotek terlengkap di kota Kediri yang dapat membantu memenuhi kebutuhan pengobatan Masyarakat Sekitar</p>
        <hr>
        @yield('content')
    </div>
</body>
@include('profile.footer')
