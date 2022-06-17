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
    
   

@endsection
