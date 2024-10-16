Conceitos Básicos de Redes no Windows XP:
```
Host Name (Nome do Host):
Refere-se ao nome da sua máquina na rede, identificando-a de forma única.

IP (Endereço IP):
Comparável ao "CPF" da máquina, é um número que identifica sua máquina dentro da rede.

MAC Address:
Similar ao "RG", é um número único que identifica a placa de rede do seu computador

Cliente de Rede:
Permite que você utilize os recursos da rede, como acesso a outros computadores.

Compartilhamento de Arquivos e Impressoras para Rede:
Funcionalidade que possibilita compartilhar arquivos e impressoras com outros computadores na mesma rede.

Agendador de Pacotes QoS:
Melhora a qualidade de envio de arquivos pela rede. Ele deve ser ativado junto com as configurações do TCP/IP.

TCP/IP (Protocolo de Controle de Transmissão/Protocolo de Internet):
Permite configurar as propriedades de rede, como o endereço IP, máscara de sub-rede e gateway.

Gateway (Roteador):
O "IP" do seu roteador, que serve como o caminho entre seu computador e a internet.

ICMP (Protocolo de Mensagens de Controle da Internet):
Facilita a comunicação entre computadores na rede, permitindo a realização de diagnósticos básicos, como o comando "ping".
```

Teclas Usadas em Rede
```
Barra Invertida "\" na Rede:
Para acessar recursos em rede, usa-se a barra invertida "\" em vez da barra tradicional "/".
```

Comandos de Rede no Windows XP:
```
ipconfig /all:
Mostra todas as configurações de rede do computador.

hostname:
Exibe o nome da máquina.

net view:
Exibe os computadores conectados à rede.

net send:
Envia uma mensagem para um computador específico na rede. Para isso, o serviço "mensagem" precisa estar ativado.

*net send :
Envia uma mensagem para todos os computadores na rede.

tracert [nomedosite.com]:
Mostra a rota que o computador faz até chegar ao site indicado.
```

Alterar o Hostname:
Clique com o botão direito na pasta.
Selecione Propriedades.
Clique na aba Compartilhamento.
Marque a opção Compartilhar esta pasta na Rede.
Observação: Para o compartilhamento funcionar corretamente, o computador precisa ter um endereço IP fixo, configurado nas propriedades do protocolo IPv4 (TCP/IP).

Mapeamento de Pastas na Rede:
Clique com o botão direito na pasta compartilhada e selecione Mapear Unidade.
Escolha uma letra para a unidade mapeada.
Agora, essa pasta aparecerá em "Meu Computador" como uma "Unidade de Rede", com a letra que você escolheu.
Compartilhamento de Pasta Oculta:
Para criar uma pasta compartilhada secreta, adicione o símbolo "$" no final do nome da pasta. Exemplo: \\192.168.1.10\segredo$.
Somente quem souber o caminho completo poderá acessar essa pasta.

Compartilhamento de Impressoras na Rede:
O processo é o mesmo do compartilhamento de pastas. A impressora será visível e acessível para outros computadores na rede.

Acesso Remoto (MSTSC):
Pressione Win + Pause.
Vá até a aba Remoto e permita que usuários se conectem remotamente ao computador.
Depois, abra o MSTSC, digite o IP da máquina que deseja acessar, e insira o nome de usuário e senha. Pronto! Agora você está conectado ao computador remoto.
Teste de Configurações e Comandos de Rede:
Instale um novo Windows XP (se for clonar, troque o MAC Address).
Configure o Hostname como "PCTime".
Defina o IP como 192.168.1.30.
Teste o ping para os IPs 192.168.1.10 e 192.168.1.20.
Compartilhe a pasta TIME com permissão de leitura.
Compartilhe a pasta RIVAL com permissão de leitura e gravação.
Mapeie a pasta TIME como unidade T: e RIVAL como R:.
Crie um compartilhamento oculto chamado JOGO.
Compartilhe uma impressora Epson no PCTime e acesse-a de outro computador na rede.
Envie uma mensagem com net send para todos na rede com a frase: "SEXTOU!!!".
Esses passos irão garantir que você esteja pronto para configurar redes e realizar testes básicos no Windows XP!
