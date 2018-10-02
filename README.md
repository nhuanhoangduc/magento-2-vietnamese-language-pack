## Magento 2 Vietnamese Language Pack

Switching your store to Vietnamese according to **Magento 2 Vietnamese Language Pack** instruction. The transformation will cover both storefront and backend on Magento 2 store. It is time to focus on the local languages when there is any plan to enter the international market as Vietnam. This will help you eliminate the language barrier for the better commerce.

The language package is contributed by native Vienamese speakers from Magento 2 Translation Project, so the quality of the convertion is surely guanranteed. Then, you will donwload and install the zip file that compress all translated phrases into Vietnamese. 

Read more [Magento 2 Vietnamese Language Pack](https://www.mageplaza.com/magento-2-vietnamese-language-pack.html)


## Overview

- 1. Language Package Process
- 2. Install Vietnamese Language Pack
- 3. How to active Vietnamese language pack
- 4. How to contribute
- 5. Supported Magento versions

## 1. Language Package Process

This is status of Vietnamese Language Pack, you can see how many percentage of this project has been done.

![language pack](http://progressed.io/bar/{{process}}?title=translated)

It is not fully translated? Feel free to contribute:
- [On Crowdin]({{crowdin}}): It takes time to approve your contribution by Magento team.
- [On Github]({{github_url}}/blob/master/HOW-TO-CONTRIBUTE.md): It's faster, our team will approve it after you send pull request.


Find other [language packs here](https://www.mageplaza.com/kb/magento-2-language-pack/)

## 2. How to Install Vietnamese Language Pack

There are 3 different methods to install this language pack.

### ✓ Method #1. Composer method (Recommend)
Install the Vietnamese language pack via composer is never easier.

**Install Vietnamese pack**:

```
{{composer_install}}
```


**Update  Vietnamese pack**:

```
{{composer_update}}
```

#### Authentication required (If any)

![Authentication required](https://cdn.mageplaza.com/media/general/dmryiPk.png)

If you have not added this authentication, you can follow [this guide](http://devdocs.magento.com/guides/v2.0/install-gde/prereq/connect-auth.html)


### ✓ Method #2. Copy & Paste method (Not recommended)

This method suitable for non-technical people such as merchants. Just download the package then flush cache.

**Overview**

- Step 1: Download the Vietnamese language pack
- Step 2: Unzip Vietnamese pack
- Step 3: Flush Magento 2 Cache

#### Step 1 : Download the Vietnamese language pack

You can download the language pack from above link

#### Step 2: Unzip Vietnamese pack

Unzip the Vietnamese language pack to Magento 2 root folder. In this guide, we extract to `/var/www/html/`
Your Magento 2 root folder can be: `/home/account_name/yourstore.com/public_html/`

```
unzip master.zip app/i18n/Mageplaza/{{magento_package_code}}
```

You also can unzip locally and upload them to Magento 2 root folder.

#### Step 3: Flush Magento 2 Cache

Follow this guide to [Flush Cache on your Magento 2 store](https://www.mageplaza.com/kb/how-flush-enable-disable-cache.html)


### ✓ Method #3. Download and install manually (Not recommended)

To download and install Vietnamese pack manually, you have to access to your server via FTP or SFTP.

#### Step 1: Download the package

- [Download .zip]({{github_latest_version}})
- [Download .tar.gz]({{github_latest_version_tar}})

#### Step 1: Unzip and upload

Unzip the compressed file and upload file `vi_VN.zip` into `app/i18n/mageplaza/vi_VN/vi_VN.csv`

#### Step 2: Flush cache

Follow this guide to [Flush Cache on your Magento 2 store](https://www.mageplaza.com/kb/how-flush-enable-disable-cache.html)


## 3. How to active Vietnamese language pack

Now time to active the Vietnamese language pack for your Magento 2 store. From Magento 2 admin panel, navigate to `Stores > Configuration > General > Locale Options`
![{{Magento 2 Vietnamese language pack}}](https://cdn.mageplaza.com/media/general/aPSUA0l.png)


## 4. How to contribute

Contribute to this language at https://crowdin.com/project/magento-2/vi

## 5. Supported Magento versions

It supports all Magento 2 versions include [Magento 2 open-source](https://www.mageplaza.com/download-magento/), Magento 2 Commerce.

{{magento_versions}}


## 6. Note

- This project automatically updates weekly from Crowdin.
- Any question, issue please [create a new issue]({{github_url}}/issues/new)

## 7. Language package authors

- [Magento official translations project for Magento 2]({{crowdin}})
- Language packages built by [Mageplaza team](https://www.mageplaza.com/)


## 8. References:

- https://www.mageplaza.com/magento-2-vietnamese-language-pack.html
- https://crowdin.com/project/magento-2




## Mageplaza extensions on Magento Marketplace, Github


- [Layered Navigation](https://marketplace.magento.com/mageplaza-layered-navigation-m2.html)
- [One Step Checkout](https://marketplace.magento.com/mageplaza-magento-2-one-step-checkout-extension.html)
- [SMTP](https://marketplace.magento.com/mageplaza-module-smtp.html) ; [SMTP on Github](https://github.com/mageplaza/magento-2-smtp)
- [Blog](https://github.com/mageplaza/magento-2-blog)
- [Security](https://marketplace.magento.com/mageplaza-module-security.html)
- [Social Login](https://github.com/mageplaza/magento-2-social-login)
- [SEO](https://github.com/mageplaza/magento-2-seo) ; [SEO on Marketplace](https://marketplace.magento.com/mageplaza-magento-2-seo-extension.html)
- [SMTP](https://github.com/mageplaza/magento-2-smtp)
- [Product Slider](https://github.com/mageplaza/magento-2-product-slider)
- [Banner](https://github.com/mageplaza/magento-2-banner-slider)
- [Sample Payment Method](https://github.com/mageplaza/magento-2-sample-payment-method)



