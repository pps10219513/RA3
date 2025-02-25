# HSTS
### Que és?
HSTS és com se li denomina a l'estàndard de l'[IETF](https://ca.wikipedia.org/wiki/Internet_Engineering_Task_Force) 
especificat al [RFC 6797](https://datatracker.ietf.org/doc/html/rfc6797)

Aquest estàndard **obliga** a que totes les comunicacions client/servidor
utilitzen una **conexió segura** sobre [TLS](https://en.wikipedia.org/wiki/Transport_Layer_Security). 

# CSP
### Que és?
Una capa de seguretat que ajuda a previndre
i mitigar certs tipus d'atacs com:
- XSS
- Injecció de dades


### Com s'aconsegueix
Mijançant les capçaleres del protocol http. S'ha dafegir a la
configuració:

```
Header set Content-Security-Policy 
	default-src 'self'; 
	img-src *; 
	media-src media1.com media2.com; 
	script-src userscripts.example.com
```

