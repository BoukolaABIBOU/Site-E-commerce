<p class="lead">E-BOOK</p>
<div class="list-group" v-if="show.showSideBar">
    @foreach($categories as $category)
        <a class="list-group-item {{ (isset($search ) && $search === $category->name) ? 'active' : '' }}"
           href="{{ action('User\SearchController@category', ['category' => $category->name ]) }}">
            {{ $category->name }}
        </a>
    @endforeach
</div>
<br>
<br>
<p> Une bliothèque en ligne pour tous.</p>
<hr>
<img src="{{ asset('images/index.jpeg')}}"/>
<hr>
<p>Vous êtes passionnés de la lecture, accros des fictions, vous aimez les essais!</p>
<hr>
<img src="{{ asset('images/index2.jpeg')}}"/>
<hr>
<p>Venez découvrir les meilleures livres sous notre plateforme à des prix abordables.</p>
