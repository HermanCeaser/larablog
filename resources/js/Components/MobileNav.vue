<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3"
import Menu from "vue-material-design-icons/Menu.vue";
import Close from "vue-material-design-icons/Close.vue";
import navLinks from "@/navLinks";


const showMenu = ref(false);

function toggleNav() {
    if (showMenu.value) {
        document.body.style.overflow = "auto";
    } else {
        document.body.style.overflow = "hidden";
    }

    showMenu.value = !showMenu.value;
}
</script>

<template>
    <div class="sm:hidden">
        <button @click="toggleNav" class="mx-1 h-8 w-8 rounded py-1" aria-label="Toggle Menu">
            <Menu fillColor="currentColor" :size="24" />
        </button>
        <div :class="showMenu ? 'translate-x-0' : 'translate-x-full'"
            class="fixed top-0 left-0 z-15 h-full w-full transform bg-gray-200 opacity-95 duration-300 ease-in-out dark:bg-gray-800">
            <div class="flex justify-end">
                <button @click="toggleNav" class="mx-2 h-8 w-8 rounded py-2" aria-label="Toggle Menu">
                    <close fillColor="currentColor" :size="24" />
                </button>
            </div>
            <nav class="fixed mt-8 h-full">

                <div v-for="link in navLinks" :key="link.title" class="px-12 py-4">
                    <Link :href="link.href" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                        @Click="toggleNav">
                    {{ link.title }}
                    </Link>
                </div>

            </nav>
        </div>
    </div>
</template>
