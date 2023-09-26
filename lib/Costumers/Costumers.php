<?php
class Costumers
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
            'nome' => 'Nome',
            'email' => 'Email',
            'setor' => 'Setor',
            'cargo' => 'Cargo',
            'status' => 'Status',
            'tipo_maquina' => 'Maquina'
        ];

        return $ordering;
    }
}
?>
