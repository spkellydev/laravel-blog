<template>
    <div class="search-wrapper">
        <div class="wrapper">
            <div class="card" v-bind:key="tech.id" v-for="tech in techList">
                    {{ tech.tech }}
                    {{ tech.description }}
            </div>
        </div>
    </div>
</template>

<script>

    class Tech {
        constructor(id, tech, description) {
            this.id = id
            this.tech = tech;
            this.description = description;
        }
    }

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