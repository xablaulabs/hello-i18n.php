hello-i18n.php
==============

Estudo sobre i18n, exemplo feito em PHP.


## Specs
* Feito no SO : Mac OS X 10.6 (a.k.a Snow Leopard)
* Testado nos SOs : Ubuntu 10.04 LTS e Ubuntu Server 10.04 LTS
* Linguagem utilizada : PHP


## Infos
* Roda somente em plataformas *nix
* Necessita do gettext e dos locales que deseja traduzir instalados


## Tips
O OSX já vem com diversos locales instalados, ou seja dispensa instalações ou gambiarras.

Quem quiser testar no Linux necessita instalar o xgettext e os locales...


### Instalando o xgettext
sudo aptitude install xgettext

### Instalando os locales en
sudo aptitude install language-pack-en language-support-en


## Troubleshooting
Testei no Ubuntu 10.04 LTS e Ubuntu Server 10.04 LTS.

Notei que na linha onde declaramos a lingua, necessita ser terminada com o charset, utilizei o UTF-8.

Então declarei assim: $lang = 'pt_BR.utf8';