<template>
   <div class="bg-black dark:bg-slate-900  py-8 ring-1 ring-slate-900/5 shadow-xl w-screen justify-center    justify-items-center flex min-h-screen    " >
<h1 class="absolute  font-bold uppercase  text-white text-3xl ...">{{this.activealbum.title}}</h1>

<div class="w-full     border	 border-teal-500	 mt-24	">

<div class="grid grid-cols-6 gap-4 ml-3.5	 my-6	">
  <div  v-for="picture in activepictures" :key="picture.id" class="border-2 w-3/4 h-48 bg-sky-500	items-center	justify-center	content-center	flex mx-8" >
    <img :src="picture.thumbnailUrl" class="object-cover h-47 w-95	border-2	"/>
    
  </div>

</div>

</div> -->


<!-- end of main.. -->
</div>
</template>


<script>
export default {
  mounted() {

console.log(this.activealbum)

  },
  created() {
      
      },


    props: {
      id: Number,
     activealbum: {},
     activepictures: [],
  },

    data() {
    return {
      myAlbum: {
        title: '',
        id: 0,
      },
      myFilteredPictures: [],
   };
  },

}
</script>
