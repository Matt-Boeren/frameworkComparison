<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
</head>
<body>
    <h1>Catan statistics</h1>
    <div>
        <a href="{{ route('login') }}">login</a>
        <a href="{{ route('signup') }}">Sign up</a>
    </div>
    <div class="hex-container">
        @foreach($board as $tile)
            <div class="hex">
                <p>{{ $tile[0] }}</p>
                <p>{{ $tile[1] }}</p>
            </div>
        @endforeach
    </div>
    <a href="{{ route('/') }}">Generate board</a>
</body>
</html>
