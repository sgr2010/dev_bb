<!-- オーバーレイ（メインモーダル） -->
<div class="overlay" id="ovlay"></div>

<!-- オーバーレイ（サブモーダル） -->
<div class="overlay sub_overlay" id="sub_ovlay"></div>

<!-- メッセージ表示（メインモーダル）-->
<div class="modal modal-font" id="msgmodal">
	<br>
	<?php echo $message;?>
	<br><br><br>
	<button class="modal-button" onClick="modal_close('msgmodal');">閉じる</button>
</div>

<!-- メッセージ表示（サブモーダル） -->
<div class="modal sub_modal modal-font" id="submodal">
	<br>
	<div id="sub_msg"></div>
	<br><br><br>
	<button class="modal-button" onClick="sub_modal_close();">閉じる</button>
</div>
