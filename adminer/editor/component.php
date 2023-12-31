<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @var $USER
 */
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

if ($this->StartResultCache($arParams["CACHE_TIME"], $USER->GetGroups()))
{
	$iblockId = $arParams["IBLOCK_ID"];
	$iblockType = $arParams["IBLOCK_TYPE"];
	$properties = $arParams["PROPERTY_CODE"];
	$codes = [];
	foreach ($properties as $key => $prop) {
		if ($prop != '') {
			$codes[] = "PROPERTY_" . $prop;
		}
	}
	if(!empty($codes)) {
		$arrFilter = array_merge($codes, ["IBLOCK_ID" => $iblockId, "IBLOCK_TYPE" => $iblockType]);
		$res = CIBlockElement::GetList([], $arrFilter, false, [], $codes)->GetNext();
	}else{
		$arrFilter = array_merge($codes, ["IBLOCK_ID" => $iblockId, "IBLOCK_TYPE" => $iblockType]);
		$res = CIBlockElement::GetList([], $arrFilter, false, [], $codes)->GetNextElement()->GetProperties();
	}
	$arResult["PROPS"] = $res;
    $this->IncludeComponentTemplate();
}
?>

