# 🚀 Comandos Básicos de Configuração de Rede

## 📡 Cisco IOS

### 🔑 Acesso e Configuração Inicial
| Comando | Descrição |
|---------|-----------|
| `enable` | Entra no modo privilegiado do dispositivo. |
| `configure terminal` | Entra no modo de configuração global do dispositivo. |
| `hostname <NOME_DO_DISPOSITIVO>` | Define o nome do equipamento (exemplo: `hostname Roteador1`). |
| `end` | Sai do modo de configuração e retorna ao modo privilegiado. |
| `write` ou `copy running-config startup-config` | Salva as configurações em execução na memória permanente. |
| `reload` | Reinicia o dispositivo aplicando as configurações salvas. |

### 🔐 Configuração de Segurança
| Comando | Descrição |
|---------|-----------|
| `service password-encryption` | Ativa a criptografia de senhas no arquivo de configuração. |
| `enable secret <SENHA>` | Define uma senha criptografada para acesso ao modo privilegiado (exemplo: `enable secret 1234`). |
| `username <USUARIO> password <SENHA>` | Cria um usuário com senha para login no dispositivo (exemplo: `username admin password cisco`). |
| `username <USUARIO> privilege 15 secret <SENHA>` | Cria um usuário com privilégios administrativos e senha criptografada (exemplo: `username admin privilege 15 secret senh@forte`). |
| `security passwords min-length <NUMERO>` | Define o comprimento mínimo das senhas do sistema (exemplo: `security passwords min-length 8`). |

### 🔒 Configuração SSH
| Comando | Descrição |
|---------|-----------|
| `ip domain-name <DOMINIO>` | Define o domínio do equipamento para geração de chaves SSH (exemplo: `ip domain-name empresa.com`). |
| `crypto key generate rsa general-keys modulus <TAMANHO>` | Gera chaves RSA para criptografia SSH. O tamanho recomendado é 1024 ou 2048 bits (exemplo: `crypto key generate rsa general-keys modulus 1024`). |
| `ip ssh version <VERSAO>` | Define a versão do SSH utilizada (recomendado: `ip ssh version 2`). |
| `ip ssh time-out <SEGUNDOS>` | Define o tempo limite para uma sessão SSH inativa (exemplo: `ip ssh time-out 60`). |
| `ip ssh authentication-retries <TENTATIVAS>` | Define quantas tentativas de login serão permitidas antes de bloquear o usuário (exemplo: `ip ssh authentication-retries 2`). |
| `login block-for <TEMPO> attempts <NUMERO_TENTATIVAS> within <PERIODO>` | Bloqueia logins após múltiplas tentativas falhas (exemplo: `login block-for 120 attempts 3 within 60`). |

### 🎛️ Configuração de Acesso
| Comando | Descrição |
|---------|-----------|
| `line console 0` | Configura o acesso via console do equipamento. |
| `login local` | Exige autenticação de usuário local para login no console. |
| `logging synchronous` | Evita que mensagens do sistema interrompam a digitação. |
| `exec-timeout <MINUTOS> <SEGUNDOS>` | Define o tempo de inatividade antes de o console ser encerrado (exemplo: `exec-timeout 5 30`). |
| `line vty <INICIO> <FIM>` | Configura o acesso remoto ao equipamento via Telnet/SSH (exemplo: `line vty 0 4`). |
| `transport input ssh` | Restringe o acesso remoto apenas ao SSH (bloqueando Telnet). |

### 🌐 Configuração de Interfaces
| Comando | Descrição |
|---------|-----------|
| `interface <INTERFACE>` | Entra na configuração da interface desejada (exemplo: `interface gigabitEthernet 0/0`). |
| `description <DESCRIÇÃO>` | Adiciona uma descrição à interface (exemplo: `description Link para Servidor`). |
| `ip address <IP> <MÁSCARA>` | Configura um endereço IP na interface (exemplo: `ip address 192.168.1.1 255.255.255.0`). |
| `no shutdown` | Ativa a interface de rede. |

### 🏢 Configuração de VLANs
| Comando | Descrição |
|---------|-----------|
| `vlan <NUMERO>` | Cria uma VLAN com um número específico (exemplo: `vlan 10`). |
| `name <NOME_DA_VLAN>` | Define um nome para a VLAN criada (exemplo: `name RedeFinanceiro`). |
| `interface <INTERFACE>` | Entra na interface desejada para configuração de VLAN (exemplo: `interface fastEthernet 0/1`). |
| `switchport mode access` | Define a interface como modo acesso (não permite trunking). |
| `switchport access vlan <NUMERO>` | Atribui a VLAN especificada à interface (exemplo: `switchport access vlan 10`). |

### 🛠️ Verificação e Diagnóstico
| Comando | Descrição |
|---------|-----------|
| `show running-config` | Exibe a configuração atual do equipamento. |
| `show ip interface brief` | Mostra um resumo das interfaces de rede e seus IPs. |
| `show ip route` | Exibe a tabela de roteamento. |
| `show vlan brief` | Lista todas as VLANs configuradas no equipamento. |
| `ping <IP_DESTINO>` | Testa a conectividade com outro dispositivo na rede (exemplo: `ping 192.168.1.1`). |
| `ssh -l <USUARIO> <IP_DO_DISPOSITIVO>` | Acessa o equipamento remotamente via SSH (exemplo: `ssh -l admin 192.168.1.254`). |

---

## 🖥️ Windows (Prompt de Comando - CMD)

### 🔧 Configuração de Rede
| Comando | Descrição |
|---------|-----------|
| `ipconfig /release` | Libera o endereço IP atual, removendo a configuração do DHCP. |
| `ipconfig /renew` | Solicita um novo endereço IP ao servidor DHCP. |
| `ipconfig /all` | Exibe todas as informações de rede do computador, incluindo MAC Address e DNS. |

### 📊 Diagnóstico e Testes
| Comando | Descrição |
|---------|-----------|
| `ping <IP_DESTINO>` | Testa a conectividade com outro dispositivo na rede (exemplo: `ping 8.8.8.8`). |
| `tracert <IP_DESTINO>` | Mostra a rota que os pacotes percorrem até o destino (exemplo: `tracert google.com`). |
| `arp -a` | Exibe a tabela ARP com os endereços MAC conhecidos pelo computador. |
| `nslookup <DOMÍNIO>` | Obtém o endereço IP associado a um domínio (exemplo: `nslookup google.com`). |
| `netstat -an` | Lista todas as conexões ativas e as portas em uso no computador. |

---
