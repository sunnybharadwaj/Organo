<template>
    <div id="team-page">
        <div class="bg-gray-100">
            <section class="hero m-0 relative">
                <div class="hero-bg">
                    <div class="label text-center mb-4">ABOUT</div>
                    <div class="container text-center mx-auto">
                        <h1 class="">Our Team</h1>
                        <div class="mb-3"></div>
                        <h3 class="font-normal max-w-5xl mx-auto">We are a group of Architects, Designers and
                            Visionaries with a wide range of subject-matter expertise, focusing our efforts towards
                            designing, building and developing sustainable eco-habitats.</h3>
                    </div>
                </div>
            </section>
        </div>
        <section id="core-values">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-7/12 px-4 py-4">
                        <div class="label">OUR CORE VALUES</div>

                        <div class="value">
                            <div class="heading"><h3><span class="hl">S</span>implicity</h3></div>
                            <div class="description alt-body font-normal">We eliminate the unnecessary, without losing
                                intent and find the best solution for a problem in the simplest way possible.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3><span class="hl">C</span>ollaboration</h3></div>
                            <div class="description alt-body font-normal">Fearlessly collaborate and benefit from a wide
                                range of skills to generate synergies between the team.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3><span class="hl">O</span>wnership</h3></div>
                            <div class="description alt-body font-normal">We take responsibility and complete ownership
                                of our efforts and outcomes to make sure we deliver value, every time.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3><span class="hl">P</span>erseverance</h3></div>
                            <div class="description alt-body font-normal">We get out of our comfort zone and endlessly
                                learn to adapt in an ever-changing environment. We persevere to deliver the promised
                                experience, no matter what it takes.
                            </div>
                        </div>
                        <div class="value">
                            <div class="heading"><h3><span class="hl">E</span>mpathy</h3></div>
                            <div class="description alt-body font-normal">We try to understand by
                                observing your needs and listening without prejudice.
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 ">
                        <div class="image-container hd-only min-h-full">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="team-list">
            <div class="container mx-auto">
                <div>
                    <div class="flex flex-wrap team-item" v-for="item in data">

                        <div class="w-full lg:w-4/12 image-wrapper">
                            <div class="image-container bg-blue-200">
                                <img :src="'/storage/' + item.imagepath" alt="">
                            </div>
                        </div>
                        <div class="w-full lg:w-8/12 text-content">
                            <h3>{{item.name}}</h3>
                            <p class="alt-body primary-color">{{item.role}}</p>
                            <div class="links mb-4">
                                <ul>
                                    <li class="link">
                                        <a :href="item.url" target="_blank">
                                            LinkedIn
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p>
                                {{item.description}}
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="team-list">
            <div class="container mx-auto">
                <div>
                    <div class="flex flex-wrap team-item" v-for="item in team_list">

                        <div class="w-full lg:w-4/12 image-wrapper">
                            <div class="image-container bg-blue-200">
                                <img :src="item.image_url" alt="">
                            </div>
                        </div>
                        <div class="w-full lg:w-8/12 text-content">
                            <h3>{{item.name}}</h3>
                            <p class="alt-body primary-color">{{item.role}}</p>
                            <div class="links mb-4">
                                <ul>
                                    <li class="link">
                                        <a :href="item.links.linkedIn" target="_blank">
                                            LinkedIn
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p>
                                {{item.description}}
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section id="awards" class="bg-gray-200 hidden">
            <div class="container mx-auto">

                <div class="image-container"></div>
                <div class="label text-center">AWARDS</div>
                <div class="mb-4"></div>
                <h3 class="text-center"></h3>
                <div class="mb-12"></div>
                <div id="award-list" class="text-center">
                    <div class="award">
                        <h3>India Green Building Council certified Naandi as to have successfully achieved the Green
                            Building Standards under IGBC Home Platinum</h3>
                    </div>
                    <p class="alt-body">Rethinking the Future - Sustainability Awards - 2014</p>
                    <p class="alt-body">Architecture Podium - International Architecture Awards - 2015</p>
                    <p class="alt-body">NDTV - Design & Architecture Awards - 2015</p>
                </div>
            </div>
        </section>

    </div>


</template>

