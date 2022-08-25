var app = new Vue({
    el: '#app',
    data: {
      discs:[]
    },
    methods: {
        getCards(){
            axios.get('http://localhost:81/php-ajax-dischi/controller.php')
            .then((result)=>{
                this.discs = result.data;
            });
        },

        onChange() {
            console.log(1);
        }
    },

    created(){
        this.getCards();
    }
  


})