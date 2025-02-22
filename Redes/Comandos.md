# 🚀 Comandos de Configuração de Rede

## 📡 Cisco IOS

### 🔑 Acesso e Configuração Inicial
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `enable` | Entra no modo privilegiado. | `enable` |
| `configure terminal` | Entra no modo de configuração global. | `configure terminal` |
| `hostname <NOME>` | Define o nome do dispositivo. | `hostname Roteador1` |
| `write` ou `copy running-config startup-config` | Salva as configurações. | `write` |
| `reload` | Reinicia o dispositivo. | `reload` |

### 🔐 Configuração de Senha e Acesso
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `enable secret <SENHA>` | Define uma senha criptografada. | `enable secret 1234` |
| `service password-encryption` | Ativa a criptografia de senhas. | `service password-encryption` |
| `username <USUARIO> password <SENHA>` | Cria um usuário com senha. | `username admin password cisco` |
| `login local` | Exige autenticação local. | `login local` |
| `banner motd <Insira o texto>` | Define uma mensagem de aviso. | `banner motd #Bem-vindo ao sistema#` |

### 🔒 Configuração de SSH
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `ip domain-name <DOMINIO>` | Define o domínio para SSH. | `ip domain-name empresa.com` |
| `crypto key generate rsa general-keys modulus <BITS>` | Gera chave RSA. | `crypto key generate rsa general-keys modulus 1024` |
| `ip ssh version <VERSAO>` | Define a versão SSH. | `ip ssh version 2` |
| `ip ssh time-out <TEMPO>` | Define tempo limite. | `ip ssh time-out 60` |
| `login block-for <TEMPO> attempts <NUM> within <PERIODO>` | Bloqueia tentativas falhas. | `login block-for 120 attempts 3 within 60` |

### 🌐 Configuração de Interfaces
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `interface <INTERFACE>` | Entra na interface. | `interface gigabitEthernet 0/0` |
| `description <DESCRIÇÃO>` | Adiciona descrição. | `description Link para Servidor` |
| `ip address <IP> <MÁSCARA>` | Configura endereço IP. | `ip address 192.168.1.1 255.255.255.0` |
| `no shutdown` | Ativa a interface. | `no shutdown` |

### 🏢 Configuração de VLANs
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `vlan <NUMERO>` | Cria uma VLAN. | `vlan 10` |
| `name <NOME>` | Define nome da VLAN. | `name FIN` |
| `switchport mode access` | Define a interface como acesso. | `switchport mode access` |
| `switchport access vlan <NUMERO>` | Atribui VLAN. | `switchport access vlan 10` |

### 🔗 Configuração de Trunk
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `switchport mode trunk` | Configura interface como trunk. | `switchport mode trunk` |
| `switchport trunk allowed vlan <VLANS>` | Especifica VLANs permitidas. | `switchport trunk allowed vlan 10,20,30` |

### 🛠️ Verificação e Diagnóstico
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `show running-config` | Exibe configuração ativa. | `show running-config` |
| `show ip interface brief` | Mostra interfaces e IPs. | `show ip interface brief` |
| `show vlan brief` | Lista VLANs. | `show vlan brief` |
| `ping <IP>` | Testa conectividade. | `ping 192.168.1.1` |
| `traceroute <IP>` | Mostra rota dos pacotes. | `traceroute 8.8.8.8` |

## 🖥️ Comandos Windows (CMD)

### 🔧 Configuração de Rede
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `ipconfig /release` | Libera IP do DHCP. | `ipconfig /release` |
| `ipconfig /renew` | Solicita novo IP. | `ipconfig /renew` |
| `ipconfig /all` | Exibe detalhes da rede. | `ipconfig /all` |

### 📊 Diagnóstico e Testes
| Comando | Descrição | Exemplo |
|---------|-----------|---------|
| `ping <IP>` | Testa conectividade. | `ping 8.8.8.8` |
| `tracert <IP>` | Mostra rota de pacotes. | `tracert google.com` |
| `arp -a` | Mostra tabela ARP. | `arp -a` |
| `nslookup <DOMINIO>` | Resolve IP do domínio. | `nslookup google.com` |
| `netstat -an` | Lista conexões ativas. | `netstat -an` |

--
