<template>
	<div class="container" id="overall-analytics">
		<h3>
		    State-district information
		    <svg width="1em" height="1em" viewBox="0 0 16 16" id="icon" class="bi bi-diagram-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		      <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
		    </svg>
		</h3>
		<hr>

		<div v-for="sd_data in this.state_district_data" class="card mb-2" id="g-card">
			<div class="card-header text-light" id="sd-header">
				<h5 class="my-2">{{ sd_data.state }} - {{ sd_data.statecode }}</h5>
			</div>

			<div class="card-body pb-2">
				
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">District</th>
				      <th scope="col">Confirmed</th>
				      <th scope="col">Active</th>
				      <th scope="col">Recovered</th>
				      <th scope="col">Death</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr v-for="d in sd_data.districtData">
				      <td>{{ d.district }}</td>
				      <td>{{ d.confirmed }}</td>
				      <td>{{ d.active }}</td>
				      <td>{{ d.recovered }}</td>
				      <td>{{ d.deceased }}</td>
				    </tr>
				  </tbody>
				</table>	

			</div>

        </div>

	</div>
</template>

<script>
	export default {

		data() {
			return {
				state_district_data: [],
			}
		}, 

		mounted() {

			var s_d_data = [];

			fetch('https://thantthet.github.io/covid19-api/v2/state_district_wise.json')
			.then(response => response.json())
			.then(data => { // Prints result from `response.json()`

				for(var i = 0; i < data.length-1; i++)
				{
				  s_d_data.push(data[i]);
				}


				this.state_district_data = s_d_data;

			})
			.catch(error => console.error(error));


		}

	}
</script>

<style>	
	#sd-header {
	    border-radius: 1.5rem; 
	    box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
	    background-color: #55917f;
	}

</style>