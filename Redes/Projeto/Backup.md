# Backup de Switch Cisco Catalyst 2960 Layer 2

Este guia descreve os passos para realizar o backup de um **Switch Cisco Catalyst 2960**, incluindo configurações e sistema operacional.

---

## Passos Iniciais

### 1. Conectar ao Switch

- **Ping** para verificar a conectividade:
  ```bash
  ping sw-01
  ```
- **SSH** para acessar o switch:
  ```bash
  ssh -l admin sw-01
  ```

### 2. Entrar no Modo de Execução Privilegiada

Digite o comando:
  ```bash
  enable
  ```

## Coletar Informações do Switch

### 1. Verificar Informações da Caixa

Mostra a versão do sistema operacional e detalhes do hardware:
  ```bash
  show version
  ```

### 2. Verificar Sistema Operacional e Arquivo de Inicialização

Mostra o nome do sistema operacional e o arquivo de inicialização padrão:
  ```bash
  show boot
  ```

### 3. Verificar Arquivos na Flash (HD do Switch)

Lista os arquivos armazenados na memória flash:
  ```bash
  show flash:
  ```
Exemplo de saída:
  ```
  2960-lanbasek9-mz.150-2.SE4.bin
  ```

## Realizar Backup

### 1. Backup Básico na RAM

Salva a configuração atual na memória de inicialização:
  ```bash
  copy running-config startup-config
  ```

### 2. Backup na Flash (HD do Switch)

Salva a configuração de inicialização na memória flash:
  ```bash
  copy startup-config flash
  ```

### 3. Backup no VSCode

Exibe a configuração atual para cópia manual:
  ```bash
  show running-config
  ```
Dicas:
  - "crypto key generate rsa general-keys modulus 1024" no SSH e o "no shutdown" na interface Vlan1 e edite todas as senhas criptografadas para as senhas sem a criptografia.
  ```bash
  crypto key generate rsa general-keys modulus 1024
  ```
- E ative interfaces da Vlan1:
  ```bash
  no shutdown
  ```


## Backup via Rede (TFTP)

### 1. Verificar Conectividade com o Servidor

Teste a conectividade com o servidor TFTP:
  ```bash
  ping server-01
  ```

### 2. Backup da Configuração via TFTP

Envie a configuração de inicialização para o servidor TFTP:
  ```bash
  copy startup-config tftp
  ```
Informe o endereço IP do servidor TFTP (ex.: 192.168.1.1).
Nomeie o arquivo de backup (ex.: sw-01-confg).

### 3. Backup do Sistema Operacional via TFTP

Envie o sistema operacional para o servidor TFTP:
  ```bash
  copy flash: tftp
  ```
Informe o nome exato do sistema operacional (ex.: 2960-lanbasek9-mz.150-2.SE4.bin).
Nomeie o arquivo de backup (ex.: copia-02.bin).

## Verificar Arquivos na Flash

Após o backup, verifique os arquivos na flash:
  ```bash
  show flash
  ```

## Dicas Importantes

- **Consistência**: Mantenha backups regulares para evitar perda de dados.
- **Segurança**: Armazene os backups em local seguro e criptografado, se possível.
- **Testes**: Após o backup, restaure os arquivos em um ambiente de teste para garantir a integridade.

## Estrutura de Arquivos no Switch

Exemplo de Saída do `show flash`:
```bash
Directory of flash:/

1  -rw-  4414921   Mar 1 1993 00:00:00 +00:00  2960-lanbasek9-mz.150-2.SE4.bin
2  -rw-    1024    Mar 1 1993 00:00:00 +00:00  sw-01-confg
3  -rw-  4414921   Mar 1 1993 00:00:00 +00:00  copia-02.bin
```

## Comandos Resumidos

- `show version` → Exibe informações da versão do sistema operacional.
- `show boot` → Mostra o arquivo de inicialização padrão.
- `show flash:` → Lista os arquivos na memória flash.
- `copy running-config startup-config` → Salva a configuração atual na memória de inicialização.
- `copy startup-config flash` → Salva a configuração de inicialização na flash.
- `show running-config` → Exibe a configuração atual para cópia manual.
- `copy startup-config tftp` → Envia a configuração para um servidor TFTP.
- `copy flash: tftp` → Envia o sistema operacional para um servidor TFTP.
- `show flash` → Verifica os arquivos na memória flash.


## Material usado de referencia
[VScode.txt](https://github.com/user-attachments/files/18791181/VScode.txt)
