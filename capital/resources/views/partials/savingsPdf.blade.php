
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
          </head>
    <body class="content-center">

        <main class="py-4">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                            <div class="container mx-auto px-6 py-8">
                                <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                                </div>
                                    <div class="mt-4">
                                        <div class="flex flex-col mt-8">
                                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex items-center">
                                                                    Date
                                                                </div>

                                                            </th>
                                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex items-center">
                                                                    Amount

                                                                </div>

                                                            </th>
                                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Saved By
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Saved For
                                                            </th>


                                                        </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-gray-200">

                                                        @foreach ($savings as $saving)

                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                    {{ $saving->subscription_date }}
                                                                </td>

                                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                    {{ $saving->amount }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                    {{ $saving->user->name}}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                    {{ $saving->subscriptionType->name }}
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </main>
                            </div>
                        </main>

    </body>
</html>






