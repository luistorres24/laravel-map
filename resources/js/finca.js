const { default: Axios } = require('axios');

window.Vue = require('vue');
const app = new Vue({

    el: '#finca',
    data:{
      fincas:[],
        finca:{nombre:'',municipio:'',departamento:''},

    }, created(){
        this.traerUsarios();
    },

    methods:
        {



            traerUsarios(){
                Axios.get('/usuarios')
                    .then((res) =>{
                        this.usuarios = res.data;
                    })
            },
            verFinca(usuario){
                /*console.log(usuario);*/
                window.location.href =`/page?direccion=`+usuario.direccion  ;

                /* Axios.get('/page')
                 .then((res) =>{

                 })*/
            },
            agregarFinca(){
                const fincaNuevo = this.finca;
                this.finca = {nombre:'',municipio:'',departamento:''};
                Axios.post('/enviarfinca', fincaNuevo)
                    .then((res) =>{
                        const fincaServidor = res.data;
                        this.fincas.push(fincaServidor);

                    })
            }


        }

});
