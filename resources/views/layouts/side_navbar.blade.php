<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar_menu_responsive/navbar_menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar_menu_responsive/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
    <script src="{{ asset('js/materialize_0.100/materialize.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>

</head>

<body>



    <ul id="slide-out" class="side-nav fixed z-depth-2">
        <div id="image_sidebar">


            <li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Menu Principal</b></a></li>

            <ul class="collapsible" data-collapsible="accordion">
                <li id="dash_users">
                    <div id="dash_users_header" class="collapsible-header waves-effect"><b>Gestion des Achats</b></div>
                    <div id="dash_users_body" class="collapsible-body">
                        <ul>
                            <li id="users_seller">
                                <a class="waves-effect" style="text-decoration: none;"
                                    href="{{route('fournisseurs.index')}}">Liste des
                                    Fournisseurs</a>
                            </li>

                            <li id="users_customer">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li id="dash_products">
                    <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
                    <div id="dash_products_body" class="collapsible-body">
                        <ul>
                            <li id="products_product">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Products</a>
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Orders</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li id="dash_categories">
                    <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
                    <div id="dash_categories_body" class="collapsible-body">
                        <ul>
                            <li id="categories_category">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
                            </li>

                            <li id="categories_sub_category">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li id="dash_brands">
                    <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Brands</b></div>
                    <div id="dash_brands_body" class="collapsible-body">
                        <ul>
                            <li id="brands_brand">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
                            </li>

                            <li id="brands_sub_brand">
                                <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </ul>


    <script src="{{ asset('js/Mon_JS.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('select').material_select();
    });
    </script>
    @yield('liste_fournisseur')
    @yield('ajouter_fournisseur')
    @yield('modifier_fournisseur')
    @yield('ajouter_utilisateur')
    @yield('Liste_utilisateurs')

</body>

</html>