# Summertime
1) Istallazione completa Distribuzione TeXLive
link: https://www.tug.org/texlive/acquire-netinstall.html
download diretto per windows: http://mirror.ctan.org/systems/texlive/tlnet/install-tl-windows.exe

2) Istallazione editor TeXMaker
link: http://www.xm1math.net/texmaker/download.html
download diretto per windows: http://www.xm1math.net/texmaker/texmakerwin32_install.exe




CONFIGURAZIONE VIRTUAL HOST: potete cambiare la directory del classico localhost per accedere al server, scegliendo un nuovo path,
un nuovo nome, ecc...la configurazione e' abbastanza semplice ed e' composta da due passi:

1)aprite il file  C:\xampp\apache\conf\extra\httpd-vhosts.conf e aggiungete:

```

NameVirtualHost *:80
  <VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs"
    ServerName localhost
  </VirtualHost>
 
<VirtualHost *:80>
    DocumentRoot "C:\Users\Alessio\Desktop\Summertime\Summertime"
    ServerName summertime
	<Directory "C:\Users\Alessio\Desktop\Summertime\Summertime">
		#DirectoryIndex index.php
        # AllowOverride All      # Deprecated
        # Order Allow,Deny       # Deprecated
        # Allow from all         # Deprecated
        # --New way of doing it
        Require all granted    
	</Directory>
</VirtualHost>  

```
2)aprite il file  C:\Windows\System32\drivers\etc\hosts   e aggiungete
```
127.0.0.1   summertime 
```
(dove summertime e' lo stesso nome che avete usato per ServerName nel file httpd-vhosts.conf)

3) fatti questi due passi, il nuovo localhost sara' http://summertime/...
non avra' lo stesso index di xamp ovviamente ma una volta fatto l'index.php del nostro server partira' da li
