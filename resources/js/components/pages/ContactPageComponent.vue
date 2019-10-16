<template>
    <div id="contact-page">
        <section class="header mb-0">
            <div class="container mx-auto">
                <div class="flex flex-wrap ">
                    <div class="w-full lg:w-7/12 map-block mb-8">
                        <h2 class="wide-page-title">Contact Us</h2>
                        <div class="map ">
                            <div class="wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14354.647078960967!2d78.31631970556451!3d17.31334342552389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x40307de067b30f32!2sOrgano%20Naandi!5e1!3m2!1sen!2sin!4v1568027673060!5m2!1sen!2sin" ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 contact-details">
                        <h1 class="mobile-page-title mb-12">Contact Us</h1>
                        <div class="flex flex-wrap sm:flex-initial md:flex-row-reverse lg:flex-initial">
                            <div class="sm:w-full md:w-1/2 lg:w-full">
                                <h2 class="phone-1 contact-item">
                                    <!--<div class="icon">-->
                                    <!--<img :src="'/static/icons/phone.png'" alt="">-->
                                    <!--</div>-->
                                    <div class="text">
                                        <div class="pre">+91</div>79933 55227
                                    </div>
                                </h2>
                                <h2 class="phone-2 contact-item">
                                    <!--<div class="icon">-->
                                    <!--<img :src="'/static/icons/phone.png'" alt="">-->
                                    <!--</div>-->
                                    <div class="text"><div class="pre">+91</div>81067 56010</div>
                                </h2>
                                <h3 class="mail contact-item">
                                    <!--<div class="icon">-->
                                    <!--<img :src="'/static/icons/mail.png'" alt="">-->
                                    <!--</div>-->

                                    <div class="text">
                                        marketing@organo.co.in
                                    </div>
                                </h3>
                            </div>
                            <div class="sm:w-full md:w-1/2 lg:w-full">
                                <div class="location contact-item">
                                    <div class="text alt-body w-full">
                                        <div class="flex flex-wrap">
                                            <div class="address w-full lg:w-1/2">
                                                <p class="label">Office</p>
                                                <div class="text-content">
                                                    Plot No: 15, 8-3, <br/>
                                                    684/3-15, Lane Number 3,  <br/>
                                                    Sri Nagar Colony, <br/>
                                                    LIC Colony,<br/>
                                                    Hyderabad - 500073, <br/>
                                                    Telangana State, India <br/>
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
                </div>
            </div>
        </section>

        <!--<section>-->
            <!--<HelpComponent></HelpComponent>-->
        <!--</section>-->
        <section id="contact-page-form" class="m-0 text-center">
            <div class="container mx-auto">
                <h2 class="mb-4">If we missed something, <br/> please write us a quick message.</h2>
                <a href="https://sunnybharadwaj563708.typeform.com/to/nzSQzy" target="_blank" class="txt-btn md">Click here</a>
                <!--<p class="alt-body"><span class="font-normal">Be as specific as you can so we can serve you as soon as possible.</span></p>-->
                <!--<p class="opacity-50 font-bold">Please fill all below fields</p>-->
                <!--<div class="form">-->
                <!--<FormContactComponent></FormContactComponent>-->
                <!--</div>-->

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