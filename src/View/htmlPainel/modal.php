    <!-- Modal confirmação de exclusão-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                       
                    <div class="modal-body">
                        <h5>Deseja excluir esse Chamado ?</h5>
                    </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
                            <button type="button" class="btn btn-primary"><a href="../Controllers/ControllersChamado.php?acao=3&id=<?php echo $chamado->id?>" class="link-light" >Sim</a></button>
                        </div>
                </div>
        </div>
    </div>