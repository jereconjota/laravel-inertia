<template>
<div class="container">
    <h1>Home</h1>
    <ul v-for="art in articles" :key="art.id" >
        <li v-text="art.title"></li>
        <inertia-link :href="art.destroy_link" method="delete" class="btn btn-danger">Delete</inertia-link>
    </ul>
</div>
</template>

<script>
export default {
    props: ['articles'],
    created(){
        console.log(this.articles)
    }
}
</script>