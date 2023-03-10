<!-- Hero Section Begin -->
<section class="hero">

    <div class="container">
        <div class="row">

            <!-- category -->
            <div class="col-lg-3">
                <div class="hero__categories">

                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>

                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>

                </div>
            </div>

            <!-- search -->
            <div class="col-lg-9">
                <div class="hero__search">

                    <div class="hero__search__form">
                        <form action="/">

                            <input type="text" class="form-control" placeholder="Search Products?" name="search"
                                value="{{ request('search') }}">
                            <button type="submit" class="site-btn">SEARCH</button>

                        </form>
                    </div>

                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>

                </div>

                @foreach ($jumbotronInfo as $info)
                    <div class="hero__item set-bg" data-setbg="{{ $info['imageJumbotron'] }}">
                        <div class="hero__text">
                            <span>{{ $info['judulJumbotron'] }}</span>
                            <h2>{{ $info['judulUtama'] }}</h2>
                            <h2>{{ $info['organic'] }}</h2>
                            <p>{{ $info['deskripsi'] }}</p>
                            <a href="#" class="primary-btn">{{ $info['action'] }}</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

</section>
<!-- Hero Section End -->
