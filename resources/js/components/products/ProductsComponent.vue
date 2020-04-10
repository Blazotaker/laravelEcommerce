<template>
  <section>
    <material-transition-group tag="div" class="row">	
      <product-card-component
        v-bind:product="product"
        :data-index="index"
        v-for="(product,index) in products"
        :key="product.id"
      ></product-card-component>
   </material-transition-group>
  </section>
</template>

<script>
export default {
  data() {
    return {
      products: [],
      endpoint: "/productos"
    };
  },
  created() {
      console.log('aqui')
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      axios.get(this.endpoint,this.config)
      .then(response => {
        this.products = response.data.data;
      })
      .catch(error => {
          console.log('no pasé')
          console.log(error);
         
      });;

      var config = {
              headers:{
                  'Content-Type':'application/json',
                  'Accept':'application/json'
              }
        }
    },
    
  }
};
</script>