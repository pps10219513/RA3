# CSP
### Que és?
Una capa de seguretat que ajuda a previndre
i mitigar certs tipus d'atacs com:
    - XSS
    - Injecció de dades


### Com s'aconsegueix
Mijançant les capçaleres http. S'ha dafegir a la
configuració:
'''
Header set Content-Security-Policy \
	default-src 'self'; \
	img-src *; \
	media-src media1.com media2.com; \
	script-src userscripts.example.com
'''

# HSTS
## També és important utilitzar http sobre tls 
