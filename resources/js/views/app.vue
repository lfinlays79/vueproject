<template>
    <div>
        <!--{{ message }} -->
        <p v-if="medicines.length === 0">
            You don't have any medicines
        </p>
        <p v-if="medicines.length > 0">
            <p v-for="medicine in medicines" :key="medicine.id">
            {{medicine.name}} <br />
            {{medicine.dosage}}
        </p>
    </div>
</template>

<script>
const default_layout = "default";

import axios from 'axios';

export default {
    //computed: {},
    data() {
        return {
            //message: 'Hello World'
            medicines:[]
        }
    },
    mounted() {
        this.getMedicines();
    },
    methods:{
        getMedicines(){
            axios.get('http://127.0.0.1:8000/api/medicine/')
            .then(response =>{
                this.medicines = response.data;
            });
        }
    }
    }
</script>