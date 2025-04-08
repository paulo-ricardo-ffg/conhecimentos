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
   - 
### 🔵 Volume Distribuído (RAID 0)  
🏎️ **Foco:** Desempenho Máximo

**O que faz?**  
Divide os dados em blocos e os grava simultaneamente em dois ou mais discos (**striping**). Isso aumenta muito a velocidade de **leitura e escrita**.

#### ✅ Vantagens:
- **Alto desempenho** – ideal para tarefas que exigem velocidade (edição de vídeo, jogos, cache).
- **100% da capacidade é utilizada**  
  *(ex: 2×1 TB = 2 TB utilizáveis)*

#### ❌ Desvantagens:
- **Zero tolerância a falhas** – se um disco falhar, **todos os dados são perdidos**.
- **Não indicado para dados importantes ou sensíveis**.

**🔢 Mínimo necessário:** 2 discos  
**📦 Capacidade útil:**  
`soma de todos os discos`  
*Exemplo: 3×500 GB = 1,5 TB utilizáveis*
![image](https://github.com/user-attachments/assets/bcbdabbc-789d-4799-8d35-5c0691a5802d)



### 🟣 Volume Espelhado (RAID 1)  
🔒 **Foco:** Segurança e Redundância  

**O que faz?**  
Cria uma cópia idêntica dos dados em dois discos (**espelhamento**).

#### ✅ Vantagens:
- Alta **tolerância a falhas** – se um disco falhar, o outro continua funcionando.
- Boa opção para **dados críticos**.

#### ❌ Desvantagens:
- Perde-se **50% da capacidade total**  
  *(ex: 2×1 TB = 1 TB utilizável)*.
- Não melhora o desempenho de gravação.

**🔢 Mínimo necessário:** 2 discos
![image](https://github.com/user-attachments/assets/76b8e65e-c354-4aa2-b6e7-f5af67eb16f5)


---

### 🟡 Volume com Paridade (RAID 5)  
⚖️ **Foco:** Equilíbrio entre Desempenho e Segurança  

**O que faz?**  
Distribui os dados e a **paridade** (informação de correção) entre todos os discos.

#### ✅ Vantagens:
- **Tolerância a falhas** – suporta falha de **1 disco** sem perda de dados.
- **Melhor uso do espaço** comparado ao RAID 1.
  *(ex: 4×1 TB = 3 TB utilizável)*.

#### ❌ Desvantagens:
- Desempenho de **escrita mais lento** devido ao cálculo de paridade.
- **Reconstrução lenta e arriscada** em discos muito grandes.

**🔢 Mínimo necessário:** 3 discos  
**📦 Capacidade útil:**  
`(n − 1) × capacidade do menor disco`  
*Exemplo: 5×4 TB =  16TB utilizáveis*
![image](https://github.com/user-attachments/assets/950a5dc1-7e43-4414-b7be-4e018c47bff5)


