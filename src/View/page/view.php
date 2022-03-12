
    
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

                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>글보기</h1>
                                            <div class="subject">
                                                <small>[제목]</small> <?= $content->title ?>
                                            </div>
                                            <div class="post-bottom overflow">
                                                
                                                <ul class="nav navbar-nav post-nav">
                                                    <li><i class="fa fa-tag"></i> 작성자 :<?= $content->user->name ?>[Master]</li>
                                                    <li><i class="fa fa-clock-o "></i> 작성일 : 2014. 04. 06</li>
                                                    <li><i class="fa fa-comments"></i> 조회 : 24</li>
                                                </ul>
                                            </div>
                                            <div class="viwebox">
                                            <?= $content->description ?>
                                            </div>
                                            <hr>
                                            <div class="pull-right">
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='/blog/menu/<?= $menu->idx ?>'">목록보기</button>
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='/blog/reply/<?=$content->idx ?>'">답글</button>
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='/blog/update/<?=$content->idx ?>'">수정</button>
                                                <a class="btn btn-default btn-sm" href="/content/delete/<?= $content->idx ?>">삭제</a>
                                            </div>
                                        </div>
                                        <div class="commentwrite col-md-12 row">
                                        <h2 class="bold">Comments</h2>
                                            <form action="/comment/create" method="post">
                                                <input type="hidden" name="content_idx" value="<?= $content->idx ?>">
                                                <textarea class="margin-bottom-20" type="text" name="content"></textarea>
                                                <button type="submit">등록</button>
                                            </form>
                                        </div>
                                        <div class="response-area col-md-12 row">
                                            <ul class="media-list">
                                                <?php foreach($comments as $c): ?>
                                                    <form action="/comment/update" method="post">
                                                <li class="media">
                                                    <div class="post-comment">
                                                        <div class="media-body">
                                                        <input type="hidden" name="comment_idx" value="<?= $c->idx ?>">
                                                            <span><i class="fa fa-user"></i><?= $c->user->name ?></span>
                                                            <p><?= $c->description ?></p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><i class="fa fa-clock-o"></i> 2014.04.06</li>
                                                            </ul>
                                                        </div>

                                                        <?php if(user()->email == 'admin' || $c->user_idx == user()->idx): ?>
                                                        <div class="pull-right">
                                                            <button class="btn btn-default btn-xs" onclick="mod(this);" type="button">수정</button>
                                                            <button class="btn btn-default btn-xs" id="modBtn" style="display: none; float:left; margin:2px;">수정</button>
                                                            <a class="btn btn-default btn-xs" href="/comment/delete/<?= $c->idx ?>">삭제</a>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>          
                                                    </form>                                         
                                                </li>
                                                <script>
                                                    function mod(e) {
                                                        let el = $(e).parents('li').find(".media-body > p");
                                                        let text = el.text();

                                                        el.html(`
                                                <textarea class="margin-bottom-20" type="text" name="content">${text}</textarea>
                                                        `);
                                                        $(e).parents('.pull-right').find('#modBtn').css('display','block');
                                                        $(e).css('display','none');
                                                    }
                                                </script>
                                                <?php endforeach; ?>
                                            </ul>                   
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>
    
