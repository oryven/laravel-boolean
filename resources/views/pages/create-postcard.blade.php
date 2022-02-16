@extends('layouts.main-layout')

@section('content')

<div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form 
        action="{{route('postcard.store')}}" 
        method="post"
        enctype="multipart/form-data">
    
        @method('post')
        @csrf
    
        <label for="sender">Mittente:</label>
        <input type="text" name="sender"> <br>
    
        <label for="addres">Indirizzo:</label>
        <input type="text" name="addres"> <br>
    
        <label for="text">Corpo del testo:</label>
        <input type="text" name="text"> <br>
    
        <label for="image">Immagine:</label>
        <input type="file" name="image"> <br>
    
        <input class="btn" type="submit" value="CREATE">
    </form>
</div>

@endsection