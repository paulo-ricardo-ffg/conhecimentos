# Anotações de Redes de Computadores

*ATENÇÃO PODE CONTER ERROS POIS SÃO ANOTAÇÕES PESSOAIS*

---

## 📚 Termos e Definições

### ISP (Internet Service Provider)
- **Provedor de Serviço de Internet**: Empresa que fornece acesso à internet.

### RT (Router)
- **Roteador**: Dispositivo que encaminha pacotes entre redes.

---

## 🌐 Redes Locais e de Longa Distância

### LAN (Local Area Network)
- **Definição**: Rede que cobre uma área geográfica pequena (ex.: casa, escritório, escola).
- **Características**:
  - Alta velocidade de transmissão.
  - Baixo custo de instalação e manutenção.
  - Conecta dispositivos como computadores, impressoras e servidores.
  - Comunicação via cabos Ethernet ou Wi-Fi.
- **Exemplo**: Rede doméstica ou de um pequeno escritório.

### WAN (Wide Area Network)
- **Definição**: Rede que cobre uma área geográfica ampla (ex.: cidade, país, mundo).
- **Características**:
  - Conecta várias LANs, permitindo comunicação entre redes distantes.
  - Transmissão de dados mais lenta devido à distância e infraestrutura complexa.
  - Requer tecnologias avançadas, como fibras óticas ou conexões via satélite.
- **Exemplo**: A internet conecta diferentes LANs globalmente.

| **Característica** | **LAN**                           | **WAN**                           |
|--------------------|-----------------------------------|-----------------------------------|
| **Área**           | Local (casa, escritório)          | Ampla (cidade, país, global)      |
| **Velocidade**     | Alta                              | Mais lenta                        |
| **Custo**          | Baixo                             | Alto                              |
| **Exemplo**        | Rede doméstica, rede corporativa  | A internet                        |

---

## 🔄 Protocolo DHCP & Processo DORA

### DHCP (Dynamic Host Configuration Protocol)
- **O que faz**: Atribui automaticamente endereços IP e configurações de rede (máscara de sub-rede, gateway, DNS).
- **Benefícios**:
  - Automatiza a atribuição de IPs.
  - Evita conflitos de IP.
  - Fornece configurações adicionais, como DNS e gateway.

### Processo DORA
1. **Discover (Descoberta)**:
   - O cliente envia uma mensagem em broadcast: "Há algum servidor DHCP disponível?".
2. **Offer (Oferta)**:
   - O servidor responde com uma oferta de IP.
3. **Request (Solicitação)**:
   - O cliente solicita o IP oferecido.
4. **Acknowledge (Confirmação)**:
   - O servidor confirma a atribuição do IP.

---

## 📜 SLA (Service Level Agreement)
- **Contrato de Nível de Serviço**:
  - Define expectativas entre fornecedor e cliente.
  - Estabelece metas de desempenho, prazos e qualidade.

---

## 📡 Modos de Comunicação

### Simplex
- **Comunicação unidirecional**: Um envia, o outro recebe (ex.: rádio).

### Half Duplex
- **Comunicação bidirecional alternada**: Apenas um envia por vez (ex.: walkie-talkie).

### Full Duplex
- **Comunicação bidirecional simultânea**: Ambos enviam e recebem ao mesmo tempo (ex.: telefone).

---

## 🔢 Endereçamento de IP

### IPv4
- **Características**:
  - Suporta multicast, broadcast e unicast.
  - Representado em formato decimal (ex.: 192.168.1.1).
  - Mais suscetível a ruído em redes.

### IPv6
- **Características**:
  - Não utiliza broadcast.
  - Reduz ruídos na rede.
  - Representado em formato hexadecimal (ex.: 2001:0db8:85a3::8a2e:0370:7334).

---

## 🏛️ IEEE, IANA & CGI.br  

### 📡 IEEE (Instituto de Engenheiros Eletricistas e Eletrônicos)  
- Responsável pela padronização de protocolos de rede em todo o mundo.  

