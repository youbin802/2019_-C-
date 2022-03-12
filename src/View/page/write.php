
    
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
                                            <h1>글쓰기</h1>
                                            <form class="boardwrite" method="post" action="/content/create">
                                                <input type="hidden" name="board_idx" value="<?= $menu->board_idx ?>">
                                                <input type="hidden" name="menu_idx" value="<?= $menu->idx ?>">
                                                <label>제목
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" name="title" type="text">
                                                <label>작성자
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" type="text" disabled value="<?= user()->email ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>내용
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <textarea class="form-control margin-bottom-20" name="content"></textarea>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary btn-sm" type="submit">글작성</button>
                                                        <button class="btn btn-default btn-sm" type="reset">다시작성하기</button>
                                                        <button class="btn btn-default btn-sm" type="button" onclick="history.back();">취소</button>
                                                    </div>
                                                </div>
                                            </form> 
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
    

