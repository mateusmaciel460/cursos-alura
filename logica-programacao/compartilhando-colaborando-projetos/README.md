# Git e GitHub: compartilhando e colaborando em projetos

## Comandos 1

```bash
# Inicializa um novo projeto git
git init

# Adicionando todos arquivo ao git
git add .

# Adiciona um arquivo específico ao git
git add index.html

# Adiciona uma mensagem aos arquivos (atualização/adição)
git commit -m "projeto inicial"

# Email e usuário do Github/Git
git config --global user.email "mateus@gmail.com"
git config --global user.name "mateus"

# Atualização na branch atual
git branch -M main
```

## Comandos 2

```bash
# Indica os dados do repositório remoto
git remote add origin git@github.com:mateusmaciel460/alura-cursos

# Envia os arquivos para o Github
git push -u origin main

# Chave SSH - Identificação do usuário
ssh-keygen -t ed25519 -C "mateus@gmail.com"

# Clone do repositório com commits, históricos e etc
git clone git@github.com:mateusmaciel460/cursos-alura.git #SSH
git clone https://github.com/mateusmaciel460/cursos-alura.git # HTTP

# Verifica a situação dos arquivos adicionados, alterados ou modificados
git status

# Histórico de commits 
git log
```

## Comandos 3
```bash
# Puxar os commits do remoto para local
git pull origin main

# Reverte um commit pelo identificador do commit
git revert ID

# Resetando um commit (remover/apagar commit) - ID do commit que você deseja retornar 
git reset --hard ID

# Alterando o último commit (erros de escrita e etc)
git commit --amend -m "mensagem correta"

# Modelo .gitignore
temp/
*.css
arquivo.css

# Trecho de código no Github (Gist)
Create new > New gist
```