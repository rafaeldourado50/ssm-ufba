---
layout: page
title: "Database Import / Export"
---

## Como importar ou exportar o dump do banco de dados MYSQL através do terminal, via linha de comando.

### Importando um banco de dados MySQL através do comando mysql

Para importar um dump do MySQL em um banco de dados:

```bash
mysql -u username -p database_name < database_exportname.sql
```

Para importar um desses banco de dados MySQL do dump em um banco de dados:

```bash
mysql -u username -p --one-database database_name < all_databases_export.sql
```

### Exportando um banco de dados MySQL através do comando mysqldump

Para exportar um banco de dados MySQL (como um dump) através da linha de comando, execute:

```bash
mysqldump -u username -p database_name > database_exportname.sql
```

Para exportar todos os bancos de dados em um dump:

```bash
mysqldump -u username -p --all-databases > all_databases_export.sql
```

Fontes:  
<https://coolestguidesontheplanet.com/import-export-mysql-database-command-line/>  
<http://www.bosontreinamentos.com.br/mysql/mysql-mysqldump-backup-e-restauracao-do-banco-de-dados-25/>