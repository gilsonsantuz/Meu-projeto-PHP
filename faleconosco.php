<style>
.div-flex{
    display: center; align-items: center; 
    justify-content: center; 
    text-align: center;
}


</style>

<div class="div-flex">
<h1>Formulário de Contato</h1>
<form action="?pg=obrigado" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" rows="2" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>
</div>