<template>
    <div class="technologies">
        <h2 class="text-center section-heading">My Technologies</h2>
        <ul class="wrapper">
            <li class="card" v-bind:key="tech.id" v-for="tech in techList">
                    <a href="#" target="_blank">{{ tech.tech }}</a>
            </li>
        </ul>
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

<style scoped lang="scss">
.technologies {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
  
	ul.wrapper {
	  display: flex;
	  max-width: 650px;
	  flex-wrap: wrap;
      padding-top: 12px;
      
      >li {
          list-style: none;
      }
	}
  
	.card {
	  box-shadow: rgba(0, 0, 0, 0.117647) 0px 1px 6px, rgba(0, 0, 0, 0.117647) 0px 1px 4px;;
	  margin: 12px;
	  transition: .15s all ease-in-out;
	  background: #ffffff;
	  padding: 5px;

	  &:hover {
		transform: scale(1.1);
	  }
	  a {
		text-decoration: none;
		padding: 12px;
		color: #03A9F4;
		font-size: 24px;
		display: flex;
		flex-direction: column;
		align-items: center;
		img {
		  height: 100px;
		}
		small {
		  font-size: 10px;
		  padding: 4px;
		}
	  }
	}
}
</style>