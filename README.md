## Hoylake and West Kirby Round Table Website

This site is built using the [tighten/jigsaw](https://github.com/tighten/jigsaw) static site builder.

#### Deploying to GitHub Pages

```shell
npm run prod
git add build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages
```
