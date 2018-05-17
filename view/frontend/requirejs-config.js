// 2018-05-17 https://magento.stackexchange.com/a/156740
var config = {config: {mixins: {
	'Magento_ConfigurableProduct/js/configurable': {'Dfe_Configurable/configurable': true}
	,'Magento_Swatches/js/swatch-renderer': {'Dfe_Configurable/swatch': true}
}}};