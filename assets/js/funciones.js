function salir(){
      var respuesta=confirm("¿Desea salir del sistema?");
      if(respuesta==true)
        window.location="../../Usuarios/logout"; /* Obligamos a que vaya a la raiz del sitio y luego al controlador Usuario funcion logout*/
      else
        return 0;
}

function eliminarUsuario(id){
      var respuesta=confirm("¿Realmente desea eliminar este Usuario?");
      if(respuesta==true)
        window.location="eliminarUsuario/"+id;
      else
      	return 0;      
}

function eliminarNivel(id){
      var respuesta=confirm("¿Realmente desea eliminar este Nivel?");
      if(respuesta==true)
        window.location="eliminarNivel/"+id;
      else
        return 0;      
}

function eliminarAlumno(id){
      var respuesta=confirm("¿Realmente desea eliminar este Alumno?");
      if(respuesta==true)
        window.location="../../alumnos/eliminarAlumno/"+id;
      else
        return 0;      
}

function actualizarEstado(id){
      var respuesta=confirm("¿Realmente desea cambiar el estado de este alumno?");
      if(respuesta==true)
        window.location="actualizarEstado/"+id;
      else
        return 0;      
}

function imprSelec(ficha){
  var ficha=document.getElementById(ficha);
  var ventimp=window.open(' ','popimpr');
  ventimp.document.write(ficha.innerHTML);
  ventimp.document.close();
  ventimp.print();
  ventimp.close();
}