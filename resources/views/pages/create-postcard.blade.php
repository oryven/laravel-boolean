@extends('layouts.main-layout')

@section('content')

<div>

    <form 
        action="{{route('postcard.store')}}" 
        method="post"
        enctype="multipart/form-data">
    
        @method('post')
        @csrf
    
        <label for="sender">Mittente:</label>
        <input type="text" name="sender"> <br>
    
        <label for="address">Indirizzo:</label>
        <input type="text" name="address"> <br>
    
        <label for="text">Corpo del testo:</label>
        <input type="text" name="text"> <br>
    
       
    
        <input class="btn" type="submit" value="CREATE">
    </form>
</div>

@endsection