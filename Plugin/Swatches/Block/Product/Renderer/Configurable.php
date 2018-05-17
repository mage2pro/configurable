<?php
namespace Dfe\Configurable\Plugin\Swatches\Block\Product\Renderer;
use Magento\Catalog\Model\Product as P;
use Magento\Swatches\Block\Product\Renderer\Configurable as Sb;
// 2018-05-18
final class Configurable {
	/**
	 * 2018-05-17
	 * https://github.com/netrixab/magento2-configurable-sku-switch/blob/4ae04e5/Plugin/Magento/Swatches/Block/Product/Renderer/Configurable.php#L13-L26
	 * @see \Magento\Swatches\Block\Product\Renderer\Configurable::getJsonConfig()
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