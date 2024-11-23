<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 h-screen flex">

    <!-- Navbar -->
    <div class="w-64 bg-gray-800 text-white p-6">
        <a href="/fabricar" class="block py-2 px-4 text-lg font-semibold hover:bg-gray-700 rounded">Fabricar Producto</a>
        <a href="/controlar" class="block py-2 px-4 text-lg font-semibold hover:bg-gray-700 rounded mt-4">Controlar Calidad</a>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Fabricar Producto</h1>
            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" onclick="window.location.href='/'">Regresar</button>
        </div>

        <div class="flex space-x-6">
            <!-- Upload Section -->
            <div class="w-1/2 bg-white p-6 rounded shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Subir Archivo</h3>
                <input type="file" id="fileInput" class="w-full border p-2 rounded mb-4" />
                <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700" onclick="uploadFile()">Subir</button>
            </div>

            <!-- File List Section -->
            <div class="w-1/3 bg-white p-6 rounded shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Archivos Varones</h3>
                <ul id="fileList" class="list-none space-y-2">
                    <li class="p-2 bg-gray-200 rounded">Modelo buzo normal</li>
                    <li class="p-2 bg-gray-200 rounded">Modelo buzo hounder</li>
                    <li class="p-2 bg-gray-200 rounded">Modelo buzo adidas</li>
                    <li class="p-2 bg-gray-200 rounded">Modelo casaca normal</li>
                </ul>
            </div>

            <!-- Information Panel Section -->
            <div class="w-1/3 bg-white p-6 rounded shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Información Adicional</h3>
                <textarea id="fileDescription" class="w-full h-32 p-2 border rounded mb-4" placeholder="nota del archivo/descripción"></textarea>
                <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" onclick="addDescription()">Agregar</button>
            </div>
        </div>
    </div>

    <script>
        function uploadFile() {
            const fileInput = document.getElementById('fileInput');
            const fileName = fileInput.files[0]?.name || "No file selected";
            const fileList = document.getElementById('fileList');
            const newFileItem = document.createElement('li');
            newFileItem.classList.add('p-2', 'bg-gray-200', 'rounded');
            newFileItem.textContent = fileName;
            fileList.appendChild(newFileItem);
        }

        function addDescription() {
            const description = document.getElementById('fileDescription').value;
            if (description) {
                alert('Descripción agregada: ' + description);
            } else {
                alert('Por favor ingresa una descripción');
            }
        }
    </script>

</body>
</html>
