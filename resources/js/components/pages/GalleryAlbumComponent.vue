<template>
    <div id="album-page">
        <section>
            <div class="container mx-auto">
                <div class="image-item" v-for="index in 15">
                    <div class="image-container">
                        <img :src="imageUrl+index+'.jpg'" alt="">
                    </div>
                </div>
            </div>
        </section>
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