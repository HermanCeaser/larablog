<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({links: Array})
</script>

<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap justify-end mt-2 -mb-1">
            <template v-for="link in links">
                <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                    v-html="link.label" />
                <Link v-else
                    class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-gray-900 hover:text-white hover:dark:bg-white hover:dark:text-gray-900 focus:border-gray-500 focus:text-gray-500"
                    :class="{ 'bg-gray-800 text-gray-200 dark:bg-gray-200 dark:text-gray-800': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>
