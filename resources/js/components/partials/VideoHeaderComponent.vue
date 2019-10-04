<template>
    <div id="video-header" class="video-header-component">
        <section id="introduction" class="hero-bg m-0">
            <div class="video-container relative">
                <div class="overlay"></div>
                <slot name="header-video">

                </slot>
                <div class="content-block">
                    <div class="text-content">
                        <slot name="header-content">

                        </slot>
                    </div>
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