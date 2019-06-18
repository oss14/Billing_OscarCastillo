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