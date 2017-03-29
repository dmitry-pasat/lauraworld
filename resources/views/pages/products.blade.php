@extends('main')

@section('title','Produits')

@section('current_page')
    <?php $current_page = 'products'; ?>
@endsection

@section('content')

        <!-- .page-content start -->
        <div class="page-content custom-img-background dark page-title page-title-6 mb-100">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span>Produits</span></h1>
                            <h1>Vous trouverez notre gamme de produits maison</h1>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div class="page-content">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12 centered clearfix">
                        <div class="custom-heading style-1">
                            <!--<h3><span>Tasty</span></h3>-->
                            <h3>Nos produits</h3>
                            <p>Tous nos produits sont fait maison avec soin et dans le respect. Il se peut que nous manquions d’un produit lors de votre commande ; l’amour que l’on met dans nos produits se cultive dans nos champs, alors merci de votre patience ☺ et merci pour votre commande.</p>
                            <p>Ces produits sont aussi utilisés pour le service traiteur.</p>
                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->
                        <ul class="tabs">
                            <li class="active">
                                <a href="#tab1">Produits frais 100% Suisse, de la ferme à Ropraz</a>
                            </li>
                            <li class="">
                                <a href="#tab2">Bocaux avec produits 100% Suisse</a>
                            </li>
                        </ul><!-- .tabs end -->

                        <!-- .tabs-content-wrap start -->
                        <div class="tab-content-wrap">
                            <!-- #tab1 content start -->
                            <div id="tab1" class="tab-content">

                                <!-- #tab1 element content start -->
                                <img src="img/products/viande_fraiche.png" alt="Viande fraîche de bœuf de Ropraz" class="product_img">

                                <div class="custom-heading style-1">
                                    <h4>Viande fraîche de bœuf de Ropraz</h4>
                                    <h6>CHF 9.50</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>Bête entière, demi ou quart de bœuf – conditionnée sous-vide, découpe selon demande du client</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>viande de bœuf – race Montbéliarde</li>
                                    <li>beaucoup d’amour et fourrage produit sur l’exploitation</li>
                                </ul>

                                <!-- #tab1 element content start -->
                                <img src="img/products/salami.jpeg" alt="Salami de bœuf de Ropraz, env. 300g" class="product_img">
                                <div class="custom-heading style-1">
                                    <h4>Salami de bœuf de Ropraz, env. <br> 300g</h4>
                                    <h6>CHF 7.50</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>A l’ancienne, on aime retrouver ce bon goût de terroir, léger et subtil</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>viande de bœuf – race Montbéliarde</li>
                                    <li>lard</li>
                                    <li>sel nitrité</li>
                                    <li>protéines lactiques</li>
                                    <li>épices</li>
                                    <li>sucre</li>
                                    <li>glutamate monosodique</li>
                                    <li>ascorbate de sodium</li>
                                </ul>

                                <!-- #tab1 element content start -->
                                <img src="img/products/viande_sechee.jpeg" alt="Viande séchée de bœuf de Ropraz, en morceau. 300g – 500g – 700g" class="product_img">
                                <div class="custom-heading style-1">
                                    <h4>Viande séchée de bœuf de Ropraz, en morceau. <br> 300g – 500g – 700g</h4>
                                    <h6>CHF 9.50</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>Pas besoin de trancheuse, elle est tellement tendre qu’on la déguste au couteau…</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>viande de bœuf – race Montbéliarde</li>
                                    <li>sel de cuisine iodé</li>
                                    <li>épices</li>
                                    <li>dextrose</li>
                                    <li>glucose</li>
                                    <li>ascorbate de sodium</li>
                                    <li>sel nitrité</li>
                                </ul>
                            </div><!-- #tab1 content end -->

                            <!-- #tab2 content start -->
                            <div id="tab2" class="tab-content">
                                <!-- #tab2 element content start -->
                                <img src="img/products/bolodoise.jpeg" alt="La Bolo’doise – 300g" class="product_img">
                                <div class="custom-heading style-1">
                                    <h4>La Bolo’doise <br> 300g</h4>
                                    <h6>CHF 16.-</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>Tartiné sur du pain grillé pour l’apéro ou chauffé et servi avec des pâtes</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>tomate</li>
                                    <li>saucisse aux choux Vaudoise IGP</li>
                                    <li>oignons</li>
                                    <li>ail</li>
                                    <li>sel</li>
                                    <li>poivre</li>
                                </ul>

                                <!-- #tab2 element content start -->
                                <img src="img/products/confits_d'oignons.jpeg" alt="Confit d’oignons rouges au piment d’Espelette – 320g" class="product_img">
                                <div class="custom-heading style-1">
                                    <h4>Confit d’oignons rouges au piment d’Espelette <br> 320g</h4>
                                    <h6>CHF 10.-</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>Accompagne le fromage, la viande rouge, le foie gras ou simplement sur du pain…</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>oignons rouges</li>
                                    <li>betterave</li>
                                    <li>sucre</li>
                                    <li>piment frais</li>
                                    <li>piment séché d’Espelette</li>
                                    <li>sel</li>
                                </ul>

                                <!-- #tab2 element content start -->
                                <img src="img/products/confits_d'oignons.jpeg" alt="Confit d’oignons blancs au citron vert – 320g" class="product_img">
                                <div class="custom-heading style-1">
                                    <h4>Confit d’oignons blancs au citron vert <br> 320g</h4>
                                    <h6>CHF 10.-</h6>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div><!-- .custom-heading.style-1 end -->
                                <p>
                                    <span>Accompagne le fromage, le poisson, le foie gras ou simplement sur du pain…</span>
                                </p>
                                <h5>Ingrédients :</h5>
                                <ul>
                                    <li>oignons blancs</li>
                                    <li>sucre</li>
                                    <li>jus et zeste de citron vert</li>
                                </ul>
                            </div><!-- #tab2 content end -->
                        </div><!-- .tab-content-wrap end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
                <!-- .row start -->
                {{--<div class="row">--}}
                    {{--<div class="col-md-12 centered triggerAnimation animated" data-animate='fadeInUp'>--}}
                        {{--<a href="http://www.legoutsuisse.ch" class="btn btn-big black"><span>Pour toutes vos commandes cliquez ici</span></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .row end -->--}}
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection
