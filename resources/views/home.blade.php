<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('fondo.jpg');">

    <!-- Barra de navegación -->
    <div class="flex justify-between items-center bg-white bg-opacity-80 p-4 border-b border-gray-300">
        <img src="logo.png" alt="Logo" class="h-12"> <!-- Logo -->
        <div class="space-x-6 text-lg font-semibold">
            <!-- Enlace Fabricar Producto -->
            <a href="/fabricar" class="text-gray-700 hover:text-blue-600">Fabricar Producto</a>
            <!-- Enlace Controlar Calidad -->
            <a href="/controlar" class="text-gray-700 hover:text-blue-600">Controlar Calidad</a>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="flex justify-center items-center h-full">
        <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-xl w-full max-w-sm">
            <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Iniciar Sesión</h2>
            <input type="text" placeholder="Usuario" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="password" placeholder="Contraseña" required class="w-full p-3 mb-6 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-md font-semibold transition-colors">Iniciar Sesión</button>
        </div>
    </div>

</body>
</html>
