<template>

        <div class="image-content-component">
            <div class="section-wrapper">
                <slot name="image"></slot>
                <div class="container mx-auto">
                    <div class="flex flex-wrap content-wrapper">
                        <div class="flex-wrapper w-full sm:w-full md:w-full xl:w-7/12 ">
                            <div class="content-block sm:w-full sm:m-0">
                                <slot name="content"></slot>
                            </div>
                        </div>
                        <div class="flex-wrapper media-block w-full sm:w-full md:w-full h-100 lg:w-5/12">
                            <div class="slider-container">
                                <!--<img :src="'/static/images/entertainment_center.jpg'" alt="">-->
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
        }
    }
</script>