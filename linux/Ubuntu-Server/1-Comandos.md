# 🖥️ Comandos do Ubuntu Server

Lista de comandos essenciais para administração do **Ubuntu Server**, suas funções e exemplos de uso.

## 📡 Configuração de Rede

- **`ip address show`** → Exibe os endereços IP e interfaces de rede ativas.
  
  **Exemplo:**
  ```sh
  ip address show
  ```

- **`ssh <usuário>@<ip>`** → Conecta a um servidor remoto via SSH.
  
  **Exemplo:**
  ```sh
  ssh senac@10.26.44.30
  ```

## 🔄 Gerenciamento de Pacotes (APT)

- **`sudo apt update`** → Atualiza a lista de pacotes disponíveis nos repositórios.

  ```sh
  sudo apt update
  ```

- **`sudo apt list --upgradable`** → Lista os pacotes que podem ser atualizados.

  ```sh
  sudo apt list --upgradable
  ```

- **`sudo apt upgrade`** → Atualiza os pacotes instalados para suas versões mais recentes.

  ```sh
  sudo apt upgrade
  ```

- **`sudo apt dist-upgrade`** → Atualiza pacotes e resolve automaticamente dependências alteradas.

  ```sh
  sudo apt dist-upgrade
  ```

- **`sudo apt full-upgrade`** → Similar ao `dist-upgrade`, mas pode remover pacotes desnecessários para concluir a atualização.

  ```sh
  sudo apt full-upgrade
  ```

- **`sudo apt autoremove`** → Remove pacotes instalados automaticamente que não são mais necessários.

  ```sh
  sudo apt autoremove
  ```

- **`sudo apt autoclean`** → Remove pacotes antigos do cache local, liberando espaço.

  ```sh
  sudo apt autoclean
  ```

- **`sudo apt clean`** → Remove todos os arquivos de pacotes baixados do cache local.

  ```sh
  sudo apt clean
  ```

## 🔄 Reboot do Servidor

- **`sudo reboot`** → Reinicia o sistema de forma segura.

  ```sh
  sudo reboot
  ```

