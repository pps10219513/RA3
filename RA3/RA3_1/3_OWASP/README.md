# Que són les regles OWASP?
Les regles OWASP de ModSecurity són un conjunt de directrius basades en el OWASP
Core Rule Set, dissenyades per detectar i bloquejar atacs comuns a aplicacions web.
Aquestes regles utilitzen patrons per identificar vulnerabilitats com
injeccions SQL i cross-site scripting analitzant el tràfic HTTP.

### Com s'apliquen?

S'ha de clonar aquest [repositori](https://ca.wikipedia.org/wiki/Internet_Engineering_Task_Force)
però s'ha de tindre en compte que el repositori porta
des del 2020 archivat. 

|Regles aplicades | Atac | Log|
| | ----------- | ----------- |
| |![atac xss](./images/xss.png) | ![log](./images/pre.png)  |
|:heavy_check_mark: |![atac xss](./images/xss.png) | ![po](./images/post.png)  |
