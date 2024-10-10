<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Compania</h1>
    <!-- Agrega esto en la vista donde quieras tener el botón de cerrar sesión -->
    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="text-red-500 hover:underline">Cerrar Sesión</button>
    </form>

</body>

</html>