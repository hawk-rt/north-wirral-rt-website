## North Wirral Round Table Website

This site is built using the [tighten/jigsaw](https://github.com/tighten/jigsaw) static site builder.

#### Development

```shell
git clone git@github.com:hawk-rt/north-wirral-rt-website.git
composer install
npm install
npm run watch
```

You can now view the site at http://localhost:3000 in your browser. View the [jigsaw docs](https://jigsaw.tighten.com/docs/installation/) for more details.

#### Deploying to GitHub Pages

```shell
npm run prod
git add build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages
```
