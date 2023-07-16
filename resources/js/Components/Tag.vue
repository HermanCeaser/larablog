<script setup>
import { Link } from '@/inertiajs/vue3'

const text = defineProps(['text'])

</script>

<template>
    <Link href="/">
                <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                    {{  text.split(' ').join('-') }}
                </a>
            </Link>
</template>
