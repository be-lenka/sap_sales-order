#!/bin/bash

#usage:  ./generate.sh filename.json package_name NamespaceName
#example: ./generate.sh sales_order.json sales_order SalesOrder

mkdir -p resources
docker run --user $(id -u):$(id -g) --rm -v ${PWD}:/local openapitools/openapi-generator-cli:v7.0.0 generate -t /local/resources -i /local/$1 -g php -o /local/ -p licenseName="MIT" -p developerOrganization="BeLenka Dev" -p developerOrganizationUrl="https://www.belenka.com" -p composerPackageName=be-lenka/sap/$2 -p invokerPackage=BeLenka\\SAP\\$3

find "lib/" -type f -name '*.php' -print0 | while IFS= read -r -d '' file
do
    # Use sed to replace the text '\GuzzleHttp\Utils::jsonEncode' with 'json_encode'
    sed -i 's/\\GuzzleHttp\\Utils::jsonEncode/json_encode/g' "$file"
    echo "Replaced in: $file"
done

echo "Replacement complete."
