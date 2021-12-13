<template>
    <div class="max-w-screen-md flex flex-col mx-auto">
        <div class="bg-white mt-5 p-2">
            <div class="flex justify-between">
                <div class="flex flex-col font-bold">
                    Offerta di lavoro presso:
                </div>            
                <div class="flex flex-col font-bold text-xl">
                    {{ offer.company }}
                </div>
                <div class="flex flex-col" @click="goBack()">
                    Indietro
                </div>
            </div>
            <div class="flex pt-5">
                <div class="flex flex-col">
                    <img :src="offer.img_language"  class="flex w-64">
                </div>
                <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex">
                        Stipendio: {{ offer.ral}}
                    </div>
                    <div class="flex">
                        Esperienza Richiesta: {{ offer.experience_required}}
                    </div>
                    <div class="flex">
                        Location: {{ offer.location }}
                    </div>
                    <div class="flex">
                        Location: {{ offer.description }}
                    </div>
                </div>
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