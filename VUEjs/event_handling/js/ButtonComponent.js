export default {
    template : `
        <div>
            <button 
                :class="{
                    'rounded px-5 py-2' : true,
                    'bg-blue-600 hover:bg-blue-700 text-white' : this.typeColor === 'primary',
                    'bg-purple-600 hover:bg-purple-700 text-white' : this.typeColor === 'secondary',
                    'bg-gray-600 hover:bg-gray-700 disable:cursor-not-allowed' : this.typeColor === 'disabled',
                    'isLoading' : this.isLoading,
                    
                }"
            >
                <slot/>
            </button>
        </div>  
    `,
    props : {
        typeColor : {
            type : String,
            default : 'primary'
        },
        isLoading : {
            type : Boolean,
            default: false
        }
    }
};