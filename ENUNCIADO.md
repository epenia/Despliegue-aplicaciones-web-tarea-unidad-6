# Despliegue de una aplicación web en PHP

1. Elección del proyecto base en PHP

- Elige un proyecto sencillo para empezar.
- Puedes utilizar una IA para que te genere el código fuente inicial. El objetivo principal de esta tarea es que aprendas a documentar y versionar el código, no que lo programes desde cero.

2. Documentación del código fuente

- Implementa comentarios en formato DocBlock (phpDocumentor) para documentar tus clases, funciones, métodos y constantes.
- Asegúrate de redactar descripciones claras e incluir obligatoriamente etiquetas como `@param`, `@return`, `@author` y `@version`.

3. Generación de la web de documentación

- Utiliza phpDocumentor desde la línea de comandos para procesar tus comentarios y generar automáticamente la documentación del proyecto en formato HTML.
- Guarda este resultado en una carpeta llamada `docs`.

4. Inicialización del repositorio Git

- Abre el terminal, sitúate en la carpeta raíz de tu proyecto e inicializa el repositorio local utilizando el comando `git init`.
- Crea un archivo `.gitignore` para excluir archivos que no deban subirse (por ejemplo, un fichero llamado `contraseñas.txt`).

5. Registro de los primeros cambios (Commits)

- Prepara todos los archivos necesarios usando `git add` para pasarlos al área de preparación.
- Guarda esta versión inicial de tu proyecto utilizando `git commit -m` con un mensaje descriptivo.

6. Evolución del proyecto (Modificaciones)

- Realiza alguna modificación visible en tu código fuente (como añadir una nueva función o cambiar la lógica existente).
- Modifica los comentarios DocBlock para que expliquen correctamente los nuevos cambios.
- Vuelve a compilar y generar la documentación HTML.
- Añade estos nuevos archivos al área de preparación con `git add` y consolida la nueva versión con otro `git commit -m`.

7. Revisión del historial del proyecto

- Visualiza el historial completo de tus commits empleando el comando `git log`.
- Comprueba los cambios exactos que has introducido en el código usando el comando `git diff`.
- Realiza una prueba para navegar a una versión anterior de tu código usando los comandos `git checkout` o `git reset`.

8. Sincronización en la nube (GitHub)

- Accede a tu cuenta de GitHub (crea una si no la tienes).
- Crea un repositorio nuevo. Es muy importante que este repositorio sea público.
- Conecta tu entorno local con el repositorio remoto mediante `git remote add origin` y sube todo tu historial con el comando `git push origin main` (o la rama que estés utilizando).
