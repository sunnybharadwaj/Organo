<template>
    <div id="naandi-page">
        <VideoHeaderComponent>
            <div slot="header-video">
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
            </div>

            <div slot="header-content">
                <h1>Urban refinement,<br/> Rural ethnicity</h1>
                <div class="separator"></div>
                <div class="mb-6"></div>
                <p class="hl-body">Organo builds full-featured sustainable living environments harmlessly integrated
                    into the natural world, supportive of a healthy way of living.</p>
                <div class="button-block">

                    <div class="lg-button inline-block">
                        <span class="text">Watch Video</span>
                    </div>
                </div>
            </div>
        </VideoHeaderComponent>

        <section id="about-project" class="hidden mt-0 bg-gray-100">
            <section class="about-naandi">
                <div class="container mx-auto">
                    <div class="wrapper">
                        <h3>Organo’s Naandi is a plush living commune of urban villas built to offer all the
                            contemporary
                            living
                            conveniences while seamlessly integrated with nature.</h3>
                        <div class="separator"></div>
                        <p>Incorporating the latest in high-performance building science and home technology, every home
                            gathers
                            around a space that skillfully combines outdoor and indoor living. <span
                                    class="more-link link" v-if="!more_content" @click="showMoreDetails">More</span></p>


                        <div v-if="more_content" class="more more-content">
                            <p>These fully air-conditioned signature spaces are embedded with what we call ‘rurban’
                                nomenclature, which is a heady mix of urban refinement and rural ethnicity. Envisioned
                                to
                                invite
                                families to live fully and generously, these homes have an ingenious arrangement of
                                interior
                                space and a unique combination of openness and privacy that makes a relaxed way of life
                                possible.</p>
                            <p>Dramatic sliding glass doors open up to enable the home’s interiors to embrace the
                                natural
                                world
                                surrounding it. Abundant windows, full-wall glass panels let in plenty of natural light
                                and
                                add
                                to the feeling of openness and spaciousness. A spacious floor plan, high ceilings, large
                                bedrooms, luxurious bathrooms, ample storage, servant quarters and other options.. all
                                make
                                the
                                home perfect for you and your family.</p>
                        </div>


                    </div>

                </div>
                <SliderComponent></SliderComponent>
            </section>

        </section>


        <section id="naandi-intro" class="mb-12">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <div class="max-w-xl">
                            <div class="naandi-logo">
                                <img :src="'/static/logos/naandi_logo.png'" class="w-full" alt="">
                            </div>
                            <h2 class="mb-4">A way of life for the passionate and conscious.</h2>
                            <p class="alt-body mb-12">Naandi<span class="font-normal"> is the manifestation of our
                        efforts towards creating a <span class="font-bold">Rurban Eco-habitat</span> on net-zero and triple bottom
                        line principles. Situated 17km from Hyderabad, we offer sustainable living space, a conscious community and opportunities to work with nature and experience a combination of urban refinement and rural ethnicity.</span></p>

                            <div class="metrics">
                                <div class="metric">
                                    <h2 class="number">36.5 <span class="sub">Acres</span></h2>
                                    <h3 class="description highlight"><span class="font-normal">Total Area</span></h3>
                                </div>
                                <div class="metric">
                                    <h2 class="number">6.5 <span class="sub">Acres</span></h2>
                                    <h3 class="description"><span class="font-normal">Agricultural Land</span></h3>
                                </div>
                                <div class="metric">
                                    <h2 class="number">10 <span class="sub">Acres</span></h2>
                                    <h3 class="description"><span class="font-normal">Afforested Land</span></h3>
                                </div>
                                <div class="metric">
                                    <h2 class="number">73</h2>
                                    <h3 class="description"><span class="font-normal">Farm Units</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="pb-32"></div>
                        <img :src="'/static/illustrations/naandi_map.png'" class="w-full" alt="">
                    </div>
                </div>




            </div>
        </section>

        <div class="image-content-list">
            <!--<ImageContentComponent>-->
                <!--<div slot="image" class="wide-image"></div>-->
                <!--<div slot="content">-->
                    <!--<h2 class="mb-4"><span class="font-normal">the</span> Vision</h2>-->
                    <!--<p class="alt-body">Through our work towards this ideal, we have found seven areas that need our-->
                        <!--attention - Food, Water, Air, Earth, Energy, Shelter and People. Our efforts in each of these-->
                        <!--areas work independently and inter-dependently with each other to create a living, breathing-->
                        <!--environment suitable for all that live in it.</p>-->
                <!--</div>-->
            <!--</ImageContentComponent>-->
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h2 class="mb-4"><span class="font-normal">the</span> Experience</h2>
                    <p class="alt-body">Our goal was to capturing the essence of rural living and combining it with the
                        ways of the modern lifestyle. Every comfort you could expect in an urban arrangement is offered
                        to you within a breath-taking atmosphere, healthy organic food and an engaging community
                        conducive to growth, relaxation and an overall improvement of health.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h2 class="mb-4"><span class="font-normal">the</span> Space</h2>
                    <p class="alt-body">The 33 Acres of land located outskirts of the city of Hyderabad, has home units
                        and other necessary structures built around an organic farm. Along with all the amenities
                        expected of a modern villa community, 2/3rd of its space is used for
                        collective farming - where residents join farmers to farm produce. 1/3rd of the space is
                        designated for personal farming, where residents can farm independently in their backyard.</p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
            <ImageContentComponent>
                <div slot="image" class="wide-image"></div>
                <div slot="content">
                    <h2 class="mb-4"><span class="font-normal">the</span> Community</h2>
                    <p class="alt-body">
                        Our intent is to promote a soul of collective living where our members actively participate in
                        events, socialize in designated places and a well designed exploratory path, share their time,
                        knowledge and expertise for active social enhancement and the cultural progress of the
                        community. Naandians live together and work collectively for the sustenance of their home.
                    </p>
                    <div class="mb-8"></div>
                </div>
            </ImageContentComponent>
        </div>

        <section>
            <div class="container mx-auto content-section">
                <h2 class="mb-8">Home</h2>
                <div class="max-w-4xl">
                    <h3 class="font-normal">
                        We have Incorporated the latest in high-performance building science and home technology. Every
                        home skillfully combines the outdoor and indoor space to create an experience of being
                        integrated with the environment around it.
                    </h3>
                    <div class="mb-6"></div>
                    <h3 class="font-normal">
                        With open halls, large windows, sliding doors facing the farm, terrace, patios and deep
                        balconies, whether its where you live or visit to get away, Naandi’s the perfect place to relax,
                        let go and take a dip in nature.
                    </h3>
                    <div class="mb-8"></div>
                    <div class="txt-btn">Request floor-plans</div>
                    <div class="mb-8"></div>
                    <div class="txt-btn">Browse pictures at the Gallery</div>
                    <div class="mb-8"></div>
                </div>
            </div>
            <div class="home-images">
                <div class="flex flex-wrap">
                    <div class="slider-component owl-carousel">
                        <div class="w-100 w-full lg:w-1/2 image-container one"></div>
                        <div class="w-100 w-full lg:w-1/2 image-container two"></div>
                        <div class="w-100 w-full lg:w-1/2 image-container three"></div>
                        <div class="w-100 w-full lg:w-1/2 image-container four"></div>
                    </div>


                </div>
            </div>
        </section>


        <section id="amenities" class="content-section">
            <div class="container mx-auto">
                <div class="intro-text">
                    <h2>Amenities &amp; Attractions</h2>
                </div>
                <div class="mb-12"></div>

                <div class="amenity-list">
                    <div class="flex flex-wrap">

                        <div v-for="activity in activities" class="amenity w-full md:w-1/2 lg:w-1/3">
                            <div class="image overflow-y-hidden">
                                <img :src="activity.imageUrl" alt="">
                            </div>
                            <div class="text-content">
                                <p class="alt-body">{{activity.title}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="naandi-testimonials">

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
                                        "Quiet, peaceful, pollution-free and it allows us to relax and calm down in a quiet place, away from the noise and disturbance of city living.
                                    </p>
                                    <p class="alt-body">
                                        We love to spend our weekends away relaxing at Naandi with the kids. We enjoy a good night's sleep.
                                        "
                                    </p>

                                    <div class="mb-8"></div>
                                    <div class="quote-by">
                                        <div class="name hl-body">Shwetha Reddy</div>
                                        <div class="about">Naandian</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

        </section>

        <section class="m-0">
            <SchoolCTAComponent></SchoolCTAComponent>
        </section>


        <section id="share-section">
            <div class="container mx-auto">
                <div class="flex flex-col content-center">
                    <div>
                        <h1 class="lg-button">Share this page</h1>
                    </div>

                    <div class="social-icons">
                        <div class="flex">
                            <div class="icon">
                                <img class="active" :src="'/static/icons/social/whatsapp.png'" alt="">
                            </div>
                            <div class="icon">
                                <img class="" :src="'/static/icons/social/facebook.png'" alt="">
                            </div>
                            <div class="icon">
                                <img class="" :src="'/static/icons/social/email.png'" alt="">
                            </div>
                            <div class="icon">
                                <img class="" :src="'/static/icons/social/instagram.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="p-2"></div>
        <section></section>
    </div>
</template>

<script>
    export default {
        mounted() {
            $(".slider-component.owl-carousel").owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 3000,
                dots: false,
                nav: false,
                slideTransition: 'ease-in-out'
            });

            var rellax = new Rellax('.rellax');
        },
        data() {
            return {
                screenWidth: screen.width,
                more_content: false,
                activities: [
                    {
                        title: 'Afforestation area',
                        imageUrl: '/static/images/activities/explorenaandi.jpg'
                    },
                    {
                        title: 'Herbal Garden',
                        imageUrl: '/static/images/activities/herbalgarden.jpg'
                    },
                    {
                        title: 'Collective farming',
                        imageUrl: '/static/images/activities/collectivefarming.jpg'
                    },
                    {
                        title: 'Personal farming',
                        imageUrl: '/static/images/activities/personalfarming.jpg'
                    },
                    {
                        title: 'Animal Husbandry',
                        imageUrl: '/static/images/activities/animalhusbandry.jpg'
                    },
                    {
                        title: 'Goshala',
                        imageUrl: '/static/images/activities/goshala.jpg'
                    },
                    {
                        title: 'Workshops and Informational events',
                        imageUrl: '/static/images/activities/workshops.jpg'
                    },
                    {
                        title: 'Gym',
                        imageUrl: '/static/images/activities/gym.jpg'
                    },
                    {
                        title: 'Pottery',
                        imageUrl: '/static/images/activities/pottery.jpg'
                    },
                    // {
                    //     title: 'Alfresco Dining',
                    //     imageUrl: '/static/images/activities/restaurant.png'
                    // },
                    // {
                    //     title: 'Spa',
                    //     imageUrl: '/static/images/activities/spa.png'
                    // },
                    {
                        title: 'Bio-pool',
                        imageUrl: '/static/images/activities/biopool.jpg'
                    },
                    {
                        title: 'Clubhouse',
                        imageUrl: '/static/images/activities/clubhouse.jpg'
                    },
                    {
                        title: 'Guest Rooms',
                        imageUrl: '/static/images/activities/guestroom.jpg'
                    },
                    {
                        title: 'Pond',
                        imageUrl: '/static/images/activities/pond.jpg'
                    },
                    {
                        title: 'Community Events',
                        imageUrl: '/static/images/activities/communitycelebrations.jpg'
                    },
                    {
                        title: 'Social Events',
                        imageUrl: '/static/images/activities/communityevents.jpg'
                    },
                    {
                        title: 'Board Games',
                        imageUrl: '/static/images/activities/boardgames.jpg'
                    },

                ]
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
        },
        methods: {
            showMoreDetails: function () {
                console.log("fired");
                this.more_content = true;
            }
        }
    }

</script>