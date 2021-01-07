<template>
    <div class="container">
        <h2>Create Article</h2>
        <form @submit.prevent="submit">
            <input v-model="form.title" type="text" class="form-control">
            <textarea v-model="form.body" class="form-control"></textarea>
            <button class="btn" type="submit">Crear</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return{
            form: {
                title: "",
                body: ""
            }
        }
    },
    methods: {
        submit(){
            this.$inertia.post('/articles/create', {
                title: this.form.title,
                body: this.form.body,
            })
        }
    }
}
</script>