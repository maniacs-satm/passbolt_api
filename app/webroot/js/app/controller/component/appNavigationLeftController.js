steal(
    'mad/controller/component/menuController.js'
).then(function () {

	/*
	 * @class passbolt.controller.component.AppNavigationLeftController
	 * @inherits {mad.controller.component.MenuController}
	 * @parent index
	 * 
	 * Navigation left controller
	 * 
	 * @constructor
	 * Instantiate the application navigation left controller
	 * 
	 * @param {HTMLElement} element the element this instance operates on.
	 * @param {Object} [options] option values for the controller.  These get added to
	 * this.options and merged with defaults static variable 
	 * @return {passbolt.controller.component.AppNavigationLeftController}
	 */
	mad.controller.component.MenuController.extend('passbolt.controller.component.AppNavigationLeftController', /** @static */ {

		'defaults': {}

	}, /** @prototype */ {

		/**
		 * After start. Init the menu items
		 * @return {void}
		 */
		'afterStart': function () {
			var menuItems = [
				new mad.model.Action({
					'id': uuid(),
					'label': __('home'),
					'cssClasses': ['home'],
					'action': function () {
						mad.bus.trigger('workspace_selected', 'js_passbolt_passwordWorkspace_controller');
					}
				}), new mad.model.Action({
					'id': uuid(),
					'label': __('passwords'),
					'cssClasses': ['passwords'],
					'action': function () {
						mad.bus.trigger('workspace_selected', 'js_passbolt_passwordWorkspace_controller');
					}
				}), new mad.model.Action({
					'id': uuid(),
					'label': __('users'),
					'cssClasses': ['users todo'],
					'action': function () {
						mad.bus.trigger('workspace_selected', 'js_passbolt_peopleWorkspace_controller');
					}
				}), new mad.model.Action({
					'id': uuid(),
					'label': __('help'),
					'cssClasses': ['help todo'],
					'action': function () {
						mad.bus.trigger('workspace_selected', 'js_passbolt_passwordWorkspace_controller');
					}
				})
			];
			this.load(menuItems);
		}

	});
});