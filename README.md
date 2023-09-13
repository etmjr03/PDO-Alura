# Curso sobre PDO em PHP

Esse é um projeto desenvolvido durante o estudo de PDO em php pela Alura.

- PDO::exec "Executa a query para inserir no banco de dados", você deve passar a query armazenada em uma variável ou direto em formato de String como parâmetro desse método.

- PDO::query "Executa o SQL e retorna o resultado em um PDOStatemente (algo parecido com uma instância)".

- PDO::fetchAll "Trás todos os dados e seu padrão retorna os dados representados de duas formas, um array associativo (coluna do BD) e um numérico", mas ele também pode receber parâmetros.

- PDO::fetch "Trás os dados de uma única linha de cada vez".

- PDO::fetchColumn "Trás os dados de uma coluna do banco de dados", ele espera como parâmetro o índice referente a coluna.

<hr>
Ao tentar buscar dados do banco de dados, você pode informar como quer que os métodos do PDO formatem esses dados pra você. Os principais fetch modes ou fetch styles são:

PDO::FETCH_ASSOC: Retorna cada linha como um array associativo, onde a chave é o nome da coluna, e o valor é o valor da coluna em si
PDO::FETCH_BOTH (esse é o padrão): Retorna cada linha como um array com as chaves sendo tanto o índice da coluna (começando do 0) quanto o nome da coluna, ou seja, os valores acabam ficando duplicados nesse formato
PDO::FETCH_CLASS: Cada linha do resultado é retornado como uma instância da classe especificada em outro parâmetro. A classe não pode ter parâmetros no construtor e cada coluna terá o seu valor atribuído a uma propriedade de mesmo nome no objeto criado
PDO::FETCH_INTO: Funciona de forma muito semelhante ao FETCH_CLASS, mas ao invés de criar o objeto para você, ele preenche um objeto já criado com os valores buscados
PDO::FETCH_NUM: Retorna cada linha como um array, onde a chave é o índice numérico da coluna, começando do 0, e o valor é o valor da coluna em si.

<a href="https://www.php.net/manual/en/pdostatement.fetch.php">Veja todos os parâmetros na documentação</a>
<hr>