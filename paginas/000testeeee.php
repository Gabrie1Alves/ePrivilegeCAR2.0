<form form action="posvender.php" method="POST">
  <label for="fname"><b>Informações do usuário</b></label> <br>

  <label for="name"> <br> Nome Completo:</label>
  <input type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

  <label for="cpf">CPF:</label>
  <input type="text" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="ex: 00000000000">

  <label for="fone">Fone:</label>
  <input type="text" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required placeholder="ex: qwerty@abcd.com">

  <label for="cep">Cep:</label>
  <input type="text" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

  <label for="estado">Estado:</label>
  <input type="text" id="estado" name="estado" required placeholder="ex: Parana">

  <label for="cidade">Cidade:</label>
  <input type="text" id="cidade" name="cidade" required placeholder="ex: Parana">

  <label for="endereco">Endereço:</label>
  <input type="text" id="endereco" name="endereco" minlength="5" required placeholder="ex: Rua dos pinheiros">

  <label for="num">Número:</label>
  <input type="number" id="num" name="num" min="0" required placeholder="ex: 201">

  <label for="comp">Complemento:</label>
  <input type="text" id="comp" name="comp" minlength="4" required placeholder="ex: casa, bloco, apartamento...">

  <label>
    <input type="checkbox"  name="recebeEmail"> Aceitar receber noficações e novidades.
  </label>
  <br>
  <label for="condicoes">
    <input type="checkbox" checked id="cond" name="cond"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
  </label>
  <a href="./posvender.php" ><input type="submit"   value="Enviar"></a>
</form>