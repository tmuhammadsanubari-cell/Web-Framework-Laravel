<!DOCTYPE html>
<html>
<head>
    <title>Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('layout.header')

    <div class="d-flex">
        @include('layout.sidebar')

        <div class="p-4 w-100">
            @yield('content')
        </div>
    </div>

    @include('layout.footer')

</body>
</html>