<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/Trusted.Sign/include.php");

IncludeModuleLangFile(__FILE__);
$module_id = "Trusted.Sign";
$WEBS_RIGHT = $APPLICATION->GetGroupRight($module_id);

$aTabs = array(
	array("DIV" => "fedit1", "TAB" => GetMessage("WS_GADGET"), "ICON" => "", "TITLE" => GetMessage("WS_GADGET_ALT")),
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
$tabControl->BeginNextTab();

?>
<tr>
	<td colspan="2">
		<a href="/bitrix/components/bitrix/webservice.statistic/distr/BitrixStat.gadget"><?= GetMessage("TSS_GADGET_LINK") ?></a><br><br>
		<?= GetMessage("WS_GADGET_DESCR") ?>
	</td>
</tr>

<?

$tabControl->EndTab();
$tabControl->End();
?>