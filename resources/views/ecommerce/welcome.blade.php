@extends('_layout._ecommerce')

@section('content')
    @include('_includes._ecommerce._carousel')
    <div class="row">
        @if(isset($products))
            @include('ecommerce._includes._products')
        @else
            <h1>Aucun produit n'est disponible</h1>
        @endif
    </div><!-- /.row -->

@endsection