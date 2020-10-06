<template>
    <div class="container" id="overall-analytics">
        <local-analytics :date="date" :confirmed="confirmed" :active="active" :recovered="recovered" :deaths="deaths" ></local-analytics>
        <state-data :stateData="stateData"></state-data>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                date: '',
                confirmed: null,
                active: null,
                recovered: null,
                deaths: null,
                stateData: [],
            }
        },

        mounted() {
            var c_data = [];
            var stateData = [];

            fetch('https://thantthet.github.io/covid19-api/data.json')
            .then(response => response.json())
            .then(data => { // Prints result from `response.json()`

              c_data = data.statewise;

              this.confirmed = c_data[0].confirmed;
              this.active = c_data[0].active;
              this.recovered = c_data[0].recovered;
              this.deaths = c_data[0].deaths;
              this.date = c_data[0].lastupdatedtime;


              for(var i = 1; i < c_data.length; i++)
              {
                stateData.push(c_data[i]);
              }

              this.stateData = stateData;
            })
            .catch(error => console.error(error));
        }
    }

</script>

<style type="text/css">

    #overall-analytics {
        font-family: monospace;
    }

    #g-card {
        border-radius: 1.5rem; 
        box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
    }

    #c-header {
        border-radius: 1.5rem; 
        box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
        background-color: #55917f;
    }

    #g-data {
        text-align: center;
    }

    #g-col {
        border-right: 1px solid #3e403f;
    }

    #g-count {
        font-style: italic;
    }

    #icon {
        color: #55917f;
    }
</style>