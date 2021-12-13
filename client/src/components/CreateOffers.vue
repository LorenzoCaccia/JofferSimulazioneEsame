<template>
    <div class="px-12 max-w-screen-md flex flex-col mx-auto">
        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="programming_language" class="w-full">Linguaggio di programmzaione richiesto</label>
            <select v-model="offer.programming_language" class="w-72 p-2">
                <option value="php">PHP</option>
                <option value="java">Java</option>
                <option value="python">Python</option>
                <option value="c">C</option>
            </select>
        </div>
        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="company" class="w-full">Azienda</label>
            <input type="text" v-model="offer.company" placeholder="Inserisci azienda" class="w-64 p-2">
        </div>

        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="ral" class="w-full">Stipendio annuale</label>
            <input type="text" v-model="offer.ral" placeholder="Inserisci azienda" class="w-64 p-2">
        </div>

        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="experience_required" class="w-full">Esperienza richiesta</label>
            <select  v-model="offer.experience_required" class="w-72 p-2">
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>
            </select>
        </div>

        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="location" class="w-full">Location</label>
            <select  v-model="offer.location" class="w-72 p-2">
                <option value="remote">Remota</option>
                <option value="office">Ufficio</option>
            </select>
        </div>

        <div class="flex mt-5 items-center text-lg w-full mx-auto">
            <label for="description" class="w-full">Descrizione</label>
            <textarea placeholder="Inserisci descrizione" v-model="offer.description" class="w-72 p-2">
            </textarea>
        </div>

        <div class="flex mt-3 items-center justify-center w-full">
            <button @click="saveOffer()" class="flex items-center justift-center bg-yellow-200 font-bold p-3 rounded-full">
                Salva
            </button>
        </div>

    </div>

</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            offer:{
                programming_language: "",
                img_language: "",
                company: "",
                ral: "",
                experience_required: "",
                location: "",
                description: "",
            }
        }
    },

    methods: {


        async saveOffer() {
            let response;

            if (this.offer.programming_language == 'php'){
                this.offer.img_language = "https://www.svgrepo.com/show/303208/php-1-logo.svg"
            }if (this.offer.programming_language == 'java') {
                this.offer.img_language = "https://thumbs.dreamstime.com/b/java-logo-vector-design-commercial-brand-trademark-118452997.jpg"
            }if(this.offer.programming_language =='python') {
                this.offer.img_language = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png"
            }if(this.offer.programming_language =='c') {
                this.offer.img_language = "https://e7.pngegg.com/pngimages/465/779/png-clipart-blue-and-white-c-logo-the-c-programming-language-computer-programming-computer-icons-programmer-blue-angle.png"
            }
            response = await axios.post("http://localhost:8000/api/offers/create", this.offer);

            console.log(response.data);

            this.$router.push("/list");
        }
    }
  
}
</script>