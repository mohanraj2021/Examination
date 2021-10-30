<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        @include('layouts.studentnav')
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                Results
            </div>
        </header>
        <br>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 @if( $marks > 2 )
                 <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <div class=" flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                                    <h1>Congrajulations..!!!</h1>
                                    <p>You have Passed the Test</p>
                                </div> 
                                <!--body-->
                                
                                
                                <!--footer-->
                                
                            </div>

                </div>
                @else
                <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <div class=" flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                                    <h1>Sorry..!!!</h1>
                                    <p>Better Luck next time</p>
                                </div> 
                                <!--body-->
                                
                                
                                <!--footer-->
                                
                            </div>

                </div>
                @endif
            </div>
        </div>
    </div>
    
</body>
</html>