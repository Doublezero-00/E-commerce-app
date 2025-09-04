@extends('layouts.publichome')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('images/digital.jpg') }}" 
             alt="wallpaper" 
             class="w-100 vh-100" 
             style="object-fit: cover;display: fixed;"
             
              />
    </div>
@endsection
