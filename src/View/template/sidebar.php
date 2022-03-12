<div class="col-md-3 col-sm-3 col-xs-3">
     <div class="sidebar portfolio-sidebar">
         <div class="sidebar-item categories">
             <h3>블로그 메뉴</h3>
             <ul class="nav navbar-stacked">
<?php foreach($menus as $m): ?>
             <li class="<?= isset($menu) && $menu->idx == $m->idx ? 'active' : '' ?>"><a href="/blog/menu/<?= $m->idx?>"><?=$m->name ?><span class="pull-right">(<?= $m->contents?>)</span></a></li>
                <?php endforeach; ?> 
            </ul>
         </div>
     </div>
 </div>