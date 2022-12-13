<div class="container ">
    </br>

    <div class="row">
        <div class="col s12 teal-text center">

            <h3>Cadastro de novas preparações.</h3>

            <div class="progress">
                <div class="determinate" style="width: 0%"></div>
            </div>

        </div>

        <form class="" method="post" action="insert.php">

            <div class="input-field col s6">
                <i class="material-icons prefix">local_dining</i>
                <input id="icon_prefix" type="text" name="nome_preparacao" class="validate">
                <label for="icon_prefix">Digite o nome da preparação</label>
            </div>

            <div class="input-field col s6">
                <select class="browser-default" name="tipo_preparacao">
                    <option disabled selected>Escolha o tipo da preparação.</option>
                    <option value="salada">Salada</option>
                    <option value="proteina">Proteína</option>
                    <option value="guarnicao">Guarnição</option>
                    <option value="sobremesa">Sobremesa</option>
                    <option value="bebida">Bebida</option>
                </select>
            </div>

            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                    <i class="material-icons left">save</i>
                </button>

                <button class="btn waves-effect waves-light red">Cancelar
                    <i class="material-icons left">delete</i>
                </button>
            </div>

        </form>

    </div>

</div>