<div class="page-header">
    <h1>Adresses Utilisateurs</h1>
    <h3>     Adresses pour {{ $user->fullName() }}</h3>
</div>
@if($user->addresses->count() > 0)
<table class="table">
    <thead>
    <tr>
        <th>Adresse municipale</th>
        <th>Etat</th>
        <th>Ville</th>
        <th>Code Postal</th>
    </tr>
    </thead>
    <tbody>
        @foreach($user->addresses as $address)
            <tr>
                <td class="table-element">{{ $address->address }}</td>
                <td class="table-element">{{ $address->state->abbreviation }}</td>
                <td class="table-element">{{ $address->city }}</td>
                <td class="table-element">{{ $address->postal_code }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
    <h4>Il n’y a aucun enregistrement pour les adresses de cet utilisateur</h4>
@endif