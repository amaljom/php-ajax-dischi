var app = new Vue({
    el: '#app',
    data: {
      discs:[],
      key:'Pop',
      newDisc:[]
      

    },
    methods: {
        getCards(){
            axios.get('http://localhost:81/php-ajax-dischi/controller.php')
            .then((result)=>{
                this.discs = result.data;
            });
        },

        onChange(e) {
            axios.get('http://localhost:81/php-ajax-dischi/controller.php')
            .then((result)=>{
                this.newDisc = result.data.filter((res)=>res.genre===this.key);
                console.log(this.newDisc);
            });
        }
    },

    created(){
        this.getCards();
    }
  


})