
<div class="page-header">
    <h1>Commandes Utilisateurs</h1>
    <h3>Commandes pour {{ $user->fullName() }}</h3>
</div>
@if($user->orders->count() > 0)
    <table class="table">
        <thead>
        <tr>
            <th>Command ID</th>
            <th>Utilisateur</th>
            <th>Total</th>
            <th>Livres commandés</th>
            <th>Expédié</th>
            <th>Voir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->orders as $order)
            <tr>
                <td class="table-element">{{ $order->id }}</td>
                <td class="table-element">{{ $user->fullName() }}</td>
                <td class="table-element">{{ $order->total }}</td>
                <td class="table-element">{{ $order->products->count() }}</td>
                <td class="table-element">{{ $order->shipped }}</td>
                <td><a class="btn btn-primary" href="">Voir commande</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <h4>Il n’y a aucun enregistrement pour les adresses à cette fin.</h4>
@endif