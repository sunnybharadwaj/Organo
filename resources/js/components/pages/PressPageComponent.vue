<template>
    <div id="press-page">
        <div class="nav-box"></div>
        <div class="cards">
            <div class="max-w-xs text-center mx-auto ">

            </div>
            <div class="text-center loud py-8 h4 mb-12"><img src="/static/icons/news.png" alt="" class="mx-auto press-page-icon">Press Releases & Updates</div>
            <div class="news-wrapper container">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-1/3" v-for="news in data">
                        <div class="press-card">
                            <div class=" rounded overflow-hidden shadow-lg">
                                <div class="bottom ">
                                    <div class="headline px-6 py-4">
                                        <h4 class="h5 font-bold text-center headline-text">{{news.headline}}</h4>
                                    </div>
                                </div>
                                <div class="link text-center">
                                    <a :href="news.url" target="_blank" class="std-link ">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/press')
                .then(response => {
                    this.data = response.data;
                    console.log(response.data);
                });
        },
        data() {
            return {
                data: null
            }
        }
    }
</script>