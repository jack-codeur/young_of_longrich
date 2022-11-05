<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 custom-padding-right">
                <div class="slider-head">

                    <div class="hero-slider">

                        <div class="single-slider" style="background-image: url(assets/images/hero/slider-bg3.jpg);">
                        </div>

                        <div class="single-slider" style="background-image: url(assets/images/hero/photo_2022.jpg);">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Articles Par Catégories</h2>
                    <p>Trouvez ici tous les produits et les articles que vous utilisez au quotidien à un prix très bas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading fs-5">Santé</h3>
                    <ul class="">
                        <li>Fibrome</li>
                        <li>Cancère</li>
                        <li>Infection</li>
                        <li>Tension ...</li>
                        <li><a class="btn" href="{{ route('produit_sante')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">Voir plus</a></li>
                    </ul>
                    <div class="images">
                        <img src="assets/images/featured-categories/calcium.png" alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading fs-5">Soins et beauté</h3>
                    <ul class="">
                        <li>Vieillissement</li>
                        <li>Corps sèc</li>
                        <li>Tâche et Bouton</li>
                        <li>Vergeture ...</li>
                        <li><a class="btn" href="{{ route('produit_soins')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">Voir plus</a></li>
                    </ul>
                    <div class="images">
                        <img src="assets/images/featured-categories/lait-corporel.png" alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading fs-5">Hygiène et entretien</h3>
                    <ul class="">
                        <li>Infection</li>
                        <li>Cancère</li>
                        <li>Fibrome</li>
                        <li>mauvaise odeur ...</li>
                        <li><a class="btn" href="{{ route('produit_hygiene')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">Voir plus</a></li>
                    </ul>
                    <div class="images">
                        <img src="assets/images/featured-categories/serviette-hygienique-magnetiques.png" alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Spécial Bébé</h3>
                    <ul class="">
                        <li>La peau sèche</li>
                        <li>Les boutons</li>
                        <li>Les tâches</li>
                        <li>Tous types de produits Bébé</li>

                        <li><a class="btn" href="{{ route('produit_bebe')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">Voir plus</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{ asset('assets/images/soins/collection_Bebe_360x.jpg')}}" alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Ordinateurs Portable</h3>
                    <ul class="">
                        <li>Model HP</li>
                        <li>Lenevo</li>
                        <li>MacBook</li>
                        <li>Acces ...</li>
                        <li><a class="btn" href="{{ route('produit_ordis')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">Voir plus</a></li>
                    </ul>
                    <div class="images">
                        <img src="assets/images/featured-categories/ideapad-ordinateur.png" alt="#">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-category">
                    <h3 class="heading">Autres</h3>
                    <ul class="">
                        <li>Disque dure</li>
                        <li>Clé USB</li>
                        <li>Chargeur</li>
                        <li>Ecouteur ...</li>
                        <li><a class="btn" href="{{ route('produit_autres')}}" style="font-size: 14px; color: black; background-color: rgba(0, 255, 204, 0.88)">VOIR PLUS</a></li>
                    </ul>
                    <div class="images">
                        <img src="assets/images/featured-categories/fetured-item-6.png" alt="#">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Produits disponibles</h2>
                    <p>Les produits en ligne.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/hygiene/savon_noir.jpg')}}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">soins et beauté</span>
                        <h4 class="title">
                            <a href="product-grids.html">Savon noir</a>
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
                            <span>7500 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/soins/babycream-500x500.jpg')}}" alt="#">
                        <span class="sale-tag">-25%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">soins et beauté</span>
                        <h4 class="title">
                            <a href="product-grids.html">Lait de corps bébé</a>
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
                            <span>3800 frcfa</span>
                            <span class="discount-price">4000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/soins/huile.jpg')}}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Santé/Soin et beauté</span>
                        <h4 class="title">
                            <a href="product-grids.html">Huile de serpent</a>
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
                            <span>8000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/soins/Huile1_580x.webp')}}" alt="#">
                        <span class="new-tag">New</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Soins et beauté</span>
                        <h4 class="title">
                            <a href="product-grids.html">Huil de ...</a>
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
                            <span>8000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <span class="sale-tag">-10%</span>
                        <img src="{{ asset('assets/images/sante/Berry-Oil-300x300.jpeg') }}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Santé</span>
                        <h4 class="title">
                            <a href="product-grids.html">Berry Oil</a>
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
                            <span>27.000 frcfa</span>
                            <span class="discount-price">30.000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/sante/CORDYCEPS-MILITARIS-600x600.jpg')}}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Santé</span>
                        <h4 class="title">
                            <a href="product-grids.html">Cordyset militariste</a>
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
                            <span>62.000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/sante/arthro-supreviver.jpg') }}" alt="#">
                        <span class="sale-tag">-50%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Santé</span>
                        <h4 class="title">
                            <a href="product-grids.html">Arthro supreviver</a>
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
                            <span>23000 frcfa</span>
                            <span class="discount-price">25000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/sante/Cafe-Longrich-300x300.webp') }}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Santé</span>
                        <h4 class="title">
                            <a href="product-grids.html">Cordyset Café</a>
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
                            <span>7000 frcfa</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="banner section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-3">

                <div class="single-blog">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/sante/secret_femme.jpg') }}" alt="#">
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">

                <div class=" single-blog">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/sante/femme_t.jpg') }}" alt="#">
                    </div>
                    <div class="blog-content">
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">

                <div class="single-blog">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/sante/alcalin.jpg') }}" alt="#">
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-4 col-12 mb-3">

                <div class="single-blog">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/sante/serviette.jpg') }}" alt="#">
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">

                <div class="single-blog">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/sante/secret_homme.jpg') }}" alt="#">
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<section class="special-offer section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Special Offer</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="assets/images/products/product-3.jpg" alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
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
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="assets/images/products/product-8.jpg" alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
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
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="assets/images/products/product-6.jpg" alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                        Cart</a>
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
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="single-banner right" style="background-image:url('{{ asset('assets/images/banner/banner-3-bg.jpg')}}');margin-top: 30px;">
                    <div class="content">
                        <h2>Samsung Notebook 9 </h2>
                        <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                            incididunt ut labore.</p>
                        <div class="price">
                            <span>$590.00</span>
                        </div>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="offer-content">
                    <div class="image">
                        <img src="assets/images/offer/offer-image.jpg" alt="#">
                        <span class="sale-tag">-50%</span>
                    </div>
                    <div class="text">
                        <h2><a href="product-grids.html">Bluetooth Headphone</a></h2>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$200.00</span>
                            <span class="discount-price">$400.00</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
                            eiusmod tempor labores.</p>
                    </div>
                    <div class="box-head">
                        <div class="box">
                            <h1 id="days">000</h1>
                            <h2 id="daystxt">Days</h2>
                        </div>
                        <div class="box">
                            <h1 id="hours">00</h1>
                            <h2 id="hourstxt">Hours</h2>
                        </div>
                        <div class="box">
                            <h1 id="minutes">00</h1>
                            <h2 id="minutestxt">Minutes</h2>
                        </div>
                        <div class="box">
                            <h1 id="seconds">00</h1>
                            <h2 id="secondstxt">Secondes</h2>
                        </div>
                    </div>
                    <div style="background: rgb(204, 24, 24);" class="alert">
                        <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>