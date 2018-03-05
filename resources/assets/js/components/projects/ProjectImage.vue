<template>
    <figure>
        <img :src="src" :alt="alt">
        <figcaption class="image-caption">{{ alt }}</figcaption>
    </figure>
</template>

<script>
    export default {
        props: ['src', 'alt'],
        data () {
            return {
            }
        },
        mounted () {

        },
        created: function () {
        }
    }
</script>

<style scoped lang="scss">
    @import '~@/_variables.scss';

    figure {
        position: relative;

        img {
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .image-caption {
            position: absolute;
            top: 0;
            left: 0;
            color: $site-whitesmoke-hint;
            font-style: italic;
            padding: 0 0 0 10px;
        }
    }

</style>