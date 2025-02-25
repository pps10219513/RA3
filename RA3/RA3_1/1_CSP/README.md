# Configuracions previes a l'exercici 
---
#### Llevar la versió d'apache2 i OS que utiliza el servidor
*/etc/apache2/apache2.conf*
``` 
ServerTokens ProductOnly
```
| Com era abans | Com és ara|
| ----------- | ----------- |
|![deuries estar mirant una foto de capçaleres amb informació d'apache2](./images/pre_ServerTokens.png) | ![deuries estar mirant una foto de les capçaleres i vore que no hi ha cap que aporte informació de l'apache](./images/post_ServerTokens.png)  |

#### Llevar l'informació de la versió d'apache en la pàgina d'error 
*/etc/apache2/apache2.conf*
``` 
ServerSignature Off
```
| Com era abans | Com és ara|
| ----------- | ----------- |
|![deuries estar mirant una foto de capçaleres amb informació d'apache2](./images/pre_ServerSignature.png) | ![deuries estar mirant una foto de les capçaleres i vore que no hi ha cap que aporte informació de l'apache](./images/post_ServerSignature.png)  |


#### També deshabilitarem el mòdul autoindex per no poder llistar fitxers quan no hi ha un index.html
```
RUN a2dismod -f autoindex
```
| Com era abans | Com és ara|
| ----------- | ----------- |
|![amb indexof](./images/pre_indexof.png) | ![sense indexof](./images/post_indexof.png)  |


## HSTS
#### Que és?
HSTS és com se li denomina a l'estàndard de l'[IETF](https://ca.wikipedia.org/wiki/Internet_Engineering_Task_Force) 
especificat al [RFC 6797](https://datatracker.ietf.org/doc/html/rfc6797)

Aquest estàndard introdueix una **capçalera** que li diu als **navegadors**
que **recorden** que aquest domini i/o subdominis tenen https i vagen directament 
a la versió amb **[encriptació](https://en.wikipedia.org/wiki/Transport_Layer_Security)** durant un periode de temps definit
Abans de configurar-ho s'ha d'habilitar el mòdul headers
```
RUN a2enmod headers
```

Ara ja podem afegir el HSTS al nostre virtual-host.

*/etc/apache2/sites-enabled/virtual-host-ssl.conf*
```
Header always set Strict-Transport-Security "max-age=63072000; includeSubDomains"
```
| Com era abans | Com és ara|
| ----------- | ----------- |
|![capçalera hsts](./images/pre_hsts.png) | ![sense indexof](./images/post_hsts.png)  |

---

# CSP
### Que és?
Una capa de seguretat que ajuda a previndre
i mitigar certs tipus d'atacs com:
- XSS
- Injecció de dades


## Com s'aconsegueix
Mijançant les capçaleres del protocol http. S'ha dafegir a la
configuració:

*/etc/apache2/apache2.conf*
```
Header set Content-Security-Policy "default-src 'self'; img-src 'self'; media-src 'self'; script-src 'self'"
```
| Com era abans | Com és ara|
| ----------- | ----------- |
|![no capçalera csp](./images/pre_csp.png) | ![capçalera csp](./images/post_csp.png)  |


