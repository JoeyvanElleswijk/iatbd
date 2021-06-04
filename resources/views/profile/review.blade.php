@extends('default')

@section('content')
    <main>
        <section class="add">
            <h1 class="add__title"> Share een item </h1>
            <form class="create-form" action="/review" method="POST">
                @csrf
                <label for="user">Gebruiker</label>
                    <select class="create-form__input" name="gebruiker" id="gebruiker">
                        @foreach($gebruikers as $gebruiker)
                        <option value={{$gebruiker->name}}>{{$gebruiker->name}}</option>
                        @endforeach
                    </select>
                <label for="description">Beschrijving</label>
                <textarea class="create-form__input create-form__input--height" name="description" id="description"> </textarea>
                
                <div class="create-form__u-flex">
                    <a class="create-form__btn" href="/index"><button class="create-form__btn create-form__btn--margin" type="submit">Cancel</button></a>
                    <a class="create-form__btn"><button class="create-form__btn" type="submit">Toevoegen</button></a>
                </div>
            </form>
        </section>
    </main>
@endsection