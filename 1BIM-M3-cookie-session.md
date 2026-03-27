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

## Exercício 2

A escolha entre cookies e sessions depende do local de armazenamento dos dados e do nível de segurança da aplicação, sendo esses recursos indispensáveis no desenvolvimento de um sistema de loja virtual. Dessa forma, para manter o usuário logado e armazenar itens temporários no carrinho, o ideal é utilizar sessions. Ao fazer login em uma loja, dados sensíveis, como informações pessoais e identificadores, ficam armazenados no servidor e não podem ser facilmente manipulados pelo usuário. Já os cookies, nesse caso, são utilizados apenas para armazenar no navegador o identificador da sessão de login. O mesmo ocorre com os itens do carrinho, já que a loja depende de que ações como remover produtos, atualizar quantidades e calcular valores sejam realizadas com segurança, ou seja, no servidor e não no navegador. Por outro lado, em relação ao registro das preferências do usuário, como idioma e tema (claro/escuro), é ideal utilizar cookies. Como esses dados são armazenados no navegador, eles permanecem salvos mesmo quando o usuário não está logado, sendo ideais por não envolverem informações sensíveis.

## Referências

- Conceitos e Dicas: Usando Session. Disponível em: https://www.devmedia.com.br/conceitos-e-dicas-usando-session/18104
- Cookies e a privacidade. Disponível em: https://www.exin.com/pt-br/article/cookies-uma-visao-geral-dos-riscos-associados-a-privacidade-e-seguranca-da-informacao/
- MDN Web Docs. Disponível em: https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Cookies
- O que são Cookies na Internet e como eles funcionam? Disponível em: https://www.alura.com.br/artigos/o-que-sao-cookies-como-funcionam
