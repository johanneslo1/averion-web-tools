<template>
    <div class="bg-gray-100">
        <div class="container mx-auto flex items-center justify-center h-screen">
            <div class="max-w-md rounded overflow-hidden shadow-xs bg-white">
                <div class="px-6 py-4 divide-y divide-gray-100">
                    <div class="flex justify-around">
                        <img class="w-1/3"
                             src="/img/logo.png"
                             alt="AverionMC Logo">
                        <div class="my-auto">
                            <div class="font-bold text-lg mb-2">
                                AverionMC Bug-Report
                            </div>
                            <p class="text-gray-700 text-base">Ist dir ein Bug aufgefallen?<br>Teil ihn uns gerne mit!</p>
                        </div>
                    </div>
                    <form @submit.prevent="submit" class="pt-4">
                            <ResponseMessage></ResponseMessage>
                        <div class="mb-4">
                            <label class="form-label" for="name">
                                Dein Name
                            </label>
                            <input v-model="form.name"
                                class="form-control"
                                id="name" type="text" autocomplete="off" placeholder="Dein Name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="message">
                                Beschreibung des Bugs
                            </label>
                            <textarea v-model="form.message"
                                class="form-control"
                                rows="5" id="message" type="text" autocomplete="off"
                                placeholder="Beschreibe kurz den aufgetretenen Fehler">

                            </textarea>
                        </div>
                      <div class="text-right">
                          <button
                              :class="`btn-submit ${isLoading ? `opacity-50 cursor-not-allowed` : ''}`"
                              :disabled="isLoading"
                              type="submit">
                              {{ isLoading ? 'Lädt...' : 'Absenden' }}
                          </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>


    import ResponseMessage from "../../Shared/ResponseMessage";

    export default {
        components: {
            ResponseMessage
        },
        data() {
            return {
                form: {
                    name: '',
                    message: '',
                },
                isLoading: false,
            }
        },
        methods: {
            submit() {
                this.isLoading = true;
                this.$inertia.post('', this.form).then(() => this.isLoading = false);
            }
        },
    }
</script>

<style scoped>

</style>
