<template>
    <div id="contact-page">
        <section class="header">
            <div class="container mx-auto">
                <div class="flex">
                    <div class="w-7/12 map-block">
                        <h2>Contact Us</h2>
                        <div class="map">
                            <img :src="'/static/graphicmap.jpg'" alt="">
                        </div>
                    </div>
                    <div class="w-5/12 contact-details">
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
                            <div class="icon">
                                <img :src="'/static/icons/location.png'" alt="">
                            </div>
                            <div class="text alt-body">
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