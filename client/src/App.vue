<template>
  <div class="bg-gray-200 h-screen">
    <Navigation></Navigation>   
    <router-view></router-view>
  </div>
</template>

<script>
import Navigation from "@/components/Navigation.vue";

export default {
  name: 'App',
  components: {
    Navigation
  }
}
</script>
