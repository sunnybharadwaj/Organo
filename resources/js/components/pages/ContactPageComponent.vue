<template>
    <div id="contact-page">
        <section class="header">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-7/12 map-block mb-8">
                        <h2>Contact Us</h2>
                        <div class="map">
                            <img :src="'/static/graphicmap.jpg'" alt="">
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 contact-details">
                        <h2 class="phone-1 contact-item">
                            <div class="icon">
                                <img :src="'/static/icons/phone.png'" alt="">
                            </div>
                            <div class="text">
                                <div class="pre">+91</div>79933 55227
                            </div>
                        </h2>
                        <h2 class="phone-2 contact-item">
                            <div class="icon">
                                <img :src="'/static/icons/phone.png'" alt="">
                            </div>
                            <div class="text"><div class="pre">+91</div>81067 56010</div>
                        </h2>
                        <h3 class="mail contact-item">
                            <div class="icon">
                                <img :src="'/static/icons/mail.png'" alt="">
                            </div>

                            <div class="text">
                                help@organo.com
                            </div>
                        </h3>


                        <div class="location contact-item">
                            <div class="text alt-body">
                                <div class="flex flex-wrap">
                                    <div class="address w-full lg:w-1/2">
                                        <p class="label">Organo</p>
                                        <div class="text-content">
                                            #148 & 149, <br />
                                            Aziz Nagar Panchayat, <br />
                                            Through Yenkapalli Village, <br/>
                                            Moinabad, RR District,<br />
                                            Hyderabad – 500 075, <br />
                                            Telangana State, India.
                                        </div>

                                    </div>
                                    <div class="address w-full lg:w-1/2">
                                        <p class="label">Naandi</p>
                                        <div class="text-content">
                                            #148 & 149, <br />
                                            Aziz Nagar Panchayat, <br />
                                            Through Yenkapalli Village, <br/>
                                            Moinabad, RR District,<br />
                                            Hyderabad – 500 075, <br />
                                            Telangana State, India.
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <HelpComponent></HelpComponent>
        </section>
        <section id="contact-page-form" class="m-0">
            <div class="container mx-auto">
                <p class="alt-body">If we missed something, please write us a quick message.<br/> <span class="font-normal">Be as specific as you can so we can serve you as soon as possible.</span></p>
                <p class="opacity-50 font-bold">Please fill all below fields</p>
                <div class="form">
                    <FormContactComponent></FormContactComponent>
                </div>

            </div>
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