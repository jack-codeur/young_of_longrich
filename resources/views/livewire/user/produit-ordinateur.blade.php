<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Les differents produits disponible</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i>Accueil</a></li>
                    <li><a href="javascript:void(0)">Boutique</a></li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">

                <div class="product-sidebar">

                    <div class="single-widget search">
                        <h3>Rechercher un produit</h3>
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>


                    <div class="single-widget">
                        <h3>Toutes les categories</h3>
                        <ul class="list">
                            <li>
                                <a href="{{ route('produit_sante')}}">Santé</a><span>(1138)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_soins')}}">Soins et beauté</a><span>(2356)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_hygiene')}}">Hygiéne et traitement</a><span>(420)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_bebe')}}">Spécial Bébé</a><span>(1239)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_ordis')}}">Ordinateurs</a><span>(874)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_autres')}}">Accessoires</a><span>(340)</span>
                            </li>
                        </ul>
                    </div>



                </div>

            </div>
            <div class="col-lg-9 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="product-sorting">
                                    <h4>Les produits recents</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lni lni-list"></i></button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset('assets/images/sante/arthro-supreviver.jpg')}}" alt="#">
                                            <div class="button">
                                                <a href="{{ route('details_produit')}}" class="btn"><i class="lni lni-cart"></i>Ajouter panier</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="title">
                                                <a href="{{ route('details_produit')}}">Arthro Supreviver</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$199.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset('assets/images/sante/Berry-Oil-300x300.jpeg')}}" />
                                            <span class="sale-tag">-25%</span>
                                            <div class="button">
                                                <a href="{{ route('details_produit')}}" class="btn"><i class="lni lni-cart"></i>Ajouter panier</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="title">
                                                <a href="{{ route('details_produit')}}">Berry Oil</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$275.00</span>
                                                <span class="discount-price">$300.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset('assets/images/sante/CORDYCEPS-MILITARIS-600x600.jpg')}}"/>
                                            <div class="button">
                                                <a href="{{ route('details_produit')}}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Camera</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">WiFi Security Camera</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$399.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-4.jpg" alt="#">
                                            <span class="new-tag">New</span>
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Phones</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">iphone 6x plus</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$400.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-5.jpg" alt="#">
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Headphones</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">Wireless Headphones</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$350.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-6.jpg" alt="#">
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Speaker</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">Mini Bluetooth Speaker</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$70.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-7.jpg" alt="#">
                                            <span class="sale-tag">-50%</span>
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Headphones</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">Wireless Headphones</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$100.00</span>
                                                <span class="discount-price">$200.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-8.jpg" alt="#">
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Laptop</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">Apple MacBook Air</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$899.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="assets/images/products/product-2.jpg" alt="#">
                                            <span class="sale-tag">-25%</span>
                                            <div class="button">
                                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">Speaker</span>
                                            <h4 class="title">
                                                <a href="product-grids.html">Bluetooth Speaker</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><span>5.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>$275.00</span>
                                                <span class="discount-price">$300.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <div class="pagination left">
                                        <ul class="pagination-list">
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li class="active"><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Watches</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Xiaomi Mi Band 5</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$199.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="#">
                                                    <span class="sale-tag">-25%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Speaker</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Big Power Sound Speaker</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$275.00</span>
                                                        <span class="discount-price">$300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Camera</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">WiFi Security Camera</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$399.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-4.jpg" alt="#">
                                                    <span class="new-tag">New</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Phones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">iphone 6x plus</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$400.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-7.jpg" alt="#">
                                                    <span class="sale-tag">-50%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Headphones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">PX7 Wireless Headphones</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$100.00</span>
                                                        <span class="discount-price">$200.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <div class="pagination left">
                                        <ul class="pagination-list">
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li class="active"><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>