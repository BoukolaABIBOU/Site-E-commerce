<div class="page-header">
    <h1>Page Utilisateurs</h1>
</div>
<table class="table">
    <thead>
    <tr>
        <th>Nom Utilisateur</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Adresses</th>
        <th>Commandes</th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <span class="table-element">{{ $user->username }}</span>
                </td>
                <td>
                    <span class="table-element">{{ $user->first_name }}</span>
                </td>
                <td>
                    <span class="table-element">{{ $user->last_name }}</span>
                </td>
                <td>
                    <span class="table-element">{{ $user->email }}</span>
                </td>
                <td>
                    <a href="{{ action('Admin\UsersController@addresses', ['user' => $user->id]) }}" class="btn btn-primary">Adresses</a>
                </td>
                <td>
                    <a href="{{ action('Admin\UsersController@orders', ['user' => $user->id]) }}" class="btn btn-primary">Commandes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="mid_center">
        {{ $users->links() }}
    </div>
</div><!-- /.row -->

