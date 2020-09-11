wget -O vi_VN.csv https://github.com/nhuanhoangduc/magento-2-vietnamese-language-pack/raw/master/vi_VN.csv
php bin/magento i18n:pack -m replace vi_VN.csv -d vi_VN
php bin/magento setup:static-content:deploy vi_VN -f
php bin/magento cache:flush

5254 -> 5335
