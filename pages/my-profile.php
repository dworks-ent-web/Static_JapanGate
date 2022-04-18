<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>マイページ｜JapanGate</title>
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
					<img src="/assets/img/my-profile/my-profile.png">
				</figure>
			</div>
		</div>

		<div class="main_contents_profile">

			<form method="post" action="" name="">

				<div class="section__input">
					<p><span>必須</span>氏名</p>
					<input type="text" name="user_name" id="user_name" placeholder="（例）山田　太郎">
					<span id="error_msg_user_name" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p>氏名（カタカナ）</p>
					<input type="text" name="user_kana" id="user_kana" placeholder="（例）ヤマダ　タロウ">
					<span id="error_msg_user_kana" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>メールアドレス</p>
					<input type="text" name="user_email" id="user_email" placeholder="（例）japangate@mail.com">
					<span id="error_msg_user_email" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>性別</p>

					<input type="radio" name="user_gender" id="male" class="radio_btn" value="1">
					<label for="male">男性</label>

					<input type="radio" name="user_gender" id="female" class="radio_btn" value="2">
					<label for="female">女性</label>

					<input type="radio" name="user_gender" id="other" class="radio_btn" value="3">
					<label for="other">その他</label>

					<input type="radio" name="user_gender" id="unknown" class="radio_btn" value="4">
					<label for="unknown">回答しない</label>
                    <br>
                    <span id="error_msg_user_gender" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>生年月日（年/月/日）</p>
					<input type="date" name="user_birth" id="user_birth">
					<span id="error_msg_user_birth" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>国籍</p>
					<select name="user_natl" id="user_natl">
						<option value="" disabled selected style="display:none;">国籍を選択してください</option>
						<option id="japan" value="">Japan</option>
						<option id="england" value="">England</option>
						<option id="russia" value="">Russia</option>
					</select>
					<span id="error_msg_user_natl" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>居住地（国）</p>
					<select name="user_address_cntry" id="user_address_cntry">
						<option value="" disabled selected style="display:none;">居住地（国）を選択してください</option>
						<option id="cntry1" value="">Japan</option>
						<option id="cntry2" value="">England</option>
						<option id="cntry3" value="">Russia</option>
					</select>
					<span id="error_msg_user_address_cntry" class="error_msg"></span>
				</div>

				<div class="section__input section__input--pref">
					<p>居住地（Cityレベル）</p>
					<select name="user_address_pref" id="user_address_pref">
						<option value="" disabled selected style="display:none;">日本居住の方のみ選択してください</option>
					</select>
					<span id="error_msg_user_address_pref" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p>LINE</p>
					<input type="text" name="user_sns_line" id="user_sns_line" placeholder="LINEIDを入力してください">
					<span id="error_msg_user_sns_line" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p>Facebook</p>
					<input type="text" name="user_sns_facebook" id="user_sns_facebook" placeholder="ユーザーIDを入力してください">
					<span id="error_msg_user_sns_facebook" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p>その他SNS</p>
					<input type="text" class="sns" name="user_sns_other['type']" id="user_sns_other_type" placeholder="SNS名を入力してください">
					<input type="text" name="user_sns_other['value']" id="user_sns_other_value" placeholder="SNSのIDを入力してください">
					<span id="error_msg_user_sns_other" class="error_msg"></span>
				</div>
				<div class="submit_btn">
					<input type="submit" class="submit" id="register_input_submit" name="register_input_submit" value="更新">
				</div>
                <div class="cancel_btn">
                    <input type="reset" class="cancel" id="register_input_cancel" name="register_input_cancel" value="キャンセル">
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
					<li class="right">Coming Soon</li>
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
					<li class="right"><a href="">プライバシーポリシー</a></li>
					<li class="right"><a href="">企業情報</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="/assets/js/php_functions.js"></script>
	<script src="/assets/js/form.js"></script>
	<script>
		// ユーザー名空欄チェック
		function user_input_check() {
			const user_name = $("#user_name").val();
			if (user_name.length == 0) {
				return false;
			}
			return true;
		};
		// ユーザー名カナ空欄チェック
		function user_input_kana_check() {
			const user_kana = $("#user_kana").val();
			if (user_kana.length == 0) {
				return false;
			}

			return true;
		};
        // ユーザーメールアドレス空欄チェック
		function user_input_email() {
			const user_email = $("#user_email").val();
			if (user_email.length == 0) {
				return false;
			}

			return true;
		};
       
        // ユーザー性別空欄チェック
		function user_input_gender() {
			const user_gender = $("#user_gender").val();
			if (user_gender.length == 0) {
				return false;
			}
			return true;
		};
        // ユーザー誕生日空欄チェック
		function user_input_birth() {
			const user_birth = $("#user_birth").val();
			if (user_birth.length == 0) {
				return false;
			}
			return true;
		};
         // ユーザー国籍空欄チェック
		function user_input_natl() {
			const user_natl = $("#user_natl").val();
			if (user_natl.length == 0) {
				return false;
			}
			return true;
		};
        // ユーザー国籍空欄チェック
		function user_input_address_cntry() {
			const user_address_cntry = $("#user_address_cntry").val();
			if (user_address_cntry.length == 0) {
				return false;
			}
			return true;
		};
           // ユーザーSNS空欄チェック
		function user_input_type_value() {
			const user_other_type = $("#user_sns_other_type").val();
            const user_other_value = $("#user_sns_other_value").val();
			if (user_other_type.length == 0 || user_other_value.length == 0) {
				return false;
			}
			return true;
		};

		// 送信内容チェック
		function error_check() {
			let user_flag = false;

            

			// ユーザー名チェック
			if (!user_input_check()) {
				$("#error_msg_user_name").html("氏名を入力してください");
				$("#user_name").addClass("input_form_error");
			    } else {
                    $("#error_msg_user_name").html("");
                    $("#user_name").removeClass("input_form_error");
			}
			// ユーザー名カナチェック
			if (!user_input_kana_check()) {
                $("#error_msg_user_kana").html("");
                //$("#user_kana").addClass("input_form_error");
                } else {
                    if($("#user_kana").val().toUpperCase().match("^[\u30a0-\u30ff]+$")){
                        $("#error_msg_user_kana").html("");
                        $("#user_kana").removeClass("input_form_error");
                    }else{
                        $("#error_msg_user_kana").html("全角カタカナで入力してください");
                        $("#user_kana").addClass("input_form_error");
                    }
                }
            // ユーザーメールアドレスチェック
			if (!user_input_email()) {
                $("#error_msg_user_email").html("メールアドレスが入力されていません");
                $("#user_email").addClass("input_form_error");
                } else {
                    if($("#user_email").val().toUpperCase().match( /^[A-Z0-9._%+-/!#$%&'*=?^_`{|}~]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/g )){
                        $("#error_msg_user_email").html("");
                        $("#user_email").removeClass("input_form_error");
                    }else{
                        $("#error_msg_user_email").html("メールアドレスが入力規則に沿っていません。");
                        $("#user_email").addClass("input_form_error");
                    }
                }
          
             // ユーザー性別チェック
             if ($("#male").prop('checked') || $("#female").prop('checked') || $("#other").prop('checked') || $("#unknown").prop('checked') ){
                $("#error_msg_user_gender").html("");
                }else {
                    $("#error_msg_user_gender").html("性別が選択されていません");
            }
            // ユーザー誕生日チェック
            if(!user_input_birth()){
                $("#error_msg_user_birth").html("生年月日が選択されていません");
                $("#user_birth").addClass("input_form_error");
                }else{
                    $("#error_msg_user_birth").html("");
                    $("#user_birth").removeClass("input_form_error");
            }
            // ユーザー国籍チェック
            if ($("#england").prop('selected') || $("#japan").prop('selected') || $("#russia").prop('selected')){
                $("#error_msg_user_natl").html("");
                $("#user_natl").removeClass("input_form_error");
                }else {
                    $("#error_msg_user_natl").html("国籍が選択されていません");
                    $("#user_natl").addClass("input_form_error");
            }
             // ユーザー居住地（国）チェック
             if ($("#cntry1").prop('selected') || $("#cntry2").prop('selected') || $("#cntry3").prop('selected')){
                $("#error_msg_user_address_cntry").html("");
                $("#user_address_cntry").removeClass("input_form_error");
                }else {
                    $("#error_msg_user_address_cntry").html("居住地(国)が選択されていません");
                    $("#user_address_cntry").addClass("input_form_error");
            }
            // ユーザー居住地（国）チェック
            if (!user_input_type_value()) {
				$("#error_msg_user_sns_other").html("両方を入力してください");
				$("#user_sns_other_type").addClass("input_form_error");
                $("#user_sns_other_value").addClass("input_form_error");
			    } else {
                    $("#error_msg_user_sns_other").html("");
                    $("#user_sns_other_type").removeClass("input_form_error");
                    $("#user_sns_other_value").removeClass("input_form_error");
			}
			// エラーメッセージ無い時に、SUBMITする
			if (user_flag) {
				// （仮）サーバーエラーメッセージ
				alert("submitする");
				// btm_error();
				// $('form').unbind('submit').submit();
			}
		}

		$("#register_input_submit").on("click", () => {
			// clickイベントの停止
			event.preventDefault();
			error_check();
		});
	</script>
</body>

</html>