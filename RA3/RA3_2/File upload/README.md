## :inbox_tray: :boom: File Upload — Subida de Archivos Maliciosos

:link: **Tipo de ataque**: Explotación de un sistema que permite a los usuarios subir archivos al servidor.

:smiling_imp: **¿Qué hace?**  
Permite a un atacante subir archivos peligrosos (como shells PHP o scripts JS)  
que luego pueden ejecutarse en el servidor y dar control total del sistema.

:dart: **¿Cómo funciona?**  
El atacante sube un archivo con código malicioso,  
saltándose validaciones de tipo, extensión o contenido.  

Ejemplos comunes incluyen:  
- Subir un `.php` con una web shell.  
- Renombrar un script malicioso con doble extensión (`shell.php.jpg`).  
- Manipular el contenido del archivo para ejecutar comandos al abrirlo.

:lock: **Objetivo del atacante**  
- Ejecutar código remotamente (:computer:)  
- Leer archivos confidenciales (:closed_lock_with_key:)  
- Escalar privilegios (:key:)

:shield: **¿Cómo prevenirlo?**  
- Validar **extensiones** y **tipos MIME** con listas blancas.  
- Renombrar los archivos al subirlos.  
- Almacenar los archivos fuera del directorio público del servidor.  
- Nunca permitir la ejecución de archivos subidos por usuarios.

---

### :camera: Ejemplo visual

![File Upload Attack](images/1.jpeg)