<script>

    let team_list = [
        {
            name: 'Nagesh Battula',
            role: 'Managing Director',
            description: 'Nagesh who started and spearheaded the Fountainhead Design Group (FHD), is a natural learner and a self-taught leader. He has over 20 years of extensive experience in residential, commercial, hospitality, retail and luxury interiors projects. It was Nagesh’s vision to develop a project that would be sustainable and net-zero in its resource consumption.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/nageshbattula/'
            },
            image_url: '/static/team/nageshbattula.jpg'
        },
        {
            name: 'Vijaya Durga',
            role: 'Managing Director',
            description: 'With over 20 years of experience in the field of interior designing and the head of the Interior design team at FHD, Vijaya has an eye for detail and a sensitivity towards colors, fixtures and finishes, that let her make impeccable decisions on the spot. She shares the vigor to develop Organo as a highly productive yet aesthetically pleasing farming community.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/vijaya-durga-yadla/'
            },
            image_url: '/static/team/vijayadurga.jpg'
        },
        {
            name: 'Rajendra Kumar',
            role: 'Co Founder, Director',
            description: 'Raj as we call him, is not a definition person, which helped him design the marketing strategy for India’s first sustainable collective farming habitat, in the most non-traditional ways. Raj is the quarterback for our Marketing and Sales team driving it with passion and vigor. Raj’s vision for the project is far out and very fast for everyone to catch up.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/rajendrakumarg/'
            },
            image_url: '/static/team/rajendrakumar.jpg'
        },
        // {
        //     name: 'Dr. Vinod Vemula',
        //     description: 'Dr. Vemula heads the Farmer outreach program at Organo. Has more than 27 years of experience in agriculture, forestry, natural resources development & management projects, on farm research & extension. His at the grassroots level, works directly with farmers to middle support  and his extensive international experience gives him a bird\'s eye view to help convert neighboring villages and farmers to turn Organic with the focus on sustainability.',
        //     links: {
        //         linkedIn: 'https://www.linkedin.com/in/dr-vinod-goud-vemula-83650138/'
        //     },
        //     image_url: '/static/team/drvinodvemula.jpg'
        // },
        {
            name: 'Dhamothara N',
            role: 'Director - Operations',
            description: 'Dhamu, Director of Operations and head of the Architectural division for FHD has helped get critical design solutions right, without compromising on logistical efficiencies. Dhamu has over 11 years of experience in the field of architecture with several master planning and large-scale projects to his credit.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/dhamotharan-s-9772a911/'
            },
            image_url: '/static/team/dhamotharan.jpg'
        },
        {
            name: 'Mathan Ramaiah',
            role: 'Director - Design',
            description: 'Mathan graduated from Columbia University, New York. He has over 12 years of experience working in Indian and International firms, leading several award-winning master plans with special emphasis on passive and active sustainable strategies. He is passionately involved in the masterplan and public space design of Organo.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/mathanramaiah/'
            },
            image_url: '/static/team/mathanramaiah.jpg'
        },
        {
            name: 'Niharika',
            role: 'Project Management',
            description: 'An IGBC Accredited Professional LEED Green Associate, Niharika handles the Project Management for Organo. Using her Civil Engineering education and her 10 years of experience in Construction to her advantage, she handles Technical Support, Sustainability and Customer Relations effectively.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/niharikabattula/'
            },
            image_url: '/static/team/niharika.jpg'
        },
        {
            name: 'Harinath Rao',
            role: 'Associate Director',
            description: 'Associate Director, Organo brings in decades of rich functional construction and real estate expertise. As a structural engineer turned businessman, he combines the best of both worlds in melding business expertise with a thorough understanding of the technicalities of the business, and is focused on creating seamless buyer journeys. He brings in his multi-faceted expertise to add value with emphasis on delivering superior customer experience.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/t-harinath-rao-64847340/'
            },
            image_url: '/static/team/harinathrao.jpg'
        },
        {
            name: 'Meena Murugappan',
            role: 'Director - Development Strategy',
            description: 'With over 17 years of international & local experience across multiple industries, she is currently the Director of Development Strategy. She is passionate about developing real estate products that are first-to-market. Education: B.Arch from SAP & MS in Real Estate Development from MIT, Boston.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/meenamurugappan/'
            },
            image_url: '/static/team/meenamurugappan.jpg'
        },
        // {
        //     name: 'Dr. Dharmendar Reddy',
        //     description: 'A Management Professional with 17 +years experience in Micro-finance, Agriculture credit, Collections and more. Dr. Dharmendar Reddy is an expert in Rural Strategy, establishing new business operations and establishing new distribution channels. Education: MBA from Kakatiya University, Warangal.',
        //     links: {
        //         linkedIn: 'https://www.linkedin.com/in/dharmendar-reddy-c-939417136/'
        //     },
        //     image_url: '/static/team/drdharmendarreddy.jpg'
        // },
        {
            name: 'Rakesh Koti',
            role: 'Head of Sustainability',
            description: 'Rakesh Koti heads sustainability at Organo and has a keen interest in developing net-zero environments. He did his BE from IIT, Kharagpur, & MS in Energy Systems from University of Illinois in Urbana Champaign.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/rakeshkoti/'
            },
            image_url: '/static/team/rakeshkoti.jpg'
        },
        {
            name: 'Dr. Syamasundar Reddy',
            role: 'Senior Scientist & Head',
            description: 'Dr. Reddy specializes in agriculture cycles, crop production, plant rotection and agricultural marketing related agro-advisories.',
            links: {
                linkedIn: 'https://www.linkedin.com/in/dr-g-syamasundar-reddy-585b5b16/'
            },
            image_url: '/static/team/drsyamasundarreddy.jpg'
        },


    ];
    export default {
        mounted() {
            axios.get('/api/team')
                .then(response => this.data=response.data);
        },
        data() {
            return {
                team_list: team_list,
                data: null
            }
        }
    }
</script>