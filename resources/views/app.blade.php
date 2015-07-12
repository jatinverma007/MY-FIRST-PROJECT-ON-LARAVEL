<!DOCTYPE html>
<html>
<head lang="en">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="content">
    @if (Session::has('message'))
    <div class="flash alert-info">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    @if ($errors->any())
    <div class='flash alert-danger'>
        @foreach ( $errors->all() as $error )
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @yield('content')
</div>


</body>
</html>