<template>
    <div id="gallery-page">
        <section>
            <div class="container mx-auto">
                <h1 class="text-center">Gallery</h1>

                <div class="home-images mb-4">

                    <div  class="swiper-container slider-component general">
                        <div class="swiper-wrapper" style="width: auto; height: 500px;">
                            <div class="image-item swiper-slide" v-for="index in 10">
                                <div class="image-container ">
                                    <img :src="'/static/gallery/naandi/'+ index + '.jpg'" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <!--<div class="flex flex-wrap">-->

                        <!--<div class="w-full lg:w-1/3" v-for="index in 6">-->
                            <!--<div class="image-container my-1 px-1" style="height: 175px; overflow: hidden;">-->
                                <!--<img class="w-full" :src="'/static/gallery/naandi/'+ index + '.jpg'" alt="">-->
                            <!--</div>-->
                        <!--</div>-->

                <!--</div>-->
                <div ></div>
                <p class="h4 mb-4 mt-8 primary-color tracking-loose font-bold uppercase">Albums</p>
                <div class="separator-line"></div>

                <div class="flex flex-wrap">


                    <router-link to="/gallery/album/naandi" class="album w-full lg:w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/naandi_cover.jpg'" class="w-full" alt="">
                            <h3 class="album-name">Organo Naandi</h3>
                        </div>
                    </router-link>
                    <!--<router-link to="/gallery/album/interiors" class="album w-1/2" >-->
                        <!--<div class="item">-->
                            <!--<img :src="'/static/gallery/covers/interiors_cover.jpg'" class="w-full" alt="">-->
                            <!--<h2 class="album-name">Naandi Interiors</h2>-->
                        <!--</div>-->
                    <!--</router-link>-->
                    <router-link to="/gallery/album/activities" class="album w-full lg:w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/activities_cover.jpg'" class="w-full" alt="">
                            <h3 class="album-name">Activities at Naandi</h3>
                        </div>
                    </router-link>
                    <router-link to="/gallery/album/school" class="album w-full lg:w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/school_cover.jpg'" class="w-full" alt="">
                            <h3 class="album-name">@School Event</h3>
                        </div>
                    </router-link>

                    <!--Videos-->
                </div>

            </div>

        </section>


    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>