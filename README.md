# Descripción

Se requiere que los usuarios autenticados puedan ver la lista de productos, para ello deberas realizar un sistema donde los usuarios puedan registrarse y logiarse para poder dar (Alta, Baja, Modificación, Borrado) de los productos.

Tarea:
1. Realizar endpoints para (registrarse, logiarse y cerrar sesion) de los usuarios.
2. Realizar endpoints para CRUD donde los usuarios logiados puedan dar (Alta, Baja, Modificación, Borrado) de los productos.
4. Realizar un endpoint que devuelva un producto especifico.

Información necesaria:
5. Debera usar Sanctum.</br>
6. Para la base de datos debe utilizar mysql.</br>
7. Es necesario utlizar laravel (modo API REST).</br>
8. El formato y la información de los JSON quedan a su libre criterio.</br>
9. La estructuración del proyecto queda a su criterio.</br></br>

## Ejercico Completado!!</br></br>
### Rutas:</br>
## Registro, Login:

| Datos a enviar                      | Metodo        | Ruta          |
|:------------------------------------|:-------------:|--------------:|
| Debera enviar name, email, password | **POST**      | api/Registro  |
| Debera enviar email, passwor        | **POST**      | api/Login     |

## Productos:

| Datos a enviar                                                                                                   | Metodo        | Ruta                  |
|:-----------------------------------------------------------------------------------------------------------------|:-------------:|----------------------:|
| Esta devuelve una lista de los productos                                                                         | **GET**       | api/Productos/lista   |
| envia dato para agregar al registro : nombre, descripcion, precio, disponibles                                   | **POST**      | api/Productos         |
| envia el id de un registro para que devuelva el registro                                                         | **GET**       | api/Productos/{id}    |
| enviar el id de un registro los datos nombre, descripcion, precio, disponible, para modificar el registro        | **PUT**       | api/Productos/{id}    |
| envia el id para eliminar el registro                                                                            | **DELETE**    | api/Productos/{id}    |
| envia el dato (baja = baja) para eliminar todos los registros                                                    | **POST**      | api/Productos/Resete  |
