<template>
    <div v-if="showing" class="card-modal">
        <div class="modal-bg">
            <div class="background">
            </div>
            <div class="modal-wrapper">
                <div class="card">

                    <slot></slot>
                    <div
                            aria-label="close"
                            class="lg-button text-center mt-4"
                            @click="close"
                    >
                        Close
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
        },
        props: {
            showing: {
                required: true,
                type: Boolean
            }
        },
        methods: {
            close() {
                this.$emit('close');
            }
        }
    }
</script>