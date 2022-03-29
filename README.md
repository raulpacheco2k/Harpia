# Harpia

Harpia é software de gestão financeira para brasileiros em situação de endividamento.

Desenvolvido na linguagem de programação PHP sobre a estrutura do Laravel Framework.

## Porque Harpia existe?

O problema de endividamento entre os brasileiros sempre foi um problema latente. É possível ver reportagens em jornais,
televisão e rádio dizendo como o índice de inadimplência, endividamento piorou, ainda mais agora por consequência da
pandemia de COVID-19.

É necessário auxiliar o brasileiro através do planejamento, previsibilidade, rastreamento dos gastos, monitorando e
fazer com que tenha consciência do que está acontecendo com seu dinheiro através de insights de suas finanças.

A proposta é um software que possa ajudar famílias em vulnerabilidade a estabilizar as finanças, criando uma reserva
financeira, planejando a aposentadoria e consequentemente trazendo uma maior qualidade de vida para o ambiente familiar
no presente e no futuro, quando dependerão de retornos financeiros quando se aposentarem, é a justificativa deste
trabalho.

## Nosso objetivo

Desenvolver um software que auxilie famílias endividadas e/ou com má gestão dos recursos financeiros a realizar uma
melhor gestão do dinheiro, para que possa futuramente vir a ter uma reserva de emergência, tendo assim, mais segurança e
harmonia dentro de casa.

## Como inicializar o projeto

Utilizamos Docker como ambiente de desenvolvimento.

### Container application:harpia

O container _application:harpia_ rodará na porta `:8000` e neste container estará localizado o Apache, PHP, Laravel e
Composer.

#### Versões

* Apache 2
* PHP 8.1
* Composer 2
* Laravel 9.2

### Container database:harpia

O container _database:harpia_ rodará na porta `:3306` e neste container esta localizado o servido do MySQL.

#### Versões

* MySQL 8
