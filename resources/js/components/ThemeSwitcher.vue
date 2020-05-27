<template>
    <div class="flex justify-end items-center mr-8">
        <button class="rounded-full w-6 h-6 border-2 mr-4 focus:outline-none" @click="selectedTheme = 'theme-light'"
                :class="{ 'border-8 border-blue-200': selectedTheme == 'theme-light' }"></button>
        <button class="rounded-full w-6 h-6 bg-black border-2 focus:outline-none" @click="selectedTheme = 'theme-dark'"
                :class="{ 'border-8 border-blue-200': selectedTheme == 'theme-dark' }"></button>
    </div>
</template>

<script>
    export default {
            data() {
                return {
                    selectedTheme: 'theme-light'
                };
            },

            created() {
                this.selectedTheme = localStorage.getItem('theme') || 'theme-dark';
            },

            watch: {
                selectedTheme() {
                    document.body.className = document.body.className.replace(/theme-\w+/, this.selectedTheme);

                    localStorage.setItem('theme', this.selectedTheme);
                }
            }
    }
</script>
