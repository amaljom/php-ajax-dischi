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
                console.log(this.discs)
            });
        },
    },

    created(){
        this.getCards();
    }
  


})