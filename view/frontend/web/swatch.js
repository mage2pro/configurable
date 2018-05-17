// 2018-05-17
// https://github.com/netrixab/magento2-configurable-sku-switch/blob/4ae04e5/view/frontend/requirejs-config.js#L12
define(['jquery', 'mage/utils/wrapper'], function($, w) {'use strict'; return function(sb) {
	sb.prototype._UpdatePrice  = w.wrap(sb.prototype._UpdatePrice , function(_super) {
		var products = this._CalcProducts();
		if (1 === products.length) {
			var id = products[0];
			if ($.isNumeric(id)) {
				var v = this.options.jsonConfig['df_description'][id];
				if (v.length) {
					$('[itemprop=description]').html(v);
				}
			}
		}
		return _super();
	});
	return sb;
};});