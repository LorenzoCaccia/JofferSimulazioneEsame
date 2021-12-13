<template>
  <div class="flex  py-2 bg-purple-500 px-14">
    <div class="flex text-white justify-end">
      <button
      v-for="link in navLinks"
      :key="link.code"
      :class="{
        'text-decoration: border-2 border-black': link.code == currentRouteName,
      }"
      @click="goToLink(link)"
      class="mr-8 cursor-pointer px-3 my-4 rounded-full bg-yellow-300 p-2 text-black text-lg font-bold border-2 border-transparent"
    >
      {{ link.label }}
    </button>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      navLinks: [
        {
          label: "Lista",
          code: "offers_list"
        },
        {
          label: "Crea",
          code: "offers_create"
        },

      ]
    };
  },
  computed: {
    currentRouteName() {
      return this.$route.matched[0].name;
    }
  },
  methods: {
    goToLink(link) {
      this.$router.push({
        name: link.code
      });
    }
  }
};
</script>
