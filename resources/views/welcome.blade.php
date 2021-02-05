<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
    </head>
    <body class="antialiased">
        <div class="flex justify-center items-center p-4 h-screen">
            <div class="container">
                <h1 class="text-6xl text-gray-500 font-bold mb-10">Fresh Project</h1>
                <div class="grid grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-pink-500 to-rose-500 rounded-3xl shadow-md p-10 text-white">
                        <h2 class="text-4xl font-bold">Laravel</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo fuga ex minima molestiae laboriosam eius laborum et? Tempore aliquid, doloribus maxime ipsa vero reiciendis officiis facilis optio deserunt? Id, fuga.</p>
                    </div>
                    <div class="bg-gradient-to-br from-teal-500 to-blue-500 rounded-3xl shadow-md p-10 text-white">
                        <h2 class="text-4xl font-bold">Tailwind CSS</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iure voluptate eum perspiciatis molestias minus deserunt ut hic. Omnis mollitia cupiditate quae quia explicabo, sunt a fugiat repellat rerum nesciunt!</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
