<template>
    <div id="school-page">
        <VideoHeaderComponent>
            <div slot="header-video">
                <div class="mobile">
                    <VideoComponent v-if="screenName == 'mobile'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/mobile/school_mobile.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="tablet">
                    <VideoComponent v-if="screenName == 'tablet'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/tablet/school_tablet.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="">
                    <VideoComponent v-if="screenName == 'sd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/sd/school_sd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="hd">
                    <VideoComponent v-if="screenName == 'hd'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/hd/school_hd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
                <div class="wide">
                    <VideoComponent v-if="screenName == 'wide'">
                        <video autoplay loop muted>
                            <source :src="'/static/videos/school.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
            </div>

            <div slot="header-content">
                <h1>An enriching experience for the global citizens of tomorrow.</h1>
                <div class="separator"></div>
                <div class="mb-6"></div>
                <p class="hl-body">Organo@school is a day long event that schools and colleges can bring their students to experience nature first-hand. Children learn, explore and creatively express their learnings in our comprehensivly designed program.</p>
                <div class="button-block">
                    <div class="lg-button inline-block mr-8">
                        <span class="text">Visit Organo</span>
                    </div>
                    <div class="lg-button inline-block">
                        <span class="text">Watch Video</span>
                    </div>
                </div>
            </div>
        </VideoHeaderComponent>

        <div class="image-content-list">
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Experience a practical learning of Nature and where we stand today.</h3>
                    <p class="alt-body">With direct examples of application of various sustainable practices, children get to see
                        first-hand, the results and impending perils of modernization and lay the foundational
                        understanding towards the culture of conservation and sustainable living. </p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Experience the holistic aspects of rural living</h3>
                    <p class="alt-body">Watch and interact with animals up close in our extensive animal husbandry, learn about bee-keeping, interact with cows and calfs at Goshala.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Explore local Flora and Fauna</h3>
                    <p class="alt-body">Understand and practically observe the growth of farm produce, and explore all the bio-diversity that naturally exist in the surrounding area.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Participate in enriching and fun activities</h3>
                    <p class="alt-body">Children try their hand at organic farming, pottery, picking vegetables, exploring the landscape, have fun and learn deeper with the Organo’s Augmented Reality App and many more.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h3>Express learnings creatively through Art and Craft</h3>
                    <p class="alt-body">At the end of the day, children get to combine everything they have learnt into producing art and craft on the concepts covered.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
        </div>

        <!--<section class="m-0">-->
            <!--<SliderComponent></SliderComponent>-->
        <!--</section>-->

        <div class="schools">
            <!--<h3 class=" alt-body text-center">Schools we've worked with</h3>-->
            <div class="logos-container">
                <img class="mx-auto" :src="'/static/school/schools_logos_sd.png'" alt="">
            </div>
            <div class="text-center max-w-2xl mx-auto">
                <h3>If you want to bring your students to an Organo Community</h3>
                <div class="mb-4"></div>
                <router-link to="/contact" class="lg-button text-center">Contact Us</router-link>
            </div>
        </div>

        <section>
            <section id="school-testimonials">

                <div class="testimonial-component">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap testimonial">
                            <div class="w-full lg:w-5/12 image-wrapper ">
                                <div class="image-container ">

                                </div>
                            </div>
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="quote">
                                    <p class="alt-body">
                                        "We were looking out for such an experience for our students. Organo@School turned out to be an enriching and life changing experience not only for them, but for me as an educator as well.
                                    </p>
                                    <p class="alt-body">
                                        It really helps us understand the larger picture and the necessity of sustainable living. Most importantly, my students are now more aware about their surroundings and will hopefully work towards conservation of nature and experience a deeper connection with it.
                                        "
                                    </p>

                                    <div class="mb-8"></div>
                                    <div class="quote-by">
                                        <div class="name hl-body">Shivani</div>
                                        <div class="about">Educator</div>
                                        <div class="about font-bold">Oakridge School</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </section>
        </section>



        <section class="m-0">
            <FeatureComponent>
                <slot>
                    <h1 class="max-w-4xl">What is an 'Eco-habitat'?</h1>
                    <div class="mb-4"></div>
                    <router-link to="/eco-habitats"><div class="lg-button">Find out more</div></router-link>
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

]