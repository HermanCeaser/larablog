<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import SectionContainer from "@/Components/SectionContainer.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import WeatherNight from "vue-material-design-icons/WeatherNight.vue";
import LightbulbOnOutline from "vue-material-design-icons/LightbulbOnOutline.vue";

import { useMainStore } from "@/Stores/main";
import { storeToRefs } from "pinia";
import { useDark, useToggle } from "@vueuse/core";
import MobileNav from "@/Components/MobileNav.vue";
import navLinks from "@/navLinks";

const isDark = useDark();
const toggleDark = useToggle(isDark);

const useMain = useMainStore();
const { isPostOverlay, isCropperModal, isImageDisplay } = storeToRefs(useMain);

const user = usePage().props.auth.user;

</script>

<template>
    <SectionContainer>
        <div class="flex flex-col justify-between">
            <header id="mainNav" class="flex items-center justify-between py-10">
                <!-- Application Logo  -->
                <Link href="/">
                <div class="flex items-center justify-between">
                    <div class="mr-3">
                        <ApplicationLogo :fillColor="isDark ? '#FFFFF4' : 'currentColor'" height="24" width="24" />
                    </div>
                    <div class="hidden h-6 text-2xl font-semibold sm:block">
                        Logo
                    </div>
                </div>
                </Link>
                <!-- End Application Logo  -->
                <div className="flex items-center text-base leading-5">
                    <!-- Main Navigation Menu -->
                    <div v-for="link in navLinks" :key="link.title" className="hidden sm:block">
                        <Link :href="link.href" class="p-1 font-medium text-gray-600 dark:text-gray-100 sm:p-4">
                        {{ link.title }}
                        </Link>

                    </div>
                    <!-- End Main Navigation Menu  -->

                    <!-- Theme Switcher -->
                    <div id="switchTheme">
                        <button @click="toggleDark()" v-if="isDark"
                            class="rounded-full bg-gray-100 p-2 hover:bg-gray-300 dark:hover:bg-white:300 dark:hover:text-gray-900 mx-1 cursor-pointer">
                            <weather-night :size="24" fillColor="#050505" />
                        </button>
                        <button @click="toggleDark()" v-else="isDark"
                            class="rounded-full bg-[#E3E4EA] p-2 hover:bg-gray-300 mx-1 cursor-pointer">
                            <lightbulb-on-outline :size="24" fillColor="currentColor" />
                        </button>
                    </div>
                    <!-- End theme switcher🐱 -->

                    <!-- Mobile Nav Menu  -->
                    <MobileNav />
                    <!-- End obile Nav Menu  -->
                </div>
            </header>

            <main class="mb-auto">
                <slot />
            </main>
        </div>
    </SectionContainer>
</template>
