<div 
    x-data="{ show: false }" 
    x-show="show" 
    @scroll.window="show = (window.pageYOffset > 200)" 
    class="fixed bottom-4 right-4 z-100"
>
    <button 
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
        class="bg-blue-600 border text-white rounded-full p-3 shadow-lg hover:bg-blue-700 transition-all duration-500 hover:scale-105 "
        title="Back to top"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>
