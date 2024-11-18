# TrabalhoBD
O site é inspirado no Letterboxd, uma rede social voltada para apreciadores de cinema, e foi projetado para facilitar o cadastro, a organização e a interação com 
filmes. Ele utiliza PHP para gerenciar funcionalidades principais, como o registro de usuários, o armazenamento de dados e a exibição de uma lista de filmes no banco de dados. Quando um usuário pesquisa um filme, ele encontra informações detalhadas, como o título, o ano de lançamento, os gêneros e as avaliações realizadas por outros usuários cadastrados. Além disso, a página apresenta imagens ilustrativas dos filmes, tornando a navegação mais imersiva e atraente. Ele utiliza PHP para gerenciar as funcionalidades principais, como o registro de usuários, o armazenamento de dados e a exibição de uma lista de filmes presentes no 
banco de dados. Nessa lista, os visitantes podem visualizar informações detalhadas, como o nome do filme, o ano de lançamento, os gêneros e as avaliações feitas por outros usuários. A página inicial foi planejada para organizar o acesso às principais funções, enquanto páginas específicas oferecem recursos como listagem, 
avaliações e interação. O design é enriquecido com arquivos CSS e JS, que garantem uma navegação simples e intuitiva. Imagens também são usadas para ilustrar os 
filmes e aprimorar a experiência visual dos usuários. O objetivo é criar um ambiente interativo, onde as pessoas possam compartilhar suas opiniões e explorar novos 
títulos de forma prática e dinâmica.

# ConsultasSQL
1- Listar todos os filmes cadastrados
SELECT * FROM movies_ratings;

2- Pesquisar filmes por gênero
SELECT * FROM movies_ratings 
WHERE genreso LIKE '%Action%';

3- Listar os usuários cadastrados
SELECT id, nome, email, DATE_FORMAT(data_nasc, '%d/%m/%Y') AS data_nasc 
FROM usuarios;

4- Listar os filmes avaliados por um usuário específico
SELECT title, rating FROM movies_ratings 
WHERE userId = 1;

5- Listar os filmes que receberam avaliação máxima (exemplo: rating 5)
SELECT title, rating FROM movies_ratings 
WHERE rating = 5;

6- Listar os filmes mais recentes avaliados, baseados no timestamp
SELECT title, timestamp FROM movies_ratings 
ORDER BY timestamp DESC 
LIMIT 10;

7- Contar quantas avaliações foram feitas por um usuário específic
SELECT COUNT(*) AS total_avaliacoes 
FROM movies_ratings 
WHERE userId = 2;

8- Exibir os filmes e suas avaliações ordenados por nota, do maior para o menor
SELECT title, rating FROM movies_ratings 
ORDER BY rating DESC;

9- Listar todos os gêneros únicos disponíveis na tabela
SELECT DISTINCT genres FROM movies_ratings;

10- Listar os 5 filmes mais avaliados (com o maior número de avaliações)
SELECT title, COUNT(*) AS total_avaliacoes 
FROM movies_ratings 
GROUP BY title 
ORDER BY total_avaliacoes DESC 
LIMIT 5;

#Referências
https://www.youtube.com/watch?v=BSqtIw_hW8M
https://learnsql.com.br/blog/use-sql-em-um-banco-de-dados-de-filmes-para-decidir-o-que-assistir/
https://www.kaggle.com/datasets/shubhammehta21/movie-lens-small-latest-dataset/data
