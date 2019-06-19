require('./bootstrap');

//Función de Eliminar Usuario
(function () {
    var DeleteUser = {
        init: function () {
            this.addEvents();
        },

        addEvents: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('.btnDeleteUser')) {
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

    DeleteUser.init();
})();
//Termino función de eliminar usuario.

//Comienzo de función de eliminar Productos

//Termino función de eliminar Productos

//Comienzo de función Modificar Productos

(function () {
    var ModificarProducto = {
        init: function () {
            this.addEvents();
        },

        addEvents: function () {
            document.addEventListener('click', function (event) {
            
                let target = event.target;
                if (target.matches('.buttonProductosModificar')) {

                    var idProductoModificar = target.getAttribute('productoinfoid');
                    var txtInpDetalleProducto= this.cacheElements.$inpName.val();
                    $.ajax({
                        url: '/updateProducto',
                        method: "POST",
                        data: {
                            id: idProductoModificar, 
                            text: txtInpDetalleProducto
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

        cacheElements:{
            $inpName:$('.productoUpdate')
        }

    }

    ModificarProducto.init();
})();

//Termino de función Modificar Productos