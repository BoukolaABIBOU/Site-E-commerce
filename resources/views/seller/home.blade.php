@extends('_layout._ecommerce')
@section('content')
    <div class="row">
        
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                    Livres
                    <i class="fa fa-product-hunt pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    En ajoutant un livre, elle s'ajoute automatiquement à la suite des livres, sur la page bibliothèque. 
                    <br />
                    <a href="{{ action('Seller\ProductsController@index')  }}" class="btn btn-info">Ajouter un livre</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
    </div><!-- /.row -->
        <br>
        <h4> C'est les vacances!    Vider vos greniers!   Les livres encombrant, il est tant de les mettrent en vente!</h4>
        <img src="{{asset('images/header1.jpeg')}}"/>
        <hr>
        <br>
        <h4> Vous voulez vous faire de l'argent facilement, en vous débarrassant des ouvrages non utilisés. </h4>
      
        <h4>Alors, il est temps de mettre en vente vos livres.</h4>  
        <img src="{{asset('images/header2.jpeg')}}"/>
        <hr>  
@endsection
