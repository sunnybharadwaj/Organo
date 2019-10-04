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
                <p class="pronunciation alt-body">[ <span class="font-bold">ek</span>-oh, <span class="font-bold">ee</span>-koh
                    - <span class="font-bold">hab</span>-i-tat ]
                </p>
                <h3>
                    An integrated eco-system as a living space, consciously created with sustainability
                    principles at its center, designed for having the minimal impact without contaminating the
                    environment in it or around it.</h3>
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

        <section id="problem-solution">
            <div class="container mx-auto">
                <div class="problem">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="content">
                                <h2>What went wrong?</h2>
                                <p class="alt-body"><span class="font-normal">
                    The advent of rapid urbanization has led us to live in between polluted environments, genetically modified produce and other downsides of densely populated areas, leading to an excessively stressful life.
                </span></p class="alt-body">
                                <p class="alt-body"><span class="font-normal">We often find ourselves in this modern balancing act between living this way and finding ways to escape, relax and re-connect with nature.</span></p class="alt-body">
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="content">
                                <img class="illustration" :src="'/static/illustrations/eco_1.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="solution">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="content">
                                <h2>What needed to be done.</h2>
                                <p class="alt-body"><span class="font-normal">To counter the effects of urbanization, we needed to explore reverse-migration, going back to the roots from where it all started.</span></p>
                                <p class="alt-body"><span class="font-normal">We needed to find new ways of living in balance with the ecosystem and all the various parts of it, with access to healthy organic food and fresh air to breath, allowing sustainable growth of a community without affecting the environment which they live in.</span></p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="content">
                                <img class="illustration" :src="'/static/illustrations/eco_2.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-center mb-2 opacity-75">
                The Result
            </h3>

            <h2 class="text-center mb-12">
                Rurban Eco-habitats
            </h2>

            <div class="image-wrapper max-w-4xl mx-auto mb-24">
                <img class="w-full" :src="'/static/illustrations/eco_3.png'" alt="">
            </div>
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
        </section>




        <section id="sustainability">
            <div class="container mx-auto">
                <div class="max-w-5xl">
                    <h2 class="max-w-4xl mb-8">
                        Sapthapatha - Seven Strands of Sustainable living
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

                <div id="sapthapatha-detail">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/food.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Creating healthy source of nutrition through <span class="font-bold">food</span> / produce grown using organic
                                farming practices without the need for chemicals.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/water.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Employ advanced scientific procedures of conservation and treatment of <span class="font-bold">water</span> and regularly monitor overall consumption vs production.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/air.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">An endless supply of fresh <span class="font-bold">Air</span> wherever you are - We deliver geo-cooled fresh air into homes through our Earth Air Tunnel System.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/earth.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Protect the <span class="font-bold">Earth</span> by preserving soil health by using organic methods and fertilizers, employ necessary waste management and recycling processes.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/energy.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Produce all <span class="font-bold">Energy</span> from within the community area through renewable sources like solar energy and a bio-gas plant and employ procedures to reduce power consumption.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/shelter.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Create <span class="font-bold">Shelter</span> within nature while maintaining bio-diversity. Open yet personal living spaces and wide communal spaces incorporating comforts of this day and age.</span></p>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 one-strand">
                            <div class="h-40 w-40">
                                <img class="w-full" :src="'/static/sapthapatha/people.png'" alt="">
                            </div>

                            <p class="alt-body"><span class="font-normal">Encourage a community of <span class="font-bold">People</span> who live together responsibly, share their time, knowledge and expertise towards co-creating and sustaining the environment around them.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="eco-habitats-slider" class="m-0 important bg-gray-200">
            <SliderComponent></SliderComponent>
        </section>

        <!--Testimonials-->


        <section id="eco-habitat-testimonials">
            <section id="home-testimonials" class="">
                <div class="testimonial-component">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap testimonial">
                            <div class="w-full lg:w-5/12 image-wrapper ">
                                <div class="image-container ">

                                </div>
                            </div>
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="quote">
                                    <h2 class="mb-6">Testimonial:</h2>
                                    <p class="alt-body">
                                        "Using vedic farming, Organo Naandi grow 35 varieties of vegetables, 15 varieties of fruits and 95 varieties of medicinal plants at Naandi."
                                    </p>
                                    <p class="alt-body">
                                        We use animal husbandry, rainwater harvesting and control surrounding use of chemicals, employ many other ways to maintain a sustainable cycle for farm-fresh produce.
                                        "
                                    </p>

                                    <div class="mb-8"></div>
                                    <div class="quote-by">
                                        <div class="name hl-body">Lakshmi Battula</div>
                                        <div class="about">Farm Supervisor</div>
                                        <div class="about font-bold">Organo</div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </section>
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