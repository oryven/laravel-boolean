<template>
    <div>
       <div v-for="postcard, i in postcards" :key="i">
            <span>Mittente: {{postcard.sender}}</span>
            <span>Indirizzo: {{postcard.address}}</span>
            <span>Corpo del testo: {{postcard.text}}</span>
            <img v-if="postcard.image" :src="'/storage/images/' + postcard.image">
            <p v-else>No image</p>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                postcards: []
            }
        },
        mounted() {
            axios.get('/api/postcard/list')
                 .then(r => this.postcards = r.data)
                 .catch(e => console.error(e));
        }
    }
</script>
