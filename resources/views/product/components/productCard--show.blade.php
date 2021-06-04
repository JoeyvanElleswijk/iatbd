<main>
<section class="productCard a-popup">
    <figure class="productCard__figure">
        <img class="productCard__image" src="../{{$product->image}}" alt="{{$product->name . ' ' . $product->kind}}"/>
    </figure>
    
    <section class="u-float">
        <form action='/product/{{$product->id}}' method="POST">
        @csrf
        <article class="productCard__article">
            <h2 class="gridCard__title">{{$product->name}}</h2>
            <a class="gridCard__breadcrumb" href="{{$product->kind}}"> {{$product->kind . '   >   ' . $product->name}}</a>
            <h4 class="gridCard__leenbaar">Uitleen deadline: {{$product->deadline}} </h4>
            <h3 class="gridCard__title gridCard__title--margin ">Beschrijving</h3>
            <p class="gridCard__text">{{$product->description}} </p>
            <button class="gridCard__btn" type="submit"> Product lenen</button>
            <a href="/product">Terug naar overzicht</a>
        </article> 

        </form>
    </section>
</section>

    <section class="reviews">
        <h3 class="reviews__title reviews__title--groter reviews__title--color reviews__title--center">Mijn ontvangen recenties </h3>
            <ul class="reviews__list">
            @foreach ($reviews as $review)
                <li class="reviews__item">
                    <h4 class="reviews_text">{{$review->Beschrijving}}</h4>
                    <p class="reviews_name">{{$review->Geschreven_door}}</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </li> 
            @endforeach   
        </ul>
    </section>
</main>