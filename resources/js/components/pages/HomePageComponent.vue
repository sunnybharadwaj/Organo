<template>
    <div id="home-page">
        <VideoHeaderComponent>
            <div slot="header-video">
                <div class="mobile">
                    <VideoComponent v-if="screenName == 'mobile'">
                        <video autoplay loop muted playsinline>
                            <source :src="'/static/videos/mobile/home_mobile.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="tablet">
                    <VideoComponent v-if="screenName == 'tablet'">
                        <video autoplay loop muted playsinline>
                            <source :src="'/static/videos/tablet/home_tablet.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="">
                    <VideoComponent v-if="screenName == 'sd'">

                        <video autoplay loop muted playsinline>
                            <source :src="'/static/videos/sd/home_sd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>

                <div class="hd">
                    <VideoComponent v-if="screenName == 'hd'">
                        <video autoplay loop muted playsinline>
                            <source :src="'/static/videos/hd/home_hd.mp4'" type="video/mp4">
                        </video>
                    </VideoComponent>
                </div>
                <div class="wide">
                    <VideoComponent v-if="screenName == 'wide'">
                        <video autoplay loop muted playsinline>
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
                    <div class="lg-button inline-block">
                        <span class="text" @click="modalShowing = true">Watch Video</span>
                    </div>
                    <CardModalComponent :showing="modalShowing" @close="modalShowing = false">
                        <iframe class="mx-auto" src="https://www.youtube.com/embed/07dX5_pa2tE?rel=0" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </CardModalComponent>
                </div>

            </div>
        </VideoHeaderComponent>


        <section id="rurbanism">
            <div class="container mx-auto">
                <div class="illustration lg-only">
                    <div class="hd-only">
                        <img class="mx-auto w-full" :src="'/static/illustrations/organo_g.png'" alt="">
                    </div>
                    <!--<img :src="'/static/illustrations/all_efforts.png'" alt="">-->
                </div>
                <div class="max-w-6xl mb-12">
                    <h2>We've taken up the challenge of developing eco-habitats thriving a balanced harmony,
                        integrated with nature. Combining the best of the urban and the rural worlds, we have created a
                        new ‘Rurban’ way of life.</h2>
                </div>

                <div class="key-points max-w-2xl mb-12">
                    <div class="point mb-10">
                        <h3 class="mb-2">A new way of living to counter rapid urbanization. We call it Rurban
                            Living.</h3>
                        <p class="alt-body">The benefits of urbanization and the feel of a rural environment brings
                            together the best of both worlds. Organo offers an integrated alternate-living experience
                            where residents could take part in natural farming and other collective activities, while
                            maintaining their private space.</p>
                    </div>

                    <div class="point mb-10">
                        <h3 class="mb-2">Prosper in nature and live a healthy life while maintaining balance and
                            sustainability.</h3>
                        <p class="alt-body">Sustainability, biodiversity, harnessing natural resources and natural
                            living are at the driving principles of Organo. Sapthapatha, or the ‘Seven strands of
                            sustainable living’ help us individually focus on sustainable development in each of the
                            distinct areas.</p>
                    </div>

                    <div class="point mb-10">
                        <h3 class="mb-2">Our core philosophy is ‘Samavriddhi’ or ‘Prosperity for all’.</h3>
                        <p class="alt-body">We are responsible for all the stakeholders and environmental concerns
                            equally. It helps us create community development models on triple-bottom-line success
                            (Social, environmental and economic ares) and net-zero thinking. This also led us to create
                            'Sapthapatha', the seven strands of sustainable development.</p>
                    </div>
                </div>


                <router-link to="/company"><div class="txt-btn h2 mb-6">Learn more about the Company</div></router-link>
                <router-link to="/eco-habitats"><div class="txt-btn h2">Our approach to building Eco-Habitats</div></router-link>

            </div>
        </section>


        <div id="naandi-result">
            <ImageContentComponent>
                <div slot="image" class="wide-image">

                </div>
                <div slot="content">

                    <div class="naandi-logo">
                        <img :src="'/static/logos/naandi_logo.png'" class="w-full" alt="">
                    </div>

                    <h2 class="mb-4">Our first step towards building Rurban Eco-habitats</h2>

                    <p><strong>Organo’s Naandi works splendidly as your primary residence as well as a weekend farm-house.</strong> With the privacy and lifestyle of a plush natural resort, the security of a
                        gated community, the advantage of like-minded people and above all, the unmatched joy of
                        healthy and sustainable living.  </p>


                    <div class="mb-8"></div>
                    <div class="cta-links">
                        <router-link to="/naandi" class="mb-12">
                            <div class="lg-button inline-block mr-8 "><span class="text">Explore Naandi</span></div>
                        </router-link>
                        <!--<div class="lg-button inline-block"><span class="text">Watch Video</span></div>-->
                    </div>
                </div>
            </ImageContentComponent>
        </div>

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
                                <h2 class="mb-6">Words from a Naandian:</h2>
                                <p class="alt-body">
                                    "I had to take a detour from my hectic life and decided to not live in the city anymore where you’re isolated from nature. Due to insecticides and pesticides that are used, felt like we consumed poison.
                                </p>
                                <p class="alt-body">
                                    Now when I take a calm relaxed walk in the morning through the farm here, I would pluck a Guava and eat it with  comfort as I know exactly how naturally it was grown.
                                    "
                                </p>

                                <div class="mb-8"></div>
                                <div class="quote-by">
                                    <div class="name hl-body">M Madhusudan Reddy</div>
                                    <div class="about">Naandian</div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>


        <section id="recurring-events">
            <div class="container mx-auto text-center">

                    <div class="max-w-4xl mx-auto mb-16">
                        <h2 class="mb-6">Experience Rurbanism first-hand and learn to practice sustainable living through one of
                            our recurring <span class="highlight">events</span>:</h2>

                        <!--<div class="txt-btn md">Get updates</div>-->
                    </div>

            </div>

            <div class="flex flex-wrap mb-12">
                <div class="w-full lg:w-1/3 recurring-event">
                    <router-link to="/organo-at-school">
                        <div class="content">

                            <h3 class="event-name">Organo@School</h3>
                            <p class="alt-body event-desc">
                                A day long event that academic institutions can bring their students to experience
                                nature, filled with fun activities and informational sessions on Sustainability.</p>


                        </div>
                    </router-link>

                </div>
                <div class="w-full lg:w-1/3 recurring-event">
                    <div class="content">
                        <h3 class="event-name">Be a Farmer</h3>
                        <p class="alt-body event-desc">Build bonds between friends, family or team members working
                            together on a natural farm. Teams or any homogeneous group can contact us to schedule
                            the event.</p>

                    </div>
                </div>
                <div class="w-full lg:w-1/3 recurring-event">
                    <div class="content">

                        <h3 class="event-name">Sustainability Workshops</h3>
                        <p class="alt-body event-desc">
                            Be informed about various aspects of sustainable living straight from experts in the
                            field through one of our experiential workshops.
                        </p>


                    </div>
                </div>
            </div>

        </section>




        <!--<section id="home-school" class="school-cta-component mb-0">-->
        <!--<FeatureComponent>-->
        <!--<slot>-->
        <!--<h1 class="mb-4">Organo@School</h1>-->
        <!--<h2 class="max-w-4xl">A life changing full day event for the global citizens of-->
        <!--tomorrow.</h2>-->
        <!--<div class="mb-4"></div>-->
        <!--<router-link to="/organo-at-school">-->
        <!--<div class="lg-button">Find out more</div>-->
        <!--</router-link>-->
        <!--</slot>-->
        <!--</FeatureComponent>-->
        <!--</section>-->
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log(this.screenName)
        },
        data() {
            return {
                screenWidth: screen.width,
                modalShowing: false,
            }
        },
        methods: {
            close() {
                this.modalShowing = false;
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
