<template>
	<div>
		<form action="">
		    <div class="_flex-js">
		        <div class="inputBox">
		            <div class="place_select">
		                <span>Location</span>
		                <div class="place_select-flex">
		                    <img src="assets/img/icons/hotel.png" alt="hotel">
		                    <span>Orlando Florida</span>
		                </div>
		            </div>
		        </div>

		        <div class="inputBox">
		            <div class="place_select">
		                <span>Check in</span>
		                <i class="far fa-calendar-alt">
		                    <input type="month" name="fecha" value="2019-08">
		                </i>
		            </div>
		        </div>

		        <div class="inputBox">
		            <div class="place_select">
		                <span>Check Out</span>
		                <i class="far fa-calendar-alt">
		                    <input type="month" name="fecha" value="2019-08">
		                </i>
		            </div>
		        </div>

		        <div class="inputBox">
	                <div 
	                	class="place_select"
				    	@click="showGuest()"
                	>
		                <span>Guest</span>

		                <div class="menuGuestHeader">
		                    <i class="far fa-user">
		                        <!-- <select name="format" id="format">
		                            <option selected disabled>5 guest</option>
		                            <option value="Nov19">Nov 19</option>
		                            <option value="Nov20">Nov 20</option>
		                        </select> -->

		                        <span>Add guest</span>
		                        <i class="fas fa-chevron-down"></i>
		                    </i>
		                </div>
		            </div>
		        </div>
		    </div>

		    <input type="submit" value="Search" class="btn">
		</form>
	</div>
</template>

<script>
	export default {

		name: 'MenuPlaces',

		data () {
			return {

			}
		},
		methods: {
			showGuest: function() {
				this.$emit('showGuest')
			}
		}
	}
</script>

<style lang="css" scoped>
</style>