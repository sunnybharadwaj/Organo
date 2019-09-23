<footer>
    <div class="updates-cta">
        <div class="container mx-auto ">
            <div class="py-32">
                <div class="text-content">
                    <h2 class="mb-6">There's more to come!</h2>
                    <p class="alt-body">Sign up for our Newsletter and be the first to know about Upcoming projects, Latest
                        news, Editorial content, Community updates and other announcements.</p>

                    <div class="form-wrapper">
                        <form action="">
                            <input type="text" placeholder="Enter your E-mail address">
                            <button>
                                <div class="lg-button"><div class="text">Sign up for Updates</div></div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="footer-links">
        <div class="footer-nav">
            <div class="footer-nav-links">

                </div>
            </div>

        </div>

<div class="footer-container relative">

    <div class="footer-background">
        <div class="text-center">
            <router-link to="/contact">
                <div class="lg-button"><h2>Contact Us</h2></div>
            </router-link>

        </div>
    </div>

    <div class="footer-strip">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <div class="site-map flex flex-wrap">
                        <div class="w-full md:w-full lg:w-4/12 flex flex-col">
                            <router-link to="/eco-habitats" class="footer-nav-link">Eco-habitats</router-link>
                            <router-link to="/naandi" class="footer-nav-link">Naandi</router-link>
                            <router-link to="/sustainable-living" class="footer-nav-link">Sustainable Living</router-link>
                        </div>

                        <div class="w-full md:w-full lg:w-4/12 flex flex-col">
                            <router-link to="/gallery" class="footer-nav-link">Gallery</router-link>
                            <router-link to="/organo-at-school" class="footer-nav-link">Organo@School</router-link>
                            <router-link to="/contact" class="footer-nav-link">Contact Us</router-link>
                        </div>
                        <div class="w-full md:w-full lg:w-4/12 flex flex-col">
                            <router-link to="/" class="footer-nav-link">Home</router-link>
                            <router-link to="/company" class="footer-nav-link">Company</router-link>
                            <router-link to="/team" class="footer-nav-link">Team</router-link>
                        </div>
                    </div>
                </div>
                <div class="signature w-full lg:w-1/2">
                    <div class="logo flex flex-row-reverse">
                        <img :src="'/static/organo_logo_inverted.png'" alt="">
                    </div>
                    <div class="text-right">
                        <a href="/terms" class="footer-nav-link">Terms</a>
                        <a href="/privacy" class="footer-nav-link">Privacy Policy</a>
                        <a href="/copyright" class="footer-nav-link">Copyright</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>