export default {
    'template' : `
        <div :class="{
            'h-full border rounded-sm p-4 m-4 max-w-full' : true,
            'border-gray-500 bg-gray-600 text-white' : this.theme === 'dark',
            'border-gray-200 bg-white text-black' : this.theme === 'light'
        }">
            <h2 v-if="$slots.heading" class="text-bold text-xl">
                <slot name="heading" />
            </h2>
            <slot name="default" />
            <footer v-if="$slots.footer" class="border-t-2 border-gray-500">
                <slot name="footer" />  
            </footer>
        </div>
    `,
    'props' : {
        'theme' : {
            "type" : String,
            "default" : "dark"
        }
    }
}