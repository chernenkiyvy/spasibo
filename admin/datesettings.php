<?php 
/*Это точка входа в сам компонент */
 
//Защита от прямого обращения к скрипту
defined('_JEXEC') or die;
 
//Создание класса компонента
$controller = JControllerLegacy::getInstance('Datesettings');
//Выполнить задачу запроса
$controller->execute(JRequest::getCmd('task'));
//Переадресация
$controller->redirect();
