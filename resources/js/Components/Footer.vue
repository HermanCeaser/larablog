<script setup>
import { Link } from "@inertiajs/vue3";
import EmailOutline from "vue-material-design-icons/EmailOutline.vue";
import Github from "vue-material-design-icons/Github.vue";
import Linkedin from "vue-material-design-icons/Linkedin.vue";
import Twitter from "vue-material-design-icons/Twitter.vue";
import siteMetadata from '@/Data/siteMetadata'

const size = 6;
</script>

<template>
    <footer>
        <div class="mt-16 flex flex-col items-center">
            <div class="mb-3 flex space-x-4">
                <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                    rel="noopener noreferrer" :href="`mailto:${siteMetadata.email}`">
                    <span class="sr-only">Email</span>
                    <email-outline
                        class="fill-current text-gray-700 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400"
                        :class="`h-${size} w-${size}`" />
                </a>
                <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                    rel="noopener noreferrer" :href="siteMetadata.github">
                    <span class="sr-only">Github</span>
                    <Github
                        class="fill-current text-gray-700 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400"
                        :class="`h-${size} w-${size}`" />
                </a>

                <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                    rel="noopener noreferrer" :href="siteMetadata.linkedin">
                    <span class="sr-only">LinkedIn</span>
                    <Linkedin
                        class="fill-current text-gray-700 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400"
                        :class="`h-${size} w-${size}`"/>
                </a>
                <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                    rel="noopener noreferrer" :href="siteMetadata.twitter">
                    <span class="sr-only">Twitter</span>
                    <Twitter
                        class="fill-current text-gray-700 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400"
                        :class="`h-${size} w-${size}`"/>
                </a>
            </div>
            <div class="mb-2 flex space-x-2 text-sm text-gray-500 dark:text-gray-400">
                <div>{{siteMetadata.author}}</div>
                <div>{{` • `}}</div>
                <div>{{`© ${new Date().getFullYear()}`}}</div>
                <div>{{` • `}}</div>
                <Link href="/">{{siteMetadata.title}}</Link>
            </div>
            <div class="mb-8 text-sm text-gray-500 dark:text-gray-400">
                <Link :href="siteMetadata.siteRepo">
                LaraBlog - Built with Love using Laravel, Vue.Js and Tailwind CSS
                </Link>
            </div>
        </div>
    </footer>
</template>
