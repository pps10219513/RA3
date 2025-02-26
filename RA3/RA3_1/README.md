# RA3_1

### Executar els contenidors
```
docker run -p 80:80 -p 443:443 pps10219513/ra3.1:TAG
```
Escollir un tag dels següents:  
- [CSP](https://hub.docker.com/layers/pps10219513/ra3.1/CSP/images/sha256-28bd382a1184a3688d288e3caf77caa7fe67ad5fe3b75a851da932df0d5e9f9c)
- [WAF](https://hub.docker.com/layers/pps10219513/ra3.1/WAF/images/sha256-c88d58947bc56a89b0555050dbfcaff4d953112b8b42b361e0eba8e7f9dede20)
- [OWASP](https://hub.docker.com/layers/pps10219513/ra3.1/OWASP/images/sha256-c1ff14fa967e15d79ab19e6c550c6fad8cca9bbf46d81f9e1a6647d181b54e30)
- [DDOS](https://hub.docker.com/layers/pps10219513/ra3.1/DDOS/images/sha256-26ad0e91819a6e9b7de17420a068d343ca81995ef11c109d8ed78abc699e8b10)


Aquesta pràctica consisteix en securitzar un servidor apache2.
Per dur a terme aquesta tasca és faràn 4 contenidors amb docker,
un per cada mesura implementada. A continuació els contenidors:

1. [CSP + HSTS](./1_CSP)
2. [Web Application Firewall (WAF)](./2_Web_Application_Firewall)
3. [OWASP](./3_OWASP)
4. [Evitar DDOS](./4_Evitar_DDOS)
