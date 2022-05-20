<html>
    <body>
        <form action="dados.php" method="POST">
            Nome : <input type="text" name="nome">
            <br>
            Email: <input type="email" name="email">
            <br>
            <button type="submit">eviar</button>
        </form>

        <form action="dados.php" method="GET">
            Nome : <input type="text" name="nome">
            <br>
            Email: <input type="email" name="email">
            <br>
            <button type="submit">eviar</button>
            <br>
            <a href="dados.php?idade=25&sobrenome=santos">enviar dados</a>
        </form>
    </body>
</html>