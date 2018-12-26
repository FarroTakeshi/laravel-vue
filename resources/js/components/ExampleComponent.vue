<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
                <!--div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div-->
        <div v-for="vehicle in vehicles" class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              {{ vehicle }}
            </h3>
          </div>
        <div class="panel-body">
          <div class="col-md-8">
            <strong>Fecha inicio:</strong>
            <p>{{ vehicle }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  //let uri = '/api/vehicles';
  let uri = '/laravel-vue/public/api/vehicles';
  export default {
    data() {
        return {
          vehicles: []
        }
    },
    methods: {
      index() {
        window.axios.get(uri).then(({ data }) => {
          data.forEach(vehicle => {
            this.vehicles.push(new Vehicle(vehicle));
          });
        });
      },
      create() {
        window.axios.get('/api/vehicles/create').then(({ data }) => {
          this.vehicles.push(new Vehicle(data));
        });
      },
    },
    created() {
      this.index();
    }
  }
</script>


