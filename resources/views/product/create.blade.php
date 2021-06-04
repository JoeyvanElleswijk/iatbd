@extends('default')

@section('content')
    <main>
        <section class="add">
            <h1 class="add__title"> Share een item </h1>
            <form class="create-form" action="/product" method="POST">
                @csrf
                <label for="image">Kies een afbeelding </label>
                <select class="create-form__input" name="image" id="image">
                    <option value="img/fotografie_default.jpg">fotografie_default.jpg</option>
                    <option value="img/boeken_default.jpg">boeken_default.jpg</option>
                    <option value="img/bouwapparatuur_default.jpg">bouwapparatuur_default.jpg</option>
                    <option value="img/cd-dvd_default.jpg">cd-dvd_default.jpg</option>
                    <option value="img/djapparatuur_default.jpg">djapparatuur_default.jpg</option>
                    <option value="img/instrumenten_default.jpg">instrumenten_default.jpg</option>
                    <option value="img/spelcomputer_default.jpg">spelcomputer_default.jpg</option>
                    <option value="img/transport_default.jpg">transport_default.jpg</option>
                    <option value="img/tuinapparatuur_default.jpg">tuinapparatuur_default.jpg</option>
                    <option value="img/elektronica_default.jpg">elektronica_default.jpg</option>
                </select>

                <label for="name">Titel</label>
                <input class="create-form__input" name="name" id="name" type="text"/>
                <label for="kind">Categorie</label>
                    <select class="create-form__input" name="kind" id="kind">
                        @foreach($kind_of_product as $kind_of_product)
                            <option value="{{$kind_of_product->kind}}">{{$kind_of_product->kind}} </option>
                        @endforeach
                    </select>

                <label for="description">Beschrijving</label>
                <textarea class="create-form__input create-form__input--height" name="description" id="description"> </textarea>

                <label for="dagen">Minimum uitleen dagen</label>
                <input class="create-form__input" name="dagen" id="dagen" type="date"/>

                <div class="create-form__u-flex">
                    <a class="create-form__btn" href="/index"><button class="create-form__btn create-form__btn--margin" type="submit">Cancel</button></a>
                    <a class="create-form__btn"><button class="create-form__btn" type="submit">Toevoegen</button></a>
                </div>
            </form>
        </section>
    </main>
@endsection