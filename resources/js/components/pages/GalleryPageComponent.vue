<template>
    <div id="gallery-page">
        <section>
            <div class="container mx-auto">
                <h1 class="text-center primary-color">Gallery</h1>

                <div class="home-images mb-12">

                    <div  class="swiper-container slider-component general">
                        <div class="swiper-wrapper" style="width: auto; height: 600px;">
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

                <p class="h4 mb-4 mt-8 primary-color tracking-loose font-bold uppercase">Albums</p>
                <div class="separator-line"></div>

                <div class="flex flex-wrap">


                    <router-link to="/gallery/album/naandi" class="album w-full lg:w-1/3" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/naandi_cover.jpg'" class="w-full" alt="">
                            <h3 class="h4 album-name">Organo Naandi</h3>
                        </div>
                    </router-link>
                    <!--<router-link to="/gallery/album/interiors" class="album w-1/2" >-->
                        <!--<div class="item">-->
                            <!--<img :src="'/static/gallery/covers/interiors_cover.jpg'" class="w-full" alt="">-->
                            <!--<h2 class="album-name">Naandi Interiors</h2>-->
                        <!--</div>-->
                    <!--</router-link>-->
                    <router-link to="/gallery/album/activities" class="album w-full lg:w-1/3" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/activities_cover.jpg'" class="w-full" alt="">
                            <h3 class="h4 album-name">Activities at Naandi</h3>
                        </div>
                    </router-link>
                    <router-link to="/gallery/album/school" class="album w-full lg:w-1/3" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/school_cover.jpg'" class="w-full" alt="">
                            <h3 class="h4 album-name">@School Event</h3>
                        </div>
                    </router-link>

                    <!--Videos-->
                </div>


                <p class="h4 mb-4 mt-8 primary-color tracking-loose font-bold uppercase">Videos</p>
                <div class="separator-line"></div>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/3">
                        <div class="flex flex-wrap team-item" v-for="item in video_data">
                            <img :src="'https://img.youtube.com/vi/' + item.video_id + '0.jpg'" alt="">
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
            axios.get('/api/videos')
                .then(response=> this.video_data=response.data);
        },
        data() {
            return {
                video_data: null,
            }

        }
    }
</script>