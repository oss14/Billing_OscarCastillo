require('./bootstrap');
 
//Función de Eliminar Usuario
(function () {
    var DeleteUser = {
        init1: function () {
            this.addEvents();
        },

        addEvents: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('#btnDeleteUser')) {
                    var idUserDelete = target.getAttribute('dataUsuarioId');
                    $.ajax({
                        url: '/deleteUser',
                        method: "POST",
                        data: {
                         
                            id: idUserDelete,
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {
                                alert('Se dio un problema en la solicitud de eliminación de usuario');
                            }
                        }
                    });
                }
            });
        }
    }

    DeleteUser.init1();
})();
//Termino función de eliminar Usuario.

//Comienzo de funcion de Modificar Usuario
(function () {
    var ModificarUsuario = {
        init2: function () {
            this.addEvents2();
        },

        addEvents2: function () {
            document.addEventListener('click', function (event) {
            
                let target = event.target;
                if (target.matches('#btnUpdateUser')){

                    var idUsuarioModificar = target.getAttribute('dataUsuarioId');
                    var txtNameUser = this.cacheElementsUsuariosUpdate.$inpNameUsuario.val();
                    var txtEmailUser = this.cacheElementsUsuariosUpdate.$inpEmail.val();


                    $.ajax({
                        url: '/updateUsuario', 
                        method: "POST",
                        data: {
                          
                            id: idUsuarioModificar, 
                            txtNombreUsuario: txtNameUser,
                            txtEmailUsuario: txtEmailUser
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {  
                                alert('Se dio un problema en la solicitud de eliminación de usuario');
                            }
                        }
                    });
                }
            }.bind(this));
        },

        cacheElementsUsuariosUpdate:{
            $inpNameUsuario:$('#usuarioUpdateName'),
            $inpEmail:$('#usuarioUpdateEmail'),
        }

    }

    ModificarUsuario.init2();
})();
//Termino función de modificar Usuarios

//Comienzo de función de eliminar Productos
(function () {
    var DeleteProduct = {
        init3: function () {
            this.addEvents3();
        },

        addEvents3: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('#buttonProductoEliminar')) {
                    var idProductDelete = target.getAttribute('productoInfoIdEliminar');
                    $.ajax({
                        url: '/deleteProducto',
                        method: "POST",
                        data: {
                           
                            id: idProductDelete,
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {
                                alert('Se dio un problema en la solicitud de eliminación de usuario');
                            }
                        }
                    });
                }
            });
        }
    }

    DeleteProduct.init3();
})();

//Termino función de eliminar Productos

//Comienzo de función Modificar Productos

(function () {
    var ModificarProducto = {
        init4: function () {
            this.addEvents4();
        },

        addEvents4: function () {
            document.addEventListener('click', function (event) {
            
                let target = event.target;
                if (target.matches('#buttonProductosModificar')) {

                    var idProductoModificar = target.getAttribute('productoInfoIdUpdate');
                    var txtInpDetalleProducto= this.cacheElementsProductosUpdate.$inpName.val();
                    $.ajax({
                        url: '/updateProducto',
                        method: "POST",
                        data: {
                            
                            id: idProductoModificar, 
                            text:  txtInpDetalleProducto
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {
                                alert('Se dio un problema en la solicitud de modificacion del producto');
                            }
                        }
                    });
                }
            }.bind(this));
        },

        cacheElementsProductosUpdate:{
            $inpName:$('#productoUpdate')
        }

    }

    ModificarProducto.init4();
})();

//Termino de función Modificar Productos

//Comienzo de la funcion de Eliminar Facturas
(function(){
    var EliminarFactura={
        init5: function(){
            this.addEvents5();
        },

        addEvents5:function(){
            document.addEventListener('click', function(event){
                let target = event.target;
                if(target.matches('#buttonFacturasEliminar')){
                    var idFacturaDelete = target.getAttribute('facturaEliminarId');
                    $.ajax({
                        url:'/deleteFactura',
                        method: "POST",
                        data: {
                            IdFacturaUpdate: idFacturaDelete,
                        },
                    success:function(response){
                        if(response === '200'){
                            location.reload();
                        } else{
                            alert('No se pudo ejecutar Eliminar Factura');
                        }
                    }
                    });
                }
            });
        }
    }
    EliminarFactura.init5();
}());
//Termino función de Eliminar Factura

//Comienzo de función Modificar Factura
(function(){
    var ModificarFactura={
        init6:function(){
            this.addEvents6();
        },

        addEvents6 : function(){
            document.addEventListener('click', function(event){
                let target = event.target;
                if(target.matches('#buttonFacturasModificar')){
                    var idFacturaUpdate = target.getAttribute('facturaModificarId');
                    var txtDetalleFacturaUpdate = this.cacheElementsFacturasUpdate.$inpFacturaDetalleUpdate.val();
                    $.ajax({
                        url: '/updateFactura',
                        method: 'POST',
                        data:{
                            IdFacturaUpdate : idFacturaUpdate,
                            DetalleFacturaUpdate: txtDetalleFacturaUpdate,
                        },
                        success:function(response){
                            console.log('response',response);
                            if(response === '200'){
                                location.reload();
                            }else{
                                alert('Se dio un error y no se pudo realizar la actualización');
                            }
                        }
                    });
                }
            }.bind(this));
        },
        
        cacheElementsFacturasUpdate:{
            $inpFacturaDetalleUpdate:$('#facturaUpdateDetalle'),
        }
    }

    ModificarFactura.init6();
}());
//Termino funcion de modificar factura