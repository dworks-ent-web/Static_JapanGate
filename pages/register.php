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
            
                <form method="post" action="" name="signup_input_submit">

                    <div class="section__input">
                        <p><span>必須</span>氏名</p>
                        <input type="text" name="user_name" placeholder="（例）山田　太郎">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>氏名 カナ</p>
                        <input type="text" name="user_kana" placeholder="（例）ヤマダ　タロウ">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>メールアドレス</p>
                        <input type="text" name="user_email" placeholder="（例）japangate@mail.com">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>パスワード</p>
                        <input type="text" name="user_password" placeholder="（例）半角英数字で記入してください。">
                    </div>
                    
                    <div class="section__input">
                        <p><span>必須</span>性別</p>
                        
                            <input type="radio" id="male" class="radio_btn" name="user_gender" value="man" checked>
                            <label for="male">男性</label>

                            <input type="radio" id="female" class="radio_btn" name="user_gender" value="woman" >
                            <label for="female">女性</label>
                        
                            <input type="radio" id="other" class="radio_btn" name="user_gender" value="other" >
                            <label for="other">その他</label>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>生年月日</p>
                        <input type="date" name="user_birth">
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>国籍</p>
                        <select name="" id="" name="user_natl">
                            <option value="" disabled selected style="display:none;">国籍を選択してください。</option>
                            <option value="">Japan</option>
                            <option value="">England</option>
                            <option value="">Russia</option>
                        </select>
                    </div>

                    <div class="section__input">
                        <p><span>必須</span>居住地（国）</p>
                        <select name="" id="" name="user_address_cntry">
                            <option value="" disabled selected style="display:none;">居住地を選択してください。</option>
                            <option value="">Japan</option>
                            <option value="">England</option>
                            <option value="">Russia</option>
                        </select>
                    </div>

                    <div class="section__input">
                        <p>居住地</p>
                        <input type="text" name="user_address_pref" placeholder="居住地を選択してください。">
                    </div>

                    <div class="section__input">
                        <p>LINE</p>
                        <input type="text" name="user_sns_line" placeholder="LINEIDを入力してください。">
                    </div>

                    <div class="section__input">
                        <p>Facebook</p>
                        <input type="text" name="user_sns_facebook" placeholder="ユーザーIDを入力してください。">
                    </div>

                    <div class="section__input">
                        <p>その他SNS</p>
                        <select class="sns_select" name="user_sns_other" id="">
                            <option value="" disabled selected style="display:none;">SNSを選択してください。</option>
                            <option value="">SNS</option>
                            <option value="">SBS</option>
                            <option value="">SMS</option>
                        </select>
                        <input type="text" class="sns" name="user_sns_id" placeholder="SNSのIDを入力してください。">
                    </div>
                    <div class="submit_btn">
                        <input type="submit" class="submit" name="send" value="確認">
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
</body>
</html> 