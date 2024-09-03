# imageDirect Wordpress Environment

wp-env build environment

1. When run from the `./` directry his package will initise as a plugin
2. the env will bootstrap and map the following Wordpress directorys:
    - `/mu-plugins/`
    - `/plugins/`
    - `/themes/`
3. and install initial plugins and themes as per directives in the `wp-env.json`

_# note: An unintentional side effect enviroment will result in the creation of an empty folder in the plugins folder which references itself

- v0.0.1rc
- v0.0.2
  - pluck `afterStart` - write errors in d-in-d?
  - add `wordpress-importer` to `wp-env.json`
```json
    "lifecycleScripts": {
        "afterStart": "wp-env run cli wp rewrite structure /%category%/%postname%/"
    }
```