<h1 align="center">MarkShust_RemoveFavicon</h1> 

<div align="center">
  <p>Remove all favicons from the HTML head.</p>
  <img src="https://img.shields.io/badge/magento-2.3-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/markshust/magento2-module-removefavicon" target="_blank"><img src="https://img.shields.io/packagist/v/markshust/magento2-module-removefavicon.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/markshust/magento2-module-removefavicon" target="_blank"><img src="https://poser.pugx.org/markshust/magento2-module-removefavicon/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

## Table of contents

- [Summary](#summary)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Summary

Out of the box, Magento allows you to define a custom favicon, otherwise it uses Magento's default favicon. Sometimes, a favicon isn't desired at all. This module just removes all favicons, default or otherwise.

## Installation

```
composer require markshust/magento2-module-removefavicon
bin/magento module:enable MarkShust_RemoveFavicon
bin/magento setup:upgrade
```

## Usage

This module has no configuration. Just install, and you won't see favicons anymore.

## License

[MIT](https://opensource.org/licenses/MIT)
