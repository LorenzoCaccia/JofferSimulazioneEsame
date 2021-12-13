<template>
    <div class="px-12 max-w-screen-md flex flex-col mx-auto">
        <div v-for="(offer, index) in offers" :key="index" @click="goToOfferDetail(offer)" class="flex p-1 items-center w-full bg-white m-2 mt-5">
            <div class="flex flex-col">
                <img :src="offer.img_language" :alt="offer.programming_language" class="flex">
            </div>
            <div class="flex flex-col">
                <div class="flex text-lg flex-grow">
                    {{ offer.company }}
                </div>
                <div class="flex text-lg flex-grow">
                    {{ offer.experience_required }}
                </div>
                <div class="flex text-lg flex-grow">
                    {{ offer.description }}
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
            offers: [],
        }
    },
    async mounted() {

        let response = await axios.get("http://localhost:8000/api/offers");
        this.offers = response.data;
    },
    methods: {
        goToOfferDetail(offer) {
        this.$router.push("/detail/" + offer.id);
        },
    }
}
</script>