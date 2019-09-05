<template>
    <div id="eco-habitat-page">
        <VideoHeaderComponent>
            <source slot="header-video" :src="'/static/videos/home2.mp4'" type="video/mp4">
            <div slot="header-content">
                    <h1>Organo way of living</h1>
                    <div class="separator"></div>
                    <h3 class="sub">When life is on a slow track, you’re on a highway to wellness.</h3>
                    <span class="lg-button"><span class="text">Watch Video</span></span>
            </div>
        </VideoHeaderComponent>

        <section id="sapthapatha">
            <div class="container mx-auto">
                <div class="intro">
                    <h2>Sapthapatha</h2>
                    <h3>7 strands of sustainability</h3>
                    <p class="alt-body">Our primary endeavor is to protect air, water, land and ecological systems to safeguard individual health and foster a sustainable future. In order to reduce environmental, energy and community footprints, Organo has identified seven different aspects where progress towards sustainability can be achieved. </p>
                </div>

            </div>


            <div class="strands-wrapper">
                <div class="flex flex-wrap strands-desc">
                    <div class="w-full lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/food.png'" alt="">
                        </div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-full lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/water.png'" alt="">
                        </div>
                        <div class="title"><h3>Water</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-full lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/air.png'" alt="">
                        </div>
                        <div class="title"><h3>Air</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-full lg:w-1/4 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/earth.png'" alt="">
                        </div>
                        <div class="title"><h3>Earth</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                </div>
                <div class="flex flex-wrap strands-desc">
                    <div class="w-full lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/energy.png'" alt="">
                        </div>
                        <div class="title"><h3>Energy</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-full lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/shelter.png'" alt="">
                        </div>
                        <div class="title"><h3>Shelter</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-full lg:w-1/3 strand">
                        <div class="icon">
                            <img :src="'/static/sapthapatha/people.png'" alt="">
                        </div>
                        <div class="title"><h3>People</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="lg-button"><h2 class="">Learn more about Sustainable Living</h2></div>
            </div>

        </section>

        <section id="eco-habitats-slider" class="m-0 important bg-gray-200">
            <SliderComponent></SliderComponent>
        </section>

        <section id="naandi-section">
            <div class="section-wrapper">
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="flex-wrapper w-full sm:w-full md:w-full lg:w-7/12 content-block">
                            <h2>A way of life for the passionate and conscientious.</h2>
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
                        <div class="flex-wrapper media-block w-full sm:w-full md:w-full h-100 lg:w-5/12">
                            <div class="slider-container hide-on-mobile">
                                <img :src="'/static/images/entertainment_center.jpg'" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mobile">
                    <img :src="'/static/images/entertainment_center.jpg'" alt="">
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
            console.log("works?")
        }
    }
</script>