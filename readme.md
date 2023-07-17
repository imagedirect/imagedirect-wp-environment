# imageDirect Atmosphere

=== lifecycleScripts

needs testing - lifecycle docs are thin—on—the—ground

```js
"lifecycleScripts": {
    // external cli
        "afterStart": "wp-env run cli wp rewrite structure /%category%/%postname%/",
        // internal cli
        "afterStart": "wp rewrite structure '/%year%/%monthnum%/%postname%/'",
    }
    ```

## todo

=== `wp-env destroy` cmd failing - not removing cli test images
