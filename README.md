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
post: dominio.com/api/Registro // Debera enviar name, email, password</br></br>
post: dominio.com/api/Login // Debera enviar email, password</br></br>

## Productos:
Get: dominio.com/api/Productos/lista // Devuelve una lista completa de los productos</br></br>
post: dominio.com/api/Materias // envia dato para agregar al registro : nombre, descripcion, precio, disponibles</br></br>
Get: dominio.com/api/Productos/id // envia el id de un registro para que devuelva el registro</br></br>
put: dominio.com/api/Productos/id // enviar el id de un registro los datos nombre, descripcion, precio, disponible, para modificar el registro</br></br>
delete: dominio.com/api/Productos/id // envia el id para eliminar el registro</br></br>
post: dominio.com/api/Productos/Resete // envia el dato baja = baja para eliminar todos los registros</br></br>
