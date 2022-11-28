<form action="{{route('commande')}}" method="POST">
    @csrf
    <!-- Le Lien pour retirer un produit du panier -->
    <div class="">
        <input type="hidden" value="{{ $product->id }}" name="id">
        <input type="hidden" value="{{ $product->name }}" name="name">
        <input type="hidden" value="{{ $product->price }}" name="price">
        <input type="hidden" value="{{ $sommePrixParQuantite }}"  name="total">
        <input type="hidden" value="{{ $product->quantity }}" name="quantity">
        {{-- <input type="hidden" value="{{ $product->name }}" name="user"> --}}
        <button class="btn btn-success text-uppercase" title="Retirer tous les produits du panier" >Je passe ma commande</button>
    </div>
</form>