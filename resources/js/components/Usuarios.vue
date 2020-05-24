<template>
    <div id="app">
        <h4>Salida</h4>
        <Usuarios mensaje="Salida"></Usuarios>
        <label>
            <input v-model="mensaje" placeholder="Mensaje">

        </label>
        <p>Aquí: {{mensaje}}</p>
    </div>
</template>

<script>
    export default {
        name: "Usuarios.vue",
        props: {
            mensaje: String
        },
        mounted() {
            console.log('Salida')
        }
    }
</script>

<style scoped>

</style>
