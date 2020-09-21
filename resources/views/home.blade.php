@extends('layouts/main-layout')

@section ('logo')
<img id="logo" src="{{('images/marchio-sito-test.png')}}" alt="">
@endsection


@section ('content')
  

<h1>LE LUNGHE</h1>
@foreach ($data as $d)
<div class="blocco">

    @if ($d['tipo'] == 'lunga')
        <h2>{{$d['titolo']}}</h2>
        <img src="{{$d['src']}}" alt="">
        @endif
    </div>
    @endforeach

    
    <H2>LE CORTE</H2>
    
    
    
      @foreach ($data as $d)
      <div class="blocco">
      @if ($d['tipo'] == 'corta')
      <h2>{{$d['titolo']}}</h2>
      <img src="{{$d['src']}}" alt="">
      @endif
      </div>
      @endforeach
    
    <H2>LE CORTISSIME</H2>

    @endsection