<template>
	<div>
		<hr>
		<h4>States and Regions</h4>
		<hr>

		<div v-for="sd in stateData" class="card mb-2" id="g-card">
			<div class="card-header text-light bg-dark" id="s-header">
				<h5 class="my-2">{{ sd.state }}</h5>
			</div>

			<div class="card-body pb-2">
				<ul>
					<li>active: {{ sd.active }} </li>
					<li>confirmed: {{ sd.confirmed }}</li>
					<li>recovered: {{ sd.recovered }}</li>
					<li>deaths: {{ sd.deaths }}</li>
					<li><small>updated on: {{ sd.lastupdatedtime }}</small></li>
				</ul>				
			</div>

        </div>
	</div>
</template>

<script>
		
	export default {

		props: {
			stateData: {
				type: Array,
			}
		}

	}

</script>

<style type="text/css" scoped>
	#s-header {
	    border-radius: 1.5rem; 
	    box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
	    background-color: #55917f;
	}
</style>