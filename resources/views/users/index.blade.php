@extends('default')

@section('content')  
<main>
    <section class="heading heading--height heading--width">
        <article class="heading__article">
            <h1 class="heading__title">Producten overzicht</h1>
            <h3 class="heading__info">Gemakkelijke toegang tot elk item</h3>

        </article>
        <form class="search u-flex">
            <input type="search" id="js--productSearch" onkeyup="productSearch()" class="search__input" placeholder="Boeken, Fietsen, camera's...">
            <a class="search__link" href="#zoeken">
                <button type="submit" class="search__btn">
                    <span> Zoeken</span>
                </button>
            </a>
        </form>
    </section> 

    <section class="info">
            <figure class="info__imageholder">
                <img class="info__image" src="/img/toegang.svg" alt="toegang tot meer">
            </figure>
            <article class="info__article">
                <h3 class="info__title">Toegang tot meer</h3>
                <p class="info__text">Streef passies na. Krijg dingen gedaan.</p>
            </article>

            <figure class="info__imageholder info__imageholder--margin-top">
                <img class="info__image" src="/img/money.svg" alt="toegang tot meer">
            </figure>
            <article class="info__article">
                <h3 class="info__title">Bespaar geld</h3>
                <p class="info__text">Koop minder. Leen voordeling spullen.</p>
            </article>

            <figure class="info__imageholder info__imageholder--margin-top">
                <img class="info__image" src="/img/groen.svg" alt="toegang tot meer">
            </figure>
            <article class="info__article">
                <h3 class="info__title">Help de planeet</h3>
                <p class="info__text">Leef lichter. Verminder afval.</p>
            </article>
        </section>

    <section class="product">
        <form class="product__filter">
            <label class="product__label"for="elektronica"> Elektronica</label>
            <input class="product__input" id="elektronica" name="elektronica" type="checkbox"/>

            <label class="product__label"for="transport"> Transport</label>
            <input class="product__input" id="transport" name="transport" type="checkbox"/>

            <label class="product__label"for="fotografie"> Film & Photography</label>
            <input class="product__input" id="fotografie" name="fotografie" type="checkbox"/>

            <label class="product__label"for="dvd"> Cd & Dvd's</label>
            <input class="product__input" id="dvd" name="dvd" type="checkbox"/>

            <label class="product__label"for="spelcomputer"> Spelcomputer & Games</label>
            <input class="product__input" id="spelcomputer" name="spelcomputer" type="checkbox"/>

            <label class="product__label"for="djapparatuur"> DJ apparatuur</label>
            <input class="product__input" id="djapparatuur" name="djapparatuur" type="checkbox"/>

            <label class="product__label"for="bouwapparatuur"> Bouw apparatuur</label>
            <input class="product__input" id="bouwapparatuur" name="bouwapparatuur" type="checkbox"/>

            <label class="product__label"for="instrumenten"> Instrumenten</label>
            <input class="product__input" id="instrumenten" name="instrumenten" type="checkbox"/>

            <label class="product__label"for="tuinapparatuur"> Tuin apparatuur</label>
            <input class="product__input" id="tuinapparatuur" name="tuinapparatuur" type="checkbox"/>

            <label class="product__label"for="boeken"> Boeken</label>
            <input class="product__input" id="boeken" name="boeken" type="checkbox"/>
        </form>

        <ul class="product__list" id="zoeken">
            @foreach($product as $product)
                @include('users.components.userCard--index')
            @endforeach
        </ul>
    </section>
</main>
@endsection