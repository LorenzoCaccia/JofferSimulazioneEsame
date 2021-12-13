<template>
    <div class="max-w-screen-md flex flex-col mx-auto">
        <div class="flex">
            <div class="flex flex-col text-bold">
                Offerta di lavoro presso:
            </div>            
            <div class="flex flex-col text-bold">
                {{ offer.company }}
            </div>
            <div class="flex flex-col" @click="goBack()">
                Indietro
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return{
            offer: null
        }
    },
    async mounted() {
        let offerId = this.$route.params.id;
        let response = await axios.get("http://localhost:8000/api/offers/" + offerId);
        this.offer = response.data;
        this.isLoading = false;
    },
    methods: {
    goBack(){
      this.$router.back();
    }
    }
}
</script>