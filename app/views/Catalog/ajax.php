 <?php $k=1; ?>
    <?php foreach($data['products'] as $product): ?>
        <?php if(($k-1)%3==0 || $k==1): ?>
            <div class="product-one">
        <?php endif ?>
        <div class="col-md-4 product-left p-left">
            <div class="product-main simpleCart_shelfItem">
                <a href="single?product=<?= $product['name'] ?>" class="mask"><img class="img-responsive zoom-img" src="/images/<?= $product['picture'] ?>" alt="" /></a>
                <div class="product-bottom">
                    <h3><?= $product['name'] ?></h3>
                    <p>Explore Now</p>
                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price"><?=$data['currency']['prefix'];?><?=$product['price'];?><?=$data['currency']['postfix'];?></span></h4>
                </div>
                <?php if($product['discount_number']>0): ?>
                    <div class="srch">
                        <span>-<?= $product['discount_number']; ?>%</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($k%3==0 || $k == count($data['products'])): ?>
            <div class="clearfix"></div>
            </div>
        <?php endif ?>
        <?php $k++; ?>
    <?php endforeach; ?>
 <?php if ($data['totalPages'] > 1): ?>
     <div class="centering">
         <div class="pagination">
             <ul>
                 <li onclick="paginationClick(this.getAttribute('value'))" value="<?php if ($data['page']-1 > 0 && $data['page']-1 <= $data['totalPages']): ?>http://shop.loc/catalog/ajax?page=<?= $data['page']-1 ?> <?php endif; ?>"><a>&laquo;</a></li>
                 <?php for ($i = 1; $i < $data['totalPages'] + 1; $i++): ?>
                     <li onclick="paginationClick(this.getAttribute('value'))" value="http://shop.loc/catalog/ajax?page=<?= $i ?>"><a <?php if ($i == $data['page']): ?> class="active" <?php endif; ?>><?= $i ?></a></li>
                 <?php endfor; ?>
                 <li onclick="paginationClick(this.getAttribute('value'))" value="<?php if ($data['page']+1 > 0 && $data['page']+1 <= $data['totalPages']): ?>http://shop.loc/catalog/ajax?page=<?= $data['page']+1 ?> <?php endif; ?>"><a>&raquo;</a></li>
             </ul>
         </div>
     </div>
 <?php endif; ?>