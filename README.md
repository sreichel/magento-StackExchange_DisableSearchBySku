# DisableSearchBySku Magento 1 Extension

This extension adds availability to disable search by SKU, even when SKU is globally set to searchable.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/8f4e1f6da56143dc89f11181c23a9c89)](https://www.codacy.com/app/sreichel/magento-StackExchange_DisableSearchBySku?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=sreichel/magento-StackExchange_DisableSearchBySku&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/48116c781e72357ade04/maintainability)](https://codeclimate.com/github/sreichel/magento-StackExchange_DisableSearchBySku/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/48116c781e72357ade04/test_coverage)](https://codeclimate.com/github/sreichel/magento-StackExchange_DisableSearchBySku/test_coverage)

## Facts
- version: 1.1.0
- extension key: StackExchange_DisableSearchBySku
- [extension on GitHub](https://github.com/sreichel/magento-StackExchange_DisableSearchBySku)

### Description
[How to disable search by SKU (for specific store)?](https://magento.stackexchange.com/questions/173804/how-to-disable-search-by-sku-for-specific-store)

> For a specific store i want an remove search results, if search query matches our SKU pattern.
> 
>  1. disable "searchable" in attribute config is no solution
>  2. rewrite core files is not wanted
> 
> So, what i need is an event which let me manipulate the search query or product collection for search result page.

### Requirements
- PHP >= 5.4.0 

### Compatibility
- Magento >= 1.5

#### Installation Instructions
- via modman
```
modman clone https://github.com/sreichel/magento-StackExchange_DisableSearchBySku.git
```
- via composer
```
composer require mse-sv3n/disable-search-by-sku
```

#### Uninstallation
- via modman
```
modman remove magento-stackexchange-disablesearchbysku
```
- via composer
```
composer remove mse-sv3n/disable-search-by-sku
```

### Usage
1. get to config section and enable/disable function

### Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/sreichel/magento-StackExchange_DisableSearchBySku/issues).

### Contribution
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

### License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
