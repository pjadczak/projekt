<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link media="all" rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,700&display=swap" rel="stylesheet">
<title>Projekt testowy Laravel</title>
</head>
<body>

<div class="wrapper">

    <header>
        <h1>Welcome home</h1>
    </header>
    
    <section class="main">
        @yield('sectionMain')
    </section>

    <footer>
        Footer
    </footer>
    
</div>

</body>
</html>