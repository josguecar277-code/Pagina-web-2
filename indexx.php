<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Estilo 11</title>
</head>
<body>

    <div class="indice">

    <div class="logo">
         Pepito Perez  
</div>

    <div class="enlaces">
        <a href="">Inicio</a>
        <a href="">¿Quién soy?</a>
        <a href="">Proyectos</a>
    </div>
    

    <!-- SECCION 1 -->


    <div class="Principal">

    <div class="imagen">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpYdmfI2BNFXyTwj5dbzL1x7DD1baUMBbIUQ&s">
    </div>

    <div class="texto">
    <h1> ¿Quién Soy? </h1>
    <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam illo minima nemo, quia nisi quod cupiditate, quasi corporis aperiam qui aliquid excepturi! Vero, dignissimos. Hic, illum. Praesentium, iure non? Odio!

    </p>

    </div>

    <div class="boton">
        <input type="button" value="Leer mas">
    </div>

    <!-- SECCION 2 -->
    <div class="roja">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8We3UtHNR8LawiQCx904PF6p6fy0Y4NVAcA&s">
   <h3> <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda illum vel ab voluptatibus. Aliquam cupiditate minima assumenda laboriosam, beatae, quasi qui enim atque saepe maxime, ipsam dignissimos aliquid quod rerum!
        
    </p></h3>
    <p>
        -Pepito Perez
    </p>

    </div>

    <!-- SECCION 3 -->
     <div class="proyectos">
        <h1>Mis Proyectos</h1>


        <div class="tabla">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhS8OCwVtXbDK8A-VSmBeKLPsXwDb4FjsEXA&s">
        <h3>Proyecto 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia expedita cum aut odit molestiae dolorem harum tempora consequatur perspiciatis sequi itaque, nihil nam ipsum. Necessitatibus ad temporibus consectetur dolores totam.</p>
        
        <input type="button" value="Ver Proyecto">
        </div>

        <div class="tabla">

    <h3>Proyecto 2</h3>
     </div>
    

</div>
    <!-- <div class="proyectoo">
        <h1>Proyecto 1</h1>
        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ipsum omnis incidunt, corporis quas dolorem placeat dicta ipsam quod nulla nisi vel dolores! Officiis fuga, optio modi ut inventore recusandae!</h1>
     </div> -->

</body>
</html>

<style>

.body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
}

.menu{
    background:local;
    height: 40px;
}

.logo{
    color: darkblue;
    float:left;
    margin-left: 10px;
    margin-top: 20px;
}

.enlaces {
    float: right;
    margin-right: 40px;
    margin-top: 20px;
    
}

.enlaces a{
    color: darkblue;
    margin-left: 30px;
}
.contenido {
    color:orangered;
    margin-left: 30px;
}
    
/* SECCION 1*/
.principal{
    background: white;
    height: auto;
}
.imagen {
    width: 50%;
    float: left;
}
.imagen img{
    width: 300px;
    margin-top: 60px;
    margin-left: 40%;
}
.texto{
   float: left;
   width: 300px;
   margin-top: 40px;
   

}
.texto h1{
    color: orangered;
    font-size: 40px;
}

.boton{
    width: 100px;
    margin-left: 55%;
    background: white;
    
    }
input {
    background: orangered;
    color: white;
    border: none;
}
/* SECCION 2 */

.roja{
    background: orangered;
    color: white;
    margin-top: 20px;
    text-align: center;
    height: 300px;
}

.roja img{
    width: 120px;
     margin-top: 10px;
     border-radius: 100px;
}

.roja p{
    width: 65%;
    margin: auto;
    font-size: 20px;
    margin-top: 10px;
}


/* SECCION 3  */

.proyectos{

text-align: center;
}

.tabla{
    border-style:solid;
    width: 250px;
    float: left;
    margin-left: 300px;
    padding: 10px;
}
.tabla img{
    width: 250px;
    height: 120px;
    
}

</style>