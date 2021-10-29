<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Dashboard
                </div>
            </header><br>
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 ">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="">
                                <button id="openQuestionModal" onclick="toggleModal('modal-example-small');" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Add Questions
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

    <div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-example-small">
        
            <div class="relative p-1 flex-auto">
                <div class="relative w-auto my-6 mx-auto max-w-sm">
                    <!--content-->
                    <form method="POST" action="{{ route('admin.add_question') }}">
                        <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                            <!--header-->
                            <div class=" flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                                <h3 class="text-3xl font-semibold">Modal Title</h3>
                                <button class=" p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-example-small')">
                                    <span
                                        class=" bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </button>
                            </div>
                            <!--body-->
                            
                                <div class="relative p-6 flex-auto">
                                    <div class="mb-3 pt-0">
                                        <input type="text" name="name" placeholder="Question" class=" px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>
                                    <div class="mb-3 pt-0">
                                        <input type="text" name="option1" placeholder="Option 1" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>
                                    <div class="mb-3 pt-0">
                                        <input type="text" name="option2" placeholder="Option 2" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>
                                    <div class="mb-3 pt-0">
                                        <input type="text" name="option3" placeholder="Option 3" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>
                                    <div class="mb-3 pt-0">
                                        <input type="text" name="option4" placeholder="Option 4" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>

                                    <div class="mb-3 pt-0">
                                        <input type="text" name="answer" placeholder="Answer" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                    </div>

                                    <div class="mb-3 pt-0">
                                        <!-- <input type="text" placeholder="Subject" class=" px-1 py-1 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/> -->
                                        <label class="block text-left" style="max-width: 300px">
                                            <span class="text-gray-700">Subject</span>
                                            <select name="subject[]" class="form-multiselect block w-full mt-1" multiple>
                                                <option value="maths">Mathematics</option>
                                                <!-- <option value="">Option 2</option>
                                                <option value="">Option 3</option>
                                                <option value="">Option 4</option>
                                                <option value="">Option 5</option> -->
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            
                            <!--footer-->
                            <div class=" flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                                <button class=" text-purple-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-example-small')">
                                    Close
                                </button>
                                <button class=" bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 " type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>
    
    
</body>
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
</html>