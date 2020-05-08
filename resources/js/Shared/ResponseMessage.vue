<template>
    <div v-if="$page.flash.success || $page.errors" class="row">
        <div class="mb-4">

            <div v-if="$page.flash.success" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Erfolgreich!</strong>
                <span class="block sm:inline">{{ $page.flash.success }}</span>
            </div>

            <div v-if="$page.errors" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Fehler!</strong>
                <span class="block sm:inline">Bitte überprüfe deine Eingaben:</span>
                <ul class="list-disc mt-1 pl-8">
                    <template v-for="messages in $page.errors">
                        <li v-for="message in messages">{{ message }}</li>
                    </template>
                </ul>
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

<style scoped>
</style>
