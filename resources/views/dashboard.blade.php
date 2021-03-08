@extends('layouts.app')
@section('content')
    <ul class="flex flex-col m-4">
        @if ($items->count())
            @foreach ($items as $item)
                <li class="bg-white p-4 my-2 rounded-lg shadow-md">
                    <a href='#'>
                        <ul class="flex flex-row justify-between items-center">
                            <li>
                                <strong class="font-bold text-gray-700 text-3xl uppercase">{{ $item->title }}</strong><br>
                                <span class="text-sm text-gray-600">{{ $item->description }}</span>

                            </li>
                            <li class="flex flex-none">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $item->icon }}" />
                                </svg>
                            </li>
                        </ul>
                    </a>
                </li>
            @endforeach
        @else
            <li class="bg-white p-4 my-2 rounded-lg shadow-md">
                There are no items.</li>
        @endif
    </ul>
@endsection
