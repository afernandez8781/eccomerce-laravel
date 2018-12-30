@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="card thank-you-section">
       <h1 class="card-title">Gracias por <br> ¡Su pedido!</h1>
       <p class="card-text">Se envió un correo electrónico de confirmación.</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="btn btn-raised btn-primary">Ir a home</a>
       </div>
   </div>

@endsection
