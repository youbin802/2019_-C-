
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">

                    <!-- content inner -->
                    <section id="projects">
                        <div class="container">
                            <div class="row">
                                <?php require_once(__VIEW . '/template/sidebar.php'); ?>
                                <?php if(isset($menu)): ?>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1><?= $m->name ?></h1>
                                            <?php if($menu->board_idx): ?>
                                            <div class="boardlist">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1">번호</th>
                                                            <th class="col-md-6">제목</th>
                                                            <th>작성자</th>
                                                            <th>작성일</th>
                                                            <th>조회</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($contents as $c): ?>
                                                        <tr>
                                                            <td><?= $c->idx ?></td>
                                                            <td>
                                                                <?php if($c->user_idx == $c->writer_idx): ?>
                                                                <a href="/blog/view/<?= $c->idx ?>"><?= $c->title ?></a>
                                                                <?php else: ?>
                                                                    &nbsp;&nbsp;<a href="/blog/view/<?=  $c->idx ?>">└ <?=  $c->title  ?></a>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?= $c->user->name ?></td>
                                                            <td><?= $c->created_at ?></td>
                                                            <td>6</td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                                <div class="pull-right">
                                                    <button class="btn btn-default btn-sm" type="button" onclick="window.location='/blog/write/<?= $menu->idx ?>'">글쓰기</button>
                                                </div>
                                            </div>
                                            <div class="portfolio-pagination">
                                                <ul class="pagination">
                                                  <li><a href="#">left</a></li>
                                                  <li class="active"><a href="#">1</a></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>
                                                  <li><a href="#">6</a></li>
                                                  <li><a href="#">7</a></li>
                                                  <li><a href="#">8</a></li>
                                                  <li><a href="#">9</a></li>
                                                  <li><a href="#">right</a></li>
                                                </ul>
                                            </div>
                                            <?php else: ?>
                                                등록 안된 게시판
                                <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>
    
