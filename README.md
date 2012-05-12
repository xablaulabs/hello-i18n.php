hello-i18n.php
==============

Estudo sobre i18n, exemplo feito em PHP.


## Specs
* Feito no SO : Mac OS X 10.6 (a.k.a Snow Leopard)
* Testado nos SOs : Mac OS X 10.6, Ubuntu 10.04 LTS e Ubuntu Server 10.04 LTS
* Linguagem utilizada : PHP
* Dependências: xgettext e os locales desejados


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


## HowTo
Você precisa utilizar o comando xgettext para extrair as variáveis que servirão para a tradução


### Extraindo as variáveis
xgettext -o hello.pot index.php

Com isso temos o arquivo modelo para ser traduzido para qualquer linguagem

Para edição utilize algum software como POEdit ou edite via terminal e 'compile' na mão, pois o arquivo binário .mo, facilita e agiliza a utilização pelo PHP 


### 'Compilando' na mão
msgfmt hello.po -o hello.mo


### Path Tree
Você precisa ter uma estrutura de diretórios bem construida.

O primeiro passo é criar um diretório para armazenar os locales, algo como i18n.

Depois de criar o diretório abrigo, crie um diretório para cada locale desejado (lingua_PAIS).


#### Exemplo diretórios dos locales
* i18n/pt_BR
* i18n/en_US
* i18n/es_ES
* i18n/de_DE

Com os diretórios dos locales criados, crie um diretório chamado 'LC_MESSAGES' para abrigar o .po e .mo daquela lingua, o 'LC_MESSAGES' é feito para abrigar as strings traduzidas


#### Exemplo diretórios 'LC_MESSAGES'
* i18n/pt_BR/LC_MESSAGES
* i18n/en_US/LC_MESSAGES
* i18n/es_ES/LC_MESSAGES
* i18n/de_DE/LC_MESSAGES

Coloque os arquivos .po e .mo dentro de LC_MESSAGES


## Troubleshooting
Testei no Ubuntu 10.04 LTS e Ubuntu Server 10.04 LTS.

Notei que na linha onde declaramos a lingua, necessita ser terminada com o charset, utilizei o UTF-8.

Então declarei assim para o Ubuntu: $lang = 'pt_BR.utf8';
