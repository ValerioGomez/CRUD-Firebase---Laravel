<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- bootstrap css --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Firebase Laravel</title>
</head>
<body>

@yield('content')

<script src="https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js"></script>

{{-- jquery js --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
{{-- bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>