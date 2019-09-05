<template>
    <div id="school-page">
        <VideoHeaderComponent>
            <source slot="header-video" :src="'/static/videos/school.mp4'" type="video/mp4">
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
        }
    }
</script>