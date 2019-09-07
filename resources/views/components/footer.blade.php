<footer>
    <div class="updates-cta">
        <div class="container mx-auto py-32">
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

    <div id="footer-links">
        <div class="flex flex-wrap footer-nav">
            <div class="w-full lg:w-1/2 footer-nav-links">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-full lg:w-3/12">
                        <router-link to="/" class="footer-nav-link">Home</router-link>
                        <router-link to="/company" class="footer-nav-link">Company</router-link>
                        {{--<router-link to="/team" class="footer-nav-link">Team</router-link>--}}
                    </div>
                    <div class="w-full md:w-full lg:w-5/12">
                        <router-link to="/eco-habitats" class="footer-nav-link">Eco-habitats</router-link>
                        <router-link to="/naandi" class="footer-nav-link">Naandi</router-link>
                        {{--<router-link to="/sustainable-living" class="footer-nav-link">Sustainable Living</router-link>--}}
                    </div>
                    <div class="w-full md:w-full lg:w-4/12">
                        {{--<router-link to="/gallery" class="footer-nav-link">Gallery</router-link>--}}
                        <router-link to="/organo-at-school" class="footer-nav-link">Organo@School</router-link>
                        <router-link to="/contact" class="footer-nav-link">Contact Us</router-link>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 footer-contact">
                <div class="email">
                    <h3>help@organo.com</h3>
                </div>
                <div class="phone flex flex-wrap">
                    <h3 class="w-full md:w-1/2"><span class="text relative"><span></span>81067 56010</span></h3>
                    <h3 class="w-full md:w-1/2"><span class="text relative"><span></span>79933 55227</span></h3>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="logo text-center">
                <img :src="'/static/organo_logo.png'" alt="">
            </div>
            <div class="text-center foot-links">
                <a href="/terms" class="foot-link">Terms</a>
                <a href="/privacy" class="foot-link">Privacy Policy</a>
                <a href="/copyright" class="foot-link">Copyright</a>
            </div>
        </div>
    </div>
</footer>