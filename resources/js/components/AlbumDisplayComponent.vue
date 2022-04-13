<template>

    <div class="bg-black dark:bg-slate-900  py-8 ring-1 ring-slate-900/5 shadow-xl w-screen justify-center    justify-items-center flex min-h-screen   overflow-auto	  no-scrollbar overflow-y-auto " >
    <button 
    class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded absolute ml-96 "
    @mouseover="toggle = true"
    >
  Filter by
</button>

    <div v-if="toggle"
    @mouseleave="toggle = false"
    class="absolute ml-96 mt-10    text-white rounded w-20    text-center        "> 
      <p class="filterO hover:bg-blue-500 text-white rounded font-sans text-white " @click="filterOption = 'id' " >ID</p>
      <p  class="filterO hover:bg-blue-500 text-white rounded font-sans text-white " @click="filterOption = 'title'">Title</p>
    </div>




<h1 class="absolute font-sans text-white uppercase tracking-widest font-bold text-4xl mr-16    ...">Album Project</h1>


<div class="w-screen border-2  border-teal-500 mt-24 overflow-hidden    ">

<div class="grid grid-cols-6 gap-4 ">
    <!-- foreach... -->
  <div  v-for="album in sortedArray" :key="album.id" class="border-2 text-teal-500    border-teal-500     w-3/4 h-48 bg-zinc-800     flex items-center    justify-center    content-center mx-8 mt-3    "  >
    <p class="absolute align-top mb-36">ALBUM</p>
    <a class="text-xl text-zinc-50 font-sans " :href="'/album/'+ album.id"> {{ album.title }} </a>
  </div>

</div>

</div>


</div>
    
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.asd')
        },
        methods: {
       hello() {
            this.toggle = !this.toggle
            console.log(this.filterOption)
       }
  },
        props: ['albums'],

    data ()  {
  return {
     closeOnClick: true,
      filterOption: 'id',
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

.filterO {
  cursor: pointer;
}
</style>