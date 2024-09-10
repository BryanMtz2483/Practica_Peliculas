<x-app-layout>
    <style>
        .contenedor-todo{
            display: flex;
            align-items: center;
            margin-left: 500px;
            width: 500px;
            height: 1150px;
        }
    </style>

<div class="contenedor-todo max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <a href="#">
            <img class="rounded-t-lg" src="https://imgs.search.brave.com/Nf5G4kJrFqnIeHqi1M3ZVCxWPoI7VuEBJNZkS14hiiU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzE1MzQwMy9p/c29sYXRlZC9wcmV2/aWV3L2Y1NWJlMjA2/OWU0NWY0YmI3YTFi/YzEzYjMxMGUwMDRk/LWljb25vcy1tdWx0/aW1lZGlhLWRlLWlj/b25vLXBsYW5vLWRl/LWNhbWFyYS1kZS1w/ZWxpY3VsYS12aW50/YWdlLnBuZw" alt="" />
        </a>
        <a href="#">
            <h3 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">{{$movieDetail -> name}}</h3>
        </a>
        <br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Id of Movie: {{$movieDetail->id}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Movie Name: {{$movieDetail->name}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Movie Genre: {{$movieDetail->genre}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Movie Duration: {{$movieDetail->duration}}</p> <br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Synopsis: {{$movieDetail->description}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Premiere: {{$movieDetail->year}}</p><br>
        
        <a href="{{route('movies.update', $movieDetail->id)}}" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Actualizar 
        </a>
        <form action="{{route('movies.delete',$movieDetail->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Eliminar</button>
        </form>
        <a href="{{route('movies.report', $movieDetail->id)}}" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Obtener Reporte 
        </a>
    </div>
</div>


</x-app-layout>