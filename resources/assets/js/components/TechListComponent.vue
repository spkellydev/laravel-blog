<template>
    <div class="search-wrapper">
        <div class="wrapper">
            <aside class="card" v-bind:key="tech.id" v-for="tech in techList">
                    <a href="#" target="_blank">{{ tech.tech }}</a>
            </aside>
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
            }, response => {
                console.log(response)
            });
        }
    }
</script>