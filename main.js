const app = Vue.createApp({
    data(){
        return {
            titulo: 'Tarjeta de regalo tectropolis',
            cantidad: 0,
            enlace: 'https://www.youtube.com/watch?v=vIBFoID-ask',
            estado: true,
            // PARA ARREGLOS: servicios: ['ejemplo','ejemplo','ejemplo', 'ejemplo', 'ejemplo'],
            desactivar: false,
        }
    },
    methods: {
        
        
     
    


        agregarSaldo(){
            
            this.cantidad = this.cantidad + 200
        
        },
        agregarSaldo2(){
           
            this.cantidad = this.cantidad + 500
        },
        agregarSaldo3(){
            
            this.cantidad = this.cantidad + 1000
        },
        disminuirSaldo(){
            
            if (this.cantidad <= 400){
                alert('cantidad minima: $400')
                this.desactivar = true
                return
            }
            this.cantidad = this.cantidad - 100
            
            
 
        }
       
        
    }
    ,
    computed: {
        colorCantidad(){
            return this.cantidad >= 400 ? 'text-success' : 'text-danger'
        }
    }
})