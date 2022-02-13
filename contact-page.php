<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<div class="contact-form-wrapper">
	<div class="contact-form__inner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-title-text.png" class="contact__image-process" alt="">
		<h1 class="contact__main-title">ご相談・お問い合わせ</h1>
		<h3>イベントや映像などについて、何でもお気軽にご相談ください。</h3>
		<p>*入力必須項目</p>

		<?php echo do_shortcode('[mwform_formkey key="58"]'); ?>
    </div>
</div>




<div class="contact-list">
	<div class="contact-title-wrapper">
		<p class="contact-title">お問い合わせ種別*</p>
	</div>
	<div class="contct-content-wrapper">[mwform_checkbox name="category-check" children="イベント・映像制作のご相談,団体・活動内容について,その他" separator="," vertically="true" class="category-check-box"]</div>
</div>


<div class="contact-list">
	<div class="contact-title-wrapper">
		<p class="contact-title">お名前 *</p>
	</div>
	<div class="contct-content-wrapper">[mwform_text name="name" size="" placeholder="山田花子" class="contact-box"]</div>
</div>

<div class="contact-list">
	<div class="contact-title-wrapper">
		<p class="contact-title">会社名・組織名</p>
	</div>
	<div class="contct-content-wrapper">[mwform_text name="company" size="" placeholder="株式会社xxxx" class="contact-box"]</div>
</div>


<div class="contact-list">
<div class="contact-title-wrapper">
<p class="contact-title">電話番号</p>

</div>
<div class="contct-content-wrapper">[mwform_text name="phone" size="" placeholder="09012345678" class="contact-box"]</div>
</div>
<div class="contact-list">
<div class="contact-title-wrapper">
<p class="contact-title">メールアドレス *</p>

</div>
<div class="contct-content-wrapper">[mwform_email name="email" placeholder="xxxxxx@co.jp" class="contact-box"]</div>
</div>
<div class="contact-list">
<div class="contact-title-wrapper">
<p class="contact-title">メールアドレス(確認) *</p>

</div>
<div class="contct-content-wrapper">[mwform_email name="emailcheck" placeholder="xxxxxx@co.jp" class="contact-box"]</div>
</div>

<div class="contact-list">
<div class="contact-title-wrapper">
<p class="contact-title">住所</p>
</div>
<div class="contct-content-wrapper">[mwform_text name="address" size="" placeholder="東京都 A区 B町 1-2-3" class="contact-box"]</div>
</div>

<div class="contact-list">
<div class="contact-title-wrapper">
<p class="contact-title">お問い合わせ内容 *</p>
</div>
<div class="contct-content-wrapper">[mwform_textarea name="content" cols="40" rows="10" placeholder="最大4000字まで" class="contact-content"]</div>
</div>

<p class="contact-button-wrapper">[mwform_submitButton name="confirm-submit" class="button contact-confirm-button" confirm_value="同意の上、入力内容を確認" submit_value="送信する"]
[mwform_bback class="button contact-back-button" value="back"]修正する[/mwform_bback]</p>



<?php get_footer(); 
