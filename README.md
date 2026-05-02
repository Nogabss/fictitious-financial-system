# 💰 Sistema Financeiro em PHP

## 📌 Sobre o Projeto

Este projeto consiste em um sistema web simples para **controle financeiro pessoal**, desenvolvido em PHP.
O sistema permite que o usuário registre **receitas e despesas**, visualize o **saldo atual** e acompanhe um **histórico das transações**.

Os dados são armazenados utilizando **sessões (`$_SESSION`)**, garantindo persistência durante a navegação.

---

## 🎯 Objetivo

Aplicar conceitos fundamentais de PHP, incluindo:

* Manipulação de **variáveis e arrays**
* Uso de **estruturas condicionais e loops**
* **Funções reutilizáveis**
* Envio de dados via **GET e POST**
* **Autenticação de usuário**
* Controle de sessão
* Organização modular com `include` e `require`

---

## 🔐 Funcionalidades

* ✔️ Sistema de login com autenticação segura (`password_hash` e `password_verify`)
* ✔️ Dashboard com saldo total atualizado automaticamente
* ✔️ Cadastro de transações (Receitas e Despesas)
* ✔️ Histórico completo das movimentações
* ✔️ Botão para limpar histórico (resetar sessão)
* ✔️ Controle de acesso com verificação de sessão
* ✔️ Interface responsiva com Bootstrap

---

## 🛠️ Tecnologias Utilizadas

* PHP
* HTML5
* Bootstrap (via CDN)

---

## 📁 Estrutura do Projeto

```
/projeto-financeiro
│
├── login.php        # Tela de login
├── index.php        # Dashboard principal
├── historico.php    # Histórico de transações
├── logout.php       # Encerramento da sessão
├── sessao.php       # Controle de sessão e autenticação
└── funcoes.php      # Funções auxiliares
```

---

## ▶️ Como Executar o Projeto

1. Instale o XAMPP (ou similar)
2. Coloque a pasta do projeto dentro de:

```
C:\xampp\htdocs\
```

3. Inicie o Apache no XAMPP
4. Acesse no navegador:

```
http://localhost/projeto-financeiro/login.php
```

---

## 🔑 Acesso ao Sistema

| Usuário | Senha |
| ------- | ----- |
| admin   | 1234  |

---

## 🧠 Lógica do Sistema

* As transações são armazenadas em um array dentro de `$_SESSION`
* O saldo é calculado dinamicamente:

  * **Receitas somam**
  * **Despesas subtraem**
* O histórico é exibido com `foreach`
* O botão "Limpar Histórico" limpa os dados da sessão

---

## 🎨 Interface

O sistema utiliza o framework Bootstrap para:

* Layout responsivo
* Componentes visuais modernos
* Melhor experiência do usuário

---

## 🎥 Demonstração

📌 O vídeo de demonstração do sistema está disponível em:
*[Vídeo de demonstração](https://youtu.be/H9EtEg3PNU4)*

---

## 👨‍💻 Autor

Desenvolvido por Gabriel Nogueira

---

## ✅ Status

✔️ Projeto concluído e funcional
✔️ Atende aos requisitos propostos

---
