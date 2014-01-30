This repo was used for the [January Laravel Meetup](http://www.meetup.com/Laravel-Brussels/events/148656682/)
It aims to show what is possible with the Laravel Framework, combined with the AngularJS Framework.

# The App

The app we're going to build is a shopping list app.

## Basic functionality (will be implemented at the beginning, during the 20 first minutes)

- Adding an item
- Viewing items
- Checking/Unchecking item
- Deleting item
- Grouping items by checked/unchecked

## Advanced articles to answer questions more specifically

There's a very interesting article about DOM-caching in angular:  [http://blog.scalyr.com/2013/10/31/angularjs-1200ms-to-35ms/](http://blog.scalyr.com/2013/10/31/angularjs-1200ms-to-35ms/)

To bind html instead of just text (but the input still gets sanitized, so the script tags will be removed), you have to use `ng-bind-html` and trust the input using [http://docs.angularjs.org/api/ng.$sceDelegateProvider](http://docs.angularjs.org/api/ng.$sceDelegateProvider).resourceUrlWhitelist(['self',...]);

Have a look at the Batarang Chrome extension, which creates a special tab in Chrome Developper tools to debug your AngularJS App (and shows which parts aren't performant) [https://chrome.google.com/webstore/detail/angularjs-batarang/ighdmehidhipcmcojjgiloacoafjmpfk](https://chrome.google.com/webstore/detail/angularjs-batarang/ighdmehidhipcmcojjgiloacoafjmpfk)


## Advanced features (you choose which one you'd like to see)

- Grouping items by type: vegetables, meat, fish, ...   --- *uses relationships*
- Creating multiple lists                               --- *uses nested resources URL: lists/5/items*

## More advanced features

- Laravel API security                                  --- *uses filters*
- Rate limiting                                         --- *uses filters*

# What I did step by step



- running composer [done]
- importing vendor files in public/js/vendor [done]
- importing jeffrey ways generator tool: https://github.com/JeffreyWay/Laravel-4-Generators [done]
- run command: php artisan generate:scaffold item --fields="name:string,number:int,checked:boolean" [done]
- run migration and seeding [done]




