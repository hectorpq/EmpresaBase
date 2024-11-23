<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controlar Calidad</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gray-800 text-white p-4 text-center">
            <h1 class="text-2xl font-bold">ACTISPORT</h1>
        </header>

        <div class="flex flex-grow">
            <!-- Sidebar -->
            <aside class="bg-gray-200 w-1/4 p-4">
                <nav class="space-y-4">
                    <a href="fabricar" class="block text-gray-700 font-semibold hover:text-blue-600">
                        Fabricar Producto
                    </a>
                    <a href="controlar" class="block text-gray-700 font-semibold hover:text-blue-600">
                        Controlar Calidad
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-grow p-6">
                <h2 class="text-xl font-bold mb-4">Controlar Calidad</h2>
                <p class="mb-6">Marque según lo que corresponde:</p>

                <!-- Table -->
                <div class="overflow-auto border border-gray-300 rounded-md">
                    <table class="table-auto w-full text-left">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Cuadro estadístico</th>
                                <th class="px-4 py-2 text-center">100%</th>
                                <th class="px-4 py-2 text-center">50%</th>
                                <th class="px-4 py-2 text-center">25%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las costuras son uniformes, rectas y sin saltos en la línea?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las terminaciones de los puños, cuello y dobladillo están prolijas y alineadas?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las zonas internas (costuras y etiquetas) están limpias y no incomodan al usuario?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las cremalleras funcionan de manera fluida y están bien integradas al diseño?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las etiquetas están firmemente cosidas y bien colocadas sin signos de desprendimiento?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2">¿El logo y los parches decorativos están bien aplicados sin arrugas o mal alineados?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las piezas (mangas, bolsillos, paneles) están alineadas y simétricas?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Las costuras resisten tensión y mantienen elasticidad?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Los materiales de los acabados resisten uso y lavado frecuente?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2">¿Hay algún hilo suelto o irregularidad visible en las costuras?</td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                                <td class="border px-4 py-2 text-center"><input type="checkbox" class="form-checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex justify-end space-x-4">
                    <button class="bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500">
                        Regresar
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Validar
                    </button>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
