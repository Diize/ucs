<template>

    <div class="bg-black dark:bg-slate-900  py-8 ring-1 ring-slate-900/5 shadow-xl w-screen justify-center    justify-items-center flex min-h-screen    overflow-hidden	" >
<h1 class="absolute font-sans text-white uppercase tracking-widest font-bold text-4xl ...">Album Project</h1>

<div class="w-screen border-2  border-teal-500 mt-24 overflow-hidden	">

<div class="grid grid-cols-6 gap-4 ">
    <!-- foreach... -->
  <div  v-for="album in albums" :key="album.id" class="border-2 text-teal-500	border-teal-500	 w-3/4 h-48 bg-zinc-800	 flex items-center	justify-center	content-center mx-8 mt-3	"  >
    <p class="absolute align-top mb-36">ALBUM</p>
    <a class="text-xl text-zinc-50 font-sans " :href="'/album/'+ album.id"> {{ album.title }} </a>
  </div>

</div>

</div>


</div>
<!-- end of main.. -->
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.asd')
        },
        props: ['albums']

    }
</script>


