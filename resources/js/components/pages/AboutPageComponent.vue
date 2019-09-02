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
                            <p class="alt-body mb-4">Organo is the brainchild of The Navira Team. Founded and named
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
            <div class="nagesh-quote text-center">
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
                        <p class="alt-body">
                            Nagesh Battula
                        </p>
                    </div>
                    <div class="position">
                        <div class="hl-body">Founder</div>
                    </div>
                </div>

                <div class="mb-12"></div>


                <div class="pieces-together text-left">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap">
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">The dream</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">A Collective Vision</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">Design & Concept</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">Construction & Development</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">Building a community</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                            <div class="piece w-1/3">
                                <div class="heading alt-body mb-2">Enabling self-growth</div>
                                <p class="description">Fusce mi sem, hendrerit ac dignissim congue, commodo in orci.
                                    Nulla sollicitudin massa nunc, sit amet convallis neque rhoncus a.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


            <div class="cta-v-group">
                <div class="container mx-auto">
                    <div class="cta">
                        <section>
                            <div class="flex">
                                <div class="cta-illustration w-7/12 cta-link content-block text-left">
                                    <a href="/team">
                                        <h2 class="cta-text">The Team that made it happen.</h2>
                                    </a>

                                </div>
                                <div class="w-5/12 p-3 bg-blue-600"></div>
                            </div>
                        </section>

                    </div>
                    <div class="cta">
                        <section>
                            <div class="flex">
                                <div class="cta-illustration w-5/12 p-3 bg-blue-600"></div>
                                <div class="w-7/12 cta-link content-block text-right">
                                    <a href="/eco-habitats">
                                        <h2 class="cta-text">Sustainable Eco-habitats that celebrate living.</h2>
                                    </a>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        <div class="pb-24"></div>
        <FeatureComponent></FeatureComponent>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("works?")
        }
    }
</script>