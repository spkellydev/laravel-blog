<template>
    <div id="main-card" class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="heading-inverse">Main Project Here</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sint odio, perferendis maiores hic odit! Autem, earum? Natus dignissimos repellendus unde impedit culpa illum tempore molestiae porro quaerat, dicta perspiciatis autem accusamus, dolor pariatur ex?</p>
            <a href="#" class="btn btn-primary btn-block">Read More</a>
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