<?php
/**
 * @file classes/components/form/FieldText.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2000-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FieldText
 * @ingroup classes_controllers_form
 *
 * @brief A basic text field in a form.
 */
namespace PKP\components\forms;
class FieldText extends Field {
	/** @copydoc Field::$component */
	public $component = 'field-text';

	/** @var string What should the <input type=""> be? */
	public $inputType = 'text';

	/** @var boolean Whether the user should have to click a button to edit the field */
	public $optIntoEdit = false;

	/** @var string The label of the button added by self::$optIntoEdit */
	public $optIntoEditLabel = '';

	/** @var string Accepts: `small`, `regular` or `large` */
	public $size = 'regular';

	/** @var string A prefix to display before the input value */
	public $prefix = '';

	/**
	 * @copydoc Field::getConfig()
	 */
	public function getConfig() {
		$config = parent::getConfig();
		$config['inputType'] = $this->inputType;
		$config['optIntoEdit'] = $this->optIntoEdit;
		$config['optIntoEditLabel'] = $this->optIntoEditLabel;
		$config['size'] = $this->size;
		$config['prefix'] = $this->prefix;

		return $config;
	}
}
