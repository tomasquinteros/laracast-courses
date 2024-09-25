export default {
    template: `
            <button :class="{
                'rounded-md px-5 py-2': true,
                'bg-blue-200 hover:bg-blue-400': type === 'primary',
                'bg-purple-200 hover:bg-purple-400': type === 'secondary',
                'bg-gray-200 hover:bg-gray-400' : type === 'muted' ,
                'is-loading disabled:cursor-not-allowed' : processing,
            }"
            :disabled="processing">
                <slot/>
            </button>
        
    `,
    props: {
        type : {
            type: String,
            default: 'muted',
        },
        processing: {
            type: Boolean,
            default: false
        }
    },
}