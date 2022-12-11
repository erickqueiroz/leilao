# ItsNft
------

Projeto voltado para disponibilização de um marketplace de NFTs. Podendo gerar lauchpads dinâmicos quando o usuário quiser.

### Setup Inicial
--> No cmd na raíz desse projeto executar *composer install*<br>
--> Para startar o server local *composer serve*<br>
--> Tabelas iniciais para o BD estão em *sql/dump-init.sql*<br>
--> Após rodar o dump-init.sql no seu BD, executar as querys que estão em *sql/database-changelog.sql*<br>

### Instalando lib Web3 em PHP

COMPOSER_MEMORY_LIMIT=-1 composer require web3p/web3.php dev-master

### Fontes para Compilação e Deploy de Smart Contract via Web3
https://progerhub.com/tutorial/web3js-deploy-contract <br>
https://ericxtang.github.io/browser-solc/ <br>
https://medium.com/@JusDev1988/part-1-compiling-smart-contracts-in-the-browser-with-solcjs-and-vanilla-javascript-2bb0d6d5be04 <br>
https://github.com/ericxtang/browser-solc <br>
