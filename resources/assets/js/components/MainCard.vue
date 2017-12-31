<template>
    <div id="main-card" class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="heading-inverse">Hey I'm Sean</h2>
            <p>I'm based out of New Jersey and I enjoy coding! Check out some of my projects and <a href="/contact" title="Find a web developer">drop me a line</a>!</p>
            <a href="/about" class="btn btn-primary btn-block">Read More</a>
        </div>
    </div>
</template>



<script>
    export default {
        data () {
            return {
                keyword: '',
                techList: [],
            }
        }
    }
</script>

<style scoped lang="scss">

#main-card {
    display: block;
    width: 50%;
    background: #f5ebff;
    border: 2px;
    position: relative;
    bottom: 20vh;
    margin: auto;
    border-radius: 10px;
}

</style>