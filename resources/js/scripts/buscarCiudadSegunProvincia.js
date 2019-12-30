 function buscarCiudadSegunProvincia(){

        var provinciaId = $("#provincia2").val();
        

            $.ajax({
                headers:{
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{provinciaId:provinciaId},
            url:'/buscarCiudadSegunProvincia',
            type:'post',
            dataType:"json",
            success:function(data){
                $("#localidad2").empty();
                $("#localidad2").append('<option value="null">Seleccione una ciudad</option>');
                    for(var i in data) {    
                            
                            $("#localidad2").append("<option value="+data[i].id+"> "+
                                data[i].ciudad_nombre+"</option>");             
                        }

        





            }
            });

    }