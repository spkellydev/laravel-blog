<template>
    <div class="search-wrapper">
        <div class="wrapper">
            <div class="card" v-bind:key="tech.id" v-for="tech in techList">
                    <a href="#" target="_blank">{{ tech.tech }}</a>
            </div>
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
        },
        created: function () {
            this.$http.get('/api/technologies').then(response => {
                this.techList = response.data.data

                console.log(this.techList)
            }, response => {
                console.log(response)
            });
        }
    }
</script>