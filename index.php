<?php
require_once "header.php";
?>

        <!-- CONTENT -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" id="net-navbar">
                <span id="menu-toggle" class="mr-auto"><img src="logo.png" class="mx-auto d-block"></span>
                <a id="navbar-site-title" class="navbar-brand" href="#"><i class="fas fa-tools"></i> Painel</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#net-navbar-collapse" aria-controls="net-navbar-collapse" aria-expanded="false" aria-label="Expandir">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="net-navbar-collapse">
                    <form class="form-inline" id="navbar-search-form">
                        <label for="busca"></label>
                        <input type="text" id="navbar-search-field" class="form-control form-field net-form-field" name="busca" placeholder="Pesquisar">
                    </form>

                    <div id="navbar-profile" class="ml-auto">
                        <img src="caricatura.jpg">
                        <span>Marcelo Henrique</span>
                    </div>
                </div>
            </nav>
            <div id="content" class="container">

               <!-- Tabela -->

               <div class="table-title">
                    <h3>Usuários</h3>
                    <input type="text" class="form-control form-field net-form-field" name="busca" placeholder="Pesquisar">
               </div>

               <table class="table bg-white">
                   <thead>
                       <tr>
                           <th class="table-col-title">#</th>
                           <th class="table-col-title">NOME</th>
                           <th class="table-col-title">SOBRENOME</th>
                           <th class="table-col-title">USUÁRIO</th>    
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>1</td>
                           <td>Marcelo</td>
                           <td>Henrique</td>
                           <td>@marcelo</td>
                       </tr>
                       <tr>
                           <td>2</td>
                           <td>Mariana</td>
                           <td>Cesário</td>
                           <td>@Mariana</td>
                       </tr>
                       <tr>
                           <td>3</td>
                           <td>Gustavo</td>
                           <td>Henrique</td>
                           <td>@gustavo</td>
                       </tr>
                       <tr>
                           <td>4</td>
                           <td>Eliana</td>
                           <td>De Fátima</td>
                           <td>@Eliana</td>
                       </tr>
                       <tr>
                           <td>5</td>
                           <td>Munike</td>
                           <td>Karoline</td>
                           <td>@munike</td>
                       </tr>
                       <tr>
                           <td>6</td>
                           <td>Marcelo</td>
                           <td>Junior</td>
                           <td>@marcelojr</td>
                       </tr>
                   </tbody>
               </table>
               <!-- Formulario -->
               <h3 id="main-page-form-title" class="net-main-text-3">Novo Artigo</h3>
               <div>
                  <form class="card net-form">

                     <div class="card-body net-form-body">
                        <div class="form-group">
                            <label>Autor</label>
                            <input class=" form-field net-form-field form-control" id="user-field" placeholder="Autor">
                            <hr> 
                        </div>

                        <div class="form-group">
                            <label>Título</label>
                            <input class=" form-field net-form-field form-control" id="title-field" placeholder="Título">
                            <hr> 
                        </div>

                        <div class="form-group">
                            <label>Texto</label>
                            <textarea class="form-field net-form-field form-control" id="body-field" placeholder="Escreva aqui seu texto"></textarea>
                            <hr> 
                        </div>

                        <div class="form-group">
                            <label>Data</label>
                            <input type="date" class="form-field net-form-field form-control" id="data-field">                           
                        </div>
                     </div>
                      
                      
                      <div class="confirm-btns card-footer">
                          <button class="btn btn-primary">Criar e Adicionar Outro</button>
                          <button class="btn btn-primary">Publicar Post</button>
                      </div>

                  </form>
               </div>

               <h3 id="vendas-h3">Vendas</h3>
               <div class="card">
                   <div class="card-body">
                     <canvas id="relatorio"></canvas>
                   </div>
               </div>

            </div>
        </div>
</div>
<?php
require_once "footer.php";
