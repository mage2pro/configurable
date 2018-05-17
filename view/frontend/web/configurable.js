// 2018-05-17 https://magento.stackexchange.com/a/156740
define(['jquery', 'mage/utils/wrapper'], function($, w) {'use strict'; return function(sb) {
	sb.prototype._reloadPrice  = w.wrap(sb.prototype._reloadPrice , function(_super) {
		var v = this.options.spConfig['df_description'][this.simpleProduct];
		if (v.length) {
			$('[itemprop=description]').html(v);
		}
		return _super();
	});
	return sb;
};});