@extends('layout')
@section('title', 'Show')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <div class="flex justify-center pt-8">
        <h1>Laptop <storng>{{ $computer['brand'] }}:</storng> </h1>
    </div>
    <div class="mt-8">
        <p style="font-size: 2rem; margin: 0">{{ $computer['brand'] }} ( <strong>{{ $computer['origin'] }} ) - {{ $computer['price'] }}$</strong></p>
    </div>
    <div class="button-group flex justify-center">
        <a href="{{route('computers.edit', $computer->id)}}">
            <button>Edit</button>
        </a>

        <form action="{{route('computers.destroy', $computer->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
        
        {{-- <a href="{{route('computers.destroy', $computer->id)}}">
            <button>Delete</button>
        </a> --}}
    </div>
    
</div>
@endsection
