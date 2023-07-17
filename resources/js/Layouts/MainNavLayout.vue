<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { useMainStore } from "@/Stores/main";
import { storeToRefs } from "pinia";

import SectionContainer from "@/Components/SectionContainer.vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";


const useMain = useMainStore();
const { isPostOverlay, isCropperModal, isImageDisplay } = storeToRefs(useMain);

// const user = usePage().props.auth.user;

</script>

<template>
    <SectionContainer>
        <div class="flex h-screen flex-col justify-between">
            <Header />

            <main class="mb-auto">
                <slot />
            </main>

            <Footer />

        </div>
    </SectionContainer>
</template>
