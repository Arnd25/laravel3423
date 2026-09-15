<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>home</title>

</head>
<body class="bg-gray-200 min-h-screen flex flex-col font-sans text-gray-700">
    <x-header/>
    <main class="py-5">
        <x-vacancies.list/>
    </main>
    <x-footer/>
</body>
</html>
