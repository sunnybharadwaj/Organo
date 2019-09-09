<template>
    <div id="eco-habitat-page">
        <VideoHeaderComponent>
            <div slot="header-video">
                <div class="mobile">
                    <VideoComponent v-if="screenName == 'mobile'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/mobile/naandi_mobile.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="tablet">
                    <VideoComponent v-if="screenName == 'tablet'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/tablet/naandi_tablet.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="sd">
                    <VideoComponent v-if="screenName == 'sd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/sd/naandi_sd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="hd">
                    <VideoComponent v-if="screenName == 'hd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/hd/naandi_hd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
                <div class="wide">
                    <VideoComponent v-if="screenName == 'wide'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/naandi.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
            </div>

            <div slot="header-content">
                <h1 class="mb-0">Eco-Habitat</h1>
                <div class="pronunciation">[ <span class="font-bold">ek</span>-oh, <span class="font-bold">ee</span>-koh
                    - <span class="font-bold">hab</span>-i-tat ]
                </div>
                <p class="hl-body">An integrated eco-system as a living space, consciously created with sustainability
                    principles at its center, designed for having the minimal impact without contaminating the
                    environment in it or around it.</p>
                <!--<div class="button-block">-->
                <!--<div class="lg-button inline-block mr-8">-->
                <!--<span class="text">Learn More</span>-->
                <!--</div>-->
                <!--<div class="lg-button inline-block">-->
                <!--<span class="text">Watch Video</span>-->
                <!--</div>-->
                <!--</div>-->
            </div>
        </VideoHeaderComponent>

        <section>
            <div class="container mx-auto">
                <h2 class="font-normal">
                    At Organo, we create eco-habitats at the intersection of rural and urban experiences, offering
                    a way to live a life integrated with nature, to help build sustainable communities that care.
                </h2>
            </div>
        </section>
        <div class="image-content-list">
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Agriculture at the center</h3>
                    <p class="alt-body">Health is one of the primary concerns of the modern urban individual, with produce
                        shipping with high levels of toxins. Having recognized this, we build our communities with Organic
                        Agriculture at its center. Eco-system first, inhabit later.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Flora and Fauna necessary to create the sustainable cycle</h3>
                    <p class="alt-body">Building an eco-system requires us to have all the pieces necessary to create a
                        consistent repeatable cycle. We had to expand our vision entirely towards learning and understanding
                        what it takes to create a sustainable environments and create natural cycles of growth.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Self growing communities that take care of themselves</h3>
                    <p class="alt-body">Eco-habitats depend on its habitants for its conservation and sustainability. All
                        our
                        community members come together to create an environment of natural growth and sustenance. We
                        offer you a way to be independently sustainable by yourself as well as join in with the rest of
                        the community on collective efforts.
                    </p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Merging Urban and Rural experiences</h3>
                    <p class="alt-body">For many, the sight of a rural setting brings about feelings of
                        uninterrupted harmony. We wanted to capture that, while still offering you the opportunity for a
                        comfortable lifestyle with all possible amenities expected from a modern living community. </p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
        </div>



        <section id="sustainability">
            <div class="container mx-auto">
                <div class="max-w-5xl">
                    <h2 class="max-w-4xl mb-8">
                        Our primary objective was to create an on-going practice of sustainability
                    </h2>
                    <h3 class="font-normal">
                        To pursue sustainability, we have created processes within seven layers or strands which
                        independently and interdependently work together. <span class="font-bold">Food, Water, Air, Earth, Energy, Shelter</span>
                        and
                        <span class="font-bold">People</span> are the central areas that help us think towards a
                        sustainable future.
                    </h3>
                </div>
                <div class="mb-6"></div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">Creating healthy source of nutrition through <span class="font-bold">food</span> / produce grown using organic
                                        farming practices without the need for chemicals.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/food.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">Employ advanced scientific procedures of conservation and treatment of <span class="font-bold">water</span> and regularly monitor overall consumption vs production.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/water.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">An endless supply of fresh <span class="font-bold">Air</span> wherever you are - We deliver geo-cooled fresh air into homes through our Earth Air Tunnel System.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/air.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">Protect the <span class="font-bold">Earth</span> by preserving soil health by using organic methods and fertilizers, employ necessary waste management and recycling processes.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/earth.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">
                                        Produce all <span class="font-bold">Energy</span> from within the space through renewable sources like solar energy and a bio-gas plant.
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/energy.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">Create <span class="font-bold">Shelter</span> within nature while maintaining bio-diversity. Open yet personal living spaces and wide communal spaces incorporating comforts of this day and age.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/shelter.png'" alt="">
                        </div>
                    </div>
                </div>
                <div class="sustainable-strand">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-10/12">
                            <div class="max-w-4xl">
                                <div class="py-12">
                                    <h3 class="font-normal">Encourage a community of <span class="font-bold">People</span> who live together responsibly, share their time, knowledge and expertise towards co-creating and sustaining the environment around them.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/12">
                            <img :src="'/static/sapthapatha/people.png'" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="sapthapatha" class="hidden">
            <div class="container mx-auto">
                <div class="intro">
                    <h2>Sapthapatha</h2>
                    <h3>7 strands of sustainability</h3>
                    <p class="alt-body">Our primary endeavor is to protect air, water, land and ecological systems to
                        safeguard individual health and foster a sustainable future. In order to reduce environmental,
                        energy and community footprints, Organo has identified seven different aspects where progress
                        towards sustainability can be achieved. </p>
                </div>

            </div>


            <div class="strands-wrapper">
                <div class="flex flex-wrap strands-desc">
                    <div class="w-full md:w-1/2 lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/food.png'" alt="">
                        </div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/water.png'" alt="">
                        </div>
                        <div class="title"><h3>Water</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/air.png'" alt="">
                        </div>
                        <div class="title"><h3>Air</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/earth.png'" alt="">
                        </div>
                        <div class="title"><h3>Earth</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap strands-desc">
                    <div class="w-full md:w-1/2 lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/energy.png'" alt="">
                        </div>
                        <div class="title"><h3>Energy</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/shelter.png'" alt="">
                        </div>
                        <div class="title"><h3>Shelter</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/people.png'" alt="">
                        </div>
                        <div class="title"><h3>People</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic
                            farming practices makes Organo Naandi healthier.
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto">
                <div class="lg-button"><h2 class="">Learn more about Sustainable Living</h2></div>
            </div>

        </section>

        <section id="eco-habitats-slider" class="m-0 important bg-gray-200">
            <SliderComponent></SliderComponent>
        </section>

        <section id="naandi-section">
            <div class="section-wrapper">

                <img class="w-full wide-image" :src="'/static/images/entertainment_center.jpg'" alt="">

                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="flex-wrapper w-full sm:w-full md:w-full lg:w-7/12 ">
                            <div class="content-block">
                                <div class="pt-12 lg:pt-6"></div>
                                <h2>A way of life for the passionate and conscientious.</h2>
                                <p>Privacy of your own villa, the lifestyle of a plush natural resort, the security of a
                                    gated community, the advantage of like-minded people and above all, the unmatched
                                    joy of
                                    healthy and sustainable living. Organo’s Naandi works splendidly as your primary
                                    residence as well as a weekend farm-house; All while having the opportunity to
                                    experience Nature to its fullest. Experience the manifestation of our first step
                                    towards
                                    building self-sustainable eco-habitats.</p>
                                <div class="mb-8"></div>
                                <div class="cta-links">
                                    <router-link to="/naandi"><div class="lg-button inline-block mr-8"><span class="text">Explore Naandi</span></div></router-link>
                                    <div class="lg-button inline-block"><span class="text">Watch Video</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrapper media-block w-full sm:w-full md:w-full h-100 lg:w-5/12">
                            <div class="slider-container">
                                <!--<img :src="'/static/images/entertainment_center.jpg'" alt="">-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="eco-habitat-testimonials">
            <TestimonialsComponent></TestimonialsComponent>
        </section>

        <section class="mb-0">
            <SchoolCTAComponent></SchoolCTAComponent>
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