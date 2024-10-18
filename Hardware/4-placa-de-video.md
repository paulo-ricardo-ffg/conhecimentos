# Placa de Vídeo

A placa de vídeo é composta por diversos componentes, e para compreendê-la é essencial entender melhor cada um deles. Embora existam várias marcas que vendem placas de vídeo, os chips gráficos são geralmente fornecidos por NVIDIA e AMD. Essas empresas vendem os chips, enquanto as marcas (chamadas fabricantes) produzem os PCBs (placas de circuito impresso) com base no design de referência fornecido pelos desenvolvedores dos chips.

## Chip Gráfico (Graphics Processing Unit - GPU)

Também conhecido como GPU, é a unidade central responsável por processar e renderizar gráficos. Ele aloca e gerencia todos os componentes essenciais.

### Componentes essenciais do Chip Gráfico (GPU)

- **Núcleos de Processamento:**
  - NVIDIA: CUDA Cores
  - AMD: Stream Processors

- **Núcleos de Ray Tracing:**
  - NVIDIA: RT Cores
  - AMD: Ray Accelerators

- **Unidades de Texture Mapping (TMUs):**
  - NVIDIA e AMD: TMUs

- **Render Output Units (ROPs):**
  - NVIDIA e AMD: ROPs

- **Memória de Vídeo (VRAM):**
  - NVIDIA e AMD: GDDR5, GDDR6, GDDR6X

- **Controlador de Memória:**
  - NVIDIA e AMD: Controlador de Memória

- **Cache:**
  - NVIDIA e AMD: Cache L1 e L2

- **Unidades de Processamento de Vídeo:**
  - NVIDIA: NVENC
  - AMD: Advanced Media Framework (AMF) (O AMF é uma API que permite a codificação de vídeo em GPUs AMD, mas não é um codificador físico como o NVENC.)

- **Interface de Conexão:**
  - NVIDIA e AMD: PCI Express

- **Suporte a Tecnologias Gráficas:**
  - NVIDIA: DLSS, G-Sync, entre outras
  - AMD: FSR, FreeSync, entre outras

## Litografia em Chips Gráficos

A litografia refere-se ao processo de fabricação que determina o tamanho dos transistores no silício do chip gráfico. Quanto menor o tamanho dos transistores (medido em nanômetros, nm), melhor é o desempenho do chip.

- **Menos Calor**: Transistores menores dissipam menos calor, pois consomem menos energia durante a operação. Por exemplo, chips fabricados com litografias de 7nm ou 5nm tendem a gerar menos calor em comparação com os de 14nm.
- **Maior Performance**: A redução do tamanho dos transistores permite que mais deles sejam acomodados em um chip, aumentando a capacidade de processamento.
- **Maior Eficiência**: Chips com litografia menor operam com tensões mais baixas, o que significa que consomem menos energia e são mais eficientes energeticamente.

#### Exemplos de Litografia

- **12nm**: Utilizado em várias gerações de GPUs, oferecendo um bom equilíbrio entre desempenho e eficiência.
- **7nm**: Visto em GPUs de última geração, proporcionando uma melhoria significativa no desempenho e na eficiência energética em relação aos chips de 14nm.
- **5nm**: Representa o estado da arte em tecnologia de fabricação, oferecendo desempenho excepcional e eficiência máxima, como na RTX 4090.
- **2nm**: Atualmente uma tecnologia em projeto da Apple, prevista para sair apenas em 2025, apenas em processadores para iPad e não em placas de vídeo.

### Função dos Transistores nas GPUs

- **Processamento Paralelo**: As GPUs modernas contêm bilhões de transistores que permitem o processamento simultâneo de milhares de operações. Isso é crucial para lidar com as demandas dos gráficos modernos em alta resolução e jogos intensivos.
- **Cálculos de Ponto Flutuante**: Transistores facilitam cálculos de ponto flutuante, que são essenciais para renderização 3D, física em jogos e algoritmos complexos usados em inteligência artificial.

## CUDA Cores (NVIDIA) ou Stream Processors (AMD)

São os núcleos de processamento responsáveis por realizar operações em paralelo nas placas de vídeo, São parecidos com os nucleos dos Processadores, porem tendo uma Frequencia menor mas tendo um numero maior de nucleos.Eles desempenham um papel fundamental em tarefas como renderização de jogos, modelagem em 3D e cálculos complexos em inteligência artificial (IA). Esses núcleos permitem que a GPU execute múltiplas operações simultaneamente, aumentando significativamente a eficiência e o desempenho em aplicações que exigem alto poder computacional.

