
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">블로그관리</h1>

                    <!-- content inner -->
                    <div id="testimonial-container">
                        <div class="row">

                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" method="post" action="/menu/create">
                                        <label>메뉴이름
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="name">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">메뉴등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴관리</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-4">
                                                    메뉴이름
                                                </th>
                                                <th class="col-md-4">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($menus as $m): ?>
                                                <form action="/menu/add" method="post">
                                                    <input type="hidden" name="menu_idx" value="<?= $m->idx ?>">
                                                <tr>
                                                <td>
                                                    <?= $m->idx ?>
                                                </td>
                                                <td>
                                                <?= $m->name ?>
                                                </td>
                                                <td>
                                                    <select name="board_idx" class="form-control input-sm">
                                                    <?php foreach($boards as $b): ?>
                                                        <option value="<?= $b->idx ?>"><?= $b->name ?></option>
                                                        <?php endforeach; ?>   
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-xs">게시판등록</button>
                                                    <a href="/menu/delete/<?= $m->idx ?>" class="btn btn-default btn-xs">메뉴삭제</a>
                                                </td>
                                            </tr>
                                            </form>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" method="post" action="/board/create">
                                        <label>게시판아이디
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="name">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">게시판등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-8">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($boards as  $b): ?>
                                            <tr>
                                                <td>
                                                    <?= $b->idx ?>
                                                </td>
                                                <td>
                                                    <?=$b->name ?>
                                                </td>                                                
                                                <td>
                                                    <a class="btn btn-default btn-xs" href="/board/delete/<?= $b->idx ?>">게시판삭제</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <?php if(user()->email == 'admin'): ?>
                            <div class="margin-bottom">
                                <h2 class="page-header">회원리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th>
                                                    아이디
                                                </th>
                                                <th>
                                                    이름
                                                </th>
                                                <th>
                                                    닉네임
                                                </th>
                                                <th>
                                                    블로그URL
                                                </th>
                                                <th>
                                                    삭제
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users as $u): ?>
                                            <tr>
                                                <td>
                                                    <?= $u->idx ?>
                                                </td>
                                                <td>
                                                <?= $u->email ?>  
                                                </td>
                                                <td>
                                                <?= $u->name ?>
                                                </td>
                                                <td>
                                                <?= $u->nick ?>
                                                </td> 
                                                <td>
                                                    <a href="http://localhost:8088/<?= $u->email ?>">http://localhost:8088/<?= $u->email ?></a>
                                                </td>                                                 
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="/user/delete/<?= $u->idx ?>">회원삭제</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>
    
  