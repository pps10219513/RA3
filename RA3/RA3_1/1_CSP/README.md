# Configuracions previes de l'escenari
---
## Llevar informació del servidor a les capçaleres 
*/etc/apache2/apache2.conf*
``` 
ServerTokens ProductOnly
```
| Com era abans | Com es ara|
| ----------- | ----------- |
|![deuries estar mirant una foto de capçaleres amb informació d'apache2](./images/pre_ServerTokes.png) | Title |


ServerSignature Off
## També deshabilitarem el mòdul autoindex per no poder llistar fitxers
```
RUN a2dismod -f autoindex
```

## HSTS
#### Que és?
HSTS és com se li denomina a l'estàndard de l'[IETF](https://ca.wikipedia.org/wiki/Internet_Engineering_Task_Force) 
especificat al [RFC 6797](https://datatracker.ietf.org/doc/html/rfc6797)

Aquest estàndard introdueix una **capçalera** que li diu als **navegadors**
que **recorden** que aquest domini i/o subdominis tenen https i vagen directament 
a la versió amb **[encriptació](https://en.wikipedia.org/wiki/Transport_Layer_Security)** durant un periode de temps definit
Abans de possar la línea d'abans s'ha d'habilitar el mòdul headers
```
RUN a2enmod headers
```
Ara ja podem afegir el HSTS al nostre virtual-host.
*/etc/apache2/sites-enabled/virtual-host-ssl.conf*
```
Header always set Strict-Transport-Security "max-age=63072000; includeSubDomains"
```
---


# Exercici demanat
## CSP
### Que és?
Una capa de seguretat que ajuda a previndre
i mitigar certs tipus d'atacs com:
- XSS
- Injecció de dades


### Com s'aconsegueix
Mijançant les capçaleres del protocol http. S'ha dafegir a la
configuració:

*/etc/apache2/apache2.conf*
```
Header set Content-Security-Policy 
	default-src 'self'; 
	img-src *; 
	media-src media1.com media2.com; 
	script-src userscripts.example.com
```

