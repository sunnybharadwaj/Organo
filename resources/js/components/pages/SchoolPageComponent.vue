<template>
    <div id="school-page">
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
        }
    }
</script>