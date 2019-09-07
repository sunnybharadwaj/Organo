<template>
    <div id="home-page">

        <VideoHeaderComponent>
            <div slot="header-video">
                <div class="mobile">
                    <VideoComponent v-if="screenName == 'mobile'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/mobile/home_mobile.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="tablet">
                    <VideoComponent v-if="screenName == 'tablet'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/tablet/home_tablet.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="sd">
                    <VideoComponent v-if="screenName == 'sd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/sd/home_sd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="hd">
                    <VideoComponent v-if="screenName == 'hd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/hd/home_hd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
                <div class="wide">
                    <VideoComponent v-if="screenName == 'wide'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/home.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
            </div>

            <div class="header-content" slot="header-content">
                <h1>Co-creating eco-habitats that celebrate living</h1>
                <div class="separator"></div>
                <div class="sm:hidden mb-6"></div>
                <p class="hl-body">Organo builds full-featured sustainable living environments harmlessly integrated
                    into the natural world, supportive of a healthy way of living.</p>
                <div class="button-block">
                    <div class="lg-button inline-block mr-8">
                        <span class="text">Learn More</span>
                    </div>
                    <div class="lg-button inline-block">
                        <span class="text">Watch Video</span>
                    </div>
                </div>
            </div>
        </VideoHeaderComponent>


        <section id="purpose">
            <div class="illustration px-6 ">
                <img class="mx-auto" :src="'/static/sapthapatha/sapthapatha_wide.png'" alt="">

            </div>
            <div class="mb-12"></div>

            <h3>To counter the drawbacks of urbanization, Organo has taken up the challenge of developing eco-habitats
                thriving in balanced harmony integrated with nature, offering a rurban living experience.</h3>


            <div class="flex flex-wrap feature-points">
                <div class="w-full sm:w-full md:w-2/4 lg:w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">Rurban way of living</div>
                    <p class="sm-body">The benefits of urbanization and the feel of a rural environment brings together
                        the best of both worlds. Organo offers an integrated alternate-living experience where residents
                        could take part in organic farming and other collective activities, while maintaining their
                        private space.</p>
                </div>
                <div class="w-full sm:w-full md:w-2/4 lg:w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">Sustainability on all fronts</div>
                    <p class="sm-body">Sustainability, biodiversity, harnessing natural resources and organic living are
                        at the driving principles of Organo. Sapthapatha, or the ‘Seven strands of sustainable living’
                        help us individually focus on sustainable development in each of the distinct areas.</p>
                </div>
                <div class="w-full sm:w-full md:w-2/4 lg:w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">A conscious community</div>
                    <p class="sm-body">We focus on building communities that grows to be conscious, conscientious and
                        evolutionary; one that not only takes but gives back. We strive to create the right balance
                        between private and personal life for the people in our community.</p>
                </div>
                <div class="w-full sm:w-full md:w-2/4 lg:w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">Triple-bottom-line focus</div>
                    <p class="sm-body">Our core philosophy of Samvriddhi (prosperity for all) helps us create replicable
                        community development models built on triple bottom line success (social, environmental and
                        economic areas) and net zero thinking.</p>
                </div>
            </div>
            <div class="container mx-auto">
                <div class="cta-links text-center">
                    <div class="lg-button"><span class="text">Learn about the company</span></div>
                    <div class="lg-button"><span class="text">How we created an opportunity for '<span class="">Sustainable Living</span>'</span>
                    </div>
                </div>
            </div>
        </section>

        <ImageContentComponent>
            <div slot="image" class="wide-image"></div>
            <div slot="content">

                <h2 class="mb-4">A way of life for the passionate and conscious.</h2>
                <p>Privacy of your own villa, the lifestyle of a plush natural resort, the security of a
                    gated community, the advantage of like-minded people and above all, the unmatched joy of
                    healthy and sustainable living. Organo’s Naandi works splendidly as your primary
                    residence as well as a weekend farm-house; All while having the opportunity to
                    experience Nature to its fullest. Experience the manifestation of our first step towards
                    building self-sustainable eco-habitats.</p>
                <div class="mb-8"></div>
                <div class="cta-links">
                    <div class="lg-button inline-block mr-8"><span class="text">Explore Naandi</span></div>
                    <div class="lg-button inline-block"><span class="text">Watch Video</span></div>
                </div>
            </div>
        </ImageContentComponent>


        <section id="home-slider" class="bg-gray-200">
            <SliderComponent>
                <div class="img-container">
                    <img :src="'/static/images/organo_feature/entrance_solar.jpg'" alt="">
                </div>
                <div class="img-container">
                    <img :src="'/static/images/navira.jpg'" alt="">
                </div>
                <div class="img-container">
                    <img :src="'/static/images/school_styled.jpg'" alt="">
                </div>
                <div class="img-container">
                    <img :src="'/static/images/organo_feature/entrance_solar.jpg'" alt="">
                </div>
            </SliderComponent>
        </section>

        <section id="home-testimonials" class="">
            <TestimonialsComponent></TestimonialsComponent>
        </section>

        <section id="home-school" class="school-cta-component">
            <FeatureComponent>
                <slot>
                    <h1 class="mb-4">Organo@School</h1>
                    <h2 class="max-w-4xl">A life changing and enriching experience for the global citizens of
                        tomorrow.</h2>
                    <div class="mb-4"></div>
                    <div class="lg-button">Find out more</div>
                </slot>
            </FeatureComponent>
        </section>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log("screenName");
        },
        data() {
            return {
                screenWidth: screen.width
            }
        },
        computed: {
            screenName: function () {
                if (this.screenWidth <= 640) {
                    return "mobile";
                } else if (this.screenWidth <= 768) {
                    return "tablet";
                } else if (this.screenWidth <= 1024) {
                    return "sd";
                } else if (this.screenWidth <= 1280) {
                    return "hd";
                } else if (this.screenWidth >= 1280) {
                    return "wide";
                }
            }
        }
    }
</script>
