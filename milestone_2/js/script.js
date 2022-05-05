console.log('JS OK');

const app = new Vue({
    el: '#app',
    data(){
        return {
            dischi: [],
            test: 'prova'
        }
    },
    mounted(){
        axios.get('http://localhost/php-ajax-dischi/data.php').then((response)=>{
            console.log(response);
            if(response.status ===200) {
                this.dischi = response.data;
            }
        }).catch(error => console.log(error));
        
    }
})


