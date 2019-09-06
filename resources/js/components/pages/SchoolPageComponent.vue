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

                <div class="sd">
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
                <h1>Co-creating eco-habitats that celebrate living</h1>
                <div class="separator"></div>
                <div class="mb-6"></div>
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

        <div id="child-experience">
            Children get to experience

            <div class="experience-listing">
                <div class="experience">
                    <img src="" alt="">
                    <div class="text-content">
                        <h3>Experience a practical learning of Nature </h3>
                        <p>With direct examples of application of various sustainable practices, children get to see
                            first-hand, the results and impending perils of modernization and lay the foundational
                            understanding towards the culture of sustainable living. </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="m-0">
            <SliderComponent></SliderComponent>
        </section>

        <section>
            <TestimonialsComponent></TestimonialsComponent>
        </section>

        <section>
            <p class="alt-body text-center">Schools we've worked with</p>
            <div class="logos-container">
                <div class="wide-placeholder"></div>
                <div class="text-center">
                    <h3>If you want to bring your students to an Organo Community</h3>
                    <div class="lg-button">Contact Us</div>
                </div>
            </div>
        </section>

        <section class="m-0">
            <FeatureComponent></FeatureComponent>
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