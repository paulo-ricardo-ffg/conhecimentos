Introdução de Redes em Windows XP'
 _ Ferramentas;
		<Novo>
	_ Nome e Sistema Operacional:
		Nome: LinuxMint21
		Pasta da Máquina: (deixar o padrão do sistema) 
		Tipo: Linux
		Versão: Ubuntu (64-bit)
		<Próximo>
	_ Tamanho da memória:
		Tamanho: 4096MB
		<Próximo>
	_ Disco Rígido:
		Criar um novo disco rígido virtual agora
		<Criar>
	_ Tipo de arquivo de disco rígido
		VDI (VirtualBOX Disk Image)
		<Próximo>
	_ Armazenamento em disco rígido físico
		Dinamicamente alocado
		<Próximo>
	_ Localização e tamanho do arquivo
		Localização: (deixar o padrão do sistema)
		Tamanho do disco: 50GB
		<Criar>
Host Name = nome da maquina 
 
IP = CPF um numero que identifica a minha maquina 
 
MAC ADRESS = RG um numero único que identifica minha placa de rede 
 
o Host Name i o MAC Adress tem quer ser diferentes para n dar incompatibilidade na rede (O MAC Adress só tem q ser alterado em maquinas virtuais já q em maquinas físicas é impossível ter o mesmo numero) 
 
Cliente rede = Permite quer você use a rede  
 
Compartilhamento de arquivos e impressora pra rede = Compartilhar arquivos pela rede 
 
Agendador de pacote QOS = Melhorar os arquivos enviador pela rede (Deve ser ativo no mesmo local do TCP/IP 
 
TCP/IP = Editar as propriedades da rede 
 
ICMP = Permitir computadores a fazer coisas básicas em outro por rede 
 
Em rede se usa Contra-Barra ‘’\’’ para acessar os locais 
em vez da barra ‘’/’’ tradicional 
 

Gateway = O ‘’ip’’ do roteador que se comunica com a internet , ele é o caminho do seu computador a internet 
 
Comandos para Redes 
ipconfig /all  (Ver as configurações de rede) 
hostname (Ver nome da Máquina) 
net view (Ver computadores na Rede) 
 
net send (enviar uma mensagem para um pc na rede para outro) 
ative o serviço ‘’mensagem’’ na área dos serviços do windows 
 
net send * (enviar uma mensagem para todos pcs na rede) 
 
Tracert ‘’nomedosite.com’’ (Rastrear rota do seu computador até o site) 
 
 
 
 
 
 
 
 
 
Alterar o Hostname 
Interface gráfica do usuário, Texto, Aplicativo

Descrição gerada automaticamente 
 
 
 
 
 
 

Clique com botão direito na pasta 
Clique em Propriedades 
Interface gráfica do usuário, Texto, Aplicativo, Email

Descrição gerada automaticamente 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
Em Propriedades clique em Compartilhamento 
Compartilhar esta pasta na Rede 
Interface gráfica do usuário, Texto, Aplicativo

Descrição gerada automaticamente 
 

 

 

 

 
 
Para que esse processo funcione a máquina deve ter o IP fixo em Propriedades de protocolo IP V4 TCP/IP (Diferente das outras maquinas na rede) 
 
 
 
 
 
 
 
 

 

 

 

 

 

 

 
 
Mapear Pasta na Rede 
Na pasta que esta sendo compartilhada clique com botão direito em ‘’Mapear Unidade’’ 

Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 
 
 

Selecione a Letra da Unidade  
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 
 
 

Agora com a Unidade de Rede mapeada ela aparecerá em Meu Computador como ‘’Unidade de Rede’’ com a letra escolhida 
 

 

Caso queira compartilhar uma pasta secreta coloque o símbolo de $ no final do nome 
 
Texto

Descrição gerada automaticamente 
 
 
 
 
 
 
 
assim só quem conhecer o caminho para a pasta conseguira acessar pela rede 
Digitando exemplo \\192.168.1.10\segredo$ 
 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 
 
Para Compartilhar uma impressora na rede o Processo é o mesmo da pasta 
 
Liberando Acesso Remoto (MSTSC) 
 
Teclado de computador

Descrição gerada automaticamente 
Win+Pause 
 
Remoto e Permitir Que Usuarios de conectem remotamente a este computadorInterface gráfica do usuário, Texto, Aplicativo, Email

Descrição gerada automaticamente 
 
Após isso acesse o MSTSC  
Interface gráfica do usuário

Descrição gerada automaticamente 
 
Digite o IP do computador que deseja acessar 
 
Tela de celular com publicação numa rede social

Descrição gerada automaticamente 
 
Após isso digite o Nome do usuario e a senha dele 
 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 
e pronto agora voce esta no computador remoto 
Interface gráfica do usuário, Gráfico de mapa de árvore

Descrição gerada automaticamente 
 
PROVA (1 Print para cada Item) 

Instalar mais 1 Windows XP (não esquecer de Trocar o MAC se clonar) 
Tela de computador

Descrição gerada automaticamente 

Hostname PCTime 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 

Ip – 192.168.1.30 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 

Testar o Ping com os PCs 192.168.1.10 e 192.168.1.20 
Tela de computador com jogo

Descrição gerada automaticamenteTela de computador com jogo

Descrição gerada automaticamente 

Compartilhar a Pasta TIME somente Leitura 
Interface gráfica do usuário

Descrição gerada automaticamente 

Compartilhar a Pasta RIVAL com Leitura e gravação 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 

Mapear Time em T: e Rival em R: 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 

Criar uma compartilhamento Oculto JOGO 
Interface gráfica do usuário

Descrição gerada automaticamente 

Compartilhar uma Impressora Epson no PCTime 
Tela de computador com texto preto sobre fundo branco

Descrição gerada automaticamente 

Acessar a Impressora de um outro PC na REDE 
Interface gráfica do usuário, Aplicativo

Descrição gerada automaticamente 

Enviar uma mensagem NET SEND para Todos SEXTOU !!! 
Tela de computador com jogo

Descrição gerada automaticamente 

Testar os Comandos de REDE 
Tela de computador com texto preto sobre fundo azul

Descrição gerada automaticamente 

Bom final de semana  

 
