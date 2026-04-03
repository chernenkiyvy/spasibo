<?php
defined('_JEXEC') or die;

class DatesettingsViewDatesettings extends JViewLegacy
{
    public function display($tpl = null)
    {
        JToolBarHelper::title('Настройка дат акции', 'calendar');
        parent::display($tpl);
    }
}
