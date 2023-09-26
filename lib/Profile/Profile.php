<?php
class Profile
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
            'f_name' => 'Nome',
            'L_name' => 'Sobrenome'
        ];

        return $ordering;
    }
}
?>
