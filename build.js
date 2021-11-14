const Metalsmith = require('metalsmith');
const markdown = require('metalsmith-markdown');
const layouts = require('metalsmith-layouts');
const collections = require('metalsmith-collections');
const permalinks = require('metalsmith-permalinks');
const handlebars = require('handlebars');
const fs = require('fs');
const { exit } = require('process');

// Partials
handlebars.registerPartial('header', fs.readFileSync(__dirname + '/layouts/partials/header.hbt').toString());
handlebars.registerPartial('footer', fs.readFileSync(__dirname + '/layouts/partials/footer.hbt').toString());

// Helpers
handlebars.registerHelper("collectionList", function(context,options) {
  var ret = "<ul>";

  //console.log(options.data.root.permalink);

  if (options.data.root.permalink !== undefined) {
    var current = context[options.data.root.permalink];  

    // we'll start pulling out items at index 1 instead of index 0, which is the index file for that section
    for (var i=1, j=current.length; i<j; i++) {
      ret = ret + "<li>" + options.fn(current[i]) + "</li>";
    }
  };

  return ret + "</ul>";
});

Metalsmith(__dirname)
  .source('src')
  .destination('public')
  .use(collections({
    children: {
      pattern: 'children/*.md',
    },
    fiction: {
      pattern: 'fiction/*.md',
    },
    nonfiction: {
      pattern: 'non-fiction/*.md',
    },
    novels: {
      pattern: 'novels/*.md',
    },
    banshee: {
      pattern: 'novels/banshee/*.md',
    },
    soundtrack: {
      pattern: 'soundtrack/*.md',
      sortBy: 'priority',
    },
  }))
  .use(markdown())
  .use(permalinks({
    pattern: ':collection/:title',
  }))
  .use(layouts({
    engine: 'handlebars',
    directory: 'layouts',
    default: 'story.hbs',
    pattern: ["*html","**/*.html","**/**/*.html"],
    partials: {
      navigation: 'partials/navigation',
      meta: 'partials/meta'
    }
  }))
  .build(function (err, files) {
    //console.log(files);
    if (err) {
      console.error(err)
    }
    else {
      console.log('build completed!');
    }
  });