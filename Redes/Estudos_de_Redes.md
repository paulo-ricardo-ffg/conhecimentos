# Anotações em Andamento
*O conteúdo deste arquivo pode estar impreciso.*

---

## Termos e Definições

### ISP (Internet Service Provider)
- Sigla para **Provedor de Serviço de Internet**.

### RT (Router)
- Sigla para **Roteador**.

---

## Redes Locais e Ampla Escala

### LAN (Local Area Network)
- **Definição**: Rede que cobre uma área geográfica pequena (ex.: residência, escritório, escola).
- **Características**:
  - Alta velocidade de transmissão.
  - Baixo custo de instalação e manutenção.
  - Conecta computadores e dispositivos (impressoras, scanners, servidores) em um espaço limitado.
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

**LAN x WAN**  
![LAN e WAN](https://github.com/user-attachments/assets/8af1df8e-3ca6-41b5-9886-d18b55534095)

---

## Protocolo DHCP
- **Dynamic Host Configuration Protocol (DHCP)**:
  - Atribui automaticamente endereços IP e configurações de rede (ex.: máscara de sub-rede, gateway, DNS).
  - Simplifica a administração de redes.
  - **Benefícios**:
    - Automatiza a atribuição de IPs.
    - Evita conflitos de IP.
    - Fornece configurações adicionais, como DNS e gateway.

---

## SLA (Service Level Agreement)
- **Contrato de Nível de Serviço**:
  - Define expectativas entre fornecedor e cliente.
  - Estabelece metas de desempenho, prazos e qualidade.

---

## Modos de Comunicação
- **Simplex**: Comunicação unidirecional (um envia, o outro recebe).
- **Half Duplex**: Comunicação bidirecional, mas apenas um envia por vez.
- **Full Duplex**: Comunicação bidirecional simultânea (ambos enviam e recebem ao mesmo tempo).
---
**Modos de Comunicação**  
![Simplex, Half Duplex, Full Duplex](https://github.com/user-attachments/assets/2a44e5ec-2919-436c-a4ff-e1668310103e)
---

## Endereçamento de IP

### IPv4
- **Características**:
  - Suporta multicast, broadcast e unicast.
  - Representado em formato decimal.
  - Mais suscetível a ruído em redes.

### IPv6
- **Características**:
  - Não utiliza broadcast.
  - Reduz ruídos na rede.
  - Representado em formato hexadecimal.

---

## IEEE
- **Instituto de Engenheiros Eletricistas e Eletrônicos**:
  - Responsável pela padronização de protocolos de rede em todo o mundo.

[IP.pptx](https://github.com/user-attachments/files/18566125/IP.pptx)

---
Classe A: Começa de 1 a 126.
Classe B: Começa de 128 a 191.
Classe C: Começa de 192 a 223.
---
Professor ramos tcpip
---
Hostname não se repete, Dois dispositivos com o mesmo nome.
IPv4 não se repete, Dois dispositivos com o mesmo Endereço.
MAC não se repete, Dois dispositivos distintos com o mesmo endereço fisico.(Switch se comunica via MAC)
0 = rede não se usa pra IP
255 = Broadcast (normalmente é Broadcast e rede não se comunica em Broadcast)

