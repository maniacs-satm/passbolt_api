<?php
/**
 * Insert ItemTag Task
 *
 * @copyright (c) 2015-present Bolt Softwares Pvt Ltd
 * @licence GNU Affero General Public License http://www.gnu.org/licenses/agpl-3.0.en.html
 * @package      app.plugins.DataUnitTests.Console.Command.Task.ItemTagTask
 * @since        version 2.12.11
 */

require_once(ROOT . DS . APP_DIR . DS . 'Console' . DS . 'Command' . DS . 'Task' . DS . 'ModelTask.php');

App::uses('ItemTag', 'Model');

class ItemTagTask extends ModelTask {

	public $model = 'ItemTag';

/**
 * BeforeExecute
 *
 * @param Model $Model
 */
	public function beforeInsert($Model) {
		$Model->Resource->Behaviors->disable('Permissionable');
	}

/**
 * Get data
 *
 * @return array
 */
	protected function getData() {
		$this->Resource = $this->_getModel('Resource');
		$this->Tag = $this->_getModel('Tag');

		$rts[] = array('ItemTag' => array(
			'id' => Common::uuid('item_tag.id.banking-bank-password'),
			'tag_id' => Common::uuid('tag.id.banking'),
			'foreign_model' => 'Resource',
			'foreign_id' => Common::uuid('resource.id.bank-password'),
			'created' => '2012-11-25 13:39:25',
			'created_by' => Common::uuid('user.id.anonymous')
		));
		$rts[] = array('ItemTag' => array(
			'id' => Common::uuid('item_tag.id.facebook-facebook-account'),
			'tag_id' => Common::uuid('tag.id.facebook'),
			'foreign_model' => 'Resource',
			'foreign_id' => Common::uuid('resource.id.facebook-account'),
			'created' => '2012-11-25 13:39:25',
			'created_by' => Common::uuid('user.id.anonymous')
		));
		$rts[] = array('ItemTag' => array(
			'id' => Common::uuid('item_tag.id.social-facebook-account'),
			'tag_id' => Common::uuid('tag.id.social'),
			'foreign_model' => 'Resource',
			'foreign_id' => Common::uuid('resource.id.facebook-account'),
			'created' => '2012-11-25 13:39:25',
			'created_by' => Common::uuid('user.id.anonymous')
		));
		$rts[] = array('ItemTag' => array(
			'id' => Common::uuid('item_tag.id.drupal-dp1-pwd1'),
			'tag_id' => Common::uuid('tag.id.drupal'),
			'foreign_model' => 'Resource',
			'foreign_id' => Common::uuid('resource.id.dp1-pwd1'),
			'created' => '2012-11-25 13:39:25',
			'created_by' => Common::uuid('user.id.anonymous')
		));
		return $rts;
	}
}
