# wp_abc

Crear entorno local
---------------

* Crear directorio de trabajo y acceder a el
* `git clone https://github.com/ayarsava/wp_abc.git`
* Correr `docker-compose up` en el terminal y acceder a http://localhost:8004

El puerto a acceder se encuentra seteado en la linea 20 de docker-compose.yml, el mismo puede ser configurado de acuerdo a sus necesidades.


Crear entorno en producción
---------------

* Acceder a directorio publico
* `wget http://wordpress.org/latest.tar.gz`
* `$tar xfz latest.tar.gz`
* `mv wordpress/* ./`
* `rmdir ./wordpress/`
* `rm -f latest.tar.gz`
* Instalar wordpress
* `git clone https://github.com/ayarsava/wp_abc.git`


Setup general
---------------

* Activar plugin `Abc` incluido en el repositorio
* Instalar plugins `Meta Box` y `Simple Custom Post Order` incluido en librería de plugins publica de WP
* Activar theme `abc` incluido en el repositorio


Contenido
---------------

### Modo simple (importador)

Usted podrá realizar una importación del perfil inicial del proyecto, lo cual creará las categorias, articulos, items de menú, etc. Este es un modo práctico de inicializar el proyecto, aunque requerirá de eliminar aquellos items de prueba de funcionamiento que se generen automáticamente. 

### Modo manual

* Setear enlace permanente en modo Nombre entrada desde `/wp-admin/options-permalink.php`
* Crear recursos desde la sección `Videos` y `Entradas` y asociarle las categorias, etiquetas y tipos de destaque (actualmente en el frontend sólo se está tomando en cuenta el tipo de destaque `Principal`.)


Edición de contenido
---------------

* Wordpress ofrece el editor de contenido Gutemberg, lo cual provee todas las herramientas necesarias para presentar contenido interactivo.
* Podrá encontrar información complementaria para la creación de contenido en bloques en:
- https://wordpress.com/support/wordpress-editor/blocks/group-block/ 

