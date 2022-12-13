<div class="container">
    <br>

    <h3 class="center teal-text">Cadastro de novos cardápios.</h3>
    <div class="progress">
        <div class="determinate" style="width: 0%"></div>
    </div>

    <div class="row">
        <div class="col s12"></div>
        <div class="col s6">

            <form method="post" action="insert-menu.php">
                Data: <input type="date" name="salada" placeholder="Qual a data?" />
                Salada: <input type="text" name="salada" placeholder="Qual a salada?" />
                Proteína: <input type="text" name="proteina" placeholder="Qual a proteína?" />
                Guarnição: <input type="text" name="guarnicao" placeholder="Qual a guarnição?" />
                Sobremesa: <input type="text" name="sobremesa" placeholder="Qual a sobremesa?" />
                Bebidas: <input type="text" name="bebidas" placeholder="Qual a bebida?" />

                <input type="submit" name="btn" value="Submit" class="btn btn-success">

            </form>

        </div>

        <div class="col s6">

            <img class="col s12" src="resources/images/menu.jpg" />

        </div>
    </div>
</div>