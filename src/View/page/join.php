
    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">회원가입</h1>

                    <!-- content inner -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="signup-page" method="post" action="/user/join" onsubmit="return check();">
                            <div class="signup-header">
                                <h2>Register a new account</h2>
                            <label>아이디
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control margin-bottom-20" name="id" id="id" type="text">
                            <label>비밀번호
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control margin-bottom-20" name="pw" id="pw" type="text">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>이름
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" name="name" id="name" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label>닉네임
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" name="nick" id="nick" type="text">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>Already a member? <br> Click 
                                        <a href="login.html">HERE</a>to login to your account.</p>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary" type="submit">회원가입</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
        <script>
            let id = /^\S+@\S+\.\S+$/;
            let pw = /^(?=.*[0-9])(?=.*[a-zA-Z])/;
            let name = /^[a-zA-Z가-힣]/;
            let nick = /^[a-zA-Z가-힣0-9]/;
            let number = /^[0-9]+$/;

            let id_ch = false;
            let pw_ch = false;
            let name_ch = false;
            let nick_ch = false;

            $("#id").on('input', function() {
                let el = $(this);
                let val = el.val();
                if(id.test(val)) {
                    id_ch = true;
                    text_color(el, 'green');
                } else {
                    id_ch = false;
                    text_color(el, 'red');
                }
            })
            
            $("#pw").on('input', function() {
                let el = $(this);
                let val = el.val();
                if(pw.test(val) && val.length >= 5) {
                    pw_ch = true;
                    text_color(el, 'green');
                } else {
                    pw_ch = false;
                    text_color(el, 'red');
                }
            })
            
            $("#name").on('input', function() {
                let el = $(this);
                let val = el.val();
                if(name.test(val)) {
                    name_ch = true;
                    text_color(el, 'green');
                } else {
                    name_ch = false;
                    text_color(el, 'red');
                }
            })
            
            $("#nick").on('input', function() {
                let el = $(this);
                let val = el.val();
                if(nick.test(val) && !number.test(val) && val.length <= 6) {
                    nick_ch = true;
                    text_color(el, 'green');
                } else {
                    nick_ch = false;
                    text_color(el, 'red');
                }
            })

            function text_color(el, color) {
                $(el).css('color',`${color}`);
            }

            function check() {
                if(id_ch && pw_ch && name_ch && nick_ch) {
                    return true;
                } else {
                    alert('다시');
                    return false;
                }
            }
        </script>
    </section>
    
