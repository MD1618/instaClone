<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {

        props:['user-id'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.user-id)
                .then(response => {
                    console.log(response.data);
                });
            }
        }
    }
</script>
