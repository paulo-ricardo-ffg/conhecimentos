Extensões VSCode
Portuguese (Brazil) Language Pack for Visual Studio Code
Brazilian Portuguese - Code Spell Checker
Translator for VsCode
Cisco Config Highlight
Cisco IOS Syntax
Cisco IOS-XR Syntax


!Comentarios
enable (en)
    !Modo de Configuraçao Global
    configure terminal
        !Configuração do HostName
        hostname sw-02
        !Serviço de Senhas
        service password-encryption
        !Serviço de Marcação de Data e Hora
        service timestamps log datetime msec
        !Desativar a Resolução de Nomes
        no ip domain-lookup
        !Banner da Mensagem do Dia
        banner motd #AVISO: CUIDADO#
        !Segurança do Modo Enable
        enable secret 123@senac
        !Sair de todos os Modos
        end
    !Salvar as Configuraçãos da RAM para NVRAM
    copy running-config startup-config
!Sair do Modo Enable
disable


enable
    !Visualizando as Configurações
    show running-config



