Sistema de Atividades PHP - Introdução à Programação Web

PHP
Status
📋 Sobre o Projeto

Este repositório contém as soluções de 5 atividades práticas da disciplina Introdução à Programação para Web, ministrada pelo Professor Romário Vitorino Ferreira. Os exercícios abordam conceitos fundamentais de PHP, incluindo estruturas condicionais, loops e validações.
🎯 Atividades Implementadas
1️⃣ Sistema de Login

Sistema de autenticação simples que valida credenciais de usuário e senha, fornecendo mensagens específicas para cada tipo de erro.

Funcionalidades:

    Validação de usuário e senha
    Mensagens personalizadas para diferentes cenários de erro
    Lógica condicional encadeada

2️⃣ Classificação Esportiva

Script que categoriza atletas com base em suas idades em diferentes categorias esportivas.

Categorias:

    👶 Infantil (< 12 anos)
    🧒 Juvenil (12-17 anos)
    🏃 Sub-30 (18-29 anos)
    🏃‍♂️ Sub-40 (30-39 anos)
    🧓 Veterano (40+ anos)

3️⃣ Calculadora de Fatorial

Implementação de cálculo fatorial com apresentação passo a passo do processo matemático.

Características:

    Validação de números negativos
    Tratamento especial para 0!
    Exibição do cálculo completo (ex: 5! = 5 x 4 x 3 x 2 x 1 = 120)

4️⃣ Conversor de Moedas

Sistema de conversão de Reais para Dólares com aplicação de taxas de serviço progressivas.

Regras de Taxa:

    💰 < 100 USD: taxa de 10%
    💵 100-300 USD: taxa de 5%
    💸 > 300 USD: sem taxa

5️⃣ Calculadora de Frete

Sistema de cálculo de frete baseado em peso e distância com custos diferenciados.

Tabela de Custos:
Peso	Custo por km
≤ 10kg	R$ 1,20
10-30kg	R$ 2,00
> 30kg	R$ 3,00
🚀 Como Executar
Pré-requisitos

    Laragon ou qualquer servidor PHP local
    PHP 7.4 ou superior
    Navegador web

Instalação

    Clone o repositório

Bash

git clone https://github.com/artzaz/project-web-programming.git

    Mova os arquivos para a pasta do servidor

Bash

# Para Laragon
mv atividades-php-web C:/laragon/www/

    Inicie o Laragon

    Abra o Laragon
    Clique em "Start All"

    Acesse no navegador

text

http://localhost/atividades-php-web/atividade1.php
http://localhost/atividades-php-web/atividade2.php
http://localhost/atividades-php-web/atividade3.php
http://localhost/atividades-php-web/atividade4.php
http://localhost/atividades-php-web/atividade5.php

📁 Estrutura do Projeto

text

atividades-php-web/
│
├── atividade1.php          # Sistema de Login
├── atividade2.php          # Classificação Esportiva
├── atividade3.php          # Cálculo de Fatorial
├── atividade4.php          # Conversor de Moedas
├── atividade5.php          # Calculadora de Frete
└── README.md               # Documentação

🧪 Testando as Aplicações

Cada arquivo contém variáveis fixas para teste. Para experimentar diferentes cenários, altere os valores:
Exemplo - Atividade 1 (Login):

PHP

$usuarioFornecido = "admin";  // Altere para testar
$senhaFornecida = "1234";     // Altere para testar

Exemplo - Atividade 2 (Idade):

PHP

$idade = 25; // Teste com: -5, 10, 15, 25, 35, 45

Exemplo - Atividade 3 (Fatorial):

PHP

$n = 5; // Teste com: -3, 0, 5, 10

Exemplo - Atividade 4 (Conversão):

PHP

$valorReais = 1000.00;  // Teste com: 400, 1500, 2000
$cotacaoDolar = 5.00;   // Ajuste conforme cotação

Exemplo - Atividade 5 (Frete):

PHP

$peso = 25;      // Teste com: 5, 20, 35
$distancia = 150; // Teste com: 50, 100, 200

💡 Conceitos Aprendidos

    ✅ Estruturas condicionais (if/else/elseif)
    ✅ Operadores de comparação e lógicos
    ✅ Estruturas de repetição (for)
    ✅ Validação de dados
    ✅ Formatação de números
    ✅ Concatenação de strings
    ✅ Boas práticas de programação


👨‍🏫 Professor

Romário Vitorino Ferreira
Disciplina: Introdução à Programação para Web
📅 Data de Entrega

20/03/2026
📝 Licença

Este projeto foi desenvolvido para fins educacionais.
🤝 Contribuindo

Este é um projeto acadêmico, mas sugestões são bem-vindas!

    Faça um Fork do projeto
    Crie uma Branch para sua Feature (git checkout -b feature/AmazingFeature)
    Commit suas mudanças (git commit -m 'Add some AmazingFeature')
    Push para a Branch (git push origin feature/AmazingFeature)
    Abra um Pull Request

📧 Contato

Arthur Lourenco Martins - aarrthurjr10@gmail.com

Link do Projeto: https://github.com/artzaz/project-web-programming

⭐️ Desenvolvido com dedicação para a disciplina de Programação Web
