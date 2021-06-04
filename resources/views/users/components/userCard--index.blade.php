<li class="a-popup u-list-style-none gridCard" data-kind-of-product={{$product->kind}}>
    <a href="/product/{{$product->id}}">
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="../{{$product->image}}" alt="{{$product->name . ' ' . $product->kind}}"/>
        </figure>
        <article>
            <p class="gridCard__text">{{$product->name}}</p>
        </article>
    </a>
</li>