
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden De Servicio</title>
    <link rel="stylesheet" href="css/EstiloOrden.css">
</head>
<body>
<header>
                <img class="Logo" src="./Imagenes/DYA2.png">
                <img class="LogoListo"src="./Imagenes/Listo1.png">
                <h2 class="h21"> Orden De Servicio</h2>
                <span class="user-detail"><h2>DYA IMPORT &amp; EXPORT SA.S.</h2></span>
            </header>
    <form class="main-form" >
        <form class="" >
            <div class="Main-container">
                <form class="form-principal">
                    
                    <div class="Container">
                        <label>Fecha-Hora</label>
                        <input type="datetime-local">
                    </div>
                    <div class="Containerx1">
                        <label >N° Orden</label>
                        <input type="text" placeholder="Número De Orden" required>
                    </div>
                    </form>
                    <br>
                    <form>
                        <label>ID: </label>
                        <select type="text" id="searchBar" placeholder="Buscar ID" required></select>
                        <button > Buscar</button>
                    
                        <br>
                        <br>
                    <h4> Información Personal: </h4>
                    <div class="customer-info" id="customerInfo" >
                        <p>No has buscado ningun cliente aún</p>
                    </div>
                    </form>
                    <br>
                    <form class="form-servicios">
                        <h4>Servicios Requeridos</h4>
                        <div class="service-container">
                            <select type="text" id="searchBar" ></select>
                            
                            <button >Agregar</button>
                        </div>
                        <ul id="serviceList" >
                        <table>
                            <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Costo</th>
                                    <th>Trabajo</th>
                                    <th>Tiempo</th>
                                </tr>
                            </thead>
                            </table>
                            <li>No has agregado ningun servicio aún</li>
                        </ul>
                        <br>
                    </form>
                        <div>
                            <h4>Llantas</h4>
                            <br>
                            <th>
                                <label><input type="checkbox" id="efectivo" value="Efectivo"> Requeridas</label>
                                <label><input type="checkbox" id="tarjeta" value="Tarjeta"> No Requeridas</label>
                        </div>
                        <br>
                        <div class="payment-container">
                            <div class="checkbox-container">
                                <label> <h4>Método De Pago:  </h4></label>
                                <br>
                                <th>
                                <label><input type="checkbox" id="efectivo" value="Efectivo"> Efectivo</label>
                                <label><input type="checkbox" id="tarjeta" value="Tarjeta"> Tarjeta</label>
                                <label><input type="checkbox" id="cheque" value="Cheque"> Cheque</label>
                                <label><input type="checkbox" id="credito" value="Crédito"> Crédito</label>
                                </th>
                            </div>
                        </div>
                        <div>
                            <h4>Crédito: </h4>
                            <br>
                            <th>
                                <label><input type="checkbox" id="efectivo" value="Efectivo"> Aprobado</label>
                                <label><input type="checkbox" id="tarjeta" value="Tarjeta"> No Aprobado</label>
                        </div>
                        <br>
                </div>
                            <form class ="Ticket" id="ticket">
                                <div class="invoice-container">
                                    <h1>DYA Import & Export</h1>
                                    <h2>Ticket</h2>
                                    
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Servicio</th>
                                                <th>Costo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Servicio 1</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>Servicio 2</td>
                                                <td>$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>Servicio 3</td>
                                                <td>$20.00</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="total">
                                        <p>Subtotal: $100.00</p>
                                        <p>Total: $100.00</p>
                                    </div>
                                </div>
                                </form>
        </form>
        <div class="buttons">    
            <button class="btn"> Submit</button>
        </div>
        <div class="Button-container">
            <button class="btn1"> Cancelar</button>
        </div>
        <div class="Asesor">
            <Label>Código Asesor</Label>    
            <input type="text" >
        </div>
    </form>
    
    

</body>
</html>