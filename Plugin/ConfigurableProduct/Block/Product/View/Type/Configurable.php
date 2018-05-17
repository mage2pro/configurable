<?php
namespace Dfe\Configurable\Plugin\ConfigurableProduct\Block\Product\View\Type;
use Magento\Catalog\Model\Product as P;
use Magento\ConfigurableProduct\Block\Product\View\Type\Configurable as Sb;
// 2018-05-17
final class Configurable {
	/**
	 * 2018-05-17 https://magento.stackexchange.com/a/156740
	 * @see \Magento\ConfigurableProduct\Block\Product\View\Type\Configurable::getJsonConfig()
	 * https://github.com/magento/magento2/blob/2.1.7/app/code/Magento/ConfigurableProduct/Block/Product/View/Type/Configurable.php#L162-L208
	 * @param Sb $sb
	 * @param string $r
	 * @return string
	 */
	function afterGetJsonConfig(Sb $sb, $r) {
		$a = json_decode($r, true);
		$k = 'df_description';
		$a[$k] = [];
		foreach ($sb->getAllowProducts() as $p) { /** @var P $p */
			$a[$k][$p->getId()] = $p['short_description'];
		}
		return json_encode($a);
	}
}