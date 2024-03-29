@extends('layouts.user.master')
@section('view_produit')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Les details du produit <u class="text-danger">
                        @if ($products->nomTypeArticle == 5 || $products->nomTypeArticle == 6)
                            {{$products->model_produit}}
                        @else
                            {{$products->nom_produit}}
                        @endif
                    </u></h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('accueil')}}"><i class="lni lni-home"></i>Accueil</a></li>
                    <li>Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                <img src="{{asset('storage/'.$products->image_1)}}" id="current" alt="image de {{$products->nom_produit}}" width="" height="400px">
                            </div>
                            <div class="images">
                                <img src="{{asset('storage/'.$products->image_1)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_2)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_3)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_4)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_1)}}" class="img" alt="#">
                            </div>
                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    
                    <div class="product-info">
                        <h2 class="title">
                            Aller pour la promo du {{$products->nom_produit}}
                        </h2>
                        <p class="category"><i class="lni lni-tag"></i>
                            {{$products->nom_produit}} :
                        <a href="javascript:void(0)" class="text-primary">
                            {{$products->types->nomTypeArticle}}
                        </a>
                        </p>
                        <h3 class="price">{{$products->prix_promo}} Frcfa<span class="text-danger">{{$products->prix_reel}} Frcfa</span></h3>
                        <p class="info-text">
                            Ce produit, {{$products->nom_produit}} fait des merveilles concernant sa capacité de résoudre tous problémes maladifs dans lequel il intervient.
                        </p>
                        <form method="POST" action="{{route('cart_add', ['id'=>$products->id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Quantité</label>
                                        <input type="number" name="quantity" value='1' class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-5">
                                    <div class="button cart-button">
                                        <button type="submit" class="btn" style="width: 100%;">Ajouter panier</button>
                                    </div>
                                </div>
                                <p class="col-lg-4 col-md-4 col-12"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-info">
            <div class="single-block">
                <div class="row">
                    @if ($products->types->nomTypeArticle == "Accessoirs" || $products->types->nomTypeArticle == "Ordinateurs")
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Caracteristique</h4>
                                <p>
                                    {{$products->caracteristique}}
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Description</h4>
                                <p>
                                    {{$products->description_produit}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="info-body">
                                <h4>Mode d'utilisation</h4>
                                <p class="normal-list">
                                    {{$products->mode_utilisation}}
                                </p>
                            </div>
                        </div>
                    @endif
                    
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="single-block give-review">
                        <h4>Témoignages du produit</h4>
                        <button type="button" class="btn review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Je témoignagne
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="single-block">
                        <div class="reviews">
                            <h4 class="title">Les differents témoignages des utilisateurs</h4>

                            <div class="single-review">
                                <div class="review-info">
                                    <h4>Awesome quality for the price
                                        <span>Jacob Hammond
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-name">Your Name</label>
                            <input class="form-control" type="text" id="review-name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-email">Your Email</label>
                            <input class="form-control" type="email" id="review-email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-subject">Subject</label>
                            <input class="form-control" type="text" id="review-subject" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-rating">Rating</label>
                            <select class="form-control" id="review-rating">
                                <option>5 Stars</option>
                                <option>4 Stars</option>
                                <option>3 Stars</option>
                                <option>2 Stars</option>
                                <option>1 Star</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="review-message">Review</label>
                    <textarea class="form-control" id="review-message" rows="8" required></textarea>
                </div>
            </div>
            <div class="modal-footer button">
                <button type="button" class="btn">Submit Review</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const current = document.getElementById("current");
    const opacity = 0.6;
    const imgs = document.querySelectorAll(".img");
    imgs.forEach(img => {
        img.addEventListener("click", (e) => {
            //reset opacity
            imgs.forEach(img => {
                img.style.opacity = 1;
            });
            current.src = e.target.src;
            //adding class 
            //current.classList.add("fade-in");
            //opacity
            e.target.style.opacity = opacity;
        });
    });
</script>
@endsection