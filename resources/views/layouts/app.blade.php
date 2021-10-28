<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
</head>
<body>
    {{-- importo l'header --}}
    @include('partials.header')

    {{-- importo una sezione  --}}
    @yield('topolino')
    
    {{-- importo il footer --}}
    @include('partials.footer')
</body>
