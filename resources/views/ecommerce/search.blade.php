@extends('_layout._ecommerce')

@section('content')
    <h1>Rechercher pour {{ $search }}</h1>
    <div class="row">
        @if(isset($products))
            @include('ecommerce._includes._products')
        @else
            <h1>Aucun produit n'est disponible</h1>
        @endif
    </div><!-- /.row -->

@endsection