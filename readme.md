WordPress theme development using [Laravel Mix](https://laravel.com/docs/5.8/mix).

## Getting started:

1. Clone into an empty theme directory
1. `cd` into your new theme directory
1. Run `npm install`
1. Copy the `local-example.json` file to `local.json` and replace the `proxy` value with your local development hostname
   - This will allow you to use live reload/injection while working on your CSS/JS
  
### To Start Development

Run `npm run dev`

Assets will be compiled and BrowserSync will proxy the dev host allowing you to work while seeing your CSS and JS 
changes appear on the site as they are recompiled.  

### To Prepare Assets for Deployment

Run `npm run prod`

