<template>
    <div id="about-page">
        <section class="m-0">
            <div id="story">
                <div class="hero-bg"></div>

                <div class="container mx-auto">
                    <div class="content-block">
                        <h1 class="text-center mb-6">The Story</h1>
                        <img :src="'/static/images/navira.jpg'" alt="">
                        <div class="mb-12"></div>
                        <div class="text-content">
                            <p class="alt-body mb-4">Organo is the brainchild of the Navira Team. Founded and named
                                after – Nagesh, Vijaya and Raj –
                                directors of the FHD group, one of India’s leading design firms. Organo was started with
                                a shared
                                vision to provide an authentic living experience to people today, a life that not only
                                is
                                technologically progressive but one which revives cultures and brings people together.
                                Passion for
                                ‘change’ in the society today as well as in the ways of the industry is the primordial
                                force that
                                pushed the team of Navira to start a group that can redefine the rules of the game.</p>
                            <p class="alt-body">Also, having been in very close quarters to the construction industry
                                and watching the growth spurt
                                of Hyderabad, protecting the bio-conservation zone has been of paramount importance to
                                the Navira
                                team. That’s what inspired them to form a community of people to own it, to enjoy living
                                close to
                                the elements, to create a force to protect it. Thus, Organo was born.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="bringing-it-togehter">
            <h2 class="text-center">Bringing it all together</h2>
            <div class="mb-8"></div>
            <div class="nagesh-quote relative z-0 text-center">
                <div class="container mx-auto">
                    <div class="quote">
                        <h3>
                            “Organo was started to re-establish a conscientious connection with the way we produce and
                            consume resources as a community. Our goal is to create replicable community development
                            models
                            built on triple bottom line success and net zero thinking.”
                        </h3>
                        <div class="mb-6"></div>
                    </div>
                    <div class="name">
                        <p class="alt-body mb-0">
                            Nagesh Battula
                        </p>
                    </div>
                    <div class="position">
                        <div class="hl-body">Founder</div>
                    </div>
                </div>

                <div class="mb-12"></div>


                <div class="pieces-together text-left">
                    <img class="bg-graphic hidden" :src="'/static/images/bringing_together_graphic.png'" alt="">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap">
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">The dream</div>
                                <p class="description">It all started with observing the necessity, requirements, issues
                                    affecting our own personal modern lives and then fully visualizing what can be done
                                    about it.</p>
                            </div>
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">A Collective Vision</div>
                                <p class="description">We then brought together subject-matter experts to open up all
                                    the dimensions and possibilities of the project. These led us to freely research and
                                    explore the new ideas that we were closely watching.</p>
                            </div>
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">Design & Concept</div>
                                <p class="description">Net-zero, Sustainable on seven areas that create a natural cycle,
                                    Minimal design, Farm centric, etc.. All these concepts were generated through the
                                    process of our research into exploring our ideas.</p>
                            </div>
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">Construction & Development</div>
                                <p class="description">From charts to raw materials, we have quickly transformed our
                                    ideas into executable plans and begun constructing and developing, while also
                                    testing various ideas that may work towards the same goals.</p>
                            </div>
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">Building a community</div>
                                <p class="description">Bringing the right people to join the community is very
                                    important. It is important for members to share a common understanding of the
                                    principles practiced so they can be an active part of growth of the community.</p>
                            </div>
                            <div class="piece w-full md:w-1/2 lg:w-1/3">
                                <div class="heading alt-body mb-2">Enabling self-growth</div>
                                <p class="description">Once everything is in place, we then set up processes, measures
                                    to enable and ensure a natural growth and sustenance of the entire community's
                                    environment and its surroundings.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <div class="cta-v-group mb-24">
            <div class="container mx-auto">
                <div class="cta">
                    <section>
                        <router-link to="/team" class="cta-link text-center ">
                            <h2 class="cta-text mx-auto">The Team that made it happen.</h2>
                        </router-link>
                        <!--<div class="flex flex-wrap">-->
                            <!--<div class="w-full lg:w-7/12 cta-link content-block text-left">-->


                            <!--</div>-->
                            <!--<div class="cta-illustration  sm:w-full lg:w-5/12 p-3 bg-blue-600 hide-on-mobile tablet-hidden"></div>-->
                        <!--</div>-->
                    </section>

                </div>
            </div>
        </div>

        <div class="eco-habitat-cta-component">
            <FeatureComponent>
                <slot>
                    <h1 class="max-w-4xl">What is an 'Eco-habitat'?</h1>
                    <div class="mb-4"></div>
                    <router-link to="/eco-habitats">
                        <div class="lg-button">Find out more</div>
                    </router-link>
                </slot>
            </FeatureComponent>
        </div>


    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("works?")
        }
    }
</script>