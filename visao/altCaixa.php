            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">#TITULO#</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row formularios">
                <div class="col-lg-12">
                	<div class="col-lg-4">
                	<a href="?acao=caixaAction" class="btn btn-primary voltar">Voltar</a>
                		#MENSAGEM#
                    	<form role="form" id="cadAno" action="?acao=caixaAction&pg=Alterar&id=#IDCAIXA#" method="post">
                    	<input type="hidden" name="idcaixa" value="#IDCAIXA#" />
                    	
                                  <div class="form-group">
                                       <label>Descri&ccedil;&atilde;o</label>
                                       <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Digite a Descri&ccedil;&atilde;o" data-validate="{required: true, messages:{required:'Campo Obrigat&oacute;rio'}}" value="#DESCRICAO#">
                                  </div>
								  <div class="form-group">
                                       <label>Ordem</label>
                                       <input type="text" name="ordem" id="ordem" class="form-control" placeholder="Digite a Ordem" data-validate="{required: true, messages:{required:'Campo Obrigat&oacute;rio'}}" value="#ORDEM#">
                                  </div>
                                  <button type="submit" class="btn btn-default">Salvar</button>
                         </form>
                     </div>
                     <div class="col-lg-8">
                     	
                     </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            	<div class="col-lg-12">
            		<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-th-list"></i> Listagem de Caixa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Descri&ccedil;&atilde;o</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        #TABELA#
                                    </tbody>
                                </table>
                                #BARRA#
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
            	</div>
            </div>
            <!-- /.row -->