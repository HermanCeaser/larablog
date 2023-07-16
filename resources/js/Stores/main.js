import { defineStore } from "pinia";
export const useMainStore = defineStore('main', {
    state: () => ({
        isBlogOverlay: false,
        isCropperModal: false,
        isImageDisplay: null,
    }),
    persist: true,
})
