# stickee PHP CS Fixer config

Provides a [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) config for stickee projects.

## Installation

```shell
mkdir -p tools/php-cs-fixer
composer require --working-dir=tools/php-cs-fixer stickee/php-cs-fixer-config
cp tools/php-cs-fixer/vendor/stickee/php-cs-fixer-config/dist/.php-cs-fixer.php .php-cs-fixer.php
```

You must commit this new directory and the `.php-cs-fixer.php` config file.

You must add `.php-cs-fixer.cache` to your `.gitignore` file.

_[Why do we install PHP CS Fixer into its own directory?](https://github.com/FriendsOfPHP/PHP-CS-Fixer#installation)_

## Usage

```shell
tools/php-cs-fixer/bin/php-cs-fixer fix
```

### Overrides

You can override any of the rules or add your own by adding them to the `$overrideRules` array in the `.php-cs-fixer.php` file.

See [here](https://mlocati.github.io/php-cs-fixer-configurator) for a detailed description of available rules and their options.

#### Example

This has already been done for you with the `ordered_class_elements` rule which has been reset to the `PSR12` value of `use_traits` only. 

This has been added to help PR reviewers see only what has been changed when linting your project and not elements that have been re-ordered.

Once you are happy that your project has been linted correctly you may remove this override to use the stickee settings for this rule which are stricter and order more elements.

### Pre-Commit Hook

You can use PHP CS Fixer in combination with [Husky](https://typicode.github.io/husky/) and [Lint Staged](https://github.com/okonet/lint-staged) to lint only git staged PHP files.

#### Installation

- install [Husky](https://typicode.github.io/husky/#/?id=automatic-recommended) into your project
- install [Lint Staged](https://github.com/okonet/lint-staged#installation-and-setup) into your project
- `cp tools/php-cs-fixer/vendor/stickee/php-cs-fixer-config/dist/.husky/pre-commit .husky/pre-commit`
- `cp tools/php-cs-fixer/vendor/stickee/php-cs-fixer-config/dist/.lintstagedrc.json .lintstagedrc.json`


### CI

An example GitHub action file is included at `tools/php-cs-fixer/vendor/stickee/php-cs-fixer-config/dist/.github/workflows/php-cs-fixer.yaml`.

This will run PHP CS Fixer on PRs and new commits to those PRs.

In theory this is not necessary since developers should be linting their code using the above mentioned pre-commit hook, however it ensures that PRs contain linted code in case a developer skips the pre-commit hook.

## Rules

The available RuleSets can be found at `tools/php-cs-fixer/vendor/stickee/php-cs-fixer-config/src/RuleSet/`.

You can probably \[ctrl\] + click the class in the `.php-cs-fixer.php` file to get to it in your editor.

### Web description (prettier)

You can use either https://mlocati.github.io/php-cs-fixer-configurator/#version:3.2 or https://cs.symfony.com/doc/rules/index.html to see what the rules are doing.

### CLI description (faster)

Alternatively you can run `tools/php-cs-fixer/vendor/bin/php-cs-fixer describe <rule-or-set-name>`.

## Credits

### https://github.com/Visual-Craft/php-cs-fixer-config 

for inspiration on how to create a custom config for PHP CS Fixer since there's no built-in way to do it.

### stickeerehan

for his earlier work on PHP Code Styles so I didn't have to start from scratch.

### The "supermarket mobiles" developers

for reviewing the _many_ PRs that finalised the rules that we use.

### The members of the #codestyle Slack channel

for caring about code styles.