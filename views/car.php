
 <div class="row mt-5">
            <div class="col">
                <div class="row border" id="img-view">
                    <img src="storage/<?php echo $fetchProdutos['img'];?>" >
                </div>
                <div class="row" id="img-min">
                   <?php foreach($fetchImagem as $min): ?>
                                
                        <div class="col border">
                            <a href="#" data-id="">
                            <img src="storage/<?php echo $min['img'] ?>" style="width:64px; height:auto; margin-left:25%;  ">
                            </a>
                        </div>
                   <?php endforeach ?>
                   
                </div>
            </div>
            <div class="col" id="description">
                                    
                <div class="ml-auto">
                        <h2 class="text-center mb-5 mt-2">
                           <?php echo $fetchProdutos['produto']. "Marca - ". $fetchProdutos['marca']; ?>
                         </h2>
                        <h4 class="text-justify">
                        <?php echo $fetchProdutos['produto']. "Marca - ".$fetchProdutos['descricao'];?>       
                    </h4>
                        <h4 class="mt-5">
                        <strong><?php echo "Valor: ".$fetchProdutos['preco'];?></strong></h4>
                </div>
               
            </div>
          
</div>
<script>
        
      

</script>




