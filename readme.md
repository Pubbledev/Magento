# Pubble IO Messenger for Magento

Imagine a platform for your customer communication that's realtime when required, delivers instant answers to repetitive questions and makes it incredibly easy to deliver amazing customer support. And oh yeah - Everything and everyone that you need is right there, in one place. That's Pubble.

[![](https://i.vimeocdn.com/video/525936505.webp?mw=960&mh=540)](https://player.vimeo.com/video/133023458)

[Find out more at pubble.io](https://www.pubble.io/)

- [Pricing](https://www.pubble.io/index#pubble-pricing)
- [Features](https://www.pubble.io/features)
- [Retail](https://www.pubble.io/retail)
- [Blog](https://blog.pubble.io)

## Features

Easily install your Pubble messenger code on Magento via the admin configuration panel.

- Supports enabling/disabling the extension.
- Supports adding the messenger widget to your site via either Copy & Pasting the code directly from Pubble or just adding in the App ID and Identifier fields.

## Changelog

Version 1.0.0 is the first major release.

[Changelog](changelog.md)

## Compability

- PHP: 
  - 5.3
  - 5.4
  - 5.5
- Magento CE:
  - 1.7.0.2
  - 1.8.0.0
  - 1.8.1.0
  - 1.9.0.1
  - 1.9.1.0
  - 1.9.2.1
  - 1.9.2.2
- Magento EE:
  - Untested


## Install via Magento Connect

Go to [Magento Connect](http://www.magentocommerce.com/magento-connect/) and sign into your account. Then go to http://www.magentocommerce.com/magento-connect/pubble-io and click 'Install Now', check the box saying 'I agree to then extension license agreement' and then click 'Get Extension Key'.

On your own website, sign into your control panel and go to 'System -> Magento Connect -> Magento Connect Manager'. Sign in again.

Click on Settings, set your 'Preferred State' to 'Stable'. If you are installing to your live website, you may want to set up FTP access as 'Local Filesystem' as your 'Deployment Type' requires that your file owner, group and permissions are set properly, if this is not something you understand, either consult an expert or install over FTP.

Now that your ready to go, under 'Paste extension key to install:', paste the Extension key you just copied from Magento Connect and click 'Install'. Let it do it's magic and install the extension for you. That's it, your done.

## Install via Composer

Add the package to your require list:

```json
"require": {
    "pubbledev/magento": "dev-master"
}
```

Add the repository to your project composer.json file:

```json
"repositories": [
    { "type": "vcs", "url": "http://github.com/pubbledev/magento" }
],
```

Run composer install/update.

```shell
$ composer install
```

```shell
$ composer update
```

## Contributing

[see CONTRIBUTING file](https://github.com/pubbledev/magento/blob/master/CONTRIBUTING.md)

## Licence

BSD 3 Clause [see LICENCE file](https://github.com/pubbledev/magento/blob/master/LICENCE)

## Links

- [Pubble Messenger on Magento Connect](http://www.magentocommerce.com/magento-connect/pubble-io.html)
