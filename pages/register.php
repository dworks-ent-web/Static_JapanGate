<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録ページ｜JapanGate</title>
    <link rel="stylesheet" href="/assets/css/common.min.css">
</head>

<body>
    <!-- <header>
        <div class="container header__container">
            <nav class="header__nav"></nav>
            <img src="/assets/img/common/jpgate_logo.png" alt="JapanGateロゴマーク">
            <div class="header__lang"></div>
        </div>
    </header> -->
    <main class="main">

        <div class="main_top">
            <div class="top_contents">
                <p><a href="">TOPページ></a>新規登録</p>
            </div>
            <div class="sakura">
                <figure>
                    <img src="/assets/img/common/sakura_line.png">
                </figure>
            </div>
            <div class="title">
                <figure>
                    <img src="/assets/img/register/title_register.png">
                </figure>
            </div>
        </div>

        <div class="main_contents">
            
                <form method="post" action="" name="">

                    <div class="section__input">
                        <p><span>必須</span>氏名</p>
                        <input type="text" name="user_name" id="user_name" placeholder="（例）山田　太郎">
                        <span id="error_msg_username" class="error_msg"></span>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>氏名 カナ</p>
                        <input type="text" name="user_kana" id="user_kana" placeholder="（例）ヤマダ　タロウ">
                        <span id="error_msg_username_kana" class="error_msg"></span>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>メールアドレス</p>
                        <input type="text" name="user_email" id="user_email" placeholder="（例）japangate@mail.com">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>パスワード</p>
                        <input type="text" name="user_password" id="user_password" placeholder="12文字以上で入力してください">
                    </div>
                    <div class="section__input">
                        <p><span>必須</span>パスワード（確認）</p>
                        <input type="text" name="user_password_confirm" id="user_password_confirm" placeholder="再度パスワードを入力してください">
                    </div>
                    
                    <div class="section__input">
                        <p><span>必須</span>性別</p>
                        
                            <input type="radio" id="male" class="radio_btn" name="user_gender" value="1" checked>
                            <label for="male">男性</label>

                            <input type="radio" id="female" class="radio_btn" name="user_gender" value="2">
                            <label for="female">女性</label>
                        
                            <input type="radio" id="other" class="radio_btn" name="user_gender" value="3">
                            <label for="other">その他</label>

                            <input type="radio" id="unknown" class="radio_btn" name="user_gender" value="4">
                            <label for="other">回答しない</label>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>生年月日</p>
                        <input type="date" name="user_birth">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>国籍</p>
                        <select name="" id="" name="user_natl">
                            <option value="" disabled selected style="display:none;">国籍を選択してください</option>
                            <option value="">Japan</option>
                            <option value="">England</option>
                            <option value="">Russia</option>
                        </select>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>居住地（国）</p>
                        <select name="" id="" name="user_address_cntry">
                            <option value="" disabled selected style="display:none;">居住地（国）を選択してください</option>
                            <option value="">Japan</option>
                            <option value="">England</option>
                            <option value="">Russia</option>
                        </select>
                    </div>

                    <div class="section__input">
                        <p>居住地（Cityレベル）</p>
                        <select name="" id="" name="user_address_pref">
                            <option value="" disabled selected style="display:none;">居住地（Cityレベル）を選択してください</option>
                            <option value="">Japan</option>
                            <option value="">England</option>
                            <option value="">Russia</option>
                        </select>
                    </div>

                    <div class="section__input">
                        <p>LINE</p>
                        <input type="text" name="user_sns_line" id="user_sns_line" placeholder="LINEIDを入力してください">
                    </div>

                    <div class="section__input">
                        <p>Facebook</p>
                        <input type="text" name="user_sns_facebook" id="user_sns_facebook" placeholder="ユーザーIDを入力してください">
                    </div>

                    <div class="section__input">
                        <p>その他SNS</p>
                        <input type="text" class="sns" name="user_sns_id['type']" id="user_sns_id['type']" placeholder="SNS名を入力してください">
                        <input type="text" class="sns" name="user_sns_id['value']" id="user_sns_id['value']" placeholder="SNSのIDを入力してください">
                    </div>
                    <div class="submit_btn">
                        <input type="submit" class="submit" id="register_input_submit" name="register_input_submit" value="確認">
                    </div>
                </form>
        </div>
    </main>
    <footer>
        <div class="footer__container">
            <div class="usage">
                <ul>
                    <li class="font_big">How to use</li>
                </ul>
                <ul>
                    <li class="right"><a href="">初めての方へ</a></li>
                    <li class="right"><a href="">新規登録</a></li>
                    <li class="right"><a href="">Japan Gateとは</a></li>
                </ul>
            </div>
            <div class="service">
                <ul>
                    <li class="font_big">Service</li>
                </ul>
                <ul>
                    <li class="right">coming soon</li>
                </ul>
            </div>
            <div class="news">
                <ul>
                    <li class="font_big">News</li>
                </ul>
                <ul>
                    <li class="right"><a href="">新着情報</a></li>
                    <li class="right"><a href="">お知らせ</a></li>
                </ul>
            </div>
            <div class="support">
                <ul>
                    <li class="font_big">Support</li>
                </ul>
                <ul>
                    <li class="right"><a href="">新着情報</a></li>
                    <li class="right"><a href="">お知らせ</a></li>
                    <li class="right"><a href="">よくある質問</a></li>
                    <li class="right"><a href="">プライバシー</a></li>
                    <li class="right"><a href="">企業情報</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
            // ユーザー名空欄チェック 
        function user_input_check(){
            const user_name = $("#user_name").val();

            if(user_name.length == 0){
                return false;
            }
            return true;
        };
        // ユーザー名カナ空欄チェック 
        function user_input_kana_check(){
            const user_kana = $("#user_kana").val();

            if(user_kana.length == 0){
                return false;
            }
            return true;
        };

        // 送信内容チェック
        function error_check(){
            let user_flag = false;

            // ユーザー名チェック
            if(!user_input_check()){
                $("#error_msg_username").html("氏名が入力されていません");
                $("#user_name").addClass("input_form_error");
            }else{
                $("#error_msg_username").html("");
                $("#user_name").removeClass("input_form_error");
            }
            // ユーザー名カナチェック
            if(!user_input_kana_check()){
               
               $("#error_msg_username_kana").html("氏名（カナ）が入力されていません");
               $("#user_kana").addClass("input_form_error");
           }else{
               $("#error_msg_username_kana").html("");
               $("#user_kana").removeClass("input_form_error");
           }

            
            // エラーメッセージ無い時に、SUBMITする
            if(user_flag){
                // （仮）サーバーエラーメッセージ
                alert("submitする");
                // btm_error();
                // $('form').unbind('submit').submit();
            }
        }
        $("#register_input_submit").on("click",() => {
            // clickイベントの停止 
            event.preventDefault();
            error_check();
        });
    </script>
<!-- <script>
    $("#register_input_submit").on("click",(event) => {
        // clickイベントの停止 
        event.preventDefault();
        let pass_flag = false;
        
        // ワンタイムパスワード空欄チェック
        if(!pass_input_check()){
            $("#error_msg_password").html("ワンタイムパスワードを入力してください。");
            $("#password").addClass("input_form_error");
        }else{
            $("#error_msg_password").html("");
            $("#password").removeClass("input_form_error");
            pass_flag = true;
        }

        // エラーメッセージ無い時に、SUBMITする
        if(pass_flag){
            // （仮）サーバーエラーメッセージ
            alert("submitする");
            // btm_error();
            // $('form').unbind('submit').submit();
        }
    });
</script> -->
</body>
</html> 