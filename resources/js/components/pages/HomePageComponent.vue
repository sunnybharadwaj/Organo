<template>
    <div id="home-page">
        <!--Hero-->
        <!--Background video - Fits screen width and height-->

        <section id="introduction" class="hero-bg m-0">
            <div class="content-block">
                <h1>Co-creating eco-habitats that celebrate living</h1>
                <div class="separator"></div>
                <div class="mb-6"></div>
                <p class="hl-body">Organo builds full-featured sustainable living environments harmlessly integrated
                    into the natural world, supportive of a healthy way of living.</p>
                <div class="button-block my-6">
                    <div class="std-button">
                        <span class="text">Learn More</span>
                    </div>
                    <div class="std-button">
                        <span class="text">Watch Video</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="purpose">
            <!--Illustration-->
            <div class="wide-placeholder"></div>
            <div class="mb-12"></div>

            <h3>To counter the drawbacks of urbanization, Organo has taken up the challenge of developing eco-habitats
                thriving in balanced harmony integrated with nature, offering a rurban living experience.</h3>


            <div class="flex feature-points">
                <div class="w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">Rurban way of living</div>
                    <p class="sm-body">The benefits of urbanization and the feel of a rural environment brings together
                        the best of both worlds. Organo offers an integrated alternate-living experience where residents
                        could take part in organic farming and other collective activities, while maintaining their
                        private space.</p>
                </div>
                <div class="w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">Sustainability on all fronts</div>
                    <p class="sm-body">Sustainability, biodiversity, harnessing natural resources and organic living are
                        at the driving principles of Organo. Sapthapatha, or the ‘Seven strands of sustainable living’
                        help us individually focus on sustainable development in each of the distinct areas.</p>
                </div>
                <div class="w-1/4 content-block">
                    <div class="icon-placeholder"></div>
                    <div class="alt-body">A conscious community</div>
                    <p class="sm-body">We focus on building communities that grows to be conscious, conscientious and
                        evolutionary; one that not only takes but gives back. We strive to create the right balance
                        between private and personal life for the people in our community.</p>
                </div>
                <div class="w-1/4 content-block">
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
                    <div class="lg-button"><span class="text">How we created an opportunity for '<span class="hl-text">Sustainable Living</span>'</span>
                    </div>
                </div>
            </div>
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

        <section class="m-0">
            <SliderComponent></SliderComponent>
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
            console.log('Component mounted.')
        }
    }
</script>
