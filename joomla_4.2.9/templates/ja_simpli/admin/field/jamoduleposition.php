<?php
if(version_compare(JVERSION, '4', 'ge')){
  class JFormFieldJaModulePosition extends \Joomla\Component\Modules\Administrator\Field\ModulesPositionField {
		protected $type = 'jamoduleposition';
  }
} else {
	class JFormFieldJaModulePosition extends \Joomla\CMS\Form\Field\ModulepositionField{
		protected $type = 'jamoduleposition';
	}
}