<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc;
$arComponentDescription = array(
    "NAME" => Loc::getMessage("NAME"),
    "DESCRIPTION" => Loc::getMessage("DESCRIPTION"),
    "PATH" => array(
        "ID" => Loc::getMessage("COMPONENT_PATH_ID"),
        "NAME" => Loc::getMessage("COMPONENT_PATH_NAME"),
    ),
);

?>