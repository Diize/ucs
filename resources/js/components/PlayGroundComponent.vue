<template>
  <div class="text-center">
    <h1 v-if="toggle">Vue is awesome!</h1>
    <button @click="test">Hej</button>
  </div>

</template>
   



<script>

    export default {
        mounted() {
            console.log('Component mounted.asd')
        },
        methods: {
       test() {
            this.toggle = true;
       }
  },
        props: ['albums'],

    data ()  {
  return {
     closeOnClick: true,
      filterOption: 'title',
      toggle: false,
  }
  },
  

        computed: {
  sortedArray: function() {
    const filterOption = this.filterOption
    function compare(a, b) {
      if (a[filterOption] < b[filterOption])
        return -1;
      if (a[filterOption] > b[filterOption])
        return 1;
      return 0;
    }

    return this.albums.slice().sort(compare);
  }
}
    }
</script>

<style scoped>
.option {
     cursor: pointer;
}
</style>
