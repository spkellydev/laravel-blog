<template>
	<div class="heading">
    	<project-image :src="src" :alt="title"></project-image>
		<project-title :title="title" :category="category"></project-title>
	</div>
</template>

<script>
    export default {
        props: ['title', 'category', 'src'],
        data () {
            return {
            }
        },
        mounted () {
            console.log(this.title)
        },
        created: function () {
            
        }
    }
</script>

<style scoped lang="scss">
@import '~@/_variables.scss';


    h1.project-title {
		background-color: $site-blue;
		color: white;
		margin: 0;
		padding: 10px;
		font-size: 4rem;
		min-height: 104px;
		display: flex;
		align-items: center;
    }
</style>