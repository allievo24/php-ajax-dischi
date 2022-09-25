var app = new Vue({
    
    el: '#app',
    
    data: {
      
      dischi:[]
    
    },
    created(){
      axios.get('http://localhost/php-ajax-dischi/client/server.php')
      .then(response =>{
        this.dischi = response.data;
        console.log(response.data);
      });
    }
    




  })