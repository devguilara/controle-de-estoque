# Sistema de Estoque de Ativos em PHP

Este é um sistema de estoque de ativos desenvolvido em PHP que permite o gerenciamento de ativos em uma empresa, facilitando o controle de entrada, saída e movimentação de produtos ou itens. O sistema oferece uma interface amigável e funcionalidades essenciais para manter um registro preciso do estoque da sua empresa.

## Funcionalidades

- **Cadastro de Ativos:** Permite adicionar novos ativos ao estoque, incluindo informações como nome, descrição, quantidade disponível, preço unitário, entre outros.

- **Consulta de Ativos:** Permite pesquisar e visualizar informações detalhadas sobre um ativo específico, incluindo histórico de movimentações e dados relevantes.

- **Cadastro de Usuários:** Permite adicionar novos usuário ao sistema, incluindo informações como nome, cargo, setor, status entre outros.

- **Relatórios:** Gera relatórios personalizados em csv, com os dados dos ativos e com os dados dos usuários.

- **Gerenciamento de Usuários:** Permite criar contas de usuário com diferentes níveis de acesso para garantir a segurança das informações do estoque.

## Requisitos

Antes de iniciar a instalação do sistema, certifique-se de que seu ambiente atenda aos seguintes requisitos:

- Servidor web (por exemplo, Apache) com suporte a PHP.
- Banco de dados MySQL ou equivalente.
- PHP 8.0 ou superior.
- Conexão à internet para verificação de atualizações (opcional).

## Instalação

1. Clone este repositório em seu servidor web:

   ```bash
   git clone https://github.com/seu-usuario/sistema-estoque-php.git
   ```

2. Crie um banco de dados MySQL para o sistema.

3. Configure as informações de conexão ao banco de dados no arquivo `config.php` localizado na pasta `includes`.

4. Importe o arquivo SQL `database.sql` para criar as tabelas necessárias no banco de dados.

5. Acesse o sistema através do seu navegador:

   ```
   http://seu-servidor/sistema-estoque-php
   ```

6. Faça login com as credenciais padrão (admin/admin) e altere a senha imediatamente.

## Uso

Após a instalação, você pode começar a utilizar o sistema de estoque de ativos. Certifique-se de criar contas de usuário adicionais para conceder acesso a outros membros da equipe, e personalize as configurações de acordo com as necessidades da sua empresa.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues, propor melhorias ou corrigir problemas existentes. Se desejar contribuir diretamente para o desenvolvimento do projeto, siga as diretrizes de contribuição no arquivo `CONTRIBUTING.md`.

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

---

Esperamos que este sistema de estoque de ativos em PHP seja útil para gerenciar o estoque da sua empresa. Se tiver alguma dúvida ou problema, por favor, crie uma issue neste repositório ou entre em contato conosco.

**Equipe de Desenvolvimento**

*KS2 Soluções Empresariais e Tecnologia*

*Data da última atualização: 26/09/2023*