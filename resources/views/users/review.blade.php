@extends('default')

@section('content')  
<main>
    <section class="heading heading--height heading--width">
        <article class="heading__article">
            <h1 class="heading__title">Jouw gedeelde producten</h1>
            <h3 class="heading__info">Gemakkelijke toegang tot elk item</h3>
        </article>
        <form class="search u-flex">
            <input type="search" id="js--productSearch" onkeyup="productSearch()" class="search__input"  placeholder="Boeken, Fietsen, camera's...">
            <a class="search__link" href="#zoeken">
                <button type="submit" class="search__btn">
                    <span> Zoeken</span>
                </button>
            </a>
        </form>
    </section> 

    <section class="reviews">
    <form>
        @csrf
        <label for="sterren">Geef aantal sterren</label>
        <input class="create-form__input" name="sterren" id="sterren" type="text"/>

        <label for="review">Schrijf een review</label>
            <textarea class="create-form__input create-form__input--height" name="review" id="review"> </textarea>
    </form>
    </section>
</main>
@endsection