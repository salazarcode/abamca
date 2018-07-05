Requerimiento: 

"Una empresa de envíos de paquetes tiene un modelo de negocios basado en franquicias en el que cada una de éstas, puede recibir paquetes para ser enviados, en el momento de la recepción del paquete una persona trabajadora de la franquicia registra el envío y genera un comprobante que debe imprimirse y pegarse en el paquete mencionado. Al crearse dicho comprobante debe notificarse a la central que hace los envíos, puesto que éstos podrán aprobar o no el envío basados en las características del paquete al recibirse en la agencia central, si el paquete es rechazado o aceptado (y enviado) en la central debe cambiarse el estatus del paquete y dicho cambio será visible por el personal de franquicia para información al cliente, así como serán también visibles los datos del envío definitivo, como el número de guía con que puede rastrearse el paquete y los links donde puede verificarse el paradero del paquete según la empresa con la que se envió el mismo".

El modelo descrito arriba se satisfizo con ésta aplicación, haciendo uso del scaffolding de seguridad de Laravel, sistema de roles hecho a mano y basado en middleware. La gestión de los comprobantes y su estado se hizo a través de un CRUD estandar de "envíos" y "estados". Se uso la librería DOMPDF para la generación de dichos comprobantes. El frontend se desarrolló completamente con el sistema de plantillas estandar de Laravel, sin mucha magia.

Para esta aplicación se usó Laravel 5.2.

Andrés Salazar
salazarcode@gmail.com
