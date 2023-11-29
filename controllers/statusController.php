<?php
class statusController extends controller
{
    public function alterarStatus($id) {
        
        $clientes = new clientes();
        $clientes->alterarStatus($id);
        
    }


}
