<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/EstiloCotizacion.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img class="Logo" src="./images/DYA2.png">
        <h2 class="h21"> Cotización</h2>
        <span class="user-detail"><h2>DYA IMPORT &amp; EXPORT SA.S.</h2></span>
    </header>

        
    <div class="datetime">
        <label for="date/time">Date/Time: </label>
        <input type="datetime-local">
    </div>

    <div class="informacionClienteVehiculo">
    <div class="cliente">
    <center><h2>Información Personal</h2></center>
        <br>
        <div class="contenidoConsulta">
        <p><span class="campo">Nombre: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Cedula: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Celular:</span><label class="campoConsulta"></label></p>
        <p><span class="campo">Telefono:</span><label class="campoConsulta"></label></p>
        <p><span class="campo">Direccion: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Email:</span><label class="campoConsulta"></label></p>
        </div>
    </div>

    <div class="vehiculo">
    <center><h2>Información Vehiculo</h2></center>
        <br>
        <div class="contenidoConsulta">
        <p><span class="campo">Placa: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Clase: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Marca: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Linea: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Modelo: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Kilometros: </span><label class="campoConsulta"></label></p>
        <p><span class="campo">Combustible: </span><label class="campoConsulta"></label></p>
        </div>
    </div>
    </div>

    <br>
    <div class="listaProductosServicios">
        <div class="servicios/productos">   
            <center><h2>Servicios/Productos</h2></center>
            <table class="tablaProductosServicios">
                <thead>
                    <tr>
                        <th>Servicio/Producto</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Servicio 1</td>
                        <td>1</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Servicio 2</td>
                        <td>1</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Servicio 3</td>
                        <td>1</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    <center>
    <div class="invoice-container">
        <h1>Nombre de la Empresa</h1>
        <h2>Factura</h2>
        <h3>Datos del Cliente</h3>
        <p>Nombre: Juan Pérez</p>
        <p>ID: 12345</p>
        <p>Fecha: 15 de octubre de 2024</p>

        <table>
            <thead>
                <tr>
                    <th>Servicio/Producto</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Servicio 1</td>
                    <td>1</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>Servicio 2</td>
                    <td>1</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td>Servicio 3</td>
                    <td>1</td>
                    <td>$20.00</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p>Subtotal: $100.00</p>
            <p>Total: $100.00</p>
        </div>

        <div class="footer">
            <p>Gracias por su preferencia.</p>
            <p>Teléfono: (123) 456-7890</p>
            <p>Email: contacto@empresa.com</p>
        </div>
    </div>
    </center>
    </div>
    <br>
    <div class="botones">
    <center>
    <div class="buttons">    
      <button class="btn"> Crear Usuario</button>
    </div>
    <div class="Button-container">
      <button class="btn1"> Cancelar</button>
    </div>
    </center>
    </div>
    <br>
</body>
</html>