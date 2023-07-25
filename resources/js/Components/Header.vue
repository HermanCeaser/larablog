<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import MobileNav from "@/Components/MobileNav.vue";
import navLinks from "@/navLinks";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import WeatherNight from "vue-material-design-icons/WeatherNight.vue";
import LightbulbOnOutline from "vue-material-design-icons/LightbulbOnOutline.vue";

import { useDark, useToggle } from "@vueuse/core";


const isDark = useDark();
const toggleDark = useToggle(isDark);

const lang = ref('en')

</script>

<template>
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

            <!-- Language switch-->
            <select v-model="lang" id="switchLang"
                class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="en">English</option>
                <option value="nl">Dutch</option>
                <option value="de">Germany</option>
            </select>
            <!-- End Language Switch-->




            <!-- Mobile Nav Menu  -->
            <MobileNav />
            <!-- End obile Nav Menu  -->
        </div>
    </header>
</template>
