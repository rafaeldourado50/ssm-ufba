---
layout: page
title: "Backup e recuperação"
---

### Tipo de backup escolhido:

Servidor MySQL rodando; Online / Hot; Full;

### Justificativa:

Nossa base não é muito pesada. Temos apenas 13 tabelas. O backup completo, com a estrutura e a carga dos dados têm, atualmente, algo em torno de 3,3 mb. Via MySQL Workbench, a exportação dos dados leva menos de 5 segundos. Além disso, os comandos para gerar esse tipo de backup são mais simples.

### Comandos e parâmetros utilizados para a criação do agendamento no servidor de produção:

Utilizando `cron` e `mysqldump` em um sistema Unix/Linux, podemos criar backups da base automaticamente, agendando um comando ou serviço.  

O `cron` é uma ferramenta baseada no tempo para agendamento de uma ação ou comando. Basta que o computador/servidor esteja ligado para que o comando seja executado no período indicado.  

Cada usuário do sistema possui acesso a esta ferramenta. Mas, para o nosso propósito, iremos utilizar o `crontab` do usuário `root`. Para isso, em um terminal, digitamos o seguinte comando:  

```bash
sudo crontab -e
```

O comando `sudo crontab -e` vai abrir o `crontab` associado ao usuário `root` para edição, caso o mesmo já exista. Ou, caso não exista, irá criar um novo arquivo `crontab` que será associado ao usuário.  

No arquivo `crontab` criado, serão exibidas algumas informações (em linhas comentadas utilizando o símbolo `#`) orientando o usuário acerca do funcionamento da ferramenta.  

Numa nova linha, adicionamos a linha:  

```bash
30 2 * * * mysqldump -u root -pPASSWORD ssmdb | gzip > /mnt/dumps/ssm_database_`date '+\%Y-\%m-\%d'`.sql.gz
```

A primeira parte, `30 2 * * *`, representa “minuto, hora, dia do mês, mês e dia da semana”. Com o objetivo de rodar o comando de backup todos os dias, só é preciso setar o minuto e a hora.  

A segunda parte, `mysqldump -u root -pPASSWORD ssmdb`, é o comando que gera o dump da nossa base (ssmdb).  

A terceira parte, `| gzip`, indica que é pra utilizar também o programa de compressão de dados.  

A quarta parte, ```> /home/USUARIO/dumps/ssm_database_`date '+\%Y-\%m-\%d'`.sql.gz```, indica o nome e o caminho do arquivo que receberá a carga dos dados, isto é, o backup propriamente dito. Como é um comando que será executado diariamente, é interessante utilizar a função “date” concatenada ao nome do arquivo que será criado, para que não exista sobreposição de arquivos. É necessário colocar a barra invertida `\` antes do símbolo da porcentagem `%`, para que a mesma não seja interpretada como um comando de `new line` no `crontab`.  

Feito isso, salvamos o arquivo e reiniciamos o computador/servidor para que o agendamento tenha efeito.  

Para validar as alterações no arquivo, podemos digitar o comando:  

```bash
sudo crontab -l
```

O comando `sudo crontab -l` irá exibir toda a informação contida no arquivo `crontab` do usuário `root`.  

Fontes:  
<https://www.backuphowto.info/how-backup-mysql-database-automatically-linux-users>  
<https://corenominal.org/2016/05/12/howto-setup-a-crontab-file/>