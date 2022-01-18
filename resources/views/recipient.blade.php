<!DOCTYPE html>


<head>

    <link rel="stylesheet" href="public/css/user.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Recipient</title>

</head>

<body>
    <div class="main">
        <h1 class="title text-4xl font-bold">Recipient Information</h1>

        <div class="division">
            <div class="first shadow-xl p-4 w-11/12 rounded-lg">
                <table>
                    <tr>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>



                    </tr>
                    <tr><td></td>
                        <td class="p-2 ml-2 font-bold">Recipient Id:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->id}}</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">First Name:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->first_name}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">Last Name:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->last_name}}</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">Email:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->email}}</td>
                    </tr>


                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">Phone:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->phone}}</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">Address:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->address}}</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="p-2 ml-2 font-bold">Blood Group:</td>
                        <td class="p-4 lg:px-8 ml-8" colspan="3">{{Auth::user()->group}}</td>
                    </tr>
                </table>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-24 p-2 bg-gray-700 hover:bg-red-400 rounded-lg">Logout</button>
                </form>

            </div>




        </div>


    </div>
</body>

</html>
