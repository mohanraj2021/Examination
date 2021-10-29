<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>
<style>
    #question_modal{
        width: 300px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
    }
</style>
<script language="JavaScript">

function toggle(id) {
        var state = document.getElementById(id).style.display;
            if (state == 'block') {
                document.getElementById(id).style.display = 'none';
            } else {
                document.getElementById(id).style.display = 'block';
            }
        }

        function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle("hidden");
    document
      .getElementById(modalID + "-backdrop")
      .classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
    
</script>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Dashboard
                </div>
            </header>
            <br>
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 ">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="">
                                <a href="{{ route('admin.exam') }}">
                                    <button href="" id="openQuestionModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                        Exams
                                    </button>
                                </a>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-96">
                                    Resluts
                                </button>

                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-96">
                                    Students
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
    </div>

    
</body>



</html>