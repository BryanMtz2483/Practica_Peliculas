
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Reporte</title>
    </head>
    <body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Id
                </th>
                <td class="px-6 py-4">
                    Movie Name
                </td>
                <td class="px-6 py-4">
                    Genre
                </td>
                <td class="px-6 py-4">
                    Duration
                </td>
                <td class="px-6 py-4">
                    Description
                </td>
                <td class="px-6 py-4">
                    Premiere
                </td>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$movies -> id}}
                </th>
                <td class="px-6 py-4">
                    {{$movies -> name}}
                </td>
                <td class="px-6 py-4">
                    {{$movies -> genre}}
                </td>
                <td class="px-6 py-4">
                    {{$movies -> duration}}
                </td>
                <td class="px-6 py-4">
                    {{$movies -> description}}
                </td>
                <td class="px-6 py-4">
                    {{$movies -> year}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </body>
    </html>
