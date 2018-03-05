<template>
	<div class="heading">
    	<h1 class="heading-inverse project-title">{{ category }} Project: {{ title }}</h1>
	</div>
</template>

<script>
    export default {
		props: ['title', 'category'],
		state: ['title'],
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