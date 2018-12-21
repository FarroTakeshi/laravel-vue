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
          <div class="anime-synopsis col-md-8">
            <strong>Fecha inicio:</strong>
              <p>{{ vehicle }}</p>
          </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  let uri = '/api/vehicles';
  export default {
    data() {
        return {
          posts: []
        }
      },
    created() {
      this.axios.get(uri).then(response => {
        this.vehicles = response.data.data;
      });
    }
  }
</script>


