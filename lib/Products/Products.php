<?php
class Products
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'nome_produto' => 'Nome',
            'data_entrada' => 'Entrada',
            'categoria' => 'Tipo',
            'quantidade' => 'Quantidade'
        ];

        return $ordering;
    }
}
?>
