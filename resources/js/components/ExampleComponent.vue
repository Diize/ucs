<template>
    <div>
        <p v-for="album in albums" :key="album.id">
           hey im {{ album.title }}
        </p>
    </div>
</template>
<script>
export default {
  mounted() {
    console.log('Component mounted!!!.')
  },
  props: {
    albums: {
      type: Array,
      default: []
    },
  }
}
</script>