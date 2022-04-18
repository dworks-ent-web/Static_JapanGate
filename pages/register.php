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
					<p><span>必須</span>パスワード</p>
					<input type="password" name="user_password" id="user_password" placeholder="12文字以上で入力してください">
					<span id="error_msg_user_password" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>パスワード（確認）</p>
					<input type="password" name="user_password_confirm" id="user_password_confirm" placeholder="再度パスワードを入力してください">
					<span id="error_msg_user_password_confirm" class="error_msg"></span>
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
				</div>

				<div class="section__input">
					<p><span>必須</span>生年月日</p>
					<input type="date" name="user_birth">
					<span id="error_msg_user_birth" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>国籍</p>
					<select name="user_natl" id="">
						<option value="" disabled selected style="display:none;">国籍を選択してください</option>
						<option value="">Japan</option>
						<option value="">England</option>
						<option value="">Russia</option>
					</select>
					<span id="error_msg_user_natl" class="error_msg"></span>
				</div>

				<div class="section__input">
					<p><span>必須</span>居住地（国）</p>
					<select name="user_address_cntry" id="user_address_cntry">
						<option value="" disabled selected style="display:none;">居住地（国）を選択してください</option>
						<option value="">Japan</option>
						<option value="">England</option>
						<option value="">Russia</option>
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
					<input type="text" class="sns" name="user_sns_other['value']" id="user_sns_other_value" placeholder="SNSのIDを入力してください">
					<span id="error_msg_user_sns_other" class="error_msg"></span>
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
					<li class="right"><a href="">プライバシー</a></li>
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

				$("#error_msg_user_kana").html("全角カタカナで入力してください");
				$("#user_kana").addClass("input_form_error");
			} else {
				$("#error_msg_user_kana").html("");
				$("#user_kana").removeClass("input_form_error");
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