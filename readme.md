# Sistema de Solicitudes

## Fundempresa

### Requerimientos
* Solicitudes:
    - Los usuarios del sistema (empleados de la empresa registrados en el mismo) pueden realizar solicitudes con temas laborales a otros usuarios.
    - Los usuarios que reciben solicitudes pueden delegar dicha solicitud a otro usuario según corresponda, y catalogar dicha solicitud.
    - Los usuarios que elaboran, reciben y son delegados a las solicitudes; pueden realizar comentarios en el hilo de la solicitud.
    - El último delegado de la solicitud, puede cerrar dicha solicitud. El cierre es hacia arriba y se can notificando a los que delegaron la solicitud.
    - El usuario que generó la solicitud es el último en cerrar la solicitud, según su conformidad y tener cierto grado de satisfacción en la solución de la solicitud.
    - Los usuarios que delegaron la solicitud, tienen potestad de cerrar o no la solicitud, haciendo que se ramifiquen las delegaciones.
* Usuarios:
    - Todos los usuarios del sistema deben estar registrados, mostrando su nombre ycargo que ocupan dentro de la empresa.
    - Los usuarios podrían tener uno o más de los siguientes privilegios:
        - Administrador: Tiene la facultad de ingresar nuevos usuarios al sistema, así como los cargos que ocupan dentro de la empresa.
        - Usuario: Tiene la facultad de realizar las solicitudes, catalogar y cerrar las mismas.
        - Reportes: Tiene la facultad de ver reportes generados a partir de los datos registrados por el sistema.
    - Los usuarios deben ser notificados cuando reciban una solicitud, cuando son delegados y cuando se cierra una solicitud por alguno de los delegados; además de cuando se cierra por completo la solicitud.
    - Los usuaros deben contar con un dashboard para ver el estado de sus solicitudes y la resolución de las mismas. Dicho dashboard debe motivar la resolución de problemas.
* Reportes:
    - Se deben generar reportes diarios, mensuales y anuales por los siguientes temas:
        - Según catalogación.
        - Según cargos de los usuarios que realizan solicitudes.
        - Según usuarios que resuelven cerrando solicitudes.