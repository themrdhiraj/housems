@extends('layouts.app')
@section('content')

    <strong class="flex w-max  top-0 bg-white rounded-br-lg shadow font-bold text-gray-700 p-4">Select Desired
        Floor</strong>
    <ul class="flex flex-col overflow-y-auto mx-4">
        @for ($i = 0; $i < 1; $i++)
            <a href='#'>
                <li class="bg-white my-2 rounded-lg shadow-md bg-gradient-to-r from-blue-400 to-blue-300">
                    <div class="flex h-20">

                        <img class=" rounded-l-lg object-cover object-center"
                            src="http://placekitten.com/200/3<?php echo $i; ?>0">
                        <p class="overflow-y-auto text-sm text-gray-600 p-4 truncate">
                            <strong class="text-gray-700 font-semibold "><u>Description</u></strong><br>
                            Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing
                            elit.
                            Provident
                            totam reprehenderit placeat illum
                            saepe!
                            Accusantium quaerat delectus ea, dignissimos debitis deleniti eos, magni unde nisi rem cum?
                            Beatae,
                            molestiae
                            esse?
                        </p>
                    </div>
                </li>
            </a>
        @endfor
    </ul>
@endsection
