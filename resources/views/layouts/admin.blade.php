<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    @if(isset($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @yield('content')
</body>
</html>