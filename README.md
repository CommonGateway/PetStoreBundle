# PetStoreBundle [![Codacy Badge](https://app.codacy.com/project/badge/Grade/980ea2efc85a427ea909518f29506ff6)](https://app.codacy.com/gh/CommonGateway/PetStoreBundle/dashboard?utm_source=gh\&utm_medium=referral\&utm_content=\&utm_campaign=Badge_grade)

This repository is for creating PHP Symfony flex bundles. The Common Gateway ecosystem  uses this template for rapid development to extend Gateway functionlity outside of the Core.

The first section is about installing plugins. The latter part is about custom plugins to extend Common Gateway functionality.

### Installation with the Common Gateway admin user-interface

Once a bundle is set up correctly (like this repository), the Common Gateway can discover the bundle without additional configuration. Head to the `Plugins` tab to search, select and install plugins.

#### Installing with PHP commands

To execute the following command, you will need [Composer](https://getcomposer.org/download/) or a dockerized installation that already has PHP and Composer.

The Composer method in the terminal and root folder:

> for the installation of the plugin

`$composer require common-gateway/pet-store-bundle:dev-main`

> for the installation of schemas

\`$php bin/console commongateway:install common-gateway/pet-store-bundle

The dockerized method in the terminal and root folder:

> for the installation of the plugin

`$docker-compose exec php composer require common-gateway/pet-store-bundle:dev-main`

> for the installation of schemas

`$docker-compose exec php bin/console commongateway:install common-gateway/pet-store-bundle`

***

## Creating your Bundle

This section is for developers who want to build plugins to extend Common Gateway functionality without adding to the core codebase.

The following knowledge is assumed and/or installed:

[Composer](https://getcomposer.org/download/)
[Packagist](https://packagist.org/)
[Docker](https://www.docker.com/products/docker-desktop/)
[Schema.json](https://json-schema.org/)
Basic knowledge of the [Common Gateway](https://github.com/CommonGateway)

### Using this template

This template is for rapid Symfony bundle development and meant as a model to base your custom plugin on. Follow the next steps to create your plugin within 45 minutes or less

1.  Login on [GitHub](https://github.com)
2.  Use [this template](https://github.com/CommonGateway/PetStoreBundle/generate)
3.  Name your Bundle (CamelCase). The bundle needs to end with `Bundle` as per Symfony [naming](https://symfony.com/doc/current/bundles/best_practices.html#bundles-naming-conventions) conventions.
4.  Press the green button `Create repository from template`
5.  Update file names and namespace to your fitting :

    *   Open composer.json, and change the name to your fitting. The first word should be the namespace, and the second the bundle's name.

    > Note: this is kebab-case. Also read: [naming your package](https://packagist.org/about#naming-your-package)

    *   Check the autoload field to be set accordingly.
    *   Open PetStoreBundle.php and change the Bundle `name` and `namespace`. The namespace should be the same as your package name in `composer.json` but in CamelCase. So `common-gateway/pet-store-bundle` becomes `CommonGateway/PetStoreBundle`
    *   Rename the `/Service` and `/ActionHandler` accordingly (or delete if not used).
    *   Rename the `/DependencyInjection/PetStoreExtension.php` to your `BundleNameExtension.php`
    *   Rename the `/Resources/config/services.yaml` namespaces

### Adding schemas

You can load [json schemas](https://json-schema.org/learn/getting-started-step-by-step.html#starting-the-schema) as Entities from your [`/Schema`](https://github.com/CommonGateway/PetStoreBundle/tree/main/Schema) folder to use in the Common Gateway and work with objects based on your schemas.

You can add existing schemas or create your own and add them to the`/Schema` folder. There is an example shown here in [`/Schema/example.json`](https://github.com/CommonGateway/PetStoreBundle/blob/main/Schema/example.json).

The following properties are required, and without them, the Gateway won't recognize the schema as valid:

    - `version` can start on '0.1.0.' 

> without this property, you can't update schemes

    - `$schema` (https://docs.commongateway.nl/schemas/Entity.schema.json)
    - `$id` (https://example.com/schema/{Your scheme name}.schema.json)

> Unique `$id` to be relatable to other schemas.

    - `type` must be 'object'
    - `properties` must be schema properties

Once you add schemas to the repository, you can also add objects/data for those schemas. There is an example shown in the [`/Data`](https://github.com/CommonGateway/PetStoreBundle/tree/main/Data) folder.
