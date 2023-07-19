# imageDirect Atmosphere

=== wp-env.json

- lifecycleScripts
  - needs { -- more -- } testing
  - [lifecycleScripts refs](<https://github.com/WordPress/gutenberg/blob/trunk/packages/env/README.md#:~:text=the%20development%20instance.-,Lifecycle%20Scripts,-Using%20the%20lifecycleScripts>)
  - [what-i-should-have-read-first](<https://github.com/WordPress/gutenberg/blob/trunk/packages/env/README.md#:~:text=Xdebug%20modes.%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%5Bstring%5D-,%2D%2Dscripts,-Execute%20any%20configured>)
- `"wp-env:go": "wp-env start -- --scripts"` swordsman of two flag town!

```json
"lifecycleScripts": {
    "afterStart": "wp-env run cli wp rewrite structure /%category%/%postname%/",
    "afterClean": "i-guess something goes here to terminate cli"
}
    ```

## todo

=== `wp-env destroy` cmd failing

- not removing cli test images
- wordpress:cli-php 8.1 > IN USE > lifecycle scripts?
