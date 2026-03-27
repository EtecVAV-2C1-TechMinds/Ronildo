# COOKIES E SESSIONS NO PHP

*Turma:* 2C1  
*Alunas:* Isabella Fernanda da Silva Barbosa, Larissa Ribeiro, Maria Luisa Gibrail  
*Disciplina:* Programação Web  
*Data:* 30/03/2026 

## Introdução

Em aplicações web, cada requisição HTTP é independente, ou seja, o servidor não mantém informações automaticamente entre acessos. 
Para resolver isso, utilizam-se cookies e sessions, que permitem armazenar dados e manter o estado do usuário. 
Esses mecanismos são essenciais para funcionalidades como login, carrinho de compras e personalização. 
Neste trabalho, serão abordados os conceitos, diferenças e aplicações de cookies e sessions no PHP.

## Exercício 1

Os cookies e as sessions são mecanismos utilizados para manter dados entre requisições em aplicações web. A principal diferença entre eles está no local onde as informações são armazenadas. Os cookies são armazenados no navegador do usuário, sendo enviados automaticamente ao servidor a cada requisição. Por ficarem no lado do cliente, podem ser acessados, modificados ou até excluídos pelo próprio usuário, o que os torna menos seguros. Além disso, possuem limite de tamanho e podem permanecer salvos mesmo após o fechamento do navegador, dependendo do tempo de expiração definido. Já as sessions armazenam os dados no servidor, enviando ao navegador apenas um identificador único de sessão. Isso aumenta a segurança, pois as informações sensíveis não ficam expostas no cliente. As sessions normalmente são temporárias, sendo encerradas ao fechar o navegador ou ao realizar logout. Dessa forma, cookies são mais indicados para armazenar preferências simples, enquanto sessions são mais adequadas para dados sensíveis, como autenticação de usuários e controle de acesso.


## Referências

- Conceitos e Dicas: Usando Session. Disponível em: https://www.devmedia.com.br/conceitos-e-dicas-usando-session/18104
- Cookies e a privacidade. Disponível em: https://www.exin.com/pt-br/article/cookies-uma-visao-geral-dos-riscos-associados-a-privacidade-e-seguranca-da-informacao/
