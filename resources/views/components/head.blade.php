<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $pageTitle ?? '' or config('app.name', 'Laravel') }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    {{ $slot }}
    @stack('head')
</head>