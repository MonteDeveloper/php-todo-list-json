const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: undefined
        }
    },
    mounted() {
        axios.get('api.php')
            .then(response => {
                this.toDoList = response.data;
                console.log(this.toDoList);
            })
            .catch(error => {
                console.log(error);
            });
    }
}).mount('#app');
