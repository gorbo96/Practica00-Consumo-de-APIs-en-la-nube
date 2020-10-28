var informacion;
const limite=5;
var pagina=0;
function buscarPorFabricante() {    
    console.log("inicio");
    var fabricante = document.getElementById("fabricante").value;
    if (fabricante == "") {
         document.getElementById("informacion").innerHTML = ""; 
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest(); 
        } else { 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {                
                informacion=JSON.parse(this.responseText);                
                var detalles="<table> <tr> <th>ID</th> <th>Nombre</th> <th>Fabricante</th> </tr>";
                for(var i=0;i<5;i++) {
                    detalles+="<tr>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_ID"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_Name"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Mfr_Name"]+"</td>"+
                    "</tr>";
                }
                detalles+="</table>"
                document.getElementById("informacion").innerHTML = detalles;
            }
        };        
        xmlhttp.open("GET","https://vpic.nhtsa.dot.gov/api/vehicles/GetMakeForManufacturer/"+fabricante+"?format=json",true);
        xmlhttp.send();
    }
    return false;
}
function anterior(){
    var fabricante = document.getElementById("fabricante").value;
    var total=informacion["Count"];
    if (fabricante == "") {
         document.getElementById("informacion").innerHTML = "Busqueda Invalida"; 
    } else {
        if(pagina==0) {
            pagina=0;
        }
        else {
            pagina-=1;
        }
        var detalles="<table> <tr> <th>ID</th> <th>Nombre</th> <th>Fabricante</th> </tr>";
                for(var i=pagina*limite;i<((pagina+1)*limite);i++) {
                    if(i<total) {
                        detalles+="<tr>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_ID"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_Name"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Mfr_Name"]+"</td>"+
                    "</tr>";
                    }                    
                }
                detalles+="</table>"
                document.getElementById("informacion").innerHTML = detalles;
    }

}
function posterior(){
    var fabricante = document.getElementById("fabricante").value;
    var total=informacion["Count"];
    if (fabricante == "") {
         document.getElementById("informacion").innerHTML = "Busqueda Invalida"; 
    } else {
        if((total%limite)==0 && pagina<Math.floor(total/limite)-1) {
            pagina+=1;
        }
        else {
            if((total%limite)!=0 && pagina<Math.floor(total/limite)) {
                pagina+=1;
            }
        }
        var detalles="<table> <tr> <th>ID</th> <th>Nombre</th> <th>Fabricante</th> </tr>";
                for(var i=pagina*limite;i<((pagina+1)*limite);i++) {
                    if(i<total) {
                        detalles+="<tr>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_ID"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Make_Name"]+"</td>"+
                    "<td  align=center>"+informacion["Results"][i]["Mfr_Name"]+"</td>"+
                    "</tr>";
                    }                    
                }
                detalles+="</table>"
                document.getElementById("informacion").innerHTML = detalles;
    }

}