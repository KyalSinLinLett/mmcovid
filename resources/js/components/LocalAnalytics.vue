<template>	
	<div class="mb-4">
		<h3>
		    Local Analytics(Myanmar)
		    <a style="text-decoration: none;" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit MOHS's covid-19 dashboard" href="https://www.mohs.gov.mm/Main/content/publication/2019-ncov">
		        <svg width="1em" height="1em" viewBox="0 0 16 16" id="icon" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		          <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
		          <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		        </svg>
		    </a>
		</h3>
		<hr>
		<div class="card mb-3" id="g-card">
			<div class="card-header text-light d-flex justify-content-between align-items-center" id="c-header">
				<h4 class="my-2 ml-3">In Myanmar</h4>
				<small class="my-2">Last updated: {{ date }}</small>
			</div>
		    <div class="card-body d-flex" id="g-data">
		        <div class="col-3" id="g-col">
		            <h5>Confirmed</h5>
		            <b id="g-count">{{ confirmed }}</b>
		        </div>
		        <div class="col-3" id="g-col">
		            <h5>Active</h5>
		            <b id="g-count">{{ active }}</b>
		        </div>
		        <div class="col-3" id="g-col">
		            <h5>Recovered</h5>
		            <b id="g-count">{{ recovered }}</b>
		        </div>
		        <div class="col-3">
		            <h5>Deaths</h5>
		            <b id="g-count">{{ deaths }}</b>
		        </div>
		    </div>
		</div>
	</div>
</template>

<script>
	export default {

		props: {
			date: {
				type: String,
			}, 
			confirmed: {
				type: Number,
			}, 
			active: {
				type: Number,
			},
			recovered: {
				type: Number,
			},
			deaths: {
				type: Number,
			},
		},

	}
</script>

<style type="text/css">
	
</style>