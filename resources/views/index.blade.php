@extends('default')



@section('content')   
    <main>
        <section class="heading">
            <article class="heading__article">
                <h1 class="heading__title">Share (bijna) alles</h1>
                <h3 class="heading__info">Gemakkelijke toegang tot elk item</h3>
            </article>

            <div class="search u-flex">
            <figure class="search__imageholder">
                        <img class="search__image" src="/img/heading.svg" alt="toegang tot meer">
                </figure>
                <input type="text" id="js--search" onkeyup="search()" class="search__input" placeholder="Boeken, Fietsen, camera's...">
                <a class="search__link" href="#producten">
                    <button type="submit" class="search__btn">
                        <span> Zoeken</span>
                    </button>
                </a>
            </div>

            <div class="share u-flex">
                <p class="share__text">Of</p>
                <a href="/product/create"> <button class="share__btn">Share</button></a>
            </div>
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

        <section class="category">
            <h3 class="category__title category__title--groter">Verken onze categorieën </h3>
            <ul class="category__list u-grid-5" id="producten">
                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/fotografie_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Video & fotografie </h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/boeken_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Boeken</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/cd-dvd_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Cd's en Dvd's</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/elektronica_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Elektronica</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/djapparatuur_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">DJ apparatuur</h4>
                </li> 
                
                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/instrumenten_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Muziek instrumenten</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/spelcomputer_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Spelcomputers en Games</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/transport_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Transport</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/tuinapparatuur_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Tuin apparatuur</h4>
                </li> 

                <li class="category__item">
                    <figure class="category__imageholder">
                        <img class="category__image" src="/img/bouwapparatuur_default.jpg" alt="toegang tot meer">
                    </figure>
                    <h4 class="category_text">Bouw apparatuur</h4>
                </li> 
 

            </ul>
        </section>

        <section class="discover">
            <figure class="discover__imageholder">
                <img class="discover__image" src="/img/discover.svg" alt="toegang tot meer">
            </figure>

            <article class="discover__article">
                <h4 class="discover__title discover__title--groter">Krijg (bijna) overal <br>toegang op</h4>
                <p class="discover__text">Waarom zou je dingen kopen die je maar een paar keer per maand gebruikt? Wanneer u ze kunt lenen.</p>
                <br>
                <p class="discover__text">Meer geld voor jou. Minder afval voor de planeet.</p>
                <button class="discover__btn discover__btn--margin-top">Ontdenk</button>
            </article>
            
        </section>

        <section class="reviews">
        <h3 class="reviews__title reviews__title--groter reviews__title--color reviews__title--center">Recente leen recenties </h3>
            <ul class="reviews__list">
                <li class="reviews__item">
                    <h4 class="reviews_text">"Dit is mijn tweede lening bij Joey - geweldige uitrusting, geweldige prijs en uitstekende service!"</h4>
                    <p class="reviews_name">Joey, van Elleswijk</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </li> 

                <li class="reviews__item">
                    <h4 class="reviews_text">"Dit is mijn tweede lening bij Joey - geweldige uitrusting, geweldige prijs en uitstekende service!"</h4>
                    <p class="reviews_name">Joey, van Elleswijk</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </li> 
            </ul>
        </section>
    </main>  
@endsection

