<header class="">

    <nav class="">
        <div class="brand">
                <router-link to="/" exact>
                    <div class="flex logo-container">
                        <img :src="'/static/organo_logo_inverted.png'" class="inverted-logo" alt="">
                        <img :src="'/static/organo_logo.png'" class="logo" alt="">
                    </div>
                </router-link>
        </div>


        <div class="mobile">
            <div id="mobile-menu-button" class="lg-button mobile-menu-button">Menu</div>
            <div class="full-screen-nav hidden" >
                <img id="menu-close-button" :src="'/static/icons/close.svg'" alt="">
                <div class="text-center flex flex-col link-list">
                    <router-link to="/" class="lg-button" exact><span class="text">Home</span></router-link>
                    <router-link to="/company" class="lg-button"><span class="text">Company</span></router-link>
                    <router-link to="/team" class="lg-button"><span class="text">Team</span></router-link>
                    <router-link to="/eco-habitats" class="lg-button"><span class="text">Eco-Habitats</span></router-link>
                    <router-link to="/naandi" class="lg-button"><span class="text">Naandi</span></router-link>
                    {{--<router-link to="/sustainable-living" class="lg-button"><span class="text">Sustainable Living</span></router-link>--}}
                    <router-link to="/organo-at-school" class="lg-button"><span class="text">Organo@School</span></router-link>
                    <router-link to="/gallery" class="lg-button"><span class="text">Gallery</span></router-link>
                    <router-link to="/contact"><h3 class="lg-button">Contact</h3></router-link>
                </div>
            </div>
        </div>

        <div class="sd">
            <div class="left-block">
                <div class="line-1">
                    <span class="inline-block">
                        <span class="block">
                            <router-link class="nav-link" to="/company"><span class="text">Company</span></router-link>
                        </span>
                        <span class="block">
                            <router-link class="nav-link" to="/team"><span class="text">Team</span></router-link>
                        </span>
                    </span>

                    <span class="inline-block">
                        <span class="block">
                            <router-link class="nav-link" to="/eco-habitats"><span class="text">Eco-Habitats</span></router-link>
                        </span>
                        <span class="block">
                            <router-link class="nav-link" to="/naandi"><span class="text">Naandi</span></router-link>
                        </span>
                    </span>

                    <span class="inline-block">
                        <span class="block">
                            <a class="nav-link" href="#">Events</a>
                        </span>
                        <span class="block">
                            <router-link class="nav-link" to="/organo-at-school"><span class="text">Organo@School</span></router-link>
                        </span>
                    </span>

                    <span class="inline-block">
                        <span class="block">
                            <router-link class="nav-link" to="/gallery"><span class="text">Gallery</span></router-link>
                        </span>
                        <span class="block">
                            <a class="nav-link" href="#">&nbsp;</a>
                        </span>
                    </span>
                </div>


            </div>
            <div class="right-block text-right">
                <router-link to="/contact"><h3 class="lg-button">Contact</h3></router-link>
            </div>
        </div>

    </nav>
    {{--Inverted navigation--}}
    {{--Inverted Logo--}}
    {{--Link list left--}}
    {{--Link list right--}}


    {{--Fixed navigation--}}


</header>

