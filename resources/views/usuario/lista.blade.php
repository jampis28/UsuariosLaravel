<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="w-screen h-screen">
    <div class="flex justify-between items-center w-screen h-[15px] px-[100px] mt-[50px]">
        <div>
            <h1 class="text-3xl font-bold text-gray-600">
                Gestion de Usuarios
            </h1>
        </div>
        <div>
            <button class=" w-[150px] h-[40px] bg-[#014c6b] text-white font-serif rounded-lg">
                <a href="/usuariocrear">Agregar</a>
            </button>
        </div>
    </div>
    <div class="flex justify-center items-center">

        <form class="flex justify-center items-center mt-6" method="post" action="/api/username">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative flex gap-2 mr-9">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-[300px] p-4 px-9 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre"  name="nombre" required>
                <button type="submit" class="text-white  end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
            </form>
            <form class="flex justify-center items-center mt-6" method="post" action="/api/useremail">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative flex gap-2">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-[300px] p-4 px-9 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" name="email" required>
                <button type="submit" class="text-white  end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>


    <div class="relative overflow-x-auto  ml-[80px]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 flex-col ">
            <thead class="text-xs text-gray-900 uppercase dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido
                    </th>
                    <th scope="col" class="px-6 py-3">
                        E-mail
                    </th>
                </tr>
            </thead>
            <tbody class="flex-col">
                @foreach($datos as $dato)
                <tr class="bg-white dark:bg-gray-800 flex-col">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{ $dato->nombre }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $dato->apellido }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dato->email }}
                    </td>

                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>