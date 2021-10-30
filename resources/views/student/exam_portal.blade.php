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
        @include('layouts.studentnav')

        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                All The Best.!
            </div>
        </header>
        <br>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('student.success') }}">
                        @csrf
                        @foreach( $questions as $key => $question)
                            <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <!-- <div class=" flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                                    <h3 class="text-3xl font-semibold">Modal Title</h3>
                                    <button class=" p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-example-small')">
                                        <span
                                            class=" bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </button>
                                </div> -->
                                <!--body-->
                                
                                    <div class="relative p-6 flex-auto">
                                        <div class="mb-3 pt-0">
                                            <p><b>{{ $key+1 }}. {{ $question['name'] }}</b></p>
                                                
                                        <input type="type" style="display:none" name="question{{$key+1}}" value="{{ $question['name'] }}" class=" px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full"/>
                                        </div>
                                        <div class="block">
                                        <?php 
                                                $options = json_decode($question['opts']);
                                            ?>
                                        <div class="mt-2">
                                            <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="answer{{$key+1}}" value="{{$options->option1}}"/>
                                                <span class="ml-2">{{$options->option1}}</span>
                                            </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="answer{{$key+1}}" value="{{$options->option2}}" />
                                                    <span class="ml-2">{{$options->option2}}</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="answer{{$key+1}}" value="{{$options->option3}}" />
                                                    <span class="ml-2">{{$options->option3}}</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="answer{{$key+1}}" value="{{$options->option4}}" />
                                                    <span class="ml-2">{{$options->option4}}</span>
                                                </label>
                                            </div>
                                        </div>
                                        </div>                                    
                                    </div>
                                
                                <!--footer-->
                                
                            </div>
                        @endforeach

                        <div class=" flex items-center justify-center p-6 border-t border-solid border-gray-200 rounded-b">
                            <button class=" bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 " type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>