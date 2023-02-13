@extends('layout')
@section('title', 'Create Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="flex justify-center">
        <h2>Edit an Computer</h2>
    </div>
    <div class="mt-5">
        
        <form action="{{route('computers.update', ['computer' => $computer->id])}}" method="POST" class="form bg-white p-6 border-1">
            @csrf
            @method('PUT')
            <div>
                <label for="computer-brand" class="text-sm">Computer Brand</label>
                <input id="computer-brand" name="computer-brand" class="text-lg border-1" placeholder="Brand Name" value="{{$computer['brand']}}" type="text">
                <div class="form-error">
                    @error('computer-brand')
                        {{$message}}
                    @enderror
                </div>
            </div>
            
            <div>
                <label for="computer-origin" class="text-sm">Computer Origin</label>
                <input id="computer-origin" name="computer-origin"  class="text-lg border-1" placeholder="Origin" value="{{$computer['origin']}}" type="text">
                <div class="form-error">
                    @error('computer-origin')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <label for="computer-price" class="text-sm">Computer Price</label>
                <input id="computer-price" name="computer-price"  class="text-lg border-1" placeholder="Price" value="{{$computer['price']}}" type="text">
                <div class="form-error">
                    @error('computer-price')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit">Edit</button>
            </div>
        </form>
    </div>
    
</div>
@endsection
