<template>
    <div id="team-page">
        <div class="bg-gray-100">
            <section class="hero m-0 py-32">
                <div class="label text-center mb-4">ABOUT</div>
                <div class="container text-center mx-auto">
                    <h1 class="">Our Team</h1>
                    <div class="mb-3"></div>
                    <p class="alt-body max-w-4xl mx-auto">We are a group of Architects, Designers and
                        Visionaries with a wide range of subject-matter expertise, focused towards creating sustainable
                        eco-habitats.</p>
                </div>
            </section>
        </div>
        <section id="core-values">
            <div class="container mx-auto">
                <div class="flex">
                    <div class="w-7/12 px-4 py-4">
                        <div class="label">OUR CORE VALUES</div>

                        <div class="value">
                            <div class="heading"><h3>Simplicity</h3></div>
                            <div class="description">We eliminate the unnecessary without losing intent and finding the
                                best solution for a problem in the simplest way possible.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3>Collaboration</h3></div>
                            <div class="description">Fearlessly collaborate and benefit from a wide range of skill to
                                generate synergies between the team.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3>Ownership</h3></div>
                            <div class="description">We take responsibility and full ownership of our efforts and
                                outcomes to make sure we deliver value, every time.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3>Perseverance</h3></div>
                            <div class="description">We get out of our comfort zone and endlessly learn to adapt in an
                                ever-changing environment. We persevere to deliver the promised experience, no matter
                                what it takes.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3>Empathy</h3></div>
                            <div class="description">We don’t judge. We try to understand by observing your needs and
                                listening without prejudice.
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12 bg-gray-300"></div>
                </div>
            </div>
        </section>

        <div id="team-list">
            <div class="container mx-auto">
                <div class="flex team-item">
                    <div class="w-4/12 image-wrapper">
                        <div class="image-container bg-blue-200"></div>
                    </div>
                    <div class="w-8/12 text-content">
                        <h3>Nagesh Battula</h3>
                        <!--<p class="alt-body">Co-founder and CEO</p>-->
                        <p>
                            Nagesh who started and spearheaded the Fountainhead Design Group (FHD), is a natural learner
                            and a self-taught leader. He has over 20 years of extensive experience in residential,
                            commercial, hospitality, retail and luxury interiors projects. It was Nagesh’s vision to
                            develop a project that would be sustainable and net-zero in its resource consumption.
                        </p>

                        <div class="links">
                            <ul>
                                <li class="link">LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex team-item">
                    <div class="w-4/12 image-wrapper">
                        <div class="image-container bg-blue-200"></div>
                    </div>
                    <div class="w-8/12 text-content">
                        <h3>Nagesh Battula</h3>
                        <!--<p class="alt-body">Co-founder and CEO</p>-->
                        <p>
                            Nagesh who started and spearheaded the Fountainhead Design Group (FHD), is a natural learner
                            and a self-taught leader. He has over 20 years of extensive experience in residential,
                            commercial, hospitality, retail and luxury interiors projects. It was Nagesh’s vision to
                            develop a project that would be sustainable and net-zero in its resource consumption.
                        </p>

                        <div class="links">
                            <ul>
                                <li class="link">LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="awards" class="bg-gray-200">
            <div class="container mx-auto">

                <div class="image-container bg-gray-400"></div>
                <div class="label text-center">AWARDS</div>
                <div class="mb-4"></div>
                <h3 class="text-center">Morbi aliquam sem ut euismod egestas. Ut vestibulum nibh lectus, et fringilla
                    nisi congue et. Ut id ante sed urna finibus vehicula.</h3>
                <div class="mb-12"></div>
                <div id="award-list" class="text-center">
                    <p class="alt-body">Rethinking the Future - Sustainability Awards - 2014</p>
                    <p class="alt-body">Architecture Podium - International Architecture Awards - 2015</p>
                    <p class="alt-body">NDTV - Design & Architecture Awards - 2015</p>
                </div>
            </div>
        </section>

        <StandardCTAComponent></StandardCTAComponent>

    </div>


</template>

<script>
    export default {
        mounted() {
        }
    }
</script>