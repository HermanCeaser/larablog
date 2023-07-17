<script setup>
import MainNavLayout from '@/Layouts/MainNavLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
// import Tag from '@/Components/Tag.vue'

defineProps({blogs: Object});


</script>

<template>
    <Head title="Blogs" />
    <MainNavLayout>
        <div class="divide-y divide-gray-200 dark:divide-gray-700">
            <div class="space-y-2 pt-6 pb-8 md:space-y-5">
                <h1
                    class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                    Latest
                </h1>
                <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
                    All the Latest Blogs
                </p>
            </div>
            <ul>
                <li v-for="blog in blogs.data" class="py-12">
                    <article>
                        <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2023-08-07">August 7, 2023</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                            <Link href="/" class="text-gray-900 dark:text-gray-100">
                                            {{ blog.title}}
                                            </Link>
                                        </h2>
                                        <div class="flex flex-wrap">
                                            <!-- <span v-for="tag in tags" > -->
                                            <!-- <Tag text="Next JS" /> -->
                                            <Link href="/">
                                            <a
                                                class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                                {{ "Next Js Tailwind".split(' ').join('-') }}
                                            </a>
                                            </Link>
                                            <!-- </span> -->
                                        </div>
                                    </div>
                                    <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                                        An overview of the new features released in v1 - code block copy, multiple authors,
                                        frontmatter layout and more
                                    </div>
                                </div>
                                <div class="text-base font-medium leading-6">
                                    <Link href="/"
                                        class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                    Read more &rarr;
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
            <Pagination :links="blogs.links" />
        </div>
    </MainNavLayout>
</template>
