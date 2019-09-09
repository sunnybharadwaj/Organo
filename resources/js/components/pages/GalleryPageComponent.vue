<template>
    <div id="gallery-page">
        <section>
            <div class="container mx-auto">
                <h1>Gallery</h1>
                <div class="masonry">
                    <router-link to="/gallery/album/naandi" class="album" >
                        <span class="item">

                            <div class="img-wrapper">
                                <span class="overlay"></span>
                            <img :src="'/static/images/naandi/home/4.jpg'" class="w-full" alt="">
                            </div>

                            <h2 class="album-name">Organo Naandi</h2>
                        </span>
                    </router-link>
                    <a class="album" href="">
                        <span class="item">

                            <div class="img-wrapper">
                                <span class="overlay"></span>
                            <img :src="'/static/images/naandi/home/4.jpg'" class="w-full" alt="">
                            </div>

                            <h2 class="album-name">Naandi Interiors</h2>
                        </span>
                    </a>
                    <a class="album" href="">
                        <span class="item">

                            <div class="img-wrapper">
                                <span class="overlay"></span>
                            <img :src="'/static/images/naandi/home/4.jpg'" class="w-full" alt="">
                            </div>

                            <h2 class="album-name">@School</h2>
                        </span>
                    </a>
                    <a class="album" href="">
                        <span class="item">

                            <div class="img-wrapper">
                                <span class="overlay"></span>
                            <img :src="'/static/images/naandi/home/4.jpg'" class="w-full" alt="">
                            </div>

                            <h2 class="album-name">Sustainable Living</h2>
                        </span>
                    </a>


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