### 🌍 IANA (Internet Assigned Numbers Authority)  
- Gerencia a alocação de endereços IP, domínios e números de protocolos de internet.  

### 🇧🇷 [CGI.br](https://www.CGI.br) (Comitê Gestor da Internet no Brasil)  
- Responsável pela governança e desenvolvimento da internet no Brasil.  
- Define diretrizes estratégicas para a internet no país.  
- Gerencia o domínio **“.br”** e promove boas práticas de segurança e conectividade.  

### 🔹 Autoridades Regionais de IP por Continente  
- **🌎 América do Sul e Caribe**: [LACNIC](https://www.lacnic.net) (Latin America and Caribbean Network Information Centre)  
- **🌎 América do Norte**: [ARIN](https://www.arin.net) (American Registry for Internet Numbers)  
- **🌍 Europa, Oriente Médio e Ásia Central**: [RIPE NCC](https://www.ripe.net) (Réseaux IP Européens Network Coordination Centre)  
- **🌍 África**: [AFRINIC](https://www.afrinic.net) (African Network Information Centre)  
- **🌏 Ásia-Pacífico**: [APNIC](https://www.apnic.net) (Asia-Pacific Network Information Centre)  


---

## 🎯 **Octetos em IPv4**

- Um endereço IPv4 é composto por **4 octetos**, totalizando **32 bits**, Contendo cada Octeto 8 Bits.
- Cada octeto é separado por um ponto (`.`).

### Exemplo: `192.168.1.1`
- **Primeiro octeto**: `192`
- **Segundo octeto**: `168`
- **Terceiro octeto**: `1`
- **Quarto octeto**: `1`
>(ex.: 192.168.1.1) é mais fácil de entender do que a binária (11000000.10101000.00000001.00000001).

## 🎯 Classes de IP (IPv4)

### Classes e Intervalos
- **Classe A**: 1.0.0.0 a 126.0.0.0.
  - **Uso**: Redes grandes (ex.: grandes corporações).
  - **Máscara padrão**: 255.0.0.0 (/8).
  - **Endereços de rede**: O primeiro octeto define a rede.
  - **Endereços de host**: Os últimos três octetos definem os hosts.
  - **Número de redes**: 126.
  - **Número de hosts por rede**: 16.777.214.

- **Classe B**: 128.0.0.0 a 191.255.0.0.
  - **Uso**: Redes de médio porte (ex.: universidades).
  - **Máscara padrão**: 255.255.0.0 (/16).
  - **Endereços de rede**: Os dois primeiros octetos definem a rede.
  - **Endereços de host**: Os últimos dois octetos definem os hosts.
  - **Número de redes**: 16.384.
  - **Número de hosts por rede**: 65.534.

- **Classe C**: 192.0.0.0 a 223.255.255.0.
  - **Uso**: Redes pequenas (ex.: pequenas empresas).
  - **Máscara padrão**: 255.255.255.0 (/24).
  - **Endereços de rede**: Os três primeiros octetos definem a rede.
  - **Endereços de host**: O último octeto define os hosts.
  - **Número de redes**: 2.097.152.
  - **Número de hosts por rede**: 254.

### Endereço de Rede vs. Endereço de Broadcast
- **Endereço de Rede**:
  - Identifica a rede em si.
  - Todos os bits de host são 0 (ex.: 192.168.1.0).
  - Não pode ser atribuído a um dispositivo.

- **Endereço de Broadcast**:
  - Usado para enviar mensagens para todos os dispositivos na rede.
  - Todos os bits de host são 1 (ex.: 192.168.1.255).
  - Não pode ser atribuído a um dispositivo.

### Loopback
- **Endereço de Loopback**: 127.0.0.1.
  - Usado para testar a pilha de protocolos TCP/IP no próprio dispositivo.
  - Qualquer endereço no intervalo 127.0.0.0/8 é reservado para loopback.
>Host = Equipamentos
---
## 🎯 **Multicast (Classe D)**

### O que é Multicast?
- **Multicast** é uma técnica de transmissão de dados onde um pacote é enviado para **um grupo específico** de dispositivos em uma rede.
- Diferente do **Unicast** (um para um) e do **Broadcast** (um para todos), o Multicast é **um para muitos**.

### Endereços de Classe D
- **Intervalo de IPs**: `224.0.0.0` a `239.255.255.255`.
- **Uso**: Reservado exclusivamente para tráfego multicast.
- **Exemplos comuns**:
  - `224.0.0.1`: Todos os hosts na rede local.
  - `224.0.0.2`: Todos os roteadores na rede local.

### Como Funciona?
1. Um dispositivo envia um pacote para um endereço de grupo multicast.
2. Apenas os dispositivos que **assinaram** esse grupo recebem o pacote.
3. Roteadores e switches encaminham o tráfego multicast apenas para os membros do grupo

---

## ⚠️ Regras de Endereçamento

- **Hostname**: Não se repete na rede.
- **IPv4**: Não se repete na rede.
- **MAC Address**: Não se repete globalmente (Switch se comunica via MAC).
- **0**: Reservado para rede (não usado para IPs).
- **255**: Reservado para broadcast.

---

## 💡 **Testes de Rede com ICMP (Ping)**

### LAN (Rede Local)
- **Ping < 1ms**: Perfeito.
- **Ping = 1ms**: Possível problema de rede.
- **Ping > 1ms**: Problema de rede.

### WAN (Rede de Longa Distância)
- **Ping = 10ms**: Perfeito.
- **Ping > 100ms**: Problema de rede.

---

## 🌐 **Modelo OSI (Open Systems Interconnection)**

O Modelo OSI é um padrão de referência para a comunicação entre sistemas em redes de computadores. Ele divide o processo de comunicação em **7 camadas**, cada uma com uma função específica. Vamos explorar cada uma delas:

- **Camada Um**: Fisica, Cabos, Fibra, Bluetoog, 3G, 4G, 5G, ETC..
- **Camada Dois**: Enlancee, Saindo da camada fisica e indo para o digital, Placa de rede, Switch e Interfaces de Rede
- **Camada Tres**: Camada de Redes, IPv4, IPv6, Roteadores. Converte o MAC em IP e Busca caminhos para enviar as informações da Rede Local Usando o Roteador.
- **Camada Quatro**: Camada de Transporte, TCP, UDP, ICMP.
- **Camada Cinco**: Camada de Sessão, Estabelecer, Finalizar e Manter a Conexão, HTTP (Todos Protocolos tem uma Porta)
- **Camada Seis**: Camada de Apresentação, Verifica Downloads, Aplica Crptografia e Filtra a segurança dos arquivos
- **Camada Sete**: Camada de Aplicação,

## 🌐 **Modelo TCP/IP**

O **Modelo TCP/IP** é um conjunto de protocolos de comunicação usado para conectar dispositivos em redes, incluindo a internet. Ele possui **4 camadas**, cada uma com uma função específica:

- **Camada Um**: Acesso a rede (CA 1 E 2 DO OSI)
- **Camada Dois**: internet.
- **Camada Tres**: Camada Transporde (camada 4 do OSI)
- **Camada Quatro**: camada de Aplicação (Camada 5,6 e 7 do OSI)

---

# Malwares

## 🔭 **Spyware**

- Projetado para rastrear e espionar você, o spyware monitora sua atividade on-line e pode registrar todas as teclas que você pressiona no teclado, bem como capturar quase todos os dados, incluindo informações pessoais confidenciais, como detalhes bancários online. O spyware faz isso modificando as configurações de segurança dos dispositivos.
Muitas vezes, o spyware se junta ao software legítimo ou a cavalos de Troia.

## 📢 **Adwere**

- O adware é frequentemente instalado com algumas versões de software e é projetado para fornecer anúncios automaticamente a um usuário, na maioria das vezes em um navegador da Web. Você sabe quando vê! É difícil ignorar quando você se depara com anúncios pop-up constantes na tela.
É comum o adware vir com spyware.

## 🚪 **BeckDoor**

- Esse tipo de malware é usado para obter acesso não autorizado, ignorando os procedimentos normais de autenticação para acessar um sistema. Como resultado, os hackers podem obter acesso remoto a recursos em uma aplicação e emitir comandos de sistema remoto.
Um backdoor funciona em segundo plano e é difícil de detectar.

## 💸 **Ransomware**

- Malware projetado para manter um sistema de computador, ou os dados incluídos nele, presos até que o pagamento seja feito. O ransomware geralmente funciona criptografando os dados para que você não possa acessá-los.

## 👻 **Scareware**

- Este é um tipo de malware que usa táticas de "medo" para induzi-lo a tomar uma ação específica. O Scareware consiste principalmente em janelas com estilo de sistema operacional que aparecem para alertar que seu sistema está em risco e precisa executar um programa específico para que ele retorne à operação normal.
Se você concordar em executar o programa específico, seu sistema será infectado por malware.

## 🔄 **Rootkit**

- Esse malware foi projetado para modificar o sistema operacional para criar um backdoor, que os invasores podem usar para acessar seu computador remotamente. A maioria dos rootkits utiliza as vulnerabilidades do software para escalonar privilégios e modificar arquivos de sistema.
Também é comum os rootkits modificarem a computação forense do sistema e as ferramentas de monitoramento, o que os torna muito difíceis de ser detectados. Na maioria dos casos, um computador infectado por um rootkit precisa ser apagado e qualquer software necessário reinstalado.

## 🧫 **Virus**

- Um vírus é um tipo de programa de computador que, quando executado, se replica e se anexa a outros arquivos executáveis, como um documento, ao inserir seu próprio código. A maioria dos vírus necessita de ativação do usuário final e pode ser ativada em uma hora ou data específica.
Os vírus podem ser relativamente inofensivos, como aqueles que exibem uma imagem divertida. Ou podem ser destrutivos, como os que modificam ou excluem dados.
Os vírus também podem ser programados para se modificar e evitar a detecção. Agora, a maioria dos vírus é espalhada por unidades de USB, discos ópticos, compartilhamentos de rede  ou e-mail.

## 🐎 **Cavalo de Troia**

- Esse malware realiza operações mal-intencionadas mascarando sua verdadeira intenção. Pode parecer legítimo, mas é, de fato, muito perigoso. Os cavalos de troia exploram os privilégios de usuário e são encontrados com mais frequência em arquivos de imagem, arquivos de áudio ou jogos.
Ao contrário dos vírus, os cavalos de troia não se replicam automaticamente, mas agem como um engodo para enganar o software mal-intencionado e passar por usuários desavisados.

## 🐍 **Worms**

- Esse é um tipo de malware que se replica para se espalhar de um computador para outro. Ao contrário de um vírus, que requer um programa host para ser executado, os worms podem ser executados por si próprios. Além da infecção inicial do host, eles não exigem a participação do usuário e podem se espalhar rapidamente pela rede.
Os worms compartilham padrões semelhantes: eles exploram vulnerabilidades do sistema, têm uma maneira de se propagar e contêm código mal-intencionado (payload) para causar danos a redes ou sistemas de computador.
Os worms são responsáveis por alguns dos ataques mais devastadores na Internet. Em 19 horas, o worm infectou mais de 300.000 servidores em 2001.

---

![image](https://github.com/user-attachments/assets/85104409-349c-4113-8e31-5a352ea88aaa)


## 📂 Anexos

- [IP.pptx](https://github.com/user-attachments/files/18566125/IP.pptx)
- ![image](https://github.com/user-attachments/assets/65c20fd9-1248-44d2-9ef3-09effe68b61b)
- [exercicio.docx](https://github.com/user-attachments/files/18596049/exercicio.docx)
- [OSI.PDF](https://github.com/vaamonde/infra-cisco/blob/main/05-pdf/InfraestruturaDeRedes-02.pdf)

