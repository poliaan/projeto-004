<section>

    <h3>FOR</h3>

    <p>O loop <code>for</code> é usado quando você sabe quantas vezes deseja executar um bloco de código. 
	Ele é composto por três partes: inicialização, condição e incremento.:</p>

    <form action="for.php" method="post">

        <label for="numero">Digite um número para criar uma tabuada</label>
        <input type="text" name="numero" id="numero" placeholder="Digite um número" required>
        <input type="submit" value="OK">

    </form>

</section>

<section>

    <h3>WHILE</h3>

    <p>O loop <code>while</code> executa um bloco de código enquanto uma condição especificada for verdadeira. A condição é verificada antes de cada iteração.</p>

    <form action="while.php" method="post">

        <label for="soma">Vamos usar o loop WHILE para comer uma somar de 1 a 100!</label>
        <input type="submit" value="OK">

    </form>

</section>

<section>

    <h3>DO...WHILE</h3>

    <p>O loop <code>do...while</code> é semelhante ao while, mas a condição é verificada após a execução do bloco de código. Isso garante que o bloco de código seja executado pelo menos uma vez.</p>

    <form action="dowhile.php" method="post">

        <label for="numero">Vamos usar o loop DO...WHILE para números pares e impares.</label>
        <input type="text" name="número" id="numero" placeholder="Digite um número par...">
        <input type="submit" value="OK">

    </form>

</section>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-size: 20px;
}

body {
    width: 100%;
}

header {
    width: 100%;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
}

header h1 {
    color: #fafafa;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    text-align: center;
}

h2,
h3,
h4,
h5,
h6 {
    width: 100%;
    text-align: center;
    margin-bottom: 16px;
}

p {
    width: 100%;
    line-height: 32px;
}

main {
    width: 1000px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    gap: 16px;
}

form label {
    font-size: 16px;
    font-weight: 600;
}

form input[type="text"],
form select {
    height: 40px;
    font-size: 20px;
    display: flex;
    align-items: center;
    padding: 0px 8px;

}

form input[type="submit"] {
    width: 150px;
    height: 40px;
    font-size: 16px;
}

button {
    width: 100px;
    height: 40px;
    font-size: 16px;
}

section {
    width: 470px;
    border: 1px solid #464646;
    border-radius: 20px;
    padding: 20px;
}

footer {
    width: 100%;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fafafa;
    position: fixed;
    bottom: 0px;
}

footer p {
    text-align: center;
}

code {
    font-family: "Reddit Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    display: inline-block;
    padding: 0px 8px;
    background-color: #242424;
    color: lightskyblue;
    border-radius: 8px;
}


p.box {
    width: fit-content;
    border: 1px solid #242424;
    border-radius: 8px;
    padding: 8px;
}

</style>
