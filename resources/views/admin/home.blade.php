@extends('_layout._admin')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                    Page Utilisateurs
                    <i class="fa fa-user pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    La page des utilisateurs contient des renseignements sur tous les utilisateurs inscrits sur votre site. Consultez les renseignements sur les utilisateurs, y compris leurs adresses et leurs commandes.
                    <br />
                    <a href="{{ action('Admin\UsersController@index')  }}" class="btn btn-info">Utilisateurs</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                    Page Produits
                    <i class="fa fa-product-hunt pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    La page des produits contient de l’information sur tous les produits de votre site. Mangage de vos produits à cette page, y compris l’ajout de nouveaux produits ou des ventes.
                    <br />
                    <a href="{{ action('Admin\ProductsController@index')  }}" class="btn btn-info">Produits</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                 Page Commandes
                    <i class="fa fa-shopping-cart pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    La page des commandes contient des informations sur toutes les commandes passées sur votre site Informez vos clients que leurs commandes ont été expédiées à partir de cette page.
                    <br />
                    <a href="{{ action('Admin\OrdersController@index')  }}" class="btn btn-info">Commandes</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                  Page Catégories
                    <i class="fa fa-list-alt pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    La page des catégories vous permet de gérer les catégories dans lesquelles vos produits peuvent être organisés.
                    <br />
                    <a href="{{ action('Admin\CategoriesController@index')  }}" class="btn btn-info">Catégories</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default panel-categories">
                <div class="panel-heading">
                    Page Taxes
                    <i class="fa fa-money pull-right" aria-hidden="true"></i>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    La page des taxes contient des informations sur toutes les taxes pouvant être facturées sur les produits.
                    <br />
                    <a href="{{ action('Admin\TaxesController@index')  }}" class="btn btn-info">Taxes</a>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection
