<!-- component -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta name="theme-color" content="#0a165c">
        <link rel="stylesheet" href="../../_tailwind-headers-footers/tailwind-headers-footers.css" />
        <title>error_404</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    </head>
    <body class="content-center">

        <section class="text-black content-center">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                <div class="text-center lg:w-2/3 w-full">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium	 text-black font-mono">
                       404 | NOT FOUND! </h1>
                    <p class="leading-relaxed mb-8 font-normal">Oops! The page you are looking for is not here.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('home') }}">
                            <button
                            class="border-2 border-black  text-black block rounded-sm font-bold py-4 px-6 mr-2 flex items-center hover:bg-gray-900 hover:text-white transition ease-in-out duration-700">
                             Back Home
                        </button>
                        </a>

                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
