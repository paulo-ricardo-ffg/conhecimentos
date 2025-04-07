# 🧰 Como Fazer RAID no Windows Server

Você pode configurar RAID no Windows Server de duas formas principais:

---

## 1️⃣ RAID via Gerenciamento de Disco (Software RAID)

Essa opção é feita dentro do próprio Windows Server. Funciona para RAID 0, 1 e 5.

### ✅ Requisitos
- Dois ou mais **discos adicionais** (não o disco do sistema).
- Os discos precisam ser convertidos para **dinâmicos**.

### 🧭 Passo a Passo

1. **Abrir o Gerenciamento de Disco**
   - Pressione `Windows + R` → digite `diskmgmt.msc` → Enter.

2. **Converter os discos para Dinâmico**
   - Clique com o botão direito em cada disco → `Converter em disco dinâmico`.

3. **Criar RAID**
   - Clique com o botão direito no espaço **não alocado** → escolha uma das opções:
     - 🟣 **Volume Espelhado (RAID 1)** – segurança com espelhamento.
     - 🟡 **Volume com Paridade (RAID 5)** – segurança + desempenho (3+ discos).

4. **Finalizar o Assistente**
   - Selecione os discos → defina letra de unidade → formate → conclua.
