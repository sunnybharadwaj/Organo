<template>
    <div id="eco-habitat-page">
        <div class="hero bg-gray-100">
            <div class="container mx-auto">
                <div class="wrapper">
                    <div class="intro">
                        <h1>Organo way of living</h1>
                        <h3 class="sub">When life is on a slow track, you’re on a highway to wellness.</h3>
                        <span class="link"><span class="text">Watch Video</span></span>
                    </div>

                    <div class="eco-habitat-features">
                        <div class="flex">
                            <div class="w-1/4 feature">Blend the virtues of rural life with the advantages of modern advancements in technology for urban settlements, getting the best of both worlds.</div>
                            <div class="w-1/4 feature">Live in pristine, uncluttered, natural surroundings. Eat farm fresh organic food, breathe fresh-air and improve your overall health.</div>
                            <div class="w-1/4 feature">Live between an ever evolving community that shares the responsibility of maintaining a sustainable living experience, together.</div>
                            <div class="w-1/4 feature">Sustainability, biodiversity, harnessing natural resources and organic living are some of our driving principles that generate this experience.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section id="sapthapatha">
            <div class="container mx-auto">
                <div class="intro">
                    <h2>Sapthapatha</h2>
                    <h3>7 strands of sustainability</h3>
                    <p class="alt-body">Our primary endeavor is to protect air, water, land and ecological systems to safeguard individual health and foster a sustainable future. In order to reduce environmental, energy and community footprints, Organo has identified seven different aspects where progress towards sustainability can be achieved. </p>
                </div>

            </div>


            <div class="strands-wrapper">
                <div class="flex strands-desc">
                    <div class="w-1/4 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-1/4 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-1/4 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-1/4 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                </div>
                <div class="flex strands-desc">
                    <div class="w-1/3 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-1/3 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                    <div class="w-1/3 strand">
                        <div class="icon"></div>
                        <div class="title"><h3>Food</h3></div>
                        <div class="description">You are what you eat. Spreading the joy of natural growing and organic farming practices makes Organo Naandi healthier.</div>
                    </div>
                </div>
            </div>

            <div class="lg-button"><div class="text"><h2 class="link-decorate">Learn more about our efforts in each of these areas</h2></div></div>
        </section>

        <section class="m-0">
            <SliderComponent></SliderComponent>
        </section>

        <section id="naandi-section">
            <div class="section-wrapper">
                <div class="container mx-auto">
                    <div class="flex">
                        <div class="flex-wrapper w-7/12 content-block">
                            <h2>A way of life for the passionate and conscientious.</h2>
                            <p>Privacy of your own villa, the lifestyle of a plush natural resort, the security of a
                                gated community, the advantage of like-minded people and above all, the unmatched joy of
                                healthy and sustainable living. Organo’s Naandi works splendidly as your primary
                                residence as well as a weekend farm-house; All while having the opportunity to
                                experience Nature to its fullest. Experience the manifestation of our first step towards
                                building self-sustainable eco-habitats.</p>
                            <div class="mb-8"></div>
                            <div class="md-button mr-6"><span class="text">Explore Naandi</span></div>
                            <div class="md-button"><span class="text">Watch Video</span></div>
                        </div>
                        <div class="flex-wrapper w-5/12 ">
                            <div class="slider-container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
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