<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>postya</title>

    <link rel="stylesheet" href=" {{ asset("css/app.css")}} ">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
       <ul class="flex justify-center" >
            <li> <a href="" class="p-3 ">Home</a> </li>
            <li> <a href="" class="p-3">dashboard</a> </li>
            <li> <a href="" class="p-3">Post</a> </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>