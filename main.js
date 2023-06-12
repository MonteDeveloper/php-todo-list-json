const { createApp } = Vue;

createApp({
    data(){
        return{
            var1: 'Test'
        }
    },
    mounted(){
        console.log(this.var1);
    }
}).mount('#app');