## GPU Clock

O **GPU Clock** (ou clock base) é a frequência em que a GPU opera em condições normais. Medido em MHz ou GHz, ele indica quantos ciclos por segundo os núcleos da GPU conseguem realizar. Um clock mais alto permite que a GPU processe mais dados por segundo, resultando em um aumento no desempenho gráfico ou computacional.

## Boost Clock

O **Boost Clock** é uma frequência mais alta que a GPU pode atingir temporariamente quando há uma demanda extra de processamento e as condições de temperatura e energia permitem. O **Boost Clock** ocorre de forma automática, ajudando a GPU a entregar mais desempenho em cenários de alta carga, como jogos intensivos ou tarefas de renderização 3D.
"""

## ROPs (Render Output Units)

- **Função**: Processam a fase final da renderização de imagens, lidando com tarefas como anti-aliasing e blending, que garantem qualidade visual na saída de pixels.
- **Desempenho**: Mais ROPs melhoram o desempenho em resoluções altas, pois permitem processar mais pixels simultaneamente.

## TMUs (Texture Mapping Units)

- **Função**: Aplicam texturas a superfícies 3D, manipulando como as texturas são mostradas e mapeadas em modelos.
- **Desempenho**: Um maior número de TMUs permite o processamento simultâneo de mais texturas, enriquecendo os detalhes gráficos.

#### Resumo

ROPs e TMUs trabalham juntos para garantir renderização gráfica eficiente e de alta qualidade, influenciando diretamente o desempenho em jogos e aplicações gráficas exigentes.

## VRAM (Video Random Access Memory)

A VRAM (Video Random Access Memory) é um tipo específico de memória de acesso aleatório otimizada para armazenar dados gráficos.

#### Função da VRAM

- **Armazenamento de Dados Gráficos**: Armazena texturas, sombras, modelos 3D e outros dados necessários para renderizar imagens em tempo real.
- **Acesso Rápido**: É otimizada para transferências de dados rápidas, permitindo que a GPU acesse rapidamente as informações necessárias para a renderização.
- **Desempenho**: Uma maior quantidade de VRAM permite que a placa de vídeo manipule texturas de maior resolução e cenários mais complexos, resultando em melhor desempenho em jogos e aplicações gráficas.

## Tipos de GDDR
Graphics Double Data Rate (GDDR), ou Taxa de Dados Dupla para Gráficos, é um tipo especializado de VRAM (Video Random Access Memory) que permite altas velocidades de transferência de dados. Essa tecnologia é essencial para melhorar o desempenho em jogos e aplicações gráficas intensivas, garantindo uma experiência visual fluida e responsiva.

- **GDDR5**
  - **Largura de Banda**: Até 256 GB/s (dependendo da implementação).
  - **Velocidade**: Frequências típicas variando de 4 Gbps a 8 Gbps por pino.
  - **Consumo de Energia**: Em torno de 1.5V.
  - **Uso**: Comum em placas de vídeo mais antigas e consoles de jogos, como o PlayStation 4 e o Xbox One.
  - **Características**: Melhorada em relação à DDR3, com maior largura de banda e velocidade, mas limitante para jogos e aplicativos modernos.

- **GDDR6**
  - **Largura de Banda**: Até 512 GB/s.
  - **Velocidade**: Frequências típicas variando de 12 Gbps a 16 Gbps por pino.
  - **Consumo de Energia**: Em torno de 1.35V, oferecendo melhor eficiência energética.
  - **Uso**: Encontrada em placas de vídeo modernas, como a NVIDIA GeForce RTX 3000 e AMD Radeon RX 6000.
  - **Características**: Oferece maior largura de banda e eficiência em comparação com GDDR5, permitindo desempenho melhorado em jogos e aplicativos gráficos.

- **GDDR6X**
  - **Largura de Banda**: Até 1 TB/s.
  - **Velocidade**: Frequências em torno de 19 Gbps por pino e superiores.
  - **Consumo de Energia**: Semelhante ao GDDR6, mas pode variar dependendo da implementação.
  - **Uso**: Comum em placas de vídeo de alto desempenho, como a NVIDIA GeForce RTX 3080 e RTX 3090.
  - **Características**: Utiliza a tecnologia de modulação PAM4 (Pulse Amplitude Modulation) para dobrar a largura de banda, permitindo maior eficiência e desempenho em aplicações gráficas intensivas.
  
 - ### Função
  - A função do **Graphics Double Data Rate (GDDR)** é fornecer uma interface de memória que permite a transferência de dados em alta velocidade entre a GPU (Unidade de Processamento Gráfico) e a memória de vídeo, otimizando o desempenho em aplicações gráficas e jogos.


## Largura de Banda

Se refere à quantidade de dados que podem ser transferidos entre a memória (como VRAM) e o processador gráfico (GPU) por segundo.

#### Resumo

- **GDDR5**: Velocidade e largura de banda mais baixas, adequada para placas mais antigas.
- **GDDR6**: Melhor desempenho e eficiência energética, ideal para jogos e aplicações modernas.
- **GDDR6X**: Alto desempenho e largura de banda, otimizada para placas mais avançadas e exigentes.

## Arrefecimento

### Sistema de Resfriamento

O sistema de resfriamento de uma placa de vídeo desempenha um papel crucial no desempenho e na durabilidade do hardware. Manter a GPU resfriada garante que ela funcione em seu potencial máximo, mesmo sob cargas intensas. Abaixo estão os principais fatores a serem considerados ao avaliar o sistema de resfriamento de uma placa de vídeo:

### 1. Quantidade de Ventoinhas (Fans)

A quantidade de ventoinhas em uma placa de vídeo influencia diretamente o fluxo de ar e a capacidade de dissipação de calor. Modelos com duas ou três ventoinhas geralmente têm melhor desempenho térmico, dissipando o calor de maneira mais eficiente durante tarefas pesadas, como jogos ou renderização 3D. Mais ventoinhas também ajudam a evitar o superaquecimento.

### 2. Tamanho do Dissipador

O dissipador é responsável por absorver o calor gerado pela GPU e distribuí-lo para que seja dissipado pelo ar movimentado pelas ventoinhas. Dissipadores maiores possuem uma área de superfície maior, o que melhora a capacidade de resfriamento. Um dissipador robusto é essencial para manter a temperatura da GPU estável, especialmente em cenários de uso intenso.

### 3. Qualidade das Ventoinhas (Fans)

A qualidade das ventoinhas é tão importante quanto a quantidade. Ventoinhas de alta qualidade oferecem um equilíbrio entre fluxo de ar eficiente e níveis de ruído reduzidos. Além disso, ventoinhas mais duráveis garantem um melhor resfriamento ao longo do tempo, minimizando falhas ou perda de eficiência.

### 4. Quantidade e Qualidade dos Heat Pipes

Os heat pipes são componentes críticos no sistema de resfriamento. Eles são tubos de condução térmica que transferem o calor diretamente da GPU para o dissipador. O calor é absorvido pela base da GPU e transportado pelos heat pipes para ser dissipado pelas ventoinhas. Quanto mais heat pipes a placa tiver, e quanto maiores eles forem, melhor será a capacidade de dissipar calor rapidamente e manter a GPU em temperaturas mais baixas.

### Como funcionam os heat pipes:

Os heat pipes contêm um fluido interno que evapora ao entrar em contato com o calor da GPU. Esse vapor é transferido através do tubo até uma área mais fria, onde ele condensa e libera o calor para o dissipador. Esse processo cíclico de evaporação e condensação é extremamente eficiente na remoção de calor.

### 5. Material do Dissipador

O material do dissipador influencia diretamente a eficiência térmica. Dissipadores de alumínio são comuns e mais acessíveis, mas dissipadores feitos de cobre ou que utilizam bases de cobre têm uma condutividade térmica superior, o que permite que o calor seja transferido de forma mais eficiente para as ventoinhas.

### 6. Tecnologia de Ventoinhas (Fan Stop ou Zero RPM)

Algumas placas de vídeo possuem tecnologias de resfriamento inteligentes, como o Fan Stop ou Zero RPM, que desligam as ventoinhas quando a GPU está em temperaturas baixas (por exemplo, quando não está sob carga). Isso ajuda a prolongar a vida útil das ventoinhas, reduzir o ruído e economizar energia, já que as ventoinhas só funcionam quando realmente necessário.

#Tecnologias

## Tecnologias AMD e Nvidia
[NVIDIA](https://www.nvidia.com/en-us/geforce/graphics-cards/40-series/)  [AMD](https://www.amd.com/en/products/specifications/graphics.html)
1. **Ray Tracing**
   - NVIDIA: RTX (Melhor)
   - AMD: RDNA 2 e RDNA 3
   - **Como Funciona**: Simula a física da luz para gerar reflexos e sombras realistas em tempo real.
   - **Parte Física**: Sim. Realizado por RT Cores dedicados nas GPUs da NVIDIA e Ray Accelerators nas GPUs AMD.

2. **Deep Learning Super Sampling (DLSS)**
   - NVIDIA: DLSS (Melhor)
   - AMD: FidelityFX Super Resolution (FSR)
   - **Como Funciona**: Utiliza inteligência artificial para aumentar a resolução de imagens, melhorando o desempenho e a qualidade gráfica.
   - **Parte Física**: Não. Ambas as tecnologias são implementadas por meio de software, sem componentes físicos dedicados.

3. **FreeSync e G-Sync**
   - NVIDIA: G-Sync (Melhor)
   - AMD: FreeSync
   - **Como Funciona**: Sincroniza a taxa de atualização do monitor com a taxa de quadros da GPU, eliminando o screen tearing e melhorando a suavidade.
   - **Parte Física**: Sim. G-Sync requer um módulo de hardware específico, enquanto o FreeSync é baseado em tecnologia VESA e pode ser implementado em monitores compatíveis.

4. **Multi-GPU**
   - NVIDIA: SLI (Scalable Link Interface)
   - AMD: CrossFire
   - **Como Funciona**: Permite que múltiplas GPUs trabalhem juntas para aumentar o desempenho em jogos e aplicações.
   - **Parte Física**: Sim. Ambos exigem placas-mãe compatíveis e conectores para funcionar corretamente.

5. **Controle de Performance**
   - NVIDIA: NVIDIA Control Panel
   - AMD: Radeon Software
   - **Como Funciona**: Permitem ajustes de performance e qualidade gráfica para otimizar a experiência do usuário em jogos e aplicações.
   - **Parte Física**: Não. Ambos são interfaces de software.

# Dicas para Escolher uma Placa de Vídeo

### 1. **GARANTIA**
  - Fique atento à garantia oferecida pela loja e pelo fabricante. Em alguns casos, é necessário registrar o produto no site do fabricante após a compra para que a garantia seja válida. Geralmente, garantias de qualidade para placas de vídeo costumam ter uma duração de 3 anos.

### 2. **Construção**
   - Escolha uma placa de vídeo com uma construção de qualidade. Dependendo do modelo, não é recomendado optar por uma que tenha apenas um ventilador ou que possua poucos heatpipes.

### 3. **Chip Gráfico (GPU)**
  - Compare as GPUs da NVIDIA e AMD. Verifique a arquitetura, número de núcleos (CUDA Cores ou Stream Processors) e recursos do seu interesse como o Ray Tracing.

### 4. **Memória de Vídeo (VRAM)**
  - Verifique a quantidade de VRAM disponível (ex: 4GB, 8GB, 16GB).

### 5. **Tipo de VRAM (GDDR)**
  - Prefira placas com GDDR6 ou GDDR6X para maior desempenho.

### 6. **Largura de Banda**
  - Uma maior largura de banda (ex: GDDR5 vs. GDDR6) permite transferências de dados mais rápidas entre a GPU e a memória, melhorando a performance geral.

### 7. **Litografia e Eficiência Energética**
  - Observe o processo de fabricação (em nanômetros). Chips com litografias menores (5nm, 7nm) tendem a ser mais eficientes e gerar menos calor.

### 8. **Compatibilidade com Tecnologia Gráfica**
  - Verifique se a placa suporta tecnologias como Ray Tracing, DLSS (NVIDIA) ou FSR (AMD), que podem melhorar a qualidade gráfica e desempenho.

### 9. **Uso Pretendido**
  - **Jogos**: Se você pretende jogar, verifique a performance em jogos que você deseja jogar.
  - **Trabalho Gráfico**: Para design gráfico, edição de vídeo ou modelagem 3D, considere GPUs que tenham melhor desempenho em aplicações específicas.

### 10. **Tamanho e Conexões**
   - Confirme se a placa cabe no seu gabinete e se as conexões (PCIe) são compatíveis com a sua placa-mãe.

### 11. **Suporte a Monitores**
   - Verifique se a placa suporta a resolução e taxa de atualização do seu monitor (ex: 4K, 144Hz).

### 12. **Orçamento**
   - Defina um orçamento e compare as opções dentro da faixa de preço.

### 13. **Avaliações e Comparações**
   - Leia análises de especialistas e usuários sobre o desempenho real da placa em jogos e aplicações que você pretende usar.



# Consulte informações em
[NVIDIA](https://www.nvidia.com/en-us/geforce/graphics-cards/40-series/) 

[AMD](https://www.amd.com/en/products/specifications/graphics.html)

[TechPowerUP](https://www.techpowerup.com/gpu-specs/) 
