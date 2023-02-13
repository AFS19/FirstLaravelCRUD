@extends('layout')
@section('title', 'Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="flex justify-center pt-8">
        <h1>Computers Page</h1>
    </div>
    <div class="mt-5 father">
        @if (count($computers) > 0)
            <ul>
                @foreach ($computers as $computer)
                    <a href="{{route('computers.show', ['computer' => $computer['id']])}}">
                        <li>
                            {{ $computer['brand'] }} Made In <strong>{{ $computer['origin'] }}</strong> And It's <strong>{{ $computer['price'] }}$</strong> 
                        </li>
                    </a>
                @endforeach
            </ul>
        @else
            
        @endif
    </div>
    
</div>
@endsection
