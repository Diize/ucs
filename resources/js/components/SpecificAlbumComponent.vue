<template>
   <div class="bg-black dark:bg-slate-900  py-8 ring-1 ring-slate-900/5 shadow-xl w-screen justify-center    justify-items-center flex min-h-screen    " >
<h1 class="absolute   uppercase  text-white text-3xl ...">{{myAlbum.title}}</h1>

<div class="w-full     border	 border-teal-500	 mt-24	">

<div class="grid grid-cols-6 gap-4 ml-3.5	 my-6	">
  <div  v-for="picture in pictures" :key="picture.id" class="border-2 w-3/4 h-48 bg-sky-500	items-center	justify-center	content-center	flex mx-8" >
    <img :src="picture.thumbnailUrl" class="object-cover h-47 w-95	border-2	"/>
    
  </div>

</div>

</div>


<!-- end of main.. -->
</div>
</template>


<script>
export default {
  mounted() {
    let albumID = this.id;
  var filteredArray = this.albums.filter(function (el) {
  return el.id == albumID
});
var last = filteredArray[filteredArray.length - 1];
this.myAlbum = last;
// -------------------------------
var filteredPictures = this.pictures.filter(function (el) {
  return el.albumId == albumID
});
var albumsPics = filteredPictures
this.pictures = albumsPics;
console.log(this.pictures)


  },
  created() {
      
      },


    props: {
      id: Number,
      albums: [],
      pictures: [],
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
