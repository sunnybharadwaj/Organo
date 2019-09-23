<template>
    <div id="gallery-page">
        <section>
            <div class="container mx-auto">
                <h1>Gallery</h1>

                <div class="flex flex-wrap">
                    <router-link to="/gallery/album/naandi" class="album w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/naandi_cover.jpg'" class="w-full" alt="">
                            <h2 class="album-name">Organo Naandi</h2>
                        </div>
                    </router-link>
                    <router-link to="/gallery/album/interiors" class="album w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/interiors_cover.jpg'" class="w-full" alt="">
                            <h2 class="album-name">Naandi Interiors</h2>
                        </div>
                    </router-link>
                    <router-link to="/gallery/album/activities" class="album w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/activities_cover.jpg'" class="w-full" alt="">
                            <h2 class="album-name">Activities at Naandi</h2>
                        </div>
                    </router-link>
                    <router-link to="/gallery/album/school" class="album w-1/2" >
                        <div class="item">
                            <img :src="'/static/gallery/covers/school_cover.jpg'" class="w-full" alt="">
                            <h2 class="album-name">@School Event</h2>
                        </div>
                    </router-link>
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