<template>
    <div class="bg-gray-100">
        <div class="container mx-auto flex items-center justify-center h-screen">
            <div class="w-1/3 rounded overflow-hidden shadow-xs bg-white">
                <h2 class="mx-6 my-5 font-bold text-lg text-center">Was möchtest du aufrufen?</h2>
                <ul class="px-6 pb-4">
                    <li class="my-4 shadow-xs rounded text-md text-gray-700 font-medium">
                        <inertia-link href="/forms/bug" class="flex">
                            <div class="px-6 py-4">
                                <BugOutlineIcon></BugOutlineIcon>
                            </div>
                            <div class="px-6 py-4 w-full">
                                Bug-Report senden
                            </div>
                        </inertia-link>
                    </li>
                    <li class="my-4 shadow-xs rounded text-md text-gray-700 font-medium">
                        <inertia-link href="/forms/beta-access" class="flex">
                            <div class="px-6 py-4">
                                <KeyOutlineIcon></KeyOutlineIcon>
                            </div>
                            <div class="px-6 py-4 w-full">
                                Betakey einlösen
                            </div>
                        </inertia-link>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</template>

<script>
    import BugOutlineIcon from 'vue-material-design-icons/BugOutline.vue';
    import KeyOutlineIcon from 'vue-material-design-icons/KeyOutline.vue';
    export default {
        components: {
            BugOutlineIcon,
            KeyOutlineIcon
        }
    }
</script>

<style scoped>
    li > a > div:first-child {
        border-color: rgba(0, 0, 0, 0.05);
        border-right-width: 1px;
    }
</style>
