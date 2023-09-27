<fieldset>
    <div class="form-group">
        <label for="f_name">Nome do Produto</label>
          <input type="text" name="nome_produto" value="<?php echo htmlspecialchars($edit ? $products['nome_produto'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Nome do Produto" class="form-control" required="required" id = "nome_produto" >
    </div> 

    <div class="form-group">
        <label for="l_name">Descrição</label>
        <input type="text" name="descricao" value="<?php echo htmlspecialchars($edit ? $products['descricao'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Descrição" class="form-control" required="required" id="descricao">
    </div> 

    <div class="form-group">
    <label>Tipo</label>
           <?php $opt_arr = array("Notebook", "Desktop", "Storage", "Mouse", "Adaptadores", "Teclado","Geral"); 
           ?>
            <select name="categoria" class="form-control selectpicker" required>
                <option value=" " >Selecione o tipo do Ativo</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $products['categoria']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }
            ?>
            </select>          
    </div> 
    
    <div class="form-group">
        <label for="quantidade">Quantidade de Ativos</label>
            <input  type="number" name="quantidade" value="<?php echo htmlspecialchars($edit ? $products['quantidade'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Quantidade" class="form-control" id="quantidade">
    </div>

    <div class="form-group">
        <label for="precoUnitario">Preço Unitário</label>
            <input name="preco_unitario" value="<?php echo htmlspecialchars($edit ? $products['preco_unitario'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="550.00" class="form-control"  type="text" id="preco_unitario">
    </div> 

    <div class="form-group">
        <label>Data de Entrada</label>
        <input name="data_entrada" value="<?php echo htmlspecialchars($edit ? $products['data_entrada'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Data de Entrada" class="form-control"  type="date">
    </div>

    <div class="form-group">
        <label>Data de Atualização</label>
        <input name="data_atualizacao" value="<?php echo htmlspecialchars($edit ? $products['data_atualizacao'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Data de Atualização" class="form-control"  type="date">
    </div>

    <div class="form-group">
        <label>Ativo</label>
        <label class="radio-inline">
            <input type="radio" name="ativo" value="1" <?php echo ($edit &&$products['Ativo'] == 1 ) ? "checked": "" ; ?> required="required"/> Ativo
        </label>
        <label class="radio-inline">
            <input type="radio" name="ativo" value="0" <?php echo ($edit && $products['Ativo'] == 0)? "checked": "" ; ?> required="required" id="Ativo"/> Desativo
        </label>
    </div>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
