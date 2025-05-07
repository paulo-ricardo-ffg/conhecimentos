# 📜 Documentação de GPOs para Controle de Rede e Acesso no Windows

## 🔍 Visão Geral
Este documento detalha as principais Políticas de Grupo (GPOs) para controle de rede e acesso em ambientes Windows, incluindo configurações, funcionalidades e procedimentos de teste.

---

## 🌐 GPOs de Controle de Rede

## 🔧 1. Capacidade de habilitar/desabilitar conexão de rede local

### 🛑 Caminho da GPO:
```bash
Configuração do Usuário > 
  Modelos Administrativos > 
    Rede > 
      Conexões de Rede > 
        Capacidade de habilitar/desabilitar uma conexão de rede local
```
### ⚙️ Configuração:

Opção	Efeito
Habilitado	Bloqueia completamente a capacidade de ativar/desativar conexões
Desabilitado	Permite gerenciamento completo das conexões por usuários
Não configurado	Comportamento padrão do sistema (equivalente a desabilitado)

### 💡 Funcionalidade:
Controla o gerenciamento de interfaces de rede (Ethernet/Wi-Fi)

Aplicável a todos os usuários do domínio

Efeito imediato após atualização de política (gpupdate /force)

### 🧪 Procedimento de Teste:

Clique com o botão direito no ícone de rede na bandeja do sistema

Selecione "Abrir configurações de rede e Internet"

Tente desativar/ativar qualquer adaptador de rede

Resultado esperado com GPO ativa: Opções desabilitadas ou ausentes

## 🔒 2. Proibir acesso a configurações avançadas de rede
### 🛑 Caminho da GPO:
```bash
Copiar
Editar
Configuração do Usuário > 
  Modelos Administrativos > 
    Rede > 
      Conexões de Rede > 
        Proibir o acesso ao item de configuração avançada no menu Avançado
```
### ⚙️ Configuração:

Opção	Impacto
Habilitado	Remove completamente o menu de configurações avançadas
Desabilitado	Mantém todas as opções avançadas disponíveis
Não configurado	Padrão do sistema (normalmente desabilitado)

### 💡 Funcionalidade:

Bloqueia acesso à configuração de prioridade de adaptadores

Impede alteração de binding order de protocolos

Restringe configurações de QoS

### 🧪 Procedimento de Teste:

Acesse o Centro de Rede e Compartilhamento

Clique em "Alterar configurações do adaptador"

No menu "Avançado", verifique a opção "Configurações Avançadas..."

Resultado esperado com GPO ativa: Item de menu ausente ou inacessível

## 🛡️ GPOs de Restrição de Acesso
## 🔐 3. Bloqueio de propriedades de conexão de rede
### 🛑 Caminho da GPO:
```bash
Copiar
Editar
Configuração do Usuário > 
  Modelos Administrativos > 
    Rede > 
      Conexões de Rede > 
        Proibir o acesso às propriedades de uma conexão de rede local
```
### ⚙️ Configuração:

Opção	Comportamento
Habilitado	Remove completamente a opção "Propriedades" de todos os menus
Desabilitado	Permite acesso normal às propriedades de conexão
Não configurado	Permite acesso (equivalente a desabilitado)

### 💡 Funcionalidade:

Impede alteração de configurações TCP/IP

Bloqueia acesso a configurações de firewall

Restringe modificação de compartilhamento de arquivos

### 🧪 Procedimento de Teste:

Clique com o botão direito em qualquer adaptador de rede

Verifique a disponibilidade da opção "Propriedades"

Resultado esperado com GPO ativa: Opção completamente removida ou desabilitada

## 🚫 4. Restrição de componentes de rede
### 🛑 Caminho da GPO:
```bash
Copiar
Editar
Configuração do Usuário > 
  Modelos Administrativos > 
    Rede > 
      Conexões de Rede > 
        Proibir o acesso às propriedades de componentes de conexão de rede local
```
### ⚙️ Configuração:

Opção	Efeito
Habilitado	Bloqueia todos os componentes (TCP/IP, Cliente MS, etc.)
Desabilitado	Permite configuração completa de componentes
Não configurado	Permite acesso (equivalente a desabilitado)

### 💡 Funcionalidade:

Impede modificação de configurações IPv4/IPv6

Bloqueia instalação/remoção de componentes de rede

Restringe configuração de DNS alternativo

### 🧪 Procedimento de Teste:

Acesse as propriedades de um adaptador de rede

Tente clicar no botão "Configurar" de qualquer componente

Resultado esperado com GPO ativa: Todos os botões desabilitados

## 🖥️ GPOs de Interface do Usuário
## 🗑️ 5. Remoção do ícone da Lixeira
### 🛑 Caminho da GPO:
```bash
Copiar
Editar
Configuração do Usuário > 
  Modelos Administrativos > 
    Área de Trabalho > 
      Remover o ícone da Lixeira da área de trabalho
```
### ⚙️ Configuração:

Opção	Resultado Visual
Habilitado	Remove permanentemente o ícone (mesmo após reinicialização)
Desabilitado	Mantém o ícone visível
Não configurado	Mantém o ícone (comportamento padrão)

### 💡 Funcionalidade:

Remove completamente o acesso rápido à Lixeira

Não afeta a funcionalidade da Lixeira (apenas o ícone)

Aplicável a todas as novas sessões de usuário

### 🧪 Procedimento de Teste:

Faça logoff e logon novamente

Verifique a área de trabalho

Resultado esperado com GPO ativa: Ícone completamente ausente

## ⛔ 6. Bloqueio do Painel de Controle
### 🛑 Caminho da GPO:
```bash 
Copiar
Editar
Configuração do Usuário > 
  Modelos Administrativos > 
    Painel de Controle > 
      Proibir o acesso ao Painel de Controle
```
### ⚙️ Configuração:

Opção	Nível de Restrição
Habilitado	Bloqueia todos os acessos (incluindo via executar/CMD)
Desabilitado	Permite acesso completo
Não configurado	Permite acesso (equivalente a desabilitado)

### 💡 Funcionalidade:

Bloqueia completamente o painel de controle tradicional

Não afeta o "Settings" moderno do Windows 10/11

Impede acesso a applets individuais (como system.cpl)

### 🧪 Procedimento de Teste:

Execute control no prompt de comando (Win+R)

Tente abrir qualquer item do painel de controle

