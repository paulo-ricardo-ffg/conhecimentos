
# Introdução ao Vim

O Vim é um editor de texto com mais comandos, mais elaborado e mais completo do que o Nano.

## Abrindo Arquivos

Para abrir um arquivo no Vim, use o seguinte comando:

```bash
vim nome_do_arquivo.txt
```

## Comandos Básicos

Todos os comandos no Vim devem começar com `:`.

- `:set number`: Adiciona a numeração das linhas.
- `:esq + Shift + =`: Entra no modo de comando.
- `i` ou `Insert`: Entra no modo de inserção para editar o arquivo. Ao pressionar duas vezes, você entra no modo de substituição; ao escrever, ele substitui o texto existente caractere por caractere.
- `Enter`: Pula uma linha.

## Comandos para Sair

- `:q!`: Sair sem salvar.
- `:w`: Salvar o arquivo.
- `:w nome_do_arquivo`: Salvar como um novo arquivo (exemplo: exemplo.txt).
- `:wq`: Sair salvando, caso tenha havido uma alteração.
- `:x`: Sair e salvar.
- `:enew`: Cria um novo arquivo sem sair do Vim.
- `:e.`: Listar arquivos do diretório.
- `:e nome_do_arquivo`: Abre diretamente o arquivo.
- `$`: Vai para o final do arquivo.
- `0`: Vai para o início do arquivo.
- `(número da linha)`: Vai para a linha especificada.

## Atalhos de Teclado

- `End`: Vai para o último caractere da linha.
- `Home`: Vai para o início da linha.
- `Ctrl + setas`: Navega pelo arquivo.
- `Ctrl + r`: Refaz a última ação.
- **Colar**: `Ctrl + Shift + V`.
- **Delete**: Deleta para a direita.

## Atalhos Digitáveis

- `dd`: Apaga a linha atual.
- `dG`: Deleta tudo do cursor para baixo.
