<template>
    <div id="video-header">
        <section id="introduction" class="hero-bg m-0">
            <div class="video-container">
                <div class="overlay"></div>
                <video autoplay loop muted>
                    <slot name="header-video">

                    </slot>
                </video>
            </div>
            <div class="content-block">
                <div class="text-content">
                    <slot name="header-content">

                    </slot>
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