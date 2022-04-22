<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-16 columns-4 text-center">
        @foreach($threads as $thread)
            <p class="text-sm">{{ $thread->title }}</p>
        @endforeach
    </div>
</body>
</html>
