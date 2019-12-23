<template>
    <div id="album-page">
        <section>

            <div class="container mx-auto">
                <div class="image-item" v-for="index in 10">
                    <div class="image-container">
                        <img :src="imageUrl+index+'.jpg'" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center">
            <div class="lg-button">
                <router-link to="/gallery"><h2>Back to Gallery</h2></router-link>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['album'],
        mounted() {

        },
        data() {
            return {

            }
        },
        computed: {
            imageUrl() {
                return '/static/gallery/'+this.album+'/'
            }
        }
    }
</script>