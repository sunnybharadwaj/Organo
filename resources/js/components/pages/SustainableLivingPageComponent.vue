<template>
    <div id="sustainable-living-page">
        <div class="hero">
            <div class="container mx-auto">
                <div class="flex flex-wrap mt-12">
                    <div class="w-full lg:w-7/12">
                        <div class="text-content">
                            <h1>Sapthapatha</h1>
                            <h3>Seven strands of sustainable living</h3>
                            <div class="separator"></div>
                            <p>Everything we need for our survival and well-being depends, either directly or
                                indirectly, on
                                our
                                natural environment. To pursue sustainability, it is necessary to create and maintain
                                conditions
                                under which the people and nature can co-exist in productive harmony to support present
                                and
                                future
                                generations.</p>
                            <p>In order to reduce environmental footprint, energy footprint and community’s footprint,
                                we
                                have
                                identified seven different areas where progress is achieved. These seven strands
                                maintain a
                                dynamic
                                balance and harmonize to nature’s grand symphony.</p>
                        </div>

                    </div>

                    <div class="illustration-container w-full lg:w-5/12 ">
                        <img :src="'/static/images/sustainability_hero.png'" class="mx-auto" alt="">
                    </div>

                </div>
            </div>
        </div>

        <SliderComponent></SliderComponent>

        <section id="strands-listing">
            <div class="container mx-auto">
                <div class="strand">
                    <div class="icon mobile">
                        <img :src="'/static/sapthapatha/food.png'" alt="">
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-8/12">
                            <div class="text-content">
                                <h2>Food</h2>
                                <p class="alt-body">Food at Organo is safe to eat, locally produced, seasonal, free of
                                    harmful residues.
                                <p class="alt-body">
                                    Natural/Organic farming helps enhance soil fertility by maintaining organic matter
                                    levels and promoting soil biological activities using minimal mechanical
                                    intervention.
                                </p>
                                <p class="alt-body">
                                    Animal husbandry at Organo Naandi can house 73 cows comfortably. These cows are to
                                    be taken care of through dairy management practices including professional support
                                    for periodic health check-ups.
                                </p>
                            </div>
                        </div>
                        <div class="w-4/12 icon-container hide-on-mobile">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/food.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>Water</h2>


                                <p class="alt-body">
                                    Water as a 'fixed resource' needs to be conserved. We have thus employed various water saving mechanisms like mulching, drip irrigation, multi-cropping, rainwater harvesting, water recycling and more.
                                </p>
                                <p class="alt-body">
                                    We take effective watershed measures to enhance the catchment areas and conservative usage at all levels.
                                </p>
                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/water.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>Air</h2>

                                <p class="alt-body">
                                    Quality of air plays such a central role in health and well-being that it effects every facet of living. The intent at Organo Naandi is to create an environment where the air quality is always maintained at a healthy level within homes as well as outside.
                                </p>
                                <p class="alt-body">
                                    Organo Naandi has an incredible Earth Air Tunnel System (EAT) system that has many benefits throughout the year. Without the use of any artificial coolants, the EAT system facilitates movement of fresh
                                    air into farm villas.
                                </p>
                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/Air.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>Earth</h2>
                                <p class="alt-body">Various methods have been implemented to ensure soil health and deter erosion like: Plantation of ground cover and mulching techniques, Trenches and Swales along the site contours, Channelling rainwater to reach injection bore-wells/harvesting pits to stop soil erosion, Waste segregation and management.</p>

                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/earth.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>Energy</h2>
                                <p class="alt-body">All energy production is through renewable sources - Solar and Bio-gas. Organo creates sustainable eco-habitats on 'net-zero' principles.</p>
                                <p class="alt-body">Every villa generates its own power. Consumption and usage is continuously monitored.</p>
                                <p class="alt-body">Power generators are installed to supply backup power to the community when required.</p>

                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/energy.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>Shelter</h2>
                                <p class="alt-body">We've tried to achieve a harmonious experience between inside the villa and outside of it. Facing the farm, the open layout of the interiors allow for maximum natural air-flow.</p>
                                <p class="alt-body">The layout of the community is designed to give you a chance to have your privacy as well as socialize whenever you can. </p>
                                <p class="alt-body">Though our communities are in the outskirts of the urban settlement, there is no stone left unturned in giving you all experiences that the modern lifestyle demands. A nature bio-swimming-pool, state of the art Clubhouse, Gym, Sports areas are seamlessly integrated into the surrounding landscape without affecting it in any way.</p>

                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon">
                                <img :src="'/static/sapthapatha/shelter.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="strand">
                    <div class="flex">
                        <div class="w-8/12">
                            <div class="text-content">
                                <h2>People</h2>
                                <p class="alt-body">All energy production is through renewable sources - Solar and Bio-gas.</p>

                            </div>
                        </div>
                        <div class="w-4/12 icon-container">
                            <div class="icon ">
                                <img :src="'/static/sapthapatha/people.png'"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="eco-habitat-cta-component">
            <FeatureComponent>
                <slot>
                    <h1 class="max-w-4xl">What is an 'Eco-habitat'?</h1>
                    <div class="mb-4"></div>
                    <router-link to="/eco-habitats"><div class="lg-button">Find out more</div></router-link>
                </slot>
            </FeatureComponent>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>